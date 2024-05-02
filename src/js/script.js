
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
    //ハンバーガー
    $(".js-hamburger").click(function () {
    if ($(".js-hamburger").hasClass('is-active')){
        $('.js-hamburger').removeClass("is-active");
      //$("html").toggleClass("is-fixed");
        $(".js-sp-nav").fadeOut();
    } else {
        $('.js-hamburger').addClass("is-active");
      //$("html").toggleClass("is-fixed");
        $(".js-sp-nav").fadeIn();
    }
    });

    //ドロワーメニュー
    $(".js-sp-nav a").click(function () {
      $(".js-hamburger").removeClass("is-active");
      //$("html").toggleClass("is-fixed");
      $(".js-sp-nav").fadeOut(300);

      var target = $(this).attr("href");
      setTimeout(function () {
          window.location.href = target;
      }, 300);
  });
});

window.addEventListener('resize', function() {
  var drawer = document.querySelector('.js-sp-nav');
  if (window.innerWidth > 768) {
      drawer.style.display = 'none';
  } else {
      drawer.style.display = 'block'; 
  }
});

window.addEventListener('resize', function() {
  var drawer = document.querySelector('.js-sp-nav');
  if (window.innerWidth <= 768) {
      drawer.style.height = '100vh';
      drawer.style.overflowY = 'auto';
  } else {
      drawer.style.height = '';
      drawer.style.overflowY = '';
  }
});


  //ヘッダー高さ分下げる
  $('a[href^="#"]').on('click', function(event) {
    // リンク先の要素を取得
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        // ページのスクロール位置をリンク先の要素の位置 - ヘッダーの高さ に調整
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top - $('.header').outerHeight()
        }, 1000);
    }
});

    //メインビュースワイパー
    const swiper1 = new Swiper(".swiper1", {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,
    autoplay: {
    delay: 3000,
    },
  });

  // キャンペーンスワイパー
  const swiper2 = new Swiper(".swiper2", {
    slidesPerView: "auto",
    spaceBetween: 24,
    breakpoints:{
      768:{
        spaceBetween: 40,
      }
    },
    autoplay: {
    delay: 0,
    },
    loop: true,
    speed: 3500,
    navigation: {
      nextEl: ".swiper-button-next",
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


