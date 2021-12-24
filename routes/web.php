<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserChatController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\EmailVerficationController;
use App\Http\Controllers\RequestController;
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
  
    return view('frontend.index');
});

Route::get('home', function () {
     
    return view('frontend.index');
})->name('home');

Route::get('requests', function () {
    return view('frontend.RequestsPage');
})->name('requests');

Route::get('serviceprovider', function () {
    return view('frontend.ServiceProviders');
})->name('serviceproviders');
 
Route::get('publishrequest', function () {
    return view('frontend.PublishRequest');
})->name('publishrequest');  

Route::get('realizeYourProject', function () {
    return view('frontend.realizeYourProject');
})->name('realizeYourProject');  

Route::get('requestsPage', function () {
    return view('frontend.requestsPage');
})->name('requestsPage');  

Route::get('professionalProfile', function () {
    return view('frontend.professionalProfile');
})->name('professionalProfile');  




// Auth::routes();


Route::post('/userRegister', [UserController::class, 'userRegister'])->name('userRegister');  
Route::post('/userLogin', [AuthController::class, 'userLogin'])->name('userLogin');  
Route::get('/userDashboard', [HomeController::class, 'userDashboard'])->name('userDashboard');

Route::get('user-chat', [UserChatController::class, 'user_chat'])->name('user-chat');
 


Route::get('email-verification/{token}', [EmailVerficationController::class, 'email_verification'])->name('email-verification');



Route::post('email-opt-verfication', [EmailVerficationController::class, 'email_opt_verfication'])->name('email-opt-verfication');
 


Route::post('confirm-publish-save', [RequestController::class, 'confirm_publish_save'])->name('confirm-publish-save');


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('confirm-publish', [RequestController::class, 'confirm_publish'])->name('confirm-publish');



Route::get('validating-request', [RequestController::class, 'validating_request'])->name('validating-request');


Route::get('view-request', [RequestController::class, 'view_request'])->name('view-request');






Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});