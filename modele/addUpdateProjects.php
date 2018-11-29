<?php
//Fonction qui récupère tous les projets de la BDD projectsHtmlCss
function getProjectHtmlCss($bdd) {
  $query = $bdd->query("SELECT * FROM projectHtmlCss");
  $projectsHtmlCss = $query->fetchall(PDO::FETCH_ASSOC);
  return $projectsHtmlCss;
}

//Fonction qui récupère tous les projets de la BDD projectsPhpJs
function getProjectPhpJs($bdd) {
  $query = $bdd->query("SELECT * FROM projectPhpJs");
  $projectsPhpJs = $query->fetchall(PDO::FETCH_ASSOC);
  return $projectsPhpJs;
}

//Fonction qui récupère tous les projets de la BDD projectsWp
function getProjectWp($bdd) {
  $query = $bdd->query("SELECT * FROM projectWp");
  $projectsWp = $query->fetchall(PDO::FETCH_ASSOC);
  return $projectsWp;
}

 ?>
