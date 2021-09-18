<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark navicolor sticky-top">
		<div class="container">
			<a class="navbar-brand" href="https://w.prz.edu.pl/"><img alt="" src="http://localhost:8000/images/pei.png" width="75"></a> <button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item border-left">
						<a class="{{ Request::is('home') ? 'nav-link active' : 'nav-link' }}" href="{{url('/home')}}" role="button">Home</a>
					</li>
					<li class="nav-item">
						<a class="{{ Request::is('info') ? 'nav-link active' : 'nav-link' }}" href="{{url('/info')}}" role="button">Informacje</a>
					</li>
					<li class="nav-item">
						<a class="{{ Request::is('konsultacje') ? 'nav-link active' : 'nav-link' }}" href="{{url('/konsultacje')}}" role="button">Konsultacje</a>
					</li>
					<li class="nav-item">
						<a class="{{ Request::is('zadania') ? 'nav-link active' : 'nav-link' }}" href="{{url('/zadania')}}" role="button">Zadania</a>
					</li>					
				</ul>
			</div>
		</div>
	</nav>
</body>
</html>
