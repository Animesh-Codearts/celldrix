<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage celldrix
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *

	 *
	 * @return void
	 */
	function celldrix_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'celldrix-columns-overlap',
				'label' => esc_html__( 'Overlap', 'celldrix' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'celldrix-border',
				'label' => esc_html__( 'Borders', 'celldrix' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'celldrix-border',
				'label' => esc_html__( 'Borders', 'celldrix' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'celldrix-border',
				'label' => esc_html__( 'Borders', 'celldrix' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'celldrix-image-frame',
				'label' => esc_html__( 'Frame', 'celldrix' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'celldrix-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'celldrix' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'celldrix-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'celldrix' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'celldrix-border',
				'label' => esc_html__( 'Borders', 'celldrix' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'celldrix-separator-thick',
				'label' => esc_html__( 'Thick', 'celldrix' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'celldrix-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'celldrix' ),
			)
		);
	}
	add_action( 'init', 'celldrix_register_block_styles' );
}
