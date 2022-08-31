<html>
    <body>
        <h1>Oppgave 4</h1>
        <?php
        $fylke1 = "Agder";
        $fylke2= "Troms og Finnmark";
        $fylke3= "Vestland";
        $fylke4= "Trøndelag";
        $fylke5= "Nordland";

        switch ($fylke1) {
            case "Agder":
                echo "Kristiansand ligger i Agder ";
                break;
            case "Troms og Finnmark":
                echo "Kristiansand ligger i Troms og Finnmark";
                break;
            default:
            echo "Kristiansand ligger i Bangladesh <br>";
        }

        ?>
        <br>
        <?php
        switch ($fylke2) {
            case "Troms og Finnmark":
                echo "Harstad ligger i Troms og Finnmark ";
                break;
                case "Agder":
                echo "Harstadligger i Agder";
                break;
            default:
            echo "Harstad ligger i Bangladesh";
        }
    

        ?>
    </body>
</html>