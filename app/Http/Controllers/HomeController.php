<?php

namespace App\Http\Controllers;

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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try{
        $stat = Auth::user()->status;
        $email = Auth::user()->email;
        $password = Auth::user()->password;
 
        if($stat == "2"){
            $email = Auth::user()->email;
            $SearchUser =  DB::table('users')->where('email',$email)->first();
            $uid = $SearchUser->username;
            $sst = Auth::user()->status;

            $cred = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
            $debt = Mywallet::where('email', $email)->where('transactiontype','Debit')->sum('amount');
            $mainbal = $cred - $debt;

            $data = array('email'=>$email, 'uid'=>$uid,'sst'=>$sst,'mainbal'=>$mainbal);
            return view('user.dashboard',$data);
            
        }elseif($stat == "1"){

            $email = Auth::user()->email;
            $SearchUser =  DB::table('users')->where('email',$email)->first();
            $uid = $SearchUser->username;
            $sst = Auth::user()->status;

            $SearchWithrawal = Withrawal::all()->where('status','not');
            $SearchUserdetails = Uploadfile::all()->where('status','not funded');
          
 
            $data = array('email'=>$email, 'uid'=>$uid, 'sst'=>$sst, 'SearchWithrawal'=>$SearchWithrawal, 'SearchUserdetails'=>$SearchUserdetails);
            return view('user.dashboard2',$data);
        }else{
            return back()->with('loginerror','Email or Username does not exist'); 
        }
        }catch(\Exception $exception){
            return back()->with('pageerror','Page unable to display');
        }
    }
}


