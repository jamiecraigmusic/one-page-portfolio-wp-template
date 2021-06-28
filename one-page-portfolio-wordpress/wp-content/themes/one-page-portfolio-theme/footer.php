<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package One_Page_Portfolio
 */

?>



<?php wp_footer(); ?>

<!-- Footer Section  -->
<footer>
	<a href="https://www.facebook.com" class="social-icons" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
	<a href="http://www.instagram.com" class="social-icons" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
	<a href="https://www.linkedin.com" class="social-icons" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
	<p class="copyright">COPYRIGHT © 2021 MARCEL FORT</p>
</footer>

<!-- <script src="<?php bloginfo('template_directory'); ?> /assets/js/main.js"></script> -->
<script>

function fadeIn(fadeTarget) {
    var op = 0.01;
    fadeTarget.style.opacity = op;
    fadeTarget.style.display = 'block';
    var fadeEffect = setInterval(function() {
      fadeTarget.style.opacity = op;
      if (op < 1) {
        op += 0.01;
        fadeTarget.style.opacity = op;
      } else {
        clearInterval(fadeEffect);
      }
    }, 1);
  }

  function fadeOut(fadeTarget) {
    var op = 1;
    fadeTarget.style.opacity = op;
    var fadeEffect = setInterval(function() {
      if (fadeTarget.style.opacity > 0) {
        fadeTarget.style.opacity -= 0.01;
      } else {
        clearInterval(fadeEffect);
        fadeTarget.style.display = 'none';
      }
    }, 8);
  }

  function openNav() {
    fadeIn(document.getElementById("myNav"));
  }

  /* Close when someone clicks on the "x" symbol inside the overlay */
  function closeNav() {
    fadeOut(document.getElementById("myNav"));
  }




  // Learn More Button Toggle
  const targetDiv = document.getElementById("qualifications");
  const btn = document.getElementById("learn-more");
  btn.onclick = function() {
    if (targetDiv.style.display === "block") {
      targetDiv.style.display = "none";
    } else {
      targetDiv.style.display = "block";
    }
  };

</script>

</body>
</html>
