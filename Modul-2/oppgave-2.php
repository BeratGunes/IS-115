<?php
echo "<h1>Oppgave 2</h1>";
echo "Etternavnet mitt er: ";
$etternavn = "Gu<br>nes<br>";//Her har jeg <br> taggen som lager "break". 
echo strip_tags("$etternavn");//strip_tags hjelper til at man blir kvitt taggene.
echo "<br><br>";
echo "I dette eksemplet hadde jeg nevnt variabel etternavnet som Gunes med br taggen, ved hjelp av striptags fjerna jeg taggen";
echo "<br><br>";
echo "Originale variabelen viser seg som $etternavn";
?>