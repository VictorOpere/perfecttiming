<?php the_title( '<h1 class="mb-4">', '</h2>' );?>
    <div class="post-meta">
        <span class="category"><?php the_author();?></span>
        <span class="mr-2"><?php echo esc_html(human_time_diff( get_the_time('U'), current_time('timestamp') )) . ' ago'; ?></span> &bullet;
        <span class="ml-2"><span class="fa fa-comments"></span> <?php echo esc_html(get_comments_number($post->ID));?> Comments</span>
    </div>
    <div class="post-content-body">
        <?php the_content( );?>
    </div> 

    <div class="pt-5">
        <div class="sharethis-inline-share-buttons"></div>
        <br>
    </div>
    
    <div class="pt-5">
    <div class="bio text-center">
              <?php echo get_avatar( get_the_author_meta('email'), '100' ); ?>
                <div class="bio-body">
                  <h2><?php the_author( )?></h2>
                  <p><?php the_author_meta('description');?></p>
                  <p class="social">
                  <?php if (get_the_author_meta('twitter') != ""): ?>
                    <a target="_blank" title="Follow On Twitter"href="https://twitter.com/<?php echo esc_url(get_the_author_meta('twitter')); ?>" class="p-2"><span class="fa fa-twitter"></span></a>
                  <?php endif; ?>
                  <?php if (get_the_author_meta('facebook') != ""): ?>
                    <a target="_blank" title="Follow On Facebook"href="<?php echo esc_url(get_the_author_meta('facebook')); ?>" class="p-2"><span class="fa fa-facebook"></span></a>
                  <?php endif; ?>
                  <?php if (get_the_author_meta('instagram') != ""): ?>
                    <a target="_blank" title="Follow On Instagram"href="<?php echo esc_url(get_the_author_meta('instagram')); ?>" class="p-2"><span class="fa fa-instagram"></span></a>
                  <?php endif; ?>
                  <?php if (get_the_author_meta('youtube') != ""): ?>
                    <a target="_blank" title="Follow On YouTube"href="<?php echo esc_url(get_the_author_meta('youtube')); ?>" class="p-2"><span class="fa fa-youtube-play"></span></a>
                  <?php endif; ?>
                  </p>
                </div>
     </div>
     </div>

             
            

          



    
           


          