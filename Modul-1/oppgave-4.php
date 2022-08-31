<html>
    <body>
    <h2>Oppgave 4</h2>
    <h3>Summen</h3>
    
    <?php
        $tall1 = 2;
        $tall2 = 4;
        $sum = $tall1 + $tall2;

        echo "$tall1 + $tall2 = " .  $tall1 + $tall2 ;
        ?>
    <h3>Differansen</h3>

    <?php
    echo "$tall2 - $tall1 = " . (abs($tall1 - $tall2)) ;
    ?>
    <h3>Gjennomsnittet</h3>
    <?php
    echo "Finne summen og dele på antallet = " . $sum / 2;
    ?>



    </body>
</html>