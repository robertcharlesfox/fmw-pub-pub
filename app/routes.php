<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// FMW Public Stuff
Route::get('/', function() { return View::make('pub.index'); });
Route::get('home', function() { return View::make('pub.index'); });
Route::get('about', function() { return View::make('pub.about'); });
Route::get('tutorials', function() { return View::make('pub.tutorials'); });
Route::group(array('before' => 'csrf'), function() {
    Route::post('contact', 'ContactController@handlePost');
});
Route::get('contact', function() { return View::make('pub.contact'); });
Route::get('signup', function() { return Redirect::to($_ENV['APP_BASE_URL'] . '/signup'); });
Route::get('pricing', function() { return Redirect::to($_ENV['APP_BASE_URL'] . '/signup'); });
