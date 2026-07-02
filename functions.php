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

function mific_modern_sections() {
	return array(
		'institucion' => array(
			'title'       => 'Institución',
			'eyebrow'     => 'Conoce MIFIC',
			'description' => 'Somos la institución encargada de promover el desarrollo económico, industrial y comercial de Nicaragua.',
			'items'       => array(
				array( 'icon' => 'briefcase', 'title' => 'Misión', 'text' => 'Impulsar políticas, programas y servicios que fortalezcan la producción, el comercio y la inversión.' ),
				array( 'icon' => 'chart', 'title' => 'Visión', 'text' => 'Ser una institución moderna, cercana y eficiente para empresas, consumidores e inversionistas.' ),
				array( 'icon' => 'shield', 'title' => 'Valores', 'text' => 'Transparencia, calidad de servicio, innovación, responsabilidad y compromiso con la ciudadanía.' ),
			),
		),
		'servicios' => array(
			'title'       => 'Servicios',
			'eyebrow'     => 'Atención institucional',
			'description' => 'Accede a servicios orientados a industria, comercio, inversión, exportaciones y protección al consumidor.',
			'items'       => array(
				array( 'icon' => 'factory', 'title' => 'Industria', 'text' => 'Acompañamiento para el desarrollo industrial y manufacturero.' ),
				array( 'icon' => 'store', 'title' => 'Comercio', 'text' => 'Servicios para empresas, comercios y actividades económicas.' ),
				array( 'icon' => 'globe', 'title' => 'Exportaciones', 'text' => 'Apoyo para comercio exterior, oportunidades y mercados internacionales.' ),
				array( 'icon' => 'shield', 'title' => 'Protección al Consumidor', 'text' => 'Orientación y defensa de derechos de las personas consumidoras.' ),
			),
		),
		'tramites' => array(
			'title'       => 'Trámites',
			'eyebrow'     => 'Gestiones en línea',
			'description' => 'Consulta y realiza los trámites más solicitados de forma clara, rápida y segura.',
			'items'       => array(
				array( 'icon' => 'file', 'title' => 'Registro Empresarial', 'text' => 'Inscribe tu empresa y formaliza tus operaciones comerciales.' ),
				array( 'icon' => 'store', 'title' => 'Licencias Comerciales', 'text' => 'Gestiona permisos necesarios para operar tu negocio.' ),
				array( 'icon' => 'award', 'title' => 'Certificaciones', 'text' => 'Solicita certificaciones oficiales y documentos institucionales.' ),
				array( 'icon' => 'globe', 'title' => 'Comercio Exterior', 'text' => 'Accede a servicios relacionados con exportación e importación.' ),
			),
		),
		'noticias' => array(
			'title'       => 'Noticias',
			'eyebrow'     => 'Actualidad',
			'description' => 'Mantente informado sobre comunicados, eventos, programas y actividades institucionales.',
			'items'       => array(
				array( 'icon' => 'globe', 'title' => 'Comercio exterior', 'text' => 'Nuevas oportunidades comerciales y acuerdos de cooperación.' ),
				array( 'icon' => 'factory', 'title' => 'Industria nacional', 'text' => 'Programas de apoyo para fortalecer la producción nacional.' ),
				array( 'icon' => 'briefcase', 'title' => 'Eventos empresariales', 'text' => 'Ferias, encuentros y ruedas de negocio para emprendedores.' ),
			),
		),
		'transparencia' => array(
			'title'       => 'Transparencia',
			'eyebrow'     => 'Información pública',
			'description' => 'Consulta documentos, normativas, informes y recursos institucionales de acceso público.',
			'items'       => array(
				array( 'icon' => 'file', 'title' => 'Normativas', 'text' => 'Leyes, reglamentos, acuerdos y disposiciones relacionadas con el MIFIC.' ),
				array( 'icon' => 'chart', 'title' => 'Informes', 'text' => 'Datos institucionales, reportes de gestión y resultados de programas.' ),
				array( 'icon' => 'award', 'title' => 'Publicaciones', 'text' => 'Recursos, guías y documentos oficiales para consulta ciudadana.' ),
			),
		),
		'contacto' => array(
			'title'       => 'Contacto',
			'eyebrow'     => 'Estamos para ayudarte',
			'description' => 'Comunícate con nuestro equipo para recibir asistencia sobre servicios, trámites y consultas institucionales.',
			'items'       => array(
				array( 'icon' => 'store', 'title' => 'Dirección', 'text' => 'Km. 6 Carretera a Masaya, Managua, Nicaragua.' ),
				array( 'icon' => 'file', 'title' => 'Teléfono', 'text' => '+505 2248-9300' ),
				array( 'icon' => 'briefcase', 'title' => 'Correo', 'text' => 'info@mific.gob.ni' ),
			),
		),
	);
}

function mific_modern_current_section_slug() {
	$path = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) ), PHP_URL_PATH ) : '';
	$slug = trim( (string) $path, '/' );

	if ( false !== strpos( $slug, '/' ) ) {
		$parts = explode( '/', $slug );
		$slug  = end( $parts );
	}

	return sanitize_key( $slug );
}

function mific_modern_section_template( $template ) {
	$sections = mific_modern_sections();
	$slug     = mific_modern_current_section_slug();

	if ( isset( $sections[ $slug ] ) ) {
		global $wp_query;

		if ( $wp_query ) {
			$wp_query->is_404 = false;
		}

		status_header( 200 );
		return get_template_directory() . '/section-page.php';
	}

	return $template;
}
add_filter( 'template_include', 'mific_modern_section_template', 20 );

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
		$slug         = sanitize_key( remove_accents( $label ) );
		$current_slug = mific_modern_current_section_slug();
		$class        = ( ( '' === $current_slug && 'Inicio' === $label ) || $current_slug === $slug ) ? ' class="is-active"' : '';
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
