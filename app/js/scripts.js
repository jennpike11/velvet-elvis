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
    var $scene = $scenes.eq(index);
    var sceneName = $scene.data('scene-name');

    return sceneName ? slugify(sceneName) : 'scene-' + (index + 1);
  }

  function getSceneIndexFromHash(hash) {
    var cleanedHash = hash.replace('#', '');
    var matchedIndex = null;

    $scenes.each(function(index) {
      if (getSceneSlug(index) === cleanedHash || cleanedHash === 'scene-' + (index + 1)) {
        matchedIndex = index;
      }
    });

    return matchedIndex;
  }

  function setScene(index, updateHash) {
    index = parseInt(index, 10);

    if (isNaN(index) || index < 0 || index >= sceneCount) {
      return;
    }

    if (index === currentIndex && $('.ve-scene.is-active').data('scene') === index) {
      return;
    }

    clearTimeout(sceneTimeout);

    var $currentScene = $('.ve-scene.is-active');
    var $nextScene = $scenes.eq(index);

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

  $('.menu a, a[href^="#"]').on('click', function(e) {
    var href = $(this).attr('href');
    var index = null;

    if (href && href.indexOf('#') === 0) {
      index = getSceneIndexFromHash(href);
    }

    if (index === null) {
      index = $(this).closest('li').data('scene');
    }

    if (index !== undefined && index !== null && index >= 0 && index < sceneCount) {
      e.preventDefault();
      setScene(index, true);
    }
  });

  var matchedIndex = getSceneIndexFromHash(window.location.hash);

  if (matchedIndex !== null) {
    currentIndex = matchedIndex;
    $scenes.removeClass('is-active is-under');
    $scenes.eq(matchedIndex).addClass('is-active');
    $buttons.removeClass('is-active');
    $buttons.eq(matchedIndex).addClass('is-active');
  } else {
    $buttons.eq(0).addClass('is-active');
  }
});