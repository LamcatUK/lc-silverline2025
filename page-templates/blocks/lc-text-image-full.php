<?php
/**
 * Block template for LC Text Image Full.
 *
 * @package lc-silverline2025
 */

defined( 'ABSPATH' ) || exit;

$image   = get_field( 'image' );
$content = get_field( 'content' );
?>
<?php
$classes = $block['className'] ?? null;

$image_order    = get_field( 'order' ) === 'Image Text' ? '' : 'order-lg-2';
$text_order     = get_field( 'order' ) === 'Image Text' ? '' : 'order-lg-1';
$text_alignment = get_field( 'order' ) === 'Image Text' ? 'text--right' : 'text--left  ';

$theme_value = get_field( 'theme' );
switch ( $theme_value ) {
	case 'Dark':
		$theme = 'has-theme-color';
		break;
	case 'Light':
		$theme = 'has-theme-color-light';
		break;
	case 'White':
		$theme = 'has-theme-color-white';
		break;
	default:
		$theme = 'has-theme-color-light';
}
?>
<section
    <?php
    if ( ! empty( $block['anchor'] ) ) {
        ?>
        id="<?= esc_attr( $block['anchor'] ); ?>"
        <?php
    }
    ?>
    class="split <?= esc_attr( $classes ); ?> <?= esc_attr( $theme ); ?>">
    <div class="container-fluid">
        <div class="h2 d-lg-none text-center pt-3">
            <?= esc_html( get_field( 'title' ) ); ?>
        </div>
        <div class="row h-100">
            <div class="col-lg-6 split__image <?= esc_attr( $image_order ); ?>">
                <?= wp_get_attachment_image( get_field( 'image' ), 'full', false, array( 'data-aos' => 'zoom-out' ) ); ?>
            </div>
            <div class="col-lg-6 h-100 my-auto <?= esc_attr( $text_order ); ?>" data-aos="fade">
                <div class="ps-xl-3 py-5 my-auto <?= esc_attr( $text_alignment ); ?>">
                    <h2 class="h2 <?= esc_attr( $theme ); ?> d-none d-lg-block">
                        <?= esc_html( get_field( 'title' ) ); ?>
                    </h2>
					<hr class="pt-4">
                    <?= wp_kses_post( get_field( 'content' ) ); ?>
                </div>
            </div>
        </div>
    </div>
</section>