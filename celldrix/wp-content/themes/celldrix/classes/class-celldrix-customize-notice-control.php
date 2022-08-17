<?php
/**
 * Customize API: celldrix_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage celldrix

 */

/**
 * Customize Notice Control class.
 *

 *
 * @see WP_Customize_Control
 */
class celldrix_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	
	 *
	 * @var string
	 */
	public $type = 'celldrix-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'celldrix' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/celldrix/#dark-mode-support', 'celldrix' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'celldrix' ); ?>
			</a></p>
		</div>
		<?php
	}
}
