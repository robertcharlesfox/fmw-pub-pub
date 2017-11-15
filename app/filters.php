<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('fmw', function($route)
{
	$name = $route->getPath();
	$prefix = substr($name, 0, strpos($name, '/'));
	if (Auth::guest() || ! $prefix == Auth::user()->url_prefix) {
		return View::make('pub.401');
	}
});

Route::filter('auth.page', function($route)
{
	if (Auth::guest()) {
		return Redirect::guest('login');
	}

	$page_id = $route->getParameter('page_id');
	if ($page_id) {
		$page_requested = Page::find($page_id);
		if ( ! $page_requested ||
				 ! $page_requested->connectionString->user || 
				 	 $page_requested->connectionString->user->id != Auth::id()) 
		{
			return View::make('pub.401');
		}
	}
});

Route::filter('auth.connection', function($route)
{
	if (Auth::guest()) {
		return Redirect::guest('login');
	}

	$connection_id = $route->getParameter('connection_id');
	if ($connection_id) {
		$connection_requested = ConnectionString::find($connection_id);
		if ( ! $connection_requested || 
				 ! $connection_requested->user || 
				 $connection_requested->user->id != Auth::id()) 
		{
			return View::make('pub.401');
		}
	}
});

Route::filter('auth', function()
{
	if (Auth::guest())
	{
		if (Request::ajax())
		{
			return View::make('pub.401');
		}
		else
		{
			return Redirect::guest('login');
		}
	}
});

Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});
