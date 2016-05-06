<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>
<?php
 if ( is_home() ) {  ?>
  <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>
<?php } else {  ?>
  <?php bloginfo('name'); ?> | <?php the_title(); ?>
<?php } ?>
 </title>

 <!--  
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="SC Dev Summit 2016">
  <meta name="twitter:description" content="Evento de Frontend e Backend em Santa Catarina - 20 e 21 de maio, na Univille">
  <meta property="twitter:image:src" content="http://scdevsummit.com.br/images/sc-dev-summit-cover.png">
  <meta property="og:url" content="http://scdevsummit.com.br/">
  <meta property="og:title" content="SC Dev Summit 2016">
  <meta property="og:image" content="http://scdevsummit.com.br/images/sc-dev-summit-cover.png">
  <meta property="og:description" content="Evento de Frontend e Backend em Santa Catarina - 20 e 21 de maio, na Univille">
  <meta property="og:site_name" content="SC Dev Summit 2016">
  <meta itemprop="name" content="SC Dev Summit 2016">
  <meta itemprop="description" content="Evento de Frontend e Backend em Santa Catarina - 20 e 21 de maio, na Univille">
  <meta itemprop="image" content="http://scdevsummit.com.br/images/sc-dev-summit-cover.png"/>
  <meta name="application-name" content="SC Dev Summit 2016">
  <meta name="msapplication-TileColor" content="#03a577">
  <meta name="msapplication-square70x70logo" content="images/sc-dev-summit-cover.png" />
  <meta name="msapplication-square150x150logo" content="images/sc-dev-summit-cover.png" />
  <meta name="msapplication-wide310x150logo" content="images/sc-dev-summit-cover.png" />
  <meta name="msapplication-square310x310logo" content="images/sc-dev-summit-cover.png" />
  <meta name="theme-color" content="#03a577">

  <link rel="icon" type="image/x-icon" href="images/favicon.png" />
  <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
  <link rel="apple-touch-icon" href="images/favicon.png" />
 -->


   		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/libs/foundation-sites/dist/foundation.min.css" />

   		<link rel="stylesheet"  href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
   		<link rel="stylesheet"  href="<?php echo get_stylesheet_directory_uri(); ?>/assets/libs/animate/animate.css">
   		<link rel="stylesheet"  href="<?php echo get_stylesheet_directory_uri(); ?>/assets/libs/motion-ui/dist/motion-ui.min.css">


   		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
	    <?php wp_head(); ?>
</head>
<body <?php body_class('body-ticket-page'); ?>>
