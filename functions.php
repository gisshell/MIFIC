<?php
/**
 * Theme setup for MIFIC Modern.
 *
 * @package MIFIC_Modern
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function mific_modern_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 96,
		'width'       => 96,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	register_nav_menus( array(
		'primary' => __( 'Menú principal', 'mific-modern' ),
		'footer'  => __( 'Menú de footer', 'mific-modern' ),
	) );
}
add_action( 'after_setup_theme', 'mific_modern_setup' );

function mific_modern_assets() {
	wp_enqueue_style( 'mific-modern-style', get_stylesheet_uri(), array(), '1.0.0' );
	wp_enqueue_script( 'mific-modern-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'mific_modern_assets' );

function mific_modern_default_menu() {
	$items = array(
		'Inicio'        => home_url( '/' ),
		'Institución'   => home_url( '/institucion' ),
		'Servicios'     => home_url( '/servicios' ),
		'Trámites'      => home_url( '/tramites' ),
		'Noticias'      => home_url( '/noticias' ),
		'Transparencia' => home_url( '/transparencia' ),
		'Contacto'      => home_url( '/contacto' ),
	);

	echo '<ul class="menu">';
	foreach ( $items as $label => $url ) {
		$class = 'Inicio' === $label ? ' class="is-active"' : '';
		printf(
			'<li><a%s href="%s">%s</a></li>',
			$class,
			esc_url( $url ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}

function mific_modern_icon( $name ) {
	$icons = array(
		'search'      => '<svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"></circle><path d="m20 20-3.5-3.5"></path></svg>',
		'user'        => '<svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21a8 8 0 0 0-16 0"></path><circle cx="12" cy="7" r="4"></circle></svg>',
		'menu'        => '<svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7h16"></path><path d="M4 12h16"></path><path d="M4 17h16"></path></svg>',
		'arrow-right' => '<svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"></path><path d="m13 5 7 7-7 7"></path></svg>',
		'arrow-left'  => '<svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5"></path><path d="m11 19-7-7 7-7"></path></svg>',
		'factory'     => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 20h20"></path><path d="M4 20V9l6 4V9l6 4V5h4v15"></path><path d="M8 17h1"></path><path d="M13 17h1"></path></svg>',
		'store'       => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 10h16l-1-5H5z"></path><path d="M5 10v10h14V10"></path><path d="M9 20v-6h6v6"></path></svg>',
		'shield'      => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"></path><path d="m9 12 2 2 4-5"></path></svg>',
		'file'        => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><path d="M14 2v6h6"></path></svg>',
		'globe'       => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20"></path><path d="M12 2a15.3 15.3 0 0 1 0 20"></path><path d="M12 2a15.3 15.3 0 0 0 0 20"></path></svg>',
		'chart'       => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"></path><path d="m7 15 4-4 3 3 5-7"></path></svg>',
		'briefcase'   => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="7" width="18" height="13" rx="2"></rect><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><path d="M3 13h18"></path></svg>',
		'award'       => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="6"></circle><path d="M15.5 13.5 17 22l-5-3-5 3 1.5-8.5"></path></svg>',
	);

	return $icons[ $name ] ?? '';
}
