@extends('layouts.mainLayout')
<title>Home</title>@section('content')
<div class="album text-muted">
  <div class="container">
    <div class="row ">
      <h1>Główne cele kształcenia i informacje o zajęciach</h1>
    </div>
    <div class="row">
      <h4><br>
      <b>Główny cel kształcenia</b>
      <br>Celem tego modułu kształcenia jest zapoznanie studentów z podstawowymi metodami matematycznymi stosowanymi do analizy i rozwiązywania zadań matematyki komputerowej, zwanej dyskretną. Materiał dydaktyczny, realizowany w ramach tego przedmiotu, można podzielić na dwie zasadnicze części: kombinatorykę i teorię grafów. Studenci poznają wybrane algorytmy generowania obiektów kombinatorycznych oraz teorię grafów, ilustrowaną algorytmami grafowymi.
      <br><b>Ogólne informacje o zajęciach kształcenia</b> 
<br>Priorytetem nauczania tego przedmiotu jest zwrócenie uwagi studentów na duże znaczenie matematyki w informatyce, w szczególności kombinatoryki i teorii grafów. Chociaż te działy matematyki można studiować w oderwaniu od informatyki, gdyż z powodzeniem istniały zanim pojawiły się komputery, to jednak dopiero połączenie technik komputerowych z teorią grafów i kombinatoryką przyczyniło się do dynamicznego rozwoju tych i jeszcze innych obszarów matematyki. Efektem tych wysiłków było opracowanie wielu nowych algorytmów, które znalazły zastosowanie do rozwiązywania problemów w różnych dziedzinach życia i techniki.
    </div>
    <div class="row bgimg">
      <div class="col-md-6 mt-4 border-bottom">
        
      <div class="table-responsive  overflow-hidden">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">
                <h4><b>Działy Matematyki Dyskretnej,
                 z którymi student spotka się na zajęciach</b></h4>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="accordion-toggle collapsed" id="accordion1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">
              <td><b>Kombinatoryka</b></td>
            </tr>
            <tr>
           
              <td colspan="1">
                <div id="collapseOne" class="collapse">
                  <div class="row text-left">
                    <div class="col text-left">Dział matematyki, zajmujący się badaniem struktur skończonych lub nieskończonych, ale przeliczalnych. Np. określenie, ile jest podzbiorów k-elementowych w zbiorze n-elementowym stanowi jedno z typowych zagadnień kombinatoryki.
<br>Kombinatoryka swój rozwój zawdzięcza rachunkowi prawdopodobieństwa, teorii grafów, teorii informacji i innym działom matematyki stosowanej. Stanowi jeden z działów matematyki dyskretnej.
<br>Kombinatoryka posługuje się terminologią niewystępującą w innych działach matematyki, stąd pozorna jej odrębność. Najważniejszym jej zadaniem jest konstruowanie spełniających pewne określone warunki odwzorowań jednego zbioru skończonego w drugi oraz znajdowanie wzorów na liczbę tych odwzorowań. 
</div>
                  </div>
                </div>
              </td></tr>

            <tr class="accordion-toggle collapsed" id="accordion2" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
              <td><b>Teoria Grafów</b></td>
            </tr>
            <tr>
              <td colspan="2">
                <div id="collapseTwo" class="collapse">
                  <div class="row text-left">
                    <div class="col text-left">Dział matematyki zajmujący się badaniem własności grafów. Za pierwszą pracę na temat teorii grafów uznawany jest opis zagadnienia mostów królewieckich, opublikowany w 1736 roku przez Leonharda Eulera. Algorytmy grafowe są także przedmiotem badań informatyki. </div>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      
       
      </div>
</div>
<div class="col-md-6 mt-4 border-top text-right"><h1>Maxima</h1>
<img alt="..." class="d-block img-fluid float-left mr-3" src="http://localhost:8000/images/maxima.png" width="220">
<h5>Maxima jest programem komputerowym typu CAS (Computer Algebra System), wspomagającym wykonywanie obliczeń matematycznych, 
zarówno symbolicznych, jak i numerycznych. Zastosowanie rachunku symbolicznego pozwala na rozwiązywanie wielu problemów matematycznych w sposób dokładny.</h5>
<a href="http://maxima.sourceforge.net/" class="btn btn-primary  btn-primary mt-3 " role="button"><b>Pobierz program Maxima</b></a>
<a href="
http://localhost:8000/doPobrania/Biblioteka_Kombinatoryczno-grafowa.zip" 
download="true" class="btn btn-primary  btn-primary mt-3 " 
role="button"><b>Pobierz bibliotekę kombinatoryczno-grafową</b></a>   </div> 


</div>

    
  </div>@endsection
</div>