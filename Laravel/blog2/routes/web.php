<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\AddMemberController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MemberContoller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::view('login', 'login');
Route::post('user',[UserAuth::class,'userLogin'] );
Route::view('profile', 'profile');
Route::get('profile/vie', function(){
    App::setlocale('vie');
    return view('profile');
});
Route::get('profile/en', function(){
    App::setlocale('en');
    return view('profile');
});
Route::get('/login', function () {
    if(session()->has('user')){
       return redirect('profile');
    }
    return view('login');
});
Route::get('/logout', function () {
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('login');
});


$prefix = 'admin123';
Route::prefix($prefix)->group(function () {

    //==================================dashboard================================================
    $prefix = 'dashboard';
    Route::prefix($prefix)->group(function (){
        Route::get('/',[DashboardController::class,'index']);
        
    });

    //=================================login====================================================
    route::get('/login',['as'=>'login',function (){
        return view('admin.dashboard.login');
    }]);

    Route::post('postForm',['as'=>'postForm','uses'=>[DashboardController::class,'loginForm']]);
});

Route::view('addMember', 'add');

Route::post('member',[AddMemberController::class,'addMember']);

Route::view('upload', 'upload');

Route::post('uploadFile',[UploadController::class,'uploadFile']);

Route::get('list',[MemberContoller::class,'show']);

Route::view('/addmember','addMember');

Route::post('add',[MemberContoller::class,'add']);

Route::get('/delete/{id}',[MemberContoller::class,'delete']);

Route::get('/update/{id}',[MemberContoller::class,'showData']);

Route::post('update',[MemberContoller::class,'update']);