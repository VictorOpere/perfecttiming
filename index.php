<?php get_header( );?>

<section class="site-section pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="owl-carousel owl-theme home-slider">
            <?php
                $args = array( 'numberposts' => 3, 'order'=> 'DESC', 'orderby' => 'title' );
                $postslist = get_posts( $args );
                foreach ($postslist as $post) :  setup_postdata($post); ?> 

                    <div>
                      <a href="<?php echo esc_url( get_permalink() );?>" class="a-block d-flex align-items-center height-lg" style="background-image: url(<?php the_post_thumbnail_url();?>); ">
                        <div class="text half-to-full">
                          <div class="post-meta">
                            <span class="category"><?php the_author()?></span>
                            <span class="mr-2"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> <?php echo get_comments_number($post->ID);?></span>
                          </div>
                          <?php the_title( '<h3>', '</h3>')?>

                        </div>
                      </a>
                    </div>

              <?php endforeach; ?>
              
            </div>
            
          </div>
        </div>
      
      </div>


    </section>
    <!-- END section -->

    <section class="site-section py-sm">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-4">Recent Posts</h2>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="row">
            <?php
                $args = array( 'numberposts' => 20, 'order'=> 'ASC', 'orderby' => 'title' );
                $postslist = get_posts( $args );
                foreach ($postslist as $post) :  setup_postdata($post); ?> 
                    <?php get_template_part( 'inc/template-parts/content-recent', get_post_format());?> 
                <?php endforeach; ?>
              
            </div>

            

          </div>

          <!-- END main-content -->
          <div class="col-md-12 col-lg-4 sidebar">
            <?php get_sidebar( 'primary' );?>
          </div>
          
          <!-- END sidebar -->

        </div>
      </div>
    </section>

<?php get_footer( );?>