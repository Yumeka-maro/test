
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
        // event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top - $('.header').outerHeight()
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

//アコーディオン
$(function () {
  $(".js-accordion__item .js-accordion__content").css(
    "display",
    "block"
  );
  $(".js-accordion__item .js-accordion__title").addClass("is-open");
  $(".js-accordion__title").on("click", function () {
    $(this).toggleClass("is-open");
    $(this).next().slideToggle(300);
  });
});


//モーダル
$(".gallery__img").click(function () {
  $("#grayDisplay").html($(this).prop("outerHTML"));
  $("#grayDisplay").fadeIn(200);
  return false;
});

$("#grayDisplay").click(function () {
  $("#grayDisplay").fadeOut(200);
  return false;
});

//タブ
$(function () {
  const tabButton = $(".js-tab-button"),
        tabContent = $(".js-tab-content"),
        tabIcons = $(".tab__icon");

  // 初期設定
  function initializeTabs() {
    tabContent.hide();
    tabIcons.attr("src", "./assets/images/common/whale-green.svg");
    const activeTab = tabButton.filter(".is-action").first();
    if (activeTab.length) {
      const activeIndex = tabButton.index(activeTab);
      tabContent.eq(activeIndex).show();
      setActiveIcon(activeTab);
    } else {
      tabButton.first().addClass("is-action");
      tabContent.first().show();
      tabButton.first().find(".tab__icon").attr("src", "./assets/images/common/whale-white.svg");
    }
  }

  function setActiveIcon(tab) {
    const tabId = tab.attr("id");
    tabButton.find(".tab__icon").attr("src", "./assets/images/common/whale-green.svg");
    if (tabId === "license-cource") {
      tab.find(".tab__icon").attr("src", "./assets/images/common/whale-white.svg");
    } else if (tabId === "fan-diving") {
      tab.find(".tab__icon").attr("src", "./assets/images/common/whaleleft-white.svg");
    } else if (tabId === "expericence-diving") {
      tab.find(".tab__icon").attr("src", "./assets/images/common/fishicon-white.svg");
    }
  }

  // タブがクリックされたときの処理
  $(function () {
    const tabButton = $(".js-tab-button"),
          tabContent = $(".js-tab-content"),
          tabIcons = $(".tab__icon");
  
    // 初期設定
    function initializeTabs() {
      tabContent.hide();
      tabButton.removeClass("is-action");
      $("#license-cource").addClass("is-action");
      $("#license-cource").find(".tab__icon").attr("src", "./assets/images/common/whale-white.svg");
      tabContent.first().show();
    }
  
    // タブがクリックされたときの処理
    tabButton.on("click", function () {
      let index = tabButton.index(this);
  
      tabButton.removeClass("is-action");
      $(this).addClass("is-action");
      tabContent.hide();
      tabContent.eq(index).show();
  
      // 全てのアイコンをデフォルトに戻す
      $("#license-cource").find(".tab__icon").attr("src", "./assets/images/common/whale-green.svg");
      $("#fan-diving").find(".tab__icon").attr("src", "./assets/images/common/whaleleft-green.svg");
      $("#expericence-diving").find(".tab__icon").attr("src", "./assets/images/common/fishicon-green.svg");
  
      // クリックされたタブに応じてアイコンを変更
      if (this.id === "license-cource") {
        $(this).find(".tab__icon").attr("src", "./assets/images/common/whale-white.svg");
      } else if (this.id === "fan-diving") {
        $(this).find(".tab__icon").attr("src", "./assets/images/common/whaleleft-white.svg");
      } else if (this.id === "expericence-diving") {
        $(this).find(".tab__icon").attr("src", "./assets/images/common/fishicon-white.svg");
      }
    });
  
    // ページロード時の初期化
    initializeTabs();
  });



// $(window).on("hashchange", function () {
//             activateTabFromHash();
//         });
//         function activateTabFromHash() {
//             var hash = window.location.hash;
//             var index = getIndexFromHash(hash);
//             $(".js-tab-button").removeClass("is-action");
//             $(".js-tab-button").removeClass("is-action");
//             if (hash) {
//                 $("#tab-" + hash.replace("#", "")).addClass("is-action");
//                 $(hash).addClass("is-action");
//                 var contentId = hash.replace("#tab-", "#");
//                 $(contentId).addClass("is-action");
//                 var index = getIndexFromHash(hash);
//             } else {
//               $(".js-tab-button:first").addClass("is-action");
//               $(".js-tab-content:first").addClass("is-action");
//             }
//         }
//         $(window).on("load", function () {
//             var hash = window.location.hash;
//             var index = getIndexFromHash(hash);
//         });
//         $(".js-tab-content:first-of-type").css("display", "block");
//         var hash = window.location.hash;
//         var index = getIndexFromHash(hash);
//         showCategory(index);
//         $(".js-tab-button").on("click", function () {
//             var index = $(this).index();
//             showCategory(index);
//         });
// function showCategory(index) {
//             $(".js-tab-button").removeClass("is-action");
//             $(".js-tab-button").eq(index).addClass("is-action");
//             $(".js-tab-content").hide().eq(index).fadeIn(300);
//         }
//         function getIndexFromHash(hash) {
//             var defaultIndex = 0;
//             if (!hash.startsWith("#info")) {
//                 return defaultIndex;
//             }
//             var index = parseInt(hash.replace("#info", ""), 10) - 1;
//             if (isNaN(index) || index < 0 index >= $(".js-tab-button").length) {
//                 return defaultIndex;
//             }
//             return index;
//         }
//         $('a[href^="#"]').click(function () {
//             const speed = 600;
//             let href = $(this).attr("href");
//             let target = $(href == "#" || href == "" ? "html" : href);
//             $("html, body").animate(
//                 {
//                     scrollTop: target.offset().top,
//                 },
//                 speed
//             );
//             return false;
//         });
//         function scrollToSection(index) {
//             const headerHeight = $(".js-header").height();
//             let target = $(".js-tab-button").eq(index);
//             let targetTop = target.offset().top;
//             let position = targetTop - headerHeight;
//             $("body,html").animate({ scrollTop: position }, 500, "swing");
//         }

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



//タグ
// document.addEventListener('DOMContentLoaded', function() {
//   const buttons = document.querySelectorAll('.js-tag-button');
//   console.log("Buttons:", buttons);

//   buttons.forEach(button => {
//       button.addEventListener('click', function() {
//           console.log("Button clicked:", button.textContent);
//           buttons.forEach(btn => {
//               btn.classList.remove('isActive');
//               console.log("Removed active class from:", btn.textContent);
//           });
//           button.classList.add('isActive');
//           console.log("Added active class to:", button.textContent);

//   });

//   // 初期状態で「ALL」ボタンをアクティブにする
//   const initialButton = document.querySelector('.js-tag-button');
//   if (initialButton) {
//       initialButton.classList.add('isActive');
//       console.log("Initial button styled:", initialButton.textContent);
//   }
// });

//ローディングアニメーション
  var op = gsap.timeline();
  op.fromTo(".loadertext", {
    opacity: 1
  }, {
    opacity: 0
  }, "+=1");
  op.fromTo(".loaderline", {
    yPercent: 0
  }, {
    yPercent: -100,
    duration: 1,
    stagger: {
      each: 0.2,
      ease: Power4.easeInOut
    }
  }).to(".loader", {
    display: "none"
  }, ">");

})
})
