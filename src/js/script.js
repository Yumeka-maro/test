
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
  //ハンバーガーメニュー
  $(".js-hamburger,.js-sp-nav").click(function () {
    if ($(".js-hamburger").hasClass('is-active')){
        $('.js-hamburger').removeClass("is-active");
        $(".js-sp-nav").fadeOut();
    } else {
        $('.js-hamburger').addClass("is-active");
        $(".js-sp-nav").fadeIn();
    }
    });


//ハンバーガー開いている時背景スクロールしない
$(".js-hamburger").click(function () {
  $("body").toggleClass('no-scroll');
});

//ドロワー横向き
window.addEventListener('resize', function() {
  const drawerInner = document.querySelector('.drawer__inner');
  if (window.innerHeight < window.innerWidth) {
      drawerInner.style.maxHeight = '100vh';
  } else {
      drawerInner.style.maxHeight = '100vh';
  }
});

//ドロワー768px以上のとき閉じる
window.addEventListener('resize', function() {
    const drawer = document.querySelector('.js-sp-nav');

    if (window.innerWidth >= 768) {
        drawer.style.display = 'none';
        document.body.classList.remove('no-scroll');
    }
});


  //ヘッダー高さ分下げる
  $('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top - $('.header').outerHeight()
        }, 1000);
    }
});

//ヘッダー色変わる
$(function () {
  $(window).on('scroll', function () {
      if ($('.mv').height() < $(this).scrollTop()) {
          $('.js-header').addClass('change-color');
    } else {
          $('.js-header').removeClass('change-color');
    }
  });
});

    //メインビュースワイパー
    const mv__swiper = new Swiper(".js-mv-swiper", {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,
    autoplay: {
    delay: 3000,
    },
  });

  // キャンペーンスワイパー
  const campaign__swiper = new Swiper(".js-campaign-swiper", {
    slidesPerView: "auto",
    spaceBetween: 24,
    allowSlideNext: true,
    allowSlidePrev: true,
    breakpoints:{
      768:{
        spaceBetween: 40,
      }
    },
    autoplay: {
    delay: 1000,
    },
    loop: true,
    speed: 3500,
    navigation: {
      nextEl: ".arrow__campaign",
      prevEl: ".swiper-button-prev",
    },
  });



  //アニメーション
  var box = $('.colorbox'),
    speed = 700;

  box.each(function(){
    $(this).append('<div class="color"></div>')
    var color = $(this).find($('.color')),
    image = $(this).find('img');
    var counter = 0;

    image.css('opacity','0');
    color.css('width','0%');

    color.on('inview', function(){
        if(counter == 0){
              $(this).delay(200).animate({'width':'100%'},speed,function(){
                  image.css('opacity','1');
                  $(this).css({'left':'0' , 'right':'auto'});
                  $(this).animate({'width':'0%'},speed);
                })
            counter = 1;
          }
    });
});

//トップに戻るボタン
$(function () {
  const toTopButton = $(".js-to-top");
  const scrollHeight = 100;
  toTopButton.hide();
  $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
      toTopButton.fadeIn();
      } else {
      toTopButton.fadeOut();
      }
  });

  toTopButton.click(function () {
      $("body,html").animate({ scrollTop: 0 }, 800);
      return false;
  });
});


})
