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
