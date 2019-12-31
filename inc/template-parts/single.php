  
    <div class="col-md-12 col-lg-8 main-content">
    <?php the_title( '<h1 class="mb-4">', '</h2>' );?>
    <div class="post-meta">
        <span class="mr-2"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span> &bullet;
        <span class="ml-2"><span class="fa fa-comments"></span> <?php echo get_comments_number($post->ID);?></span>
    </div>
    <div class="post-content-body">
        <?php the_content( );?>
    </div> 
    <div class="pt-5">
        <p>Categories: <?php the_category();?>  Tags: <?php the_tags();?></p>
    </div>

             
            

          



    
           


          