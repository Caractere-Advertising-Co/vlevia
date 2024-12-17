<?php

add_filter('woocommerce_resize_images', static function() {
    return false;
});

// Menu 
register_nav_menus( array(
    'megamenu' => 'Mega Menu',
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
	'secondary' => 'Menu secondaire'
) );

add_theme_support( 'post-thumbnails' );

//SVG Files
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
       return $data;
    }
  
    $filetype = wp_check_filetype( $filename, $mimes );
  
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4 );
  
function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
  
function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}

add_filter( 'upload_mimes', 'cc_mime_types' );
add_action( 'admin_head', 'fix_svg' );

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function enqueue_custom_scripts() {
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/src/js/loadmore.js', array('jquery'), '', true);

    // Localisation du script AJAX
    wp_localize_script('custom-scripts', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}