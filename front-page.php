<?php
/**
 * Front page template.
 *
 * @package MIFIC_Modern
 */

get_header();

$services = array(
	array( 'icon' => 'factory', 'title' => 'Industria', 'text' => 'Desarrollo industrial y manufacturero' ),
	array( 'icon' => 'store', 'title' => 'Comercio', 'text' => 'Servicios comerciales y empresariales' ),
	array( 'icon' => 'shield', 'title' => 'Protección al Consumidor', 'text' => 'Defensa de derechos del consumidor' ),
	array( 'icon' => 'file', 'title' => 'Registro', 'text' => 'Registro de empresas y comercios' ),
	array( 'icon' => 'globe', 'title' => 'Exportaciones', 'text' => 'Comercio exterior y exportaciones' ),
	array( 'icon' => 'chart', 'title' => 'Inversiones', 'text' => 'Oportunidades de inversión' ),
	array( 'icon' => 'briefcase', 'title' => 'Servicios Empresariales', 'text' => 'Apoyo integral al empresario' ),
	array( 'icon' => 'award', 'title' => 'Certificaciones', 'text' => 'Calidad y certificaciones oficiales' ),
);

$news = array(
	array( 'cat' => 'Comercio Exterior', 'date' => '15 Jun 2026', 'title' => 'Nicaragua incrementa exportaciones en 2026', 'text' => 'El sector exportador muestra un crecimiento del 15% en el primer trimestre del año.' ),
	array( 'cat' => 'Industria', 'date' => '12 Jun 2026', 'title' => 'Nuevos incentivos para la industria nacional', 'text' => 'MIFIC anuncia programa de apoyo a la manufactura local con beneficios fiscales.' ),
	array( 'cat' => 'Servicios', 'date' => '10 Jun 2026', 'title' => 'Simplificación de trámites empresariales', 'text' => 'Sistema digital permite completar registros en menos de 24 horas.' ),
	array( 'cat' => 'Eventos', 'date' => '8 Jun 2026', 'title' => 'Feria de emprendimiento e innovación 2026', 'text' => 'Más de 200 emprendedores participarán en el evento nacional de negocios.' ),
);

$procedures = array(
	array( 'icon' => 'file', 'title' => 'Registro Empresarial', 'text' => 'Inscribe tu empresa de forma rápida y segura' ),
	array( 'icon' => 'store', 'title' => 'Licencias Comerciales', 'text' => 'Obtén permisos para operar tu negocio' ),
	array( 'icon' => 'award', 'title' => 'Certificaciones', 'text' => 'Certifica la calidad de tus productos' ),
	array( 'icon' => 'globe', 'title' => 'Comercio Exterior', 'text' => 'Servicios de exportación e importación' ),
);
?>

<main id="primary">
	<section class="hero" aria-labelledby="hero-title">
		<div class="container hero-inner">
			<div>
				<span class="eyebrow">Gobierno de Nicaragua</span>
				<h1 id="hero-title">Impulsando el Desarrollo Económico de Nicaragua</h1>
				<p class="hero-copy">Promoviendo la industria, el comercio y las inversiones para un futuro próspero</p>
				<div class="hero-actions">
					<a class="button button-primary" href="<?php echo esc_url( home_url( '/tramites' ) ); ?>">Ver Trámites <?php echo mific_modern_icon( 'arrow-right' ); ?></a>
					<a class="button button-secondary" href="<?php echo esc_url( home_url( '/servicios' ) ); ?>">Servicios Institucionales</a>
				</div>
				<div class="hero-controls" aria-hidden="true">
					<button class="hero-control" type="button"><?php echo mific_modern_icon( 'arrow-left' ); ?></button>
					<div class="hero-dots">
						<span class="hero-dot is-active"></span>
						<span class="hero-dot"></span>
						<span class="hero-dot"></span>
					</div>
					<button class="hero-control" type="button"><?php echo mific_modern_icon( 'arrow-right' ); ?></button>
				</div>
			</div>

			<div class="hero-panel">
				<div class="impact-card">
					<span>Resultados 2026</span>
					<strong>45,000+</strong>
					<p>Trámites realizados a través de servicios institucionales y plataformas digitales.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="section" aria-labelledby="areas-title">
		<div class="container">
			<div class="section-head">
				<div>
					<span class="section-kicker">Servicios</span>
					<h2 class="section-title" id="areas-title">Áreas de Acción</h2>
					<p class="section-lead">Accede rápidamente a nuestros servicios</p>
				</div>
			</div>

			<div class="service-grid">
				<?php foreach ( $services as $service ) : ?>
					<a class="service-card" href="<?php echo esc_url( home_url( '/servicios' ) ); ?>">
						<span class="service-icon"><?php echo mific_modern_icon( $service['icon'] ); ?></span>
						<h3><?php echo esc_html( $service['title'] ); ?></h3>
						<p><?php echo esc_html( $service['text'] ); ?></p>
						<span class="text-link">Conocer más <?php echo mific_modern_icon( 'arrow-right' ); ?></span>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section-muted" aria-labelledby="news-title">
		<div class="container">
			<div class="section-head">
				<div>
					<span class="section-kicker">Actualidad</span>
					<h2 class="section-title" id="news-title">Noticias y Eventos</h2>
					<p class="section-lead">Mantente informado sobre nuestras últimas actividades</p>
				</div>
				<a class="button button-outline" href="<?php echo esc_url( home_url( '/noticias' ) ); ?>">Ver todas <?php echo mific_modern_icon( 'arrow-right' ); ?></a>
			</div>

			<div class="news-grid">
				<?php foreach ( $news as $post ) : ?>
					<article class="news-card">
						<div class="news-media"><?php echo mific_modern_icon( 'globe' ); ?></div>
						<div class="news-body">
							<div class="meta-row">
								<span class="badge"><?php echo esc_html( $post['cat'] ); ?></span>
								<span><?php echo esc_html( $post['date'] ); ?></span>
							</div>
							<h3><?php echo esc_html( $post['title'] ); ?></h3>
							<p><?php echo esc_html( $post['text'] ); ?></p>
							<a class="read-more" href="<?php echo esc_url( home_url( '/noticias' ) ); ?>">Leer más <?php echo mific_modern_icon( 'arrow-right' ); ?></a>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section" aria-labelledby="tramites-title">
		<div class="container">
			<div class="section-head">
				<div>
					<span class="section-kicker">Trámites</span>
					<h2 class="section-title" id="tramites-title">Trámites Destacados</h2>
					<p class="section-lead">Accede rápidamente a los trámites más solicitados</p>
				</div>
			</div>

			<div class="procedures-grid">
				<?php foreach ( $procedures as $procedure ) : ?>
					<article class="procedure-card">
						<span class="procedure-icon"><?php echo mific_modern_icon( $procedure['icon'] ); ?></span>
						<h3><?php echo esc_html( $procedure['title'] ); ?></h3>
						<p><?php echo esc_html( $procedure['text'] ); ?></p>
						<a class="button button-outline" href="<?php echo esc_url( home_url( '/tramites' ) ); ?>">Iniciar trámite</a>
					</article>
				<?php endforeach; ?>
			</div>

			<div class="center-action">
				<a class="button button-outline" href="<?php echo esc_url( home_url( '/tramites' ) ); ?>">Ver todos los trámites <?php echo mific_modern_icon( 'arrow-right' ); ?></a>
			</div>
		</div>
	</section>

	<section class="section section-blue" aria-labelledby="impact-title">
		<div class="container">
			<div class="section-head">
				<div>
					<span class="section-kicker">Resultados</span>
					<h2 class="section-title" id="impact-title">Nuestro Impacto</h2>
					<p class="section-lead">Resultados que transforman Nicaragua</p>
				</div>
			</div>
			<div class="stats-grid">
				<div class="stat-item"><span class="stat-number">45,000+</span><span class="stat-label">Trámites Realizados</span></div>
				<div class="stat-item"><span class="stat-number">12,500+</span><span class="stat-label">Empresas Atendidas</span></div>
				<div class="stat-item"><span class="stat-number">$850M</span><span class="stat-label">En Exportaciones</span></div>
				<div class="stat-item"><span class="stat-number">35,000+</span><span class="stat-label">Usuarios Registrados</span></div>
			</div>
		</div>
	</section>

	<section class="cta" aria-labelledby="assistance-title">
		<div class="container">
			<div class="cta-panel">
				<div>
					<h2 id="assistance-title">¿Necesitas Asistencia?</h2>
					<p>Nuestro equipo está listo para ayudarte con tus consultas y trámites.</p>
				</div>
				<div class="cta-actions">
					<a class="button button-outline" href="<?php echo esc_url( home_url( '/contacto' ) ); ?>">Contactar</a>
					<a class="button button-outline" href="<?php echo esc_url( home_url( '/tramites' ) ); ?>">Ver Guías de Trámites</a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
