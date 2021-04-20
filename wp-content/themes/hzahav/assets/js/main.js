
jQuery(document).ready(function($){
  // $('body').addClass('hidden');
 
    // setTimeout(() => {
    //   $("#preloader").fadeOut();
    //   $('body').removeClass('hidden');
    // }, 2000);


    // $(window).on('load', function(){
    //   function Preloader() {
    //       var preloader = $ ('.loader');
    //       preloader.fadeOut(500);
    //       var preloader = $('#preloader');
    //       preloader.slideUp(500);
    //   }
    //   if ( ! sessionStorage.getItem( 'doNotShow' ) ) {
    //       sessionStorage.setItem( 'doNotShow', true );
    //       Preloader();
    //   } else {
    //      $ ('.loader, #preloader').hide();
    //      $('body').removeClass('hidden');
    //   }
    // });

// SLIDER REV
$('.search-content__slider').slick({
    centerMode: true,
    slidesToShow: 1,
    dots: false,
    centerPadding: '0',
    nextArrow: '',
    prevArrow: '',
    arrows: true,
    infinite: true,
  });

  $('.without-single .single-project-slider__content').slick({
    centerMode: true,
    slidesToShow: 1,
    dots: false,
    centerPadding: '0',
    nextArrow: '',
    prevArrow: '',
    arrows: true,
    infinite: true,
  });

  $('.section-slider').slick({
    slidesToShow: 1,
    dots: false,
    arrows: false,
    infinite: true,
  });


    // Next slide button
    $('.carousel-controls__next').click(function() {
      $('.section-slider').slick('slickNext');
  });

  // Prev slide button
  $('.carousel-controls__prev').click(function() {
      $('.section-slider').slick('slickPrev');
  });

  $('.tab-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.tab-slider-nav',
  });

  $('.tab-slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    centerMode: true,
    asNavFor: '.tab-slider',
    dots: false,
    focusOnSelect: true,
    responsive: [
        {       
            breakpoint: 1300,
            settings:{
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true
            }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
  });


//   $('.media-content__blocks .parent').slick({
//     centerMode: true,
//     slidesToShow: 1,
//     dots: true,
//     centerPadding: '0',
//     nextArrow: '',
//     prevArrow: '',
//     arrows: true,
//     infinite: true,
//   });

  
    if (window.matchMedia("(max-width: 540px)").matches) {
        $('.home .media-content__blocks .parent').slick({
            centerMode: true,
            slidesToShow: 1,
            dots: true,
            centerPadding: '0',
            nextArrow: '',
            prevArrow: '',
            arrows: true,
            infinite: true,
        });
      } 
      if (window.matchMedia("(max-width: 540px)").matches) {
        $('.about-project__content-image').slick({
            centerMode: true,
            slidesToShow: 1,
            dots: true,
            nextArrow: '',
            prevArrow: '',
            arrows: true,
            infinite: true,
        });
      } 
      
      if (window.matchMedia("(max-width: 540px)").matches) {
        $('.single .project-content__blocks').slick({
            centerMode: true,
            slidesToShow: 1,
            dots: true,
            centerPadding: '0',
            arrows: false,
            infinite: true,
            adaptiveHeight: true,
        });
    };
    if (window.matchMedia("(max-width: 540px)").matches) {
        $('.home .project-content__blocks').slick({
            centerMode: true,
            slidesToShow: 1,
            dots: true,
            centerPadding: '0',
            arrows: false,
            infinite: true,
            adaptiveHeight: true,
        });
    };

    if (window.matchMedia("(max-width: 540px)").matches) {
        $('.article-parent').slick({
            centerMode: true,
            slidesToShow: 1,
            dots: true,
            centerPadding: '0',
            nextArrow: '',
            prevArrow: '',
            arrows: true,
            infinite: true,
            adaptiveHeight: true,
        });
      } 

    if (window.matchMedia("(max-width: 768px)").matches) {
        $('.partners-image').slick({
            centerMode: true,
            slidesToShow: 2,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: false,
            centerPadding: '20px',
            arrows: false,
            infinite: true,
            adaptiveHeight: true,
        });
      } 

    // if (window.matchMedia("(max-width: 540px)").matches) {
    //     $('.our-team__content-blocks').slick({
    //         centerMode: true,
    //         slidesToShow: 1,
    //         dots: true,
    //         centerPadding: '0',
    //         arrows: false,
    //         infinite: true,
    //     });
    // };
    
    // Next slide button
    $('.carousel-controls__next').click(function() {
        $('.search-content__slider').slick('slickNext');
    });

    // Prev slide button
    $('.carousel-controls__prev').click(function() {
        $('.search-content__slider').slick('slickPrev');
    });

    $('.custom-select__trigger').click(function() {
      $('.custom-options').css('display', 'none');
      $(this).parent().find('.custom-options').slideToggle('fast');
      $(this).find('span').toggleClass('active');    
    });

    $('.custom-option').click(function(){
        $(this).siblings().removeClass('selected');
        $(this).addClass('selected');
        var text = $(this).html();
        $(this).parent().css("display", "none");
        $(this).parent().parent().find('.custom-select__trigger').html('<span>' + text + '</span>');
    });

    $('.burger-menu').click(function(){
        $(this).toggleClass('menu-opened');
        $('.main-menu').toggleClass('opened');
        $('body').toggleClass('hidden');
    });

    $('.with.single-project-slider__content').slick('unslick');
    $('.without .search-content__slider').slick('unslick');
    $('.with .search-content__slider').slick('unslick');

    $('.archive .search-content__slider').slick('unslick');
    $('.single-post-type .single-project-slider__content').slick('unslick');
    $('.tab').click(function(){
        $('.tab-slider').slick('unslick');
        $('.tab-slider-nav').slick('unslick');
        console.log('clicked');
        $('.tab-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.tab-slider-nav'
          });
          $('.tab-slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            centerMode: true,
            asNavFor: '.tab-slider',
            dots: false,
            focusOnSelect: true
          }); 
        
    });

    $('.search-box form').on('submit', function(e){
      e.preventDefault();
      if(window.location.href.indexOf("/en/") > -1){
        var area = $('.area span').text().replace(' ', '_');
        var religious = $('.religious span').text().replace(' ', '_');
        var house = $('.house span').text().replace(' ', '_');
        var sarea; 
        var sreligious;
        var shouse;
        if(area == 'choose_option' || area == 'בחר_באפשרות'){ sarea = '&area= '  } else{ sarea = '&area='+ area}  
        if(religious == 'choose_option' || religious == 'בחר_באפשרות'){ sreligious = '&religious= '  } else{ sreligious = '&religious='+ religious}  
        if(house == 'choose_option' || house == 'בחר_באפשרות'){ shouse = '&house= '  } else{ shouse= '&house='+ house}  
        let url = '/en/search-post/?' + sarea + sreligious + shouse;
        window.location.href = url;
      }
     else{
      var area = $('.area span').text().replace(' ', '_');
        var religious = $('.religious span').text().replace(' ', '_');
        var house = $('.house span').text().replace(' ', '_');
        var sarea; 
        var sreligious;
        var shouse;
        if(area == 'choose_option' || area == 'בחר_באפשרות'){ sarea = '&area= '  } else{ sarea = '&area='+ area}  
        if(religious == 'choose_option' || religious == 'בחר_באפשרות'){ sreligious = '&religious= '  } else{ sreligious = '&religious='+ religious}  
        if(house == 'choose_option' || house == 'בחר_באפשרות'){ shouse = '&house= '  } else{ shouse= '&house='+ house}  
        let url = '/search-post/?' + sarea + sreligious + shouse;
        window.location.href = url;
     }
    });

    $(".with-single .search__button").on("click","a", function (event) {
      event.preventDefault(); //опустошим стандартную обработку
      var id  = $(this).attr('href'), //заберем айдишник блока с параметром URL
        top = $(id).offset().top; //определим высоту от начала страницы до якоря
        $('body,html').animate({scrollTop: top}, 1000); //сделаем прокрутку за 1 с
    });
    // $(".button-more").click(function (event) {
    //   event.preventDefault(); //опустошим стандартную обработку
    //   var id  = $(this).attr('href'), //заберем айдишник блока с параметром URL
    //     top = $(id).offset().top; //определим высоту от начала страницы до якоря
    //     $('body,html').animate({scrollTop: top}, 1000); //сделаем прокрутку за 1 с
    // });
    
    $('.tab').click(function(){
      var data = $(this).attr('data');
      $(this).addClass('active');
      if($(this).hasClass('active')){
        $(this).parent().parent().find('#content-'+ data +'').addClass('tab-show');
        $(this).parent().parent().find('#content-'+ data +'').siblings().removeClass('tab-show');
        $(this).siblings().removeClass('active');
      } 
      else{
        console.log('notsummer');
      }
    });
    
    $('.tab:first').addClass( 'active' );
    $('.tabs-i-main:first').addClass('tab-show');
    

    $('.single-project-without .slick-track').each(function() {
      var stHeight = $(this).height();
      $(this).find('.slick-slide').css('height',stHeight + 'px' );
    });

});
