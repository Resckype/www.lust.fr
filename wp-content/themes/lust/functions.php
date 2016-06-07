<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );

define('_URL_IMAGES', get_stylesheet_directory_uri().'/assets/images/');

// --> Changement d'ordre on met le prix au dessus du titre
    // 1. Supprime l'action initiale d'affichage du titre
        remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
    // 2. Je change sa priorité
        add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 1);


// --> Titre du produit sur l'image...
    // 1. On enleve le titre du produit du DIV concerné
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
    // 2. fonction rajouté dans le fichier single-product/product-image.php

function my_slider() {
    if (is_front_page() || is_home())
    {
        get_template_part( 'template-parts/slider' );

    }
}
add_action('foundationpress_after_header', 'my_slider', 10);
function custom_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_action( 'widgets_init', 'header_sidebar_for_nav' );
function header_sidebar_for_nav() {
  register_sidebar(
    array(
      'name'          => ( 'Header Sidebar'),
      'id'            => 'header-sidebar',
      'description'   => "Mettre un widget,de recherche ici, pour qu'une barre de recherche apparaisse dans le menu",
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<div class="search-widget">',
      'after_title'   => '</div>',
    )
  );
  register_sidebar(
    array(
      'name'          => ('Footer Sidebar 1'),
      'id'            => 'footer-sidebar-one',
      'description'   => "Personnaliser le footer",
      'before_widget' => '<div class="widget footer-menu">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
    )
  );
  register_sidebar(
    array(
      'name'          => ('Footer Sidebar 2'),
      'id'            => 'footer-sidebar-two',
      'description'   => "Personnaliser le footer",
      'before_widget' => '<div class="widget footer-menu">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
    )
  );
  register_sidebar(
    array(
      'name'          => ('Footer Sidebar 3'),
      'id'            => 'footer-sidebar-three',
      'description'   => "Personnaliser le footer",
      'before_widget' => '<div class="widget ">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => ('Actualités Sidebar'),
      'id'            => 'blog-sidebar',
      'description'   => "Personnaliser la sidebar du blog",
      'before_widget' => '<div class="widget ">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
    )
  );
}
