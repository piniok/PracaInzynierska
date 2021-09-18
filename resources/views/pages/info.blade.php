@extends('layouts.HeaderAndFooter')
<title>Informacje</title>
    @section('content')
	<head><div id="loadOverlay" style="background-color:#333; position:absolute; top:0px; left:0px; width:100%; height:100%; z-index:2000;"></div></head>

       <div class="album text-muted">
         <div class="container">
           <div class="row">
           <div class="col-md-6 mt-4 border-bottom"><h1>Treści kształcenia</h1>
		   
            <h5><p>

                - Relacje, relacje równoważnościowe, relacje porządkujące. 
                <br />&nbsp&nbsp Indukcja matematyczna.

               <br> - Elementy kombinatoryki - obiekty kombinatoryczne, <br>&nbsp&nbsp reprezentacja obiektów kombinatorycznych, generowanie i <br>&nbsp&nbsp zliczanie obiektów kombinatorycznych.

                   Systemy reprezentantów. <br>&nbsp&nbsp Zagadnienie optymalnego przydziału.<br>

                - Zależności rekurencyjne. Metody rozwiązywania równań <br>&nbsp&nbsp rekurencyjnych. Liczby Fibonacciego, liczby Lucasa i ich <br>&nbsp&nbsp własności.<br>

                - Podstawowe definicje i oznaczenia teorii grafów. Podgrafy <br>&nbsp&nbsp grafów. Izomorfizm grafów. Macierzowa interpretacja grafu. <br>&nbsp&nbsp Operacje jednoargumentowe i dwuargumentowe na grafach.<br>

                - Drogi i cykle w grafach. Odległość w grafie. Spójność grafu. Grafy <br>&nbsp&nbsp Eulera i grafy Hamiltona.<br>

                - Charakteryzacje drzew, drzewa binarne, drzewa rozpinające. <br>&nbsp&nbsp Twierdzenie Cayley'a.<br>

                - Grafy planarne, kryteria planarności grafów. Kolorowanie grafów. <br>&nbsp&nbsp Wielomian chromatyczny grafu.<br>

              - Niezależność i dominowanie w grafie. Zbiory niezależne <br>&nbsp&nbsp wierzchołkowo i krawędziowo. Zbiory dominujące. Algorytmy <br>&nbsp&nbsp boolowskie wyznaczające maksymalne zbiory niezależne i <br>&nbsp&nbsp minimalne zbiory dominujące grafów. <br>
     </p></h5> 
	 <div class = row>
	 <img alt="..." class="d-block img-fluid float-left mr-3" src="http://localhost:8000/images/matdys.png" width="380"></div>
     </div>
     
     <div class="col-md-6 mt-4 border-bottom">
		
           <table class="table table-striped ">
 <h1>Efekty uczenia się</h1>
  <tr>
    <td><b>Student, który zaliczył moduł</b></td>
    <td><b>Formy zajęć/metody dydaktyczne prowadzące do osiągnięcia danego efektu kształcenia</b></td>
    <td><b>Sposoby weryfikacji każdego z wymienionych efektów kształcenia</b></td>
  </tr>
  <tr>
    <td>Potrafi rozwiązywać równania rekurencyjne liniowe jednorodne</td>
    <td>Wykład, laboratorium</td>
    <td>Kolokwium, egzamin cz. pisemna</td>
  </tr>
  <tr>
    <td>Zna podstawowe definicje i twierdzenia teorii grafów</td>
    <td>Wykład, laboratorium</td>
    <td>Kolokwium, egzamin cz. pisemna</td>
  </tr>
  <tr>
    <td>Potrafi zastosować arytmetykę boolowską do znajdywania maksymalnych zbiorów niezależnych lub minimalnych zbiorów dominujących w grafach</td>
    <td>Wykład, laboratorium</td>
    <td>Kolokwium, egzamin cz. pisemna</td>
  </tr>
  <tr>
    <td>Potrafi zliczać drogi o określonej długości w grafie lub wyznaczać liczbę wszystkich drzew rozpinających grafu, wykorzystując rachunek macierzowy</td>
    <td>Wykład, laboratorium</td>
    <td>Kolokwium, egzamin cz. pisemna</td>
  </tr>
</table>
        </div></div>
     <div class="row border-bottom">
           
           <table class="table table-striped table-hover text-centre">
							<thead>
								<tr>
             
											<h1>Literatura</h1>
										</div>
								
								</tr>
							</thead>
							<tbody>
								<tr onclick="window.location.assign
 ('https://books.google.pl/books/about/Teoria_graf%C3%B3w_i_jej_zastosowania_w_tech.html?id=ZpiJtgAACAAJ&redir_esc=y');">
									<th class="text-left" role="button" scope="row">N. Deo - Teoria grafów i
                   jej zastosowania w technice i informatyce - PWN, Warszawa. - 1980</th>
								</tr>
								<tr onclick="window.location.assign('https://ksiegarnia.pwn.pl/Wprowadzenie-do-teorii-grafow,68735610,p.html');">
									<th class="text-left" role="button" scope="row">R. J. Wilson - Wprowadzenie do teorii grafów - PWN, Warszawa . - 2000</th>
								</tr>
								<tr onclick="window.location.assign('https://oficyna.prz.edu.pl/fcp/zGBUKOQtTKlQhbx08SlkTUgxQX2o8DAoHNiwFE1xVS3pWFVZpCFghUHcKVigEQUw/18/public/nowosci-wydawnicze/2017/oferta-wloch-matematyka-17.pdf');">
									<th class="text-left" role="button" scope="row">A. Włoch, I. Włoch - Marematyka dyskretna - Oficyna Wydawnicza PRz. - 2008</th>
                  <tr onclick="window.location.assign('https://integro.bs.katowice.pl/32101759436/dmytryszyn-roman/matematyka-dyskretna?_lang=en');">
									<th class="text-left" role="button" scope="row">R. Dmytryszyn, G. Drałus - Matematyka dyskretna - Oficyna Wydawnicza PRz. - 2002</th>
								</tr>
								<tr onclick="window.location.assign('https://ksiegarnia.pwn.pl/Matematyka-dyskretna,68696753,p.html');">
									<th class="text-left" role="button" scope="row">K. A. Ross, Ch. R. B. Wright - Matematyka dyskretna - PWN, Warszawa. - 1997</th>
								</tr>
								<tr onclick="window.location.assign('https://lubimyczytac.pl/ksiazka/4909148/algorytmy-optymalizacji-dyskretnej');">
									<th class="text-left" role="button" scope="row">M. Sysło, N. Deo, J. Kowalik - Algorytmy optymalizacji dyskretnej - PWN, Warszawa. - 1996</th>
								</tr>
							</tbody>
						</table>
          
 
    
</div>
       </div>
    @endsection
    <b></b>

