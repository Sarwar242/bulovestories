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
Route::get('/notice', 'bulovestoriesController@notices')->name('notice');

Route::group(['middleware' => 'AuthenticateMiddleware'], function () {
    Route::get('/sharestory', 'bulovestoriesController@sharestory')->name('sharestory');
    Route::get('/dashboard', 'bulovestoriesController@dashboard')->name('dashboard');

    //React & Follow Functionalities

    Route::post('love/{story_id}', 'API\ReactsController@store')->name('story.love');

});

Auth::routes();
Route::get('/token/{token}', 'auth\VerificationController2@verify')->name('user.verification');

/* Functionalities */

Route::post('/sharestory/{id}', 'StoryController@store')->name('store');
Route::get('/readmore/{id}', 'StoryController@readmore')->name('readmore');
Route::get('/newsfeed/{id}', 'StoryController@newsfeed')->name('newsfeed');
Route::get('/editstory/{id}', 'StoryController@editstory')->name('editstory');
Route::post('/updatestory/{id}', 'StoryController@updatestory')->name('updatestory');
Route::get('/editprofile/{id}', 'UserController@editprofile')->name('editprofile');
Route::post('/updateprofile/{id}', 'UserController@update')->name('updateprofile');
Route::post('/deletestory/{id}', 'StoryController@delete')->name('deletestory');

/*Admin Routes*/

Route::group(['prefix' => '/admin'], function () {
    Route::get('/', 'Backend\AdminsController@homeadmin')->name('homeadmin');
    Route::get('/post', 'Backend\NoticeController@store')->name('admin.post');
    Route::post('/post', 'Backend\NoticeController@insert')->name('admin.post.insert');

    Route::get('/admins', 'Backend\AdminsController@admins')->name('admins');
    Route::get('/members', 'Backend\AdminsController@members')->name('members');
    Route::get('/inactivemembers', 'Backend\AdminsController@inactivemembers')->name('inactivemembers');
    Route::get('/review', 'Backend\AdminsController@review')->name('review');
    Route::get('/reviewed', 'Backend\AdminsController@reviewed')->name('reviewed');
    Route::get('/fullstory/{id}', 'Backend\AdminsController@fullstory')
        ->name('admin.fullstory');
    Route::get('/fullstoryreviewed/{id}', 'Backend\AdminsController@fullstoryreviewed')
        ->name('admin.fullstoryreviewed');
    Route::post('/fullstory/approve/{id}', 'Backend\AdminsController@storyapprove')
        ->name('admin.story.approve');

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

// Route::post('follow/{userId}', 'FollowsController@store');

Route::post('ajaxRequest', 'ReactsController@ajaxRequest')->name('ajaxRequest');