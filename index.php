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
    $data=json_decode($result, true);
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
        <div class="main-container">

            <header>
                <img src="./assets/LOGO.png" alt="Next MCU Releases logo">
            </header>
            <main>
                <div class="overlay"></div>
                <section class="film-info">
                    <div class="movie-description">
                        <span><?=$data["type"]?></span>
                        <h1><?= $data["title"]?></h1>
                        <p><?= $data["overview"]?></p>
                        <div>
                            <p>Release date</p>
                            <?php
                                $dateByParts = explode('-', $data["release_date"]);
                                $formattedDate = $dateByParts[2].'-'.$dateByParts[1].'-'.$dateByParts[0];
                            ?>
                            <h2><?=$formattedDate?></h2>
                        </div>
                    </div>
                    <div class="img-container">                    
                        <img src="<?= $data["poster_url"] ?>" alt="Poster de <?=$data["title"] ?>">
                    </div>
                </section>
            </main>
            <footer>
                <p>FOOTER SECTION</p>
            </footer>
        </div>
    </body>
</html>