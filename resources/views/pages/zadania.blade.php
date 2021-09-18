
@extends('layouts.HeaderAndFooter')
<title>Zadania</title>
<head><div id="loadOverlay" style="background-color:#333; position:absolute; top:0px; left:0px; width:100%; height:100%; z-index:2000;"></div></head>

    @section('content')
       <div class="album text-muted">
         <div class="container">
           
		 <div class="row">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th scope="col">
										<div class="text-center">
											<h2>Rodzaje zadań</h2>
										</div>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr onclick="window.location.assign('/zadania/transpozycje');">
									<th class="text-center" role="button" scope="row">Rozłóż permutacje na transpozycje</th>
								</tr>
								<tr onclick="window.location.assign('/zadania/nrpermutacji');">
									<th class="text-center" role="button" scope="row">Wyznacz numer permutacji</th>
								</tr>
								<tr onclick="window.location.assign('/zadania/kodpermutacji');">
									<th class="text-center" role="button" scope="row">Wyznacz permutację</th>
								</tr>
								<tr onclick="window.location.assign('/zadania/skladaniepermutacji');">
									<th class="text-center" role="button" scope="row">Składanie permutacji</th>
								</tr>
								<tr onclick="window.location.assign('/zadania/polecenia');">
									<th class="text-center" role="button" scope="row">Wykonywanie przykładowych poleceń z zakresu permutacji</th>
								</tr>
								<tr onclick="window.location.assign('/zadania/grafy');">
									<th class="text-center" role="button" scope="row">Grafy Nieskierowane</th>
								</tr>
								<tr onclick="window.location.assign('/zadania/kolorowaniegrafus');">
									<th class="text-center" role="button" scope="row">Kolorowanie Wierzchołkowe Grafu Spójnego</th>
								</tr>
								<tr onclick="window.location.assign('/zadania/dgrafy');">
									<th class="text-center" role="button" scope="row">Drzewa rozpinające w grafie</th>
								</tr>
								<tr onclick="window.location.assign('/zadania/drzewa');">
									<th class="text-center" role="button" scope="row">Wyznaczanie kodu Prüfera dla drzewa</th>
								</tr>
								
								
							</tbody>
						
						</table>
						
					</div>
					<div class="row">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th scope="col">
										<div class="text-center">
											<h2>Przykładowe ćwiczenia z zajęć labolatoryjnych</h2>
										</div>
									</th>
								</tr>
							</thead>
							<tbody>						
								<tr onclick="window.location.assign('/przykZadania/MD_cwicz_Drzewa.pdf')">
									<th class="text-center" role="button" scope="row">Drzewa</th>
								</tr>
								<tr onclick="window.location.assign('/przykZadania/MD_cwicz_Kolorowanie_grafu.pdf')">
									<th class="text-center" role="button" scope="row">Kolorowanie grafów</th>
								</tr>

							</tbody>
						
						</table>
						
					</div>
  
    
	<div class="row">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th scope="col">
										<div class="text-center">
											<h2>Przykładowe ćwiczenia laboratoryjne z wykorzystaniem programu Maxima</h2>
										</div>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr onclick="window.location.assign('/przykZadania/BadaniePermutacji.pdf')">
									<th class="text-center" role="button" scope="row">Badanie wybranych właściwości permutacji</th>
								</tr>
								<tr onclick="window.location.assign('/przykZadania/BazyMinimalne.pdf')">
									<th class="text-center" role="button" scope="row">Bazy minimalne</th>
								</tr>
								<tr onclick="window.location.assign('/przykZadania/Drzewa.pdf')">
									<th class="text-center" role="button" scope="row">Badanie wybranych właściwości drzew</th>
								</tr>
								<tr onclick="window.location.assign('/przykZadania/Grafy.pdf')">
									<th class="text-center" role="button" scope="row">Prawidłowe kolorowanie wierzchołków i krawędzi grafu</th>
								</tr>
							
							
								
								
								
								
								
							
								
								
							</tbody>
						
						</table>
						
					</div></div>

  
    </div>
         </div>
		 
       </div>
    @endsection
    <b></b>