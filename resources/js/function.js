$(document).ready(function () {
  $(".testSlider").slick({
    autoplay: true,
    autoplaySpeed: 1000,
    dots: false,
    infinite: true,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: ".prev",
    nextArrow: ".next",
  });
});

$(document).ready(function () {
  $(".test-slider").slick({
    autoplay: true,
    dots: true,
    infinite: true,
    autoplaySpeed: 1000,
    speed: 3000,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: false,
  });
});
