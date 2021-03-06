<?php /*
	
@package alienware
* this is the template file for our premium WordPress theme
*/
if( post_password_required() ){
	return;
}
?>

<div id="comments" class="pt-5">
	
	<?php 
		if( have_comments() ):
		//We have comments
	?>
	
		<h3 class="comment-title">
			<?php
				
				printf(
					esc_html( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'perfecttiming' ) ),
					esc_html(number_format_i18n( get_comments_number() )),
					'<span>' . esc_html(get_the_title()) . '</span>'
				);
					
			?>
		</h3>

        <div class="comment-list">
		
		
		
		
			
			<?php 
				
				$args = array(
					'walker'			=>  new PerfectTiming_Walker_Comment(),
					'max_depth' 		=> '3',
					'style'				=> 'ul',
					'callback'			=> '',
					'end-callback'		=> null,
					'type'				=> 'all',
					'reply_text'		=> 'Reply',
					'page'				=> '',
					'per_page'			=> '',
					'avatar_size'		=> 50,
					'reverse_top_level' => null,
					'reverse_children'	=> '',
					'format'			=> 'html5',
					'short_ping'		=> true,
					'echo'				=> true
				);
				
				wp_list_comments( $args );
			?>
			
		

        </div>
		
		
		
		<?php 
			if( !comments_open() && get_comments_number() ):
		?>
			 
			 <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'perfecttiming' ); ?></p>
			 
		<?php
			endif;
		?>
		
	<?php	
		endif;
	?>
	
	<?php 
		
		$fields = array(
			
			'author' =>
				'<div class="form-group name"><label for="author">' . __( 'Name', 'perfecttiming' ) . '</label> <span class="required">*</span> <input id="author" name="author" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '" required /></div>',
				
			'email' =>
				'<div class="form-group email"><label for="email">' . __( 'Email', 'perfecttiming' ) . '</label> <span class="required">*</span><input id="email" name="email" class="form-control" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" required/></div>',
				

				
		);
		
		$args = array(
			
			'class_submit' => 'btn btn-primary',
			'label_submit' => __( 'Submit Comment', 'perfecttiming' ),
			'comment_field' =>
				'<div class="form-group"><label for="comment">' . _x( 'Comment', 'perfecttiming' ) . '</label> <span class="required">*</span><textarea id="comment" class="form-control mb-10" name="comment" rows="5" required></textarea></p>',
			'fields' => apply_filters( 'comment_form_default_fields', $fields )
			
		);
		
		comment_form( $args ); 
		
	?>

	</div>
</div><!-- .comments-area -->