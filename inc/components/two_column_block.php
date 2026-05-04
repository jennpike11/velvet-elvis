<?php // Two Column Block
   if( have_rows('two_column_block') ): 
   while( have_rows('two_column_block') ): the_row(); 
   $verticalPadding = get_sub_field('vertical_padding'); 
   $reverseMobile = get_sub_field('reverse_on_mobile'); 
   $backgroundColor = get_sub_field('background_color'); 
   $addBorder = get_sub_field('add_border');
   $imageAlignment = get_sub_field('image_alignment');
   $fadeOne = get_sub_field('column_one_fade_effect');
   $headingOne = get_sub_field('column_one_heading'); 
   $descriptionOne = get_sub_field('column_one_description');
   $fadeTwo = get_sub_field('column_two_fade_effect');
   $imageOne = get_sub_field('column_one_image');
   $buttonOne = get_sub_field('column_one_button');
   $headingTwo = get_sub_field('column_two_heading'); 
   $descriptionTwo = get_sub_field('column_two_description'); 
   $imageTwo = get_sub_field('column_two_image');
   $buttonTwo = get_sub_field('column_two_button');
?>

<section class="two-column-block__wrapper background-color--<?php echo $backgroundColor ?> image-alignment--<?php echo $imageAlignment ?> padding--<?php echo $verticalPadding ?>">   
   <div class="two-column-block add-border--<?php echo $addBorder ?> reverse-on-mobile--<?php echo $reverseMobile ?>">   
      <div class="column column--one">
         <?php if( $imageOne ): ?>
            <div class="column__image fade--<?php echo $fadeOne ?>" style="background-image: url(<?php echo $imageOne['url'] ?>);"></div>  
         <?php endif; ?>  

         <?php if( $headingOne || $descriptionOne || $buttonOne ): ?>
            <div class="column__content">   
               <?php if( $headingOne ): ?>
                  <h2 class="column__heading">
                     <?php echo $headingOne ?>
                  </h2>
               <?php endif; ?>

               <?php if( $descriptionOne ): ?>
                  <div class="column__description">
                     <?php echo $descriptionOne ?>
                  </div>
               <?php endif; ?>

               <?php if( $buttonOne != ""): ?>
                  <a class="primary-button" href="<?php echo $buttonOne['url'] ?>"><?php echo $buttonOne['title'] ?></a>
               <?php endif; ?>
            </div>
         <?php endif; ?>
      </div>
      <?php if($addBorder == 'yes'): ?>
         <div class="add-border"></div>
      <?php endif; ?>
      <div class="column column--two">
         <?php if( $imageTwo ): ?>
            <div class="column__image fade--<?php echo $fadeTwo ?>" style="background-image: url(<?php echo $imageTwo['url'] ?>);"></div>  
         <?php endif; ?>  

         <?php if( $headingTwo || $descriptionTwo || $buttonTwo ): ?>
            <div class="column__content">
               <?php if( $headingTwo ): ?>
                  <h2 class="column__heading">
                     <?php echo $headingTwo ?>
                  </h2>
               <?php endif; ?>

               <?php if( $descriptionTwo ): ?>
                  <div class="column__description">
                     <?php echo $descriptionTwo ?>
                  </div>
               <?php endif; ?>

               <?php if( $buttonTwo != ""): ?>
                  <a class="primary-button" href="<?php echo $buttonTwo['url'] ?>"><?php echo $buttonTwo['title'] ?></a>
               <?php endif; ?>
            </div>
         <?php endif; ?>  
      </div>
   </div>  
</section>

<?php endwhile; ?>
<?php endif; ?>  