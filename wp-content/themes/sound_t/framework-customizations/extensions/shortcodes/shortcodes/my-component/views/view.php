<?php if (!defined('FW')) {
	die('Forbidden');
};

//global $wpdb;
//$wpdb->insert('user_stat', array("id" => 1, "username" => "ADMIN", "status" => 0), array('%d', '%s', '%d'));

if ( is_user_logged_in() ) {
	if (current_user_can('editor') || current_user_can('administrator')) {
		echo "<div class = 'welc-usr-wrap'>";
		echo 'Welcome, Admin! ';
		echo "<br/>";
		echo "<a href = '/user-stat-page'>Statistic -></a>";
		echo "<br/>";
		echo "<a href = '/user-profile-page/'>Anketa -></a>";
		echo "</div>";
		if (function_exists('get_users_browsing_site')): ?>
			<div class="user-online-wrapper">
				<div id="useronline-browsing-site"><?php echo get_users_browsing_site(); ?></div>
			</div>
		<?php endif;
	}

    /*$current_user = wp_get_current_user();
    echo 'Username: ' . $current_user->user_login . '<br />';*/

	if ( ! empty( $atts['option_my'] ) ) {
		echo "<div class = 'audio-wrapper'>";
			echo "<div class='player'>";
				echo "<div class='mediaplayer'>";
					echo do_shortcode($atts['option_my']);
					add_action('wp_ajax_save_stat', 'dwwp_save_stat');
				echo "</div>";
			echo "</div>";	
		echo "</div>";
	}

} else {
    ?>
    	<div class = "fw-container unlog-user-wrap">
	    	<div class = "fw-col-md-6 unlog-user-ipad-wrap">
	    		<img class = "img-ipad" src="/wp-content/themes/sound_t/img/sound_t-bg-1.jpg" alt="ipad">
	    	</div>
	    	<div class = "fw-col-md-6 unlog-user-text-wrap">
	    	    <h2>Please, log in to <span class = "green">get access</span> to playlist</h2>
	    	</div>
    	</div>
    <?php
}

?>
<script src = "/wp-content/themes/sound_t/js/js-webshim/minified/polyfiller.js"></script>
<script>
</script>