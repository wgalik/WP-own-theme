<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
 
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
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
<script src="http://localhost/wordpress/wp-content/themes/wizytowka/js/main.js" defer></script>
</head>
<body>
  

  <div id='portrait'></div>
  <?php get_menu(); ?>
    <header>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
  </header>