<?php
require "modele/bdd.php";

//Function qui nettoie les entrées d'un formulaire
function clearForm($form) {
  foreach ($form as $key => $value) {
    $form[$key] = htmlspecialchars($value);
  }
  return $form;
}

//Fonction qui récupère un seul utilisateur en DB
function getUser($userEmail, $bdd) {
  $query = $bdd->prepare("SELECT * FROM user WHERE mail =  ?");
  $query->execute([$_POST[]]);
  $user = $query->fetch(PDO::FETCH_ASSOC);
  return $user;
}

//Fonction de démarrage standard d'une session utilisateur
function startUserSession($user) {
  session_start();
  $_SESSION["user"] = $user;
}





?>
