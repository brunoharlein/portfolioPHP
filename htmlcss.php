<?php
  include "template/headNav.php";
  include "template/header.php";
 ?>
  <!-- start main -->
  <main class="mainAuto">
    <section id="marginBottom" class="borderHeaderP">
      <h3 id="marginBottom">Mes projets</h3>
      <p>Ici nous parlerons "intégration" HTML, CSS et BootStrap. Il y aura des "header" des "main" et même du flexbox.<br>
        Voici quelques exemples :</p>
    </section>
    <div class="flexArticleHtmlCss">
      <article class="articleProject">
        <div class="textCenter">
          <h3 id="marginBottom">Océa</h3>
        </div>
        <figure>
          <img id="marginBottom" class="zoom imgBorder" src="img/ocea.png" alt="ocea picture">
        </figure>
        <div id="marginBottom" class="textCenter">
          <p>Copie de la "main page" du site oceaclub.</p>
        </div>
        <div class="DFJCS">
          <a href="https://brunoharlein.github.io/ocea/" target="_blank"><button class="button" style="vertical-align:middle"><span>OCEA</span></button></a>
        </div>
      </article>
      <article class="articleProject">
        <div class="textCenter">
          <h3 id="marginBottom">Twitter</h3>
        </div>
        <figure>
          <img id="marginBottom" class="zoom imgBorder" src="img/twitter.png" alt="twitter picture">
        </figure>
        <div id="marginBottom" class="textCenter">
          <p>Copie de la "main page" du site Twitter.</p>
        </div>
        <div class="DFJCS">
          <a href="https://brunoharlein.github.io/twitter/" target="_blank"><button class="button" style="vertical-align:middle"><span>TWITTER</span></button></a>
        </div>
      </article>
    </div>
  </main>
  <!-- end main -->
  <?php
    include "template/footer.php";
   ?>
