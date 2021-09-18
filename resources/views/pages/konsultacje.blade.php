<!DOCTYPE html>
<html>
<head>
<div id="loadOverlay" style="background-color:#333; position:absolute; top:0px; left:0px; width:100%; height:100%; z-index:2000;"></div>

	<title>Konsultacje</title>
</head>
<body>
	@extends('layouts.HeaderAndFooter') @section('content')
	<div class="album text-muted">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mt-5">
					<h1>Katedra Elektroniki i Podstaw Informatyki</h1>
					<div class="row-md-6 border-bottom border-top">
						<h3>Konsultacje z zakresu Matematyki Dyskretnej:</h3>
						<h4><b>dr. inż. Grzegorz Draus</b></h4><img alt="..." class="d-block img-fluid float-right mr-3" src="http://localhost:8000/images/avatar_m.png" width="220">
						<h5>Poniedziałek</h5>
						<p>08<sup>00</sup> - 09<sup>30</sup> K//zdalne<br>
						10<sup>30</sup> - 12<sup>00</sup> W/Wdp/zdalny</p>
						<h5>Wtorek</h5>
						<p>08<sup>45</sup> - 10<sup>15</sup> L/Wdp/B210<br>
						17<sup>30</sup> - 19<sup>00</sup> L/Wdp/B205</p>
						<h5>Czwartek</h5>
						<p>08<sup>45</sup> - 10<sup>15</sup> L/Wdp/B205<br>
						10<sup>30</sup> - 12<sup>00</sup> L/RR/zdalne<br>
						14<sup>00</sup> - 15<sup>30</sup> W/RR/zdalne<br>
						17<sup>30</sup> - 19<sup>00</sup> K//zdalne</p>
					</div>
					<div class="row-md-6">
						<h4><b>dr. inż. Antoni Szczepański</b></h4>
						<h5>Poniedziałek</h5>
						<p>16<sup>30</sup> - 18<sup>00</sup> K/ALL/zdalnie</p>
						<h5>Wtorek</h5><img alt="..." class="d-block img-fluid float-right mr-3" src="http://localhost:8000/images/aszczepanski.jpg" width="230">
						<p>10<sup>30</sup> - 12<sup>00</sup> L/WdP/B205<br>
						12<sup>15</sup> - 13<sup>45</sup> L/WdP/B205</p>
						<h5>Środa</h5>
						<p>10<sup>30</sup> - 12<sup>00</sup> L/SMS/B205<br>
						12<sup>15</sup> - 13<sup>45</sup> L/SMS/B205</p>
						<h5>Czwartek</h5>
						<p>10<sup>30</sup> - 12<sup>00</sup> K/ALL/zdalnie<br>
						12<sup>15</sup> - 13<sup>45</sup> W/SMS/Zdalnie</p>
						<h5>Piątek</h5>
						<p>08<sup>45</sup> - 10<sup>15</sup> L/ASD/Zdalnie<br>
						10<sup>30</sup> - 12<sup>00</sup> L/ASD/Zdalnie<br>
						12<sup>15</sup> - 13<sup>45</sup> L/ASD/Zdalnie<br>
						14<sup>00</sup> - 15<sup>30</sup> L/ASD/Zdalnie</p>
					</div>
				</div>
				<div class="col-md-6 mt-5">
					<div class="text-left border-bottom">
						<h1>Dodatkowe Informacje<br>
						<br></h1>
					</div>
					<div class="row">
						<div class="text-left">
							<p></p>
							<h3>Profil działalności naukowej katedry:</h3><br>
							- Badanie wyładowań atmosferycznych.<br>
							- Badania poligonowe efektywności systemów ochrony odgromowej.<br>
							- Badania odporności awioniki na zaburzenia elektromagnetyczne.<br>
							- Doskonalenie metod obliczeniowych.<br>
							- Badania pól elektrycznych niejednorodnych układów elektroizolacyjnych.<br>
							- Projektowanie oraz sterowanie wielofazowymi generatorami typu SPMSM i IPMSM.<br>
							- Modelowanie i symulacja turbin wiatrowych o osi poziomej i pionowej.<br>
							- Analiza subsynchronicznych rezonansów w sieciach energetycznych.<br>
							- Analiza układów energoelektronicznych kondycjonowania energii elektrycznej.<br>
							- Organizacja współpracy elektrowni wiatrowych z sieciami energetycznymi.<br>
							- Badania inteligentnych sieci typu Smart Grid.<br>
							- Analiza możliwości poprawy wydajności systemu przesyłu energii.<br>
							- Badania hybrydowych systemów wytwarzania energii.<br>
							- Synteza stochastycznych systemów automatycznego sterowania.<br>
							- Metody modelowania obiektów złożonych z wykorzystaniem sieci neuronowych.<br>
							- Badanie wpływu współczynników kryterialnych na jakość modeli złożonych.<br>
							- Komputerowe generowanie obiektów kombinatorycznych.<br>
							- Komputerowa implementacja i badania wybranych algorytmów grafowych.<br>
							- Budowa symulatorów cyfrowych układów elektrycznych i elektronicznych.<br>
							- Wielowariantowa analiza złożonych układów analogowych.
							<p></p>
						</div>
						<div class="col-md-4"><img alt="..." class="d-block img-fluid float-right mr-3" src="http://localhost:8000/images/pei.png"></div>
						<div class="col-md-8"><img alt="..." class="d-block img-fluid float-right mr-3" src="http://localhost:8000/images/weii.png"></div>
					</div>
					<div class="row">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th scope="col">
										<div class="text-right">
											<h2>Przydatne linki</h2>
										</div>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr onclick="window.location.assign('http://www.pei.prz.rzeszow.pl/plan_zajec_semestr.php');">
									<th class="text-right" role="button" scope="row">Konsultacje pozostałych pracowników katedry</th>
								</tr>
								<tr onclick="window.location.assign('https://usos.prz.edu.pl');">
									<th class="text-right" role="button" scope="row">USOSweb</th>
								</tr>
								<tr onclick="window.location.assign('http://www.pei.prz.rzeszow.pl');">
									<th class="text-right" role="button" scope="row">Strona Główna PEI</th>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>@endsection
</body>
</html>