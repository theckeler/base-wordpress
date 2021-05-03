<?
## Modify Post Types

/*
add_theme_support('post-thumbnails', array('resources'));
function create_posttype()
{

	register_post_type(
		'resources',
		array(
			'labels' => array(
				'name' => __('Resources'),
				'singular_name' => __('Resource'),
				'add_new' => __('Add New Resource'),
				'add_new_item' => __('Add New Resource'),
				'edit_item' => __('Edit Resource'),
			),
			'public'             => true,
			'publicly_queryable' => false,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'supports'           => array('title', 'editor', 'author', 'thumbnail'),
			'menu_icon'          => 'dashicons-images-alt',
			'menu_position' => 20,
		)
	);

	register_taxonomy('resources', 'gallery', array(
		'hierarchical' => false,
		'show_ui' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array('slug' => 'resource-type'),
	));
	register_taxonomy('resource-type', 'resources', array('hierarchical' => true, 'label' => 'Resource Type', 'query_var' => true, 'rewrite' => true));
	
}
add_action('init', 'create_posttype');
*/
