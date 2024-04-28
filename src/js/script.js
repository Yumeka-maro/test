
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
    //ドロワーメニュー
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
})


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


