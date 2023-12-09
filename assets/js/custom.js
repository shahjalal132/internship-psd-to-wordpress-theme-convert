(function ($) {
  $(document).ready(function () {
    // Slick slider
    $(".slider").slick({
      arrows: false,
      dots: true,
      infinite: true,
    });

    $(".slick-dots li button").empty();

    // mixitup filter
    var mixer = mixitup(".mix-filter-wrapper");
  });
})(jQuery);
