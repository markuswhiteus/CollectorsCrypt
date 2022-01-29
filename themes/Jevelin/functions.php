<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('production', get_theme_file_uri() . '/dist/js/production-dist.js', ['jquery'], '', true);
});

function add_defer_attribute($tag, $handle) {
	// add script handles to the array below
	$scripts_to_defer = array('production');

	foreach($scripts_to_defer as $defer_script) {
	   if ($defer_script === $handle) {
		  return str_replace(' src', ' defer src', $tag);
	   }
	}
	return $tag;
}
add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);

add_filter('use_block_editor_for_post', '__return_false');

add_action('after_setup_theme', function () {

// Custom image sizes

    add_image_size( 'img-2000-650', 2000, 650, true );
    add_image_size( 'img-1200-500', 1200, 500, true );
    add_image_size( 'img-600-600', 600, 600, true );
    add_image_size( 'img-350-350', 350, 350, true );

    // More navs

    register_nav_menus([
        'secondary' => __('Secondary Menu', 'mhdesign')
    ]);

});

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

add_theme_support( 'post-thumbnails' );