// Avoid `console` errors in browsers that lack a console.
(function() {
  var method
  var noop = function() {}
  var methods = [
    "assert",
    "clear",
    "count",
    "debug",
    "dir",
    "dirxml",
    "error",
    "exception",
    "group",
    "groupCollapsed",
    "groupEnd",
    "info",
    "log",
    "markTimeline",
    "profile",
    "profileEnd",
    "table",
    "time",
    "timeEnd",
    "timeline",
    "timelineEnd",
    "timeStamp",
    "trace",
    "warn"
  ]
  var length = methods.length
  var console = (window.console = window.console || {})

  while (length--) {
    method = methods[length]

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop
    }
  }
})()
if (typeof jQuery === "undefined") {
  console.warn("jQuery hasn't loaded")
} else {
  console.log("jQuery " + jQuery.fn.jquery + " has loaded")
}
// Place any jQuery/helper plugins in here.

(function() {

  $('document').ready(function() {
    // Photoswipe:
    initPhotoSwipe('.wpPhotoSwipe', '.wpPhotoSwipeImage', 'A', '.caption');

    // Productsearch:
    jQuery.expr[':'].icontains = function(a, i, m) {
      return jQuery(a).text().toUpperCase()
        .indexOf(m[3].toUpperCase()) >= 0;
    };
    $('.wpProductSearch INPUT').on('keyup', function() {
      var q = $(this).val();
      var navlist = $(this).parent().find('ul');
      navlist.children().hide();
      navlist.find('LI:icontains(' + q + ')').show();
      navlist.show();
    })

    //Same Height Containers
    $('.row > .wpCard > .card').matchHeight({
      byRow: true,
      property: 'height',
      target: null,
      remove: false
    });

  });

  // close productsearch when clicking outside:
  $(document).mouseup(function(e) {
    var container = $(".wpProductSearch UL");

    if (!container.is(e.target) // if the target of the click isn't the container...
      && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
      container.hide();
    }
  });

})();

jQuery(document).ready(function($) {

  $("#menu").mmenu({
    "extensions": [
      "fx-menu-zoom",
      "pagedim-black",
      "position-right"
    ]
  });
  var API = $("#menu").data("mmenu");
  $(".navbar-toggler").click(function() {
    API.open();
  });
});
