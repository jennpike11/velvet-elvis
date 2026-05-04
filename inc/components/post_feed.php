<?php 
    if( have_rows('post_feed') ): 
    while( have_rows('post_feed') ): the_row(); 
    $verticalPadding = get_sub_field('vertical_padding'); 
    $backgroundColor = get_sub_field('background_color'); 
    $textColor = get_sub_field('text_color'); 
    $heading = get_sub_field('heading');
    $posts = get_sub_field('posts'); 
    $cutoff = get_sub_field('cutoff'); 
    $loadMoreButton = get_sub_field('load_more_button'); 
?>


<section class="post-feed__wrapper padding--<?php echo $verticalPadding ?> background-color--<?php echo $backgroundColor ?>">
  <?php if($heading): ?>
      <h2 class="post-feed__heading color--<?php echo $textColor ?>"><?php echo $heading ?></h2>
  <?php endif; ?>
  <div class="post-feed">
    <div class="post-feed__blocks load-items cutoff--<?php echo $cutoff ?> load-more--<?php echo $loadMoreButton ?>">
     <?php $args = array(
          'post_type' => 'post',
          'orderby' => 'post_date',
          'order' => 'DESC',
          'cat' => $posts,
          'posts_per_page' => -1, 
          );
          $the_query = new WP_Query($args);
          if($the_query->have_posts()): ?>
            <?php  while($the_query->have_posts()): $the_query->the_post(); ?>
              <a class="post-feed__block load-items__item vertical-slide" href="<?php the_permalink(); ?>">
                <div class="post-feed__image"><?php the_post_thumbnail(); ?></div>
                <div class="post-feed__content">
                  <h3 class="post-feed__title color--<?php echo $textColor ?>"><?php the_title(); ?></h3>
                </div>  
              </a>
            <?php endwhile; ?>
            <?php // Reset the global post object so that the rest of the page works correctly.
        wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
    <?php if($loadMoreButton == 'yes'): ?>
      <a class="load-more load-more--posts">Load More</a> 
    <?php endif; ?>
  </div>
</section>

<?php endwhile;
endif; ?>

