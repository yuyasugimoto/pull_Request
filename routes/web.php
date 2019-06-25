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

Route::get('/', function () {
    return view('index.index');
});

Route::get('/pull-request', 'pullRequestController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/post/pull-request', "pullRequestController@postRequest");


// Route::prefix('auth')->middleware('guest')->group(function() {

//     Route::get('/{provider}', 'Auth\OAuthController@socialOAuth')
//         ->where('provider','google')
//         ->name('socialOAuth');
 
//      Route::get('/{provider}/callback', 'Auth\OAuthController@handleProviderCallback')
//          ->where('provider','google')
//          ->name('oauthCallback');
//  });
