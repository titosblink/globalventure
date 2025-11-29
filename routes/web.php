<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\ActionsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutus', [NavigationController::class,'aboutus']);
Route::get('/services', [NavigationController::class,'services']);
Route::get('/contact', [NavigationController::class,'contact']);
Route::get('/faq', [NavigationController::class,'faq']);
Route::get('/logins', [NavigationController::class,'login']);
Route::get('/pricing', [NavigationController::class,'pricing']);
Route::get('/priciing', [NavigationController::class,'priciing']);
Route::get('/registers', [NavigationController::class,'register']);
Route::get('/resetpassword', [NavigationController::class,'resetpassword']);
Route::get('/terms', [NavigationController::class,'terms']);
Route::get('/editprofile', [NavigationController::class,'editprofile']);
Route::get('/changepassword', [NavigationController::class,'changepassword']);
Route::get('/withdraw', [NavigationController::class,'withdraw']);
Route::get('/referer', [NavigationController::class,'referer']);
Route::get('/accounts', [NavigationController::class,'accounts']);
Route::get('/viewusers', [NavigationController::class,'viewusers']);
Route::post('/approvewith', [ActionsController::class,'approvewith']);
Route::post('/uploadreceipt', [ActionsController::class,'uploadreceipt']);
Route::post('/funduser', [ActionsController::class,'funduser']);
Route::get('/viewuserdetials/{id}', [ActionsController::class,'viewuserdetials']);
Route::get('/registerr/{refid}', [ActionsController::class,'registerr']);
Route::get('/cancelreceipt/{canid}', [ActionsController::class,'cancelreceipt']);
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/earnmoney/{id}', [ActionsController::class,'earnmoney']);
Route::get('/blockusers/{id}', [ActionsController::class,'blockusers']);
Route::post('/funduserreceipt', [ActionsController::class,'funduserreceipt']);
Route::post('/registeruser', [ActionsController::class,'registeruser']);
Route::post('/updaterecord', [ActionsController::class,'updaterecord']);
Route::post('/changepwd', [ActionsController::class,'changepwd']);
Route::post('/fundaccount', [ActionsController::class,'fundaccount']);
Route::post('/submitwithdrawal', [ActionsController::class,'submitwithdrawal']);
Route::post('/searchuser', [NavigationController::class,'searchuser']);
