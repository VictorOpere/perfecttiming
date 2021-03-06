<div class="col-md-6">
    <a href="<?php echo esc_url( get_permalink() );?>" class="blog-entry">
        <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" width="500px" height="250px">
        <div class="blog-content-body">
            <div class="post-meta">
            <span class="category"><?php the_author();?></span>
            <span class="mr-2"><?php echo esc_html(human_time_diff( get_the_time('U'), current_time('timestamp') )) . ' ago'; ?></span> &bullet;
            <span class="ml-2"><span class="fa fa-comments"></span> <?php echo esc_html(get_comments_number($post->ID));?></span>
        </div>
        <?php the_title( '<h2>', '</h2>' );?>
        </div>
    </a>
</div>