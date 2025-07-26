<?php
/**
 * Block template for LC Three Icons.
 *
 * @package lc-silverline2025
 */

defined( 'ABSPATH' ) || exit;
?>
<section class="three-icons <?= esc_attr( $block['className'] ?? '' ); ?>">
	<div class="container py-5">
		<div class="row g-5">
			<?php
			if ( have_rows( 'icons' ) ) {
				$d = 0;
				while ( have_rows( 'icons' ) ) {
					the_row();
					$icon       = get_sub_field( 'glyph' );
					$icon_title = get_sub_field( 'title' );
					?>
					<div class="col-md-4" data-aos="fade" data-aos-delay="<?= esc_attr( $d ); ?>">
						<div class="three-icons__item text-center">
							<div class="three-icons__icon mb-2">
								<i class="fa-2x <?= esc_attr( $icon ); ?>"></i>
							</div>
							<h3 class="h4 has-theme-color"><?= esc_html( $icon_title ); ?></h3>
						</div>
					</div>
					<?php
					$d += 100;
				}
			}
			?>
		</div>
	</div>
</section>