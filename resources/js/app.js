(function ($) {
  $(document).ready(function () {
    console.log("hola");

    $(".slider-services").slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      dots: true,
      arrows: false,
      responsive: [
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
      ],
    });
  });

  $(window).load(function () {});

  $(window).resize(function () {});
})(window.jQuery);
