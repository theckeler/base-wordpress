<?php
## Modify Sidebars

add_action('widgets_init', 'my_register_sidebars');
function my_register_sidebars()
{
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __('Sidebar'),
            'description'   => __(''),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<strong class="title">',
            'after_title'   => '</strong>',
        )
    );
}

add_filter('widget_categories_args', function ($args) {
    $args['number']         = 12;
    $args['orderby']        = 'count';
    $args['order']          = 'DESC';
    $args['hierarchical']   = 0;
    $args['hide_empty']     = 1;

    return $args;
});

add_filter('wp_list_categories', 'cat_count_span');
function cat_count_span($links)
{
    $links = str_replace('</a>', '', $links);
    $links = str_replace('</li>', '</a></li>', $links);
    return $links;
}

add_filter('get_archives_link', 'archive_count_span');
function archive_count_span($links)
{
    $links = str_replace('</a>&nbsp;(', ' (', $links);
    $links = str_replace(')', ')</a>', $links);
    return $links;
}
