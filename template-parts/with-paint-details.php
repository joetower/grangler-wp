
<?php if( get_field('painting_dimensions')): ?>
  <section class="painting-details">

    <?php if( get_field('painting_dimensions')): ?>
      <span class="dimensions"><em>Dimensions:</em> <?php the_field('painting_dimensions'); ?></span>
    <?php endif; ?>

    <?php if( get_field('year_painted')): ?>
      <span class="painted"><em>Year Painted:</em> <?php the_field('year_painted'); ?></span>
    <?php endif; ?>

    <?php if( get_field('painting_price')): ?>
      <span class="price"><em>Price: <?php the_field('painting_price'); ?></span>
    <?php endif; ?>

  </section>
<?php endif; ?>
