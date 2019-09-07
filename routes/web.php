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

/* Functionalities */

Route::post('/sharestory/{id}', 'StoryController@store')->name('store');
Route::get('/editstory/{id}', 'StoryController@editstory')->name('editstory');
Route::post('/updatestory/{id}', 'StoryController@updatestory')->name('updatestory');
Route::get('/editprofile/{id}', 'UserController@editprofile')->name('editprofile');
Route::post('/updateprofile/{id}', 'UserController@update')->name('updateprofile');
Route::post('/deletestory/{id}', 'StoryController@delete')->name('deletestory');

/*Admin */
Route::group(['prefix' => '/admin'], function () {
    Route::get('/', 'adminController@homeadmin')->name('homeadmin');
    Route::get('/confessions', 'adminController@confessionpage')->name('confessionpage');
    Route::get('/admins', 'adminController@admins')->name('admins');
    Route::get('/members', 'adminController@members')->name('members');
});