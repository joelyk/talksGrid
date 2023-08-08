<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php' ?>
<body>
<div class="container mt-5">
        <h2>Formulaire d'inscription</h2>
        <form>
            <div class="form-group">
                <label for="pseudo">Pseudo :</label>
                <input type="text" class="form-control" id="pseudo" placeholder="Entrez votre pseudo">
            </div>
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prénom">
            </div>
            <div class="form-group">
                <label for="motdepasse">Mot de passe :</label>
                <input type="password" class="form-control" id="motdepasse" placeholder="Entrez votre mot de passe">
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire </button>
        </form>
    </div>
</body>
</html>