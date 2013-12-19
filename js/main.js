//
$(function() {
  slides();

  $('#nav_dropdown a').click(show_drop_down);

  $('#images a').colorbox();

/*  (function() {
    $slide_container = $('#slideshow');
    $first = $slide_container.children(':first-child').addClass('active');
    $others = $slide_container.children('img:gt(0)').hide().addClass('inactive');
    $first.next().fadeIn().removeClass('inactive').addClass('active');
    $first.fadeOut().removeClass('active').appendTo($slide_container).addClass('inactive');
    setTimeout(arguments.callee, 4000);
  })();*/

  // $('#buttons #next').click(show_next);
  // $('#buttons #prev').click(show_prev);

})

//
var show_drop_down = function () {
  $('#hidden_dropdown').toggleClass('gone');
}

//
var slides = function() {
  $slide_container = $('#slideshow');
  $first = $slide_container.children(':first-child');
  $others = $slide_container.children('img:gt(0)');
  $first.next().addClass('active').animate({ 'left':0 }, 1000,
    function() {
      $first.appendTo($slide_container).css({'left':400}).removeClass('active');
  });
  setTimeout(arguments.callee, 4000);
};

//
var show_next = function() {
  $current = $('#slideshow img.active');
  $parent = $current.parent();
  $next = $current.next();
  $next.animate({'left':0}).prependTo($parent);
  // slides();
}

//
var show_prev = function() {
  $current = $('#slideshow img.active');
  $parent = $current.parent();
  $prev = $parent.children(':last-child');
  $prev.css({'left':-400}, function() {
    $(this).animate({'left':0}).prependTo($parent);
  })
  // slides();
}