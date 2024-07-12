<footer class="footer">
  <div class="container">
    <div class="footer_top">
      <a href="<?php echo home_url(); ?>" class="logo logo_footer">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo">
      </a>

      <div class="footer_top_text_wrapper">
        <h2 class="footer_title">Lorem Title</h2>

        <p class="footer_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At, magnam! Aperiam debitis sequi deserunt, porro illo recusandae dolores distinctio non laborum ad nostrum dolorum optio fugiat veritatis possimus nihil qui dolor quibusdam ullam totam facere vitae? Illum velit alias ad a eius similique, nulla fugiat dolores quasi voluptatem officiis culpa, sunt ducimus aliquam nobis. Quae minima quaerat rerum ipsam modi iure sint cupiditate, placeat doloremque a. Numquam ratione architecto in porro eum. Quis optio, alias quam libero ratione quae possimus suscipit illum veritatis. Perferendis similique molestiae repellat error aliquid ab a mollitia! Magni quibusdam aliquam facere eaque error, ratione odio.</p>
      </div>

      <?php
      wp_nav_menu([
        "theme_location" => "footer_menu",
        "menu_id" => "footer-menu",
        "menu_class" => "footer_menu",
        "container" => "nav",
        "container_class" => "footer_menu_wrapper"
      ]); ?>
    </div>

    <ul class="footer_logos">
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/18.svg" alt="18+">
      </li>

      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/jogo_responsavle.svg" alt="jogo responsavle">
      </li>

      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/apostas_seguras.svg" alt="apostas seguras">
      </li>

      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/virando_jogo.svg" alt="virando jogo">
      </li>

      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ja.svg" alt="ja">
      </li>
    </ul>

    <p class="copyright_text">Copyright 2024 © - +18 | Conteúdo Comercial | Aplicam-se os Termos e Condições</p>
  </div>
</footer>

</body>

<?php wp_footer(); ?>

</html>