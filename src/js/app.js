import jquery from 'jquery';
import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal'
import 'flickity/dist/flickity.css';

window.jQuery = window.$ = jquery;

require('bootstrap');

(function () {

  /**
   * Burger-menu
   */
  $('.burger-menu').on('click', function () {
    $(this).toggleClass('active');
    $('.menu').toggleClass('active');
  })

  /**
   * Form-label
   */

  $('.form-control').on('focus', function () {
    $(this).parent().addClass('in-focus');
  });

  $('.form-control').on('blur', function () {
    if ($(this).val() !== "") {
      $(this).parents('.form-group').addClass('in-focus');
    } else {
      $(this).parents('.form-group').addClass('in-focus');
    }
  });

  /**
   * Scroll Link
   */
  $(".scroll-link").on("click", function (event) {
    event.preventDefault();

    var id = $(this).attr('href');

    if (id.length > 1) {

      var top = $(id).offset().top;

      $('body,html').animate({
        scrollTop: top
      }, 1500);

      $('.burger-menu').removeClass('active');
      $('.menu').removeClass('active');
    }
  });


  /**
   * Sliders
   */
  if ($('.intro-slider')) {

    var elem1 = document.querySelector('.intro-slider');
    if (elem1) {

      const flkty1 = new Flickity(elem1, {
        prevNextButtons: false,
        cellAlign: 'left',
        contain: true,
        draggable: true,
        wrapAround: true,
      });


      var nextArrowIntro = document.querySelector('.slider-arrow-item--next-intro');

      nextArrowIntro.addEventListener('click', function () {
        flkty1.next(true, false);
      });
    }
  }

})(jQuery)