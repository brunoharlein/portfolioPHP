<?php
require "modele/bdd.php";
require "modele/addUpdateProjects.php";
// $id = htmlspecialchars($_GET["id"]);
// var_dump($_POST["id"]);


//Fonction pour modifier les valeurs d'un produit en base de données
  $query = $bdd->prepare("UPDATE projectWp SET title = :title, comment = :comment, link = :link, btnName = :btnName  WHERE id = :id");
  $updProjectHtmlCss = $query->execute([
    "id" => $_POST["id"],
    "title" => $_POST["title"],
    "comment" => $_POST["comment"],
    "link" => $_POST["link"],
    "btnName" => $_POST["btnName"]
  ]);
  header ("location: managementPortfolio.php");
 ?>
