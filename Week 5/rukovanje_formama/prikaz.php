<?php
    echo "Dobrodosao" . $_GET["ime"];
    echo "<br>";
    echo "Tvoj mejl je" . $_GET["email"];
    /*posto koristimo $ get u url pise npr.
    prikaz.php?ime=NIKOLA&email=n10ilic%40gmail.com
    a kada koristimo $ post, onda ne pise nista,
    to sluzi za osetljive podatke tipa password*/
?>