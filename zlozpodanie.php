<?php

$email = $_POST['email'];
$nick = $_POST['nick'];
$imie = $_POST['imie'];
$wiek = $_POST['wiek'];
$stanowisko = $_POST['stanowisko'];
$godziny = $_POST['godziny'];


$tresc = 'E-mail: '.$email.'<br>Nick: '.$nick.'<br>Imie: '.$imie.'<br> Wiek: '.$wiek.'<br>Stanowisko: '.$stanowisko.'<br>Godziny: '.$godziny;

mail('slptvc@gmail.com', 'Podanie', $tresc);

echo 'Twoje podanie zostało wysłane i czeka na rozpatrzenie. <br>';
echo '<a href="podanie.html">Powrót do strony SLPT</a>';


?>