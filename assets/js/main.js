$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
    // $('.img-pd').toggleClass('opac')
    
    
  })
})


// Menú fixed
$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() <=991)) {

    $('.navbar').addClass('nav-bg2')
    $('#iso').addClass('iso-small')
 
  } else {
    $('.navbar').removeClass('nav-bg2')
    $('#iso').removeClass('iso-small')

  }
});

// Menú fixed
$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() >=992)) {
    $('.navbar-toggler').addClass('navbar-btn')
  } else {
    $('.navbar-toggler').removeClass('navbar-btn')
  }
});

$('[data-toggle="offcanvas"]').on('click', function () {
  if ($(document).scrollTop() > 70 && ($(window).width() >=992)) {
    $('.offcanvas-collapse').toggleClass('off-top')
    $('#img-pd').toggleClass('opac')
  }  
})

// menu hambuger
$(".hamburger").on("click", function () {
  if (!$(this).hasClass("is-active")) {
    $(this).addClass("is-active")
    $('.navbar-fixed-js').addClass('fixed');
    $('.hamburger-inner').addClass('js-hamburger');
    $('.navbar').addClass('nav-bg')
    // $('html').css('overflow', 'hidden ');
    $('html').addClass('fixed');

  } else {
    $(this).removeClass("is-active")
    $('html').removeClass('fixed');
    $('.navbar').removeClass('nav-bg');
    if ($(document).scrollTop() <= 70 && ($(window).width() <=767)) {
      $('.navbar-fixed-js').removeClass('fixed');
      $('.hamburger-inner').removeClass('js-hamburger');
      $('.navbar').removeClass('nav-bg');
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