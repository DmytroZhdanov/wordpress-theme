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
  <header class="header">
    <div class="container header_container">
      <button type="button" class="burger_btn">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger.svg" alt="burger">
      </button>

      <a href="<?php echo home_url(); ?>" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo">
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
  </header>