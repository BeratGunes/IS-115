<html>
    <body>
        <h2> Hvor  mange  timer,  minutter  og  sekunder  som  utgjør  4400  sekunder? </h2>
<?php
$sekunderangitt = 4400;
$timer = floor($sekunderangitt / 3600);
//deler med 3600 fordi det er 3600 sekunder i en time.
$minutter = floor (($sekunderangitt / 60) % 60);
$sekunder = $sekunderangitt % 60;

echo "$sekunderangitt utgjør $timer timer $minutter minutter og $sekunder sekunder" ;
?>
</body>
</html>



