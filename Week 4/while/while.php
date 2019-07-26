<html>
<head>
    <style>
        .red {
            color: red;
        }
        .green {
            color: green;
        }
        .img {
            width: 200px;
        }
    </style>
</head>

<body>

<?php
    
	/* 1) Ispis brojeva od 1 do 10 */
	
	$i = 1;
	while($i <= 10) 
	{
		echo $i;
		echo "<br>";
		$i++;
	}
	
	$i = 0;
	while($i < 10)
	{
		$i++;
		echo $i;
		echo "<br>";
	}
	
	/* Ispis brojeva od 1 do 20 */
	
	$i = 1;
	while($i <= 20) {
		echo $i;
		echo "<br>";
		$i++;
	}
	
	
	/* 2) Ispis brojeva od 20 do 1 */
	
	$i = 20;
	while($i >= 1) {
		echo $i;
		echo "<br>";
		$i--;
	}
	
	$i = 0;
	while($i < 20) {
		echo 20 - $i;
		echo "<br>";
		$i++;
	}
	
	/* 3) Ispis parnih brojeva od 1 do 20 */
	
	$i = 1;
	while($i <= 20) {
		if($i % 2 == 0) {
			echo $i;
			echo "<br>";
		}
		$i++;
	}
	
	$i = 2;
	while($i <= 20) {
		echo $i;
		echo "<br>";
		$i = $i + 2;
	}
    
    /* 4) Odrediti kolicnik i ostatak pri deljenju broja $a brojem $b bez koriscenja operacija / i %. */
	$a = 82;
	$b = 8;
	$kol = 0;
	$ost = $a;
	while($ost >= $b) {
		$ost = $ost - $b;
		$kol++;
	}
	echo "$a = $kol * $b + $ost";
	echo "<br>";
    
    /*  5) Sest paragrafa naizmenično obojiti sa tri različite boje. */
    $text = "Some text bla bla bla...";
    $i = 1;
    while($i <= 6) {
        if($i % 3 == 1) {
            echo "<p class='blue'>$text</p>";
        }
        elseif($i % 3 == 2) {
            echo "<p class='yellow'>$text</p>";
        }
        else {
            echo "<p class='red'>$text</p>";
        }
        $i++;
    }

    /* 6) Odrediti sumu brojeva od 1 do 100 */
    $i = 1;
    $zbir = 0;
    while($i <= 100) {
        //$zbir = $zbir + $i;
        $zbir += $i;
        $i++;
    }
    echo $zbir;
    echo "<br>";

    /* 7) Odrediti sumu brojeva od 1 do n */
    $n = 95;
    $i = 1;
    $suma = 0;
    while($i <= $n) {
        $suma = $suma + $i;
        $i++;
    }
    echo $suma;
    echo "<br>";

    /* 8) Odrediti sumu brojeva od n do m */
    $n = 50;
    $m = 5;
    if($n < $m) {
        $suma = 0;
        $i = $n;
        while($i <= $m){
            $suma = $suma + $i;
            $i++;
        }
    }
    else {
        $suma = 0;
        $i = $m;
        while($i <= $n) {
            $suma = $suma + $i;
            $i++;
        }
    }
    echo $suma;
    echo "<br>";

    /* 9) Odrediti proizvod brojeva od n do m */
    $n = 56;
    $m = 69;
    $i = $n;
    $proizvod = 1;
    while($i <= $m) {
        $proizvod = $proizvod * $i;
        $i++;
    }

    /* 10) Odrediti sumu kvadrata brojeva od n do m */
    $n = 2;
    $m = 5;
    $suma = 0;
    $i = $n;
    while($i <= $m) {
        $suma += $i * $i;
        // $suma += pow($i, 2);
        // $suma += $i**2;
        $i++;
    }
    echo $suma;
    echo "<br>";
?>
</body>
</html>