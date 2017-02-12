<?php if (!defined('FW')) {
	die('Forbidden');
};


if ( is_user_logged_in() ) {
	if (current_user_can('editor') || current_user_can('administrator')) {
		echo 'Welcome, Admin! ';
		if (function_exists('get_users_browsing_site')): ?>
			<div class="user-online-wrapper">
				<div id="useronline-browsing-site"><?php echo get_users_browsing_site(); ?></div>
			</div>
		<?php endif;
	}
    echo 'Welcome, registered user!';

	if ( ! empty( $atts['option_my'] ) ) {
		echo "<div class = 'audio-wrapper'>";
			echo "<div class='player'>";
				echo "<div class='mediaplayer'>";
					echo "<audio type='audio/mpeg' preload='none' controls='controls'><source src = './wp-content/uploads/2017/02/Dark.mp3'></audio>";
					echo do_shortcode($atts['option_my']);
				echo "</div>";
			echo "</div>";	
		echo "</div>";
	}

} else {
    echo '<b>пройдите регистрацию, чтобы получить доступ к нашим аудиозаписям!<b>';
}
?>

<?php if (function_exists('get_most_users_online')): ?>
   <p>Most Users Ever Online Is <?php echo get_most_users_online(); ?> On <?php echo get_most_users_online_date(); ?></p>
<?php endif; ?>

<script src = "wp-content/themes/sound_t/js/js-webshim/minified/polyfiller.js"></script>

<table>
    <tbody>
        <tr>
            <th>currentTime</th>
            <td><span class="current-time"></span>

            </td>
        </tr>
        <tr>
            <th>paused-state</th>
            <td><span class="paused-state">true</span>

            </td>
        </tr>
    </tbody>
</table>


<script>
</script>