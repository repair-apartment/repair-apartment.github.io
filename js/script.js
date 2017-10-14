$(function() {

// Menu

  $('.header__icon').click(function() {
    $('.header__nav').fadeIn(500);
  })

  $('.nav__cross').click(function() {
    $('.header__nav').fadeOut(500)
  });



//Scroll

$('.nav__link').click(function(e) {
  e.preventDefault();
  var idNow = $(this).attr('href'),
      offset = $(idNow).offset().top;

  $("html,body").animate({
    scrollTop: offset - 50
  },1000)

  if ($('.nav__cross').is(':visible')){
    $('.header__nav').fadeOut(500)
  }

})


//Tabs

 $('.bxslider').bxSlider();
 $('#tab-container').easytabs({
  animationSpeed:"fast"
 });


//Progress Upload




//Preloader
var preloader = $('.preloader'),
    overlay   = $('.overlay');
    images    = $('img'),
    percent   = 100 / images.length,
    progress  = 0,
    loaded    = 0,
    loadedImg = 0;

for (var i = 0; i < images.length; i++) {
  var img_copy     = new Image();
  img_copy.src     = images[i].src;
  img_copy.onload  = img_load,2000;
  img_copy.onerror = img_load;
  console.log(img_copy.src)
}


function img_load(){
  progress += +percent;
  loadedImg++;
  if (progress >= 100 || loadedImg == images.length){
    preloader.delay(300).fadeOut('1000');
    overlay.delay(300).fadeOut('1000');
  }
  $('#preloader__percent').text(progress);
  $('.preloader__line').css('width',progress + '%');
}


//Animate

$(window).scroll(function() {
    $('.animated').each(function(){
      var imagePos = $(this).offset().top;
      var topOfWindow = $(window).scrollTop();
      if (imagePos < topOfWindow + 1000) {
        $(this).addClass($(this).attr('data-animate'));
      }
    });
  });


});


