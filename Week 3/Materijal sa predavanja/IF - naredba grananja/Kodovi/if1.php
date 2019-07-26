<?php
	/*
		Za dva uneta cela broja odrediti
		koji je veci a koji manji
	*/
	/*
	$a = 3;
	$b = 3;
	if ($a > $b)
	{
		echo "Vrednost a je veca od vrednosti b";
	}
	elseif ($b > $a)
	{
		echo "Vrednost a je manja od vrednosti b";
	}
	else
	{
		echo "a i b su jednaki";
	}
	*/
	
	/*
		Ispitati da li je uneta temperatura 
		u plusu ili je u minusu. 
		Ukoliko je temperatura nula, 
		računati da je u plusu.

	*/
	
	$t = -40;
	/*
	if ($t < 0)
	{
		echo "Temperatura je u minusu";
	}
	else 
	{
		echo "Temperatura je u plusu";
	}
	*/
	/*
	if ($t >= 0)
	{
		echo "Temperatur je u plusu";
	}
	else
	{
		echo "Temperatura je u minusu";
	}
	*/
	
	/*
		U odnosu na pol (muški/ženski) 
		koji je korisnik uneo prikazati 
		odgovarajući avatar.
	*/
	/*
	$pol = "m";
	if ($pol == "m")
	{
		echo "<img src='mm.png'>";
	}
	else
	{
		echo "<img src='m.png'>";
	}
	*/
	
	/*
	U odnosu na preuzete vrednosti AM i PM 
	sa svog računara, ispisati da li je 
	trenutno jutro ili popodne.
	*/
	/*
	$x = date("A");
	if($x == "PM")
	{
		echo "popodne";
	}
	else
	{
		echo "jutro";
	}
	*/
	
	/*
	Za preuzetu godinu sa računara 
	i unetu godinu rođenja izračunati 
	da li je osoba punoletna ili maloletna.
	*/
	
	/*
	$godinaRodjenja = 2000;
	$trenGodina = date('Y');
	$godine = $trenGodina - $godinaRodjenja;
	echo $godine;
	*/	
	
	/*
	Odrediti najveći od tri uneta broja
	*/
	/*
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
	*/
	
	/*
	Za najmanji od tri uneta broja
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
	
?>
