<?php require('actions/securityAction.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
        <h2>Publication d'une Article</h2>
        <form method="post">
            <?php 
            if (isset($errorMsg)){echo"<p> $errorMsg </p>";}
            ?>
            <div class="form-group">
                <label for="title">Titre de la Question :</label>
                <br>
                <input type="text" class="form-control" id="title" placeholder="Entrez votre titre" name="title">
            </div>
            <br> <br>
            <div class="form-group">
                <label for="content">Contenue de la Question :</label>
                <br>
                <textarea type="text" class="form-control" id="content" placeholder="Contenue" name="content"> </textarea>
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