  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> | <?php wp_title();?> </title>
 

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
  <div class="container header__content">

  <a class="header__logo" href="<?php echo get_site_url();?>"><img src="https://i.imgur.com/XPueVfH.jpg" alt="Logo" a href="/idm250"></a>

    <nav class= "header__nav main__nav">


    <?php wp_nav_menu(['theme_location' => 'primary_menu']);?>
  </div>
</header>