<?php
/*
Template Name: Home Page
Template Post Type: page
*/

get_header();

?>

<main>
  <?php get_template_part("template-parts/hero"); ?>

  <section id="section_1" class="section">
    <div class="container">
      <h2 class="section_title">Title</h2>

      <p class="section_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aut modi, aperiam laudantium eum quo corrupti ab totam ex assumenda dolor mollitia dolorem laborum quam velit consectetur quisquam fugit. Molestiae!</p>

      <p class="section_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aut modi, aperiam laudantium eum quo corrupti ab totam ex assumenda dolor mollitia dolorem laborum quam velit consectetur quisquam fugit. Molestiae!</p>
    </div>
  </section>

  <section id="2" class="section">
    <div class="container">
      <h2 class="section_title">Title 2</h2>

      <p class="section_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aut modi, aperiam laudantium eum quo corrupti ab totam ex assumenda dolor mollitia dolorem laborum quam velit consectetur quisquam fugit. Molestiae!</p>

      <p class="section_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aut modi, aperiam laudantium eum quo corrupti ab totam ex assumenda dolor mollitia dolorem laborum quam velit consectetur quisquam fugit. Molestiae!</p>


      <div class="image_wrapper">
        <a href="#" target="_blank" class="image_link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bonus-banner.png" alt="Zeus" class="image">
        </a>
      </div>

      <p class="section_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aut modi, aperiam laudantium eum quo corrupti ab totam ex assumenda dolor mollitia dolorem laborum quam velit consectetur quisquam fugit. Molestiae!</p>
    </div>
  </section>
</main>

<?php get_footer(); ?>