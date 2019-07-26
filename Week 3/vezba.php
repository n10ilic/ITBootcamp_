<html>
<head>
</head>

<body>
<?php
    /* Data je slika sa svojom putanjom i imenom.
    Prikazati sliku na web stranici. */

    $putanja = "slike/htmlphp.png";
    echo "<img src='$putanja'>";


    /* Za radnika je pozanto:
        -broj radnih sati u mesecu;
        -cena rada po satu;
        -procenat odbijanja na osnovu doprinosa;
        Odrediti bruto i neto dohodak radnika.
    */
    /*Prvo pisemo podatke: sta imamo: broj sati
    Racunamo bruto: broj sati x cena rada;
                    neto=bruto-bruto x procenat (koji je od 1-100 i zato delimo sa 100)
                    stavljamo &euro; jer je to html kod za euro;
    */
    $brojSati = 160;
    $cena = 5;
    $procenat = 65;
    $bruto = $brojSati * $cena;
    $neto = $bruto - $bruto * $procenat / 100;
    echo "<p>Bruto zarada: $bruto &euro;,
    Neto zarada: $neto &euro;</p>";
    

    /* Broj minuta pretvoriti u sate i minute 
    Stavljamo (int) da zaokruzi na ceo broj*/

    $brojMinuta = 263;
    $sati = (int)($brojMinuta / 60);
    $minuti = $brojMinuta % 60;
    echo "<p>Broj sati: $sati, broj minuta: $minuti</p>";
    echo "<br>";

    /*Ako je vrednost neke robe X din., odrediti najmanju kolicinu novcanica od 500din, 100din, 10din, i 1din,
    kojima se moze platiti data roba. 
    % znaci OSTATAK! */

    $vrednostRobe = 4399;
    $novcanicaPetsto = (int)($vrednostRobe / 500);
    $vrednostRobe = $vrednostRobe % 500; /*sada je ovo nova vrednost - $vrednostRobe sto znaci da ce vrednostRobe biti 399 */
    $novcanicaSto = (int)($vrednostRobe / 100);
    $vrednostRobe = $vrednostRobe % 100;
    $novcanicaDeset = (int)($vrednostRobe / 10);
    $kovanica = $vrednostRobe %10;
    echo "<p>Petsto: $novcanicaPetsto,
    Sto: $novcanicaSto,
    Deset: $novcanicaDeset,
    Kovanice: $kovanica.</p>";
?>
</body>
</html>
