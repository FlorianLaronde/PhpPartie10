<?php 
session_start();
// Faire une fonction qui permet d'afficher les données des tableaux suivants :

$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

// Les afficher tous sur une même page.

// var_dump($portrait1);
// echo '<br>';
// var_dump($portrait2);
// echo '<br>';
// var_dump($portrait3);
// echo '<br>';
// var_dump($portrait4);
// echo '<br>';

// Fusionner les tableaux et leurs index entre eux
// $result = array_merge_recursive($portrait1, $portrait2,$portrait3, $portrait4);
// print_r($result);


function displayArray($array) {
    $user = '<div class=" my-5container card" style="width: 18rem;">
                <img src="'.$array['portrait'].'" class="img-fluid card-img-top" alt="Portrait de '.$array['name'].' '.$array['firstname'].'">
                <div class="card-body">
                    <h5 class="card-title">'.$array['name'].' '.$array['firstname'].'</h5>
                </div>
            </div>';
    return $user;
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>PHP - TP 3</title>
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">

            <div class="my-5 col-md-3">

                <?= displayArray($portrait1); ?>
            </div>

            <div class="my-5 col-md-3">
                <?= displayArray($portrait2); ?>
            </div>

            <div class="my-5 col-md-3">
                <?= displayArray($portrait3); ?>
            </div>

            <div class="my-5 col-md-3">
                <?= displayArray($portrait4); ?>
            </div>

        </div>
    </div>
    

</body>
</html>