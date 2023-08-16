<?php
require('actions/database.php');

//on teste si l'utilisateur a cliquer sur le bouton valider du formulaire
if(isset($_POST['valider'])){
    //verifie ici si les champs ne sont pas vide 
    if(!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['title']) ){
        
    }else{
        $errorMsg = "Veuillez completer tout les champs";
    }
}

?>