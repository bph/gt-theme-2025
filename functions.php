<?php
/**
 * GT-2025 functions and definitions.
 *
 * Standalone theme (formerly a Twenty Twenty-Five child theme).
 *
 * @package GT_2025
 */

if ( ! function_exists( 'gt_2025_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 */
	function gt_2025_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'gt_2025_post_format_setup' );

if ( ! function_exists( 'gt_2025_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 */
	function gt_2025_editor_style() {
		add_editor_style( 'assets/css/editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'gt_2025_editor_style' );

if ( ! function_exists( 'gt_2025_enqueue_styles' ) ) :
	/**
	 * Enqueues the theme stylesheet on the front end.
	 */
	function gt_2025_enqueue_styles() {
		wp_enqueue_style(
			'gt-2025-style',
			get_theme_file_uri( 'style.css' ),
			array(),
			filemtime( get_theme_file_path( 'style.css' ) )
		);
		wp_style_add_data( 'gt-2025-style', 'path', get_theme_file_path( 'style.css' ) );
	}
endif;
add_action( 'wp_enqueue_scripts', 'gt_2025_enqueue_styles' );

if ( ! function_exists( 'gt_2025_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 */
	function gt_2025_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'gt-2025' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;
add_action( 'init', 'gt_2025_block_styles' );
