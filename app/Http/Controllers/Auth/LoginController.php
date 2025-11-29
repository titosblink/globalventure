<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use DB;
use Auth;
use Hash;
use session;
use Log;
use Carbon;

use App\Models\Withrawal as Withrawal;
use App\Models\Mywallet as Mywallet;
use App\Models\Userdetails as Userdetails;
use App\Models\Uploadfile as Uploadfile;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    { 
        try{
        $stat = "2";
        $stat1 = "1";
        $check1 = Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status'=>$stat]);
        $check2 = Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status'=>$stat1]);
        if($check1){
            $email = Auth::user()->email;

            $cred = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
            
            $debt = Mywallet::where('email', $email)->where('transactiontype','Debit')->sum('amount');
            $mainbal = $cred - $debt;


            $SearchUser =  DB::table('users')->where('email',$email)->first();
            $uid = $SearchUser->username;
            $sst = Auth::user()->status;
            $data = array('email'=>$email, 'uid'=>$uid, 'sst'=>$sst, 'mainbal'=>$mainbal);
            return view('user.dashboard',$data);
        }elseif(($check2)){
            $email = Auth::user()->email;
            $sst = Auth::user()->status;
            
            // $SearchWithrawal = Withrawal::all();
            
            $SearchWithrawal = Withrawal::all()->where('status','not');
            $SearchUserdetails = Uploadfile::all()->where('status','not funded');
            $SearchUser =  DB::table('users')->where('email',$email)->first();
            $uid = $SearchUser->username;
            $data = array('email'=>$email, 'uid'=>$uid, 'sst'=>$sst,'SearchWithrawal'=>$SearchWithrawal, 'SearchUserdetails'=>$SearchUserdetails);
            return view('user.dashboard2',$data);
        }else{
            return back()->with('loginerror','Email or Username does not exist'); 
        }
    }catch(\Exception $exception){
        return back()->with('pageerror','Page unable to display');
    }
    }
}
