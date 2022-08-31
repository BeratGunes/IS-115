<html>
    <body>
        <html>
        <meta charset="utf-8">
        <h1>Oppgave 4</h1>
        <?php

$dateOfBirth = "30-07-1999";//Lager variabel for min bursdag.
$today = date("Y-m-d");//Lager variabel for "idag".
$detteåret = "30-07-2022";//Lager variabel for bursdagen min i år.
$diff = date_diff(date_create($dateOfBirth), date_create($today));//differansen mellom min bursdag og i dag
$diff2 = date_diff(date_create($today), date_create($detteåret));//differansen mellom i dag og bursdagen min i år.
echo "Alderen min er ".$diff->format('%y'). " og " .$diff2->format("%a dager"). ".";//%y og %a hjelper til at jeg skål få både årene og tallene som oppgaven spør om. 

?>
        
    </body>
</html>