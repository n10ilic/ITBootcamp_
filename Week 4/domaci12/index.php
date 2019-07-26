<html>
<head></head>

<style>
</style>

<body>


    <?php
    echo "Zadatak1:
    Napisati funkciju koja ispisuje stavku liste < li >. Kao prvi parametar
    prima boju teksta, kao drugi parametar veličinu teksta u toj stavci
    liste, a kao treći parametar sam tekst koji se ispisuje. U telu HTML
    dokumenta formirati jednu neuređenu listu i pozvati tri puta funkciju
    za ispisivanje tri stavke liste. Za boje, veličinu i tekst uzeti
    proizvoljne veličine.<br>";

        function stavke($boja, $velFont, $tekst)
        {
            
            {
                echo "<li style='font-size:$velFont; color: $boja;'>$tekst</li>";
            } 
            
        }
        stavke("blue", 15, "Primer 1");
        stavke("red", 20, "Primer 2");
        stavke("orange", 25, "Primer 3");

    echo "<br><br><br>";

    echo "Zadatak2:
    Napisati funkciju koja ispisuje ćeliju tabele < td >. Kao prvi
    parametar prima logičku promenljivu da li je tekst u ćeliji iskošen ili
    ne, a kao drugi parametar tekst koji se prikazuje unutar te ćelije. U
    telu HTML dokumenta kreirati tabelu dimenzija 2 x 3, a unutar nje
    pozvati šest puta funkciju sa proizvoljnim tekstom.Potrebno je da
    tekst u ćelijama naizmenično bude iskošen.<br>";
    function tabela($fontStil,$fontStil_2,$txt)
    {
        return "<table border='1' width='300px' height='100px'>;

        <tr>
            <td style='font-style:$fontStil;'>$txt</td>
            <td style='font-style:$fontStil_2;'>$txt</td>
            <td style='font-style:$fontStil;'>$txt</td>
        </tr>

        <tr>
            <td style='font-style:$fontStil_2;'>$txt</td>
            <td style='font-style:$fontStil;'>$txt</td>
            <td style='font-style:$fontStil_2;'>$txt</td>
        </tr>
        
    </table>";
    }
    echo tabela("regular","italic","tekst_tabela");
    ?>

</body>
</html>
