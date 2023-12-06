(function ($) {
  $(document).ready(function () {
    $(".slider").slick({
      arrows: false,
      dots: true,
      infinite: true,
    });

    $(".slick-dots li button").empty();
  });
})(jQuery);
