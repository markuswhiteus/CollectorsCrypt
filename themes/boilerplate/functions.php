<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('production', get_theme_file_uri() . '/dist/js/production-dist.js', ['jquery'], '', true);
});

// function add_defer_attribute($tag, $handle) {
// 	// add script handles to the array below
// 	// $scripts_to_defer = array('production');

// 	foreach($scripts_to_defer as $defer_script) {
// 	   if ($defer_script === $handle) {
// 		  return str_replace(' src', ' defer src', $tag);
// 	   }
// 	}
// 	return $tag;
// }
// add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);

add_filter('use_block_editor_for_post', '__return_false');

add_action('after_setup_theme', function () {
  add_theme_support( 'woocommerce' );

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
// add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	// unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 10 );
add_action( 'after_setup_theme', 'my_remove_product_result_count', 99 );
function my_remove_product_result_count() { 
    remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );
    remove_action( 'woocommerce_after_shop_loop' , 'woocommerce_result_count', 20 );
}
function desktop_register_widgets_init() {
  register_sidebar( array(
      'name'          => __( 'Main Sidebar', 'textdomain' ),
      'id'            => 'sidebar-1',
      'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget'  => '</li>',
      'before_title'  => '<h2 class="widgettitle">',
      'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'desktop_register_widgets_init' );

remove_filter( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);

function woocommerce_template_loop_product_link_open_custom() {
  global $product;

  $link = apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product );

  echo '<a href="' . esc_url( $link ) . '" class="product-block woocommerce-LoopProduct-link woocommerce-loop-product__link">';
}

add_filter( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open_custom', 10);

add_action('wp_footer', function() {
  ?>
  <script>
      window.addEventListener('load', (e) => {
          document.querySelectorAll('.woof_container_inner h4').forEach(function (h) {
              if (h.querySelector('a.woof_front_toggle')) {
                  h.style.cursor = 'pointer';
                  h.addEventListener('click', function (e) {
                      h.querySelector('a.woof_front_toggle').click();
                      return false;
                  });

              }
          });
      });
  </script>
  <?php
});