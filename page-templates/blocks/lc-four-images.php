<?php
/**
 * Block template for LC Four Images.
 *
 * @package lc-silverline2025
 */

defined( 'ABSPATH' ) || exit;
?>
<section class="four_images">
	<?php
	$image_1 = get_field( 'image_1' );
	$link_1  = get_field( 'link_1' );
	$image_2 = get_field( 'image_2' );
	$link_2  = get_field( 'link_2' );
	$image_3 = get_field( 'image_3' );
	$link_3  = get_field( 'link_3' );
	$image_4 = get_field( 'image_4' );
	$link_4  = get_field( 'link_4' );
	?>
	<div class="four_images__grid">
		<a class="four_images__item" href="<?= esc_url( $link_1['url'] ); ?>" target="<?= esc_attr( $link_1['target'] ); ?>">
			<div class="four_images__item-inner">
				<div class="overlay"></div>
				<?=
				wp_get_attachment_image(
					$image_1,
					'full',
					false,
					array(
						'alt'            => esc_attr( $link_1['title'] ),
						'data-aos'       => 'zoom-out',
						'data-aos-delay' => '0',
					)
				);
				?>
				<span class="four_images__caption"><?= esc_html( $link_1['title'] ); ?></span>
			</div>
		</a>
		<a class="four_images__item" href="<?= esc_url( $link_2['url'] ); ?>" target="<?= esc_attr( $link_2['target'] ); ?>">
			<div class="four_images__item-inner">
				<div class="overlay"></div>
				<?=
				wp_get_attachment_image(
					$image_2,
					'full',
					false,
					array(
						'alt'            => esc_attr( $link_2['title'] ),
						'data-aos'       => 'zoom-out',
						'data-aos-delay' => '100',
					)
				);
				?>
				<span class="four_images__caption"><?= esc_html( $link_2['title'] ); ?></span>
			</div>
		</a>
		<a class="four_images__item" href="<?= esc_url( $link_3['url'] ); ?>" target="<?= esc_attr( $link_3['target'] ); ?>">
			<div class="four_images__item-inner">
				<div class="overlay"></div>
				<?=
				wp_get_attachment_image(
					$image_3,
					'full',
					false,
					array(
						'alt'            => esc_attr( $link_3['title'] ),
						'data-aos'       => 'zoom-out',
						'data-aos-delay' => '200',
					)
				);
				?>
				<span class="four_images__caption"><?= esc_html( $link_3['title'] ); ?></span>
			</div>
		</a>
		<a class="four_images__item" href="<?= esc_url( $link_4['url'] ); ?>" target="<?= esc_attr( $link_4['target'] ); ?>">
			<div class="four_images__item-inner">
				<div class="overlay"></div>
				<?=
				wp_get_attachment_image(
					$image_4,
					'full',
					false,
					array(
						'alt'            => esc_attr( $link_4['title'] ),
						'data-aos'       => 'zoom-out',
						'data-aos-delay' => '300',
					)
				);
				?>
				<span class="four_images__caption"><?= esc_html( $link_4['title'] ); ?></span>
			</div>
		</a>
	</div>
</section>