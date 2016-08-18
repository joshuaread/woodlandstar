<?php 
/*template name: Sidebar - Josh*/
get_header(); ?>

<?php nectar_page_header($post->ID); ?>

<div class="container-wrap">
	
	<div class="container main-content">
		
		<div class="row">
			
			<div id="post-area" class="col span_10 col_last">
				<?php 
				
				if(have_posts()) : while(have_posts()) : the_post(); ?>
					
					<?php the_content(); ?>
	
				<?php endwhile; endif; ?>
				
			</div><!--/span_9-->
			
			<div id="sidebar" class="col span_2 left-sidebar">
				<?php get_sidebar(); ?>
			</div><!--/span_9-->
			
			
		</div><!--/row-->
		
	</div><!--/container-->

</div><!--/container-wrap TEST-->

<?php get_footer(); ?>

