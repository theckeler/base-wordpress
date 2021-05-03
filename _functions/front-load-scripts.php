<?php
#Adding important scripts and removing the bloat.

function frontend_load_scripts()
{
    if (!is_admin()) :
        wp_enqueue_script('jquery');

        wp_enqueue_style('slick-css', get_bloginfo('template_directory') . '/_wp-plugins/slick/slick.min.css', '', '3.0', false);
        wp_enqueue_script('slick-js', get_bloginfo('template_directory') . '/_wp-plugins/slick/slick.min.js', '', '3.0', false);

        if ($_SERVER['SERVER_PORT'] == '8080') :
            wp_enqueue_style('css-new', get_bloginfo('template_directory') . '/style.css', '', '1.0', false);
        else :
            wp_enqueue_style('css-new', get_bloginfo('template_directory') . '/style.min.css', '', '1.0', false);
        endif;

        wp_dequeue_style('cfs-input');
        wp_dequeue_style('jquery-powertip');
        wp_dequeue_script('jquery-powertip');
        wp_dequeue_script('cfs-validation');

        wp_dequeue_script('jquery-ui-core');
        wp_dequeue_script('jquery-ui-sortable');
        wp_dequeue_script('jquery-ui-datepicker');

        wp_dequeue_style('select2');
        wp_deregister_style('select2');
        wp_dequeue_script('select2');
        wp_deregister_script('select2');

        wp_deregister_style('dashicons');

        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');

        # wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js', array(), null, true);

        if ($_SERVER['SERVER_PORT'] == '8080') :
            wp_enqueue_script('main-js', get_bloginfo('template_directory') . '/_js/main.js', '', null, true);
        else :
            wp_enqueue_script('main-js', get_bloginfo('template_directory') . '/_js/main.min.js', '', null, true);
        endif;

        wp_localize_script('main-js', 'ajaxurl', admin_url('admin-ajax.php'));
    endif;
}
add_action('wp_enqueue_scripts', 'frontend_load_scripts', 999999);
