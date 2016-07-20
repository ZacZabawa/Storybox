<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Angular adjustment
// Route::get('/', 'AngularController@serveApp');




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/








Route::group(['middleware' => 'web'], function () {

    Route::auth();
    Route::resource('users', 'UsersController');
    Route::resource('tekpoints', 'tekpointController');
    Route::resource('media', 'MediaController');
    Route::resource('contributors', 'ContributorController');
    Route::get('kml', 'kmlController@index');
	Route::post('kml', 'kmlController@store');

    Route::resource('/', 'WelcomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/map', 'mapController@index');
    Route::resource('types', 'PointTypeController');
    
  


});
