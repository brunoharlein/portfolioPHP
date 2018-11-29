<?php
require "modele/bdd.php";

// //Function qui nettoie les entrées d'un formulaire
// function clearForm($form) {
//   foreach ($form as $key => $value) {
//     $form[$key] = htmlspecialchars($value);
//   }
//   return $form;
// }
//
// //Fonction qui récupère un seul utilisateur en DB
// function getUser($userEmail, $bdd) {
//   $query = $bdd->prepare("SELECT * FROM user WHERE mail =  ?");
//   $query->execute([$_POST[]]);
//   $user = $query->fetch(PDO::FETCH_ASSOC);
//   return $user;
// }
//
// //Fonction de démarrage standard d'une session utilisateur
// function startUserSession($user) {
//   session_start();
//   $_SESSION["user"] = $user;
// }

//Fonction pour restreindre l'accès d'une page à un administrateur authentifié
function restrictToAdmin() {
  session_start();
  if(!isset($_SESSION["user"]) || $_SESSION["user"]["statut"] !== "admin") {
    header("Location: index.php");
    exit;
  }
}

//Fonction pour modifier la bio
function updateBiography($bdd) {
  $query = $bdd->prepare("UPDATE biography SET title = :title, txtBio = :txtBio WHERE id = 2");
  $updBio = $query->execute([
    "title" => $_POST["title"],
    "txtBio" => $_POST["txtBio"]
  ]);
  return $updBio;
}


//Fonction qui recupere la bio
function getBio($bdd) {
  $query = $bdd->query("SELECT * FROM biography");
  $writeBio = $query->fetch(PDO::FETCH_ASSOC);
  return $writeBio;
}

// function du logOut
function logOut() {
  //On récupère la session courante
  session_start();
  //On la vide de ses variables
  session_unset();
  //on la détruit
  session_destroy();
  //On redirige l'utilisateur sur la page de login
  header("Location: index.php");
}








?>
