<?php

function zdravo()
{
	echo "Zdravo!!! <br>";
}

function it($i)
{
	echo "Broj $i <br>";
}

for($i=1; $i<=5; $i++)
{
	it($i);
	//zdravo();
}

//2. Zadatak

function zbir($a, $b)
{
	$rez = $a + $b;
	echo $rez;
	echo "<br>";
}

zbir(10, 50);
$a = 5;
$b = 7;
zbir($a, $b);
$x = 12;
$y = 35;
zbir($x, $y);
zbir($x, $x);


//3. Zadatak
//Neparan broj

function neparan($n)
{
	if($n%2 == 0)
	{
		echo "paran";
	}
	else
	{
		echo "neparan";
	}
}
$n = 16;
neparan($n);

//4. Zadatak
//Maksimum 2 dva broja i maksimum 4 broja


function maksDva($a, $b)
{
	if($a > $b)
	{
		return $a;
	}
	else
	{
		return $b;
	}
}

function maksCetiri($a, $b, $c, $d)
{
	$maks1 = maksDva($a, $b);
	$maks2 = maksDva($c, $d);
	$maks = maksDva($maks1, $maks2);
	//$maks = maksDva(maksDva($a,$b), 
	//maksDva($c,$d));
	return $maks;
}

$m2 = maksDva(2, 5);
echo $m2;


$m = maksCetiri(1,-3,-5,7);
echo $m; 



//5. Zadatak
//Napraviti funkciju koja prikazuje
//sliku za prosledjenu adresu slike

function slika($adresa)
{
	echo "<img src=$adresa> <br>";
}

slika("1.png");
slika("2.png");
slika("3.png");



//6. Zadatak
//Napraviti funkciju koja 
//za unetu boju na engleskom 
//jeziku boji tekst paragrafa 
//u tu boju.

function bojiParagraf($boja)
{
	echo "<p style='color:$boja'> Neki tekst </p>";
}

bojiParagraf("red");
bojiParagraf("orange");
bojiParagraf("green");



//7. Zadatak
//Napraviti funkciju kojoj se prosleđuje 
//ceo broj a ona ispisuje tekst koji ima
//prosledjenu veličinu fonta

function velicinaFonta($x)
{
	echo "<p style='font-size:$x'>Neki tekst</p>";
}
velicinaFonta(50);

//8. Zadatak
//Napraviti funkciju koja pet puta ispisuje istu rečenicu, 
//a veličina fonta rečenice treba da bude 
//jednaka vrednosti iteratora. 

function petPutaIspis()
{
	for($i=45; $i<70; $i+=5)
	{
		echo "<p style='font-size:$i'>Neki tekst</p>";
	}
}
petPutaIspis();


/*
9. Zadatak
Napisati program koji sadrži funkciju 
sedmiDan koja za uneti broj n ispisuje 
n-ti dan u nedjelji (npr. za 1 se ispisuje „Ponedjeljak“, 
za 7 ispisuje “Nedelja”, a za 8 opet “Ponedeljak”).
Pitanje: Kako bismo realizovali ovaj zadatak da 
se tražio n-ti mesec u godini?
*/

function sedmiDan($rBrDana)
{
	if($rBrDana%7 == 1)
	{
		echo "Ponedeljak";
	}
	elseif($rBrDana%7 == 2)
	{
		echo "Utorak";
	}
	elseif($rBrDana%7 == 3)
	{
		echo "Sreda";
	}
	elseif($rBrDana%7 == 4)
	{
		echo "Četvrtak";
	}
	elseif($rBrDana%7 == 5)
	{
		echo "Petak";
	}
	elseif($rBrDana%7 == 6)
	{
		echo "Subota";
	}
	elseif($rBrDana%7 == 0)
	{
		echo "Nedelja";
	}
	else
	{
		echo "Greska";
	}
}
sedmiDan(212);

/*
Za mesece u godini
*/

function mesec($rBrMeseca)
{
	switch($rBrMeseca)
	{
		case ($rBrMeseca%12==1):
			echo "Januar";
			break;
		case ($rBrMeseca%12==2):
			echo "Februar";
			break;
		case ($rBrMeseca%12==3):
			echo "Mart";
			break;
		case ($rBrMeseca%12==4):
			echo "April";
			break;
		case ($rBrMeseca%12==5):
			echo "Maj";
			break;
		case ($rBrMeseca%12==6):
			echo "Jun";
			break;
		case ($rBrMeseca%12==7):
			echo "Jul";
			break;
		case ($rBrMeseca%12==8):
			echo "Avgust";
			break;
		case ($rBrMeseca%12==9):
			echo "Septembar";
			break;
		case ($rBrMeseca%12==10):
			echo "Oktobar";
			break;
		case ($rBrMeseca%12==11):
			echo "Novembar";
			break;
		case ($rBrMeseca%12==0):
			echo "Decembar";
			break;
		default:
			echo "Greska";
	}
}
mesec(16);

/*
10. Zadatak
Napraviti funkciju deljivSaTri koja se koristi 
u ispisivanju brojeva koji su deljivi
sa tri u intervalu od n do m.
Prebrojati koliko ima ovakvih brojeva od n do m.
*/

function deljivSaTri($n, $m)
{
	$br = 0;
	for($i=$n; $i<$m; $i++)
	{
		if($i%3 == 0)
		{
			echo "$i <br>";
			$br++; //br=br+1; br+=1;
		}
	}
	echo "Broj brojeva: $br";
}

deljivSaTri(3,10);


/*
11. Zadatak
Napisati funkciju koja ispisuje brojeve 
u intervalu od n do m koji su deljivi 
sa tačno dva od brojeva 2, 3, 5 i 7.
*/

function deljivi($n, $m)
{
	for($i=$n; $i<=$m; $i++)
	{
		$br=0;
		if($i%2==0)
		{
			$br++;
		}
		if($i%3==0)
		{
			$br++;
		}
		if($i%5==0)
		{
			$br++;
		}
		if($i%7==0)
		{
			$br++;
		}
		if($br == 2)
		{
			echo "<p>$i</p>";
		}
	}
}

$n = 5;
$m = 15;
deljivi($n, $m);











?>