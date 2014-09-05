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
		echo 'Ha provato a collegarsi ' . Input::get('username') . ' con la password ' .Input::get('password'); 
	}

}
