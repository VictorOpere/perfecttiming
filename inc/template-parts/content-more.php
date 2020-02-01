<div class="post-entry-horzontal">
    <a href="<?php echo esc_url( get_permalink() );?>">
        <div class="image" style="background-image: url(<?php the_post_thumbnail_url('thumbnail');?>);"></div>
            <span class="text">
                <div class="post-meta">
                <span class="category"><?php the_author();?></span>
                <span class="mr-2"<?php echo esc_html(human_time_diff( get_the_time('U'), current_time('timestamp') )) . ' ago'; ?></span> &bullet;
                <span class="ml-2"><span class="fa fa-comments"></span> <?php echo esc_html(get_comments_number($post->ID));?> Comments</span>
                </div>
                <?php the_title( '<h2>', '</h2>' );?>
            </span>
     </a>
</div>
<!-- END post -->