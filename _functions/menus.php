<?
## Modify Menus
function register_nav_menus_function()
{
	register_nav_menus(
		array(
			'main' => __('Main'),
			'footer' => __('Footer'),
		)
	);
}
add_action('after_setup_theme', 'register_nav_menus_function', 0);
