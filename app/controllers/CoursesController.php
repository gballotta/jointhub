<?php

class CoursesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /courses
	 *
	 * @return Response
	 */
	public function index()
	{
		$corsi = Course::all();
		Return View::make('courses/index')
		       ->with('corsi', $corsi);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /courses/create
	 *
	 * @return Response
	 */
	public function create()
	{
		Return View::make('courses.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /courses
	 *
	 * @return Response
	 */
	public function store()
	{
		$evento = new Course;
		$validation = Validator::make(Input::get(), $evento->validationRules);
		if ($validation->fails()) {
			Session::flash('message', 'Errore di validazione');
			return Redirect::to('courses/create')
			       ->withInput()
				   ->withErrors($validation);
		} else {
			$evento->nome = Input::get('nome');
			$evento->tagline = Input::get('tagline');
			$evento->teacher_id = Input::get('teacher_id');
			$evento->descrizione = Input::get('descrizione');
			$evento->programma = Input::get('programma');
			$evento->tag_corso = Input::get('tag_corso');
			if(is_null($evento->tag_corso)) { $evento->tag_corso = 0; }
			$evento->tag_workshop = Input::get('tag_workshop');
			if(is_null($evento->tag_workshop)) { $evento->tag_workshop = 0; }
			$evento->tag_gratis = Input::get('tag_gratis');
			if(is_null($evento->tag_gratis)) { $evento->tag_gratis = 0; }
			$evento->min_partecipanti = Input::get('min_partecipanti');
			$evento->max_partecipanti = Input::get('max_partecipanti');
			$evento->prezzo = Input::get('prezzo');
			$evento->attivo = Input::get('attivo');
			if(is_null($evento->attivo)) { $evento->attivo = 0; }
			$evento->save();
			Session::flash('message', 'Nuovo evento creato');
			return Redirect::to('courses');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /courses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$corso = Course::find($id);
		return View::make('courses.show')->with('corso', $corso);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /courses/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$corso = Course::find($id);
		return View::make('courses.edit')->with('corso', $corso);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /courses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$evento = Course::find($id);
		$temp = new Course;
		$validation = Validator::make(Input::get(), $temp->validationRules);
		if ($validation->fails()) {
			Session::flash('message', 'Errore di validazione');
			return Redirect::to('courses/edit')
			       ->withInput()
				   ->withErrors($validation);
		} else {
			$evento->nome = Input::get('nome');
			$evento->tagline = Input::get('tagline');
			$evento->teacher_id = Input::get('teacher_id');
			$evento->descrizione = Input::get('descrizione');
			$evento->programma = Input::get('programma');
			$evento->tag_corso = Input::get('tag_corso');
			if(is_null($evento->tag_corso)) { $evento->tag_corso = 0; }
			$evento->tag_workshop = Input::get('tag_workshop');
			if(is_null($evento->tag_workshop)) { $evento->tag_workshop = 0; }
			$evento->tag_gratis = Input::get('tag_gratis');
			if(is_null($evento->tag_gratis)) { $evento->tag_gratis = 0; }
			$evento->min_partecipanti = Input::get('min_partecipanti');
			$evento->max_partecipanti = Input::get('max_partecipanti');
			$evento->prezzo = Input::get('prezzo');
			$evento->attivo = Input::get('attivo');
			if(is_null($evento->attivo)) { $evento->attivo = 0; }
			$evento->save();
			Session::flash('message', 'Evento modificato');
			return Redirect::to('courses');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /courses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$corso = Course::find($id);
		if(!is_null($corso)) {
			$corso->delete();
			Session::flash('message', 'Corso eliminato');
			return Redirect::to('courses');
		} else {
			return Redirect::to('courses');
		}
	}

}