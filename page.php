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
                      
                <?php get_template_part( '/inc/template-parts/content-page', get_post_format());?>

            <?php endwhile; ?>
        <?php endif; ?>

            
        
      </div>
      

        </div>
      </div>
    </section>

<?php get_footer( ); ?>