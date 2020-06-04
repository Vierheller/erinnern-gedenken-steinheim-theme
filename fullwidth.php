<?php
/**
* Template Name: Komplette Breite
 */

global $no_container;
$no_container = True; // leave out containers in header and footer section

get_header(); ?>

	<section id="full-width" >
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</section><!-- #primary -->

<?php
get_footer();
