<?php
require "modele/bdd.php";
require "service/checkForm.php";
session_start();
// require "service/checkForm.php";
// $writeBio = getBio($bdd);

// $updbio = updateBiography();
// var_dump($_POST);
$query = $bdd->prepare("UPDATE biography SET title = :title, txtBio = :txtBio WHERE id = 2");
$updBio = $query->execute([
  "title" => $_POST["title"],
  "txtBio" => $_POST["txtBio"]
]);
logOut();

 ?>
