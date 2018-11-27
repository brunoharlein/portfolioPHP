<!-- include headNav for nav website and begining page html code -->
<?php
  include "template/headNav.php";
  include "template/header.php";
?>

  <main class="mainAuto">
    <section id="marginBottom" class="borderHeaderP">
      <h3 id="marginBottom">Mes projets</h3>
      <p>Ici nous parlerons PHP et Java-Script, nous voici dans le monde du echo et du console.log :</p>
    </section>
    <div class="">
      <article class="articleProject">
        <div class="textCenter">
          <h3 id="marginBottom">Terre de Geek</h3>
        </div>
        <figure>
          <img id="marginBottom" class="zoom imgBorder" src="img/terre.png" alt="terre de geek picture">
        </figure>
        <div id="marginBottom" class="textCenter">
          <p>Toute petite touche de PHP pour ce site. Utilisation du include pour le template.</p>
        </div>
        <div class="DFJCS">
          <a href="https://github.com/brunoharlein/terredegeek" target="_blank"><button class="button" style="vertical-align:middle"><span>TERRE DE GEEK</span></button></a>
        </div>
      </article>
  </div>
  </main>
  <!-- end main -->

  <!-- include footer  -->
  <?php
    include "template/footer.php";
   ?>
