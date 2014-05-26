<?php get_header( ); ?>

<div class="container">
	
	<div class="row">
		
		<div class="col-md-8 <?php echo (get_field('sidebar_location', $page->ID) == 'left' ? 'col-md-push-4' : ''); ?>">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
				<?php the_title( $before = '<h3>', $after = '</h3>', $echo = true ) ?>

			  <?php the_content(); ?>

			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>

		</div>

		<div class="col-md-4 <?php echo (get_field('sidebar_location', $page->ID) == 'left' ? 'col-md-pull-8' : ''); ?>">

			<?php get_sidebar(); ?>

		</div>

	</div>

</div>

<?php get_footer( ); ?>