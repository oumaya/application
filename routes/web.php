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
Route::resource('/', 'HomeController');
Route::get('/getUrl', 'HomeController@getUrl');
Route::post('/shorten', 'HomeController@shorten');
Route::get('/delete/{id}', 'HomeController@delete');

Route::get('profil', 'UtilisateursController@profil');
Route::resource('profile', 'UtilisateursController');


Route::resource('file/uploads', 'UploadsController');
/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/password/reset/{token}', 'HomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index');



Route::post('/profile/{id}/mail', 'UtilisateursController@sendEmailReminder');
/*Route::get('/profile/{id}/mail', 'UtilisateursController@sendMail');*/
Route::post('/validate_email/{id}', 'HomeController@validateEmail');

