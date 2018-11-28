<?php
// connexion bdd
require "modele/bdd.php";

//On vérifie si le formulaire a été rempli
if(!empty($_POST)) {
  //On nettoie les entrées du formulaire
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }
  // var_dump($_POST);
  //requete la BDD
  $request = $bdd->query("SELECT * FROM user");
  // extraction des données
  $users = $request->fetchall (PDO::FETCH_ASSOC);
  // var_dump($users);

  foreach ($users as $user) {
    if($user["mail"] === $_POST["mailLogin"] && $user["password"] === $_POST["passwordLogin"]) {
      // var_dump($user);
      // start session
      session_start();
      $_SESSION["user"] = $user;
      header("Location: managementPortfolio.php");
      exit;
    }
    else {
      header("Location: index.php");
      exit;
    }

  }
}

?>
