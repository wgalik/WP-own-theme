<!DOCTYPE html>
<html lang="pl">
<head>
  <?php wp_head(); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<!-- <body> -->
  

  <div id='portrait'></div>
  <?php get_menu(); ?>
    <header>
    <h1>Galactic Studio | Wojtek Galik</h1>
    <p>junior frontend developer</p>
  </header>