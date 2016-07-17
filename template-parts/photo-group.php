<?php // test loop #1 ?>
<?php if( have_rows('photo_section_group') ): ?>

	<section class="photo-group">

  <?php // start loop #1 ?>
	<?php while( have_rows('photo_section_group') ): the_row(); ?>

		<section class="photo-content">
			<h2><?php the_sub_field('section_heading'); ?></h2>
    	<?php the_sub_field('section_content'); ?>
		</section>

    <?php // test loop #2 (nested) ?>
    <?php if( have_rows('section_photos') ): ?>
		<section class="photo-collection">

      <ul class="image-stack section-photos">

        <?php // start loop #2 (nested) ?>
        <?php while( have_rows('section_photos') ): the_row();
          $photo = get_sub_field('photo');
          $photoCaption = $photo['caption'];
        ?>
        <li class="photo">
          <figure>
            <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt'] ?>" />
            <?php if( $photoCaption ): ?>
              <figcaption><?php echo $photoCaption; ?></figcaption>
            <?php endif; ?>
          </figure>
        </li>
      <?php endwhile; ?>
      <?php // end loop #2 (nested) ?>

      </ul>
		</section>

      <?php endif; ?>
    <?php // end test #2 (nested) ?>

	<?php endwhile; ?>
  <?php // end loop #1 ?>

</section>

<?php endif; ?>
<?php // end test #1 ?>
