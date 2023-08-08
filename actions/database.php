<?php

try{
    session_start();
    $bdd = new PDO('mysql:host=localhost; dbname=talksgrid; charser=utf8;', 'root', '');
}catch(Exception $e){
    die('Une erreur a ete trouve :'. $e->getMessage());
}
