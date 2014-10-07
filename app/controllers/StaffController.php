<?php

class StaffController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$admins = User::all();
		return View::make('admin.index')->with('admins', $admins);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$roles = Role::all();
		return View::make('admin.create')->with('roles', $roles);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(
			array(
			'username' => Input::get('username'),
			'password' => Input::get('password'),
			'password_confirmation' => Input::get('password_confirmation')
			),
			array(
			'username' => 'required|alpha|unique:users',
			'password' => 'required|alpha_num|confirmed'
			)
		);
		
		if ($validator->fails()) {
			return View::make('admin.create')->with('errorival', $validator->messages());
		} else {
			
			$nuovoAmm = new User;
			$nuovoAmm->username = Input::get('username');
			$nuovoAmm->password = Hash::make(Input::get('password'));
			$nuovoAmm->save();
			
			$admins = User::all();
			
			return View::make('admin.index', array('admins' => $admins,
			                                       'creatoNuovo' => 1));
		}
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$utente = User::find($id);
		$utente->delete();
		$admins = User::all();
		return View::make('admin.index', array('admins' => $admins,
			                                       'creatoNuovo' => 2));
	}


}
