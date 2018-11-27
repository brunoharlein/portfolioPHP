<?php
require "modele/bdd.php";


if(!empty($_POST)) {
  //On nettoie les entrées du formulaire
  $_POST = clearForm($_POST);
  //On récupère l'utilisateur stocké sur le site
  $user = getUser($_POST, $db);
  //On vérifie si la db a trouvé un utilisateur
  if(!empty($user) && password_verify($_POST["passwordLogin"], $user["password"])) {
    initializeUserSession($user);
    header("Location: products.php");
    //On met un exit pour arrêter l'execution du script, autrement la redirection n'aura pas le temps de se faire
    exit;
  }
  else {
    header("Location: index.php?message=7");
    exit;
  }
}

?>
