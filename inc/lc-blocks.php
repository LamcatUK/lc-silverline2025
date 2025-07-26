<?php
/**
 * File: lc-blocks.php
 * Description: Registers custom ACF blocks and modifies Gutenberg core blocks for the theme.
 * Author: Your Name
 * Theme: Silverline Coaches
 *
 * @package lc-silverline2025
 */

/**
 * Registers custom ACF blocks for the theme.
 *
 * This function is used to define and register Advanced Custom Fields (ACF) blocks
 * that can be used within the WordPress block editor. Each block can have its own
 * settings, templates, and styles.
 *
 * @return void
 */
function acf_blocks() {
    if ( function_exists( 'acf_register_block_type' ) ) {

		// INSERT NEW BLOCKS HERE.

        acf_register_block_type(
            array(
                'name'            => 'lc_form',
                'title'           => __( 'LC Form' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-form.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'            => 'lc_three_icons',
                'title'           => __( 'LC Three Icons' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-three-icons.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'            => 'lc_two_images',
                'title'           => __( 'LC Two Images' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-two-images.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'            => 'lc_testimonial_slider',
                'title'           => __( 'LC Testimonial Slider' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-testimonial-slider.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'            => 'lc_four_images',
                'title'           => __( 'LC Four Images' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-four-images.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'            => 'lc_icons',
                'title'           => __( 'LC Icons' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-icons.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'            => 'lc_text_image_full',
                'title'           => __( 'LC Text Image Full' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-text-image-full.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'            => 'lc_hero',
                'title'           => __( 'LC Hero' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-hero.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

    }
}
add_action( 'acf/init', 'acf_blocks' );


/**
 * Modifies Gutenberg core block types.
 *
 * Adds a render callback to specific core blocks to wrap their content
 * in a custom container.
 *
 * @param array  $args Arguments for registering a block type.
 * @param string $name Name of the block type.
 * @return array Modified arguments for the block type.
 */
function core_image_block_type_args( $args, $name ) {
	if ( 'core/paragraph' === $name ) {
		$args['render_callback'] = 'modify_core_add_container';
    }
	if ( 'core/heading' === $name ) {
		$args['render_callback'] = 'modify_core_add_container';
    }
	if ( 'core/list' === $name ) {
		$args['render_callback'] = 'modify_core_add_container';
    }
	return $args;
}
add_filter( 'register_block_type_args', 'core_image_block_type_args', 10, 3 );

/**
 * Wraps the content of specific core blocks in a custom container.
 *
 * @param array  $attributes Block attributes.
 * @param string $content    Block content.
 * @return string Modified block content wrapped in a container.
 */
function modify_core_add_container( $attributes, $content ) {
	if ( ! empty( $GLOBALS['skip_core_block_wrapping'] ) ) {
		return $content;
	}

	ob_start();
	?>
	<div class="container-xl">
		<?php echo wp_kses_post( $content ); ?>
	</div>
	<?php
	return ob_get_clean();
}
