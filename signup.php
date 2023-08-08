<?php require('actions/signupAction.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php' ?>
<body>
<div class="container mt-5">
        <h2>Formulaire d'inscription</h2>
        <form method="post">
            <?php 
            if (isset($errorMsg)){echo"<p> $errorMsg </p>";}
            ?>
            <div class="form-group">
                <label for="pseudo">Pseudo :</label>
                <input type="text" class="form-control" id="pseudo" placeholder="Entrez votre pseudo" name="pseudo">
            </div>
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom" name="nom">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prénom" name="prenom">
            </div>
            <div class="form-group">
                <label for="motdepasse">Mot de passe :</label>
                <input type="password" class="form-control" id="motdepasse" placeholder="Entrez votre mot de passe" name="motdepasse">
            </div>
            <button type="submit" class="btn btn-primary" name="valider">S'inscrire </button>
            <br>
            <br>
            <a href="login.php"> J'ai deja un compte, Se Connecter </a>
        </form>
    </div>
</body>
</html>