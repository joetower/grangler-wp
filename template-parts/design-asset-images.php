<section class="design-images">
  <?php if( have_rows('design_images') ): ?>
  <ul class="image-details">
    <?php while( have_rows('design_images') ): the_row();

      $designImage = get_sub_field('design_image');
      $designImageCaption = $designImage['caption'];
      $designBrief = get_sub_field('design_brief');
    ?>

    <li class="image-detail">
      <figure>
        <img src="<?php echo $designImage['url']; ?>" alt="<?php echo $designImage['alt'] ?>" />
        <?php if( $designImageCaption ): ?>
          <figcaption><?php echo $designImageCaption; ?></figcaption>
        <?php endif; ?>
      </figure>
      <?php if( $designBrief ): ?>
        <section class="design-brief">
          <?php echo $designBrief; ?>
        </section>
      <?php endif; ?>
    </li>
  <?php endwhile; ?>
  </ul>
  <?php endif; ?>
</section>
