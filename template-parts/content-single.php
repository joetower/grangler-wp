<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('full'); ?>>
	<?php twentysixteen_excerpt(); ?>

	<?php twentysixteen_post_thumbnail(); ?>

		<div class="entry-content">

			<header class="entry-header">
				<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
				<?php get_template_part( 'template-parts/travel-dates' ); ?>

			</header><!-- .entry-header -->

			<?php get_template_part( 'template-parts/with-paint-images' ); ?>
			<?php get_template_part( 'template-parts/with-paint-details' ); ?>

			<?php get_template_part( 'template-parts/design-asset-download' ); ?>

			<?php
				the_content();

				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );

				if ( '' !== get_the_author_meta( 'description' ) ) {
					get_template_part( 'template-parts/biography' );
				}
			?>

			<?php get_template_part( 'template-parts/photo-group' ); ?>
			<?php get_template_part( 'template-parts/design-asset-images' ); ?>
			<?php get_template_part( 'template-parts/album-entry' ); ?>
			<?php get_template_part( 'template-parts/design-asset-about' ); ?>

		</div><!-- .entry-content -->

		<?php get_template_part( 'template-parts/entry-footer' ); ?>

</article><!-- #post-## -->
