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
?>	<style>
		h3 {
			text-align: center;
			text-transform: uppercase;
			color: #fff;
			font-family: 'adamcg proregular', sans-serif;
		}

		body {
			background-color: #6e338d;
		}

		.reg-page-wrap {
			width: 400px;
			height: 360px;
			margin: 0 auto;
		}

		form {
			background-color: #fff;
			width: 400px;
			margin-left: auto;
			margin-right: auto;
			padding-top: 20px;
			border: 2px solid #aaa;
		}

		form>p.form-submit {
			text-align: center;
		}

		form>p.form-submit .submit {
			float: none;
			margin-top: 20px;
			margin-right: 0;
		}			
		
		form input {
			float: right;
			margin-right: 40px;
		}

		form label {
			color: #555;
		}

		form ul>li {
			list-style: none;
			margin-bottom: 10px;
			font-family: 'adamcg proregular', sans-serif;
		}

		.submit {
			background: #acce43;
		    color: #fff !important;
		    text-decoration: none;
		    font-family: 'adamcg proregular', sans-serif;
		    text-transform: uppercase;
		    padding: 6px 30px 6px 30px;
		    border-radius: 20px;
		    box-shadow: none;
		    border: none;
		}

		.return-home-link {
			position: relative;
			font-family: 'adamcg proregular', sans-serif;
			color: #75c0dd;
			text-align: center;
			display: block;
		}

		#wppb_form_success_message,
		#wppb_general_top_error_message {
			color: #fff;
			font-family: 'adamcg proregular', sans-serif;
			text-align: center;
		}
	</style>
	<div id="primary" class="content-area">
		<div class = "reg-page-wrap">
			<h3>Create a new account</h3>
			<main id="main" class="site-main" role="main">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'home' );
					echo "<a class = 'return-home-link' href = '/'>Return to the home page</a>"; 
				endwhile; // End of the loop.
				?>
			</main><!-- #main -->
		</div>
	</div><!-- #primary -->
