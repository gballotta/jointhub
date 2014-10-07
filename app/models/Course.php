<?php

class Course extends Eloquent {
	public function dates() {
		return $this->hasMany('Date');
	}
	
	public $validationRules = array(
			'nome' => 'required',
			'tagline' => 'required',
			'teacher_id' => 'required|numeric',
			'descrizione' => 'required',
			'programma' => 'required',
			'tag_corso' => 'numeric|min:0|max:1',
			'tag_workshop' => 'numeric|min:0|max:1',
			'tag_gratis' => 'numeric|min:0|max:1',
			'min_partecipanti' => 'numeric|min:1',
			'max_partecipanti' => 'numeric|min:1',
			'prezzo' => 'required|numeric|min:0',
			'attivo' => 'numeric|min:0|max:1'
			);
}
