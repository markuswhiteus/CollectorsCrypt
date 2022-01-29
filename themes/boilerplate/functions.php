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
  add_theme_support( 'woocommerce', array(
    'thumbnail_image_width' => 225,
    'single_image_width' => 255,
    'product_grid' => array(
      'default_rows' => 6,
      'min_rows' => 1,
      'max_rows' => 9,
      'default_columns' => 4,
      'min_columns' => 4,
      'max_columns' => 4,
    )
      ) );

// Custom image sizes

    add_image_size( 'img-2000-650', 2000, 650, true );
    add_image_size( 'img-1200-500', 1200, 500, true );
    add_image_size( 'img-600-600', 600, 600, true );
    add_image_size( 'img-350-350', 350, 350, true );

    // More navs

    register_nav_menus([
        'secondary' => __('Secondary Menu', 'mhdesign')
    ]);
    function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'nav-left' => __( 'Nav Bar Left' ),
      'nav-right' => __( 'Nav Bar Right' ),
      'nav-mobile' => __( 'Mobile Nav' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

});

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

add_theme_support( 'post-thumbnails' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

add_filter( 'woocommerce_product_tabs', 'my_remove_description_tab', 11 );
 
function my_remove_description_tab( $tabs ) {
  unset( $tabs['description'] );
  return $tabs;
}

/**
 * Remove related products output
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );