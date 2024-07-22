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
      <button type="button" class="burger_btn open_mob_menu" aria-label="Abrir menú móvil">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger.svg" alt="burger">
      </button>

      <a href="<?php echo home_url(); ?>" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo" class="main_logo_icon">
      </a>

      <nav class="header_menu_wrapper">
        <ul class="header_menu">
          <li>
            <a href="#">Sección 1</a>
          </li>

          <li>
            <a href="#">Sección 2</a>
          </li>

          <li>
            <a href="#">Sección 3</a>
          </li>

          <li>
            <a href="#">Sección 4</a>
          </li>
        </ul>
      </nav>
    </div>

    <div class="warning_banner">+18 - Jogue com responsabilidade.</div>

    <div class="mobile_menu">
      <div class="mob_menu_container">
        <button type="button" aria-label="Cerrar menú móvil" class="mob_menu_close_btn close_mob_menu">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/close.svg" alt="close">
        </button>

        <nav class="mobile_menu_wrapper">
          <ul class="mobile_menu_list">
            <li>
              <a href="#">Sección 1</a>
            </li>

            <li>
              <a href="#">Sección 2</a>
            </li>

            <li>
              <a href="#">Sección 3</a>
            </li>

            <li>
              <a href="#">Sección 4</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>