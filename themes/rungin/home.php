<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rungin
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php
			while ( have_posts() ) : the_post();
				if ( $wp_query->current_post == 0 && !is_paged() ):
					get_template_part( 'template-parts/content', 'preview' ); 
				endif;

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>
			<div id="smallPreview" data-columns>
			<?php
			while ( have_posts() ) : the_post();
				if ( $wp_query->current_post !== 0 ):
				get_template_part( 'template-parts/content', 'preview-small' );
				endif;
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
