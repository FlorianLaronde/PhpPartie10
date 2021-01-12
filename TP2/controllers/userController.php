<?php

$civility = trim(filter_input(INPUT_POST, 'civility', FILTER_SANITIZE_STRING));
$name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$firstName = trim(filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$age = trim(filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$society = trim(filter_input(INPUT_POST, 'society', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$errorsArray = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Civilité
    $civility = trim(filter_input(INPUT_POST, 'civility', FILTER_SANITIZE_STRING));


    // **************************************************************


    // NAME
    // On verifie l'existance et on nettoie
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    //On test si le champ n'est pas vide
    if(!empty($name)){
        // On test la valeur
        $testRegex = preg_match('/^[A-Za-z-éèêëàâäôöûüç ]+$/',$name);

        if($testRegex == false){
            $errorsArray['name_error'] = 'Le nom n\'est pas valide';
        }
    }else{
        $errorsArray['name_error'] = 'Le champ n\'est pas rempli';
    }


    // ***************************************************************


    // firstName
    // On verifie l'existance et on nettoie
    $firstName = trim(filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    //On test si le champ n'est pas vide
    if(!empty($firstName)){
        // On test la valeur
        $testRegex = preg_match('/^[A-Za-z-éèêëàâäôöûüç ]+$/',$firstName);

        if($testRegex == false){
            $errorsArray['firstName_error'] = 'Le prénom n\'est pas valide';
        }
    }else{
        $errorsArray['firstName_error'] = 'Le champ n\'est pas rempli';
    }

    // ******************************************************************


    // Age
    // On verifie l'existance et on nettoie
    $age = trim(filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    //On test si le champ n'est pas vide
    if(!empty($age)){
        // On test la valeur
        $testRegex = preg_match('/^[1-9][0-9]?$/',$age);

        if($testRegex == false){
            $errorsArray['age_error'] = 'L\'âge n\'est pas valide';
        }
    }else{
        $errorsArray['age_error'] = 'Le champ n\'est pas rempli';
    }


    // ******************************************************************


    // Société
    // On verifie l'existance et on nettoie
    $society = trim(filter_input(INPUT_POST, 'society', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    //On test si le champ n'est pas vide
    if(!empty($society)){
        // On test la valeur
        $testRegex = preg_match('/^[A-Za-z-éèêëàâäôöûüç ]+$/',$society);

        if($testRegex == false){
            $errorsArray['society_error'] = 'La société n\'est pas valide';
        }
    }else{
        $errorsArray['society_error'] = 'Le champ n\'est pas rempli';
    }
}
?>