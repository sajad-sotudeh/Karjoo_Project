<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::group(['middleware' => ['web']], function () {

    Route::get('/',['as' => 'home' , function () {
        return view('homepage');
    }]);

	Route::get('jobs/{query}/{city?}', 
  ['as' => 'simpleResult', 'uses' => 'simpleResultController@show']);
  
	 Route::post('jobs', 
   ['as' => 'jobs_store', 'uses' => 'AboutController@store']);
	
	Route::get('login', function(){
		return view('login');
	});
	
	Route::post('login', 
   ['as' => 'userCheck', 'uses' => 'loginPageController@userCheck']);
	
//}

// Route::group(['middleware' => 'web'], function () {
    // Route::auth();

    // Route::get('/home', 'HomeController@index');
// });
