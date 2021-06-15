// マウスカーソル
var cursor = $('.p-cursor'),
  follower = $('.p-cursor__follower'),
  cWidth = 8, //カーソルの大きさ
  fWidth = 50, //フォロワーの大きさ
  delay = 3, //数字を大きくするとフォロワーがより遅れて来る
  mouseX = 0, //マウスのX座標
  mouseY = 0, //マウスのY座標
  posX = 0, //フォロワーのX座標
  posY = 0; //フォロワーのX座標

//カーソルの遅延アニメーション
//ほんの少しだけ遅延させる 0.001秒
TweenMax.to({}, 0.001, {
  repeat: -1,
  onRepeat: function () {
    posX += (mouseX - posX) / delay;
    posY += (mouseY - posY) / delay;

    TweenMax.set(follower, {
      css: {
        left: posX - fWidth / 2,
        top: posY - fWidth / 2,
      },
    });

    TweenMax.set(cursor, {
      css: {
        left: mouseX - cWidth / 2,
        top: mouseY - cWidth / 2,
      },
    });
  },
});

//マウス座標を取得
$(document).on('mousemove', function (e) {
  mouseX = e.pageX;
  mouseY = e.pageY;
});

// 通常リンクホバー時
$('a').on({
  mouseenter: function () {
    cursor.addClass('is-active');
    follower.addClass('is-active');
  },
  mouseleave: function () {
    cursor.removeClass('is-active');
    follower.removeClass('is-active');
  },
});

// メインヴィジュアルホバー時
$('.p-home__mv').on({
  mouseenter: function () {
    cursor.addClass('is-active');
    follower.addClass('is-active-mv');
  },
  mouseleave: function () {
    cursor.removeClass('is-active');
    follower.removeClass('is-active-mv');
  },
});

// スムーススクロールの設定
$(function () {
  // #で始まるアンカーをクリックした場合に処理
  $('a[href^="#"]')
    .not('.class')
    .not('#js-tab-menu a')
    .click(function () {
      // スクロールの速度
      var speed = 200; // ミリ秒
      // アンカーの値取得
      var href = $(this).attr('href');
      // 移動先を取得
      var target = $(href == '#' || href == '' ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top - 100;
      // スムーススクロール
      $('body,html').animate({ scrollTop: position }, speed, 'swing');
      return false;
    });
});

// 360px以下のviewportの設定
!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value =
      window.outerWidth > 360
        ? 'width=device-width,initial-scale=1'
        : 'width=360';
    if (viewport.getAttribute('content') !== value) {
      viewport.setAttribute('content', value);
    }
  }
  addEventListener('resize', switchViewport, false);
  switchViewport();
})();

// humburger menu 開閉
$(
  (function () {
    $('#js-hamburger__toggle').on('click', function () {
      $('#js-hamburger__toggle').toggleClass('is-active');
      $('.l-spMenu').toggleClass('is-active');
      $('.l-header').toggleClass('is-active');
      $('.l-spMenu__bg').toggleClass('is-active');
      $('.l-header').toggleClass('header-is-active');
      $('.l-header__logoWrap').toggleClass('header-is-active');
      $('.l-header__logoImg').toggleClass('header-is-active');
      $('.l-header__wrap').toggleClass('header-is-active');
      $('.l-spMenu__navItem').toggleClass('is-animated');
    });
  })()
);

// spMenu 開閉
$(
  (function () {
    $('.l-spMenu__closeToggle').on('click', function () {
      $('#js-hamburger__toggle').toggleClass('is-active');
      $('.l-hamburger__toggleSpan').toggleClass('is-preparation');
      $('.l-hamburger__toggleSpan').toggleClass('is-active');
      $('.l-spMenu').toggleClass('is-active');
    });
  })()
);

// worksセクションの背景色変更
$(window).on('scroll', function () {
  var doch = $(document).innerHeight(); //ページ全体の高さ
  var winh = $(window).innerHeight(); //ウィンドウの高さ
  var bottom = doch - winh; //ページ全体の高さ - ウィンドウの高さ = ページの最下部位置
  if (bottom * 0.45 <= $(window).scrollTop()) {
    //一番下までスクロールした時に実行
    console.log('最底辺');

    $('.p-bg__black').css('background-color', '#222222');
    $('.p-home__mv__copy').css('color', '#ffff9d');
  } else {
    $('.p-bg__black').css('background-color', '#ffff9d');
    $('.p-home__mv__copy').css('color', '#070707');
  }
});

// ローディングアニメーション
$(window).on('load', function () {
  $('body').addClass('js-blur appear'); //ローディング後、bodyにappear,js-blurクラス付与
});

$(window).on('scroll', function () {
  $('body').css('animation-name', 'unset');
  //フェードアウト後、bodyのanimation-nameを「unset」に
  // header,copyのposition:fixed;を機能させるため
});

// フェードインアニメーション
$('.fadein').css('visibility', 'hidden');
$(window).on('load scroll', function () {
  var windowHeight = $(window).height(),
    topWindow = $(window).scrollTop();
  $('.fadein').each(function () {
    var targetPosition = $(this).offset().top;
    if (topWindow > targetPosition - windowHeight + 100) {
      $(this).addClass('l-fade-in');
    }
  });
});

// slick01(制作実績一覧)の設定
$(function () {
  function sliderSetting() {
    var width = $(window).width();

    if (width <= 768) {
      //768px以上はスライダー表示
      $('.e-slick01').not('.slick-initialized').slick({
        variableWidth: true,
        dots: false,
        arrows: false,
        autoplay: false,
        centerMode: false,
        centerPadding: '0%',
        slidesToShow: 1,
        slidesToScroll: 1,
      });
    } else {
      // $('.slide.slick-initialized').slick('.unslick');
    }
  }
  sliderSetting();
  $(window).resize(function () {
    sliderSetting();
  });
});

// コンタクトフォームのバリデーション
$('.required,textarea').on('blur', function () {
  var error; // エラー用の変数を定義
  if ($(this).val() === '') {
    // この要素のvalueが空文字だったらエラー
    error = true;
  }
  if (error) {
    // エラーが見つかった場合
    if (!$(this).next('div.l-form__error-message').length) {
      $(this).addClass('is-error');
      // この要素の後続要素が存在しない場合
      $(this).after(
        '<div class="l-form__error-message">必須項目です。ご記入をお願いします。</div>'
      ); // この要素の後にエラーメッセージを挿入
      return false;
    }
  } else {
    // エラーがなかった場合
    $(this).next('div.l-form__error-message').remove(); // この要素の後続要素を削除
    $(this).removeClass('is-error');
  }
});

// // works-list 実績のソート
$(function () {
  // Instantiate MixItUp:
  $('#Container').mixItUp();
});

// スクロール連動型アニメーション
$(function () {
  // aimation呼び出し
  if ($('.js-scroll-trigger').length) {
    scrollAnimation();
  }

  // aimation関数
  function scrollAnimation() {
    $(window).scroll(function () {
      $('.js-scroll-trigger').each(function () {
        let position = $(this).offset().top,
          scroll = $(window).scrollTop(),
          windowHeight = $(window).height();

        if (scroll > position - windowHeight + 200) {
          $(this).addClass('is-animated');
        }
      });
    });
  }
  $(window).trigger('scroll');
});

// 特定のページでクラスを付与
$(window).bind('load', function () {
  if (document.URL.match(/web/)) {
    $('.c-listWorks__btnList li.sort01').addClass('active');
    $('.c-listWorks__btnList li.sort00').removeClass('active');
  }
  if (document.URL.match(/apps/)) {
    $('.c-listWorks__btnList li.sort02').addClass('active');
    $('.c-listWorks__btnList li.sort00').removeClass('active');
  }
  if (document.URL.match(/brand/)) {
    $('.c-listWorks__btnList li.sort03').addClass('active');
    $('.c-listWorks__btnList li.sort00').removeClass('active');
  }
  if (document.URL.match(/contact-check/)) {
    $('.l-form__privacy-policy').addClass('d-none');
  }
  if (document.URL.match(/contact-check/)) {
    $('.l-pageHero').css('position', 'unset');
  }
});

// first-vの背景画像のパララックス
$(function () {
  var target1 = $('.parallax');
  var targetPosOT1 = target1.offset().top;
  var targetFactor = 0.5;
  var windowH = $(window).height();
  var scrollYStart1 = targetPosOT1 - windowH;

  $(window).on('scroll', function () {
    var scrollY = $(this).scrollTop();
    if (scrollY > scrollYStart1) {
      target1.css(
        'background-position-y',
        (scrollY - targetPosOT1) * targetFactor + 'px'
      );
    }
  });
});

// simpleParallax.jsを用いたimg要素に対してのパララックス
document.addEventListener('DOMContentLoaded', function () {
  const elem = document.querySelector('.js-target-parallax');
  if (elem !== null) {
    //クラス名js-target-parallaxがあるか判定
    let target = document.getElementsByClassName('js-target-parallax'); //クラス名js-target-parallaxがある要素をすべて取得

    let parallaxConfig = {
      //simpleParallaxの設定
      delay: 0,
      orientation: 'down',
      scale: 1.4,
      //overflow: true, //必要なら
      //maxTransition : 50 //必要なら
    };

    const parallax_instance = new simpleParallax(target, parallaxConfig);
  }
});

// luxy.jsのレスポンシブ対応(1280px未満はパララックスなし)
if (window.matchMedia('(max-width: 1279px)').matches) {
  /* ウィンドウサイズが 1280px以下の場合のコードをここに */
} else {
  /* ウィンドウサイズが 1280px以上の場合のコードをここに */
  $('.luxy').attr('id', 'luxy');
}
