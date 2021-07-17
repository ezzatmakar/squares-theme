<?php
/*
* Template Name: Squares
* Squares custom theme
*
* Developed By Ezzat Makar
*/

get_header();
?>

<main>

    <?php get_template_part("parts/slider")?>

    <?php get_template_part("parts/about")?>

    <?php get_template_part("parts/squares-mosaic")?>

    <?php get_template_part("parts/products")?>

    <?php get_template_part("parts/services")?>

    <?php get_template_part("parts/factory")?>

    <?php get_template_part("parts/gallery")?>

    <?php get_template_part("parts/contact")?>

</main>

<?php
get_footer();