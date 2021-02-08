// Hero Carousel Slick Carousel
$(document).ready(function () {
  var $slider = $("#hero-carousel");
  var $progressBar = $("#hero-carousel-progress");
  var $progressBarLabel = $("#hero-carousel-progress .slider__label");

  $slider.on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    var calc = (nextSlide / (slick.slideCount - 1)) * 100;

    $progressBar
      .css("background-size", calc + "% 100%")
      .attr("aria-valuenow", calc);

    $progressBarLabel.text(calc + "% completed");
  });

  $slider.slick({
    prevArrow: $("#hero-carousel-navigation .prev"),
    nextArrow: $("#hero-carousel-navigation .next")
  });
});


// About IIT ISM Slick Carousel 
$(document).ready(function () {
  var $slider = $("#about-acme-carousel");
  var $progressBar = $("#about-acme-carousel-progress");
  var $progressBarLabel = $("#about-acme-carousel-progress .slider__label");

  $slider.on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    var calc = (nextSlide / (slick.slideCount - 1)) * 100;

    $progressBar
      .css("background-size", calc + "% 100%")
      .attr("aria-valuenow", calc);

    $progressBarLabel.text(calc + "% completed");
  });

  $slider.slick({
    prevArrow: $("#about-acme-carousel-navigation .prev"),
    nextArrow: $("#about-acme-carousel-navigation .next")
  });
});


// Sidebar Slick Carousel 
$(document).ready(function () {
  var $slider = $("#sidebar-carousel");
  var $progressBar = $("#sidebar-carousel-progress");
  var $progressBarLabel = $("#sidebar-carousel-progress .slider__label");

  $slider.on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    var calc = (nextSlide / (slick.slideCount - 1)) * 100;

    $progressBar
      .css("background-size", calc + "% 100%")
      .attr("aria-valuenow", calc);

    $progressBarLabel.text(calc + "% completed");
  });

  $slider.slick({
    prevArrow: $("#sidebar-carousel-navigation .prev"),
    nextArrow: $("#sidebar-carousel-navigation .next"),
  });
});
