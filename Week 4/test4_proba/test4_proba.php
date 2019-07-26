<?php
/*echo"1) Zadatak
Napisati funkciju suma koja određuje sumu onih brojeva koji su deljivi
sa 3 i nisu deljivi sa 7, u intervalu od n do m. Sumu vratiti pomoću
return naredbe i tek onda je ispisati na ekranu.<br><br>
2) Zadatak
Napraviti funkciju ispis kojoj se prosleđuju tri parametra – boja na
engleskom jeziku $ color, numerička vrednost za veličinu fonta $ font i
numeričku vrednosti za broj iteracija $ n. U funkciji iteriranje vršiti $ n
puta pomoću while petlje i u okviru HTML paragrafa ispisivati redni
broj iteracije, paragraf obojiti prosleđenom bojom i podesiti mu
prosleđenu veličinu za veličinu fonta.
//*slican kao domaci 12 zadatak2---nije jasno kako namestiti da num vrednost
povecava br iteracija/
<br><br> 

3) Zadatak
Napraviti funkciju krvnaGrupa koja na osnovu prosleđenog tipa krvne
grupe A+, 0+, B+ ili AB+ u switch naredbi ispisuje krv koje krvne
grupe osoba može da primi, a kojim krvnim grupama krv može da da,
na osnovu sledeće tabele.
Tip Može dati krv Može primiti krv
A+ A+, AB+ A+,0+
0+ 0+, A+, B+, AB+ 0+
B+ B+, AB+ B+, 0+
AB+ AB+ Sve krvne grup<br><br>";

echo "zad2";

$n=0;
function ispis($color,$font)
{
    while ($n<5)
    {
        $n++;
        echo "<p style='font-size:$font; color: $color;'>$n</p>";
    }
    return $n;
}
echo ispis("blue",20);


echo "<br><br>";
echo "zad3";

function krvnaGrupa($kgrupa);
switch ($kgrupa)
{
    case "A+":
        echo "Moze dati krv A+ i AB+ <br>
        Moze primiti krv A+, 0+";
        break;
    case "0+":
        echo "Moze dati krv 0+, A+, B+ i AB+ <br>
        Moze primiti krv 0+";
        break;
    case "B+":
        echo "Moze dati krv B+ i AB+ <br>
        Moze primiti krv B+, 0+";
        break;
    case "AB+":
        echo "Moze dati krv AB+ <br>
        Moze primiti krv od svih krvinh grupa";
        break;
    
    default:    
        echo "Niste uneli validnu vrednost";
}
echo krvnaGrupa("A+");
?>