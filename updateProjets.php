<?php
include "template/headNav.php";
require "service/checkForm.php";
restrictToAdmin();
 ?>

 <main class="widthMain displayWrap">
   <article id="marginBottom" class="textCenter">
     <a href="htmlcssDisplay.php"><i class="fab fa-html5 fa-5x"></i></a>
     <p>HTML/CSS</p>
   </article>
   <article id="marginBottom" class="textCenter">
     <a href="phpjsDisplay.php"><i class="fab fa-php fa-5x"></i></a>
     <p>PHP/JS</p>
   </article>
   <article id="marginBottom" class="textCenter">
     <a href="wpDisplay.php"><i class="fab fa-wordpress-simple fa-5x"></i></a>
     <p>WordPress</p>
   </article>
 </main>

 <?php
  include "template/adminFooter.php";
  ?>
