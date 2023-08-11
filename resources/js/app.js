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

    $(".js-gallery").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: false,
      centerMode: true,
      variableWidth: true,
      lazyLoad: "ondemand",
    });
  });

  $(window).load(function () {});

  $(window).resize(function () {});
})(window.jQuery);
