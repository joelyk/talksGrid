<?php 
  require('actions/securityAction.php');
  require('actions/questions/publishAction.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
<?php include 'includes/navbar.php'; ?>
<div class="container mt-5">
        <h2>Publication d'un Article</h2>
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
            <button type="submit" class="btn btn-primary" name="valider">Publier la question ! </button>

            <br><br>
            <a href="signup.php"> Je m'inscris !</a>
        </form>
    </div>
</body>
</html>