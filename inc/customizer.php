<?php
/**
 * slicer Theme Customizer
 *
 * @package slicer
 */ 

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function slicer_customize_register( $wp_customize ) {
	$wp_customize->add_section('slicer_identic', array(
		'title' => 'Идентика',
		'priority' => 10,
	));
	$wp_customize->add_setting('slicer_identic_logo', array(
		'default' => '',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slicer_identic_logo', array(
		'label' => 'Логотип',
		"section" => "slicer_identic",
		'settings' => 'slicer_identic_logo',
	)));

	$wp_customize->add_section('slicer_view', array(
		'title' => 'Оформление',
		'priority' => 11,
	));
	$wp_customize->add_setting('slicer_view_background', array(
		'default' => '',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slicer_view_background', array(
		'label' => 'Фон заголовка',
		'section' => 'slicer_view',
		'settings' => 'slicer_view_background',
	)));
	
	$wp_customize->add_section('slicer_links', array(
		'title' => 'Ссылки',
		'priority' => 12,
	));
	$wp_customize->add_setting('slicer_links_phone', array(
		'default' => '',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'slicer_links_phone', array(
		'label' => 'Номер телефона',
		'section' => 'slicer_links',
		'settings' => 'slicer_links_phone',
	)));
	$wp_customize->add_setting('slicer_links_inst', array(
		'default' => '',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'slicer_links_inst', array(
		'label' => 'Ссылка на инстаграм',
		'section' => 'slicer_links',
		'settings' => 'slicer_links_inst',
	)));
};
add_action( 'customize_register', 'slicer_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function slicer_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function slicer_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function slicer_customize_preview_js() {
	wp_enqueue_script( 'slicer-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'slicer_customize_preview_js' );
