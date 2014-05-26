<!-- this is where the footer file will begin -->
</div> <!-- end of #wrap (needed for sticky footer) -->
<footer>

	<div class="container">

		<div class="row">
			
			<div class="col-md-4">
				<?php the_field('footer_content_left', 79); ?>
			</div>
			
			<?php 

			

		        wp_nav_menu(array(

					'menu'            => 'Footer Navigation', 
				
					'container_class' => 'col-md-4', 
			
					'menu_class'      => 'menu nav nav-pills', 
				));

		      ?>

			<div class="col-md-4">
				<?php the_field('footer_content_right', 79); ?>
			</div>
		</div>

	</div>		

</footer>
    
    <?php wp_footer();?>
  </body>
</html>