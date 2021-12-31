<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserChatController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\EmailVerficationController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublishRequestController;



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



Route::get('serviceprovider', function () {
    return view('frontend.ServiceProviders');
})->name('serviceproviders');
 


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


Route::get('requests', [RequestController::class, 'requests'])->name('requests');


Route::post('/userRegister', [UserController::class, 'userRegister'])->name('userRegister'); 
 
Route::post('/userLogin', [AuthController::class, 'userLogin'])->name('userLogin');  
Route::get('/userDashboard', [HomeController::class, 'userDashboard'])->name('userDashboard');

Route::get('user-chat', [UserChatController::class, 'user_chat'])->name('user-chat');
 


Route::get('publishrequest', [PublishRequestController::class, 'publishrequest'])->name('publishrequest');
 


Route::get('email-verification/{token}', [EmailVerficationController::class, 'email_verification'])->name('email-verification');



Route::post('email-opt-verfication', [EmailVerficationController::class, 'email_opt_verfication'])->name('email-opt-verfication');
 


Route::post('confirm-publish-save', [RequestController::class, 'confirm_publish_save'])->name('confirm-publish-save');


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('confirm-publish/{id}', [RequestController::class, 'confirm_publish'])->name('confirm-publish');



Route::get('validating-request', [RequestController::class, 'validating_request'])->name('validating-request');


Route::get('view-request', [RequestController::class, 'view_request'])->name('view-request');



Route::get('my-request', [RequestController::class, 'my_request'])->name('my-request');




Route::get('myfavourites-neighbor', [RequestController::class, 'myfavourites_neighbor'])->name('myfavourites-neighbor');

Route::post('email-Verification-opt', [UserController::class, 'email_Verification_opt'])->name('email-Verification-opt');



Route::get('my-favourite-request', [RequestController::class, 'my_favourite_request'])->name('my-favourite-request');



Route::get('chat', [RequestController::class, 'chat'])->name('chat');




Route::get('mobile-chat-message', [RequestController::class, 'mobile_chat_message'])->name('mobile-chat-message');




Route::get('mobile-chat-profile', [RequestController::class, 'mobile_chat_profile'])->name('mobile-chat-profile');



Route::get('pink-leave-review', [RequestController::class, 'pink_leave_review'])->name('pink-leave-review');




Route::get('modify-personal-info', [RequestController::class, 'modify_personal_info'])->name('modify-personal-info');




Route::get('change-password', [RequestController::class, 'change_password'])->name('change-password');

Route::get('modify-categories', [RequestController::class, 'modify_categories'])->name('modify-categories');



Route::get('modify-categories-edit', [RequestController::class, 'modify_categories_edit'])->name('modify-categories-edit');



Route::get('modify-distance', [RequestController::class, 'modify_distance'])->name('modify-distance');



Route::get('change-language', [RequestController::class, 'change_language'])->name('change-language');




Route::get('view-detail', [RequestController::class, 'view_detail'])->name('view-detail');





Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});




Route::group(['prefix' => 'user',  'middleware' => ['can:user']], function()
{


 Route::post('user-confirm-publish-save', [RequestController::class, 'user_confirm_publish_save'])->name('user-confirm-publish-save');


 Route::post('user-confirm-published-save', [RequestController::class, 'user_confirm_published_save'])->name('user-confirm-published-save');



       });








Route::group(['prefix' => 'admin',  'middleware' => ['can:admin']], function()
{


    Route::get('admin-home', [AdminController::class, 'admin_home'])->name('admin-home');

   Route::get('category-list', [AdminController::class, 'category_list'])->name('category-list');

Route::get('admin-add-new-category', [AdminController::class, 'admin_add_new_category'])->name('admin-add-new-category');


Route::post('admin-category-save', [AdminController::class, 'admin_category_save'])->name('admin-category-save');



Route::get('admin-category-edit/{id}', [AdminController::class, 'admin_category_edit'])->name('admin-category-edit');




Route::post('admin-category-update', [AdminController::class, 'admin_category_update'])->name('admin-category-update');



Route::get('admin-category-delete/{id}', [AdminController::class, 'admin_category_delete'])->name('admin-category-delete');



Route::get('sub-category-list', [AdminController::class, 'sub_category_list'])->name('sub-category-list');




Route::get('add-new-subcategory', [AdminController::class, 'add_new_subcategory'])->name('add-new-subcategory');




Route::post('admin-subcategory-save', [AdminController::class, 'admin_subcategory_save'])->name('admin-subcategory-save');



Route::get('admin-subcategory-edit/{id}', [AdminController::class, 'admin_subcategory_edit'])->name('admin-subcategory-edit');

Route::post('admin-subcategory-update', [AdminController::class, 'admin_subcategory_update'])->name('admin-subcategory-update');



Route::get('admin-subcategory-delete/{id}', [AdminController::class, 'admin_subcategory_delete'])->name('admin-subcategory-delete');



Route::get('user-list', [AdminController::class, 'user_list'])->name('user-list');




Route::get('admin-add-new-user', [AdminController::class, 'admin_add_new_user'])->name('admin-add-new-user');



Route::post('admin-user-save', [AdminController::class, 'admin_user_save'])->name('admin-user-save');



Route::get('admin-user-edit/{id}', [AdminController::class, 'admin_user_edit'])->name('admin-user-edit');



Route::post('admin-user-update', [AdminController::class, 'admin_user_update'])->name('admin-user-update');



Route::get('admin-user-delete/{id}', [AdminController::class, 'admin_user_delete'])->name('admin-user-delete');



Route::get('publish-request-list', [PublishRequestController::class, 'publish_request_list'])->name('publish-request-list');



Route::get('admin-request-approve/{id}', [PublishRequestController::class, 'admin_request_approve'])->name('admin-request-approve');


Route::get('admin-request-disapprove/{id}', [PublishRequestController::class, 'admin_request_disapprove'])->name('admin-request-disapprove');



Route::get('admin-publish-request-delete/{id}', [PublishRequestController::class, 'admin_publish_request_delete'])->name('admin-publish-request-delete');









    });


