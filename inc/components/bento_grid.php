<?php  // Bento Grid
  if( have_rows('bento_grid') ): 
  while( have_rows('bento_grid') ): the_row(); 
  $verticalPadding = get_sub_field('vertical_padding'); 
  $backgroundColor = get_sub_field('background_color'); 
  $textColor = get_sub_field('text_color'); 
  ?>

  <section class="bento-grid__wrapper padding--<?php echo $verticalPadding ?> background-color--<?php echo $backgroundColor ?>">
		<div class="bento-grid">
			<?php  while( have_rows('items') ): the_row(); 
        $image = get_sub_field('image');
        $text = get_sub_field('text');
      ?>
			<div class="bento-grid__item" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
				<div class="bento-grid__details color--<?php echo $textColor ?>"><?php echo $text ?></div>
			</div>
      <?php endwhile; ?>
		</div>
	</section>	

  <?php endwhile; ?>
  <?php endif; ?>