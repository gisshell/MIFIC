<?php
/**
 * Header template.
 *
 * @package MIFIC_Modern
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="site-shell">
	<header class="site-header">
		<div class="container header-inner">
			<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Inicio MIFIC', 'mific-modern' ); ?>">
				<span class="brand-mark">M</span>
				<span>
					<span class="brand-title">MIFIC</span>
					<span class="brand-subtitle">Ministerio de Fomento, Industria y Comercio</span>
				</span>
			</a>

			<nav class="main-navigation" id="site-navigation" aria-label="<?php esc_attr_e( 'Menú principal', 'mific-modern' ); ?>">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'menu',
					'fallback_cb'    => 'mific_modern_default_menu',
				) );
				?>
			</nav>

			<div class="header-tools">
				<form class="site-search" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<label class="screen-reader-text" for="mific-search"><?php esc_html_e( 'Buscar', 'mific-modern' ); ?></label>
					<?php echo mific_modern_icon( 'search' ); ?>
					<input id="mific-search" type="search" name="s" placeholder="<?php esc_attr_e( 'Buscar...', 'mific-modern' ); ?>">
				</form>

				<a class="account-link" href="<?php echo esc_url( wp_login_url() ); ?>" aria-label="<?php esc_attr_e( 'Acceso de usuario', 'mific-modern' ); ?>">
					<?php echo mific_modern_icon( 'user' ); ?>
				</a>

				<button class="menu-toggle" type="button" aria-controls="site-navigation" aria-expanded="false" aria-label="<?php esc_attr_e( 'Abrir menú', 'mific-modern' ); ?>">
					<?php echo mific_modern_icon( 'menu' ); ?>
				</button>
			</div>
		</div>
	</header>
