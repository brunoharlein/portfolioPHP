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
         <div class="card-body">
           <h5 class="card-title">Card title</h5>
           <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           <a href="#" class="card-link">Card link</a>
           <a href="#" class="card-link">Another link</a>
         </div>
       </article>
     </div>
   </div>
 </div>

   <?php
   include "template/adminFooter.php";
    ?>
