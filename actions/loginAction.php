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
     
     if($checkIfUserExits->rowCount()>0){
        $userInfos=$checkIfUserExits->fetch();
         if(password_verify($user_motdepasse, $userInfos['motdepasse'])){
        //Authentification de l'utilisateur !
        $_SESSION['auth']=true;
        $_SESSION['id'] = $userInfos['id'];
        $_SESSION['pseudo'] = $userInfos['pseudo'];
        $_SESSION['nom'] = $userInfos['nom'];
        $_SESSION['prenom'] = $userInfos['prenom'];
        header('Location: index.php');
               
         }else{$errorMsg="Votre mot de passe est incorrecte !";}
 
     }else{$errorMsg="Votre Pseudo est incorrecte !";}

    }else{
        $errorMsg="Veuillez completer tous les champs svp";
    }
}
