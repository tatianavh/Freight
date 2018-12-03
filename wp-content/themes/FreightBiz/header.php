<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo get_bloginfo('name'); ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">

  <link href="https://unpkg.com/ionicons@4.4.8/dist/css/ionicons.min.css" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">


  <link href="<?php echo get_bloginfo('template_directory'); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
 <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <?php wp_head(); ?>
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
       <!--  <h1><a href="#intro" class="scrollto">BizPage</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
         <img src="<?php echo get_theme_mod('logo_setting', ''); ?>" alt="" title="" />
      </div>

      <nav id="nav-menu-container">
        <?php 
          //output the main nav
          $args = array(
              'theme-location'=>'main-menu',
              'container'=>'ul',
              'menu_class'=>'nav-menu  justify-content-end mr-auto'

          );
          wp_nav_menu($args);

        ?>

        <!-- <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul> -->
      </nav><!-- #nav-menu-container -->
    </div>
 </header>

 <main id="main">
  