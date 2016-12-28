<?php /* Template Name: Home Page Template */ ?>

<?php get_header(); ?>
	<div class="row">
	<div class="small-12 medium-12 large-12 columns">
	<ul id="cbp-bislideshow" class="cbp-bislideshow">
		<li><img src="<?php the_field('background_image_1st_slider'); ?>" alt="image01"/></li>
		<li><img src="<?php the_field('background_image_2nd_slider'); ?>" alt="image02"/></li>
		<li><img src="<?php the_field('background_image_3rd_slider'); ?>" alt="image03"/></li>
		<li><img src="<?php the_field('background_image_4th_slider'); ?>" alt="image04"/></li>
		<li><img src="<?php the_field('background_image_5th_slider'); ?>" alt="image05"/></li>
		<li><img src="<?php the_field('background_image_6th_slider'); ?>" alt="image06"/></li>
		<li><img src="<?php the_field('background_image_7th_slider'); ?>" alt="image07"/></li>
	</ul>

	<div id="content" class="row m-page scene_element scene_element--fadeinup">
		<div class="small-12 large-12 columns">
			<div class="row">
				<div class="small-12 medium-6 large-6 columns">
					<div class="top-left-content-block">
						<?php the_field('top_left_content_block'); ?>
					</div>
				</div>
				<div class="small-12 medium-6 large-6 columns">
					<div class="top-right-content-block appear">
						<div class="top-right-content">
							<?php the_field('top_right_content_block'); ?>
						</div>
					</div>	
				</div>
			</div>
			<div class="row">
				<div class="small-12 medium-12 large-12 columns">
					<!-- This activates single post previews on all single pages in wordpress. -->
					<?php 
						if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
							get_template_part( 'content-single-home-page', get_post_format() );
  
						endwhile; endif; 
					?>
				</div>
			</div>
			<div class="row">
				<div class="small-12 medium-12 large-12 columns">
					<div id="cbp-bicontrols" class="cbp-bicontrols">
						<span class="cbp-biprev"></span>
						<span class="cbp-bipause"></span>
						<span class="cbp-binext"></span>
					</div>
				</div>
			</div>
		</div> <!-- /.col -->

	</div> <!-- /.row -->


<?php get_footer('home'); ?>