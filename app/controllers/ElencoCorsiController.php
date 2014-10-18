<?php

use Carbon\Carbon;

class ElencoCorsiController extends \BaseController {
	
	public function index() {
		
		
		return View::make('corsi.corsi');
	}
	
}