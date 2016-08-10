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

	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
		<?php if ( has_post_thumbnail()) : ?>
			<span class="post-thumbnail">
				<figure>
					<?php the_post_thumbnail('teaser-square-med-large'); ?>
				</figure>
		 	</span>
		 <?php endif; ?>

		<span class="teaser-content">
		  <span class="entry-header">
				<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
					<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
				<?php endif; ?>
				<h2 class="entry-title">
					<?php the_title( ); ?>
				</h2>
			</span><!-- .entry-header -->

			<span class="entry-content">
				<p>
					<?php
					$content = get_the_content();
					echo wp_trim_words( $content , '25' );
					 ?>
			 	</p>
			</span><!-- .entry-content -->
		</span><!-- .teaser -->
	</a>
</article><!-- #post-## -->
