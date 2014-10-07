<?php

class DatesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dates
	 *
	 * @return Response
	 */
	public function index()
	{
		$dates = Date::with('Course')->where('data', '>=', '2014/08/01')->get();
		return View::make('dates.index')->with('dates', $dates);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /dates/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$cors = Course::all()->toArray();
		$corsi = array();
		$idx = 1;
		forEach($cors as $i) {
			$corsi[$idx] = $i['nome'];
			$idx++;
		}
		return View::make('dates.create')->with('corsi', $corsi);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dates
	 *
	 * @return Response
	 */
	public function store()
	{
		$validation = Validator::make(Input::all(), Date::$validationRules);
		if($validation->fails()) {
			Session::flash('message', 'Errore di validazione');
			return Redirect::to('dates/create')
			       ->withInput()
				   ->withErrors($validation);
		} else {
			$datanuova = new Date;
			$datanuova->course_id = Input::get('course_id');
			$datanuova->data = Input::get('data');
			$datanuova->save();
			Session::flash('message', 'Nuova data creata');
			return Redirect::to('dates');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /dates/{id}
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
	 * GET /dates/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$corso = Date::find($id);
		$cors = Course::all()->toArray();
		$corsi = array();
		$idx = 1;
		forEach($cors as $i) {
			$corsi[$idx] = $i['nome'];
			$idx++;
		}
		return View::make('dates.edit')->with('data', $corso)->with('corsi', $corsi);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /dates/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validation = Validator::make(Input::all(), Date::$validationRules);
		if($validation->fails()) {
			Session::flash('message', 'Errore di validazione');
			return Redirect::to('dates/edit')
			       ->withInput()
				   ->withErrors($validation);
		} else {
			$datanuova = Date::find($id);
			$datanuova->course_id = Input::get('course_id');
			$datanuova->data = Input::get('data');
			$datanuova->save();
			Session::flash('message', 'Data modificata');
			return Redirect::to('dates');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /dates/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$data = Date::find($id);
		if(!is_null($data)) {
			$data->delete();
			Session::flash('message', 'Data cancellata');
			return Redirect::to('dates');
		} else {
			return Redirect::to('dates');
		}
	}

}