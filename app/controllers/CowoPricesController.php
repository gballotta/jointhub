<?php

class CowoPricesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /cowoprices
	 *
	 * @return Response
	 */
	public function index()
	{
		$prezzi = Cowoprice::all();
		return View::make('CowoPrices.index')->with('prezzi', $prezzi);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /cowoprices/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('CowoPrices.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /cowoprices
	 *
	 * @return Response
	 */
	public function store()
	{
		//$articolo = new Cowoprice;
		$validation = Validator::make(Input::get(), Cowoprice::$validationRules);
		
		if($validation->fails()) {
			$errors = $validation->messages();
			Session::flash('message', 'I seguenti campi non sono compilati correttamente');
			return Redirect::to('CowoPrices/create')
				->withErrors($validation)
				->withInput();
		} else {
			$articolo = new Cowoprice;
			foreach (Cowoprice::$fields as $campo) {
				$articolo->$campo = Input::get($campo);
			}
			$articolo->save();
			Session::flash('message', 'Creato nuovo articolo');
			return Redirect::to('CowoPrices');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /cowoprices/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$prezzo = Cowoprice::find($id);
		if(!is_null($prezzo)) {
			return View::make('CowoPrices.show')->with('articolo', $prezzo);
		} else {
			return Redirect::to('CowoPrices');
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /cowoprices/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$prezzo = Cowoprice::find($id);
		if(!is_null($prezzo)) {
			return View::make('CowoPrices.edit')->with('prezzo', $prezzo);
		} else {
			return Redirect::to('CowoPrices');
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /cowoprices/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validation = Validator::make(Input::get(), Cowoprice::$validationRules);
		$articolo = Cowoprice::find($id);
		if($validation->fails()) {
			$errors = $validation->messages();
			Session::flash('message', 'I seguenti campi non sono compilati correttamente');
			return Redirect::to('CowoPrices/create')
				->withErrors($validation)
				->withInput();
		} else {
			if(!is_null($articolo)) {
				foreach (Cowoprice::$fields as $campo) {
					$articolo->$campo = Input::get($campo);
				}
				$articolo->save();
				Session::flash('message', 'Articolo modificato');
				return Redirect::to('CowoPrices');
				} else {
					return Redirect::to('CowoPrices');
				}
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /cowoprices/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = Cowoprice::find($id);
		if(!is_null($user)) {
			$user->delete();
			Session::flash('message', 'Tariffa eliminata');
			return Redirect::to('CowoPrices');
		} else {
			return Redirect::to('CowoPrices');
		}
	}

}