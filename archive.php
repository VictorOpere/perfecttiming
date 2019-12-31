<?php 
/**
 * @package sensitive
 * 
 * This is the Single post template of our theme
 * 
 */
?>

<?php get_header(); ?>
<section class="site-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-6">
            <h2 class="mb-4">Archive: <?php the_archive_title();?></h2>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="row mb-5 mt-5">

              <div class="col-md-12">

              <?php if ( have_posts() ) :;?> 
                    <?php while ( have_posts() ) : the_post(); ?>
                         <?php get_template_part( 'inc/template-parts/content-archive', get_post_format());?> 
                    <?php endwhile; ?>
              <?php endif; ?>
              
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 text-center">
                <nav aria-label="Page navigation" class="text-center">
                  <ul class="pagination">
                    <li class="page-item  active"><a class="page-link" href="#">Prev</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                  </ul>
                </nav>
              </div>
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
<?php get_footer()?>