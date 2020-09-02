<?php

//Variables
$getal = 1;

echo is_int($getal);

//Array + for-loop

$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"]; 

print_r($klas);

for($i = 0; $i<count($klas); $i++){
    echo $klas[$i], PHP_EOL;
}

foreach($klas as $item){
    echo $item, PHP_EOL;
}

//Combinatie Opdracht

$hoeveelheid_activiteiten = readline("Hoeveel activiteiten wil je toevoegen aan je bucket list?");
$bucket_list = array();

for($i=0; $i<$hoeveelheid_activiteiten; $i++){
    array_push($bucket_list, readline("Welke activiteiten wil je toevoegen?"));
}

print_r($bucket_list);

foreach($bucket_list as $item){
    echo $item, PHP_EOL;
}

?>