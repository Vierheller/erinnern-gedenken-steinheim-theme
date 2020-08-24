<?php
/**
* Template Name: Komplette Breite ohne Titel
 */

global $no_container;
$no_container = True; // leave out containers in header and footer section

get_header(); ?>

	<section id="full-width" >
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'notitle' );

		endwhile; // End of the loop.
		?>
	</section><!-- #primary -->

<?php
get_footer();
