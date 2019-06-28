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

// Route::get('/', function () {
//     return view('index.index');
// });

// Route::get('/pull-request', 'pullRequestController@index')->middleware('CheckIP');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home')->middleware('CheckIP');;
// Route::get('/config/permission', 'permissionController@index')->middleware('CheckIP');;

// #/config/ipv4
// Route::get('/config/ipv4', 'permissionController@ipv4')->middleware('CheckIP');;


// //Route::post('/post/pull-request', "pullRequestController@postRequest");

// Route::get('/get/getRequest', "pullRequestController@getRequest");

// Route::get('/get/permission_ipv4', 'permissionController@getipv4');

// #/set/assing
// Route::get('/set/assing', 'pullRequestController@setssing');

// #/put/assing
// Route::get('/put/assing', 'pullRequestController@putassing');

#get/request_task/
Route::get('/get/request_task', 'pullRequestController@request_task');


// Route::prefix('auth')->middleware('guest')->group(function() {

//     Route::get('/{provider}', 'Auth\OAuthController@socialOAuth')
//         ->where('provider','google')
//         ->name('socialOAuth');
 
//      Route::get('/{provider}/callback', 'Auth\OAuthController@handleProviderCallback')
//          ->where('provider','google')
//          ->name('oauthCallback');
//  });
