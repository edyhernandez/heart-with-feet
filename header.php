<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php wp_head();?>
  </head>

  <body>
  	<div class="off-canvas-wrapper">
  		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
  			<div class="off-canvas position-left" id="offCanvas" data-off-canvas>

  				<!-- Close button -->
  				<button class="close-button" aria-label="Close menu" type="button" data-close>
  					<span aria-hidden="true">&times;</span>
  				</button>

  				<!-- Menu -->
  				<ul class="vertical menu">
  					<li><a href="#">Foundation</a></li>
  					<li><a href="#">Dot</a></li>
  					<li><a href="#">ZURB</a></li>
  					<li><a href="#">Com</a></li>
  					<li><a href="#">Slash</a></li>
  					<li><a href="#">Sites</a></li>
  				</ul>

  			</div>


  			<div class="off-canvas-content m-scene" data-off-canvas-content>
  				<!-- Page content -->

	<!--<div class="row full-width">
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

	<div class="blog-masthead">
		<div class="container">
			<nav class="blog-nav">
				<?php wp_list_pages( '&title_li='); ?>
			</nav>
		</div>
	</div> -->
		<!--<div class="blog-header">
			<h1 class="blog-title"><a href="<?php bloginfo('wpurl');?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
			<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
		</div>-->
		<header>
			<div class="row show-for-medium m-header scene_element scene_element--fadein">
				<div class="small-12 large-12 columns full-width">
					<div class="top-bar nav-down">
						<div class="top-bar-left full-width">
							<span class="logo">
								<a href="/wordpress-experiments"><img src="<?php the_field('logo', 'option'); ?>" alt="logo"></a>
							</span>
							<nav class="main-nav">
								<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<div class="row show-for-small-only top-bar nav-down">
				<div class="small-3 columns">
					<div class="left-offcanvas-button">
						<button class="menu-icon" type="button" data-open="offCanvas"></button>
					</div>
				</div>
				<div class="small-6 columns">
					<div class="logo">
						<a href="/wordpress-experiments"><img src="<?php the_field('logo', 'option'); ?>" alt="logo"></a>
					</div>
				</div>
				<div class="small-3 columns">
					
				</div>
			</div>
		</header>