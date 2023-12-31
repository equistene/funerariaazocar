(function ($) {
  $(document).ready(function () {    

    const divToMakeSticky = document.getElementById("header");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 3) {
            divToMakeSticky.classList.add("stickied");
        } else {
            divToMakeSticky.classList.remove("stickied");
        }
    });


    $("button#menu").click(function () {
      $("nav.menu-mobile").slideToggle("fast", function () {});
    });

    $("#accordion").accordion({
      collapsible: true,
      heightStyle: "content",
      active: "none",
    });

    $(".slider-services").slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 2,
      dots: true,
      arrows: true,
      appendArrows: $(".slick-slider-nav"),
      appendDots: $(".slider-dots"),
      prevArrow: $(".arrow-prev"),
      nextArrow: $(".arrow-next"),
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

    $(".js-gallery").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: true,
      variableWidth: true,
      lazyLoad: "ondemand",
      dots: true,
      arrows: true,
      appendArrows: $(".slick-slider-nav"),
      appendDots: $(".slider-dots"),
      prevArrow: $(".arrow-prev"),
      nextArrow: $(".arrow-next"),
    });

    $(".js-gallery-small").slick({
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: false,
    });

    $(".js-gallery-model").slick({
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      arrows: false,
      fade: true,
      asNavFor: '.js-gallery-model-thumbnails'
    });

    $('.js-gallery-model-thumbnails').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.js-gallery-model',
      dots: false,
      centerMode: false,
      focusOnSelect: true
    });

  });

  $(window).load(function () {});

  $(window).resize(function () {});
})(window.jQuery);
