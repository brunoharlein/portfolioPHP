<!-- include headNav for nav website and begining page html code -->
<?php
  include "template/headNav.php";
  include "template/header.php";
  require "modele/bdd.php";
  require "service/checkForm.php";
  $writeBio = getBio($bdd);
?>

  <!-- start main -->
  <main>
    <section id="marginBottom" class="borderHeaderP">
      <h3 id="marginBottom">PRÉSENTATION</h3>
      <p><?php echo $writeBio["title"]; ?></p>
    </section>
    <div id="marginTop" class="DFJCS">
      <div id="marginBottom" class="imgProfilePresentation">
        <div class="floatLeft marginPresentation">
          <img src="img/bruno.jpg" alt="moi en photo">
        </div>
        <div class="widthPPresentation">
          <!-- <h4 id="marginBottom">DIVERS</h4> -->
          <p><?php echo $writeBio["txtBio"]; ?></p>
        </div>
      </div>
    </div>
    <section class="textCenter">
      <h3 id="marginBottom">MES COMPÉTENCES</h3>
      <div class="">
        <p class="displayFlexLogoCompetence" id="marginBottom" class="box"><i class="fab fa-html5 fa-5x"></i><i class="fab fa-css3-alt fa-5x"></i><i class="fab fa-php fa-5x"></i><i class="fab fa-js-square fa-5x"></i><i class="fab fa-wordpress-simple fa-5x"></i><i class="fab fa-github fa-5x"></i></p>
      </div>
      <hr class="desktopNone">
    </section>
    <div class="">
      <section class="textCenter">
        <h3 id="marginBottom">MAIS AUSSI</h3>
        <div class="displaySpaceAr">
          <img class="imgPresentation" src="img/boot.svg" alt="logo bootstrap">
          <img class="imgPresentation" src="img/sql.png" alt="logo sql">
        </div>
        <hr class="">
      </section>
      <section class="textCenter">
        <h3 id="marginBottom">POUR FINIR</h3>
        <div class="displaySpaceAr">
          <img class="imgPresentation" src="img/atom.png" alt="logo atom">
          <img class="imgPresentation" src="img/light.jpg" alt="logo lightroom">
          <img class="imgPresentation" src="img/photoshop.png" alt="logo photoshop">
        </div>
        <hr class="">
      </section>
    </div>
  </main>
  <!-- end main -->

  <!-- include footer  -->
  <?php
    include "template/footer.php";
   ?>
