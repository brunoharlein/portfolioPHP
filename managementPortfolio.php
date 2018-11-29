<?php
require "service/checkForm.php";
restrictToAdmin();
include "template/headNav.php";
 ?>

<div class="container">
 <div class="row justify-content-between">
     <div class="col-3">
       <article class="card" style="width: 18rem;">
        <div class="card-body textCenter">
          <h5 class="card-title">BIOGRAPHIE</h5>
          <h6 class="card-subtitle mb-2 text-muted">Modifications</h6>
          <p class="card-text">lien de redirection pour modifier le titre et le descriptif de la page presentation.php</p>
          <a href="updatePresentation.php" class="card-link">modifier la page</a>
        </div>
      </article>
     </div>
     <div class="col-3">
       <article class="card" style="width: 18rem;">
         <div class="card-body textCenter">
           <h5 class="card-title">PROJET</h5>
           <h6 class="card-subtitle mb-2 text-muted">Modifications</h6>
           <p class="card-text">lien de redirection pour modifir un article et ou en ajouter un.</p>
           <a href="updateProjets.php" class="card-link">modifier la page</a><br>
           <a href="addProjet.php" class="card-link">creation d'un article</a>
         </div>
       </article>
     </div>
   </div>
 </div>

   <?php
   include "template/adminFooter.php";
    ?>
