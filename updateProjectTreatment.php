<?php
require "modele/bdd.php";
require "modele/addUpdateProjects.php";
$id = htmlspecialchars($_GET["id"]);


//Fonction pour modifier les valeurs d'un produit en base de données
  $query = $bdd->prepare("UPDATE projectHtmlCss SET title = :title, comment = :comment WHERE id = :id");
  $updProjectHtmlCss = $query->execute([
    "id" => $_POST["id"],
    "title" => $_POST["title"] ,
    "comment" => $_POST["comment"]
  ]);





 ?>
