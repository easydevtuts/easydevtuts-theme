<?php 

	/**
	 * Template Name: Home
	 */

 ?>

<?php get_header(); ?>
	<!-- main home content -->
	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<div class="page-header">
				  <h1><?php the_field("big_page_title", $post->ID); ?> <small><?php the_field('home_message', $post->ID);?></small></h1>
				</div>
		    </div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<ul class="nav nav-tabs">
				  <li class="active"><a href="#tab-one" data-toggle="tab">Tutorials</a></li>
				  <li ><a href="#tab-two" data-toggle="tab">Blog</a></li>
				  <li ><a href="#tab-three" data-toggle="tab">Categories</a></li>
				</ul>
				<div class="tab-content home-tabs">
				  <div class="tab-pane fade active in" id="tab-one">
				    <div class="list-group">
					  <a href="#" class="list-group-item">Bootstrap</a>
					  <a href="#" class="list-group-item">WordPress</a>
					  <a href="#" class="list-group-item">PHP</a>
					  <a href="#" class="list-group-item">Lorem Ipsum</a>
					  <a href="#" class="list-group-item">Lorem Ipsum</a>
					</div>
				  </div>
				  <div class="tab-pane fade" id="tab-two">
				    <div class="list-group">
					  <a href="#" class="list-group-item">Hello World!</a>
					  <a href="#" class="list-group-item">Recent Updates</a>
					  <a href="#" class="list-group-item">Lorem Ipsum</a>
					  <a href="#" class="list-group-item">Lorem Ipsum</a>
					  <a href="#" class="list-group-item">Lorem Ipsum</a>
					</div>
				  </div>
				  <div class="tab-pane fade" id="tab-three">
					<div class="list-group">
					  <a href="#" class="list-group-item">Front End</a>
					  <a href="#" class="list-group-item">Back End</a>
					  <a href="#" class="list-group-item">Mobile First</a>
					  <a href="#" class="list-group-item">FrameWorks</a>
					  <a href="#" class="list-group-item">Lorem Ipsum</a>
					</div>
				  </div>
				</div>      
			</div>

			<div class="col-md-8 hidden-xs">
				<div id="slider" class="carousel slide hidden-phone">
					<ol class="carousel-indicators">
						<li data-target="#slider" data-slide-to="0" class="active"></li>
						<li data-target="#slider" data-slide-to="1" ></li>
						<li data-target="#slider" data-slide-to="2" ></li>
					</ol>

					<div class="carousel-inner">

						<?php 
							$slide_one = get_field("slide_one", $post->ID);
							$slide_two = get_field("slide_two", $post->ID);
							$slide_three = get_field("slide_three", $post->ID);
						 ?>

						<div class="item active">
							<img src="<?php echo $slide_one['url']; ?>" alt="<?php echo $slide_one['alt']; ?>">
							<div class="carousel-caption  hidden-phone">
								<h4><?php echo $slide_one['title']; ?></h4>
								<p><?php echo $slide_one['caption']; ?></p>
							</div>
						</div>

						<div class="item ">
							<img src="<?php echo $slide_two['url']; ?>" alt="<?php echo $slide_two['alt']; ?>">
							<div class="carousel-caption  hidden-phone">
								<h4><?php echo $slide_two['title']; ?></h4>
								<p><?php echo $slide_two['caption']; ?></p>
							</div>
						</div>

						<div class="item">
							<img src="<?php echo $slide_three['url']; ?>" alt="<?php echo $slide_three['alt']; ?>">
							<div class="carousel-caption  hidden-phone">
								<h4><?php echo $slide_three['title']; ?></h4>
								<p><?php echo $slide_three['caption']; ?></p>
							</div>
						</div>

					</div>

					<a class="left carousel-control" href="#slider" data-slide="prev">
						<span class="icon-prev"></span>
					</a>
					<a class="right carousel-control" href="#slider" data-slide="next">
						<span class="icon-next"></span>
					</a>

				</div>
			</div>
		</div>

		<?php if ( have_posts() ) : query_posts( "category_name=Uncategorized&posts_per_page=3" ); ?>

		<div class="row home-posts-feed">

			<?php while ( have_posts() ) : the_post(); ?>
					<!-- post -->
						<div class="col-md-4">
							<div class="thumbnail">
								<?php the_post_thumbnail(array('thumbnail', "class"=>" hidden-sm hidden-xs")); ?>
								<div class="caption">
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink(); ?>" class="btn btn-sm btn-default">read more</a>
								</div>
							</div>
						</div> 
					
			<?php endwhile; ?>
			
		</div>

		<?php else: ?>
					<!-- no posts found -->
		<?php endif; ?>
				
	</div>
	<!-- end of main home content -->
<?php get_footer();?>