<?php include('variables.php'); ?>

<?php

    // Création du tableau d'erreurs
    $errorList = [];

    // filter_input(paramètres) vérifie l'existence du champ et le nettoye mais ne remplace pas empty.
   

    // Vérification de la variable $name
    if (!empty($_POST['name'])) {  // on vérifie si la variable existe et pas vide
        $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); // on (filtre) nettoye la variable
        if (!preg_match('/^[A-Z]{1}[a-zA-ZÀ-ÿ]{2,20}\D$/', $_POST['name'])) {   // si la regexp est correcte, on enregistre la variable
            $errorList['name'] = 'Pas de chiffres ou caractères spéciaux !' . ' :' . ' ' . $name;
        }
    }

    // Vérification de la variable $firstName
    if (!empty($_POST['firstName'])) {  // on vérifie si la variable existe et n'est pas vide
        $firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); // on (filtre) nettoye la variable 
        if (!preg_match('/^[A-Z]{1}[a-zA-ZÀ-ÿ]{2,20}\D$/', $_POST['firstName'])) {   // si la regexp est correcte, on enregistre la variable
            $errorList['firstName'] = 'Pas de chiffres ou caractères spéciaux !' . ' :' . ' ' . $firstName;
        }
    }

    // Vérification de la variable $birthDay
    if (!empty($_POST['birthDay'])) {  // on vérifie si la variable existe et n'est pas vide
        $birthDay = filter_var($_POST['birthDay'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); // on (filtre) nettoye la variable  
    } else {
        $errorList['birthDay'] = 'Erreur' . ' :' . ' ' . $birthDay;
    }

    // Vérification de la variable $country
    if (!empty($_POST['country'])) {  // on vérifie si la variable existe et n'est pas vide
        $country = filter_var($_POST['country'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); // on (filtre) nettoye la variable 
    } else {
        $errorList['country'] = 'Erreur' . ' :' . ' ' . $country;
    }

    // Vérification de la variable $nationality
    if (!empty($_POST['nationality'])) {  // on vérifie si la variable existe et n'est pas vide
        $nationality = filter_var($_POST['nationality'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); // on (filtre) nettoye la variable 
    } else {
        $errorList['nationality'] = 'Erreur' . ' :' . ' ' . $nationality;
    }

    // Vérification de la variable $adress
    if (!empty($_POST['adress'])) {  // on vérifie si la variable existe et n'est pas vide
        $adress = filter_var($_POST['adress'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); // on (filtre) nettoye la variable 
        if (!preg_match('/^[0-9]{1,4}\s[a-z]{3,10}\s[A-Z]{1}[a-z]{3,18}$/', $_POST['adress'])) {   // si la regexp est correcte, on enregistre la variable
            $errorList['adress'] = 'Pas de caractères spéciaux! Ou il vous manque des espaces ou une majuscule.' . ' :' . ' ' . $adress;
        }
    }

    // Vérification de la variable $codePostal
    if (!empty($_POST['codePostal'])) {  // on vérifie si la variable existe et n'est pas vide
        $codePostal = filter_var($_POST['codePostal'], FILTER_SANITIZE_NUMBER_INT); // on (filtre) nettoye la variable 
        if (!preg_match('/^[0-9]{5,5}$/', $_POST['codePostal'])) {   // si la regexp est correcte, on enregistre la variable
            $errorList['codePostal'] = 'Un nombre de 5 chiffres uniquement!' . ' :' . ' ' . $codePostal;
        }
    }

    // Vérification de la variable $city
    if (!empty($_POST['city'])) {  // on vérifie si la variable est existe et n'est pas vide
        $city = filter_var($_POST['city'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); // on (filtre) nettoye la variable 
        if (!preg_match('/^[A-Z]{1}[a-zA-ZÀ-ÿ]{2,20}\D$/', $_POST['city'])) {   // si la regexp est correcte, on enregistre la variable
            $errorList['city'] = 'Pas de chiffres ou caractères spéciaux!' . ' :' . ' ' . $city;
        }
    }

    // Vérification de la variable $email
    if (!empty($_POST['email'])) {  // on vérifie si la variable existe et n'est pas vide
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // on (filtre) nettoye la variable 
        if (!preg_match('/^[a-zA-Z0-9.-]+[@]{1}[a-zA-Z0-9.-]+[.]{1}[a-z]{2,10}$/', $_POST['email'])) {   // si la regexp est correcte, on enregistre la variable
            $errorList['email'] = 'Vérifiez si l\'adresse Mail est bien orthographié!' . ' :' . ' ' . $email;
        }
    }

    // Vérification de la variable $phone
    if (!empty($_POST['phone'])) {  // on vérifie si la variable existe et n'est pas vide
        $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT); // on (filtre) nettoye la variable 
        if (!preg_match('/^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/', $_POST['phone'])) {   // si la regexp est correcte, on enregistre la variable
            $errorList['phone'] = '"Nombre de 10 chiffres uniquement!' . ' :' . ' ' . $phone;
        }
    }

    // Vérification de la variable $degree
    if (!empty($_POST['degree'])) {  // on vérifie si la variable existe et n'est pas vide
        $degree = filter_var($_POST['degree'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); // on (filtre) nettoye la variable 
    } else {
        $errorList['degree'] = 'Erreur' . ' :' . ' ' . $degree;
    }

    // Vérification de la variable $poleEmploiNumber
    if (isset($_POST['poleEmploiNumber'])) {  // on vérifie si la variable existe et n'est pas vide
        $poleEmploiNumber = filter_var($_POST['poleEmploiNumber'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); // on (filtre) nettoye la variable 
        if (!preg_match('/^[0-9A-Z]{8,12}$/', $_POST['poleEmploiNumber'])) {   // si la regexp est correcte, on enregistre la variable
            $errorList['poleEmploiNumber'] = 'Votre numéro Pôle emploi doit comporter entre 8 et 12 caractères et aucunes minuscules!' . ' :' . ' ' . $poleEmploiNumber;
        }
    }

    // Vérification de la variable $badge
    if (isset($_POST['badge'])) {  // on vérifie si la variable existe et n'est pas vide
        $badge = filter_var($_POST['badge'], FILTER_SANITIZE_NUMBER_INT); // on (filtre) nettoye la variable 
    } else {

    }

    // Vérification de la variable $link
    if (isset($_POST['link'])) {  // on vérifie si la variable existe et n'est pas vide
        $link = filter_var($_POST['link'], FILTER_SANITIZE_URL); // on (filtre) nettoye la variable 
        if (!preg_match('/^[\w\-.]+@([\w\-]+.)+.[\w\-]{2,5}$/', $_POST['link'])) {   // si la regexp est correcte, on enregistre la variable
            $errorList['link'] = 'Veuillez entrer un lien valide!' . ' :' . ' ' . $link;
        }
    }

    // Vérification de la variable $question1
    if (isset($_POST['question1'])) {  // on vérifie si la variable existe et n'est pas vide
        $question1 = filter_var($_POST['question1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); // on (filtre) nettoye la variable 
    } else {

    }

    // Vérification de la variable $hackStory
    if (isset($_POST['hackStory'])) {  // on vérifie si la variable existe et n'est pas vide
        $hackStory = filter_var($_POST['hackStory'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); // on (filtre) nettoye la variable 
    } else {

    }

    // Vérification de la variable $question2
    if (isset($_POST['question2'])) {  // on vérifie si la variable existe et n'est pas vide
        $question2 = filter_var($_POST['question2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); // on (filtre) nettoye la variable 
    } else {

    }

?>
