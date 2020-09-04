<section>
    <div class="featured-container">
   
      <p class= "project-title-divider"> ––– About Me<p>
                  
                <?php if (get_field('about_intro')): ?>
                <p class="about__body"><?php echo get_field('about_intro') ;?></p>
                <?php endif; ?>


                <?php if (get_field('about_email')): ?>
                    <p class="about__body lets"><?php echo get_field('lets') ;?></p>
                    
                <div id="about">
                <div class= 'about_email'>
                 <a href="mailto:[<?php echo get_field('about_email') ;?>"><?php echo get_field('about_email') ;?></a></div>
                 </div>
                 
              
                <?php endif; ?>


      </div>
  </section>