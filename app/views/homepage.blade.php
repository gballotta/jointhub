@extends('mainlayout')



@section('content')

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="carousel slide" id="carousel-715060">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-715060">
					</li>
					<li data-slide-to="1" data-target="#carousel-715060">
					</li>
					<li data-slide-to="2" data-target="#carousel-715060">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="" src="/img/grandopening_banner.jpg" />
						<div class="carousel-caption">
							<h4 class="text-primary">
								OPEN DAY
							</h4>
							<p class="text-primary">
								Sabato 11 Ottobre 2014<br>Siete tutti invitati!
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="" src="/img/coworking_banner.jpg" />
						<div class="carousel-caption">
							<h4 class="text-primary">
								Coworking
							</h4>
							<p class="text-primary">
								Durante il giorno, Jointhub è un coworking<br>
								<a href="/coworking/cosa">
									<button type="button" class="btn btn-primary btn-lg">Scopri</button>
								</a>
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="" src="/img/corsi_banner.jpg" />
						<div class="carousel-caption">
							<h4>
								Corsi
							</h4>
							<p>
								Jointhub propone corsi a tutti i livelli<br>
								<a href="/corsi">
									<button type="button" class="btn btn-primary btn-lg">Scopri</button>
								</a>
							</p>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-715060" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-715060" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h2 class="headline text-color">
				<span class="border-color">Jointhub</span>
			</h2> 
			<p>
				Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
			</p>
		</div>
	</div>
</div>

@endsection