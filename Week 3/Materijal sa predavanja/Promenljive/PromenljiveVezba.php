
<?php

    /* Za preuzeto vreme u satima i minutima, izračunati koliko minuta je prošlo od ponoći */
    $sati = 13;
    $minuti = 39;
    $ukupno = $sati * 60 + $minuti;
    echo $ukupno;
    echo "<br>";

    /*  
        g - 12-hour format of an hour (1 to 12)
        G - 24-hour format of an hour (0 to 23)
        h - 12-hour format of an hour (01 to 12)
        H - 24-hour format of an hour (00 to 23)
        i - Minutes with leading zeros (00 to 59)
    */
    //date_default_timezone_set('Europe/Belgrade'); // ako je potrebno da se promeni vremenska zona

    $sati = date('G');
    $minuti = date('i');
    $ukupno = $sati * 60 + $minuti;
    echo "<p>Proslo je: ";
    echo $ukupno;
    echo " minuta od ponoci. </p>";

    /* Za unetu cenu robe, unetu novčanicu kojom kupac plaća račun ispisati koliki kusur kasirka treba da mu vrati. */
    $cenaRobe = 1500;
    $ukupno = 2000;
    echo "<p>Kusur je: ";
    echo $ukupno - $cenaRobe;
    echo " dinara. </p>";


    /* Konverzija valuta iz evra u dinare (i obrnuto)*/
    $evro = 150;
    $dinari = $evro * 117.81;
    echo "<p>Konverzija iz evra u dinare: ";
    echo $dinari;
    echo "</p>";


    /* Konverzija kursa iz dolara u evre, ako znamo dinarsku protivvrednost dolara i dinarsku protivvrednost evra */
    $dolari = 180;
    $dinari = $dolari * 104.84;
    $evri = $dinari / 117.81;
    echo "<p>Konverzija iz dolara u evre: ";
    echo $evri;
    echo "</p>";

    
    /* Temperatura iz Celzijusa u Farenhajte i obrnuto */
    $tempCel = 36;
    $tempFar = $tempCel * 9 / 5 + 32;
    echo "<p>Temperatura u Farenhajtima: ";
    echo $tempFar;
    echo "</p>";

    $tempFar = 99;
    $tempCel = ($tempFar - 32) * 5 / 9;
    echo "<p>Temperatura u Celzijusima: ";
    echo $tempCel;
    echo "</p>";
?>