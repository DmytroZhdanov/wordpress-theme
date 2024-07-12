<?php
if (!defined("ABSPATH")) exit;

// Define constants
if (!defined("_VERSION")) {
  define("_VERSION", "1.0.0");
}

// Include styles and scripts
require get_template_directory() . "/inc/_custom.php";

// Register menu
require get_template_directory() . "/inc/_menus.php";
