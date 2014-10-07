<?php

class CowoController extends BaseController {
	
	public function mostraPrezzi() {
		
		$listino = Cowoprice::where('mostrasusito', '=', 1)->get();
		
		return View::make('coworking.listino')->with('listino', $listino);
		
	}
	
}
