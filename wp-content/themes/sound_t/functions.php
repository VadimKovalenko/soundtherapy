<?php
/**
 * sound_t functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sound_t
 */

if ( ! function_exists( 'sound_t_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function my_scripts_method() {
// register your script location, dependencies and version
   wp_register_script('custom_script',
   get_template_directory_uri() . '/js/custom_js/custom.js',
   array('jquery'),
   '1.0' );
 // enqueue the script
  wp_enqueue_script('custom_script');
  }
add_action('wp_enqueue_scripts', 'my_scripts_method');


function sound_t_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on sound_t, use a find and replace
	 * to change 'sound_t' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'sound_t', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'sound_t' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sound_t_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'sound_t_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sound_t_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sound_t_content_width', 640 );
}
add_action( 'after_setup_theme', 'sound_t_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sound_t_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sound_t' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sound_t' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sound_t_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sound_t_scripts() {
	wp_enqueue_style( 'sound_t-style', get_stylesheet_uri() );

	wp_enqueue_style( 'sound_t-theme-style', get_template_directory_uri() . '/css/theme.css' );

	wp_enqueue_style( 'sound_t-theme-media', get_template_directory_uri() . '/css/media.css' );

	wp_enqueue_script( 'sound_t-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'sound_t-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sound_t_scripts' );


/*AJAX request to the DB*/
function dwwp_save_stat() {
	global $wpdb;
	//wp_send_json_error('FAILURE');
	//echo $_POST[event_id];
	//echo $_POST[get_users_browsing_site()];
	$current_user = wp_get_current_user();
	$wpdb->show_errors();
	$wpdb->insert('user_stat', array("username" => strval($current_user->user_login), "trek" => $_POST[song], "status" => $_POST[status], date => current_time('mysql')), array('%s', '%s', '%s'));
	exit;
}
add_action('wp_ajax_save_stat', 'dwwp_save_stat');




add_action('wp_ajax_nopriv_soundtrerapy_ajax_search_table','soundtrerapy_ajax_search_table');
add_action('wp_ajax_soundtrerapy_ajax_search_table','soundtrerapy_ajax_search_table');

//Show table of users depending on AJAX query
function soundtrerapy_ajax_search_table($input_username){
	global $wpdb;
	// creating a search query
	$input_username = $_POST['term']; 	 	 
	// display results
	$wpdb->show_errors();
	if ($input_username == "") {
		$result = $wpdb->get_results( "SELECT * FROM user_stat");
	} else {
		$result = $wpdb->get_results( "SELECT * FROM user_stat WHERE username = '$input_username'");
		$start_count = $wpdb->get_results( "SELECT COUNT(status) as total FROM user_stat WHERE status = 'started' AND username = '$input_username'");
		$finished_count = $wpdb->get_results( "SELECT COUNT(status) as total FROM user_stat WHERE status = 'finished' AND username = '$input_username'");
		echo "<div class = 'stat-info-usr-wrap'>";
			echo "Statistic for user with nickname <b>" . $input_username . "</b>";
			echo "<br>";	
			echo "Started listening: <b>" . ($start_count[0]->total) . "</b> times, ";
			echo "Finished listening: <b>" . ($finished_count[0]->total) . "</b> times";
		echo "</div>";
	}?>
	<table border = "1">
		<tr>
			<th>Username</th>
			<th>trek</th>
			<th>status</th>
			<th>date</th>
		</tr>
	<?php foreach ( $result as $print )   {?>
		<tr>
			<td><?php echo $print->username;?></td>
			<td><?php echo $print->trek;?></td>
			<td><?php echo $print->status;?></td>
			<td><?php echo $print->date;?></td>
		</tr>	
	<?php }?>
	</table>
	<?php
	exit;
};

/*FINAL STAT AJAX CALL*/
add_action('wp_ajax_nopriv_soundtrerapy_ajax_search_username','soundtrerapy_ajax_search_username');
add_action('wp_ajax_soundtrerapy_ajax_search_username','soundtrerapy_ajax_search_username');

function soundtrerapy_ajax_search_username(){	
	global $wpdb;
	// creating a life search
	$stat_users = $wpdb->get_results("SELECT DISTINCT username FROM user_stat");
	$input_username = strtolower($_POST['term']); 	 	 
	$wpdb->show_errors();
	for ($j=0; $j<=count($stat_users); $j++) {
		foreach ($stat_users[$j] as $key => $stat_user_name) {
			if($input_username == substr(strtolower($stat_user_name), 0, strlen($input_username))) {
				echo "<li class = 'soundtherapy-ajax-search-item'>" . $stat_user_name . "</li>";
			}
		}
	};
	exit;
};

//to add registration hook
add_action( 'user_register', 'myplugin_registration_save', 10, 1 );
function myplugin_registration_save( $user_id ) {
    $location = home_url()."/?pb_autologin=true&pb_uid=$user_id";
    echo "<script> window.location.replace('$location'); </script>";
}

add_action( 'init', 'wppb_custom_autologin' );
function wppb_custom_autologin(){
	$url="http://soundtherapy/user-profile-page";
    if( isset( $_GET['pb_autologin'] ) && isset( $_GET['pb_uid'] )  ){
        $uid = $_GET['pb_uid'];
        wp_set_auth_cookie( $uid );
        delete_user_meta($uid, 'pb_autologin' . $uid );
        delete_user_meta($uid, 'pb_autologin' . $uid . '_expiration');
        wp_redirect( $url );
        exit;
    }
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';