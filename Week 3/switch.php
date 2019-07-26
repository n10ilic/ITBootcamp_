<?php
$boja="crvena";
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

/*isti zadatak preko IF naredbe - if, elseif, i na kraju else)*/

echo "<br>";

/*za uneti redni broj dana ispitati koji je to dan u nedelji.
(ispisati dane od 1 do 7)*/
$dan= date ('N');
switch ($dan)
{
    case "1":
        echo "Dan je prvi u nedelji";
        break;
    case "2":
        echo "Dan je drugi u nedelji";
        break;
    case "3":
        echo "Dan je treci u nedelji";
        break;
    case "4":
        echo "Dan je cetvrti u nedelji";
        break;
    case "5":
        echo "Dan je peti u nedelji";
        break;
    case "6":
        echo "Dan je sesti u nedelji";
        break;
    case "7":
        echo "Dan je sedmi u nedelji";
        break;
    default:    
        echo "Niste uneli validnu vrednost";
}
echo "<br>";
$ocena=3;
switch ($ocena)
{
    case "1":
        echo "nedovoljan";
        break;
    case "2":
        echo "dovoljan";
        break;
    case "3":
        echo "dobar";
        break;
    case "4":
        echo "vrlo dobar";
        break;
    case "5":
        echo "odlican";
        break;
    default:
        echo "los unos";
}
echo "<br>";

$broj=28;
switch ($broj)
{
    case "0":
        echo "Uneti broj je 0";
        break;
    case "2":
        echo "Uneti broj je 2";
        break;
    case "4":
        echo "Uneti broj je 4";
        break;
    case "6":
        echo "Uneti broj je 6";
        break;
    case "8":
        echo "Uneti broj je 8";
        break;
    case "10":
        echo "Uneti broj je 10";
        break;
    default:
        echo "Unos je pogresan";

}

echo "<br>";

$brojX=5;
$brojY=10;
$karakter='m';
switch ($karakter)
{
    case "m": /*moze staviti M veliko u slucaju da se u karakteru upise veliko,obavlja f-ju*/
        echo ($brojX*$brojY);
        break;
    case "d":
        echo ($brojX/$brojY);
        break;
    case "s":
        echo ($brojX+$brojY);
        break;
    case "o":
        echo ($brojX-$brojY);
        break;
    default:
        echo "uneti karakter je pogresan";
}

echo "<br>";

$dan= date ('N');
switch ($dan)
{
    case "1":
        echo "Preostalo je jos 5 dana do vikenda";
        break;
    case "2":
        echo "Preostalo je jos 4 dana do vikenda";
        break;
    case "3":
        echo "Preostalo je jos 3 dana do vikenda";
        break;
    case "4":
        echo "Preostalo je jos 2 dana do vikenda";
        break;
    case "5":
        echo "Preostalo je jos 1 dana do vikenda";
        break;
    case "6":
        echo "Vikend";
        break;
    case "7":
        echo "Vikend";
        break;
    default:    
        echo "Niste uneli validnu vrednost";
}
echo "<br>";

/*$mesec=date('mm');
switch ($mesec)
{   case 01:
        echo "(januar) Mesec je prvi u godini";
        break;
    case 02:
        echo "(februar) Mesec je drugi u godini";
        break;
    case 03:
        echo "(mart) Mesec je treci u godini";
        break;
    case 04:
        echo "(april) Mesec je cetvrti u godini";
        break;
    case 05:
        echo "(maj) Mesec je peti u godini";
        break;
    case 04: 
        echo "(jun) Mesec je sesti u godini";
        break;
    case 07:
        echo "(jul) Mesec je sedmi u godini";
        break;
    case 08:
        echo "(avgust) Mesec je osmi u godini";
        break;
    case 09:
        echo "(septembar) Mesec je deveti u godini";
        break;
    case 10:
        echo "(oktobar) Mesec je deseti u godini";
        break;
    case 11:
        echo "(novembar) Mesec je jedanaesti u godini";
        break;
    case 12:
        echo "(decembar) Mesec je dvanaesti u godini";
        break;
    default:
        echo "Uneli ste pogresnu vrednost";
}*/



?>