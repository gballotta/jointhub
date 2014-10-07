<?php

class PersonController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	public function getDList() {
		$roles = Role::select('ruolo')->get()->toArray();
		$dropList = Array();
		$idx = 1;
		forEach($roles as $i) {
			$dropList[$idx] = $i['ruolo'];
			$idx++;
		}
		return $dropList;
	}
	 
	public function index()
	{
		$persons = Person::all();
		return View::make('persons.index')->with('persons', $persons);
		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$dropList = $this->getDList();
		return View::make('persons.create')->with('dlist', $dropList);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
		$utente = new Person(Input::get());
		
		$validator = Validator::make(
			Input::get(),
			$utente->validationRules
			);
		
		if($validator->fails()) {
			$errors = $validator->messages();
			Session::flash('message', 'I seguenti campi non sono compilati correttamente');
			return Redirect::to('persons/create')
				->withErrors($validator)
				->withInput();
		} else {
			//$utente = new Person(Input::get());
			$utente->save();
			Session::flash('message', 'Creato nuovo utente');
			return Redirect::to('persons');
		}
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = Person::find($id);
		$qualifica = Role::find($user->role_id);
		if(!is_null($user)) {
			$dlist = $this->getDList();
			return View::make('persons.show', array('person' => $user, 'dlist' => $dlist, 'ruolo' => $qualifica->ruolo));
		}
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$roles = Role::select('ruolo')->get()->toArray();
		$dropList = Array();
		$idx = 1;
		forEach($roles as $i) {
			$dropList[$idx] = $i['ruolo'];
			$idx++;
		}
		$persona = Person::find($id);
		if(is_null($persona)) {
			return Redirect::to('persons');
		}
		return View::make('persons.update', compact('persona'))->with('dlist', $dropList);
	}

	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = Person::find($id);
		if(!is_null($user)) {
			$validator = Validator::make(
				Input::get(),
				$user->validationRules
				);
			if($validator->fails()) {
				$errors = $validator->messages();
				Session::flash('message', 'Errore di validazione');
				return Redirect::to('persons/' . $user->id . '/edit')
					->withErrors($validator)
					->withInput();
			} else {
				$user->cognome = Input::get('cognome');
				$user->nome = Input::get('nome');
				$user->luogonascita = Input::get('luogonascita');
				$user->datanascita = Input::get('datanascita');
				$user->indirizzo = Input::get('indirizzo');
				$user->localita = Input::get('localita');
				$user->comune = Input::get('comune');
				$user->provincia = Input::get('provincia');
				$user->nazione = Input::get('nazione');
				$user->codicefiscale = Input::get('codicefiscale');
				$user->partitaiva = Input::get('partitaiva');
				$user->email = Input::get('email');
				$user->cap = Input::get('cap');
				$user->role_id = Input::get('role_id');
				$user->save();
				return Redirect::to('persons')->with('esito', 'Utente aggiornato');
			}
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = Person::find($id);
		if(!is_null($user)) {
			$user->delete();
			Session::flash('message', 'Utente eliminato');
			return Redirect::to('persons');
		} else {
			return Redirect::to('persons');
		}
	}

}
