<div class="navbar navbar-dark navbar-static-top" role="navigation">

<div class="container">

	<!-- Navbar Header -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	<!-- Navbar Logo - Personalizzare -->
		<a class="navbar-brand" href="/">{{HTML::image('/img/jointhub_logo_header.png')}}</a>
	</div> <!-- / Navbar Header -->
	
	<!-- Navbar Links -->
	<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="/" class="bg-hover-color">Home</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle bg-hover-color" data-toggle="dropdown">Corsi/Eventi <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="/corsi/spazio" class="bg-hover-color">Il nostro spazio</a></li>
					<li><a href="/corsi" class="bg-hover-color">Calendario corsi</a></li>
					<li><a href="/elencocorsi" class="bg-hover-color">Programma corsi</a></li>
					<li><a href="/corsi" class="bg-hover-color">Iscrizione</a></li>
					<li><a href="/corsi/tuo" class="bg-hover-color">Crea il tuo corso/evento</a></li>
					<li><a href="/corsi/faq" class="bg-hover-color">Domande frequenti</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle bg-hover-color" data-toggle="dropdown">Coworking <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="/coworking/cosa" class="bg-hover-color">Cosa è il coworking</a></li>
					<li><a href="/coworking/spazio" class="bg-hover-color">Il nostro spazio</a></li>
					<li><a href="/coworkers" class="bg-hover-color">Coworkers in house</a></li>
					<li><a href="/coworking/prezzi" class="bg-hover-color">Affitta una postazione</a></li>
					<li><a href="/coworking/faq" class="bg-hover-color">Domande frequenti</a></li>
				</ul>
			</li>
			<li><a href="/progetti" class="bg-hover-color">Made in JointHub</a></li>
			@if( Auth::check() )
			<li class="dropdown">
				<a href="#" class="dropdown-toggle bg-hover-color" data-toggle="dropdown">{{ Auth::user()->username; }} <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="/staff" class="bg-hover-color">Staff</a></li>
					<li><a href="/persons" class="bg-hover-color">Anagrafica</a></li>
					<li><a href="/CowoPrices" class="bg-hover-color">Prezzi Coworking</a></li>
					<li><a href="/courses" class="bg-hover-color">Corsi</a></li>
					<li><a href="/dates" class="bg-hover-color">Date Eventi</a></li>
					<li><a href="/logout" class="bg-hover-color">Logout</a></li>
				</ul>
			</li>
			@else
			<li><a href="/ingresso" class="bg-hover-color">Staff</a></li>
			@endif
		</ul>
		
		<!-- Search Form (xs) -->
		<form class="navbar-form navbar-left visible-xs" role="search">
			<div class="form-group">
				<input class="form-control" placeholder="Search" type="text">
			</div>
			<button type="submit" class="btn btn-default">Go!</button>
		</form> <!-- / Search Form (xs) -->
	
	</div> <!-- / Navbar Links -->
</div> <!-- / container -->
</div> <!-- / Navbar -->
