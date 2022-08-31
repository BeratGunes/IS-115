<html>
    <body>
        <?php 
        $sekunder = 4400;
        $minutter = $sekunder / 60;
        $timer =  $minutter / 60;
        ?>

        <h2>Hvor  mange  timer,  minutter  og  sekunder  som  utgjør  4400  sekunder</h2>
        <br>
        <h3>Timer</h3>
        <?php 
        echo "4400 sekunder utgjør $timer timer";
        ?>

        <h3>Minutter</h3> 
        <?php 
        echo "4400 sekunder utgjør $minutter minutter";
        ?>

        <h3>Sekunder</h3>
        <?php 
        echo "Det blir da $sekunder"; 
        ?>

    </body>
</html>