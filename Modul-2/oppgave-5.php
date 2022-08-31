<html>
    <body>
<?php

echo "<h1>Oppgave 5</h1>";

function rand_string() {

$småBokstav = "abcdefghijklmnopqrstuvwxyz";
$storBokstav = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$tall = "0123456789";
$endeligPassord = "";
//lager variabler for små, store bokstaver, tall og endelig passord, endelig passord lager jeg fordi jeg skal fylle inn verdi etterhvert. 

$tilfeldigStorBokstav = str_shuffle(substr($storBokstav,0 ,1));//lager denne variablen, for at den skal velge en tilfeldig stor bokstav uansett, og shuffler den.
$tilfeldigTall = str_shuffle(substr($tall, 0 ,1));//lager denne variablen, for at den skal velge et tilfeldig tall uansett, og shuffler den.

$password = $småBokstav . $storBokstav . $tall; //lager denne variablen for å samle alle variablene. 
$password = str_shuffle($password);//shuffler igjen.
$password = substr($password, 0, 6);//substr returnerer en del av stringen, jeg skrev 6 istedet for 8 fordi på tilfeldig bokstav og tall har jeg allerede valgt ut 2 stk. 2+6=8.

$endeligPassord .= $tilfeldigStorBokstav; 
$endeligPassord .= $tilfeldigTall;
$endeligPassord .= $password;
//disse variablene er for å samle alle variablene og få det på echo. 

echo "Da blir passordet " . str_shuffle($endeligPassord);//shuffler igjen. 
}

rand_string();

?>
</body>
</html>
