
@extends('layouts.HeaderAndFooter')
<title>Składanie permutacji</title>
<head><div id="loadOverlay" style="background-color:#333; position:absolute; top:0px; left:0px; width:100%; height:100%; z-index:2000;"></div></head>

    @section('content')
       <divclass="album text-muted">
         <div class="container text-center">
           
		 <div id = "tresc" class="row text-center " >
						<h1>Dokonaj złożenia permutacji 
						<br>f = {!!$lanwynik!!} </h1>
    	 </div>
<script>
function CopyToClipboard()
{
var r = document.createRange();
r.selectNode(document.getElementById('tresc'));
window.getSelection().removeAllRanges();
window.getSelection().addRange(r);
document.execCommand('copy');
window.getSelection().removeAllRanges();
btn.innerHTML = "<b> Skopiowano treść zadania! </b>";
}
</script>

		<a href="/zadania/skladaniepermutacji" class="btn btn-primary  btn-primary " role="button"><b>Wygeneruj inne dane</b></a>   
		<button id = 'btn' class="btn btn-primary btn-primary md-3" id="clickme" onclick=" CopyToClipboard()"><b>Kliknij aby skopiować treść zadania</b></button>   
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
						<tr onclick="window.location.assign('/zadania/polecenia');">
							<th class="text-left" role="button" scope="row">Wykonywanie przykładowych poleceń z zakresu permutacji</th>
						</tr>
						<tr onclick="window.location.assign('/zadania/grafy');">
							<th class="text-left" role="button" scope="row">Grafy Nieskierowane</th>
						</tr>
						<tr onclick="window.location.assign('/zadania/kolorowaniegrafus');">
							<th class="text-left" role="button" scope="row">Kolorowanie Wierzchołkowe Grafu Spójnego</th>
						</tr>
						<tr onclick="window.location.assign('/zadania/dgrafy');">
									<th class="text-left" role="button" scope="row">Drzewa rozpinające w grafie</th>
								</tr>
						<tr onclick="window.location.assign('/zadania/drzewa');">
							<th class="text-left" role="button" scope="row">Wyznaczanie kodu Prüfera dla drzewa</th>
						</tr>
							</tbody>
						</table>
					</div>
         </div>
		 
       </div>
    @endsection
    <b></b>