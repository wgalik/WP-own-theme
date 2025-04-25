<!DOCTYPE html>
<html lang="pl">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title><?php bloginfo('name'); ?></title>
  <style>
   #portrait { 
    background-image: url('<?php echo get_template_directory_uri(); ?>/images/portret_.jpg');
  } 
  #langBtnPL {
    background-image: url('<?php echo get_template_directory_uri(); ?>/images/National_Flag_of_Poland.png');
  }
  #langBtnEN {
    background-image: url('<?php echo get_template_directory_uri(); ?>/images/united-kingdom-flag-icon.png');
  }
</style>
</head>
 <body>
  

  <div id='portrait'></div>
  <?php get_menu(); ?>
    <header>
    <h1><?php bloginfo('name'); ?><!-- Galactic Studio | Wojtek Galik --></h1> 
    <p><?php bloginfo('description'); ?><!-- junior frontend developer --></p>
  </header>
