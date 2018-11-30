<!-- include headNav for nav website and begining page html code -->
<?php
  include "template/headNav.php";
  include "template/header.php";
  require "modele/bdd.php";
  require "modele/addUpdateProjects.php";
  $projectsWp = getProjectWp($bdd);
?>
  <!-- start main -->
  <main class="mainAuto">
    <section id="marginBottom" class="borderHeaderP">
      <h3 id="marginBottom">Mes projets</h3>
      <p>Ici nous utiliserons WordPress avec l'aide du module DIVI.</p>
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
      </article>
      <?php
       }
       ?>
     </div>
     </main>  <!-- end main -->
  <!-- end main -->

  <!-- include footer  -->
  <?php
    include "template/footer.php";
   ?>
