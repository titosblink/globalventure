<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Hash;
use session;
use Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use App\Models\Userdetails as Userdetails;
use App\Models\Withrawal as Withrawal;
use App\Models\Mywallet as Mywallet;
use App\Models\Uploadfile as Uploadfile;

class ActionsController extends Controller
{
  
    public function submitwithdrawal(Request $req){
        try{
            $datas=$req->all();
          
            $email = Auth::user()->email;
            $fname = Auth::user()->name;
            $uname = Auth::user()->username;
            
            $walletid = $req->walletid;
            $acctbal = $req->acctbal;
            $amount = $req->amount;
            $dt = date('d-m-Y');
            
            if($amount>$acctbal){
              return back()->with('uploaderror', 'Your Account Balance must be greater than the amount you are requesting for');
            }else{
              $sss="not"; 
              $withdrawalreq = array(
                'email' => $email,
                'amount'=>$amount,
                'dated'=> $dt,
                'name'=> $fname,
                'username'=> $uname,
                'walletidtobepaid'=>$walletid,
                'status'=>$sss,
                
              );
                DB::table('withdrawalrequest')->insert($withdrawalreq);
                return back()->with('uploadsuccess','Request successfully submitted, your account will be credit in less than 30mins');

            }
        }catch(\Exception $exception){
          return back()->with('uploaderror','Sorry! Something is wrong');
        }
      }

      public function changepwd(Request $req){
        try{
            $datas=$req->all();
          
            $email = Auth::user()->email;

            
            $curpwd = $req->curpwd;
            $newpwd = $req->newpwd;
            $newpwdrepeat = $req->newpwdrepeat;
            $pword = app('hash')->make($newpwdrepeat);

            $idresult =  DB::table('users')->where('email',$email )->first();
            $pwordtocheck = $idresult->password;
            if(Hash::check($curpwd, $pwordtocheck)){
              if ($newpwd==$newpwdrepeat){
                $updated = Userdetails::where('email', $email)->update([
                  'password' => $pword
                ]);
                return back()->with('uploadsuccess', 'Record succesfully Updated');
              }else{
                return back()->with('uploaderror', 'Please confirm password');
              }
            }else{
              return back()->with('uploaderror', 'Old password is incorrect');
            }   
        }catch(\Exception $exception){
          return back()->with('uploaderror','Sorry! Something is wrong');
        }
      }

      public function updaterecord(Request $req){
        try{
            $datas=$req->all();
           
            $name = $req->name;
            $email = $req->email;
            $walletid = $req->walletid;

            $updated = Userdetails::where('email', $email)->update([
              'email' => $email,
              'name'=>$name,
              'walletid'=>$walletid
            ]);

            return back()->with('uploadsuccess', 'Record succesfully Updated');
               
        }catch(\Exception $exception){
          return back()->with('uploaderror','Sorry! Something is wrong');
        }
      } 
      public function registerr($refid){
        try{
          $data = array('refid'=>$refid);
          return view('registerr',$data);
        }catch(Exception $exception){
          return back()->with('uploaderror','Sorry! Something is wrong');
        }
      }
      public function registeruser(Request $req){
        try{
            $datas=$req->all();
           

            $name = $req->name;
            $email = $req->email;
            $username = $req->username;
            $walletid = $req->walletid;
            $referer = $req->referer; 
            $password = $req->password;
            $pword = app('hash')->make($password);
            $stat = "2";

            $SearchUser =  DB::table('users')->where('email',$email)->first();
            if($SearchUser){
                    return back()->with('uploaderror','Email Already Exist');
            }else{
                $RegisterUser = array(
                    'name' => $name,
                    'email' => $email,
                    'username'=>$username,
                    'walletid'=> $walletid,
                    'referer'=> $referer,
                    'password'=> $pword,
                    'status'=>$stat
                  );
                    DB::table('users')->insert($RegisterUser);
                    return back()->with('uploadsuccess','User successfully Created');
            }      
        }catch(Exception $exception){
          return back()->with('uploaderror','Sorry! Something is wrong');
        }
      }

      public function fundaccount(Request $req){
        try{
            $datas=$req->all();
            $sst = Auth::user()->status;
            $plan = $req->plan;
            $amount = $req->amount;
            $pmethod = $req->pmethod;
            $substype = $req->substype;
            $email = Auth::user()->email;
            
            if($pmethod=="BTC"){
              $fundaadress = "0x4152a4e1a788f75fd3e61383754e53604099adf6";
              $fundtype="BTC";
            }elseif($pmethod=="ETH"){
              $fundtype="ETH";
              $fundaadress = "0x4152a4e1a788f75fd3e61383754e53604099adf6";
            }elseif($pmethod=="USDT"){
              $fundtype="USDT";
              $fundaadress = "TVqjFVAz3AKRmQkPs7PFevUK1mK8FmNbNy";
            }elseif($pmethod=="TRON"){
                $fundtype="TRON";
                $fundaadress = "0x4152a4e1a788f75fd3e61383754e53604099adf6";
            }elseif($pmethod=="BCH"){
                $fundtype="BCH";
                $fundaadress = "0x4152a4e1a788f75fd3e61383754e53604099adf6";
            }else{
              $fundtype="BSC TETHER USDT";
              $fundaadress = "0x4152a4e1a788f75fd3e61383754e53604099adf6";

            }
              
            $cred = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
            $debt = Mywallet::where('email', $email)->where('transactiontype','Debit')->sum('amount');
            $mainbal = $cred - $debt;
            $SearchUser =  DB::table('users')->where('email',$email)->first();
            $uid = $SearchUser->username;
            if($pmethod=="Select Payment Method"){
              return back()->with('uploaderror', 'Select your payment method');
            }else{
              $data = array('mainbal'=>$mainbal,'sst'=>$sst,'fundtype'=>$fundtype, 'plan'=>$plan,'amount'=>$amount,'pmethod'=>$pmethod, 'substype'=>$substype, 'uid'=>$uid,'fundaadress'=>$fundaadress);
              return view('user.fundingdetails',$data);
            }
            
        }catch(\Exception $exception){
          return back()->with('uploaderror','Sorry! Something is wrong');
        }
      }

      public function earnmoney($id){
        try{
          $uid = Auth::user()->username;
          $email = Auth::user()->email;
          $sst = Auth::user()->status;
          $cred = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
          $debt = Mywallet::where('email', $email)->where('transactiontype','Debit')->sum('amount');
          $mainbal = $cred - $debt;
          $data = array('id'=>$id, 'uid'=>$uid, 'sst'=>$sst, 'mainbal'=>$mainbal);
          return view('user.earnmoney',$data);
        }catch(\Exception $exception){
          Log::error($exception);
          return back()->with('uploaderror','Sorry! Something is wrong with the file(s), please fill in all fields and select an image file to upload!');
        }
      }

      public function approvewith(Request $req){
        try{
          $datas=$req->all();

          
          $id = $req->id;
          $amount = $req->amount;
          $email = $req->email;
          $dt = date('d-m-Y');

          $updated = Withrawal::where('id', $id)->update([
            'status' => 'paid'
            ]);
            $RegisterDebit = array(
              'email' => $email,
              'amount'=> $amount,
              'transactiontype'=> "Debit",
              'dated'=> $dt,
            );
              DB::table('mywallet')->insert($RegisterDebit); 
            return back()->with('uploadsuccess','User successfully credited');
        }catch(\Exception $exception){
          Log::error($exception);
          return back()->with('uploaderror','Sorry! Something is wrong with the file(s), please fill in all fields and select an image file to upload!');
        }
      }

      public function blockusers($id){
        try{
          
          $uid = Auth::user()->username;
          $email = Auth::user()->email;
          $sst = Auth::user()->status;
          
          $updated = Userdetails::where('id', $id)->update([
            'status' => ""
          ]);
          $data = array('uid'=>$uid, 'sst'=>$sst);
          return back()->with('uploadsuccess','User successfully Blocked');
        }catch(\Exception $exception){
          Log::error($exception);
          return back()->with('uploaderror','Sorry! Something is wrong with the file(s), please fill in all fields and select an image file to upload!');
        }
      }


      public function cancelreceipt($canid){
        try{
          
          $uid = Auth::user()->username;
          $email = Auth::user()->email;
          $sst = Auth::user()->status;
          
          $updated = Uploadfile::where('id', $canid)->update([
            'status' => "funded"
          ]);
          $data = array('uid'=>$uid, 'sst'=>$sst);
          return back()->with('uploadsuccess','Fund successfully Cancel');
        }catch(\Exception $exception){
          Log::error($exception);
          return back()->with('uploaderror','Sorry! Something is wrong');
        }
      }

      public function viewuserdetials($id){
        try{
          
          $uid = Auth::user()->username;
          $email = Auth::user()->email;
          $sst = Auth::user()->status;
          $cred = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
          $debt = Mywallet::where('email', $email)->where('transactiontype','Debit')->sum('amount');
          $mainbal = $cred - $debt;

          $email = Auth::user()->email;
          $SearchUser =  DB::table('users')->where('email',$email)->first();
          $uid = $SearchUser->username;
          $sst = Auth::user()->status;

          $SearchWithrawal = Withrawal::all()->where('status','not');
          $SearchUserdetails = Uploadfile::all()->where('status','not funded');
          
          $Userdetialsdata = Userdetails::where('id', $id)->first();
          
          $UserdetialsdataWalletid = $Userdetialsdata->walletid;
          $UserdetialsdataName = $Userdetialsdata->name;
          $UserdetialsdataUsername = $Userdetialsdata->username;
          $UserdetialsdataId = $Userdetialsdata->id;
          
          $UserdetialsdataEmail = $Userdetialsdata->email;

          $credEmail = Mywallet::where('email', $UserdetialsdataEmail)->where('transactiontype','Credit')->sum('amount');
          $debtEmail = Mywallet::where('email', $UserdetialsdataEmail)->where('transactiontype','Debit')->sum('amount');
          $mainbalEmail = $credEmail - $debtEmail;

          $TransactionHistory = Mywallet::where('email', $UserdetialsdataEmail)->get();

          $data = array('UserdetialsdataId'=>$UserdetialsdataId,'debtEmail'=>$debtEmail, 'credEmail'=>$credEmail, 'TransactionHistory'=>$TransactionHistory,'UserdetialsdataName'=>$UserdetialsdataName,'UserdetialsdataUsername'=>$UserdetialsdataUsername, 'UserdetialsdataWalletid'=>$UserdetialsdataWalletid,'email'=>$email,'UserdetialsdataEmail'=>$UserdetialsdataEmail, 'mainbalEmail'=>$mainbalEmail, 'uid'=>$uid,'mainbal'=>$mainbal, 'sst'=>$sst, 'SearchWithrawal'=>$SearchWithrawal, 'SearchUserdetails'=>$SearchUserdetails);
            
          return view('user.viewuserdetials',$data);
        }catch(\Exception $exception){
          Log::error($exception);
          return back()->with('uploaderror','Sorry! Something is wrong with the file(s), please fill in all fields and select an image file to upload!');
        }
      }

      

      
      public function uploadreceipt(Request $req){
    
        try{
            $datas=$req->all();
        
            $uid = Auth::user()->username;
            $email = Auth::user()->email;
            $sst = Auth::user()->status;
            $amount = $req->amount;
            $dt = date('d-m-Y');
           
            if (File::exists($req->filereceipt)) {
              $mycommandpix=$datas['filereceipt'];
              $fileExtcheck = $mycommandpix->extension();
              if ($fileExtcheck=="jpg" || $fileExtcheck=="jpeg" || $fileExtcheck=="png" || $fileExtcheck=="pdf"){
                $destinationcheck = base_path() . '/public/uploadreciept/';
                $xmlrealfilecheck = $mycommandpix->getClientOriginalName();
                $mycommandpix->move($destinationcheck, $xmlrealfilecheck);

                $UploadReceipt = array(
                  'email' => $email,
                  'amount'=> $amount,
                  'filetoupload'=> $xmlrealfilecheck,
                  'dated'=> $dt,
                  'status'=>'not funded'
                );
                  DB::table('uploadreceipt')->insert($UploadReceipt); 
                  $cred = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
                  $debt = Mywallet::where('email', $email)->where('transactiontype','Debit')->sum('amount');
                  $mainbal = $cred - $debt;
                  
                  $data = array('email'=>$email, 'uid'=>$uid,'sst'=>$sst,'mainbal'=>$mainbal);
                  return view('user.dashboard',$data);

              }else{
                DB::table('uploadreceipt')->insert($UploadReceipt); 
                  $cred = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
                  $debt = Mywallet::where('email', $email)->where('transactiontype','Debit')->sum('amount');
                  $mainbal = $cred - $debt;

                  $data = array('email'=>$email, 'uid'=>$uid,'sst'=>$sst,'mainbal'=>$mainbal);
                  return view('user.dashboard',$data);
              }
    
            }else{
              DB::table('uploadreceipt')->insert($UploadReceipt); 
                  $cred = Mywallet::where('email', $email)->where('transactiontype','Credit')->sum('amount');
                  $debt = Mywallet::where('email', $email)->where('transactiontype','Debit')->sum('amount');
                  $mainbal = $cred - $debt;

                  $data = array('email'=>$email, 'uid'=>$uid,'sst'=>$sst,'mainbal'=>$mainbal);
                  return view('user.dashboard',$data);
            }
        }catch(Exception $exception){
                Log::error($exception);
                return back()->with('resetfail','please fill in all fields!');
              }
      }
      
      public function funduserreceipt(Request $req){
        try{
          $datas=$req->all();
          $uid = Auth::user()->username;
          $email = Auth::user()->email;
          $sst = Auth::user()->status;

            

          $amount = $req->amount;
          $emailuser = $req->email;
          $id = $req->id;
          $dt = date('d-m-Y');

          
          $updated = Uploadfile::where('id', $id)->update([
            'status' => "funded"
          ]);
         

          $Updwallet = array(
            'email' => $emailuser,
            'amount'=> $amount,
            'transactiontype'=> 'Credit',
            'dated'=> $dt
          );
            DB::table('mywallet')->insert($Updwallet); 

          $data = array('uid'=>$uid, 'sst'=>$sst);
          return back()->with('uploadsuccess2','User successfully Funded');
        }catch(\Exception $exception){
          Log::error($exception);
          return back()->with('uploaderror','Sorry! Something is wrong with the file(s), please fill in all fields and select an image file to upload!');
        }
      }

      public function funduser(Request $req){
        try{

          $datas=$req->all();
          $uid = Auth::user()->username;
          $email = Auth::user()->email;
          $sst = Auth::user()->status;
          $dt = date('d-m-Y');

          $amount = $req->amt;
          $fundval = $req->fundval;
          $id = $req->id;

          $idresultEmail =  DB::table('users')->where('id',$id )->first()->email;

          if($amount==""){
            return back()->with('uploaderror','Please enter an amount');
          }else{
           
            if($fundval=="Add fund"){
              $funDwallet = array(
                'email' => $idresultEmail,
                'amount'=> $amount,
                'transactiontype'=> 'Credit',
                'dated'=> $dt
              );
                DB::table('mywallet')->insert($funDwallet); 
                return back()->with('uploadsuccess','Funded successfully added');
            }else{
              $funDwallet = array(
                'email' => $idresultEmail,
                'amount'=> $amount,
                'transactiontype'=> 'Debit',
                'dated'=> $dt
              );
                DB::table('mywallet')->insert($funDwallet); 
                return back()->with('uploadsuccess','Funded successfully Debited');
            }
          }
          
          // $data = array('uid'=>$uid, 'sst'=>$sst);
          // return back()->with('uploadsuccess2','User successfully Funded');
        }catch(\Exception $exception){
          Log::error($exception);
          return back()->with('uploaderror','Sorry! Something is wrong');
        }
      }
      
}
