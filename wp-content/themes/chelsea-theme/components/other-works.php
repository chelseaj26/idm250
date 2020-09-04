<section>
    <div class="featured-container">
   
      <p class= "project-title-divider"> ––– Other Projects<p>
          <?php
          $other_posts = get_field('other_project');
          if ($other_posts): ?>
              <?php foreach ($other_posts as $other_post):
                  $permalink = get_permalink($other_post->ID);
                  $title = get_the_title($other_post->ID);
                  $excerpt = get_the_excerpt($other_post->ID);
                  $image = get_the_post_thumbnail($other_post->ID);
                  ?>
                  <div class="media-block right">
                    <div class="media-block__figure">
                      <?php echo $image; ?>
                    </div>
                    <div class="media-block__content">
                        <h3 class="media-block__heading"><?php echo $title ; ?></h3>
                        <p class="media-block__body"><?php echo  $excerpt; ?></p>
                        <a class="btn media-block__cta" href="<?php echo $permalink;?>">View Case Study</a>
                    </div>
                  </div>
              <?php endforeach; ?>
          <?php endif; ?>
          <div class="view-all-content">
          <?php
      $cta = get_field('view_all');
      if ($cta): ?>
      <a class="btn view_all" target="<?php echo $cta['target'] ?>" href="<?php echo $cta['url'] ?>"><?php echo $cta['title']; ?></a>
    <?php endif; ?>
    </div>

      </div>
  </section>