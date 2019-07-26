<?php
echo "Zadatak1: ispisati brojeve od 1 do 20";
echo "<br>";
for ($i=1; $i<=20; $i++)
{
    echo $i;
}
echo "<br> <br>";
echo "Zadatak2: Ispisati brojeve od 20 do 1 <br>";
for ($i=20; $i>=1; $i--)
{
    echo $i;
}
echo "<br> <br>";

echo "Zadatak3: Ispisati parne brojeve od 1 do 20 <br>";
for ($i=1; $i<=20; $i++)
{   if ($i%2==0) /*f-ja za ispitivanje da li je nesto deljivo sa 2*/
    echo $i;
}
echo "<br> <br>";
echo "verzija 2<br>";
for ($i=2; $i<=20; $i=$i+2) /*najmanji je 2, idi do 20, povecavaj za 2*/
{
    echo $i;
}
echo "<br> <br>";
echo "Zadatak4: Ispisati dvostruku vrednost brojeva od 5 do 15 <br>";
/*dvostruka vr. je 2 x taj br* - treba da ispisemo 2 x taj br.*/
for ($i=5; $i<=15; $i++)
{
    echo 2*$i; /*dva puta vrednost i*/
}
echo "<br> <br>";
/*echo "Zadatak6: Odredi sumu brojeva od 1 do n<br>";
$s=0;
$n=5;
for ($i=1; $i<=$n; $i++)
{
    echo $s=$s+$i;
}
echo "<br> <br>";
echo "Zadatak7: Odredi sumu brojeva od n do m<br>";
$s=0;
$n=5;
$m=7;
for($i=$n; $i<=$m; $i++)
{
    $s=$s+$i;
}
echo $s;*/

echo "zadatak5 <br>";
$n=1;
$m=5;
$p=1;
for ($i=$n; $i<=$m; $i++)
{
   echo  $p*=$i;
}
echo "<br> <br>";

echo "zadatak 9: odrediti sumu kvadrata brojeva od n do m <br>";
$n=5;
$m=7;
$z=0;
for ($i=$n; $i<=$m; $i++)
{
    $z=$z+$i*$i;
}
echo $z;
echo "<br> <br>";

echo "zadatak 10: Preuzeti s interneta 3 slike i  imenotvati ih 1,2 i 3. For petljom u HTML ispisati svaku od slicica uz pomoc brojaca<br>";
for($i=1; $i<=3; $i++)
{
    echo "<img src='$i.png'>"; /*slike u folderu gde je .php*/
    echo "<br>";
}

echo "zadatak11: sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30<br>";
$s = 0;
	for($i=1; $i<=30; $i++)
	{
		if ($i%9 == 0)
		{
			$s += $i;
			//$s = $s + $i;
		}
	}
	echo $s;
	echo "<br>";

echo "zadatak12: odrediti proizvod svih brojeva deljivih sa 11 u inetrvalu od 20 do 100.<br>";
$s=0;
for($i=20; $i<=100; $i++)
{
    if ($i%11==0)
    {
        $p=$p*$i;
    }
}
echo $p;
echo "<br><br><br>";

echo "Zadatk 13: Prebrojati koliko ima brojeva deljivih sa 13 u intervalu od 5 do 150.<br>";
echo "primer1 (netacan)";
for ($i=5; $i<=150; $i++)
{
    if ($i%13==0)
    {
        $b=$i/13; /*PITATI DA LI JE TACNO*//*==LOGICNO JE, ALI! AKO NEMAMO BROJ KOJI JE DELJIV SA TRAZENIM (13)
                    ON PRIKAZUJE GRESKU U BROWSERU, IAKO JE RESENJE LOGICNO*/
    }
}
echo "ima $b brojeva<br>";
/*TACNA VERZIJA*//*ZATO STO POCINJEMO OD NEKOG BROJA, br=0, NJEMU UVEK DODAJEMO 1, I OVO RADI AKO STAVIMO DA SU BROJEVI
I OD 0 DO 10, a TREBA NAM 13, REZULTAT JE 0 I BROWSER CE NAPISATI DA IMA NULA DELJIVIH! TO JE RAZLIKA SA PRIMEROM IZNAD*/
echo "<br>";
$br=0;
for ($i=5; $i<=150; $i++)
{
    if ($i%13==0)
    {
        $br++;
        
    }
}
echo " ima $br brojeva";

echo "<br><br><br>";

echo "Zadatak 14: Ispisati aritmetičku sredinu brojeva od n do m.<br>";
/*Aritmetička sredina ili prosek je pojam iz statistike. Ona se računa za skup brojeva kao količnik zbira članova i broja članova skupa.
Primer 1
    S = (1, 3, 6, 7, 18)
    Skup S ima 5 članova čiji zbir je 35, a aritmetička sredina je 7.
Primer 2
    Ako u dnevniku u osnovnoj školi iz matematike imamo ocene 5, 5, 3, 2, prosek računamo ovako:
    A = (5+5+3+2)/4 = 15/4 =3.75*/
$n=5;
$m=15;
$suma=0;
$br=0;
for ($i=$n; $i<=$m; $i++)
{   
    $suma += $i; /*sumu povecavamo za $i, jer je $i brojac koji se krece*//*ovime smo odredili sumu brojeva od 5 do 15*/
    $br += 1;
}
$sr = $suma / $br; /*sr (srednja vrednost/ar.sredina)*/
echo $sr;

echo "<br><br><br>";


echo "Zadatak 15:Prebrojati koliko brojeva od n do m je pozitivno, a koliko njih je negativno.<br>";
/*prvo postavljamo uslov FOR( uslov ), posto treba da pitamo nesto program, pisemo IF, u IF-u nam treba
dva uslova, za pozitivne i negativne brojeve, dakle, pisemo dva IF-a. Nakon toga dodeljujemo nove varijable
koje stoje u ifovima, i koje su 0, zato sto NE ZNAMO sta dodajemo/oduzimamo, zato je $poz/$neg++*/
$n=-5;
$m=10;
$poz=0;
$neg=0;
for ($i=$n; $i<=$m; $i++)
{
    if ($i<0)
    {
        $neg++;
    }
    if ($i>0)
    {
        $poz++;
    }
}
echo "neg $neg";
echo "<br>";
echo "poz $poz";
echo "<br><br>";

echo "Zadatak16: Prebrojati koliko je brojeva od 5 do 50 koji su deljivi sa 3 ili sa 5.<br>";
$deljivi=0;
for ($i=5; $i<=50; $i++)
{
    if ($i%3==0 or $i%5==0)
    {
        $deljivi++;
    }
}
echo $deljivi++;

echo "<br><br><br>";

echo "Zadatak17: Prebrojati i izracunati sumu brojeva od n do m kojima je poslednja cifra 4 i parni su.<br>";
$n=10;
$m=30;
$sum=0;
$br=0;
for ($i=$n; $i<=$m; $i++)
{
    $pos = $i%10; /*ovako dobijamo poslednju cifru*/
    if ($pos == 4) /*trazimo da je posl.cifra 4*/
    {
        $sum += $i;
        $br ++;
    }
}
echo "suma je $sum, broj je $br .";

echo "<br><br><br>";

echo "Zadatak 18:Ispisati brojeve od n do m koji su deljivi sa a.<br>";
$n=1;
$m=30;
$a=10;
for ($i=$n; $i<=$m; $i++)
{
    if ($i%$a == 0)
    {
        echo $i;
        echo "<br>";
    }
   
}
echo "<br><br><br>";

echo "Zadatak 19:Ispisati brojeve od n do m koji nisu deljivi sa a.<br>";
$n=1;
$m=10;
$a=2;
for ($i=$n; $i<=$m; $i++)
{
    if ($i%$a != 0)
    {
        echo $i;
        echo "<br>";
    }
   
}
echo "<br><br><br>";

echo "Zadatak 20: odrediti sumu brojeva od n do m koji nisu deljivi brojem a.<br>";
$n=2;
$m=18;
$a=3;
$sum=0;
for ($i>=$n; $i<=$m; $i++)
{
    if ($i%$a != $a)
    {
        $sum+=$i; /*na sumu dodajemo br koji nisu deljivi sa a*/
    }
}
echo $sum;

echo "<br><br><br>";
echo "Zadatak21: odrediti proizvod brojeva od n do m koji su deljivi brojem a.<br>";
$n=5;
$m=10;
$a=5;
$pro=1;
for ($i=$n; $i<=$m; $i++)
{
    if ($i%$a == 0)
    {
        $pro*=$i; 
    }
}
echo $pro;


?>