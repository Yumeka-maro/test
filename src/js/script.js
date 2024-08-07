
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
            scrollTop: target.offset().top - $('.header').outerHeight() - 100
        }, 1000);
    }
});

//ヘッダー色変わる
$(function () {
  $(window).on('scroll', function () {
      if ($('.mv,.page-mv').height() < $(this).scrollTop()) {
          $('.js-header').addClass('change-color');
    } else {
          $('.js-header').removeClass('change-color');
    }
  });
});

//ローディングアニメーション
let op = gsap.timeline();
op.fromTo(
    ".loader__text--loading",
    {
        opacity: 1,
    },
    {
        opacity: 1,
    },
    "+=1"
);
op.fromTo(
    ".loader__line",
    {
        yPercent: 0,
    },
    {
        yPercent: -100,
        duration: 2,
        stagger: {
            each: 0.2,
            ease: Power4.easeInOut,
        },
    }
).to(
    ".loader",
    {
        display: "none",
    },
    ">"
  );


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




//アコーディオン
$(function () {
  $(".js-accordion-title,.js-toggle").on("click", function () {
    $(this).toggleClass("is-open");
    // 隣接するアコーディオンコンテンツのスライドトグル
    $(this).next().slideToggle(500);
  });
});


//モーダル
$(".js-gallery").click(function () {
  $("#grayDisplay").html($(this).prop("outerHTML"));
  $("#grayDisplay").fadeIn(200);
  $("body").addClass('no-scroll');
  return false;
});

$("#grayDisplay").click(function () {
  $("#grayDisplay").fadeOut(200);
  $("body").removeClass('no-scroll');
  return false;
});


//タブ
$(function () {
  const tabButton = $(".js-tab-button"),
    tabContent = $(".js-tab-content");

  function activateTab(tabId) {
    tabButton.removeClass("is-action");
    tabContent.removeClass("is-action");
    $("#" + tabId).addClass("is-action");
    $("." + tabId + "-content").addClass("is-action");
  }

  // URLのクエリパラメータを取得して初期タブを設定
  const urlParams = new URLSearchParams(window.location.search);
  const initialTabId = urlParams.get('tab') || 'license-course';
  activateTab(initialTabId);

  tabButton.on("click", function () {
    const tabId = this.id;
    activateTab(tabId);
  });
});





//入力なしエラーコンタクトページ
document.getElementById('submitBtn').addEventListener('click', function(event) {
  const inputs = document.querySelectorAll('.page-contact__input, .page-contact__textarea');
  const emailInput = document.querySelector('input[type="email"]');
  const phoneInput = document.querySelector('input[type="tel"]');
  const errorMessageDiv = document.getElementById('error-message');
  let isValid = true;

  // 入力項目のバリデーション
  inputs.forEach(input => {
      if (!input.value.trim()) {
          input.classList.add('input-error');
          isValid = false;
      } else {
          input.classList.remove('input-error');
      }
  });

  // メールアドレスのバリデーション
  if (emailInput && !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailInput.value)) {
    emailInput.classList.add('input-error');
    isValid = false;
  }

  // 電話番号のバリデーション
if (phoneInput && !/^\+?(\d{1,3})?[-. ]?\(?\d{1,3}\)?[-. ]?\d{3,4}[-. ]?\d{4}$/.test(phoneInput.value)) {
  phoneInput.classList.add('input-error');
  isValid = false;
}

  // エラーメッセージの表示
  if (!isValid) {
    document.querySelector('.error-prefix').textContent = '※必須項目が入力されていません。';
    document.querySelector('.error-main').textContent = '入力してください。';
    errorMessageDiv.style.display = 'block';
    event.preventDefault();
  } else {
    document.querySelector('.error-prefix').textContent = '';
    document.querySelector('.error-main').textContent = '';
    errorMessageDiv.style.display = 'none';
  }


//入力したとき文字色変更
document.addEventListener('DOMContentLoaded', function() {
  const inputs = document.querySelectorAll('.page-contact__input, .page-contact__textarea');

  inputs.forEach(input => {
      input.addEventListener('input', function() {
          if (this.value.trim() !== '') {
              this.style.color = '$green';
          } else {
              this.style.color = '';
          }
      });
  });
});


});

});





