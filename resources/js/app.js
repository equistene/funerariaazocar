// Navigation toggle
window.addEventListener("load", function () {
  let main_navigation = document.querySelector("#primary-menu");
  document
    .querySelector("#primary-menu-toggle")
    .addEventListener("click", function (e) {
      e.preventDefault();
      main_navigation.classList.toggle("hidden");
    });
});

(function ($) {
  $(document).ready(function () {
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
