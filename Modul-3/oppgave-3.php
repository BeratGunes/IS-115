<html>
    <body>
        <h1>Oppgave 3</h1>
        <?php

$Startsaldo = "100";
$Rente = "1.08";

echo "Startsaldoen er $Startsaldo kr. <br> Renten ligger på 8% <br><br>";

for ($i = 1; $i <= 10; $i++) {

    $Startsaldo = $Startsaldo * $Rente;

    echo "$i. året blir den nye saldoen $Startsaldo kr.<br>";
}


?>
    </body>
</html>