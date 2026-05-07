jQuery(function($) {
  var $scenes = $('.ve-scene');
  var $buttons = $('.menu li');
  var currentIndex = 0;
  var sceneTimeout;
  var sceneCount = Math.min($scenes.length, 5);

  $scenes = $scenes.slice(0, sceneCount);
  $buttons = $buttons.slice(0, sceneCount);

  function slugify(text) {
    return text
      .toString()
      .toLowerCase()
      .trim()
      .replace(/&/g, 'and')
      .replace(/[^a-z0-9\s-]/g, '')
      .replace(/\s+/g, '-')
      .replace(/-+/g, '-');
  }

  function getSceneSlug(index) {
    var $scene = $('.ve-scene[data-scene="' + index + '"]');
    var sceneName = $scene.data('scene-name');

    return sceneName ? slugify(sceneName) : 'scene-' + (index + 1);
  }

  function setScene(index, updateHash) {
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

    if (updateHash !== false) {
      history.replaceState(null, null, '#' + getSceneSlug(index));
    }

    currentIndex = index;

    sceneTimeout = setTimeout(function() {
      $scenes.not('.is-active').removeClass('is-under');
    }, 500);
  }

  $buttons.each(function(index) {
    $(this).attr('data-scene', index);
  });

  $buttons.on('click', function(e) {
    e.preventDefault();

    var index = $(this).data('scene');

    if (index >= 0 && index < sceneCount) {
      setScene(index, true);
    }
  });

  $('a[href^="#"]').on('click', function(e) {
    var hash = $(this).attr('href').replace('#', '');
    var matchedIndex = null;

    $scenes.each(function(index) {
      if (getSceneSlug(index) === hash) {
        matchedIndex = index;
      }
    });

    if (matchedIndex !== null) {
      e.preventDefault();
      setScene(matchedIndex, true);
    }
  });

  var hash = window.location.hash.replace('#', '');
  var matchedIndex = null;

  if (hash) {
    $scenes.each(function(index) {
      if (getSceneSlug(index) === hash) {
        matchedIndex = index;
      }
    });
  }

  if (matchedIndex !== null) {
    currentIndex = matchedIndex;
    $scenes.removeClass('is-active is-under');
    $('.ve-scene[data-scene="' + matchedIndex + '"]').addClass('is-active');
    $buttons.removeClass('is-active');
    $buttons.eq(matchedIndex).addClass('is-active');
  } else {
    $buttons.eq(0).addClass('is-active');
  }
});