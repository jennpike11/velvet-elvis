<?php // Hero Block Curvy

if( have_rows('hero_block_curvy') ): 
  while( have_rows('hero_block_curvy') ): the_row(); 

  $page = get_sub_field('page_type');
  $background = get_sub_field('background');
  $backgroundColor = get_sub_field('background_color');
  $image = get_sub_field('image');
  $video = get_sub_field('video');
  $heading = get_sub_field('heading');
  $description = get_sub_field('description');
  $link = get_sub_field('link');
  $additionalLink = get_sub_field('additional_link');
?>

<section class="hero-block-curvy__outer-wrapper background-color--<?php echo esc_attr($backgroundColor); ?>">
  
  <div class="hero-block-curvy__wrapper"> 
    
    <div class="hero-block-curvy page-type--<?php echo esc_attr($page); ?>">

      <div class="hero-block-curvy__background">

        <?php if($background === 'gradient'): ?>
          <div class="gradient-background">
            <div class="gradient-background__bg"></div>
          </div>
        <?php endif; ?>   

        <?php if($background === 'video' && $video): ?>
          <div class="hero-block-curvy__video">
            <video playsinline autoplay muted loop>
              <source src="<?php echo esc_url($video); ?>" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>

        <?php elseif($background === 'image' && $image): ?>
          <div class="hero-block-curvy__image">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['title']); ?>">
          </div> 
        <?php endif; ?> 

      </div>

      <div class="hero-block-curvy__content">

        <?php if($heading): ?>
          <h1 class="hero-block-curvy__heading">
            <?php echo $heading; ?>
          </h1>
        <?php endif; ?>

        <?php if($description): ?>
          <div class="hero-block-curvy__description">
            <?php echo $description; ?>
          </div>
        <?php endif; ?>

        <?php if($link): ?>
          <div class="hero-block-curvy__links">
            <a class="primary-button" href="<?php echo esc_url($link['url']); ?>">
              <?php echo esc_html($link['title']); ?>
            </a>

            <?php if($additionalLink): ?>
              <a class="secondary-button" href="<?php echo esc_url($additionalLink['url']); ?>">
                <?php echo esc_html($additionalLink['title']); ?>
              </a>
            <?php endif; ?>
          </div>
        <?php endif; ?>

      </div>

    </div>

  </div>

</section>  

<?php endwhile; ?>
<?php endif; ?>