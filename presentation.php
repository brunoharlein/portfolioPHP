<!-- include headNav for nav website and begining page html code -->
<?php
  include "template/headNav.php";
  include "template/header.php";
?>

  <!-- start main -->
  <main>
    <section id="marginBottom" class="borderHeaderP">
      <h3 id="marginBottom">PRÉSENTATION</h3>
      <p>Compétences, passions, ma vie, c'est ici !</p>
    </section>
    <div id="marginTop" class="DFJCS">
      <div id="marginBottom" class="imgProfilePresentation">
        <div class="floatLeft marginPresentation">
          <img src="img/bruno.jpg" alt="moi en photo">
        </div>
        <div class="widthPPresentation">
          <!-- <h4 id="marginBottom">DIVERS</h4> -->
          <p>Bruno Harlein 39 ans, développeur web junior et papa de deux enfants.<br>
            Je suis également photographe depuis plus de 5 ans. J'enseigne aussi les arts martiaux depuis plus de 20 ans. Je viens de faire 2 formations Développeur Web au sein des bureaux de l'ADEP à Roubaix.<br>
            La Premiére formation à durée 3,5 mois. Nous avons mis en oeuvre les bases du HTML-CSS, PHP-MYSQL, JAVA-SCRIPT, BOOTSTRAP ainsi que WORDPRESS.<br>
            Durant la seconde formation qui elle dure 7 mois plus 4 à 6 mois de stage en entreprise. Nous avons approfondi les mêmes languages ainsi que l'utilisation de Symfony et d'Angular.</p>
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
