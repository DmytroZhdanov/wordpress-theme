<?php
/*
Template Name: Home Page
Template Post Type: page
*/

get_header();

?>

<main>
  <?php get_template_part("template-parts/hero"); ?>

  <?php the_content(); ?>
</main>

<?php get_footer(); ?>