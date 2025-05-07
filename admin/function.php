<?php
session_start();
 

//fonction pour verifier si l'utilisateur est connecte 

function connecte(){
    return isset($_SESSION['admin_id']);
}


// fonction pour redriger vers la page de connexion si l'utilisateur n'est pas connecte

function verifierconnexion(){
    if(!connecte()){
  header("location:login.php");
  exit();
    }
}

?>