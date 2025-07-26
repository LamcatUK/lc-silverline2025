<?php
/**
 * Block template for LC Icons.
 *
 * @package lc-silverline2025
 */

defined( 'ABSPATH' ) || exit;
?>
<section class="icons">
	<div class="container py-6">
		<?php
		$d = 0;
		while ( have_rows( 'icons' ) ) {
			the_row();
			$icon       = get_sub_field( 'glyph' );
			$icon_title = get_sub_field( 'title' );
			?>
				<div class="icons__icon" data-aos="fade" data-aos-delay="<?= esc_attr( $d ); ?>">
					<i class="d-block mb-3 fa-2x <?= esc_attr( $icon ); ?>"></i>
					<h2><?= esc_html( $icon_title ); ?></h2>
				</div>
			<?php
			$d += 100;
		}
		?>
	</div>
</section>