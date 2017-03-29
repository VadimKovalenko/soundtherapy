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


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();
				//get_template_part( 'template-parts/content', 'page' );
				?> 
				<h3>List of stats</h3>
				<b> Get current user: <input type="text" id="cur_usr" placeholder = "Search..."></b>
				<div class = "livesearch-wrapper">
					<b> Test current user: <input type="text" id="cur_usr_2" placeholder = "Search..."></b>
					<div id="soundtherapy-ajax-search">
					</div>
				</div>	
				<hr>
					<div class="soundtherapy-ajax-search">	
					</div>

				<!--Final-->
				<div class = "livesearch-wrapper">
					<b> FINAL Test: <input type="text" id="cur_usr_3" placeholder = "Search..."></b>
					<div id="soundtherapy-ajax-search-3">
					</div>
				</div>	
				<hr>
				<div class="soundtherapy-ajax-search-3">	
				</div>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
