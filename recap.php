<?php
$titulo='mi primera aplicacion con PHP';
$name= "Richard";
$hobbie= "tocar guitarra";
$age= 28;
$output= "Soy $name, tengo $age años de edad y me gusta $hobbie";
$output .=  ", además, esta es $titulo";
define('URL_TEMP_LOGO', 'https://cdn.freebiesupply.com/logos/large/2x/php-logo-png-transparent.png');

$outputAge = match(true){
    $age < 18 => "Eres menor de edad",
    $age >= 18 => "Puedes beber birras y conducir",
    $age === 65=> "Estás viejísimo",
    default => "Adiós",
};

$instruments = ["Guitar", "Piano", "Bass"];
$instruments[] = "Classic Guitar";
$instruments[2] = "Electric Bass"

?>