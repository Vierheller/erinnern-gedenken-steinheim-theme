<?php
/**
* Template Name: Homepage
 */

global $no_container;
$no_container = True; // leave out containers in header and footer section

get_header(); ?>

	<section id="full-width" >
		<img id="front-img" src="<?php echo get_bloginfo('template_url') ?>/images/header-background.jpg">
	</section>
		
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
		</div>
	</div>

<?php
get_footer();
