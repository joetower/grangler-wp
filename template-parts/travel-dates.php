<?php if( get_field('travel_dates')): ?>
  <div class="travel-dates">
    <span class="label"><em>Travel dates:</em></span>
    <span class="dates"><?php the_field('travel_dates'); ?></span>
  </div>
<?php endif; ?>
