<?php // Hero Block

  if( have_rows('hero_block') ): 
    while( have_rows('hero_block') ): the_row(); 
  ?>

<section class="hero-block__wrapper page-type--<?php echo $page ?> background-color--<?php echo $backgroundColor ?>">
  <main class="ve-site">

  <section class="ve-stage">

    <div class="ve-scene ve-scene--hula is-active" data-scene="0">
      <div class="ve-scene__bg"></div>
      <div class="ve-scene__mid"></div>
      <img class="ve-scene__float ve-scene__float--hula" src="https://dev-velet-elvis.pikexdigital.com/wp-content/uploads/2026/05/hula_girl.png" alt="">
      <div class="ve-scene__copy">
        <h1>Velvet Elvis Studios</h1>
        <div class="ve-scene__description">Retro island atmosphere, handmade visuals, and cinematic creative work.</div>
      </div>
    </div>

    <div class="ve-scene ve-scene--volcano" data-scene="1">
      <div class="ve-scene__bg"></div>
      <div class="ve-scene__mid"></div>
      <div class="ve-scene__ember ve-scene__ember--one"></div>
      <div class="ve-scene__ember ve-scene__ember--two"></div>
      <img class="ve-scene__float ve-scene__float--volcano" src="https://dev-velet-elvis.pikexdigital.com/wp-content/uploads/2026/05/volcano.png" alt="">
      <img class="ve-scene__float ve-scene__float--volcano-flowers" src="https://dev-velet-elvis.pikexdigital.com/wp-content/uploads/2026/05/flowers.png" alt="">
      <div class="ve-scene__copy">
        <h2>Atmos First</h2>
        <div class="ve-scene__description">Slow movement, warm color, and a site that feels like stepping into the artwork.</div>
      </div>
    </div>

    <div class="ve-scene ve-scene--players" data-scene="2">
      <div class="ve-scene__bg"></div>
      <div class="ve-scene__mid"></div>
      <img class="ve-scene__float ve-scene__float--palms" src="https://dev-velet-elvis.pikexdigital.com/wp-content/uploads/2026/05/palm_trees_2.png" alt="">
      <img class="ve-scene__float ve-scene__float--players" src="https://dev-velet-elvis.pikexdigital.com/wp-content/uploads/2026/05/players.png" alt="">
      <div class="ve-scene__copy">
        <h2>Made to Move</h2>
        <div class="ve-scene__description">A one page experience guided by scroll, rhythm, and restraint.</div>
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

<?php endwhile; ?>
<?php endif; ?>

