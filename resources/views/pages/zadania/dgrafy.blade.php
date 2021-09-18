<!DOCTYPE html>
<html>
<head>
	<title>Drzewa rozpinające w grafie</title>
</head>
<body>
	@extends('layouts.HeaderAndFooter')
	<div id="loadOverlay" style="background-color:#333; position:absolute; top:0px; left:0px; width:100%; height:100%; z-index:2000;"></div>@section('content')
	<div class="album text-muted">
		<div class="container text-center">
			<div id = 'tresc' class="row text-center mt-3">
				<h2>Dla podanego grafu należy wyznaczyć liczbę drzew rozpinających oraz za pomocą poniższego algorytmu wyznaczyć minimalne drzewo rozpinające<br>
				&nbsp;<br>
				{{$odpa}}<br>
				&nbsp;</h2>
</div>
			<div><img alt="..." class="d-block img-center" id='graf' src="{{$link}}"></div><a class="btn btn-primary btn-primary mt-3" href="/zadania/dgrafy" role="button"><b>Wygeneruj inne dane</b></a> 
			<script>
function CopyToClipboard()
{
var r = document.createRange();
r.selectNode(document.getElementById('tresc'));
window.getSelection().removeAllRanges();
window.getSelection().addRange(r);
document.execCommand('copy');
window.getSelection().removeAllRanges();
btncp.innerHTML = "<b> Skopiowano treść zadania! </b>";
}
</script>  
			<script>
			     function changeImage()
			{

			var img = document.getElementById('graf');
			img.src="https://chart.googleapis.com/chart?cht=gv&chl=strict graph{rankdir=LR;layout=circo;root=1;overlap=scale;bgcolor=transparent;{{$odpc}};}";
			btn.innerHTML = "<b> Przekształcono na graf z wystającym wierzchołkiem! </b>";
			}
			</script>   
			<button id='btn' class="btn btn-primary btn-primary mt-3" id="clickme" onclick=" changeImage()"><b>Kliknij aby przekształcić na graf z wystającym wierzchołkiem</b></button>
			<button id = 'btncp' class="btn btn-primary btn-primary mt-3 " id="clickme" onclick=" CopyToClipboard()"><b>Kliknij aby skopiować treść zadania</b></button> 
			<div class="row">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th scope="col">
								<div class="text-left">
									<h2>Inne Rodzaje zadań</h2>
								</div>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr onclick="window.location.assign('/zadania/transpozycje');">
							<th class="text-left" role="button" scope="row">Rozłóż permutacje na transpozycje</th>
						</tr>
						<tr onclick="window.location.assign('/zadania/kodpermutacji');">
							<th class="text-left" role="button" scope="row">Wyznacz permutację</th>
						</tr>
						<tr onclick="window.location.assign('/zadania/nrpermutacji');">
							<th class="text-left" role="button" scope="row">Wyznacz numer permutacji</th>
						</tr>
						<tr onclick="window.location.assign('/zadania/skladaniepermutacji');">
							<th class="text-left" role="button" scope="row">Składanie permutacji</th>
						</tr>
						<tr onclick="window.location.assign('/zadania/polecenia');">
							<th class="text-left" role="button" scope="row">Wykonywanie przykładowych poleceń z zakresu permutacji</th>
						</tr>
						<tr onclick="window.location.assign('/zadania/grafy');">
							<th class="text-left" role="button" scope="row">Grafy Nieskierowane</th>
						</tr>
						<tr onclick="window.location.assign('/zadania/kolorowaniegrafus');">
							<th class="text-left" role="button" scope="row">Kolorowanie Wierzchołkowe Grafu Spójnego</th>
						</tr>
						<tr onclick="window.location.assign('/zadania/drzewa');">
							<th class="text-left" role="button" scope="row">Wyznaczanie kodu Prüfera dla drzewa</th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>@endsection <b></b>
</body>
</html>