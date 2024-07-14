<?php

add_action("acf/init", "register_blocks");
function register_blocks()
{
  if (function_exists("acf_register_block_type")) {
    acf_register_block_type([
      "name" => "section",
      "title" => __("Section"),
      "description" => "Bloque de sección",
      "render_template" => "blocks/section.php",
      "category" => "main-blocks",
      "icon" => "admin-generic",
      "enqueue_style" => get_template_directory_uri() . "/blocks/section.css",
      "keywords" => ["section", "section block"]
    ]);
  };
}
