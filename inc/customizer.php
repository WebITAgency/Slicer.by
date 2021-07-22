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
		"label" => "Логотип",
		"section" => "slicer_identic",
		'settings' => 'slicer_identic_logo',
	)));

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'slicer_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'slicer_customize_partial_blogdescription',
			)
		);
	}
}
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
