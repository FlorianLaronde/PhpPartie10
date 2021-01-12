<?php 

    // Si le formulaire a été envoyé et que je n'ai pas d'erreurs
    // J'affiche les données reçues
    // Sinon j'affiche le formulaire 
    // Vérifier mes données reçues

    // On remet la variable du tableau

    include("controller.php ");
    // Si la requête avec les données est bien envoyée et s'il n'y a aucunes erreurs
    // $_SERVER['REQUEST_METHOD'] contient la méthode de requête (surprise)
    // $_POST contient toutes les données de publication
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($errorList)) {
        // J'affiche les données
        include('datas.php');
    } else {
        // Je réaffiche le formulaire avec les erreurs
        include('form.php');   
    }

?>

    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>