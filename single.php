<?php 
/**
 * @package perfect
 * 
 * This is the Single post template of our theme
 * 
 */
?>

<?php get_header(); ?>

<section class="site-section py-lg">
      <div class="container">
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
        
            
       
        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>
                      
            <?php get_template_part( '/inc/template-parts/single', get_post_format());?>

                <?php if (comments_open()):?>
                  
                     <?php comments_template();?>
                 

                <?php endif; ?>


            <?php endwhile; ?>
        <?php endif; ?>

          
      
      </div>
        
          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            <?php get_sidebar( 'primary' );?>
          </div>
          
          <!-- END sidebar -->

    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="mb-3 ">You Might Also Like</h2>
          </div>
        </div>
        <div class="row">
        <?php
                $args = array( 'numberposts' => 3, 'order'=> 'DESC', 'orderby' => 'rand');
                $postslist = get_posts( $args );
                foreach ($postslist as $post) :  setup_postdata($post); ?> 

          <div class="col-md-6 col-lg-4">
            <a href="<?php echo esc_url( get_permalink() );?>" class="a-block d-flex align-items-center height-md" style="background-image: url(<?php the_post_thumbnail_url();?>); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category"><?php the_author()?></span>
                  <span class="mr-2"><?php echo esc_html(human_time_diff( get_the_time('U'), current_time('timestamp') )) . ' ago'; ?></span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> <?php echo esc_html(get_comments_number($post->ID));?></span>
                </div>
                <?php the_title( '<h3>', '</h3>')?>
              </div>
            </a>
          </div>

          <?php endforeach; ?>
          

          </div>
        </div>
      </div>


    </section>
    <!-- END section -->
          

        </div>
      </div>

    </section>

<?php get_footer( ); ?>