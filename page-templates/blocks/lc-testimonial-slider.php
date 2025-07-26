<?php
/**
 * Block template for LC Testimonial Slider.
 *
 * @package lc-silverline2025
 */

defined( 'ABSPATH' ) || exit;
?>
<section class="testimonial-slider <?= esc_attr( $block['className'] ?? '' ); ?>" data-aos="fade-up">
	<div class="splide" role="group" aria-label="Testimonials">
		<div class="splide__track">
			<div class="splide__list">
				<?php
				if ( have_rows( 'testimonials' ) ) {
					while ( have_rows( 'testimonials' ) ) {
						the_row();
						$testimonial = get_sub_field( 'testimonial' );
						$author      = get_sub_field( 'author' );
						?>
						<div class="splide__slide">
							<div class="testimonial-slider__item">
								<blockquote class="testimonial-slider__quote">
									<?= esc_html( $testimonial ); ?>
								</blockquote>
								<cite class="testimonial-slider__author">
									<?= esc_html( $author ); ?>
								</cite>
							</div>
						</div>
						<?php
					}
				}
				?>
			</div>
		</div>
	</div>
</section>

<?php
// Enqueue Splide CSS and JS.
wp_enqueue_style(
	'splide',
	'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css',
	array(),
	'4.1.4'
);

wp_enqueue_script(
	'splide',
	'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js',
	array(),
	'4.1.4',
	true
);

// Enqueue custom initialization script.
wp_add_inline_script(
	'splide',
	'document.addEventListener( "DOMContentLoaded", function() {
		new Splide( ".testimonial-slider .splide", {
			type: "slide",
			perPage: 1,
			autoplay: true,
			interval: 5000,
			pauseOnHover: true,
			arrows: false,
			pagination: false,
			speed: 800,
			gap: "2rem"
		}).mount();
	});'
);