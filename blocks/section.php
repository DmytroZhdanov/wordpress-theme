<?php
$id = get_field("id") ?? "";
$title = get_field("title") ?? "Enter title here... / Escribe el título aquí...";
$text = get_field("text") ?? "Your text... / Tu texto...";
$show_image = get_field("image");
$image_redirect_url = get_field("image_redirect_url") ?? "";
$image = get_field("image") ?? "";
$additional_text = get_field("additional_text") ?? "";
?>

<section id="<?php echo $id; ?>" class="section">
  <div class="container">
    <h2 class="section_title">
      <?php echo $title; ?>
    </h2>

    <?php foreach ($text as $paragraph) : ?>
      <p class="section_text">
        <?php echo $paragraph["paragraph"]; ?>
      </p>
    <?php endforeach; ?>

    <?php if ($show_image) : ?>
      <div class="image_wrapper">
        <?php if ($image_redirect_url <> "") : ?>
          <a href="<?php echo $image_redirect_url["url"]; ?>" target="<?php echo $image_redirect_url["target"] ?>" class="image_link">
            <img src="<?php echo $image["url"]; ?>" alt="<?php echo $image["alt"]; ?>" class="image">
          </a>
        <?php else : ?>
          <img src="<?php echo $image["url"]; ?>" alt="<?php echo $image["alt"]; ?>" class="image">
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if ($additional_text <> "") :
      foreach ($additional_text as $additional_paragraph) : ?>
        <p class="section_text">
          <?php echo $additional_paragraph["additional_paragraph"]; ?>
        </p>
    <?php endforeach;
    endif; ?>
  </div>
</section>