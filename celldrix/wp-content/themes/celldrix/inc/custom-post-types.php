<?php


 /*Custom Post type start*/
function cw_post_type_banner() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('Banner', 'plural'),
'singular_name' => _x('Banner', 'singular'),
'menu_name' => _x('Banner', 'admin menu'),
'name_admin_bar' => _x('Banner', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Banner'),
'new_item' => __('New Banner'),
'edit_item' => __('Edit Banner'),
'view_item' => __('View Banner'),
'all_items' => __('All Banner'),
'search_items' => __('Search Banner'),
'not_found' => __('No Banner found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'banner'),
'has_archive' => true,
'hierarchical' => false,
'menu_icon' => 'dashicons-format-image',
);
register_post_type('cpt_banner', $args);
}
add_action('init', 'cw_post_type_banner');




     /*Custom Post type start*/
function cw_post_type_product() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('Product', 'plural'),
'singular_name' => _x('Product', 'singular'),
'menu_name' => _x('Product', 'admin menu'),
'name_admin_bar' => _x('Product', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Product'),
'new_item' => __('New Product'),
'edit_item' => __('Edit Product'),
'view_item' => __('View Product'),
'all_items' => __('All Product'),
'search_items' => __('Search Product'),
'not_found' => __('No Product found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'product'),
'has_archive' => true,
'hierarchical' => false,
'menu_icon' => 'dashicons-screenoptions',
);
register_post_type('cpt_product', $args);
}
add_action('init', 'cw_post_type_product');



function cw_post_type_testimonials() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('Testimonials', 'plural'),
'singular_name' => _x('Testimonials', 'singular'),
'menu_name' => _x('Testimonials', 'admin menu'),
'name_admin_bar' => _x('Testimonials', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Testimonials'),
'new_item' => __('New Testimonials'),
'edit_item' => __('Edit Testimonials'),
'view_item' => __('View Testimonials'),
'all_items' => __('All Testimonials'),
'search_items' => __('Search Testimonials'),
'not_found' => __('No Testimonials found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'cpt_testimonials'),
'has_archive' => true,
'hierarchical' => false,
'menu_icon' => 'dashicons-format-quote',
);
register_post_type('cpt_testimonials', $args);
}
add_action('init', 'cw_post_type_testimonials');




