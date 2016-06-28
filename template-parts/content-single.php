<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php twentysixteen_excerpt(); ?>

	<?php twentysixteen_post_thumbnail(); ?>

  <header class="entry-header">
		<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

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

		<?php if( have_rows('album_entry') ): ?>

			<ul class="album-entries">

			<?php while( have_rows('album_entry') ): the_row();

				// vars
				$cover = get_sub_field('album_cover');
				$position = get_sub_field('album_position');
				$review = get_sub_field('album_review');
				$artist = get_sub_field('album_artist');
				$album = get_sub_field('album_title');
				$song = get_sub_field('album_song');
				$highlights = get_sub_field('album_highlights');

				$worst = get_field('worst_of');

				?>

				<li class="album">
					<div class="top-section">
							<figure>
								<img src="<?php echo $cover['url']; ?>" alt="<?php echo $cover['alt'] ?>" />
							</figure>
							<span class="position"><?php echo $position; ?></span>
							<h3><?php echo $album; ?></h3>
							<h2><?php echo $artist; ?></h2>
						</div>
            <?php echo $review; ?>
						<?php echo $song; ?>
						<em><?php echo $highlights; ?></em>
				</li>

			<?php endwhile; ?>

			</ul>

			<?php if( get_field('honorable_mentions') ): ?>
				<section class="honorables">
					<h2>Honorable mentions</h2>
					<?php the_field('honorable_mentions'); ?>
				</section>
			<?php endif; ?>

			<?php if( get_field('worst_of') ): ?>
				<section class="worst">
					<h2>Worst of the year</h2>
					<?php the_field('worst_of'); ?>
				</section>
			<?php endif; ?>

		<?php endif; ?>


	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentysixteen_entry_meta(); ?>
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
