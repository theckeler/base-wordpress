<?php
add_filter('show_admin_bar', '__return_false'); #who needs it?
add_theme_support('post-thumbnails', array('post', 'page'));

include '_functions/front-load-scripts.php'; // load cleanest you can
include '_functions/menus.php';
include '_functions/mine-types.php';
include '_functions/post-types.php';
include '_functions/shortcodes.php';
include '_functions/blocks.php';
include '_functions/acf.php';
include '_functions/local.php';
include '_functions/meta-boxes.php';
include '_functions/sidebar.php';
include '_functions/posts.php';
include '_functions/load-more.php';
