<?php if ( post_password_required() ) : ?>
	<p><?php _e( 'This post is password protected. Enter the password to view any comments.', 'e-comme' ); ?></p>
<?php return;
endif; ?>
<?php if ( have_comments() ) : ?>
<div class="row c_comment">
	
		<h2><i class="fa fa-comments"></i><?php echo comments_number(__('0 Comment','e-comme'), __('1 Comment','e-comme'), __('% Comments','e-comme')); ?></h2>
		<?php wp_list_comments( array( 'callback' => 'e_comme_comment' ) ); ?>		
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-below row pagination">
			<ul class="pager">
				<li class="nav-previous previous"><?php previous_comments_link( '<i class="fa fa-arrow-left"></i> '.__( 'Previous Comments', 'e-comme' ) ); ?>
				</li>
				<li class="nav-next next"><?php next_comments_link( __( 'Next Comments', 'e-comme' ).' <i class="fa fa-arrow-right"></i>' ); ?>
				</li>
			</ul>
		</nav>
	<?php endif;  ?>
	</div>		
<?php endif; ?>
<?php if ( comments_open() ) : ?>
	<div class="row c_comment_form">
		<?php $fields=array(
			'author' => '<div class="form-group col-md-4"><label  for="name">'.esc_html__( 'NAME', 'e-comme' ).':</label><input type="text" class="form-control" id="name" name="author" placeholder="'.esc_attr__( 'Full Name', 'e-comme' ).'"></div>',
			'email' => '<div class="form-group col-md-4"><label for="email">'.esc_html__( 'EMAIL', 'e-comme' ).':</label><input type="email" class="form-control" id="email" name="email" placeholder="'.esc_attr__( 'Your Email Address', 'e-comme' ).'"></div>',
			'website' => '<div class="form-group col-md-4"><label  for="web">'.esc_html__( 'WEBSITE', 'e-comme' ).':</label><input type="text" class="form-control" id="web" placeholder="'.esc_attr__( 'Website', 'e-comme' ).'"></div>',
		);
		function e_comme_fields($fields) {
			return $fields;
		}
		add_filter('wl_comment_form_default_fields','e_comme_fields');
			$defaults = array(
				'fields'=> apply_filters( 'wl_comment_form_default_fields', $fields ),
				'comment_field'=> '<div class="form-group col-md-12"><label  for="message">'.esc_html__('COMMENT', 'e-comme').':</label><textarea class="form-control" rows="5" id="comment" name="comment" placeholder="'.esc_attr__('Message', 'e-comme').'"></textarea></div>',
				'submit_field' => '<div class="form-group col-md-4">%1$s %2$s</div>',
				'logged_in_as' => '<p class="logged-in-as">'. esc_html__( "Logged in as ",'e-comme' ).'<a href="'.esc_url(admin_url( 'profile.php' )).'">'.$user_identity.'</a>'.'<a href="'. esc_url( wp_logout_url( get_permalink()) ).'" title="'.esc_attr__('Log out of this account', 'e-comme').'">'.esc_html__(" Log out?",'e-comme').'</a>' . '</p>',
				'title_reply_to' => __( 'Leave a Reply to %s','e-comme'),
				'class_submit' => 'btn',
				'label_submit'=>__( 'SUBMIT COMMENT','e-comme'),
				'comment_notes_before'=> '',
				'comment_notes_after'=>'',
				'title_reply'=> '<h2>'.__('Leave Your Comment Here','e-comme').'</h2>',
				'role_form'=> 'form',
			);
		comment_form($defaults); ?>		
	</div>
<?php endif; // If registration required and not logged in ?>