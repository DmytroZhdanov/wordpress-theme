<?php
$show_footer = get_field("show_footer");

if ($show_footer) :
  $logo = get_field("logo");
  $footer_title = get_field("footer_title");
  $footer_text = get_field("footer_text");
  $other_logos = get_field("other_logos");
  $copyright_text = get_field("copyright_text");
?>
  <footer class="footer">
    <div class="container">
      <div class="footer_top">
        <a href="<?php echo home_url(); ?>" class="logo logo_footer">
          <img src="<?php echo $logo["url"]; ?>" alt="logo" class="main_logo_icon">
        </a>

        <div class="footer_top_text_wrapper">
          <h2 class="footer_title"><?php echo $footer_title; ?></h2>

          <p class="footer_text"><?php echo $footer_text; ?></p>
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

      <?php if ($other_logos) : ?>
        <ul class="footer_logos">
          <?php foreach ($other_logos as $other_logo) :
            $other_logo_url = $other_logo["link"];
            $other_logo_image = $other_logo["other_logo"];

            if ($other_logo_url) : ?>
              <li>
                <a href="<?php echo $other_logo_url; ?>">
                  <img src="<?php echo $other_logo_image["url"] ?>" alt="<?php echo $other_logo_image["alt"] ?>">
                </a>
              </li>
            <? else : ?>
              <li>
                <img src="<?php echo $other_logo_image["url"] ?>" alt="<?php echo $other_logo_image["alt"] ?>">
              </li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <p class="copyright_text"><?php echo $copyright_text; ?></p>
    </div>
  </footer>
<?php endif; ?>

</body>

<?php wp_footer(); ?>

</html>