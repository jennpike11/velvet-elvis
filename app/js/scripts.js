jQuery(function($) {
  var $scenes = $('.ve-scene');
  var $buttons = $('.menu li');
  var currentIndex = 0;
  var sceneTimeout;

  function setScene(index) {
    if (index === currentIndex) {
      return;
    }

    clearTimeout(sceneTimeout);

    var $currentScene = $('.ve-scene.is-active');
    var $nextScene = $('.ve-scene[data-scene="' + index + '"]');

    $scenes
      .not($currentScene)
      .not($nextScene)
      .removeClass('is-active is-under');

    $currentScene
      .removeClass('is-active')
      .addClass('is-under');

    $nextScene
      .removeClass('is-under')
      .addClass('is-active');

    $buttons.removeClass('is-active');
    $buttons.eq(index).addClass('is-active');

    currentIndex = index;

    sceneTimeout = setTimeout(function() {
      $scenes.not('.is-active').removeClass('is-under');
    }, 650);
  }

  $buttons.each(function(index) {
    $(this).attr('data-scene', index);
  });

  $buttons.on('click', function(e) {
    e.preventDefault();

    var index = $(this).data('scene');
    setScene(index);
  });

  $buttons.eq(0).addClass('is-active');
});