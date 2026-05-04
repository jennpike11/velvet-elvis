<?php // Testimonial Block

  if( have_rows('testimonial_block') ): 
  while( have_rows('testimonial_block') ): the_row(); 
    $verticalPadding = get_sub_field('vertical_padding'); 
    $backgroundColor = get_sub_field('background_color');
    $textColor = get_sub_field('text_color');
    ?>
  <section class="testimonial-block__wrapper padding--<?php echo $verticalPadding ?> background-color--<?php echo $backgroundColor ?>">
    <div class="testimonial-block">
      <?php if( have_rows('testimonial') ): 
      while( have_rows('testimonial') ): the_row(); 
      $quote = get_sub_field('quote');
      $author = get_sub_field('author');
      $company = get_sub_field('company'); 
      ?>
        <div class="testimonial-block__slide">
          <?php if($quote): ?>
            <div class="testimonial-block__quote color--<?php echo $textColor ?>">
              <?php echo $quote ?>
            </div>
          <?php endif; ?>   
          <?php if($author): ?>
            <div class="testimonial-block__author color--<?php echo $textColor ?>">
              <?php echo $author ?>
            </div>
          <?php endif; ?>
          <?php if($company): ?>
            <div class="testimonial-block__company color--<?php echo $textColor ?>">
              <?php echo $company ?>
            </div>
          <?php endif; ?>       
        </div> 
      <?php endwhile; ?>
      <?php endif; ?>
    </div>  
  </section>
<?php endwhile; ?>
<?php endif; ?>

