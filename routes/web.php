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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return redirect('/blog');
});

Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost');

Route::get('admin',function(){
    return redirect('/admin/post');
});
Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {
    resource('admin/post', 'PostController');
    resource('admin/tag', 'TagController');
    get('admin/upload', 'UploadController@index');
});
Route::get('/auth/login','Auth\AuthController@getLogin');
Route::get('/auth/login','Auth\AuthController@postLogin');
Route::get('/auth/logout','Auth\AuthController@getLogout');
