<?php

class CowoController extends BaseController {
	
	public function mostraPrezzi() {
		
		$listino = Cowoprice::all();
		
		return View::make('coworking.listino')->with('listino', $listino);
		
	}
	
}
