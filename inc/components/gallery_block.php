<?php // Gallery Block
  if( have_rows('gallery_block') ): 
    while( have_rows('gallery_block') ): the_row(); 
    $verticalPadding = get_sub_field('vertical_padding'); 
    $backgroundColor = get_sub_field('background_color'); 
    $textColor = get_sub_field('text_color'); 
    $heading = get_sub_field('heading'); 
    $description = get_sub_field('description'); 
  ?>
 <section class="gallery-block__wrapper padding--<?php echo $verticalPadding ?> background-color--<?php echo $backgroundColor ?>">
    <div class="gallery-block">
      <?php if($heading): ?>
        <h2 class="gallery-block__heading color--<?php echo $textColor ?>"><?php echo $heading ?></h2>
      <?php endif; ?>  
      <?php if($description): ?>
        <div class="gallery-block__description color--<?php echo $textColor ?>"><?php echo $description ?></div>
      <?php endif; ?>  
      <div class="gallery-block__images">
        <?php while( have_rows('images') ): the_row(); 
            $image = get_sub_field('image'); 
        ?>
        <div class="gallery-block__image">
          <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>">
        </div>
        <?php endwhile; ?> 
      </div> 
      <a class="load-more load-more--photo-gallery">Load More</a> 
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
