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

Route::get('/bashar',function(){
	echo 'saiyedul bashar is flying';
});

Route::get('/tumi','bashar@tumi');
Route::post('/contact/submit','bashar@amra');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/changepassword', 'HomeController@passwordchange')->name('passwordchange');
Route::get('/contact/message/view', 'HomeController@contactmessageview');
Route::get('/contact/delete/{message_id}', 'HomeController@contactdelete');
Route::get('/contact/mark/{message_id}', 'HomeController@contactmark');
Route::get('/contact/edit/{message_id}', 'HomeController@contactedit');
Route::post('/contact/update', 'HomeController@contactupdate');
Route::post('/abouteditinfo', 'HomeController@abouteditinfo');
Route::post('/pointinput', 'HomeController@pointinput');
Route::post('/change/password/again', 'HomeController@changepasswordagain');
Route::post('/edit/update/again', 'HomeController@editupdateagain');
Route::post('/serviceactive', 'HomeController@serviceactive');
Route::post('/profile/update', 'HomeController@profileupdate');
Route::get('/mesage/restore/{restoreid}', 'HomeController@mesagerestore');
Route::get('/about/again/edit/{againid}', 'HomeController@aboutagainedit');

Route::get('/servicesection', 'HomeController@servicesection');
Route::get('/upload/photo', 'HomeController@uploadphoto');

Route::get('/aboutsection', 'HomeController@aboutsectionultra');
Route::get('/about/idtake/{take}', 'HomeController@aboutidtake');
Route::get('/serviceactiveon/{chara}', 'HomeController@serviceactiveon');
Route::get('/servicedeactive/{ghara}', 'HomeController@servicedeactive');
Route::get('/', 'bashar@aboutsection');







