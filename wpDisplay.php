<?php
  require "modele/bdd.php";
  require "service/checkForm.php";
  require "modele/addUpdateProjects.php";
  include "template/headNav.php";
  $projectsWp = getProjectWp($bdd)
 ?>
 <main class="mainAuto">
   <section id="marginBottom" class="borderHeaderP">
     <h3 id="marginBottom">Mes projets</h3>
     <p>Pour modifier un article</p>
   </section>
   <div class="flexArticleHtmlCss">
     <?php
       //On boucle pour afficher tous les projets
       foreach ($projectsWp as $key => $result) {
     ?>
     <article class="articleProject">
       <div class="textCenter">
         <h3 id="marginBottom"><?php echo $result["title"] ?></h3>
       </div>
       <figure>
         <img id="marginBottom" class="zoom imgBorder" src="img/ocea.png" alt="ocea picture">
       </figure>
       <div id="marginBottom" class="textCenter">
         <p><?php echo $result["comment"] ?></p>
       </div>
       <div class="DFJCS">
         <a href="<?php echo $result["link"] ?>" target="_blank"><button class="button" style="vertical-align:middle"><span><?php echo $result["btnName"] ?></span></button></a>
       </div>
       <div class="DFJCS">
         <a href="<?php echo 'updateProjectForm.php?id=' . $result['id']; ?>" <button type="button" class="btn btn-outline-danger">MODIFIER</button></a>
        </div>

     </article>
     <?php
      }
      ?>
    </div>
  </main>
  <?php
    include "template/adminFooter.php";
   ?>
