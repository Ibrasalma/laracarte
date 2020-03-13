<?php

use App\Mail\ContactMessageCreated;
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

Route::view('/', 'pages.home')->name('root_path');
Route::view('/about', 'pages.about')->name('about_path');
Route::view('/about', 'pages.about')->name('about_path');
Route::view('/forum', 'forums.forum_index')->name('forum_path');
Route::view('/login', 'users.user_index',['img'=>'images/logo.png'])->name('login_path');
Route::get('/contact', 'ContactsController@create')->name('contact.create');
Route::post('/contact','ContactsController@store')->name('contact.store');
Route::post('/login', 'Auth\LoginController@login')->name('user.login');
Route::post('/register', 'Auth\RegisterController@create')->name('user.register');

/*Route::get('/test-email', function(){
	return new ContactMessageCreated('Bah Ibrahima','ibrahimasalamatabah18@hotmail.com','Merci pour votre plateforme elle nous aide beaucoup vraiment');
});*/

