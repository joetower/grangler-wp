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
        <?php if( $cover ): ?>
          <figure>
            <img src="<?php echo $cover['url']; ?>" alt="<?php echo $cover['alt'] ?>" />
          </figure>
        <?php endif; ?>
        <?php if( $artist ): ?>
          <div class="album-content">
            <?php if( $position ): ?>
              <span class="album-position"><?php echo $position; ?></span>
            <?php endif; ?>
            <h2 class="artist-name"><?php echo $artist; ?></h2>
            <h3 class="album-title"><?php echo $album; ?></h3>
          </div>
        <?php endif; ?>
        </div>
        <?php echo $review; ?>
        <?php if( $song ): ?>
          <?php echo $song; ?>
        <?php endif; ?>
        <?php if( $highlights ): ?>
          <section class="highlights">
            <strong>Album highlights:</strong> <em><?php echo $highlights; ?></em>
          </section>
        <?php endif; ?>
    </li>

  <?php endwhile; ?>

  </ul>

  <?php if( get_field('honorable_mentions') ): ?>
    <section class="honorables">
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
