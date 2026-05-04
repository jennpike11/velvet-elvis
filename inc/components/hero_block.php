<?php // Hero Block

  if( have_rows('hero_block') ): 
    while( have_rows('hero_block') ): the_row(); 
    $page = get_sub_field('page_type');
    $background = get_sub_field('background');
    $backgroundColor = get_sub_field('background_color');
    $fadeColor = get_sub_field('fade_color');
    $image = get_sub_field('image');
    $video = get_sub_field('video');
    $heading = get_sub_field('heading');
    $description = get_sub_field('description');
    $link = get_sub_field('link');
    $additionalLink = get_sub_field('additional_link');
    ?>

<section class="hero-block__wrapper page-type--<?php echo $page ?> fade--<?php echo $fadeColor ?>"  background-color--<?php echo $backgroundColor ?>">
  <div class="hero-block">
    <?php if($background == 'video'): ?>
      <div class="hero-block__video">
        <video playsinline autoplay muted loop>
          <source src="<?php echo $video ?>" type="video/mp4">
        Your browser does not support the video tag.
        </video>
      </div>
    <?php else: ?>
      <div class="hero-block__image">
        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>">
      </div> 
    <?php endif; ?> 

    <?php if($heading): ?>
      <h1 class="hero-block__heading">
        <?php echo $heading ?>
      </h1>
    <?php endif; ?>

    <?php if($description): ?>
      <div class="hero-block__description">
        <?php echo $description ?>
      </div>
    <?php endif; ?>

    <?php if($link): ?>
      <div class="hero-block__links">
        <a class="primary-button" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
        <?php if($additionalLink): ?>
          <a class="secondary-button" href="<?php echo $additionalLink['url'] ?>"><?php echo $additionalLink['title'] ?></a>
        <?php endif; ?>
      </div>
    <?php endif; ?>

  </div>
</section>  

<?php endwhile; ?>
<?php endif; ?>

