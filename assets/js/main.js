$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
    $('.navbar').toggleClass('nav-bg')
  })
})
$(function () {
  'use strict'

  $('.nav-link').on('click', function () {
    $('.offcanvas-collapse').removeClass('open')
    $('.navbar').removeClass('nav-bg')
  })
})




// Menú fixed
$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() >= 768)) {
   
    // $('.navbar-fixed-js').addClass('top');
    // $('.navbar-fixed-js').removeClasss('top');
  } else {
    // $('.navbar-fixed-js').removeClass('fixed');
    // $('.nav-link').removeClass('fixed-color');
    // $('.nav-top__header').removeClass('nav-top__header--detele');
    // $("#iso").removeClass('img-size').attr('src', 'assets/img/logo.jpeg').removeClass('scroll-up');
    // $('.navbar').addClass('top');
 
    // $('.navbar-fixed-js').addClass('top');
    // $('.navbar-fixed-js').removeClasss('top');
  }
});


// menu hambuger


$(".hamburger").on("click", function () {
  if (!$(this).hasClass("is-active")) {
    $(this).addClass("is-active")
    $('.navbar-fixed-js').addClass('fixed');
    $('.hamburger-inner').addClass('js-hamburger');
  } else {
    $(this).removeClass("is-active")
    if ($(document).scrollTop() <= 70 && ($(window).width() >= 0)) {
      $('.navbar-fixed-js').removeClass('fixed');
      $('.hamburger-inner').removeClass('js-hamburger');
 ;

    }
  }
});