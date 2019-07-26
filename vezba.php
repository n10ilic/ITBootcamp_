<?php
// IF NAREDBA //
echo "IF naredba <br><br>";
//Za dva uneta broja ispisati koji je veći a koji je manji.
$a=5;
$b=34;
if ($a>$b)
{
	echo "a vece";
}
elseif ($b>$a)
{
	echo "b vece";
}
else
{
	echo "jednaki";
}
echo "<br><br>";
//Ispitati da li je uneta temperatura u plusu ili je u minusu. Ukoliko je temperatura nula, računati da je u plusu.
$temp=35;
if ($temp>=0)
{
	echo "temp je u plusu";
}
else
{
	echo "temp je u minusu";
}
echo "<br><br>";
/*U odnosu na preuzete vrednosti AM i PM 
	sa svog računara, ispisati da li je 
	trenutno jutro ili popodne.*/

$vreme=date('A');
if ($vreme="PM")
{
	echo "popodne";
}
else
{
	echo "prepodne";
}
echo "<br><br>";
//Za preuzetu godinu sa računara i unetu godinu rođenja izračunati da li je osoba punoletna ili maloletna.
$godina=date('Y');
$godRodjenja=1993;
$punoletstvo=18;
$trenGod=$godina-$godRodjenja;
if ($punoletstvo>$trenGod)
{
	echo "osoba nije punoletna";
}
else
{
	echo "osoba je punoletna";
}
echo "<br><br>";
//Odrediti najveći od tri uneta broja
$a=222344441;
$b=2102222;
$c=202222;
//pretpostavka
$maks=$a;
if ($b>$maks)
{
	echo "Najveci je $b";
}
elseif ($c>$maks)
{
	echo "Najveci je $c";
}
else
{
	echo "Najveci je $a";
}
echo "<br><br>";
//----------------------------------------------------------------------
/*Na osnovu unetog broja poena ispitati koju ocenu profesor treba da upiše učeniku.
Učenik je položio ispit ukoliko ima više od 50 poena, u suprotnom je pao ispit.
Za više od 50 poena učenik dobija ocenu 6,
za više od 60 poena učenik dobija ocenu 7,
za više od 70 poena učenik dobija ocenu 8,
za više od 80 poena učenik dobija ocenu 9 i
za više od 90 poena učenik dobija ocenu 10.*/
$poeni=20;
if($poeni>=0 and $poeni < 50)
	{
		echo "Pao ispit";
	}
	elseif($poeni <= 60)
	{
		echo "Ocena 6";
	}
	elseif($poeni <= 70)
	{
		echo "Ocena 7";
	}
	elseif($poeni <= 80)
	{
		echo "Ocena 8";
	}
	elseif($poeni <= 90)
	{
		echo "Ocena 9";
	}
	elseif($poeni <= 100)
	{
		echo "Ocena 10";
	}
	else
	{
		echo "Pogrešan unos";
	}

	echo "<br><br>";

//Preuzeti koji je dan u nedelji sa računara i ispitati da li je to radni dan ili je u pitanju vikend.
$dan = date('N');
if ($dan<=5)
{
	echo "radni";
}
elseif ($dan>=6)
{
	echo "vikend";
}
elseif ($dan>=8)
{
	echo "pogresan unos";
}
echo "<br><br>";
/*Za vreme preuzeto sa računara ispisati dobro jutro za vreme manje od 12 sati ujutru, 
dobar dan za vreme manje od 18 sati popodne i u ostalim  slučajevima ispisati dobro veče.*/
$vreme=date('G');
if ($vreme<12)
{
	echo "dobro jutro";
}
elseif ($vreme>=12 and $vreme<18)
{
	echo "dobar dan";
}
else
{
	echo "dobro vece";
}
echo "<br><br>";

// Uporediti dva uneta datuma i ispisati koji od njih je raniji.
$dan1=1;
$mesec1=1;
$godina1=2000;
$dan2=2;
$mesec2=2;
$godina2=2001;
if($godina1 < $godina2) 
{
	echo "Prvi je raniji";
}
elseif($godina1 > $godina2) 
{
	echo "Drugi je raniji";
}
elseif($mesec1 < $mesec2) 
{
	echo "Prvi je raniji";
}
elseif($mesec1 > $mesec2) 
{
	echo "Drugi je raniji";
}
elseif($dan1 < $dan2) 
{
	echo "Prvi je raniji";
}
elseif($dan2 < $dan1) 
{
	echo "Drugi je raniji";
}
else 
{
	echo "Datumi su jednaki";
}

echo "<br><br>";
/*Radno vreme jedne programerske
 firme je od 9h do 17h. Preuzeti vreme sa računara 
 i ispitati da li u to vreme firma radi ili ne radi.*/
$vreme = date('G');
if ($vreme>=9 and $vreme<=17)
{
	echo "firma radi";
}
else
{
	echo "ne radi";
}
echo "<br><br>";

/*Za unet početak i kraj radnog vremena dva lekara ispisati
DA ukoliko se njihove smene preklapaju, u suprotnom ispisati NE.
*/
$pocetak1=7;
$kraj1=14;
$pocetak2=15;
$kraj2=10;
if($pocetak1 < $pocetak2) 
{
	if($pocetak2 <= $kraj1) 
	{
		echo "<p>DA</p>";
	}
	else 
	{
		echo "<p>NE</p>";
	}
}
else 
{
	if($pocetak1 <= $kraj2) 
	{
		echo "<p>DA</p>";
	}
	else 
	{
		echo "<p>NE</p>";
	}
}
echo "<br><br>";
//kod sa drajva-ne radi dobro
//Za uneti broj ispitati da li je paran ili nije.
$broj=54;
if ($broj % 2 == 0)
{
	echo "paran";
}
else
{
	echo "nije";
}
echo "<br><br>";
//Za uneti broj ispisati da li je deljiv sa 3 ili ne.
$broj=1;
if ($broj % 3 == 0)
{
	echo "jeste";
}
else
{
	echo "nije";
}
echo "<br><br>";
//Za dva uneta broja, od većeg učitanog broja oduzeti manji i rezultat ispisati na ekranu.
$br1=10;
$br2=20;
if ($br1>$br2)
{
	echo $br1-$br2;
}
elseif ($br2>$br1)
{
	echo $br2-$br1;
}
else
{
	echo "brojevi su jednaki";
}
echo "<br><br>";
/*Za uneti broj ispitati da li je on manji ili veći od nule. 
Ukoliko je manji ili jednak nuli ispisati njegov prethodnik, 
a ukoliko je veći od nule ispisati njegov sledbenik.
*/
$broj=10;
if ($broj>0)
{
	echo $broj+1;
}
elseif ($broj<=0)
{
	echo $broj-1;
}
echo "<br><br><br>";
// Za tri uneta broja ispisati koji od njih je najveći, koji od njih je srednji, a koji od njih je najmanji. 
$a = 5;
$b = -3;
$c = -7;
	
//Odredimo najveći
$maks = $a;
if($maks < $b)
{
	$maks = $b;
}
if($maks < $c)
{
	$maks = $c;
}
echo "Maksimum je $maks, ";
	
//Odredimo najmanji
$min = $a;
if($min > $b)
{
	$min = $b;
}
if($min > $c)
{
	$min = $c;
}
echo "Minimum je $min, ";

//Odredimo srednji
$sum = $a + $b + $c;
$srednji = $sum - $maks - $min;
echo "Srednji je $srednji";
echo "<br><br>";
//Za učitani broj ispitati da li je ceo.
$broj=25;
if ($broj==(int)($broj))
{
	echo "jeste";
}
else
{
	echo "nije";
}
echo "<br><br>";

//Učitati dva cela broja i ispitati da li je veći od njih paran. 
$br1=41;
$br2=22;
if ($br2>$br1)
{
	if ($br2 % 2 == 0)
	{
		echo "jeste";
	}
	else
	{
		echo "nije";
	}
}
if ($br1>$br2)
{
	if($br1 % 2 == 0)
	{
		echo "jeste";
	}
	else
	{
		echo "nije";
	}
}
echo "<br><br><br>";
//Naći koji je najveći od tri uneta broja $a, $b i $c.
$a=5;
$b=10;
$c=15;
$maks=$a;
if($maks<$b)
{
	$maks=$b;
}
if ($maks < $c)
{
	$maks=$c;
}
echo "maksimum je $maks";
echo "<br><br>";

/*Ispisati na ekranu „ekstremna temperatura“ ukoliko je temperatura manja od -15 
stepeni Celzijusovih  i veća od 40 stepeni Celzijusovih.
*/
$temp=25;
if ($temp<-15 or $temp>40)
{
	echo "ekstremna temperatura";
}
else
{
	echo "normalna temperatura";
}
echo "<br><br>";
/* Ispitati da li je godina prestupna. (Godinu preuzeti sa vremena na Vašem računaru).
Prestupna je ona godina koja je deljiva sa 4, ako nije deljiva sa 100, mada ipak jeste deljiva sa 400.
*/
$god = 2000;
	if ($god%400 == 0 or ($god%4==0 and $god%100!=0)) 
	{
		echo "Prestupna godina";
	}
	else
	{
		echo "Godina nije prestupna";
	}

echo "<br><br><br>";




// SWITCH NAREDBA //
echo "Switch naredba <br><br>";
/*Jedan butik ima radno vreme od 9h do 20h radnim danima, 
a vikendom od 10h do 18h. Preuzeti dan i vreme sa računara i ispitati da li je butik trenutno otvoren.
*/
$dan=date('N');
$sat=date('G');
switch($dan)
	{
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
			if($sat>=9 and $sat<=20)
			{
				echo "Radno vreme";
			}
			else
			{
				echo "Neradno vreme";
			}
		break;
			
		case 6:
		case 7:
			if($sat>=10 and $sat<=18)
			{
				echo "Radno vreme";
			}
			else
			{
				echo "Neradno vreme";
			}
		break;
		
		default:
			echo "Pogrešan unos";
	}
echo "<br><br>";
//Za uneti redni broj dana ispisati koji je to dan u nedelji  (1. dan je ponedeljak).
$dan=2;
switch ($dan)
{
	case 1:
	{
		echo "ponedeljak";
		break;
	}
	case 2:
	{
		echo "utorak";
		break;
	}
	case 3:
	{
		echo "sreda";
		break;
	}
	case 4:
	{
		echo "cetvrtak";
		break;
	}
	case 5:
	{
		echo "petak";
		break;
	}
	case 6:
	{
		echo "subota";
		break;
	}
	case 7:
	{
		echo "nedelja";
		break;
	}
}
echo "<br><br>";

//Za unetu prosečnu ocenu učenika ispisati njegov uspeh te školske godine.
$ocena=4;
switch ($ocena)
{
	case 1:
	{
		echo "nedovoljan";
		break;
	}
	case 2:
	{
		echo "dovojan";
		break;
	}
	case 3:
	{
		echo "dobar";
		break;
	}
	case 4:
	{
		echo "vrlo dobar";
		break;
	}
	case 5:
	{
		echo "odlican";
		break;
	}
}
echo "<br><br>";

/*Za uneti paran broj manji od 10 ispitati da li je uneti broj nula,
dvojka, četvorka, šestica, osmica ili je unos pogrešan.*/
$broj=4;
if($broj<10)
{
	switch ($broj)
	{
		case 2:
		{
			echo "unos je 2";
			break;
		}
		case 4:
		{
			echo "unos je 4";
			break;
		}
		case 6:
		{
			echo "unos je 6";
			break;
		}
		case 8:
		{
			echo "unos je 8";
			break;
		}
	}
}
else
{
	echo "pogresan unos";
}
echo "<br><br>";

/*Za uneta dva broja i karakter napraviti kalkulator koji vrši množenje ta dva 
broja ukoliko je uneto slovo ’m’, deljenje 
ukoliko je uneto slovo ’d’, sabiranje ukoliko je uneto slovo ’s’ ili
oduzimanje ukoliko je uneto slovo ’o’.*/
$br1=10;
$br2=2;
$racun="d";
switch ($racun)
{
	case "m":
	{
		echo $br1*$br2;	
	}
	break;

	case "d":
	{
		echo $br1/$br2;
	}
	break;

	case "o":
	{
		echo $br1-$br2;
	}
	break;
	default:
	break;
}
echo "<br><br>";

//Za preuzeti dan sa računara ispisati još koliko dana je preostalo do vikenda.
$danas=date('N');
switch ($danas)
{
	case 1:
	{
		echo "ostalo je jos 4 dana";
	}
	break;
	case 2:
	{
		echo "ostalo je jos 3 dana";
	}
	break;
	case 3:
	{
		echo "ostalo je jos 2 dana";
	}
	break;
	case 4:
	{
		echo "ostalo je jos 1 dana";
	}
	break;
	case 5:
	{
		echo "ostalo je jos 0 dana";
	}
	break;
	case 6:
	case 7:
	{
		echo "vikend je";
	}
	default:
	{
		echo "pogresan unos";
	}
}
echo "<br><br>";

//Preuzeti redni broj meseca sa računara i ispisati koji je to mesec u godini.
$mesec=date('m');
switch ($mesec)
{
	case 1:
		echo "Januar";
		break;
	case 2:
		echo "Februar";
		break;
	case 3:
		echo "Mart";
		break;
	case 4:
		echo "April";
		break;
	case 5:
		echo "Maj";
		break;
	case 6:
		echo "Jun";
	case 7:
		echo "Jul";
		break;
	case 8:
		echo "Avgust";
		break;
	case 9:
		echo "Septembar";
		break;
	case 10:
		echo "Oktobar";
		break;
	case 11:
		echo "Novembar";
		break;
	case 12:
		echo "Decembar";
		break;
	default:
		echo "Los unos";
}
echo "<br><br>";
/*Preuzeti redni broj meseca sa računara i ispisati koliko taj mesec ima dana. 
Ukoliko je u pitanju mesec februar, preuzeti i godinu sa računara, ispitati da li 
je godina prestupna i na osnovu toga ispisati broj dana meseca februara.
*/
$mesec = date('m');
	switch($mesec)
	{
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 12:
			echo "31 dan";
			break;
		case 2:
			$god = date('Y');
			if ($god%400 == 0 or ($god%4==0 and $god%100!=0)) 
			{
				echo "29 dana";
			}
			else
			{
				echo "28 dana";
			}
			break;
		case 4:
		case 6:
		case 9:
		case 11:
			echo "30 dana";
			break;
		default:
			echo "Loš unos";
	} //kopirao kod 
	/*objasnjenje: slucaj kada su meseci 1,3,5...itd imaju 31 dan, a ostali: 4,6,9,11 imaju 30... sem case 2, koji
	ima 29 dana kada je godina prestupna, sto se izracunava po postavljenom kodu, sem kad nije prestupna
	i tada ima 28 dana*/
echo "<br><br>";

/*Na osnovu unete boje na engleskom jeziku obojiti tekst paragrafa u crveno, zeleno ili plavo.
Ukoliko nije uneta ni jedna od ove tri boje, tekst paragrafa obojiti u žuto.
*/
$boja="plava";
switch ($boja)
{
    case "crvena":
        echo "Odabrali ste crvenu boju";
        break;
    case "plava":
        echo "Odabrali ste plavu boju";
        break;
    case "zelena":
        echo "Odabrali ste zelenu boju";
        break;
    default:
        echo "Niste odabrali crvenu,plavu i zelenu boju.";
}
echo "<br><br><br>";

//WHILE petja?//

//FOR PETLJA//
echo "FOR petlja";
echo "<br><br>";
//1)Ispisati brojeve od 1 do 20
for ($i=1; $i<=20; $i++)
{
	echo $i;
	echo "<br>";
}
echo "<br><br>";
//2)Ispisati brojeve od 20 do 1
for($i=20; $i>=1; $i--)
	{
		echo $i;
		echo "<br>";
	}
echo "<br><br>";
//Ispisati parne brojeve od 1 do 20
for ($i=1; $i<=20; $i++)
{
	if ($i % 2 == 0)
	{
		echo $i;
		echo "<br>";
	}
}
echo "<br><br>";
//Ispisati dvostruku vrednost brojeva od 5 do 15
for ($i=5; $i<=15; $i++)
{
	echo $i*2;
	echo "<br>";
}
echo "<br><br>";
//Odrediti sumu brojeva od 1 do 100
$suma=0;
for ($i=1; $i<=100; $i++)
{
	$suma=$suma+$i;
}
echo $suma;
echo "<br><br>";

//Odrediti sumu brojeva od 1 do n
$suma=0;
$n=10;
for ($i=1; $i<=$n; $i++)
{
	$suma=$suma+$i;
}
echo $suma;
echo "<br><br>";

//7)Odrediti sumu brojeva od n do m
$n=1;
$m=15;
$suma=0;
for ($i=$n; $i<=$m; $i++)
{
	$suma=$suma+$i;
}
echo $suma;
echo "<br><br>";

//8)Odrediti proizvod brojeva od n do m
$n=2;
$m=10;
$proizvod=1;
for ($i=$n; $i<=$m; $i++)
{
	$proizvod=$proizvod*$i;
}
echo $proizvod;
echo "<br><br>";

//9)Odrediti sumu kvadrata brojeva od n do m
$suma=0;
$n=5;
$m=10;
for ($i=$n; $i<=$m; $i++)
{
	$suma=$i*$i;
}
echo $suma;
echo "<br><br>";

//16)Sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30.

$suma=0;
for ($i=1; $i<=30; $i++)
{
	if ($i % 9 == 0)
	{
		$suma=$suma+$i;
	}
}
echo $suma;
echo "<br><br>";

//17)Odrediti proizvod svih brojeva deljivih sa 11 u intervalu od 20 do 100
$p=1;
for ($i=20; $i<=100; $i++)
{
	if ($i % 11 == 0)
	{
		$p=$p*$i;
	}
}
echo $p;
echo "<br><br>";

//18)Prebrojati koliko ima brojeva deljivih sa 13 u intervalu od 5 do 150.
$broj=1; //PITATI-NIJE MI JASNO
for ($i=5; $i<=150; $i++)
{
    if ($i % 13 == 0)
    {
        $broj++;
    }
}
echo " ima $broj brojeva";
echo "PITAJ - NIJE JASAN ZADATAK";
echo "<br><br>";
//19)Ispisati aritmetičku sredinu brojeva od n do m.
$n=1;
$m=10;
$suma=0;
$br=0; //PITATI STA JE BR=0?
for($i=$n; $i<=$m; $i++)
{
	$suma=$suma+$i;
	$br=$br+1;
}
$srVr=$suma/$br;
echo "Srednja vrednost je $srVr";
echo "<br><br>";
//20)Prebrojati koliko brojeva od n do m je pozitivno, a koliko njih je negativno.
$n=-10;
$m=20;
$pozitivniKontejner=0;
$negativniKontejner=0;
for($i=$n; $i<=$m; $i++)
{
	if ($i<0)
	{
		$negativniKontejner++;
	}
	if ($i>0)
	{
		$pozitivniKontejner++;
	}
	
}
echo "negativni su" . $negativniKontejner;
echo "<br>";
echo "pozitivni su" . $pozitivniKontejner;


/*
21)Prebrojati koliko je brojeva od 5 do 50 koji su deljivi sa 3 ili sa 5.
22)Prebrojati i izračunati sumu brojeva od n do m kojima je poslednja cifra 4 i parni su.
23)Ispisati brojeve od n do m, koji su deljivi sa a.
24)Ispisati brojeve od n do m koji nisu deljivi sa a
25)Odrediti sumu brojeva od n do m koji su nisu deljivi brojem a
26)Odrediti proizvod brojeva od n do m koji su deljivi brojem a
*/


?>


