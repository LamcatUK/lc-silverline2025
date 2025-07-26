<?php
/**
 * Template Name: Custom Page Template
 * Description: A custom page template for the Silverline Coaches theme.
 *
 * @package lc-silverline2025
 */

defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="main">
    <?php
    the_post();
    the_content();
    ?>
</main>
<?php
get_footer();