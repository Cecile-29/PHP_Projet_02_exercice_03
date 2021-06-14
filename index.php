<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet02 Exercice03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-7 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
        <h1 class="col-12 text-secondary text-center">PHP Projet02 Exercice03</h1>
            <p class="col-12 text-info text-center">Créez une variable initialisé à 1. Tant que cette variable n'a pas atteint 15, affichez 'On y est presque'.</p>    </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary text-center">
            <?php
                for($i = 1; $i < 15; $i++) {
                    echo '<h4 class="col-5"> '. $i. '<h4 class="col-5"> on y est presque ! ';
                }
            ?>
            <!-- Correction Meryem -->
            <?php
                // initailisation de la variable number directement dans la boucle for + condition + incrémentation
                for($number = 1; $number <= 15; $number++){
                    if($number != 15){
                    ?> 
                    <h3 class="border border-info rounded m-3 col-12"><?= 'On y est presque i vaut'. ' : '. $number?></h3> 
                    <?php
                    } else{
                        ?> 
                        <h3><?= 'Valeur maximale de la variable atteinte !'?></h3>
                        <?php
                    }
                }
                ?>
        </div>
    </div>
</body>
</html>