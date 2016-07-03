
<?php if( get_field('painting_image')):
  $paintingImage = get_field('painting_image');
  $paintingCaption = $paintingImage['caption'];
?>

  <section class="painting-images">
    <?php if( get_field('painting_image')): ?>
      <figure>
        <img src="<?php echo $paintingImage['url']; ?>" alt="<?php echo $paintingImage['alt'] ?>" />
        <?php if( $paintingCaption ): ?>
          <figcaption><?php echo $paintingCaption; ?></figcaption>
        <?php endif; ?>
      </figure>
    <?php endif; ?>

    <?php if( have_rows('painting_detail_images') ): ?>
    <ul class="image-details">
      <?php while( have_rows('painting_detail_images') ): the_row();

        $paintingDetailImage = get_sub_field('painting_detail_image');
        $paintingDetailCaption = $paintingDetailImage['caption'];
      ?>

      <li class="image-detail">
        <figure>
          <img src="<?php echo $paintingDetailImage['url']; ?>" alt="<?php echo $paintingDetailImage['alt'] ?>" />
          <?php if( $paintingDetailCaption ): ?>
            <figcaption><?php echo $paintingDetailCaption; ?></figcaption>
          <?php endif; ?>
        </figure>
      </li>
    <?php endwhile; ?>
    </ul>
    <?php endif; ?>

  </section>
<?php endif; ?>
