<?php
/**
 * Fallback template.
 *
 * @package MIFIC_Modern
 */

get_header();
?>
<main class="section">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="section-title"><?php the_title(); ?></h1>
					<div><?php the_content(); ?></div>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<h1 class="section-title"><?php esc_html_e( 'Contenido no encontrado', 'mific-modern' ); ?></h1>
		<?php endif; ?>
	</div>
</main>
<?php
get_footer();
