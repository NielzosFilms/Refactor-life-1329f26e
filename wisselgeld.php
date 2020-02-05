<?php
    
$munten = [
    "50 euro"=>0,
    "20 euro"=>0,
    "10 euro"=>0,
    "5 euro"=>0,
    "2 euro"=>0,
    "1 euro"=>0,
    "0.5 cent"=>0,
    "0.2 cent"=>0,
    "0.1 cent"=>0,
    "0.05 cent"=>0
];

$input = doubleval($argv[1]);
$geld = (round($input*2, 1)/2);

if(!$geld > 0) exit("Geen wisselgeld");

foreach($munten as $munt){
    $waarde = explode(" ", $munt);
    $munten[$munt] = floor($geld/$waarde[0]);
    $geld = fmod($geld, $waarde[0]);
}

foreach($munten as $munt=>$hoeveelheid) {
    if($val !== 0) echo($hoeveelheid." X ".$munt.PHP_EOL);
}

?>