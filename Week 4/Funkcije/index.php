    <html>
<head></head>
<body>
<style> 
.boja
{
    color: <p></p>;
}
</style>

    <?php
    echo "Zadatak1: Napisati funkciju pozdrav kojoj 
    se prosleđuje ime i prezime, a funkcija ispisujepozdrav. 
    Na primer za uneto ime Jelena i prezime Matejić, funkcija ispisujeZdravo Jelena Matejić. <br>";
    function mojaFunkcija()
    {
        echo "Zdravo svete!";
    }
    mojaFunkcija (); //poziv funkcije

    echo "<br><br><br>";

    function mojaFunkcijaa($tekst)
    {
        echo $tekst;
    }
    $tekst = "Zdravo svete!";
    mojaFunkcijaa ($tekst);
    echo "<br><br><br>";

    function korisnik($ime,$god)
    {
        echo "$ime ima $god godina";
    }
    korisnik("Ana",18);
    korisnik("Bojana",23);
    echo "<br><br>";

    function ime($i)
    {
        echo "Nikola";
        echo "<br>";
    }
    for ($i=1; $i<=5; $i++)
    {
        ime($i);
    }

    function prezime($i)
    {
        echo "Ilic";
        echo "<br>";
    }
    for ($i=1; $i<=10; $i++)
    {
        prezime($i);
    }
    echo "<br> <br> <br>";

    function zbir($a,$b)
    {
        $rez=$a+$b;
        echo $rez;
    }
    zbir (5,10);
    zbir (2,7);
    echo "<br><br>";
    function zbirr($a,$b)
    {
        $rezultat=$a+$b;
        return $rezultat;
    }
    $rezultat_1=zbirr(5,17);
    echo $rezultat_1;
    echo "<br><br>";

    function zbirrr($a, $b)
    {
    $rez = $a + $b;
    return $rez;
    }
    $c = zbirrr(2, 3);
    $d = zbirrr(1, 4);
    echo zbirrr($c, $d);
    echo "<br><br><br>";

    function zbir1($a, $b)
    {
    $rez = $a + $b;
    return $rez;
    }
    echo zbir1(zbir1(1,2), zbir1(3,4));
    echo "<br><br><br>";

    function proizvod($x, $y)
    {
        $p=$x*$y;
        return $p;
    }
    $varijabla=proizvod(3, 5); /*pisemo varijablu (koju mozemo da zovemo kako hocemo) ZATO STO JE ONA POTREBNA
    DA BI U NJU SMESTILI ONO STO JE U { } (u ovom slucaju $p) (onaj primer sa 3 case)*/
    echo $varijabla;
    echo "<br><br><br>";

    echo "zadatak1: Napisati funkciju pozdrav kojoj se prosleđuje ime i prezime, a funkcija ispisuje pozdrav.
    Na primer za uneto ime Jelena i prezime Matejić, funkcija ispisuje Zdravo Jelena Matejić. <br>";
    function imeiprezime($imee,$prezime)
    {
        echo "Zdravo $imee $prezime";
    }
    imeiprezime("Nikola", "Ilic");
    echo "<br><br>";

    echo "Zadatak2: Napisati funkciju zbir koja računa zbir dva realna broja.
    Šta bi trebalo izmeniti da bi se dobila razlika, proizvod ili količnik dva broja?<br>";
    function sabiranje($a,$b)
    {
        $z=$a+$b;
        return $z;
    }
    $z=sabiranje(2,10);
    echo $z;
    echo "<br>treba izmeniti racunsku operacijsku radnju u funkciji";
    echo "<br><br>";

    echo "Zadatak3: Napisati funkciju neparan koja za uneti ceo broj n vraća tačno
    ukoliko je neparan ili netačno ukoliko nije neparan.<br>";

    function neparan($n)
    {   

        if ($n % 2 != 0)
        echo "tacno";
        if ($n %2 == 0)
        echo "netacno";
        return $n;
    }
    $n=neparan(9);
    echo "<br><br>";

    echo "Zadatak4: Napisati funkciju maks2 koja vraća veći od dva prosleđena 
    realna broja. Zatim napisati funkciju maks4 koja vraća najveći od četiri prosleđena realna broja.<br>";
    function maks2($a,$b)
    {
        if ($a>$b)
        {
        return $a;
        }
        else
        {
        return $b;
        }
    }
    $m_2=maks2(331,1212);
    echo "maks2 $m_2"; /*stavljas ECHO ovde nakon svih zadatih f-ja, a ne u function jer echo samo ispisuje, 
    a return 'vraca',
    pa koristimo return da bi vrednost koju 'vraca' kasnije mogli da upravljamo njome;
    a u ovom slucaju echo $m_2 znaci da nam napise tu "kutiju" m_2, koja je jednaka sa funkcijom, koja je kasnije 
    postavljena u {}*/
        echo "<br>";
    /*RESENJE PREDAVANJA*/
    /*prvo odredjuje max prva dva, pa druga dva, pa max koji je prvi dobijen
    i drugi dobijen uporediti i dobiti najveci max*/
    /*pozivamo maks2 iz prethodne f-je maksa, tj maks2 (iste reci)*/
        function maks4($a,$b,$c,$d) 
    {
        $maks1=maks2($a,$b);
        $maks2=maks2($c,$d);
        $maks=maks2($maks1,$maks2);
        return $maks;
    }
    $m_4=maks4(1,2,3,4);
    echo "maks4 je $m_4";

    echo "<br><br>";

    echo "Zadatak5: Napraviti funkciju koja prikazuje sliku za prosledjenu adresu slike.<br>";
    function slika()
    {
        echo "<img src='https://www.wonderopolis.org/wp-content/uploads/2016/12/Plants_Make_Fruits_and_Vegetablesdreamstime_xxl_10601543.jpg' width=20%;>";
    }
    slika ();
    echo "<br><br>";

    echo "Zadatak6: Napraviti funkciju koja za unetu boju na engleskom jeziku, boji tekst paragrafa u tu boju.<br>";
    function boja($color)
    {
        echo '<p style="color:blue;">Boja</p>';
        return $color;
    }
    $box = boja ($color);
    echo $box;
    /*RESENJE PRONADJENO NA INTERNETU-PITATI!*/
    echo "<br><br>";

    /*RESENJE-PREDAVANJA - u paragraf stilu stavljamo color: $boja, jer pozivamo $boju iz funkcije, koju kasnije
    ispod upisujemo u zagradama, na engleskom*/
    function bojiParagraf($boja)
    {
        echo "<p style='color:$boja'>Clockwork orange</p>";
    }
    bojiParagraf("orange"); /*na engleskom upisujemo boju!!!)*/


    echo "<br><br>";

    echo "Zadatak7: Napraviti funkciju kojoj se prosleđuje ceo broj a ona ispisuje tekst koji ima prosleđenu veličinu fonta.<br>";
    function velicinaFonta($x)
    {
        echo "<p style='font-size:$x'>TEKST SA PROSLEDJENOM VELICINOM FONTA</p>";
    }
    velicinaFonta(25);
    /*isto kao u prethodnom zadatku, u paragrafu stavljamo font size i pozivamo funkciju $x*/
    echo "<br><br>";

    echo "Zadatak8: Napraviti funkciju koja pet puta ispisuje istu rečenicu, a veličina fonta rečenice treba da bude jednaka vrednosti.<br>";
    function vel($velFont)
    {
        for($i=1; $i<=5; $i++)
        {
            echo "<p style='font-size: ${velFont}px;'>recenica </p>";
        }
        
    }
    vel (20);
    /*isto kao na onom primeru sa slikom, stavljamo da se velicina fonta povecava za 1 (++)*/
    echo "<br><br>";
    /*RESENJE - PREDAVANJE*/
    function petPutaIspis()
    {
        for ($i=30; $i<50; $i+=5)
        {
            "<p style='font-size: $i px;'> neki tekst </p>";
        }
    }
    petPutaIspis();

    echo "<br><br>";

    echo "Zadatak9: Napisati program koji sadrži funkciju sedmiDan koja za uneti broj n ispisuje n-ti dan u nedjelji
    (npr. za 1 se ispisuje „Ponedjeljak“, za 7 ispisuje “Nedelja”, a za 8 opet “Ponedeljak”).
    Pitanje: Kako bismo realizovali ovaj zadatak da se tražio n-ti mesec u godini?<br>";
    function sedmiDan($n) /*staviti == da je ost 1 ; za nedelju 0*/
    {
        switch ($n)
        {
            case "1":
                ($n % 1 == 0);
                echo "Ponedeljak";
                break;
            case "2":
                ($n % 1 == 0);
                echo "Utorak";
                break;
            case "3":
            ($n % 1 == 0);
                echo "Sreda";
                break;
            case "4":
            ($n % 1 == 0);
                echo "Cetvrtak";
                break;
            case "5":
            ($n % 1 == 0);
                echo "Petak";
                break;
            case "6":
            ($n % 1 == 0);
                echo "Subota";
                break;
            case "7":
            ($n % 1 == 0);
                echo "Nedelja";
                break;
            case "8":
            ($n % 1 == 0);
                echo "Ponedeljak";
                break;
            default:
                echo "wrong";
        }

    }
    sedmiDan(3);
    echo "<br><br>";

    /*ZADATAK PREDAVANJE*/
    /*1. jan je bio u pon, koji dan po redu, tipa 273. koji je to bio dan? to se trazi u zadatku.
    ALI nacin za to je IF ili SWITCH --- ciklus koji se ponavlja! MODUL!
    */
    echo "drugi nacin<br>";
function sedamDana($rBrDana)
{
    $rBrDana;
    if ($rBrDana % 7 == 1) /*1 pri deljenju s bilo kojim br daje 1*/
    {
        echo "ponedeljak";
    }
    elseif ($rBrDana % 7 == 2) /*2 pri deljenju sa 7 daje 2 ostatak!*/
    {
        echo "utorak";
    }
    elseif ($rBrDana % 7 == 3)
    {
        echo "sreda";
    }
    elseif ($rBrDana % 7 == 4)
    {
        echo "cetvrtak";
    }
    elseif ($rBrDana % 7 == 5)
    {
        echo "petak";
    }
    elseif ($rBrDana % 7 == 6)
    {
        echo "subota";
    }
    elseif ($rBrDana % 7 == 0)
    {
        echo "Nedelja";
    }
    else
    {
        echo "wrong"; /*ako neko unese pogresan unos*/
    }
}
sedamDana (212);
echo "<br><br>";

/*echo "Za mesece u godini<br>";
function brMes($rBrMeseca)
$rBrMeseca=13;
switch ($rBrMeseca)
{
    case ($rBrMeseca % 12 == 1):
        echo "Januar";
        break;
    case ($rBrMeseca % 12 == 2):
        echo "Februar";
        break;
    case ($rBrMeseca % 12 == 3):
        echo "Mart";
        break;
    case ($rBrMeseca % 12 == 4):
        echo "April";
        break;
    case ($rBrMeseca % 12 == 5):
        echo "Maj";
        break;
    case ($rBrMeseca % 12 == 6):
        echo "Jun";
        break;
    case ($rBrMeseca % 12 == 7):
        echo "Jul";
        break;
    case ($rBrMeseca % 12 == 8):
        echo "Avgust";
        break;
    case ($rBrMeseca % 12 == 9):
        echo "Septembar";
        break;
    case ($rBrMeseca % 12 == 10):
        echo "Oktobar";
        break;
    case ($rBrMeseca % 12 == 11):
        echo "Novembar";
        break;
    case ($rBrMeseca % 12 == 0):
        echo "Decembar";
        break;
    default:
        echo "wrong";
}
brMes(3)*/

/*Napraviti funkciju deljivSaTri koja se koristi u ispisivanju brojeva koji su deljivi sa tri u intervalu od n do m.
Prebrojati koliko ima ovakvih brojeva od n do m.*/
/*function deljivSaTri ($n, $m)
{
    $br=0;
    for ($i=n; $i<$m; $i++)
    {
        if ($i%3==0)
        {
            echo $i;
            $br=$br + 1 ;
        }
        
    }
    echo $br;
    
}
deljivSaTri(3,10);*/
echo "<br><br>";

echo "Zadatak 11: Napisati funkciju kojom se ispisuje brojeve u intervalu od n do m koji su deljivi sa 
tačno dva od brojeva 2, 3, 5 i 7.<br>";
$n=5;
$m=15;
for ($i=$n; $i<=$m; $i++)
{
    $br=0; 
    if ($i%2==0)
    {
        $br++;  /*da li je deljiv brojem dva-ako jeste, povecavamo brojac (br++)*/
    }
    if ($i%3==0)
    {
        $br++;
    }
    if ($i%5==0)
    {
        $br++;
    }
    if ($i%7==0)
    {
        $br++;
    }
    if ($br==2)
    {
        echo $i;
    }
}
echo "<br><br><br>";

    ?>
</body>
</html>