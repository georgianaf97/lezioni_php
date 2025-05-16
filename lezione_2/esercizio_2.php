<?php

$hotel = [
    1 => [101 => "Mario Rossi", 102 => "Luca Bianchi", 103 => "Anna Verdi"],
    2 => [201 => "Giulia Neri", 202 => "Francesco Gallo", 203 => "Elisa Fontana"],
    3 => [301 => "Marco Ferri", 302 => "Sara Conti", 303 => "Paolo Romano"],
];


$piano = $_GET['piano'];
$stanza = $_GET['stanza'];


echo "L'ospite nella stanza $stanza al piano $piano è: " . $hotel[$piano][$stanza];


