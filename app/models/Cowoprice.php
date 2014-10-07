<?php

class Cowoprice extends Eloquent {
	protected $table = 'cowoprices';
	
	public static $validationRules = array(
			'nome' => 'required',
			'tempo' => 'required',
			'postazione' => 'required',
			'scontocorsi' => 'required|numeric|min:0',
			'prezzo' => 'required|numeric|min:0',
			'mostrasusito' => 'required|numeric|min:0|max:1'
			);
	
	public static $fields = array(
			'nome',
			'tempo',
			'postazione',
			'scontocorsi',
			'prezzo',
			'mostrasusito'
	);
}
