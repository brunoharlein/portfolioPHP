<!-- include headNav for nav website and begining page html code -->
<?php
  include "template/headNav.php";
?>
  <!-- start header  -->
  <header class="textCenter">
    <!-- h1 & h2 -->
    <div class="borderBottom">
      <h1>Bruno Harlein</h1>
      <h2 id="marginBottom">Développeur Web Junior</h2>
    </div>
    <div id="marginBottom" class="borderHeaderP">
      <p>Développeur Web Junior, passionné par ce domaine depuis toujours.<br>
        Je suis constamment à la recherche de nouvelles techniques pour approfondir mes connaissances. </p>
    </div>
    <div class="">
      <h3 class="marginTopBottom">Me découvrir</h3>
    </div>
  </header>
  <!-- end header -->

  <!-- start main -->
  <div class="desktopFlexMain">
    <article id="marginBottom" class="textCenter">
      <a href="presentation.php"><i class="fas fa-user fa-5x"></i></a>
      <p>Présentation</p>
    </article>
    <article class="textCenter down">
      <a href="https://github.com/brunoharlein" target="_blank"><i class="fab fa-github-alt fa-5x"></i></a>
      <p>GitHub</p>
    </article>
    <article id="marginBottom" class="textCenter">
      <a href="projets.php"><i class="far fa-file-code fa-5x"></i></a>
      <p>Projets</p>
    </article>
    <article id="marginBottom" class="textCenter down">
      <a href="contact.php"><i class="far fa-envelope fa-5x"></i></a>
      <p>Contact</p>
    </article>
    <article id="marginBottom" class="textCenter">
      <a href="photos.php"><i class="fas fa-camera fa-5x"></i></a>
      <p>Photos</p>
    </article>
  </div>
  <!-- end main desktop -->

<!-- include footer  -->
<?php
  include "template/footer.php";
 ?>
