$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
    // $('.navbar').toggleClass('nav-bg')
    
    
  })
})


// Menú fixed
$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() > 0)) {
   
    $('.navbar').addClass('nav-bg')
 
  } else {
    $('.navbar').removeClass('nav-bg')

  }
});


// menu hambuger
$(".hamburger").on("click", function () {
  if (!$(this).hasClass("is-active")) {
    $(this).addClass("is-active")
    $('.navbar-fixed-js').addClass('fixed');
    $('.hamburger-inner').addClass('js-hamburger');
    $('.navbar').addClass('nav-bg2')
    // $('html').css('overflow', 'hidden ');
    $('html').addClass('fixed');
    
  } else {
    $(this).removeClass("is-active")
    $('html').removeClass('fixed');
    if ($(document).scrollTop() <= 70 && ($(window).width() <=767)) {
      $('.navbar-fixed-js').removeClass('fixed');
      $('.hamburger-inner').removeClass('js-hamburger');
      $('.navbar').removeClass('nav-bg2');
      $('html').toggleClass('fixed');

    }
  }
});

$(function () {
  'use strict'

  $('.nav-link').on('click', function () {
    $('.offcanvas-collapse').removeClass('open')
    $('.hamburger').removeClass('is-active')
    $('html').removeClass('fixed');

  })
})