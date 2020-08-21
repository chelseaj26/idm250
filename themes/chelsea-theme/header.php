  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chelsea James</title>
 

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
  <div class="container header__content">
    <img class="header__logo" src="https://i.imgur.com/XPueVfH.jpg" alt="This is the logo">
    <nav class= "header__nav main__nav">


    <?php wp_nav_menu(['theme_location' => 'primary_menu']);?>
  </div>
</header>