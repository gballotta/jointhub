<?php

use Carbon\Carbon;

class CorsiController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$oggi = Carbon::now();
		$corsi = DB::table('dates')/*->where('data', '>=', $oggi)*/
		         ->join('courses', 'dates.course_id', '=', 'courses.id')
				 ->select('dates.id', 'dates.data', 'dates.prenotati', 'dates.course_id','courses.nome',
				 'courses.tagline', 'courses.tag_workshop', 'courses.tag_corso', 'courses.tag_gratis',
				 'courses.max_partecipanti')
		         ->get();
		
		return View::make('corsi.elenco')->with('corsi', $corsi);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$corso = DB::table('dates')->where('dates.id', '=', $id)
		         ->join('courses', 'dates.course_id', '=', 'courses.id')
				 /*->join('teachers', 'courses.teacher_id', '=', 'teachers.id')*/
				 ->select('dates.id as dataId', 'dates.data as dataData',
				          'courses.nome as corsoNome', 'courses.tagline as corsoTagline',
						  'courses.descrizione as corsoDescrizione', 'courses.programma as corsoProgramma',
						  'courses.tag_workshop as corsoWorkshop', 'courses.tag_corso as corsoCorso',
						  'courses.tag_gratis as corsoGratis', 'courses.min_partecipanti as corsoMin',
						  'courses.max_partecipanti as corsoMax', 'courses.prezzo as corsoPrezzo')
				 ->first();
		
		return View::make('corsi.scheda')->with('corso', $corso);
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
		//
	}


}
