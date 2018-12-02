<?php
 require "modele/bdd.php";
 require "modele/addUpdateProjects.php";
 include "template/headNav.php";
 ?>
<form action="createProject.php" method="post" name="createProject" enctype="multipart/form-data">
      Formulaire d'envoi de fichier :<br />
      <input type="text" name="title" placeholder="title">
      <input type="text" name="comment" placeholder="comment">
      <input type="text" name="link" placeholder="link">
      <input type="text" name="btnName" placeholder="btnName">
      <input type="file" name="picture" /><br>
      <input type="submit" value="Envoyer le fichier" />
</form>
<?php
 include "template/adminFooter.php";
 ?>
