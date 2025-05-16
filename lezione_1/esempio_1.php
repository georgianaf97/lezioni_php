<?php



$dati = array(
    "nome" => "Georgiana",
    "cognome"=> "Florea",
    "eta"=> 28,
    "citta"=> "Castel San Pietro Terme",
    "origine"=> "Romania",
    "hobby"=> "gaming",
);

$musica = array("dancehall afrobeat", "trap");

echo '<h1>' . 'Ecco la mia presentazione</h1>' . PHP_EOL;

echo '<p>' . 'Mi chiamo ' . $dati['nome'] . ' ' . $dati['cognome'] . '</p>' . PHP_EOL;
echo '<p>' . 'Ho ' . $dati['eta'] . ' anni.' . '</p>' . PHP_EOL; 
echo '<p>' . 'Vivo a ' . $dati['citta']  .'</p>' . PHP_EOL;
echo '<p>' . 'Vengo dalla ' . $dati['origine']  . '</p>' . PHP_EOL;
echo '<p>' . 'Il mio hobby è ' . $dati['hobby'] . '</p>' . PHP_EOL;
echo '<p>' . 'La mia musica preferita è ' . $musica['0'] . '</p>' . PHP_EOL; 
echo '<p>' . 'Non mi piace il ' . $musica['1'] . '</p>' . PHP_EOL;