<section class="single-block__wrapper">
  <div class="ve-site">
    <div class="ve-stage">
      <?php
        if (function_exists('have_rows') && have_rows('single_block')) :
          while (have_rows('single_block')) : the_row();

          $scene_classes = array(
            've-scene--hula',
            've-scene--volcano',
            've-scene--players'
          );

          $scene_index = 0;

          if (have_rows('sections')) :
            while (have_rows('sections')) : the_row();

            $sectionName = get_sub_field('section_name');
            $heading = get_sub_field('heading');
            $subheading = get_sub_field('subheading');
            $description = get_sub_field('description');
            $link = get_sub_field('link');

            $sceneClass = isset($scene_classes[$scene_index]) ? $scene_classes[$scene_index] : '';
            $activeClass = $scene_index === 0 ? ' is-active' : '';
      ?>

      <div class="ve-scene <?php echo esc_attr($sceneClass . $activeClass); ?>" data-scene="<?php echo esc_attr($scene_index); ?>" data-scene-name="<?php echo esc_attr($sectionName); ?>">
        <div class="ve-scene__bg"></div>
        <div class="ve-scene__mid"></div>

        <?php if ($scene_index === 0) : ?>
          <img class="ve-scene__bug" src="https://dev-velet-elvis.pikexdigital.com/wp-content/uploads/2026/05/bug.png" alt="">
          <img class="ve-scene__float ve-scene__float--hula" src="https://dev-velet-elvis.pikexdigital.com/wp-content/uploads/2026/05/hula_girl.png" alt="">
        <?php endif; ?>

        <?php if ($scene_index === 1) : ?>
          <div class="ve-scene__ember ve-scene__ember--one"></div>
          <div class="ve-scene__ember ve-scene__ember--two"></div>
          <img class="ve-scene__float ve-scene__float--volcano" src="https://dev-velet-elvis.pikexdigital.com/wp-content/uploads/2026/05/volcano.png" alt="">
          <img class="ve-scene__float ve-scene__float--volcano-flowers" src="https://dev-velet-elvis.pikexdigital.com/wp-content/uploads/2026/05/flowers.png" alt="">
        <?php endif; ?>

        <?php if ($scene_index === 2) : ?>
          <img class="ve-scene__float ve-scene__float--palms" src="https://dev-velet-elvis.pikexdigital.com/wp-content/uploads/2026/05/palm_trees_2.png" alt="">
          <img class="ve-scene__float ve-scene__float--players" src="https://dev-velet-elvis.pikexdigital.com/wp-content/uploads/2026/05/players.png" alt="">
        <?php endif; ?>

        <div class="ve-scene__copy">
          <?php if ($heading) : ?>
            <h1><?php echo esc_html($heading); ?></h1>
          <?php endif; ?>

          <div class="ve-scene__description">
            <?php if ($subheading) : ?>
              <h2><?php echo esc_html($subheading); ?></h2>
            <?php endif; ?>

            <?php if ($description) : ?>
              <?php echo wp_kses_post($description); ?>
            <?php endif; ?>
          </div>

          <?php if ($link) : ?>
            <?php
              $button_url = $link['url'];
              $button_title = $link['title'];
              $button_target = !empty($link['target']) ? $link['target'] : '';
            ?>

            <div class="ve-scene__button">
              <a
                class="primary-button"
                href="<?php echo esc_url($button_url); ?>"
                <?php if ($button_target) : ?>
                  target="<?php echo esc_attr($button_target); ?>"
                <?php endif; ?>
              >
                <?php echo esc_html($button_title); ?>
              </a>
            </div>
          <?php endif; ?>

        </div>
      </div>

      <?php
            $scene_index++;
            endwhile;
          endif;

          endwhile;
        endif;
      ?>
    </div>

    <div class="ve-scroll">
      <?php for ($i = 0; $i < $scene_index; $i++) : ?>
        <div class="ve-scroll__step" data-scene="<?php echo esc_attr($i); ?>"></div>
      <?php endfor; ?>
    </div>

  </div>
</section>