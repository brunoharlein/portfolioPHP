<?php
require "service/checkForm.php";
restrictToAdmin();
include "template/headNav.php";
$id = htmlspecialchars($_GET["id"]);
 ?>
 <form action="updateProjectTreatment.php" method="post" name="updateProjetHtmlCss">
   <input type="hidden" name="id" <?php echo "value='" . $id . "'" ?>>
   <div class="form-group">
     <label for="exampleInputEmail1">modification projet</label>
     <input type="text" class="form-control" name="title" placeholder="title project">
   </div>
   <div class="form-group">
     <label for="exampleInputPassword1">modification texte</label>
     <input type="text" class="form-control" name="comment" placeholder="comment project">
   </div>
   <button type="submit" class="btn btn-primary">Envoyer</button>
 </form>
 <?php
  include "template/adminFooter.php";
  ?>
