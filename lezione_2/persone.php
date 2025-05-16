<?php

$persone = array(
    0 => array(
        "nome" => "Mario",
        "cognome" => "Rossi",
        "eta" => 30,
        "Città" => "Roma"
    ),
    1 => array(
        "nome" => "Luigi",
        "cognome" => "Verdi",
        "eta" => 25,
        "Città" => "Bologna"
    ),
    2 => array(
        "nome" => "Giovanni",
        "cognome" => "Bianchi",
        "eta" => 35
    )

);

    $persona = $persone[ $_GET ['id']];

echo '<html>';
echo ' <head>';
echo ' <title>Persone</title>';
echo '<h1>' . $persona ["nome"] . ' '  . $persona["cognome"] . '</h1>' ;
echo '<h2>' . $_SERVER['QUERY_STRING'] . '</h2>';
echo' <p>Età: ' . $persona[ 'eta'] . '</p>' ;
echo'<p>Città: ' .$persone[ $_GET ['id']] ['Città']. '</p>';
echo '</head>';
echo '<body>';

