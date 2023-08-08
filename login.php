<!DOCTYPE html>
<html lang="en">
<head>
   <?php include 'includes/head.php'; ?>
</head>
<body>
<div class="container mt-5">
        <h2>Inscription au Site</h2>
        <form method="post">
            <?php 
            if (isset($errorMsg)){echo"<p> $errorMsg </p>";}
            ?>
            <div class="form-group">
                <label for="pseudo">Pseudo :</label>
                <input type="text" class="form-control" id="pseudo" placeholder="Entrez votre pseudo" name="pseudo">
            </div>
            <div class="form-group">
                <label for="motdepasse">Mot de passe :</label>
                <input type="password" class="form-control" id="motdepasse" placeholder="Entrez votre mot de passe" name="motdepasse">
            </div>
            <br>
            <br>
            <button type="submit" class="btn btn-primary" name="valider">Se Connecter </button>

            <br><br>
            <a href="signup.php"> Je m'inscris !</a>
        </form>
    </div>
</body>
</html>