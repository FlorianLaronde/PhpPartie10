<?php include('views\templates\header.php') ?>

    <div class="container">
        <!-- Mon formulaire -->
        <form action="" method="POST">
            <fieldset>
                <legend>Formulaire</legend>
                <!-- Civilité -->
                <p>Choisissez votre civilité :</p>
                <div class="form-group">
                    <label for="Mr">Monsieur</label>
                    <input type="radio" id="Mr" name="civility" value="Mr"
                            checked>
                </div>

                <div class="form-group">
                    <label for="Mme">Madame</label>
                    <input type="radio" id="Mme" name="civility" value="Mme">
                </div>

                <br>

                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input class="form-control" type="text" name="name" id="name" required  value="<?= $name ?? ''?>"
                    pattern="[A-Za-z-éèêëàâäôöûüç' ]+">
                    <div id="" class="form-text"><?= $errorsArray['name_error'] ?? ''?></div>
                </div>

                <br>

                <div class="form-group">
                    <label for="firstName">Prénom :</label>
                    <input class="form-control" type="text" name="firstName" id="firstName" required  value="<?= $firstName ?? ''?>"
                    pattern="[A-Za-z-éèêëàâäôöûüç' ]+">
                    <div id="" class="form-text"><?= $errorsArray['firstName_error'] ?? ''?></div>
                </div>

                <br>

                <div class="form-group">
                    <label for="age">Age :</label>
                    <input class="form-control" type="number" name="age" id="age" required  value="<?= $age ?? ''?>"
                    pattern="[1-9][0-9]" title="">
                    <div id="" class="form-text"><?= $errorsArray['age_error'] ?? ''?></div>
                </div>

                <br>

                <div class="form-group">
                    <label for="society">society :</label>
                    <input class="form-control" type="text" name="society" id="society" required  value="<?= $society ?? ''?>"
                    pattern="[A-Za-z-éèêëàâäôöûüç' ]+">
                    <div id="" class="form-text"><?= $errorsArray['society_error'] ?? ''?></div>
                </div>

                <button class="mt-3 form-control btn btn-info" type="submit">Envoyer</button>

            </fieldset>
        </form>
    </div>

<?php include('views\templates\footer.php') ?>