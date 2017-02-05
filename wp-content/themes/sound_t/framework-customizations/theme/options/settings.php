<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
    'header_text' => array(
	    'type'  => 'text',
	    'value' => 'Значение по умолчанию, прописанное мною в UNYSON',
	    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
	    'label' => __('Some text for header', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	),
	'footer_text' => array(
		'type'  => 'wp-editor',
		'value' => 'default value',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Some text for footer', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
		'size' => 'small', // small, large
		'editor_height' => 400,
		'wpautop' => true,
		'editor_type' => false, // tinymce, html
	),
	'bg_color' => array(
	    'type'  => 'color-picker',
	    'value' => '#FF0000',
	    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
	    // palette colors array
	    'palettes' => array( '#ba4e4e', '#0ce9ed', '#941940' ),
	    'label' => __('Change color', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	),
);