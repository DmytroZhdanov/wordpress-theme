<?php
$show_hero = get_field("show_hero");
if (!is_admin() && !$show_hero) return;

$hero_logo = get_field("hero_logo");
$hero_title = get_field("hero_title");
$hero_description = get_field("hero_description");
$validation_date = get_field("validation_date");
$rating = get_field("rating");
$votes = get_field("votes");
$expiration_date = get_field("expiration_date");
$promo_code = get_field("promo_code");
$bonus_link = get_field("bonus_link");
?>

<section id="hero" class="hero">
  <div class="container hero_container">
    <div class="information_content">
      <img src="<?php echo $hero_logo; ?>" alt="logo" class="promo_logo">

      <div>
        <h1 class="hero_title"><?php echo $hero_title; ?></h1>

        <?php if ($rating) : ?>
          <ul aria-label="Rating: <?php echo $rating; ?>" class="rating_list">
            <?php for ($i = 1; $i <= $rating; $i++) : ?>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" alt="<?php echo $i; ?>" class="rating_item_icon">
              </li>
            <?php endfor; ?>
          </ul>
        <?php endif; ?>
      </div>

      <?php if ($hero_description <> "") : ?>
        <p class="hero_description"><?php echo $hero_description; ?></p>
      <?php endif; ?>

      <p class="promo_info">
        <span class="verified_container">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/verification.svg" alt="Verified">

          Testado e verificado - <?php echo $validation_date; ?>
        </span>

        <?php if ($rating) {
          echo "Avaliação  $rating";
        }; ?> - <?php if ($votes) {
                  echo "$votes votos";
                }; ?> - Expira em: <?php echo $expiration_date; ?>
      </p>
    </div>

    <div class="promo_container">
      <div class="promo_code_wrapper">
        <div class="promo_code_container">
          <p class="promo_code"><?php echo $promo_code; ?></p>

          <button type="button" class="copy_promo_code_btn">Copiar</button>
        </div>
      </div>


      <ul class="condition_list">
        <li class="condition_item">
          <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/new.svg" alt="New icon"></span>

          <p>Para novos usuários</p>
        </li>

        <li class="condition_item">
          <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brasil.svg" alt="Brasil"></span>

          <p>Válido no Brasil</p>
        </li>

        <li class="condition_item">
          <span>13</span>

          <p>acessos nesta semana</p>
        </li>
      </ul>


      <div><a href="<?php echo $bonus_link["url"]; ?>" class="bonus_link"><?php echo $bonus_link["title"]; ?></a></div>
    </div>
  </div>
</section>