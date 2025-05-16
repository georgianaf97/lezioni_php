<?php

$capitali = [
    "Roma" => "Italia",
    "Parigi" => "Francia",
    "Madrid" => "Spagna",
    "Berlino" => "Germania",
    "Londra" => "Regno Unito",
    "Vienna" => "Austria",
    "Bruxelles" => "Belgio",
    "Amsterdam" => "Paesi Bassi",
    "Atene" => "Grecia",
    "Lisbona" => "Portogallo"
];


$capitale = $_GET["capitale"];


$risultato = "<p>La capitale <strong>$capitale</strong> si trova in <strong>" . $capitali[$capitale] . "</strong>.</p>";

