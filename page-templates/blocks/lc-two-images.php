<?php
/**
 * Block template for LC Two Images.
 *
 * @package lc-silverline2025
 */

defined( 'ABSPATH' ) || exit;
?>
<section class="two_images">
	<div class="row g-0">
		<div class="col-md-6 overflow-hidden">
			<?= wp_get_attachment_image( get_field( 'image_1' ), 'full', false, array( 'class' => 'two_images__image', 'data-aos' => 'zoom-out') ); ?>
		</div>
		<div class="col-md-6 overflow-hidden">
			<?= wp_get_attachment_image( get_field( 'image_2' ), 'full', false, array( 'class' => 'two_images__image', 'data-aos' => 'zoom-out') ); ?>
		</div>
	</div>
</section>