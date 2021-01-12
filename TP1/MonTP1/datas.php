<?php include('variables.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des données</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/datas.css">
</head>
<body>
    <h2 class="text-center"> <strong>Liste des informations d'un apprenant</strong> </h2>
    <br>
    <div class="container">
        <p class="form-control"> <?php  echo 'Nom du futur apprenant' . ' :' . ' ' .  $name; ?> <br> </p>
        <p class="form-control"> <?php  echo 'Prénom du futur apprenant' . ' :' . ' ' . $firstName; ?> <br> </p>
        <p class="form-control"> <?php  echo 'Date de naissance du futur apprenant' . ' :' . ' ' . $birthDay; ?> <br> </p>
        <p class="form-control"> <?php  echo 'Pays de naissance du futur apprenant' . ' :' . ' ' . $country; ?> <br> </p>
        <p class="form-control"> <?php  echo 'Nationnalité du futur apprenant' . ' :' . ' ' . $nationality; ?> <br> </p>
        <p class="form-control"> <?php  echo 'Adresse du futur apprenant' . ' :' . ' ' . $adress; ?> <br> </p>
        <p class="form-control"> <?php  echo 'Code postal du futur apprenant' . ' :' . ' ' . $codePostal; ?> <br> </p>
        <p class="form-control"> <?php  echo 'Ville du futur apprenant' . ' :' . ' ' . $city; ?> <br> </p>
        <p class="form-control"> <?php  echo 'Mail du futur apprenant' . ' :' . ' ' . $email; ?> <br> </p>
        <p class="form-control"> <?php  echo 'Téléphone du futur apprenant' . ' :' . ' ' . $phone; ?> <br> </p>
        <p class="form-control"> <?php  echo 'Diplôme(s) du futur apprenant' . ' :' . ' ' . $degree; ?> <br> </p>
        <p class="form-control"> <?php  echo 'Numéro pôle emploi du futur apprenant' . ' :' . ' ' . $poleEmploiNumber; ?> <br> </p>
        <p class="form-control"> <?php  echo 'Badge du futur apprenant' . ' :' . ' ' . $badge; ?> <br> </p>
        <p class="form-control"> <?php  echo 'Lien codeAcademy du futur apprenant' . ' :' . ' ' . $link; ?> <br> </p>
        <p class="form-control"> <?php  echo 'Réponse à la première question du futur apprenant' . ' :' . ' ' . $question1; ?> <br> </p>
        <p class="form-control"> <?php  echo 'Histoire de hack du futur apprenant' . ' :' . ' ' . $hackStory; ?> <br> </p>
        <p class="form-control"> <?php  echo 'Réponse à la deuxième question du futur apprenant' . ' :' . ' ' . $question2; ?> <br> </p>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

