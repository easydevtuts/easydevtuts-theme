<?php 
/**
 * Comments template
 */

 ?>
	
	<?php if ( 'open' == $post->comment_status ) : ?>
	
	<h4>Comments:
		<small class="label label-info">
			<?php comments_number( $zero = 'Nothing yet...', $one = '(1)', $more = ('%'));?>
		</small>
	</h4>
	
	<?php cancel_comment_reply_link(); ?>
	
	<?php if ( get_option( 'comment_registration' ) && !$user_ID ) : ?>
	
	<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
	
	<?php else : ?>
	
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" role="form">
	
	<?php if ( $user_ID ) : ?>
	
	<h4>Logged in as <a href="<?php echo get_option( 'siteurl' ); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Log out of this account" class="muted">Log out &raquo;</a></h4>
	
	<?php else : ?>
	
	<div class="form-group">
		<label for="author">Name <?php if ( $req ) echo "( required )"; ?></label>
		<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" class="form-control" <?php if ($req) echo "aria-required='true'"; ?> />
	</div>

	<div class="form-group">
		<label for="email">Email ( <?php if ( $req ) echo "required, "; ?>never shared )</label>
		<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" class="form-control" <?php if ($req) echo "aria-required='true'"; ?> />
	</div>

	
	<div class="control-group">
		<label for="url">Website</label>
		<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" class="form-control" />
	</div>

	<?php endif; ?>
	
	<label for="comment">Comment</label>
	<textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
	
	<p>Some HTML is ok: <pre><?php echo allowed_tags(); ?></pre></p>
	
	<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" class="btn btn-default pull-right"/>
	<div class="clearfix"></div>
	<?php do_action( 'comment_form', $post->ID ); comment_id_fields(); ?>
	<hr>
	</form>
	
	<?php endif; // If registration required and not logged in ?>
	
	
	<?php endif; // If comments are open: delete this and the sky will fall on your head ?>

	<?php  wp_list_comments(
			array(
				'type' => 'comment',
				'callback' => 'comments_feed_template_callback'
			)
	); ?>


