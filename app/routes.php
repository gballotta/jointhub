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

print App::environment();

Route::get('/', function()
{
	return View::make('homepage');
});

Route::get('corsi/spazio', function()
{
	return View::make('corsi.spazio');
});

Route::resource('corsi', 'CorsiController');

Route::get('corsi/show/{id}', 'CorsiController@show');

Route::get('corsi/calendario', function()
{
	
});

Route::get('corsi/programma', function()
{
	return View::make('workinprogress');
});

Route::get('corsi/tuo', function()
{
	return View::make('workinprogress');
});

Route::get('coworking/cosa', function()
{
	return View::make('workinprogress');
});

Route::get('coworking/spazio', function()
{
	return View::make('workinprogress');
});

Route::get('coworkers', function()
{
	return View::make('workinprogress');
});

Route::get('coworking/prezzi', function()
{
	return View::make('workinprogress');
});

Route::get('coworking/faq', function()
{
	return View::make('workinprogress');
});

Route::get('progetti', function()
{
	return View::make('workinprogress');
});

Route::get('blog', function()
{
	return View::make('workinprogress');
});

Route::get('contatti', function()
{
	return View::make('workinprogress');
});
