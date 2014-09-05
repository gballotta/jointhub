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
					<li><a href="/corsi/programma" class="bg-hover-color">Programma corsi</a></li>
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
			<li><a href="/blog" class="bg-hover-color">Blog</a></li>
			<li><a href="/contatti" class="bg-hover-color">Contatti</a></li>
			<li><a href="/ingresso" class="bg-hover-color">Staff</a></li>
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
