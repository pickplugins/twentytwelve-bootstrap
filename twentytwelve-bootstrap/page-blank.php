<?php
/**
 * Template Name: Blank page content
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<?php
while ( have_posts() ) : the_post();

    do_action('twentytwelve_blank_page_before');

    the_content();

    do_action('twentytwelve_blank_page_after');

endwhile; // end of the loop.
?>


<?php get_footer(); ?>
