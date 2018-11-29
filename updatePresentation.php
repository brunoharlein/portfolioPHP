<?php
require "service/checkForm.php";
restrictToAdmin();
include "template/headNav.php";
 ?>

 <form action="updatePresentationTreatment.php" method="post">
   <div class="form-group">
     <label for="exampleInputEmail1">modification titre</label>
     <input type="text" class="form-control" name="title" placeholder="title update">
   </div>
   <div class="form-group">
     <label for="exampleInputPassword1">modification texte</label>
     <input type="text" class="form-control" name="txtBio" placeholder="text biography">
   </div>
   <button type="submit" class="btn btn-primary">Envoyer</button>
 </form>



 <?php
 include "template/adminfooter.php";
  ?>
