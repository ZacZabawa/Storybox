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

Route::get('media', ['as' => 'upload', 'uses' => 'ImageController@getUpload']);
Route::post('upload', ['as' => 'upload-post', 'uses' =>'ImageController@postUpload']);
Route::post('upload/delete', ['as' => 'upload-remove', 'uses' =>'ImageController@deleteUpload']);


Route::get('media', 'MediasController@index');
Route::get('media/get/{filename}', [
	'as' => 'getentry', 'uses' => 'MediaController@get']);
Route::post('media/add',[ 
        'as' => 'addentry', 'uses' => 'MediaController@add']);



Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::resource('users', 'UsersController');
    Route::resource('knowledge', 'knowledgeController');
	Route::get('kml', 'kmlController@index');
	Route::post('kml', 'kmlController@store');
	
	Route::get('media', 'MediaController@index');
	Route::get('media/get/{filename}', [
		'as' => 'getentry', 'uses' => 'MediaController@get']);
	Route::post('media/add',[ 
	        'as' => 'addentry', 'uses' => 'MediaController@add']);

    Route::get('/', 'WelcomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/map', 'mapController@index');
    Route::get('/table', 'tableController@index');
    Route::controller('datatables', 'DatatablesController', [
    'anyData'  => 'datatables.data',
    'getIndex' => 'datatables',
]);

});
