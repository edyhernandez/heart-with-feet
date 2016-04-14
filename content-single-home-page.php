<div class="blog-post">
    
<!-- The following adds a featured image if there is one selected in the wordpress admin before the main content of a single post -->
    <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail();
    } ?>

    <?php the_content(); ?>

</div><!-- /.blog-post -->