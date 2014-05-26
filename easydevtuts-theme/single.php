<?php get_header( ); ?>

<div class="container">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<div class="row">
				<div class="col-xs-12">
					<div class="page-header">
						<h2><?php the_title(); ?> <small><em>by: <?php the_author(); ?></em></small></h2>
						<small><?php the_date(); ?></small>
					</div>
				</div>
			</div>
		
			<div class="row">
				
				<div class="col-md-8">
				
					<?php the_content(); ?>
					<hr>
					<?php comments_template(); ?>
					
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>

				</div>

				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div>

			</div>
		
</div>

<?php get_footer( ); ?>