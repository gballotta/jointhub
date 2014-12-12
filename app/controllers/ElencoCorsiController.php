<?php

use Carbon\Carbon;

class ElencoCorsiController extends \BaseController {
	
	public function index() {
		
		$corsi = Course::where('attivo', '=', 1)->orderBy('nome')->get();
		return View::make('corsi.corsi')->with('corsi', $corsi);
	}
	
	public function show($id) {
		$corso = Course::find($id);
		return View::make('corsi.corso')->with('corso', $corso);
	}
	
}