<?php if (!defined('FW')) {
	die('Forbidden');
};


if ( is_user_logged_in() ) {
	if (current_user_can('editor') || current_user_can('administrator')) {
		echo 'Welcome, Admin! ';
	}
    echo 'Welcome, registered user!';

	if ( ! empty( $atts['option_my'] ) ) {
		echo do_shortcode($atts['option_my']);
		echo $atts['for_audio'];
	}

} else {
    echo '<b>пройдите регистрацию, чтобы получить доступ к нашим аудиозаписям!<b>';
}
?>