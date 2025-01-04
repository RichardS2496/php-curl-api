<?php

$title= "The next MCU Film";
const API_URL = "https://whenisthenextmcufilm.com/api";

$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); <-- esto se usa para anular la verificacion del cert ssl y que me permita trabajar sin problemas en local, pero no se recomiendo en produccion,

$result= curl_exec($ch);

if ($result === false){
    echo "Error cURL". curl_error($ch);
} else {
    var_dump($result);
    $data=json_decode($result, true);
    var_dump($data);
}
curl_close($ch);
?>

<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="./styles/styles.css">
    </head>
    
  
    <body>
        
    </body>
</html>