<?php // Text with Image Block

  if( have_rows('text_with_image_block') ): 
  while( have_rows('text_with_image_block') ): the_row(); 
    $verticalPadding = get_sub_field('vertical_padding');
    $backgroundColor = get_sub_field('background_color');
    $fadeEffect = get_sub_field('fade_effect');
    $text = get_sub_field('text');
    $imageLocation = get_sub_field('image_location'); 
    $rightImage = get_sub_field('right_image'); 
    $leftImage = get_sub_field('left_image'); 
    ?>

<section class="text-with-image-block__wrapper padding--<?php echo $verticalPadding ?> background-color--<?php echo $backgroundColor ?> fade--<?php echo $fadeEffect ?>">
  <div class="text-with-image-block">
    <div class="text-with-image-block__text">
      <?php echo $text ?>
    </div>
    <?php if($imageLocation == 'right'): ?>  
      <div class="text-with-image-block__right">
        <img src="<?php echo $rightImage['url'] ?>" alt="<?php echo $rightImage['title'] ?>">
      </div>
    <?php endif; ?>  
    <?php if($imageLocation == 'left'): ?>  
      <div class="text-with-image-block__left">
        <img src="<?php echo $leftImage['url'] ?>" alt="<?php echo $leftImage['title'] ?>">
      </div>
    <?php endif; ?>  
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>
