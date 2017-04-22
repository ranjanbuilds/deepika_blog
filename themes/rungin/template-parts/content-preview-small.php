<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rungin
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) : ?>
		    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>" class="entry-image">
		        <?php the_post_thumbnail( 'large' ); ?>
		    </a>
		<?php endif; ?>
		<header class="entry-header">
			
			<div class="category-decorated">
				<div class="decorative-dash"></div>
				<h3><?php the_category(' '); ?></h3>
				<div class="decorative-dash"></div>
			</div>
			
			<?php 
			the_title( '<h1 class="entry-title">', '</h1>' ); 
			?>

			<div class="author-date">
				<span>By <?php the_author() ?></span>
				<span class="decorative-dash"></span>
				<span><?php the_date(); ?></span>
			</div>
		</header><!-- .entry-header -->
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rungin' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->