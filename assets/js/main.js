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



$(document).ready(function() {
  $('#banner').on('init', function(e, slick) {
      var $firstAnimatingElements = $('div.main-banner__img:first-child').find('[data-animation]');
      doAnimations($firstAnimatingElements);    
  });

  $('#banner').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
      var $animatingElements = $('div.main-banner__img[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
      doAnimations($animatingElements);    
  });

  $('.banner-slider').slick({
    infinite: true,
    fade: true,
    cssEase: 'linear',
    autoplay:true,
    autoplaySpeed: 5000
  });

  function doAnimations(elements) {
    var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    elements.each(function() {
      var $this = $(this);
      var $animationDelay = $this.data('delay');
      var $animationType = 'animated ' + $this.data('animation');
      $this.css({
        'animation-delay': $animationDelay,
        '-webkit-animation-delay': $animationDelay
      });
      $this.addClass($animationType).one(animationEndEvents, function() {
        $this.removeClass($animationType);
      });
    });
  }
});


function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}