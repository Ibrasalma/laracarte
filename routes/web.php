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

Route::name('root_path')->get('/', 'PagesController@home');

/*Route::get('/test-email', function(){
	return new ContactMessageCreated('Bah Ibrahima','ibrahimasalamatabah18@hotmail.com','Merci pour votre plateforme elle nous aide beaucoup vraiment');
});*/

Route::get('/about', [
	'as'=>'about_path',
	'uses'=>'PagesController@about'
]);

Route::get('/contact', [
	'as'=>'contact.create',
	'uses'=>'ContactsController@create'
]);

Route::post('/contact', [
	'as'=>'contact.store',
	'uses'=>'ContactsController@store'
]);