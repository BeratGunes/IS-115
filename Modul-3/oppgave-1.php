<html>
    <body>
        <h1>Oppgave 1</h1>
        <?php
        $alder = 17;
        $navn = "Berat";
        
        if($alder >=18){
            echo "$navn er $alder år gammel og $navn er myndig";
        } 
        else 
        {
            echo "$navn er $alder år gammel og $navn er ikke myndig";
        }
        ?>
    </body>
</html>