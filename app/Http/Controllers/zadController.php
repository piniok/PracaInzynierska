<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class zadController extends Controller
{
    public function genPermutacja()
    {

        $item = array(1, 2, 3, 4, 5, 6,  7,  8, 9
        );

        $ilosc = rand(4, 8);

        for ($i = 0;$i <= $ilosc;$i++)
        {

            $odp[$i] = $item[$i];

        }
        shuffle($odp);

        $tekst = "Wyznacz numer permutacji";
        $permutacja = implode(",", $odp);

        return view('pages/zadania/nrpermutacji', compact('tekst', 'permutacja'));

    }
    public function genTranspozycja()
    {
        $item = array(
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9
        );

        $ilosc = rand(4, 8);

        for ($i = 0;$i <= $ilosc;$i++)
        {

            $losowa[$i] = $item[$i];

        }
        shuffle($losowa);

        $tekst = "Rozłóż poniższą permutację na transpozycje sąsiednich elementów";
        $permutacja = implode(",", $losowa);

        return view('pages/zadania/transpozycje', compact('tekst', 'permutacja'));

    }
    public function genKodperm()
    {

        $Nrp = rand(1, 999);
        $s = rand(2, 9);
        $factorial = 1;
        for ($x = $s - 1;$x >= 1;$x--)
        {

            $factorial = $factorial * $x;

        }

        if ($factorial >= $Nrp)
        {
            return view('pages/zadania/kodpermutacji', compact('Nrp', 's'));
        }
        else
        {
            if ($Nrp <= 2) $s = rand(2, 9);
            else if ($Nrp >= 2 && $Nrp <= 6) $s = rand(3, 9);
            else if ($Nrp >= 6 && $Nrp <= 24) $s = rand(4, 9);
            else if ($Nrp >= 24 && $Nrp <= 120) $s = rand(5, 9);
            else if ($Nrp >= 120 && $Nrp <= 720) $s = rand(6, 9);
            else if ($Nrp >= 720 && $Nrp <= 5040) $s = rand(7, 9);
            else if ($Nrp >= 5040 && $Nrp <= 40320) $s = rand(8, 9);
            else if ($Nrp >= 40320 && $Nrp <= 362880) $s = 9;
            return view('pages/zadania/kodpermutacji', compact('Nrp', 's'));

        }

    }

    public function genPolecenia()
    {
        $template = array(
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9
        );
        $iloscel = rand(5, 8);
        for ($i = 0;$i <= $iloscel;$i++)
        {

            $odp[$i] = $template[$i];

        }
        shuffle($odp);

        $permutacja = implode(",", $odp);

        //odpowiedzi
        $a = "wyznaczyć  Sn, do którego należy p, czyli wyznaczyć  n";
        $b = "wyznaczyć punkty stałe permutacji p ";
        $c = "wyznaczyć permutację odwrotną do p";
        $d = "wyznaczyć permutację, której postać 1-wierszowa powstała z zapisania od końca postaci 1-wierszowej permutacji p oraz porównać zapisy cyklowe obu permutacji";
        $e = "wyznaczyć typ permutacji p ";
        $f = "wyznaczyć rząd permutacji p";
        $g = "zapisać permutację p w kanonicznej postaci cyklowej";
        $h = "cyklicznie przesunąć permutację p w lewo lub w prawo (np. o 3 elementy) ";
        $i = "wyznaczyć liczbę wszystkich cykli w permutacji p ";
        $j = "wyznaczyć liczbę cykli parzystej długości w permutacji p ";
        $k = "wyznaczyć liczbę cykli nieparzystej długości w permutacji p ";
        $l = "wyznaczyć wszystkie inwersje w permutacji p";
        $m = "wyznaczyć liczbę inwersji w permutacji p";
        $n = "wyznaczyć wektor inwersyjny permutacji p";

        $input = array(
            "$a",
            "$b",
            "$c",
            "$d",
            "$e",
            "$f",
            "$g",
            "$h",
            "$i",
            "$j",
            "$k",
            "$l",
            "$m",
            "$n",
        );
        $rand_keys = array_rand($input, 5);
        $odp1 = $input[$rand_keys[0]];
        $odp2 = $input[$rand_keys[1]];
        $odp3 = $input[$rand_keys[2]];
        $odp4 = $input[$rand_keys[3]];
        $odp5 = $input[$rand_keys[4]];

        return view('pages/zadania/polecenia', compact('odp1', 'odp2', 'odp3', 'odp4', 'odp5', 'permutacja', 'iloscel'));
    }

    public function genGraf()
    {

        $tablica = array(
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9
        );

        $rozmiartab = rand(3, 8);

        for ($i = 0;$i <= $rozmiartab;$i++)
        {

            $odp[$i] = $tablica[$i];

        }

        $rankey = rand(2, sizeof($odp));
        $key2 = array_rand($odp, $rankey);

        for ($i = 0;$i <= $rankey - 1;$i++)
        {

            $odp2[$i] = $odp[$key2[$i]];
            $odpowiedz[$i] = $odp2[$i];
        }
        $rankey2 = rand(2, sizeof($odp));
        $key3 = array_rand($odp, $rankey2);

        for ($i = 0;$i <= $rankey2 - 1;$i++)
        {

            $odp3[$i] = $odp[$key3[$i]];
            $odpowiedz2[$i] = $odp3[$i];
        }
        $rankey3 = rand(2, sizeof($odp));
        $key4 = array_rand($odp, $rankey3);

        for ($i = 0;$i <= $rankey3 - 1;$i++)
        {

            $odp4[$i] = $odp[$key4[$i]];
            $odpowiedz3[$i] = $odp4[$i];
        }

        $wynik4 = array_merge($odp, $odpowiedz, $odpowiedz2, $odpowiedz3);
        for ($i = 0;$i <= sizeof($wynik4) - 2;$i++)
        {
            if ($wynik4[$i] == $wynik4[$i + 1])
            {
                unset($wynik4[$i]);
                array_merge($wynik4);

            }

        }
        $wynik4w = $wynik4;
        foreach (array_keys($wynik4w, '1') as $del)
        {
            unset($wynik4w[$del]);
            array_values($wynik4w);
        }

        $lancuch2 = implode("--", $wynik4w);

        $lancuch = implode("--", $wynik4);
        $a = "zbiory minimalnych pokryć wierzchołkowych";
        $b = "maksymalne zbiory niezależnych wierzchołków";
        $c = "maksymalne zbiory niezależnych krawędzi";
        $d = "minimalne pokrycia krawędziowe";
        $e = "minimalne zbiory dominujące wierzchołków";
        $f = "minimalne zbiory totalnie dominujące wierzchołków";
        $g = "wszystkie zbiory niezlależnych wierzołków";

        $input = array(
            "$a",
            "$b",
            "$c",
            "$d",
            "$e",
            "$f",
            "$g"
        );
        $rand_keys = array_rand($input, 5);
        $odpa = $input[$rand_keys[0]];
        $odpb = $input[$rand_keys[1]];
        $odpc = $input[$rand_keys[2]];
        $odpd = "1--$lancuch2";
        $link = "https://chart.googleapis.com/chart?cht=gv&chl=strict 
        graph{rankdir=LR;layout=circo;root=1;overlap=scale;bgcolor=transparent;
            $lancuch;}";

        return view('pages/zadania/grafy', compact('link', 'odpa', 'odpb', 'odpc', 'odpd'));
    }
    public function genkolGraf()
    {

        $tablica = array(
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9
        );

        $rozmiartab = rand(5, 8);

        for ($i = 0;$i <= $rozmiartab;$i++)
        {

            $odp[$i] = $tablica[$i];

        }

        $rankey = rand(2, sizeof($odp));
        $key2 = array_rand($odp, $rankey);

        for ($i = 0;$i <= $rankey - 1;$i++)
        {

            $odp2[$i] = $odp[$key2[$i]];
            $odpowiedz[$i] = $odp2[$i];
        }
        $rankey2 = rand(2, sizeof($odp));
        $key3 = array_rand($odp, $rankey2);

        for ($i = 0;$i <= $rankey2 - 1;$i++)
        {

            $odp3[$i] = $odp[$key3[$i]];
            $odpowiedz2[$i] = $odp3[$i];
        }
        $rankey3 = rand(2, sizeof($odp));
        $key4 = array_rand($odp, $rankey3);

        for ($i = 0;$i <= $rankey3 - 1;$i++)
        {

            $odp4[$i] = $odp[$key4[$i]];
            $odpowiedz3[$i] = $odp4[$i];
        }

        $wynik4 = array_merge($odp, $odpowiedz, $odpowiedz2, $odpowiedz3);

        for ($i = 0;$i <= sizeof($wynik4) - 2;$i++)
        {
            if ($wynik4[$i] == $wynik4[$i + 1])
            {
                unset($wynik4[$i]);
                array_merge($wynik4);

            }
        }
        $wynik4w = $wynik4;
        foreach (array_keys($wynik4w, '1') as $del)
        {
            unset($wynik4w[$del]);
            array_values($wynik4w);
        }
        array_merge($wynik4w);
        $lancuch2 = implode("--", $wynik4w);
        $lancuch = implode("--", $wynik4);
        $a = "Metoda Dodawania Krawędzi";
        $b = "Metoda Usuwania Krawędzi";
        $c = "Algorytm Prime'a";
        $d = "Algorytm Kruskala";

        $input = array(
            "$a",
            "$b"
        );
        shuffle($input);
        $odpa = $input[0];
        $odpc = "1--$lancuch2";
        $link = "https://chart.googleapis.com/chart?cht=gv&chl=strict graph{rankdir=LR;layout=circo;root=1;overlap=scale;bgcolor=transparent;$lancuch;}";
        return view('pages/zadania/kolorowaniegrafus', compact('link', 'odpa', 'odpc'));

    }
    public function gendGraf()
    {

        $tablica = array(
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9
        );

        $rozmiartab = rand(5, 8);



        for ($i = 0;$i <= $rozmiartab;$i++)
        {

            $odp[$i] = $tablica[$i];

        }

        $rankey = rand(2, sizeof($odp));
        $key2 = array_rand($odp, $rankey);

        for ($i = 0;$i <= $rankey - 1;$i++)
        {

            $odp2[$i] = $odp[$key2[$i]];
            $odpowiedz[$i] = $odp2[$i];
        }
        $rankey2 = rand(2, sizeof($odp));
        $key3 = array_rand($odp, $rankey2);

        for ($i = 0;$i <= $rankey2 - 1;$i++)
        {

            $odp3[$i] = $odp[$key3[$i]];
            $odpowiedz2[$i] = $odp3[$i];
        }
        $rankey3 = rand(2, sizeof($odp));
        $key4 = array_rand($odp, $rankey3);

        for ($i = 0;$i <= $rankey3 - 1;$i++)
        {

            $odp4[$i] = $odp[$key4[$i]];
            $odpowiedz3[$i] = $odp4[$i];
        }

        $wynik4 = array_merge($odp, $odpowiedz, $odpowiedz2, $odpowiedz3);

        for ($i = 0;$i <= sizeof($wynik4) - 2;$i++)
        {
            if ($wynik4[$i] == $wynik4[$i + 1])
            {
                unset($wynik4[$i]);
                array_merge($wynik4);

            }
        }
        $wynik4w = $wynik4;
        foreach (array_keys($wynik4w, '1') as $del)
        {
            unset($wynik4w[$del]);
            array_merge($wynik4w);
        }
        array_merge($wynik4w);
        $lancuch2 = implode("--", $wynik4w);
        $lancuch = implode("--", $wynik4);

        $c = "Algorytm Prime'a";
        $d = "Algorytm Kruskala";

        $input = array(
            "$c",
            "$d"
        );
        shuffle($input);

        $odpa = $input[0];
        $odpc = "1--$lancuch2";
        $link = "https://chart.googleapis.com/chart?cht=gv&chl=strict graph{rankdir=LR;layout=circo;root=1;overlap=scale;bgcolor=transparent;$lancuch;}";
        return view('pages/zadania/dgrafy', compact('link', 'odpa', 'odpc'));

    }
    public function genDrzewo()
    {
        $tab = array(
            0,
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9
        );

        $ilosc = rand(4, 6);

        for ($i = 0;$i <= $ilosc;$i++)

        {

            $odp[$i] = $tab[$i];

        }
        $roznica = array_diff($tab, $odp);

        $roznica = array_merge($roznica);

        $ilosc2 = rand(1, 9 - $ilosc);

        for ($i = 0;$i <= $ilosc2 - 1;$i++)

        {

            $odp2[$i] = $roznica[$i];

        }

        $scalona = array_merge($odp, $odp2);
        $rozmbazy = rand(4, 5);

        for ($i = 0;$i <= $rozmbazy;$i++)

        {

            $baza[$i] = $scalona[$i];

        }

        $bazaed = array_diff($scalona, $baza);

        $bazaed = array_merge($bazaed);

        shuffle($baza);

        $lanbaz = implode("--", $baza);
        $para = array();
        for ($i = 0;$i <= sizeof($bazaed) - 1;$i++)

        {

            $para[$i] = ("$baza[$i]--$bazaed[$i]");
        }
        $lanpar = implode(";", $para);
        $linkd = "https://chart.googleapis.com/chart?cht=gv&chl=strict graph{rankdir=LR;layout=sfdp;bgcolor=transparent;overlap=scale;$lanbaz;$lanpar}";
        return view('pages/zadania/drzewa', compact('linkd'));
    }

    public function genBaza()
    {

        global $baza;

        $tab = array(
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9
        );

        $elem = rand(2, 5);

        for ($i = 0;$i <= $elem;$i++)
        {

            $baza[$i] = $tab[$i];

        }

        global $rozmiarcykl;

        global $keys;

        $rozmiarcykl = rand(2, sizeof($baza));

        $keys = array_rand($baza, $rozmiarcykl);

    }

    public function genCykl()
    {

        global $rozmiarcykl;

        global $keys;

        global $baza;

        $this->genBaza();

        for ($i = 0;$i <= $rozmiarcykl - 1;$i++)

        {

            $test[$i] = $baza[$keys[$i]];

        }

        shuffle($test);

        $test2 = implode(",", $test);

        return $test2;

    }

    public function skladaniepermutacji()
    {
        $ilosccykli = 20;

        for ($i = 0;$i <= $ilosccykli - 1;$i++)

        {

            $cykle[$i] = $this->genCykl();

        }

        global $baza;

        shuffle($baza);

        $bazap = implode(",", $baza);

        shuffle($baza);

        $bazap2 = implode(",", $baza);

        for ($i = 0;$i <= sizeof($cykle) - 1;$i++)
        {

            $cyklepop[$i] = "($cykle[$i])";

        }

       //dane do koncowej tabeli

//permutacje bazap,bazap2,bazap3,bazap4,bazap5

shuffle($baza);

$bazap3=implode (",",$baza);

shuffle($baza);

$bazap4=implode (",",$baza);

shuffle($baza);

$bazap5=implode (",",$baza);

//potegi

$pot1 = rand(-99,99);

$pot2 = rand(-199,199);

$pot3 = rand(-299,299);

$pot4 = rand(-9,9);


$koncowa = array("<$bazap>","<$bazap2>",

"($cykle[0])","($cykle[1])","($cykle[2])","($cykle[3])","($cykle[4])","($cykle[9])","($cykle[10])","($cykle[11])",

"(($cykle[5])($cykle[6])<sup>$pot2</sup>)","($cykle[7])<$bazap3>","<$bazap4>($cykle[8])<sup>$pot1</sup>");

        shuffle($koncowa);

        for ($i = 0;$i <= 3;$i++)
        {

            $wynik[$i] = $koncowa[$i];

        }

        $lanwynik = implode($wynik);
        return view('pages/zadania/skladaniepermutacji', compact('lanwynik'));
    }
}

