<?php // four Column block
    if( have_rows('four_column_block') ): 
    while( have_rows('four_column_block') ): the_row(); 
    $verticalPadding = get_sub_field('vertical_padding'); 
    $backgroundColor = get_sub_field('background_color'); 
    $fadeEffect = get_sub_field('fade_effect');
    $heading = get_sub_field('heading'); 
    $description = get_sub_field('description'); 
?>

<section class="four-column-block__wrapper padding--<?php echo $verticalPadding ?> background-color--<?php echo $backgroundColor ?>">
  <?php if($fadeEffect == 'yes'): ?>
    <div class="fade--yes">
  <?php endif; ?>    
  <div class="four-column-block">
    <?php if($heading): ?>
      <h2 class="four-column-block__heading"><?php echo $heading ?></h2>
    <?php endif; ?>

    <?php if($description): ?>
      <div class="four-column-block__description"><?php echo $description ?></div>
    <?php endif; ?>

    <?php if( have_rows('items') ): ?>
      <div class="four-column-block__items">
        <?php while( have_rows('items') ): the_row(); 
          $link = get_sub_field('link');
          $itemimage = get_sub_field('item_image');
          $itemHeading = get_sub_field('item_heading');
          $itemDescription = get_sub_field('item_description');
        ?>
          <div class="four-column-block__item">
            <?php if($link): ?>
              <a class="four-column-block__item-link" href="<?php echo $link['url'] ?>">
            <?php endif; ?>  
              <?php if($itemimage): ?>
              <div class="four-column-block__item-image"><img src="<?php echo $itemimage['url'] ?>"></div>
              <?php endif; ?>
              <?php if($itemHeading): ?>
              <h3 class="four-column-block__item-heading"><?php echo $itemHeading ?></h3>
              <?php endif; ?>
              <?php if($itemDescription): ?>
                <div class="four-column-block__item-description"><?php echo $itemDescription ?></div>
              <?php endif; ?>
            <?php if($link): ?>
              </a>
            <?php endif; ?>  
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
  <?php if($fadeEffect == 'yes'): ?>
    </div>
  <?php endif; ?>  
</section>

<?php endwhile; ?>
<?php endif; ?>

