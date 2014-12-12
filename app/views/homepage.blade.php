@extends('mainlayout')



@section('content')

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<a href="/corso/14">
				<img alt="140x140" src="/img/workshop_bmc.png" />
			</a>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h2 class="headline text-color">
				<span class="border-color">Jointhub</span>
			</h2> 
			<p>
				<strong>Jointhub</strong> nasce dalla nostra idea di creare uno spazio dove le persone possono 
				condividere la loro esperienza e la loro professionalità.<br/><br/>
				Da una parte c'è il nostro <strong>Coworking</strong>: un posto dove lavorare e mettere le proprie competenze a 
				reciproca disposizione per perseguire progetti comuni e cogliere nuove opportunità.<br/><br/>
				A fianco di questo, ma non meno importante, un <strong>Programma Corsi</strong> in costante evoluzione per dare 
				la possibilità di acquisire conoscenze utili a livello professionale (e non solo).<br/><br/>
				Ma questo è solo l'inizio. Quello che vogliamo è che le persone, sia i coworkers che chi segue 
				o tiene i nostri corsi, ci forniscano <strong>idee</strong> per far crescere il nostro piccolo spazio.<br/><br/>
				E farlo diventare ... non lo sappiamo, ma vogliamo aspettarci di tutto!
			</p>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h2 class="headline text-color">
				<span class="border-color">I nostri servizi</span>
			</h2> 
		</div>
		<div class="row services-p">
          <div class="col-sm-4">
            <!-- Service Item #1 -->
            <div class="services-item">
              <i class="fa fa-gear fa-2x text-color"></i>
              <div class="services-item-desc">
                <h3 class="primary-font">Coworking</h3>
                <p class="text-muted">
                  Uno spazio di lavoro condiviso dove si può affittare una scrivania per il tempo che vi serve, 
                  lavorando a contatto con altre persone e con la possibilità di usare tutte le attrezzature 
                  di un vero ufficio.
                </p>
                <a href="coworking/prezzi">
                	<button type="button" class="btn btn-primary btn-default">Scopri</button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- Service Item #2 -->
            <div class="services-item">
              <i class="fa fa-gear fa-2x text-color"></i>
              <div class="services-item-desc">
                <h3 class="primary-font">Corsi</h3>
                <p class="text-muted">
                  Un programma corsi sempre più ricco, con tanti argomenti e a tutti i livelli.
                </p>
                <a href="elencocorsi">
                	<button type="button" class="btn btn-primary btn-default">Scopri</button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- Service Item #3 -->
            <div class="services-item">
              <i class="fa fa-gear fa-2x text-color"></i>
              <div class="services-item-desc">
                <h3 class="primary-font">Eventi</h3>
                <p class="text-muted">
                  Il nostro spazio è a disposizione anche per l'organizzazione di eventi come presentazioni, 
                  riunioni aziendali, corsi privati di categorie professionali e altro.
                </p>
                <a href="corsi/spazio">
                	<button type="button" class="btn btn-primary btn-default">Il nostro spazio</button>
                </a>
              </div>
            </div>
          </div>
        </div>
	</div>
</div>

@endsection