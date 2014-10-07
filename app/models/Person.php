<?php

class Person extends Eloquent {
	
	 protected $table = 'persons';
	 protected $guarded = array();
	 
	 public $validationRules = array(
			'cognome' => 'required',
			'nome' => 'required',
			'datanascita' => 'date',
			'indirizzo' => 'required',
			'localita' => 'required',
			'comune' => 'required',
			'provincia' => 'required|alpha|size:2',
			'nazione' => 'required|alpha',
			'professione' => 'required',
			'codicefiscale' => 'required|alpha_num',
			'partitaiva' => 'numeric',
			'email' => 'required|email',
			'cap' => 'required|digits:5',
			'role_id' => 'required|exists:roles,id'
			);
	
}
