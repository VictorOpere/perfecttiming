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
          

        </div>
      </div>

    </section>

<?php get_footer( ); ?>