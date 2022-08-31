<html>
    <body>
        <h1>Oppgave 2</h1>
<?php
 for ($i = 0; $i < 10; $i++) {
    echo "$i <br>";
  }
echo "Ferdig med å telle! <br>";

$sum = 0;

for ($i = 1; $i <= 9; $i++) {
   $sum += $i;
}

echo "Summen av tallene 0-9 er " . $sum;
?>
</body>
</html>
