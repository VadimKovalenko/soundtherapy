<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'option_my' => array(
		'type'  => 'wp-editor',
		'value' => 'default value',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Label', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
		'size' => 'small', // small, large
		'editor_height' => 400,
		'wpautop' => true,
		'editor_type' => true, // tinymce, html

		/**
		 * Also available
		 * https://github.com/WordPress/WordPress/blob/4.4.2/wp-includes/class-wp-editor.php#L80-L94
		 */
	),

	'for_audio' => array(
	    'type'  => 'text',
	    'value' => '',
	    'attr'  => array( 'class' => 'custom-audio', 'data-foo' => 'bar-audio' ),
	    'label' => __('Insert [audio] shortcode', '{domain}'),
	    'desc'  => __('Audio for theropy', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	)
);