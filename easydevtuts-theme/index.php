<?php 

	/**
	 * Template Name: Blog
	 */

 ?>


<?php get_header(); ?>
	<!-- main home content -->
	<div class="container">

		<div class="row">
		
			<div class="col-md-8">

				<div class="row">
					<div class="col-xs-12">
						<div class="page-header">
							<h2>Blog <small><em>just another blog</em></small></h2>
						</div>
					</div>
				</div>
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<div class="media">
					  <a class="pull-left" href="<?php the_permalink(); ?>">
					    <?php the_post_thumbnail('thumbnail'); ?>
					  </a>
					  <div class="media-body">
					    <a href="<?php the_permalink(); ?>">
					    	<h4 class="media-heading"><?php the_title(); ?></h4>
					    </a>
					    <small class="text-muted"><?php the_date(); ?></small>
					    <?php the_excerpt(); ?>
					    <a href="<?php the_permalink(); ?>" class="btn btn-mini btn-info">read more</a>

					    <?php the_tags(); ?>
					  </div>
					</div>
					<hr>

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
	<!-- end of main home content -->
<?php get_footer();?>