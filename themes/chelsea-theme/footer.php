<?php 

// the template for displaying the footer 

// contains the closing of the content div and all the content after 


?>



<footer class="footer">
<p class= "footer-text"> Copyright © Chelsea James. <br>
Icons courtsey of FlatIcon. Photography courtesy of Google.</p>
<!-- <div class="footer-menu">
<?php wp_nav_menu(['theme_location' => 'footer_menu'])?>
</div> -->

<div class="social-menu">
<?php wp_nav_menu(['theme_location' => 'social_menu']);?>
</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>