<?php
/**
 * Virtual section page template based on the Figma prototype.
 *
 * @package MIFIC_Modern
 */

$sections = mific_modern_sections();
$slug     = mific_modern_current_section_slug();
$section  = $sections[ $slug ] ?? null;

$figma_sections = array(
	'institucion'   => array( 'title' => 'Nuestra Institución', 'nav_label' => 'Institución', 'description' => 'Conoce al Ministerio de Fomento, Industria y Comercio de Nicaragua' ),
	'servicios'     => array( 'title' => 'Nuestros Servicios', 'nav_label' => 'Servicios', 'description' => 'Soluciones integrales para el desarrollo empresarial y comercial de Nicaragua' ),
	'tramites'      => array( 'title' => 'Trámites y Servicios', 'nav_label' => 'Trámites', 'description' => 'Encuentra y completa tus trámites de forma rápida y sencilla' ),
	'noticias'      => array( 'title' => 'Noticias y Eventos', 'nav_label' => 'Noticias', 'description' => 'Mantente informado sobre las últimas novedades del MIFIC' ),
	'transparencia' => array( 'title' => 'Transparencia', 'nav_label' => 'Transparencia', 'description' => 'Información pública accesible para todos los ciudadanos' ),
	'contacto'      => array( 'title' => 'Contáctanos', 'nav_label' => 'Contacto', 'description' => 'Estamos aquí para ayudarte. Envíanos tu consulta o comentario' ),
);

if ( isset( $figma_sections[ $slug ] ) ) {
	$section = $figma_sections[ $slug ];
}

if ( ! $section ) {
	get_template_part( 'index' );
	return;
}

if ( ! function_exists( 'mific_modern_page_hero' ) ) {
	function mific_modern_page_hero( $section ) {
		?>
		<section class="page-hero" aria-labelledby="page-title">
			<div class="container page-hero-inner">
				<div class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a><span><?php echo esc_html( $section['nav_label'] ?? $section['title'] ); ?></span></div>
				<span class="eyebrow"><?php echo esc_html( $section['nav_label'] ?? $section['title'] ); ?></span>
				<h1 id="page-title"><?php echo esc_html( $section['title'] ); ?></h1>
				<p><?php echo esc_html( $section['description'] ); ?></p>
			</div>
		</section>
		<?php
	}
}

get_header();
?>

<main id="primary">
	<?php mific_modern_page_hero( $section ); ?>

	<?php if ( 'institucion' === $slug ) : ?>
		<section class="section">
			<div class="container split-section">
				<div>
					<span class="section-kicker">Sobre el MIFIC</span>
					<h2 class="section-title">Sobre el MIFIC</h2>
					<p>El Ministerio de Fomento, Industria y Comercio (MIFIC) es la institución del Estado de Nicaragua encargada de formular, proponer, dirigir, coordinar y evaluar las políticas de Estado en materia de fomento, industria y comercio, asegurando su coherencia con la política económica nacional.</p>
					<p>Nuestro ministerio trabaja para impulsar el desarrollo económico sostenible del país, promoviendo la competitividad empresarial, facilitando el comercio nacional e internacional, y garantizando la protección de los derechos de los consumidores nicaragüenses.</p>
					<p>A través de nuestras distintas direcciones y programas, brindamos servicios de calidad a empresarios, emprendedores, exportadores e importadores, contribuyendo al crecimiento económico y la generación de empleos en Nicaragua.</p>
				</div>
				<div class="mission-stack">
					<article class="info-card">
						<span class="service-icon"><?php echo mific_modern_icon( 'briefcase' ); ?></span>
						<h3>Misión</h3>
						<p>Formular, proponer y ejecutar políticas que promuevan el desarrollo industrial y comercial de Nicaragua, facilitando la inversión, protegiendo a consumidores y fomentando el comercio.</p>
					</article>
					<article class="info-card">
						<span class="service-icon"><?php echo mific_modern_icon( 'chart' ); ?></span>
						<h3>Visión</h3>
						<p>Ser reconocidos como una institución moderna, eficiente y transparente, líder en la promoción del desarrollo económico sostenible.</p>
					</article>
				</div>
			</div>
		</section>

		<section class="section section-muted">
			<div class="container">
				<div class="section-head">
					<div>
						<span class="section-kicker">Principios</span>
						<h2 class="section-title">Nuestros Valores</h2>
						<p class="section-lead">Los principios que guían nuestro trabajo</p>
					</div>
				</div>
				<div class="service-grid compact-grid">
					<?php
					$values = array(
						array( 'icon' => 'award', 'title' => 'Excelencia', 'text' => 'Compromiso con la calidad en todos nuestros servicios' ),
						array( 'icon' => 'briefcase', 'title' => 'Servicio', 'text' => 'Atención centrada en las necesidades de los ciudadanos' ),
						array( 'icon' => 'shield', 'title' => 'Transparencia', 'text' => 'Gestión honesta y accesible para todos' ),
						array( 'icon' => 'chart', 'title' => 'Innovación', 'text' => 'Modernización constante de procesos y servicios' ),
					);
					foreach ( $values as $value ) :
						?>
						<article class="service-card">
							<span class="service-icon"><?php echo mific_modern_icon( $value['icon'] ); ?></span>
							<h3><?php echo esc_html( $value['title'] ); ?></h3>
							<p><?php echo esc_html( $value['text'] ); ?></p>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="container two-column-panels">
				<div>
					<span class="section-kicker">Metas</span>
					<h2 class="section-title">Objetivos Estratégicos</h2>
					<p class="section-lead">Nuestras metas para el desarrollo de Nicaragua</p>
					<div class="number-list">
						<?php
						$objectives = array(
							'Promover el desarrollo industrial y comercial sostenible',
							'Facilitar el comercio exterior y las exportaciones',
							'Proteger los derechos de los consumidores',
							'Atraer y promover inversiones nacionales e internacionales',
							'Modernizar los procesos de registro empresarial',
							'Fortalecer la competitividad de las empresas nicaragüenses',
						);
						foreach ( $objectives as $index => $objective ) :
							?>
							<div class="number-item"><span><?php echo esc_html( (string) ( $index + 1 ) ); ?></span><p><?php echo esc_html( $objective ); ?></p></div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="directory-panel">
					<h2>Estructura Organizacional</h2>
					<p>El MIFIC cuenta con diversas direcciones especializadas para cumplir con su mandato institucional</p>
					<ul class="pill-list">
						<li>Dirección General de Fomento Empresarial</li>
						<li>Dirección de Industria</li>
						<li>Dirección de Comercio Interior</li>
						<li>Dirección de Comercio Exterior</li>
						<li>Dirección de Protección al Consumidor</li>
						<li>Dirección de Inversiones y Exportaciones</li>
						<li>Registro Mercantil Nacional</li>
						<li>Dirección de Normalización y Metrología</li>
					</ul>
				</div>
			</div>
		</section>

	<?php elseif ( 'servicios' === $slug ) : ?>
		<section class="section servicios-section">
			<div class="container">
				<div class="service-detail-grid">
					<?php
					$services = array(
						array( 'tone' => 'blue', 'icon' => 'factory', 'title' => 'Desarrollo Industrial', 'text' => 'Fomentamos el crecimiento del sector industrial nicaragüense', 'office' => 'Dir. de Industria', 'phone' => '+505 2248-9310', 'email' => 'industria@mific.gob.ni', 'items' => array( 'Registro y formalización de industrias', 'Asesoría técnica y legal', 'Incentivos fiscales', 'Programas de capacitación' ) ),
						array( 'tone' => 'cyan', 'icon' => 'store', 'title' => 'Comercio Nacional', 'text' => 'Servicios para el desarrollo del comercio interno', 'office' => 'Dir. de Comercio', 'phone' => '+505 2248-9320', 'email' => 'comercio@mific.gob.ni', 'items' => array( 'Licencias comerciales', 'Registro de comerciantes', 'Normativas comerciales', 'Resolución de conflictos' ) ),
						array( 'tone' => 'green', 'icon' => 'shield', 'title' => 'Protección al Consumidor', 'text' => 'Defensa de los derechos de los consumidores nicaragüenses', 'office' => 'Dir. de Protección al Consumidor', 'phone' => '+505 2248-9330', 'email' => 'consumidor@mific.gob.ni', 'items' => array( 'Atención de denuncias', 'Mediación de conflictos', 'Información de derechos', 'Inspecciones y verificaciones' ) ),
						array( 'tone' => 'orange', 'icon' => 'chart', 'title' => 'Comercio Exterior', 'text' => 'Facilitamos las exportaciones e importaciones', 'office' => 'Dir. de Comercio Exterior', 'phone' => '+505 2248-9340', 'email' => 'exterior@mific.gob.ni', 'items' => array( 'Registro de exportadores', 'Certificados de origen', 'Tratados comerciales', 'Promoción de exportaciones' ) ),
						array( 'tone' => 'purple', 'icon' => 'chart', 'title' => 'Inversiones', 'text' => 'Promoción y atracción de inversiones en Nicaragua', 'office' => 'Dir. de Inversiones', 'phone' => '+505 2248-9350', 'email' => 'inversiones@mific.gob.ni', 'items' => array( 'Oportunidades de inversión', 'Incentivos y beneficios', 'Asesoría a inversionistas', 'Zonas francas' ) ),
						array( 'tone' => 'indigo', 'icon' => 'file', 'title' => 'Registro Mercantil', 'text' => 'Inscripción y legalización de empresas', 'office' => 'Dir. de Registro Mercantil', 'phone' => '+505 2248-9360', 'email' => 'registro@mific.gob.ni', 'items' => array( 'Registro de sociedades', 'Certificaciones legales', 'Modificaciones societarias', 'Consulta de registros' ) ),
						array( 'tone' => 'pink', 'icon' => 'briefcase', 'title' => 'Capacitación Empresarial', 'text' => 'Programas de formación para emprendedores', 'office' => 'Dir. de Capacitación', 'phone' => '+505 2248-9370', 'email' => 'capacitacion@mific.gob.ni', 'items' => array( 'Cursos y talleres', 'Asesoría técnica', 'Mentorías empresariales', 'Material educativo' ) ),
						array( 'tone' => 'teal', 'icon' => 'award', 'title' => 'Certificaciones y Calidad', 'text' => 'Certificación de productos y procesos', 'office' => 'Dir. de Normalización', 'phone' => '+505 2248-9380', 'email' => 'calidad@mific.gob.ni', 'items' => array( 'Certificación de calidad', 'Normas técnicas', 'Acreditación de laboratorios', 'Metrología legal' ) ),
					);
					foreach ( $services as $service ) :
						?>
						<article class="detail-card service-detail-card service-<?php echo esc_attr( $service['tone'] ); ?>">
							<div class="service-card-heading">
								<span class="service-color-icon"><?php echo mific_modern_icon( $service['icon'] ); ?></span>
								<div>
									<h3><?php echo esc_html( $service['title'] ); ?></h3>
									<p><?php echo esc_html( $service['text'] ); ?></p>
								</div>
							</div>
							<h4>Servicios incluidos:</h4>
							<ul><?php foreach ( $service['items'] as $item ) : ?><li><?php echo esc_html( $item ); ?></li><?php endforeach; ?></ul>
							<h4>Información de contacto:</h4>
							<div class="contact-lines">
								<span><?php echo esc_html( $service['office'] ); ?></span>
								<a href="tel:<?php echo esc_attr( $service['phone'] ); ?>"><?php echo esc_html( $service['phone'] ); ?></a>
								<a href="mailto:<?php echo esc_attr( $service['email'] ); ?>"><?php echo esc_html( $service['email'] ); ?></a>
							</div>
							<button class="service-more" type="button">Más información <?php echo mific_modern_icon( 'arrow-right' ); ?></button>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
		<section class="section section-muted">
			<div class="container two-column-panels">
				<div class="info-card"><h3>Horario de Atención</h3><div class="schedule-row"><span>Lunes - Viernes</span><strong>8:00 AM - 5:00 PM</strong></div><div class="schedule-row"><span>Sábado</span><strong>8:00 AM - 12:00 PM</strong></div><div class="schedule-row"><span>Domingo</span><strong>Cerrado</strong></div><p><strong>Nota:</strong> Algunos servicios están disponibles 24/7 en nuestra plataforma digital.</p></div>
				<div class="info-card"><h3>Contacto Rápido</h3><p>Central Telefónica:</p><a class="big-link" href="tel:+50522489300">+505 2248-9300</a><p>Correo General:</p><a class="big-link" href="mailto:info@mific.gob.ni">info@mific.gob.ni</a><button class="button button-outline" type="button">Línea gratuita: 800-MIFIC</button></div>
			</div>
		</section>

	<?php elseif ( 'tramites' === $slug ) : ?>
		<section class="section tramites-section">
			<div class="container">
				<div class="tramites-toolbar">
					<p class="result-count">8 trámite(s) encontrado(s)</p>
					<a class="guide-button" href="#">
						<svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><path d="M7 10l5 5 5-5"></path><path d="M12 15V3"></path></svg>
						Descargar Guía
					</a>
				</div>
				<div class="procedure-list-grid">
					<?php
					$procedures = array(
						array( 'level' => 'Medio', 'tone' => 'blue', 'icon' => 'file', 'title' => 'Registro de Empresa', 'text' => 'Inscripción y registro legal de nuevas empresas y sociedades mercantiles', 'time' => '24-48 horas', 'req' => array( 'Documento de identidad', 'Escritura de constitución', '+1 más' ) ),
						array( 'level' => 'Fácil', 'tone' => 'green', 'icon' => 'award', 'title' => 'Licencia Comercial', 'text' => 'Permisos necesarios para operar establecimientos comerciales', 'time' => '3-5 días', 'req' => array( 'Registro empresarial', 'Solvencia fiscal', '+1 más' ) ),
						array( 'level' => 'Alto', 'tone' => 'purple', 'icon' => 'shield', 'title' => 'Certificación de Calidad', 'text' => 'Certificación de productos y servicios según normas nacionales', 'time' => '15-20 días', 'req' => array( 'Muestras del producto', 'Documentación técnica', '+1 más' ) ),
						array( 'level' => 'Medio', 'tone' => 'orange', 'icon' => 'chart', 'title' => 'Registro de Exportador', 'text' => 'Inscripción para realizar actividades de exportación comercial', 'time' => '5-7 días', 'req' => array( 'RUC activo', 'Registro mercantil', '+1 más' ) ),
						array( 'level' => 'Medio', 'tone' => 'indigo', 'icon' => 'file', 'title' => 'Permiso de Importación', 'text' => 'Autorización para importar mercancías y productos', 'time' => '3-5 días', 'req' => array( 'Factura comercial', 'Certificado de origen', '+1 más' ) ),
						array( 'level' => 'Alto', 'tone' => 'pink', 'icon' => 'briefcase', 'title' => 'Registro de Marca', 'text' => 'Protección legal de marcas comerciales y patentes', 'time' => '60-90 días', 'req' => array( 'Diseño de marca', 'Búsqueda de anterioridad', '+1 más' ) ),
						array( 'level' => 'Fácil', 'tone' => 'teal', 'icon' => 'shield', 'title' => 'Denuncia de Consumidor', 'text' => 'Presentación de quejas y reclamos de consumidores', 'time' => '24 horas', 'req' => array( 'Identificación personal', 'Comprobante de compra', '+1 más' ) ),
						array( 'level' => 'Fácil', 'tone' => 'blue', 'icon' => 'globe', 'title' => 'Certificado de Origen', 'text' => 'Documento que certifica el origen de mercancías', 'time' => '2-3 días', 'req' => array( 'Factura comercial', 'Declaración jurada', '+1 más' ) ),
					);
					foreach ( $procedures as $procedure ) :
						?>
						<article class="procedure-result-card procedure-<?php echo esc_attr( $procedure['tone'] ); ?>">
							<div class="procedure-card-top">
								<span class="procedure-color-icon"><?php echo mific_modern_icon( $procedure['icon'] ); ?></span>
								<span class="difficulty"><?php echo esc_html( $procedure['level'] ); ?></span>
							</div>
							<h3><?php echo esc_html( $procedure['title'] ); ?></h3>
							<p><?php echo esc_html( $procedure['text'] ); ?></p>
							<div class="time-row"><strong>Tiempo:</strong><span><?php echo esc_html( $procedure['time'] ); ?></span></div>
							<p><strong>Requisitos principales:</strong></p>
							<ul><?php foreach ( $procedure['req'] as $req ) : ?><li><?php echo esc_html( $req ); ?></li><?php endforeach; ?></ul>
							<a class="procedure-action" href="#">Iniciar trámite <?php echo mific_modern_icon( 'arrow-right' ); ?></a>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

	<?php elseif ( 'noticias' === $slug ) : ?>
		<section class="section">
			<div class="container">
				<div class="section-head">
					<div><span class="section-kicker">8 noticia(s) encontrada(s)</span><h2 class="section-title">Destacadas</h2></div>
					<select class="compact-select"><option>Todas las categorías</option></select>
				</div>
				<div class="featured-news-grid">
					<?php
					$featured = array(
						array( 'cat' => 'Comercio Exterior', 'date' => '15 Jun 2026', 'title' => 'Nicaragua incrementa exportaciones en el primer trimestre 2026', 'text' => 'El sector exportador nicaragüense muestra un crecimiento del 15% durante los primeros tres meses del año, impulsado principalmente por café, carne y productos textiles.', 'tags' => array( 'Exportaciones', 'Economía', 'Comercio' ) ),
						array( 'cat' => 'Industria', 'date' => '12 Jun 2026', 'title' => 'Nuevos incentivos fiscales para el sector industrial', 'text' => 'MIFIC anuncia paquete de beneficios tributarios para promover la inversión en manufactura local y fortalecer la cadena productiva nacional.', 'tags' => array( 'Industria', 'Incentivos', 'Inversión' ) ),
					);
					foreach ( $featured as $post ) :
						?>
						<article class="featured-news-card">
							<div class="news-media"><?php echo mific_modern_icon( 'globe' ); ?></div>
							<div class="news-body">
								<div class="meta-row"><span class="badge"><?php echo esc_html( $post['cat'] ); ?></span><span>Destacada</span><span><?php echo esc_html( $post['date'] ); ?></span><span>5 min lectura</span></div>
								<h3><?php echo esc_html( $post['title'] ); ?></h3>
								<p><?php echo esc_html( $post['text'] ); ?></p>
								<div class="tag-row"><?php foreach ( $post['tags'] as $tag ) : ?><span><?php echo esc_html( $tag ); ?></span><?php endforeach; ?></div>
								<button class="read-more" type="button">Leer más <?php echo mific_modern_icon( 'arrow-right' ); ?></button>
							</div>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
		<section class="section section-muted">
			<div class="container">
				<h2 class="section-title">Todas las noticias</h2>
				<div class="news-list">
					<?php
					$news = array(
						array( 'cat' => 'Servicios', 'date' => '10 Jun 2026', 'title' => 'Plataforma digital simplifica trámites empresariales', 'text' => 'Nuevo sistema permite completar registros empresariales en menos de 24 horas.' ),
						array( 'cat' => 'Eventos', 'date' => '8 Jun 2026', 'title' => 'Feria Nacional de Emprendimiento e Innovación 2026', 'text' => 'Más de 200 emprendedores participarán en el evento nacional de negocios.' ),
						array( 'cat' => 'Normativa', 'date' => '5 Jun 2026', 'title' => 'Nueva normativa de protección al consumidor', 'text' => 'Entra en vigencia ley que fortalece los derechos de los consumidores.' ),
						array( 'cat' => 'Comercio Exterior', 'date' => '3 Jun 2026', 'title' => 'Acuerdo comercial con nuevos mercados asiáticos', 'text' => 'Nicaragua firma tratado que abre oportunidades para exportadores nacionales.' ),
						array( 'cat' => 'Servicios', 'date' => '1 Jun 2026', 'title' => 'Capacitación gratuita para PyMEs en gestión empresarial', 'text' => 'Programa de formación para fortalecer capacidades administrativas y financieras.' ),
						array( 'cat' => 'Eventos', 'date' => '28 May 2026', 'title' => 'Reconocimiento a empresas con certificación de calidad', 'text' => 'El ministerio premiará a empresas con certificaciones internacionales de calidad.' ),
					);
					foreach ( $news as $item ) :
						?>
						<article class="news-row-card"><span class="badge"><?php echo esc_html( $item['cat'] ); ?></span><span><?php echo esc_html( $item['date'] ); ?></span><h3><?php echo esc_html( $item['title'] ); ?></h3><p><?php echo esc_html( $item['text'] ); ?></p><button class="read-more" type="button">Leer más</button></article>
					<?php endforeach; ?>
				</div>
				<div class="newsletter-panel"><h2>Suscríbete a nuestro boletín</h2><p>Recibe las últimas noticias y actualizaciones directamente en tu correo</p><form><input type="email" placeholder="tu@email.com"><button class="button button-primary" type="button">Suscribirse</button></form></div>
			</div>
		</section>

	<?php elseif ( 'transparencia' === $slug ) : ?>
		<section class="section transparencia-stats-section">
			<div class="container transparency-stats-grid">
				<div class="transparency-stat stat-blue"><span class="stat-icon"><?php echo mific_modern_icon( 'shield' ); ?></span><strong>100%</strong><span>Transparencia</span><small>Información pública accesible</small></div>
				<div class="transparency-stat stat-green"><span class="stat-icon"><?php echo mific_modern_icon( 'file' ); ?></span><strong>150+</strong><span>Documentos</span><small>Disponibles para consulta</small></div>
				<div class="transparency-stat stat-purple"><span class="stat-icon"><?php echo mific_modern_icon( 'user' ); ?></span><strong>10,000+</strong><span>Consultas</span><small>Mensuales a documentos</small></div>
				<div class="transparency-stat stat-orange"><span class="stat-icon"><?php echo mific_modern_icon( 'shield' ); ?></span><strong>24/7</strong><span>Acceso</span><small>Disponibilidad continua</small></div>
			</div>
		</section>
		<section class="section">
			<div class="container">
				<div class="section-head"><div><h2 class="section-title">Documentos Públicos</h2><p class="section-lead">Accede a información institucional actualizada</p></div></div>
				<div class="document-grid">
					<?php
					$docs = array(
						array( 'title' => 'Plan Operativo Anual 2026', 'text' => 'Planificación estratégica y operativa del ministerio', 'date' => 'Enero 2026', 'size' => '2.5 MB' ),
						array( 'title' => 'Presupuesto Institucional 2026', 'text' => 'Detalle de asignación y ejecución presupuestaria', 'date' => 'Enero 2026', 'size' => '1.8 MB' ),
						array( 'title' => 'Informe de Gestión 2025', 'text' => 'Resultados y logros del año fiscal anterior', 'date' => 'Diciembre 2025', 'size' => '3.2 MB' ),
						array( 'title' => 'Normativas y Reglamentos', 'text' => 'Leyes, decretos y acuerdos institucionales', 'date' => 'Actualizado 2026', 'size' => '4.1 MB' ),
						array( 'title' => 'Nómina y Salarios', 'text' => 'Estructura salarial del personal institucional', 'date' => 'Marzo 2026', 'size' => '1.2 MB' ),
						array( 'title' => 'Contratos y Licitaciones', 'text' => 'Procesos de contratación pública', 'date' => 'Febrero 2026', 'size' => '2.8 MB' ),
					);
					foreach ( $docs as $doc ) :
						?>
						<article class="document-card"><span class="document-icon"><?php echo mific_modern_icon( 'file' ); ?></span><h3><?php echo esc_html( $doc['title'] ); ?></h3><p><?php echo esc_html( $doc['text'] ); ?></p><div class="doc-meta"><span><?php echo esc_html( $doc['date'] ); ?></span><span class="doc-type">PDF</span><span><?php echo esc_html( $doc['size'] ); ?></span></div></article>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
		<section class="section section-muted">
			<div class="container">
				<h2 class="section-title">Categorías de Información</h2>
				<p class="section-lead">Explora información por área temática</p>
				<div class="service-grid">
					<?php
					$cats = array(
						array( 'title' => 'Información Financiera', 'text' => 'Presupuestos, gastos y estados financieros', 'items' => array( 'Presupuesto anual', 'Ejecución presupuestaria', 'Estados financieros', 'Auditorías' ) ),
						array( 'title' => 'Contrataciones Públicas', 'text' => 'Licitaciones, contratos y procesos de compra', 'items' => array( 'Plan anual de contrataciones', 'Procesos de licitación', 'Contratos adjudicados', 'Órdenes de compra' ) ),
						array( 'title' => 'Recursos Humanos', 'text' => 'Estructura organizativa y nómina institucional', 'items' => array( 'Organigrama institucional', 'Nómina de personal', 'Escalas salariales', 'Concursos y plazas' ) ),
						array( 'title' => 'Marco Legal', 'text' => 'Leyes, reglamentos y normativas aplicables', 'items' => array( 'Ley orgánica', 'Reglamentos internos', 'Acuerdos ministeriales', 'Resoluciones' ) ),
					);
					foreach ( $cats as $cat ) :
						?>
						<article class="detail-card"><h3><?php echo esc_html( $cat['title'] ); ?></h3><p><?php echo esc_html( $cat['text'] ); ?></p><ul><?php foreach ( $cat['items'] as $item ) : ?><li><?php echo esc_html( $item ); ?></li><?php endforeach; ?></ul><button class="read-more" type="button">Ver más</button></article>
					<?php endforeach; ?>
				</div>
				<div class="cta-panel transparency-cta"><div><h2>Solicitud de Información Pública</h2><p>¿No encuentras la información que buscas? Realiza una solicitud formal bajo la Ley de Acceso a la Información Pública.</p></div><div class="cta-actions"><button class="button button-primary" type="button">Solicitar Información</button><button class="button button-outline" type="button">Ver Guía de Solicitud</button></div></div>
			</div>
		</section>

	<?php elseif ( 'contacto' === $slug ) : ?>
		<section class="section contacto-section">
			<div class="container contact-page-layout">
				<div class="contact-info-grid">
					<article class="contact-info-card contact-blue"><span class="contact-icon"><?php echo mific_modern_icon( 'globe' ); ?></span><h3>Dirección</h3><p>Km. 6 Carretera a Masaya</p><p>Managua, Nicaragua</p></article>
					<article class="contact-info-card contact-green"><span class="contact-icon"><?php echo mific_modern_icon( 'file' ); ?></span><h3>Teléfonos</h3><p>+505 2248-9300</p><p>Línea gratuita: 800-MIFIC</p></article>
					<article class="contact-info-card contact-purple"><span class="contact-icon"><?php echo mific_modern_icon( 'briefcase' ); ?></span><h3>Correo Electrónico</h3><p>info@mific.gob.ni</p><p>contacto@mific.gob.ni</p></article>
					<article class="contact-info-card contact-orange"><span class="contact-icon"><?php echo mific_modern_icon( 'file' ); ?></span><h3>Horario</h3><p>Lunes - Viernes: 8:00 AM - 5:00 PM</p><p>Sábado: 8:00 AM - 12:00 PM</p></article>
				</div>
				<div class="contact-main-grid">
					<form class="contact-form">
						<div class="form-title"><span class="form-icon"><?php echo mific_modern_icon( 'file' ); ?></span><h2>Envíanos un mensaje</h2></div>
						<label>Nombre completo *<input type="text" placeholder="Tu nombre"></label>
						<label>Correo electrónico *<input type="email" placeholder="tu@email.com"></label>
						<label>Teléfono<input type="tel" placeholder="+505 0000-0000"></label>
						<label>Área de consulta *<select><option>Selecciona un área</option><option>Servicios</option><option>Trámites</option><option>Protección al Consumidor</option></select></label>
						<label>Mensaje *<textarea placeholder="Escribe tu consulta o comentario..."></textarea></label>
						<button class="button button-outline" type="button">Enviar mensaje</button>
						<p>* Campos obligatorios. Responderemos en un plazo de 24-48 horas.</p>
					</form>
					<div class="contact-map-figma"><span><?php echo mific_modern_icon( 'globe' ); ?></span><div><strong>MIFIC - Sede Principal</strong><p>Km. 6 Carretera a Masaya, Managua</p></div></div>
				</div>
			</div>
		</section>
		<section class="section section-muted">
			<div class="container contact-bottom">
				<div class="map-card"><p>MIFIC - Sede Principal</p><p>Km. 6 Carretera a Masaya, Managua</p></div>
				<div class="info-card"><h3>Síguenos en redes sociales</h3><p>Mantente conectado con nosotros a través de nuestras redes sociales</p><div class="social-links"><a href="#">Facebook</a><a href="#">Twitter</a><a href="#">Instagram</a><a href="#">YouTube</a></div></div>
				<div class="info-card urgent-card"><h3>Atención Urgente</h3><p>Línea de atención prioritaria</p><a class="big-link" href="tel:800MIFIC">800-MIFIC (Gratuita)</a></div>
			</div>
		</section>
		<section class="cta">
			<div class="container cta-panel">
				<div><h2>¿Tienes preguntas frecuentes?</h2><p>Visita nuestra sección de preguntas frecuentes para encontrar respuestas rápidas</p></div>
				<button class="button button-outline" type="button">Ver Preguntas Frecuentes</button>
			</div>
		</section>
	<?php endif; ?>
</main>

<?php
get_footer();
