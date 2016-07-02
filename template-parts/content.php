<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('teaser' ); ?>>
	<?php twentysixteen_excerpt(); ?>

	<?php if ( has_post_thumbnail()) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
			<?php the_post_thumbnail('teaser-square'); ?>
			</a>
	 	</div>
	 <?php endif; ?>

	<div class="teaser">
	  <header class="entry-header">
			<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
				<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
			<?php endif; ?>

			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				) );

				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );
			?>
		</div><!-- .entry-content -->
		<footer class="entry-footer">
			<div class="byline">
				<span class="author">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?>
					<em>Authored by</em>
					<span class="name">
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
					</span>
				</span>
			</div>
			<div class="meta">
				<span class="posted-on">
					<em>This entry was posted on</em> <?php the_time('l, F jS, Y') ?>
				</span>
				<span class="categories">
					<em>Posted in: </em> <?php the_category(' | ') ?>
				</span>
				<span class="tags">
					<?php the_tags(' <em>Tagged:</em> ') ?>
				</span>
			</div>

			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->

</article><!-- #post-## -->
