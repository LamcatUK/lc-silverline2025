<?php
/**
 * Block template for LC Hero.
 *
 * @package lc-silverline2025
 */

defined( 'ABSPATH' ) || exit;

$background_image = get_field( 'background' );
$hero_pre_title   = get_field( 'pre-title' );
$hero_title       = get_field( 'title' );
$hero_post_title  = get_field( 'post-title' );

?>

<div class="lc-hero">
	<?=
	wp_get_attachment_image(
		$background_image,
		'full',
		false,
		array(
			'class'    => 'lc-hero__bg',
			'data-aos' => 'zoom-out',
		)
	);
	?>
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php
				if ( $hero_pre_title ) {
					?>
					<div class="lc-hero__pre-title"><?php echo esc_html( $hero_pre_title ); ?></div>
					<?php
				}
				if ( $hero_title ) {
					?>
					<h1 class="lc-hero__title"><?php echo wp_kses_post( $hero_title ); ?></h1>
					<?php
				}
				if ( $hero_post_title ) {
					?>
					<div class="lc-hero__post-title"><?php echo esc_html( $hero_post_title ); ?></div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
	<i class="icon-scroll fa fa-chevron-down " aria-hidden="true"></i>
</div>