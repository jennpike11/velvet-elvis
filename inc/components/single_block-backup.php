<?php // single Block

//if (function_exists('have_rows') && have_rows('single_block')) :
  //while (have_rows('single_block')) : the_row();
?>

<section class="single-block__wrapper">
  <main class="ve-site">

  <section class="ve-stage">

    <div class="ve-scene ve-scene--hula is-active" data-scene="0" data-scene-name="home">
      <div class="ve-scene__bg"></div>
      <div class="ve-scene__mid"></div>
      <img class="ve-scene__bug" src="https://dev-velet-elvis.pikexdigital.com/wp-content/uploads/2026/05/bug.png" alt="">
      <img class="ve-scene__float ve-scene__float--hula" src="https://dev-velet-elvis.pikexdigital.com/wp-content/uploads/2026/05/hula_girl.png" alt="">
      <div class="ve-scene__copy">
        <h1>Velvet Elvis Studios</h1>
        <div class="ve-scene__description">
          <h2>A SAG Signatory Company</h2>
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.</p>
        </div>
        <div class="ve-scene__button"><a class="primary-button" href="#scene-3">Contact us</a></div>
      </div>
    </div>

    <div class="ve-scene ve-scene--volcano" data-scene="1" data-scene-name="about-us">
      <div class="ve-scene__bg"></div>
      <div class="ve-scene__mid"></div>
      <div class="ve-scene__ember ve-scene__ember--one"></div>
      <div class="ve-scene__ember ve-scene__ember--two"></div>
      <img class="ve-scene__float ve-scene__float--volcano" src="https://dev-velet-elvis.pikexdigital.com/wp-content/uploads/2026/05/volcano.png" alt="">
      <img class="ve-scene__float ve-scene__float--volcano-flowers" src="https://dev-velet-elvis.pikexdigital.com/wp-content/uploads/2026/05/flowers.png" alt="">
      <div class="ve-scene__copy">
        <h1>About us</h1>
        <div class="ve-scene__description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</div>
        <div class="ve-scene__button"><a class="primary-button" href="#scene-3">Optional Button</a></div>
      </div>
    </div>

    <div class="ve-scene ve-scene--players" data-scene="2" data-scene-name="contact">
      <div class="ve-scene__bg"></div>
      <div class="ve-scene__mid"></div>
      <img class="ve-scene__float ve-scene__float--palms" src="https://dev-velet-elvis.pikexdigital.com/wp-content/uploads/2026/05/palm_trees_2.png" alt="">
      <img class="ve-scene__float ve-scene__float--players" src="https://dev-velet-elvis.pikexdigital.com/wp-content/uploads/2026/05/players.png" alt="">
      <div class="ve-scene__copy">
        <h1>Contact Us</h1>
        <div class="ve-scene__description">
          <div>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</div>
          <div style="margin-top: 20px"><a href="mailto:info@velvetelvisstudios.com">info@velvetelvisstudios.com</a></div>
        </div>
        <!-- <div class="ve-scene__button"><a class="primary-button" href="#scene-2">Contact us</a></div> -->
      </div>
    </div>

  </section>

  <div class="ve-scroll">
    <section class="ve-scroll__step" data-scene="0"></section>
    <section class="ve-scroll__step" data-scene="1"></section>
    <section class="ve-scroll__step" data-scene="2"></section>
  </div>

</main>
</section>  

<?php //endwhile; ?>
<?php //endif; ?>

