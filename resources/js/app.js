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

    $("#accordion").accordion({
      collapsible: true,
      heightStyle: "content",
    });

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
