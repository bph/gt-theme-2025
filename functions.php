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

/**
 * Register a block binding source that exposes author profile URLs
 * (website + Yoast contact-method fields) to social-link blocks.
 *
 * Args:
 *   key: user_url | twitter | linkedin | ... (any user meta key)
 *
 * On author archives the queried user is used; inside a post context
 * (query loop or single) the post's author is used. Returns an empty
 * string when the value is unset — paired with the render filter
 * below, empty social-link blocks are hidden entirely.
 */
function gt_2025_register_bindings() {
	if ( ! function_exists( 'register_block_bindings_source' ) ) {
		return;
	}
	register_block_bindings_source(
		'gt-theme/user-social',
		array(
			'label'              => __( 'Author social URL', 'gt-2025' ),
			'get_value_callback' => 'gt_2025_user_social_value',
			'uses_context'       => array( 'postId' ),
		)
	);
}
add_action( 'init', 'gt_2025_register_bindings' );

function gt_2025_user_social_value( array $source_args, $block_instance, string $attribute_name ) {
	$key = isset( $source_args['key'] ) ? (string) $source_args['key'] : '';
	if ( '' === $key ) {
		return '';
	}

	$user_id = 0;
	if ( is_author() ) {
		$user_id = (int) get_queried_object_id();
	} elseif ( $block_instance && ! empty( $block_instance->context['postId'] ) ) {
		$user_id = (int) get_post_field( 'post_author', $block_instance->context['postId'] );
	}
	if ( ! $user_id ) {
		return '';
	}

	$value = get_the_author_meta( $key, $user_id );
	if ( ! $value ) {
		return '';
	}

	// Yoast stores the Twitter field as a bare username; normalize to a URL.
	if ( 'twitter' === $key && ! preg_match( '#^https?://#i', $value ) ) {
		$value = 'https://x.com/' . ltrim( $value, '@' );
	}

	return esc_url_raw( $value );
}

/**
 * Hide social-link blocks whose URL binding resolved to empty. Core
 * still renders the icon with href="#", so we strip those.
 */
function gt_2025_hide_empty_social_link( $content, $block ) {
	$source = $block['attrs']['metadata']['bindings']['url']['source'] ?? '';
	if ( 'gt-theme/user-social' !== $source ) {
		return $content;
	}
	if ( false !== strpos( $content, 'href="#"' ) ) {
		return '';
	}
	return $content;
}
add_filter( 'render_block_core/social-link', 'gt_2025_hide_empty_social_link', 10, 2 );
