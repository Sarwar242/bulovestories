<?php

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
Route::get('/', 'bulovestoriesController@index')->name('index');
Route::get('/topstories', 'bulovestoriesController@topstories')->name('topstories');

Route::get('/faq', 'bulovestoriesController@faq')->name('faq');
Route::get('/about', 'bulovestoriesController@about')->name('about');
Route::get('/confessions', 'bulovestoriesController@confessions')->name('confessions');

Route::group(['middleware' => 'AuthenticateMiddleware'], function () {
    Route::get('/sharestory', 'bulovestoriesController@sharestory')->name('sharestory');
    Route::get('/dashboard', 'bulovestoriesController@dashboard')->name('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/token/{token}', 'auth\VerificationController2@verify')->name('user.verification');

/* Functionalities */

Route::post('/sharestory/{id}', 'StoryController@store')->name('store');
Route::get('/editstory/{id}', 'StoryController@editstory')->name('editstory');
Route::post('/updatestory/{id}', 'StoryController@updatestory')->name('updatestory');
Route::get('/editprofile/{id}', 'UserController@editprofile')->name('editprofile');
Route::post('/updateprofile/{id}', 'UserController@update')->name('updateprofile');
Route::post('/deletestory/{id}', 'StoryController@delete')->name('deletestory');

/*Admin Routes*/

Route::group(['prefix' => '/admin'], function () {
    Route::get('/', 'Backend\AdminsController@homeadmin')->name('homeadmin');
    Route::get('/confessions', 'Backend\AdminsController@confessionpage')->name('confessionpage');
    Route::get('/admins', 'Backend\AdminsController@admins')->name('admins');
    Route::get('/members', 'Backend\AdminsController@members')->name('members');

    // Admin Login
    Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')
        ->name('admin.login');
    Route::post('/login/submit', 'Auth\Admin\LoginController@login')
        ->name('admin.login.submit');
    // Admin Logout

    Route::post('/logout', 'Auth\Admin\LoginController@logout')
        ->name('admin.logout');

    //Admin Password Reset

    Route::post('/password/email', 'Auth\Admin\ForgotPasswordController@sendResetLinkEmail')
        ->name('admin.password.email');
    Route::post('/password/reset', 'Auth\Admin\ResetPasswordController@reset')
        ->name('admin.password.update');

    Route::get('/password/reset', 'Auth\Admin\ForgotPasswordController@showLinkRequestForm')
        ->name('admin.password.request');
    Route::get('/password/reset/{token}', 'Auth\Admin\ResetPasswordController@showResetForm')
        ->name('admin.password.reset');

});