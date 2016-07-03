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
          <div class="album-content">
            <span class="album-position"><?php echo $position; ?></span>
            <h2 class="artist-name"><?php echo $artist; ?></h2>
            <h3 class="album-title"><?php echo $album; ?></h3>
          </div>
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
