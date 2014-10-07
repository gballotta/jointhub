			$articolo->nome = Input::get('nome');
			$articolo->tempo = Input::get('tempo');
			$articolo->postazione = Input::get('postazione');
			$articolo->scontocorsi = Input::get('scontocorsi');
			$articolo->prezzo = Input::get('prezzo');
			$articolo->mostrasusito = Input::get('mostrasusito'); 
			$articolo->save();
			Session::flash('message', 'Creato nuovo articolo');
			return Redirect::to('CowoPrices');