<!DOCTYPE html>
<html>
    <body>
        <h1>Oppgave 3</h1>
       <?php echo "Oppgave 3 handler om at vi skal hjelpe Matheo hvor mange ganger bokstavkombinasjonen «is» forekommer i setningen «Thereses familie skulle ha ris til middag. Hun ville heller ha en is å spise.";
        ?>
        <br><br>
        <?php

        $antallis = (substr_count("Thereses familie skulle ha ris til middag. Hun ville heller ha en is å spise","is"));//substr_count hjelper til å telle viss kombinasjonen som er gitt.
        echo "Da forekommer kombinasjonen 'is' $antallis ganger";
        ?>
    </body>
</html>