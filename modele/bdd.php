<?php
try {
  $db = new PDO("mysql:host=localhost;dbname=portfolio", "root", "root");
}
//Sinon on récupère une erreur
catch (Exception $e) {
  echo 'Exception reçue : ' .  $e->getMessage() . "\n";
}
 ?>
