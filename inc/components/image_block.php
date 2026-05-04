<?php // image Block
  if( have_rows('image_block') ): 
    while( have_rows('image_block') ): the_row(); 
    $verticalPadding = get_sub_field('vertical_padding'); 
    $slider = get_sub_field('slider');
    $singleImage = get_sub_field('single_image');
    $imageHeight = get_sub_field('image_height'); 
  ?>
 
    <?php if($slider == 'yes'){ ?>
        <section class="image-block__wrapper padding--<?php echo $verticalPadding ?>">
            <div class="image-block">
                <div class="image-block__slides">
                    <?php while( have_rows('images') ): the_row(); 
                        $image = get_sub_field('image'); 
                    ?>
                        <div class="image-block__slide">
                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>"></a>
                        </div>    
                    <?php endwhile; ?> 
                </div>      
            </div>
        </section>
    <?php } else { ?>
        <section class="image-block__wrapper single padding--<?php echo $verticalPadding ?> image-height--<?php echo $imageHeight ?>">
            <div class="image-block">
                <div class="image-block__image">
                    <img src="<?php echo $singleImage['url'] ?>" alt="<?php echo $singleImage['title'] ?>"></a>
                </div>
            </div>
        </section>
    <?php } ?>
<?php endwhile; ?>
<?php endif; ?>

