<?php
/*Za dva uneta broja ispisati koji je veći a koji je manji.*/
    $a = 7;
    $b = 3;
    if ($a>$b)
    {
        echo "Vrednost 'a' je veca od vrednosti 'b'";
    }
echo "<br>";
echo "<br>";
    $a = 5;
    $b = 5;
    if ($a==$b)
    {
        echo "a i b su jednaki";
    }
echo "<br>";
echo "<br>";
    $a = 5;
    $b = 10;
    if ($a!=$b)
    {
        echo "a je razlicito b";
    }
echo "<br>";
echo "<br>";

    /* da li je a vece od b ili nije */
    $a = 7;
    $b = 13;
    if ($a > $b)
    {
        echo "vrednost a je veca od vrednosti b";
    }
    else
    {
        echo "vrednost a nije veca od vrednosti b";
    }
echo "<br>";
echo "<br>";
    $a = 5;
    $b = 3;
    if ($a<$b)
    {
        echo "a manje od b";
    }
    else if ($a>$b)
    {
        echo "a vece od b";
    }
    else
    {
        echo "a jednako b";
    }
echo "<br>";
echo "<br>";

    $a=1;
    $b=5;
    if ($a<$b)
    {
        echo "1 je manji od 5";
    }
echo "<br>";
echo "<br>";
/*Ispitati da li je uneta temperatura u plusu ili je u minusu. Ukoliko je temperatura nula, računati da je u plusu.*/
    $c=10;
    $nula=0;
    if ($c>=$nula)
    {
        echo "temperatura je u plusu";
    }
    
    else 
    {
        echo "temperatura je u minusu";
    }

echo "<br>";
echo "<br>";

/*U odnosu na pol (muški/ženski) koji je korisnik uneo prikazati odgovarajući avatar.*/
    $pol="M";
    if ($pol=="M")
    {
        echo "<img src='slike/muski.png'>";
    }
    elseif ($pol=="Z")
    {
        echo "<img src='slike/zenski.png'>";
    }

echo "<br>";
echo "<br>";
    
/*U odnosu na preuzete vrednosti AM i PM sa svog računara, ispisati da li je trenutno jutro ili popodne.*/
    $x=date("A");
    echo $x;
    echo "<br>";
    if ($x=="PM")
    {
        echo "Popodne";
    }
    else
    {
        echo "jutro";
    }

echo "<br>";
echo "<br>";

/*Na osnovu unetog broja poena ispitati koju ocenu profesor treba da upiše učeniku.
Učenik je položio ispit ukoliko ima više od 50 poena, u suprotnom je pao ispit.
Za više od 50 poena učenik dobija ocenu 6,
za više od 60 poena učenik dobija ocenu 7,
za više od 70 poena učenik dobija ocenu 8,
za više od 80 poena učenik dobija ocenu 9 i
za više od 90 poena učenik dobija ocenu 10.
*/
$ocena=5;
$poeni=81;
if ($poeni<50)
{
    echo "student je pao ispit";
}
elseif ($poeni>90)
{
    echo $ocena+5;
}
elseif ($poeni>80)
{
    echo $ocena+4;
}
elseif ($poeni>70)
{
    echo $ocena+2;
}
elseif ($poeni>60)
{
    echo $ocena+1;
}
echo "<br> <br>";

/*Odrediti najveći od tri uneta broja*/
$a = 15;
$b = 19;
$c = 12;

$maks = $a;
if ($maks < $b)
{
    $maks = $b;
}
if ($maks < $c)
{
    $maks = $c;
}
echo $maks;
echo "<br>";
/*Za najmanji od tri uneta broja
*/
$a = 15;
$b = -19;
$c = 12;

$min = $a;
if ($min > $b)
{
    $min = $b;
}
if ($min > $c)
{
    $min = $c;
}
echo $min; 

echo "<br>";
echo "<br>";
/*Preuzeti koji je dan u nedelji sa računara i ispitati da li je to radni dan ili je u pitanju vikend.*/

$date = date('d-m-Y');
$Vikend=false;
$dan = date("D", strtotime($date));
if($dan == 'Sat' || $dan == 'Sun')
{
    $Vikend= true;
}
if($Vikend)
{
    echo $date . "Vikend je.";
}
else
{
    echo $date . 'Nije vikend.';
}
echo "<br>";
echo "<br>";
/*ISTI ZADATAK-PREDAVANJA*/
$dan=date('N');
if ($dan <= 5)
{
    echo "Radni dan";
}
else
{
    echo "vikend";
}
echo "<br> <br> <br>";
/*Za vreme preuzeto sa računara ispisati ​dobro jutro ​za vrememanje od
 12 sati ujutru, ​dobar dan ​za vreme manje od 18 sati popodne i u ostalim  
 slučajevima ispisati ​dobro veče​.*/
$vreme=date("G"); /*G je da je vrednost 0-23*/
{
    echo "trenutno vreme $vreme casova - ";
}
if ($vreme<12)
{
    echo "dobro jutro";
}
elseif ($vreme>12)
{
    echo "dobar dan";
}
elseif ($vreme>18)
{
    echo "dobro vece";
}
echo "<br> <br> <br>";

/*Uporediti dva uneta datuma i ispisati koji od njih je raniji.*/
/*Resenje uz pomoc interneta*/

$datum_1 = DateTime::createFromFormat('j-M-Y', '01-Jan-2005');
echo $datum_1->format('d-m-y');
echo "<br>";
$datum_2 = DateTime::createFromFormat('j-M-Y', '01-Jan-2010');
echo $datum_2->format('d-m-y');
echo "<br>";
if ($datum_2>$datum_1)
{
    echo "Datum 2 je stariji od Datum 1";
}
elseif ($datum_1>$datum_2)
{
    echo "Datum 1 je stariji od Datum 2";
}
echo "<br> <br> <br>";
/*ISTI ZADATAK-PREDAVANJA*/
$dan1=11;
$mes1=7;
$god1=2019;
$dan2=1;
$mes2=7;
$god2=2019;
/*imamo 6 promenljivih koji zadaju dva datuma-trebamo ih uporediti.
Po logici prvo pitamo za godinu, pa mesec, pa dan)*/
if ($god1<$god2)
{
    echo "Datum 2 je stariji";
}
elseif ($god1>$god2) /*ispitivanje USLOVA jer zelimo da ispitamo gornji IF*/
{
    echo "Datum 1 je stariji";
}
elseif ($mes1<$mes2) /*Ako smo dosli do ovog elseif znaci da su godine jednake,pa ispitujemo mesece*/
{
    echo "Datum 2 je stariji";
}
elseif ($mes1>$mes2)
{
    "Datum 1 je stariji";
}
elseif ($dan1<$dan2)
{
    echo "Datum 2 je stariji";
}
elseif ($dan1>$dan2)
{
    echo "Datum 1 je stariji";
}
else /*ako je sve jednako od uslova*/
{
    echo "Datumi su jednaki";
}
echo "<br> <br> <br>";

/*Radno vreme jedne programerske firme je od 9h do 17h.Preuzeti vreme sa računara i ispitati da li u to vreme firma radi iline radi*/
/*ISTI ZADATAK-PREDAVANJA*/
$vreme = date ('G');
if ($vreme<9)
{
    echo "Radnja je zatvorena";
}
elseif ($vreme <= 17)
{
    echo "Radnja je otvorena";
}
else /* "sem ako..." */
{
    echo "Radnja je zatvorena";
}
echo "<br> <br> <br>";

/*Za unet početak i kraj radnog vremena dva lekara ispisati DA ukoliko se njihove smene preklapaju, u suprotnom ispisati NE.*/

/*ne znam kako da stavim ove parametre za smenu1 i smenu2;
$smena1 = 
$smena2 = 
if ($smena1>=$smena2)
{
    echo "da";
}
elseif ($smena1<$smena2)
{
    echo "ne";
}
*/
/*ISTI ZADATAK-PREDAVANJA*/
/* & - nad bitovima
&& - logicko 'i' */

/*Moja verzija*/
$pocetak1=7;
$kraj1=14;
$pocetak2=15;
$kraj2=20;
if ($kraj1>$pocetak2)
{
    echo "Smene se preklapaju";
}
elseif ($kraj1<$pocetak2)
{
    echo "smene se ne preklapaju";
}
else
{
    echo "smene se preklapaju";
}
echo "<br> <br> <br>";

/*ver2-logicna-najbolja verzija*/
$p1=7;
$k1=14;
$p2=15;
$k2=20;
if ($p1<$p2)
{
    if ($p2<=$k1)
    {
        echo "DA";
    }
    else
    {
        echo "NE";
    }
}
elseif ($p2<$p1)
{
    if ($p1<=$k2)
    {
        echo "DA";
    }
    else
    {
        echo "NE";
    }
}
echo "<br> <br> <br>";

/*Za uneti broj ispitati da li je paran ili nije*/

$broj = 10;
if($broj%2==0) /*ovo je modul,znaci ako je broj deljiv sa dva, on je ceo, a mi dajemo u echo da pise da je paran/neparan
u zavisnosti od toga da li je deljiv. Ako jeste, paran je, ako nije, neparan je */
{
  echo "$broj je paran broj";
}
else
{
  echo "$broj je neparan broj";
}
echo "<br> <br> <br>";

/*ver2*/
$broj=7;
$ost=$broj%2;
if ($ost>0)
{
    echo "neparan";
}
else{
    "paran";
}
echo "<br> <br>";


/*Za uneti broj ispisati da li je deljiv sa 3 ili ne.*/

$broj=14;
if ($broj%3)
{
    echo "nedeljiv";
}
else
{
    echo "deljiv";
}
echo "<br> <br>";


/*Za dva uneta broja, od većeg učitanog broja oduzeti manji i rezultat ispisati na ekranu*/
$brojX=30;
$brojY=20;
$rezultat_1=$brojX-$brojY;
$rezultat_2=$brojY-$brojX;
if ($brojX>$brojY)
{
    echo "$brojX-$brojY=$rezultat_1";
}
elseif ($brojX<$brojY)
{
    echo "$brojY-$brojX=$rezultat_2";
}
echo "<br>";
echo "<br>";
/*ver2-PREDAVANJA*/
$a=7;
$b=-5;
if ($a>$b)
{
    $rez=$a-$b;
}
else
{
    $rez=$b-$a;
}
echo $rez;
echo "<br> <br> <br>";
/*Za uneti broj ispitati da li je on manji ili veći od nule. Ukoliko je manji 
ili jednak nuli ispisati njegov prethodnik, a ukoliko je veći odnule ispisati njegov sledbenik.*/
$brojIspitanik=-3;
$sledbenik=$brojIspitanik+1;
$prethodnik=$brojIspitanik+1;
if ($brojIspitanik>0)
{
    echo "sledbenik je $sledbenik";
}
elseif ($brojIspitanik<=0)
{
    echo "prethodnik je $prethodnik";
}
echo "<br>";
echo "<br>";
/*v2-PREDAVANJA*/
$broj=-5;
if ($broj<=0)
{
    $broj=$broj-1;
}
else
{
    $broj=$broj+1;
}
echo $broj;
echo "<br> <br>";

/*Za tri uneta broja ispisati koji od njih ne najveći, koji od njih je srednji, a koji od nih je najmanji.*/
$brX=12;
$brY=55;
$brZ=6;

{echo "najveci broj je ";}
{
    echo max(array($brX, $brY, $brZ));
}
echo "<br>";
{echo "najmanji broj je ";}
{
    echo min(array($brX, $brY, $brZ));
}
/*ne znam kako da nadjem srednji broj*/
echo "<br>";


/*Za učitani broj ispitati da li je ceo.*/
/*Resenje-internet*/
$var_name1=10;
$var_name2=10.3;
if (is_int($var_name1))
{
echo "$var_name1 je ceo broj<br>" ;
}
else
{
echo "$var_name1 nije ceo broj<br>" ;
}
if (is_int($var_name2))
{
echo "$var_name2 je ceo broj<br>" ;
}
else
{
echo "$var_name2 nije ceo broj<br>" ;
}
echo "<br>  <br>";

/*v2-PREDAVANJA*/
$broj = 7.2;
if ((int)$broj==$broj) /*Ako je INT broja jednak sa broj dobijamo ceo broj*/
{
    echo "ceo broj";
}
else
{
    echo "decimalan";
}
echo "<br> <br>";

/* Napraviti program za koji za uneti pol i broj godina korisnika
ispisuje da lije korisnik muskarac ili zena i da li je punoletan
RADI SE SA UGNJEZDENJEM
UGNJEZDENO GRANANJE*/
$pol="z";
$godine=24;
if ($pol=="z")
{
    echo "Zena -";
    if ($godine>=18)
    echo "punoletna";
    else
    {
        echo "maloletna";
    }
}
else
{
    echo "muskarac";
    if ($godine>=18)
    {
        echo "punoletan";
    }
    else
    {
        echo "maloletan";
    }
}

echo "<br><br><br>";


/*Učitati dva cela broja i ispitati da li je veći od njih paran*/
$brojParan=6;
$brojNeparan=3;
if ($brojParan>$brojNeparan)
{
    echo "Paran broj je veci";
}
elseif ($brojParan<$brojNeparan)
{
    echo "Paran broj nije veci";
}
echo "<br>";echo "<br>";echo "<br>";
/*Nisam siguran da li je tacno*/

/*Naći koji je najveći od tri uneta broja $a, $b i $c*/
$a = 15;
$b = 19;
$c = 12;

$maks = $a;
if ($maks < $b)
{
    $maks = $b;
}
if ($maks < $c)
{
    $maks = $c;
}
echo $maks;

echo "<br> <br> <br>";

/*v2*/
/*LOGICKI OPERATERI*/
$a=1;
$b=2;
$c=3;
if ($a>$b and $a>$c)
{
    echo "$a je najveci";
}
elseif ($b>$c and $b>$a)
{
    echo "$b je najveci";
}
else
{
    echo "$c je najveci";
}
echo "<br>";echo "<br>";echo "<br>";

/*Ispisati na ekranu ​„ekstremna temperatura“ ​ukoliko je
temperatura manja od -15 stepeni Celzijusovih  i veća od 40stepeni Celzijusovih.*/
$temp=45;
if ($temp<=-15)
{
    echo "esktremna temperatura";
}
if ($temp>40)
{
    echo "esktremna temperatura";
}

echo "<br>";echo "<br>";echo "<br>";
/*LogickiOperateri-Nacin*/
$t=10;
if ($t<-15 or $t>40)
{
    echo "ekstremna temperatura";
}
else
{
    echo "nije";
}
echo "<br> <br> <br>"
/*Ispitati da li je godina prestupna. (Godinu preuzeti sa vremenana Vašem računaru).
Prestupna je ona godina koja je deljiva sa 4,ako nije deljiva sa 100, mada ipak jeste deljiva sa 400

$year = 2010;
if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400))
{
    echo "$year godina je prestupna";    
}
else  
{  
    echo "$year godina nije prestupna";    
}
resenje pronasao na internetu */

/*LOGICKI OPERATORI-zadaci*/


/* Napraviti program za koji za uneti pol i broj godina korisnika
ispisuje da lije korisnik muskarac ili zena i da li je punoletan*/

/*$pol="m";
$god=24;
if ($pol=='z' and $god>18)
{
    echo " zena punoletna";
}
elseif ($pol=='z' and $god<18)
{
    echo "zena nije punoletna";
}
if ($pol=='m' and $god>18)
{
    echo "muskarac je punoletan";
}
elseif ($pol=='m' and $god<18)
{
    echo "muskarac je punoletan";
}*/

?>