<?php
/**
 * A custom WordPress comment walker class to implement the Bootstrap 4 Media object in wordpress comment list.
 *
 * @package     WP Bootstrap 4 Comment Walker
 * @version     1.0.0
 * @author      Aymene Bourafai <bourafai.a@gmail.com> <www.aymenebourafai.com>
 * @license     http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link        https://github.com/bourafai/wp-bootstrap-4-comment-walker
 * @link        https://v4-alpha.getbootstrap.com/layout/media-object/
 */

class PerfectTiming_Walker_Comment extends Walker_Comment {
	/**
	 * Output a comment in the HTML5 format.
	 *
	 * @since 1.0.0
	 *
	 * @see wp_list_comments()
	 *
	 * @param object $comment the comments list.
	 * @param int    $depth   Depth of comments.
	 * @param array  $args    An array of arguments.
	 */
	protected function html5_comment( $comment, $depth, $args ) {
	
?>		
	<li <?php comment_class('comment'); ?> id="li-comment-<?php comment_ID() ?>">
        <div id="comment-<?php comment_ID(); ?>">
        <div class="vcard">
			<?php if ( $args['avatar_size'] != 0  ): ?>
				<?php echo get_avatar( $comment, $args['avatar_size'],'mm','', array('class'=>"comment_avatar rounded-circle") ); ?>
			<?php endif; ?>
        </div>
        <div class="comment-body">
		<?php $by_post_author = perfecttiming_is_comment_by_post_author( $comment ); ?>
        <h3>
			<?php echo esc_html(get_comment_author());?>

			<?php 

				if ( $by_post_author ) {
					echo ' <span class="badge badge-pill badge-primary">' . __( ' Author', 'perfecttiming' ) . '</span>';
				}

			;?>

		</h3>
        <div class="meta"><a href="<?php echo esc_html(htmlspecialchars(get_comment_link( $comment->comment_ID ))) ?>">
            <?php printf(__('%1$s at %2$s', 'perfecttiming'), esc_html(get_comment_date()),esc_html(get_comment_time())) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>
            
            <?php if ($comment->comment_approved == '0') : ?>
                <em><?php esc_html_e('Your comment is awaiting moderation.', 'perfecttiming');?></em>
                <br />
            <?php endif; ?>

            <?php comment_text() ?>
            
                <?php if($args['max_depth']!=$depth) { ?>
                
                        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                    
                <?php } ?>
         
        </div>

		
<?php
	}	
}