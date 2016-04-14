<?php /* Template Name: Home Page Template */ ?>

<?php get_header(); ?>

	<div class="row">
		<div class="small-12 columns full-width">
			<div class="top-bar">
  				<div class="top-bar-left">
    				<a href="#">Edy Hernandez</a>
  				</div>
  				<div class="top-bar-right">
  				</div>
			</div>
		</div>
	</div>

	<div id="content" class="row">
		<div class="small-12 large-12 columns">
			<div class="row">
				<div class="small-12 medium-8 large-8 columns">
					<?php the_field('top_left_content_block'); ?>
				</div>
				<div class="small-12 medium-4 large-4 columns">
					<!-- This activates single post previews on all single pages in wordpress. -->
					<?php 
						if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
							get_template_part( 'content-single-home-page', get_post_format() );
  
						endwhile; endif; 
					?> 
				</div>
			</div>
		</div> <!-- /.col -->

	</div> <!-- /.row -->

<?php get_footer(); ?>