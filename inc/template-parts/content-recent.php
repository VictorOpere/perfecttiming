<div class="col-md-6">
    <a href="<?php echo esc_url( get_permalink() );?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
        <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
        <div class="blog-content-body">
            <div class="post-meta">
            <span class="category"><?php the_author();?></span>
            <span class="mr-2"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span> &bullet;
            <span class="ml-2"><span class="fa fa-comments"></span> <?php echo get_comments_number($post->ID);?></span>
        </div>
        <?php the_title( '<h2>', '</h2>' );?>
        </div>
    </a>
</div>