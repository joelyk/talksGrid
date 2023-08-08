<?php 
require('actions/database.php');

if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['motdepasse'])){
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_nom = htmlspecialchars($_POST['nom']);
        $user_prenom = htmlspecialchars($_POST['prenom']);
        $user_motdepasse = password_hash($_POST['motdepasse'], PASSWORD_BCRYPT);
        
        $checkIfUserAlreadyExists =  $bdd->prepare('
        SELECT pseudo FROM users WHERE pseudo = ?'
         );
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

    if ($checkIfUserAlreadyExists->rowCount()==0){
        $insertUserOnWebSite = $bdd->prepare(
            'INSERT INTO users (pseudo, nom, prenom, motdepasse) VALUES (?,?,?,?)'
        );
        $insertUserOnWebSite->execute(array($user_pseudo, $user_nom, $user_prenom, $user_motdepasse));
         
        $getInfosOfUserReq= $bdd->prepare(
            'SELECT id, pseudo, nom, prenom FROM users WHERE pseudo =? AND nom=? AND prenom=?'
        );
        $getInfosOfUserReq->execute(array($user_pseudo, $user_nom, $user_prenom));

        $userInfos= $getInfosOfUserReq->fetch();
        $_SESSION['auth']=true;
        $_SESSION['id'] = $userInfos['id'];
        $_SESSION['pseudo'] = $userInfos['pseudo'];
        $_SESSION['nom'] = $userInfos['nom'];
        $_SESSION['prenom'] = $userInfos['prenom'];
        header('Location: index.php');


    }else{
        $errorMsg="l'utilisateur $user_nom existe deja  $user_motdepasse  !";
    }

    }else{
        $errorMsg="Veuillez completer tous les champs svp";
    }
}
