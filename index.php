<?php

//Variables
$getal = 1;

echo is_int($getal);

PHP_EOL;

//Array + for-loop

$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"]; 

for($i = 0; $i<count($klas); $i++){
    echo $klas[$i], PHP_EOL;
}

PHP_EOL;

foreach($klas as $item){
    echo $item, PHP_EOL;
}

PHP_EOL;

//Combinatie Opdracht

$activiteiten = readline("Hoeveel activiteiten wil je toevoegen aan je bucket list?");
$welkeArray = array();

for($i=0; $i<$activiteiten; $i++){
    array_push($welkeArray, readline("Welke activiteiten wil je toevoegen?"));
}

print_r($welkeArray);

foreach($welkeArray as $item){
    echo $item, PHP_EOL;
}