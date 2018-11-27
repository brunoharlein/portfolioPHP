<!-- include headNav for nav website and begining page html code -->
<?php
  include "template/headNav.php";
?>

  <!-- start header -->
  <header>
    <div class="textCenter borderBottom">
      <h1>Bruno Harlein</h1>
      <h2 id="marginBottom">Développeur Web Junior</h2>
    </div>
    <section class="borderHeaderP">
      <h3 id="marginBottom">Mes projets</h3>
      <p>Ici nous entrons dans le vif du sujet. Mes projets, mes compétences, mes languages.<br>
      HTML et CSS, PHP, JS, WordPress, Bootstrat et git(github). Ce portfolio par exemple utilise HTML, CSS et Bootstrap.<br>
    Bonne visite !</p>
    </section>

  </header>
  <!-- end header -->

  <!-- start main -->
  <main class="widthMain displayWrap">
    <article id="marginBottom" class="textCenter">
      <a href="htmlcss.php"><i class="fab fa-html5 fa-5x"></i></a>
      <p>HTML/CSS</p>
    </article>
    <article id="marginBottom" class="textCenter">
      <a href="phpjs.php"><i class="fab fa-php fa-5x"></i></a>
      <p>PHP/JS</p>
    </article>
    <article id="marginBottom" class="textCenter">
      <a href="wp.php"><i class="fab fa-wordpress-simple fa-5x"></i></a>
      <p>WordPress</p>
    </article>
  </main>
  <!-- end main -->

  <!-- include footer  -->
  <?php
    include "template/footer.php";
   ?>
