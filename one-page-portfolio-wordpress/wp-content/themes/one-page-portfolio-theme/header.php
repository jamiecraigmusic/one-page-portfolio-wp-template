<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package One_Page_Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'one-page-portfolio' ); ?></a>

<!-- HEADER -->

<?php
	wp_nav_menu( array (
		'theme_location' => 'menu-1',
		'container_class' => 'myNav',
		'menu_class' => 'nav-items'
	));
 ?>

	<header class="site-header" role="banner">
		<!-- The Overlay -->

		<div id="myNav" class="overlay" role="navigation">

			<!-- Button to close the overlay navigation. -->
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>


 		<!-- Overlay content -->
			 <div class="overlay-content">
 				<ul class="nav-items">
	 				<li><a onClick="closeNav()" href="/">Home</a></li>
 					<li><a onClick="closeNav()" href="#about">About</a></li>
 					<li><a onClick="closeNav()" href="#services">Services</a></li>
 					<li><a onClick="closeNav()" href="#testimonials">Testimonials</a></li>
 					<li><a onClick="closeNav()" href="#contact">Contact</a></li>
 				</ul>
 			</div>

 		</div>



		<!-- Use any element to open/show the overlay navigation menu -->
		<div class="container-fluid banner">
		<span class="hamburger" onclick="openNav()"><i class="fas fa-bars"></i></span>
		<div class="header-message">
			<h1 class="intro">Hi, I'm Marcel Fort</h1>
			<h2 class="header-animated-text typewriter-text">Pyschotherapist</h2>
		</div>
	</div>


	</header>
