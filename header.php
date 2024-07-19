<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title>Test</title>
  <?php wp_head(); ?>
</head>

<body>
  <?php
  $show_header = get_field("show_header");

  if ($show_header) :
    $logo = get_field("logo");
  ?>
    <header class="header">
      <div class="container header_container">
        <button type="button" class="burger_btn open_mob_menu" aria-label="Abrir menú móvil">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger.svg" alt="burger">
        </button>

        <a href="<?php echo home_url(); ?>" class="logo">
          <img src="<?php echo $logo["url"]; ?>" alt="logo" class="main_logo_icon">
        </a>

        <?php
        wp_nav_menu([
          "theme_location" => "header_menu",
          "menu_id" => "header-menu",
          "menu_class" => "header_menu",
          "container" => "nav",
          "container_class" => "header_menu_wrapper"
        ]); ?>
      </div>

      <?php
      $show_warning = get_field("show_warning");
      if ($show_warning <> "") :
        $warning_text = get_field("warning_text");
      ?>
        <div class="warning_banner"><?php echo $warning_text; ?></div>
      <?php endif; ?>

      <div class="mobile_menu">
        <div class="mob_menu_container">
          <button type="button" aria-label="Cerrar menú móvil" class="mob_menu_close_btn close_mob_menu">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/close.svg" alt="close">
          </button>

          <?php
          wp_nav_menu([
            "theme_location" => "header_menu",
            "menu_id" => "mobile-menu",
            "menu_class" => "mobile_menu_list",
            "container" => "nav",
            "container_class" => "mobile_menu_wrapper"
          ]); ?>
        </div>
      </div>
    </header>
  <?php endif; ?>