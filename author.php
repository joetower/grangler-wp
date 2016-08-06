<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>About</h1>
			</header><!-- .page-header -->

			<section class="about">
				<div class="wrapper">
					<article class="full">
						<h2>My name is Joe Tower. I design user-focused experiences.</h2>
						<p>I live in the Nokomis Neighborhood of Minneapolis, MN, with a lady and
							two dogs. I am a print designer, turned web designer, turned front-end
							developer, turned wannabe programmer (trying to do it all). During the
							day I work as a designer and frontend engineer for <a href="http://fourkitchens.com" title="Four Kitchens Website">Four Kitchens</a>. In my
							free time, I am the Chief Designer for <a href="http://www.lightbomber.com" title="Lightbomber.com">Lightbomber</a>.
						</p>
						I want the internet to be: beautiful to look at, as open-source as possible, and above all else, user-friendly.

						<p>I am a film nerd, technology lover, music snob, and occasional video game player.
							When it comes to food I am vegetable obsessed and prefer savory to sweet.
							Beer, scotch, and gin are my favorite alcholic beverages.
						</p>

						<h2>About this site</h2>
						<p>This site is continually being redesigned, retooled, reimagined.
							Right now, it's utilizing Sass, the Singularity grid system, and Jekyll
							for content authoring.</p>

						<h3>Typography</h3>
						<p>
							This site uses Google Web Fonts to serve up Open Sans and Open Sans Condensed.
						</p>
						<h2>Archive of posts</h2>

					</article>
				</div>
			</section>

			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
