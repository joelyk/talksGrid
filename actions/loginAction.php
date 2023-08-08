<?php 
require('actions/database.php');

if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])){
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_motdepasse =htmlspecialchars($_POST['motdepasse']);
    
    $checkIfUserExits= $bdd->prepare('
       SELECT * FROM users WHERE pseudo = ?
    ');
    $checkIfUserExits->execute([$user_pseudo]);
     
     if($checkIfUserExits->rowCount()==0){
        $errorMsg="Votre Pseudo ";
     }
    }else{
        $errorMsg="Veuillez completer tous les champs svp";
    }
}
