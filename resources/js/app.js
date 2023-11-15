(function ($) {
  $(document).ready(function () {
    let mostar = document.getElementById("mostrar");
    let cerrar = document.getElementById("cerrar");
    let dialogo = document.getElementById("dialogo");    

    mostrar.addEventListener("click", function () {
      dialogo.showModal();
    });

    // Form cancel button closes the dialog box
    cerrar.addEventListener("click", function () {
      dialogo.close();
    });

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
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: true,
    });
  });

  $(window).load(function () {});

  $(window).resize(function () {});
})(window.jQuery);
