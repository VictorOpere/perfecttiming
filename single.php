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
        
            
       
        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>
                      
            <?php get_template_part( '/inc/template-parts/single', get_post_format());?>

                <?php if (comments_open()):?>
                    <div class="pt-5">
                     <?php comments_template();?>
                    </div>

                <?php endif; ?>


            <?php endwhile; ?>
        <?php endif; ?>

       
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

<?php get_footer( ); ?>