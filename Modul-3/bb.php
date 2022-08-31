<?php
$Kommune1 = "Kristiansand";
$Kommune2 = "Lillesand";
$Kommune3 = "Birkenes";
$Kommune4 = "Harstad";
$Kommune5 = "Kvæfjord";
$Kommune6 = "Tromsø";
$Kommune7 = "Bergen";
$Kommune8 = "Trondheim";
$Kommune9 = "Bodø";
$Kommune10 = "Alta";

$Return_value = match($Kommune9) {

    "Kristiansand" => "Kristiansand ligger i Agder fylkeskommune",
    "Lillesand" => "Lillesand ligger i Agder fylkeskommune",
    "Birkenes" => "Birkenes ligger i Agder fylkeskommune",
    "Harstad" => "Harstad ligger i Troms og finmark fylke",
    "Kvæfjord" => "Kvæfjord ligger i Troms og finmark fylke",
    "Tromsø" => "Tromsø ligger i troms og finnmark fylke",
    "Bergen" => "Bergen ligger i Vestland fylke",
    "Trondheim" => "Trondheim ligger i Trøndelag fylke",
    "Bodø" => "Bodø ligger i Nordland fylke",
    "Alta" => "Alta ligger i Troms og finmark fylke",

    
};

var_dump($Return_value);