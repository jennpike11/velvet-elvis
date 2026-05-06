jQuery(function($) {
  var $window = $(window);
  var $scenes = $('.ve-scene');
  var $steps = $('.ve-scroll__step');
  var currentIndex = 0;
  var ticking = false;

  function setScene(index) {
    if (index === currentIndex) {
      return;
    }

    var $currentScene = $('.ve-scene.is-active');
    var $nextScene = $('.ve-scene[data-scene="' + index + '"]');

    $scenes.removeClass('is-under');

    $currentScene
      .removeClass('is-active')
      .addClass('is-under');

    $nextScene
      .addClass('is-active');

    currentIndex = index;

    setTimeout(function() {
      $currentScene.removeClass('is-under');
    }, 1400);
  }

  function updateScenes() {
    var scrollTop = $window.scrollTop();
    var stepHeight = $steps.first().outerHeight();
    var nextIndex = Math.round(scrollTop / stepHeight);

    if (nextIndex < 0) {
      nextIndex = 0;
    }

    if (nextIndex > $steps.length - 1) {
      nextIndex = $steps.length - 1;
    }

    setScene(nextIndex);
    updateParallax(scrollTop, stepHeight, nextIndex);

    ticking = false;
  }

  function updateParallax(scrollTop, stepHeight, sceneIndex) {
    var localProgress = (scrollTop - (sceneIndex * stepHeight)) / stepHeight;
    var $activeScene = $('.ve-scene.is-active');

    var bgMove = localProgress * 10;
    var midMove = localProgress * 22;

    $activeScene.find('.ve-scene__bg').css({
      transform: 'translate3d(0,' + bgMove + 'px,0) scale(1.015)'
    });

    $activeScene.find('.ve-scene__mid').css({
      transform: 'translate3d(0,' + midMove + 'px,0)'
    });
  }

  function requestUpdate() {
    if (!ticking) {
      window.requestAnimationFrame(updateScenes);
      ticking = true;
    }
  }

  $window.on('scroll resize', requestUpdate);

  updateScenes();
});