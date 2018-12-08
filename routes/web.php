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


/* 
|-----------------------------------------
|  Public Views Routes
|-----------------------------------------
| We will add all the Public Views Route 
| here.
*/

Route::get('/', 'PublicViews\HomeController@index');

/* 
|-----------------------------------------
|  Auth Routes
|-----------------------------------------
| These route were generated by running
| make:auth command. 
*/

Auth::routes(['verify' => true]);

/* 
|-----------------------------------------
|  Private Routes
|-----------------------------------------
| We will add all the Private Views Route
| here.
*/

Route::get('/home', 'HomeController@index')->name('home');

/* 
| We will group private views routes by 
| here - by namespace and then by
| prefix.
*/
Route::namespace('PrivateViews')->prefix('privateviews')->group(function () {
    	/* 
		| We will then group by Users namespace
		|  and then by users prefix.
		*/
        Route::namespace('Users')->prefix('users')->group(function () {
        	Route::get('profile', 'ProfileController@profile');
        	Route::post('updateprofilepicture', 'ProfileController@updateProfilePicture');
        });
});

