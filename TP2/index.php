<?php

include('views\templates\header.php');

include('controllers\userController.php');

// test de l'envoi de données en POST
if($_SERVER['REQUEST_METHOD'] == 'POST' && empty($errorsArray)){
    include('views\userForm.php');
    include('views\userDatas.php');
}else{
    include('views\userForm.php');
}

include('views\templates\footer.php');
?>
