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

Route::get('provagratuita', function()
{
	return View::make('freetrial');
});

Route::get('ingresso', 'LoginController@index');
Route::post('ingresso', 'LoginController@logghin');

Route::resource('staff', 'StaffController');
Route::resource('persons', 'PersonController');

Route::get('corsi/spazio', function()
{
	return View::make('corsi.spazio');
});

Route::get('corsi/faq', function()
{
	return View::make('corsi.faq');
});

Route::get('logout', 'LoginController@logout');

Route::resource('corsi', 'CorsiController');

Route::get('corsi/show/{id}', 'CorsiController@show');

Route::get('corsi/calendario', function()
{
	
});

Route::get('elencocorsi', 'ElencoCorsiController@index');

Route::get('corso/{id}', 'ElencoCorsiController@show');

Route::get('iltuocorso', function()
{
	return View::make('corsi.iltuocorso');
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

Route::get('coworking/prezzi', 'CowoController@mostraprezzi');

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

Route::resource('CowoPrices', 'CowoPricesController');

Route::resource('courses', 'CoursesController');

Route::resource('dates', 'DatesController');
