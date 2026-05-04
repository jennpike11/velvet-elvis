<?php // One Column Block

if (have_rows('one_column_block')) :
  while (have_rows('one_column_block')) : the_row();
    $verticalPadding = get_sub_field('vertical_padding');
    $contentWidth = get_sub_field('content_width');
    $fadeEffect = get_sub_field('fade_effect');
    $backgroundColor = get_sub_field('background_color');
    $textColor = get_sub_field('text_color');
    $heading = get_sub_field('heading');
    $description = get_sub_field('description');
    $link = get_sub_field('link');

    $wrapper_classes = 'padding--' . $verticalPadding;
    if ($fadeEffect == '1') {
      $wrapper_classes .= ' fade--yes';
    }
?>
  <section class="one-column-block__wrapper <?php echo $wrapper_classes ?> background-color--<?php echo $backgroundColor; ?>">
    <div class="one-column-block width--<?php echo $contentWidth; ?>">
      <?php if ($heading): ?>
        <h2 class="one-column-block__heading"><?php echo $heading; ?></h2>
      <?php endif; ?>

      <?php if ($description): ?>
        <div class="one-column-block__description"><?php echo $description; ?></div>
      <?php endif; ?>

      <?php if ($link): ?>
        <div class="primary-button">
          <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php
  endwhile;
endif;
?>