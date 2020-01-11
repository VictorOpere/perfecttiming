<?php
function perfect_comments_better($comment, $args, $depth) {
$GLOBALS['comment'] = $comment; ?>
<li <?php comment_class('comment'); ?> id="li-comment-<?php comment_ID() ?>">
        <div id="comment-<?php comment_ID(); ?>">
        <div class="vcard">
            <?php echo get_avatar($comment,$size='50',$default=get_option( 'avatar_default', 'wavatar' ) ); ?>
        </div>
        <div class="comment-body">
        <h3><?php echo esc_html(get_comment_author());?></h3>
        <div class="meta"><a href="<?php echo esc_html(htmlspecialchars(get_comment_link( $comment->comment_ID ))) ?>">
            <?php printf(__('%1$s at %2$s', 'Perfect'), esc_html(get_comment_date()),esc_html(get_comment_time())) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>
            
            <?php if ($comment->comment_approved == '0') : ?>
                <em><?php esc_html_e('Your comment is awaiting moderation.', 'Perfect');?></em>
                <br />
            <?php endif; ?>

            <?php comment_text() ?>
            
                <?php if($args['max_depth']!=$depth) { ?>
                
                        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                    
                <?php } ?>
         
        </div>
       
<?php
}
?>