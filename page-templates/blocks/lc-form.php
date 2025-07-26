<?php
/**
 * Block template for LC Form.
 *
 * @package lc-silverline2025
 */

defined( 'ABSPATH' ) || exit;
?>
<section class="lc_form">
	<div class="container py-5">
		<?php
		if ( function_exists( 'wpcf7_contact_form' ) ) {
			$contact_form = get_field( 'contact_form_id' );
			if ( $contact_form ) {
				echo do_shortcode( '[contact-form-7 id="' . esc_attr( $contact_form ) . '"]' );
			} else {
				echo '<p>' . esc_html__( 'Contact form not found.', 'lc-silverline2025' ) . '</p>';
			}
		} else {
			echo '<p>' . esc_html__( 'Contact Form 7 plugin is not active.', 'lc-silverline2025' ) . '</p>';
		}
		?>
	</div>
</section>