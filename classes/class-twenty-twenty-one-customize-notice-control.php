<?php
/**
 * Customize API: Twenty_Twenty_One_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Wedding Online 1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since Wedding Online 1.0
 *
 * @see WP_Customize_Control
 */
class Twenty_Twenty_One_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since Wedding Online 1.0
	 *
	 * @var string
	 */
	public $type = 'twenty-twenty-one-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @since Wedding Online 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'weddingonline' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/twenty-twenty-one/#dark-mode-support', 'weddingonline' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'weddingonline' ); ?>
			</a></p>
		</div>
		<?php
	}
}
