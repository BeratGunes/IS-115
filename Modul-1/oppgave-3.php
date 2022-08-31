<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
<h2>Oppgave 3</h2>

<br>

<?php
$alder = 23;
$navn = "Berat"; 
?>

<table style="width:50%">
  <tr>
    <th>Navn</th>
    <th>Alder</th>
    <tr>
    <td><?php echo $navn; ?></td>
    <td><?php echo $alder; ?></td> 
    </tr>
</table>
<br><br>

<table>
    <ul>
        <li><?php echo $navn?></li>
         <li><?php echo $alder?></li>
    </ul>
</table>
<br><br>



<table>
    <ol>
        <li><?php echo $navn?></li>
         <li><?php echo $alder?></li>
</ol>
</table>
<br><br>
<?php
echo "Hei, Jeg heter $navn og jeg er $alder år gammel";
?>

</body>

</html>
