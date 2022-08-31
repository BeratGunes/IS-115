<html>
<body>
    <head>
        <link rel="stylesheet" href="../style/styles.css">
    </head>
    <h1>29.08.2022 Forelesningen </h1>
<?php
$navn = "zirtto";
$alder = (int)82;
$alder = $alder + 20;
echo date("d.m.y"); 
echo "<br>";
echo "Navnet er " .$navn. " og alderen er $alder" ;
echo "<br>";
echo "Om 20 år er " .$navn. " " .($alder + 20) . " år.";
echo "<br>";
echo date ("h:i:s");
?>


<H2>Øving 1</H2>
<?php
$antallGjester = (int)12;
$deInviterte = $antallGjester - 1;
$kvinner = $antallGjester / 2;
$tjueAarene = $antallGjester / 3;
$tvillinger = $antallGjester / 6;

echo 
"Antall gjester er $antallGjester.<br> 
Det er $deInviterte som er invitert. <br>
Det er $kvinner kvinner. <br> Det er $tjueAarene som er i 20-årene. <br>
Det er $tvillinger tvillinger av alle gjester. ";

?>
</body>
</html>