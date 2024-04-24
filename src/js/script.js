
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

    //スライダー
    const swiper = new Swiper(".swiper", {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,
    autoplay: {
    delay: 3000,
    },
});

});
