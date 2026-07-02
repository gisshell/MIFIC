<?php
/**
 * Footer template.
 *
 * @package MIFIC_Modern
 */
?>
	<footer class="site-footer">
		<div class="container footer-main">
			<div class="footer-col">
				<a class="footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<span class="brand-mark">M</span>
					<span>
						<strong>MIFIC</strong>
						<span>Ministerio de Fomento</span>
					</span>
				</a>
				<p class="footer-about">Ministerio de Fomento, Industria y Comercio de Nicaragua. Promoviendo el desarrollo económico y comercial del país.</p>
			</div>

			<div class="footer-col">
				<h3><?php esc_html_e( 'Enlaces Rápidos', 'mific-modern' ); ?></h3>
				<ul class="footer-list">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a></li>
					<li><a href="<?php echo esc_url( home_url( '/institucion' ) ); ?>">Institución</a></li>
					<li><a href="<?php echo esc_url( home_url( '/servicios' ) ); ?>">Servicios</a></li>
					<li><a href="<?php echo esc_url( home_url( '/tramites' ) ); ?>">Trámites</a></li>
					<li><a href="<?php echo esc_url( home_url( '/noticias' ) ); ?>">Noticias</a></li>
					<li><a href="<?php echo esc_url( home_url( '/transparencia' ) ); ?>">Transparencia</a></li>
				</ul>
			</div>

			<div class="footer-col">
				<h3><?php esc_html_e( 'Servicios', 'mific-modern' ); ?></h3>
				<ul class="footer-list">
					<li><a href="#">Registro Empresarial</a></li>
					<li><a href="#">Licencias Comerciales</a></li>
					<li><a href="#">Exportaciones</a></li>
					<li><a href="#">Protección al Consumidor</a></li>
					<li><a href="#">Inversiones</a></li>
					<li><a href="#">Servicios al Empresario</a></li>
				</ul>
			</div>

			<div class="footer-col">
				<h3><?php esc_html_e( 'Contacto', 'mific-modern' ); ?></h3>
				<ul class="footer-list">
					<li><span>Km. 6 Carretera a Masaya</span></li>
					<li><span>Managua, Nicaragua</span></li>
					<li><span>+505 2248-9300</span></li>
					<li><span>info@mific.gob.ni</span></li>
				</ul>
				<h4><?php esc_html_e( 'Redes Sociales', 'mific-modern' ); ?></h4>
				<div class="social-links">
					<a href="#" aria-label="Facebook">f</a>
					<a href="#" aria-label="Twitter">x</a>
					<a href="#" aria-label="Instagram">ig</a>
					<a href="#" aria-label="YouTube">yt</a>
				</div>
			</div>
		</div>

		<div class="container footer-bottom">
			<span>© <?php echo esc_html( gmdate( 'Y' ) ); ?> MIFIC - Todos los derechos reservados</span>
			<div class="footer-legal">
				<a href="#">Política de Privacidad</a>
				<a href="#">Términos de Uso</a>
				<a href="#">Mapa del Sitio</a>
			</div>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
