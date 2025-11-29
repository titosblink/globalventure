<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Carbon\Carbon;

use App\Models\Mywallet as Mywallet;
use App\Models\Userdetails as Userdetails;
use App\Models\Uploadfile as Uploadfile;




class NavigationController extends Controller
{
    public function aboutus(){
        try{           
           
            return view('about');
        }catch(\Exception $exception){
            return back()->with('pageerror','Page unable to display');
        }
    }

    public function services(){
        try{           
           
            return view('services');
        }catch(\Exception $exception){
            return back()->with('pageerror','Page unable to display');
        }
    }

    public function contact(){
        try{           
           
            return view('contact');
        }catch(\Exception $exception){
            return back()->with('pageerror','Page unable to display');
        }
    }

    public function editprofile(){
        try{           
            
            return view('user.editprofile');
        }catch(\Exception $exception){
            return back()->with('pageerror','Page unable to display');
        }
    }

    public function changepassword(){
        try{           
           
            return view('user.changepassword');
        }catch(\Exception $exception){
            return back()->with('pageerror','Page unable to display');
        }
    }

    public function withdraw(){
        try{           
            $email = Auth::user()->email;
            $SearchUser =  DB::table('users')->where('email',$email)->first();
            $SearchAcctBalC = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
            $SearchAcctBalD = Mywallet::where('email', $email)->where('transactiontype','Debit')->sum('amount');
            $SearchAcctBal = $SearchAcctBalC - $SearchAcctBalD;

            $cred = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
            $debt = Mywallet::where('email', $email)->where('transactiontype','Debit')->sum('amount');
            $mainbal = $cred - $debt;
            
            
            $sst = Auth::user()->status;
            $uid = $SearchUser->username;
            $data = array('uid'=>$uid, 'SearchAcctBal'=>$SearchAcctBal, 'sst'=>$sst, 'mainbal'=>$mainbal);
            return view('user.withdraw',$data);
        }catch(\Exception $exception){
            return back()->with('pageerror','Page unable to display');
        }
    }

    public function referer(){
        try{          
             
            $email = Auth::user()->email;
            $ref = Auth::user()->username;
            $SearchUser =  DB::table('users')->where('email',$email)->first();
            $SearchAcctBal = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
            $SearchRef = Userdetails::where('referer', $ref)->get();
            $uid = $SearchUser->username;
            $sst = Auth::user()->status;
            $cred = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
            $debt = Mywallet::where('email', $email)->where('transactiontype','Debit')->sum('amount');
            $mainbal = $cred - $debt;
            $data = array('sst'=>$sst,'uid'=>$uid, 'SearchAcctBal'=>$SearchAcctBal, 'SearchRef'=>$SearchRef,'mainbal'=>$mainbal);
            return view('user.referer',$data);
        }catch(Exception $exception){
            return back()->with('pageerror','Page unable to display');
        }
    }

    
    public function faq(){
        try{           
           
            return view('faq');
        }catch(\Exception $exception){
            return back()->with('pageerror','Page unable to display');
        }
    }

    public function login(){
        try{           
           
            return view('login');
        }catch(\Exception $exception){
            return back()->with('pageerror','Page unable to display');
        }
    }

    public function terms(){
        try{           
           
            return view('terms');
        }catch(\Exception $exception){
            return back()->with('pageerror','Page unable to display');
        }
    }

    public function pricing(){
        try{           
           
            return view('pricing');
        }catch(\Exception $exception){
            return back()->with('pageerror','Page unable to display');
        }
    }

    public function priciing(){
        try{           
            $email = Auth::user()->email;
            $SearchUser =  DB::table('users')->where('email',$email)->first();
            $sst = Auth::user()->status;
            $cred = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
            $debt = Mywallet::where('email', $email)->where('transactiontype','Debit')->sum('amount');
            $mainbal = $cred - $debt;
            $uid = $SearchUser->username;
            $data = array('sst'=>$sst, 'uid'=>$uid, 'mainbal'=>$mainbal);
            return view('user.priciing',$data);
        }catch(\Exception $exception){
            return back()->with('pageerror','Page unable to display');
        }
    }

    public function register(){
        try{           
           
            return view('register');
        }catch(\Exception $exception){
            return back()->with('pageerror','Page unable to display');
        }
    }

    public function resetpassword(){
        try{           
           
            return view('resetpassword');
        }catch(\Exception $exception){
            return back()->with('pageerror','Page unable to display');
        }
    }

    public function accounts(){
        try{           
            $email = Auth::user()->email;
            $ref = Auth::user()->username;
            $countRef = Userdetails::where('referer', $ref)->count();

            $SearchAcctBalC = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
            $SearchAcctBalD = Mywallet::where('email', $email)->where('transactiontype','Debit')->sum('amount');
            $SearchAcctBal = $SearchAcctBalC - $SearchAcctBalD;
            
            $SearchAcctBalCbal = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
            
            $SearchLastWit = Mywallet::where('email', $email)->where('transactiontype','Debit')->first();
            if($SearchLastWit===null){
                $SearchLastWith = "0";
            }else{
                $SearchLastWith = Mywallet::where('email', $email)->where('transactiontype','Debit')->first()->amount;

            }

            $SearchLastWit2 = Mywallet::where('email', $email)->where('transactiontype','Credit')->first();
            if($SearchLastWit2===null){
                $SearchLastWith2 = "0";
            }else{
                $SearchLastWith2 = Mywallet::where('email', $email)->where('transactiontype','Credit')->first()->amount;

            }

            $cred = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
            $debt = Mywallet::where('email', $email)->where('transactiontype','Debit')->sum('amount');
            $mainbal = $cred - $debt;
            // $SearchLastWith2 = Mywallet::where('email', $email)->where('transactiontype','Credit')->first()->amount;

            $SearchUser =  DB::table('users')->where('email',$email)->first();
            $sst = Auth::user()->status;
            $rebonus = $countRef * 5;
            $uid = $SearchUser->username;
            $data = array('mainbal'=>$mainbal,'SearchAcctBalCbal'=>$SearchAcctBalCbal,'SearchLastWith2'=>$SearchLastWith2, 'SearchLastWith'=>$SearchLastWith, 'uid'=>$uid, 'countRef'=>$countRef, 'rebonus'=>$rebonus,'sst'=>$sst,'SearchAcctBal'=>$SearchAcctBal);
            return view('user.accounts',$data);
        }catch(\Exception $exception){
            return back()->with('pageerror','Page unable to display');
        }
    }



    public function searchuser(Request $req){
        try{       
            $datas=$req->all();
            $uname = $req->uname;
            
            $GetUser = Userdetails::where('username', $uname)->first();
            $GetUserEmail = $GetUser->email;
            
            $cred = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
            $debt = Mywallet::where('email', $email)->where('transactiontype','Debit')->sum('amount');
            $mainbal = $cred - $debt;

            $email = Auth::user()->email;
            $ref = Auth::user()->username;

            $GetTotalCredit = Mywallet::where('email', $GetUserEmail)->where('transactiontype','Credit')->sum('amount');
            
            $GetTotalDebit = Mywallet::where('email', $GetUserEmail)->where('transactiontype','Debit')->sum('amount');
            $GetAccountBalance = $GetTotalCredit - $GetTotalDebit;
            
            $SearchUser =  DB::table('users')->where('email',$email)->first();
            $sst = Auth::user()->status;
            
            $uid = $SearchUser->username;
            $data = array('mainbal'=>$mainbal, 'sst'=>$sst,'GetUser'=>$GetUser, 'GetTotalCredit'=>$GetTotalCredit, 'GetTotalDebit'=>$GetTotalDebit, 'uid'=>$uid, 'GetAccountBalance'=>$GetAccountBalance);
            return view('user.searchuser',$data);
        }catch(\Exception $exception){
            return back()->with('pageerror','Page unable to display');
        }
    }

    public function viewusers(){
        try{       
            
            $email = Auth::user()->email;
            $ref = Auth::user()->username;
            $countRef = Userdetails::where('referer', $ref)->count();

            $SearchAcctBalC = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
            $SearchAcctBalD = Mywallet::where('email', $email)->where('transactiontype','Debit')->sum('amount');
            $SearchAcctBal = $SearchAcctBalC - $SearchAcctBalD;
            
            $SearchAcctBalCbal = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
            
            $SearchLastWit = Mywallet::where('email', $email)->where('transactiontype','Debit')->first();
            if($SearchLastWit===null){
                $SearchLastWith = "0";
            }else{
                $SearchLastWith = Mywallet::where('email', $email)->where('transactiontype','Debit')->first()->amount;

            }

            $SearchLastWit2 = Mywallet::where('email', $email)->where('transactiontype','Credit')->first();
            if($SearchLastWit2===null){
                $SearchLastWith2 = "0";
            }else{
                $SearchLastWith2 = Mywallet::where('email', $email)->where('transactiontype','Credit')->first()->amount;

            }

            $cred = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
            $debt = Mywallet::where('email', $email)->where('transactiontype','Debit')->sum('amount');
            $mainbal = $cred - $debt;
            // $SearchLastWith2 = Mywallet::where('email', $email)->where('transactiontype','Credit')->first()->amount;
            $viewallusers = Userdetails::where('status','2')->get();
            // return $viewallusers;
            
            $SearchUser =  DB::table('users')->where('email',$email)->first();
            $sst = Auth::user()->status;
            $rebonus = $countRef * 5;
            $uid = $SearchUser->username;
            $data = array('viewallusers'=>$viewallusers,'mainbal'=>$mainbal,'SearchAcctBalCbal'=>$SearchAcctBalCbal,'SearchLastWith2'=>$SearchLastWith2, 'SearchLastWith'=>$SearchLastWith, 'uid'=>$uid, 'countRef'=>$countRef, 'rebonus'=>$rebonus,'sst'=>$sst,'SearchAcctBal'=>$SearchAcctBal);
            return view('user.viewusers',$data);
        }catch(Exception $exception){
            return back()->with('pageerror','Page unable to display');
        }
    }
    
}
