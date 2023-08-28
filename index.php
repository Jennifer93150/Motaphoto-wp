<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage motaphoto
 * @since motaphoto
 */

get_header();
get_template_part('template-parts/hero'); ?>

<div class="flex-row">
    <?php // Formulaire de filtrage. On boucle directement sur les taxonomie de mon custom post type 
    get_template_part('template-parts/form');?>
</div>

<?php
get_template_part('template-parts/gallery');
get_footer();
