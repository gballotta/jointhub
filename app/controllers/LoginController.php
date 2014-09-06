<?php

class LoginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('login');
	}
	
	public function logghin() {
		$credenziali = array('username' => Input::get('username'),
		                     'password' => Input::get('password'));
		
		if(Auth::attempt($credenziali)) {
			return Redirect::to('/');
		} else {
			return View::make('login')->with('sbaglio', 1);
		}
	}

}
