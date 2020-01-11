<?php get_header( ); ?>

<section class="site-section">
    <div class="container">
        <div class="col-md-12 offset-md-2">
             <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri().'/images/404.png' );?>" alt="Error Page">
        </div>
        <div class="col-md-12">
            <?php get_search_form();?>
        </div>       
    </div>
</section>






<?php get_footer( );?>