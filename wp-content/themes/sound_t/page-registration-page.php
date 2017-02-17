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
 * @package sound_t
 */
?>
	<div id="primary" class="content-area">
		<h3>Create a new account</h3>
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'home' );
			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->