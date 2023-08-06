(function ($) {
  $(document).ready(function () {
    console.log("hola");

    $(".single-item").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      arrows: false,
    });
  });

  $(window).load(function () {});

  $(window).resize(function () {});
})(window.jQuery);
