<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<!-- load disqus comments over wp-comments.php -->
<div id="comments" class="comments-area">
	<?php get_template_part( 'template-parts/disqus' ); ?>
</div><!-- .comments-area -->
