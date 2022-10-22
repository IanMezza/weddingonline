<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Wedding Online 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Wedding Online 1.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'weddingonline-columns-overlap',
				'label' => esc_html__( 'Overlap', 'weddingonline' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'weddingonline-border',
				'label' => esc_html__( 'Borders', 'weddingonline' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'weddingonline-border',
				'label' => esc_html__( 'Borders', 'weddingonline' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'weddingonline-border',
				'label' => esc_html__( 'Borders', 'weddingonline' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'weddingonline-image-frame',
				'label' => esc_html__( 'Frame', 'weddingonline' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'weddingonline-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'weddingonline' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'weddingonline-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'weddingonline' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'weddingonline-border',
				'label' => esc_html__( 'Borders', 'weddingonline' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'weddingonline-separator-thick',
				'label' => esc_html__( 'Thick', 'weddingonline' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'weddingonline-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'weddingonline' ),
			)
		);
	}
	add_action( 'init', 'twenty_twenty_one_register_block_styles' );
}
