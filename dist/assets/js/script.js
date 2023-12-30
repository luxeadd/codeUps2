"use strict";

function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
//ハンバーガーメニュー---------------
var jsHamburger = document.getElementById("js-hamburger");
var body = document.body;
var spHeaderMenu = document.getElementById("js-drawer-menu");
var drawerBackground = document.getElementById("js-header__overlay");
var drawerMenuItem = document.getElementById("js-drawer-menu__item");

//ハンバーガーメニュークリックアクション
jsHamburger.addEventListener("click", function () {
  jsHamburger.classList.toggle("open");
  spHeaderMenu.classList.toggle("open");
  drawerBackground.classList.toggle("open");
});
drawerBackground.addEventListener("click", function () {
  jsHamburger.classList.toggle("open");
  spHeaderMenu.classList.toggle("open");
  drawerBackground.classList.toggle("open");
});

//スムーススクロール
var smoothScrollTrigger = document.querySelectorAll('a[href^="#"]');
var _loop = function _loop(i) {
  smoothScrollTrigger[i].addEventListener("click", function (e) {
    e.preventDefault();
    var href = smoothScrollTrigger[i].getAttribute("href");
    var targetElement = document.getElementById(href.replace("#", ""));
    var rect = targetElement.getBoundingClientRect().top;
    var offset = window.pageYOffset;
    var header = document.querySelector(".js-header");
    var header_h = header.clientHeight;
    var gap = header_h;
    var targetLink = rect + offset - gap;
    window.scrollTo({
      top: targetLink,
      behavior: "smooth"
    });
  });
};
for (var i = 0; i < smoothScrollTrigger.length; i++) {
  _loop(i);
}

//スクロールしたらheaderの色を変える
//headerにchange-colorクラスをつけ色を指定
var jsHeader = document.querySelector(".js-header");
var jsMv = document.querySelector(".js-mv");
var mv_h = jsMv.clientHeight;
window.addEventListener("scroll", function () {
  if (window.scrollY >= mv_h) {
    jsHeader.classList.add("change-color");
  }
  if (window.scrollY < mv_h) {
    jsHeader.classList.remove("change-color");
  }
});

//topに戻るボタン
//トップに戻るボタンの要素を取得
var topButton = document.getElementById("js-to-top");
function getScrolled() {
  return window.pageYOffset !== undefined ? window.pageYOffset : document.documentElement.scrollTop;
}
//ボタンの表示・非表示
window.onscroll = function () {
  getScrolled() > 500 ? topButton.classList.add("is-fadein") : topButton.classList.remove("is-fadein");
};
//トップに移動する関数
function scrollToTop() {
  //scrollToは指定先にスクロールするメソッド
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
}
//イベント登録
topButton.onclick = function () {
  scrollToTop();
};

//ローディングフェイドアウト
// var loader = document.getElementById('loader');
//   setTimeout(function(){
// 		loader.style.display = "none";
//   }, 2000);

//アニメーションスクロール判定
var targets = document.querySelectorAll(".js-scrollAnimation"); //アニメーションさせたい要素
var offset = 100; //アニメーションタイミング

window.addEventListener("scroll", function () {
  //スクロールしたとき

  var scroll = window.scrollY; //スクロール量を取得
  var h = window.innerHeight; //画面の高さを取得
  var _iterator = _createForOfIteratorHelper(targets),
    _step;
  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var target = _step.value;
      var pos = target.getBoundingClientRect().top + scroll; //アニメーションさせたい要素の位置を取得
      if (scroll > pos - h + offset) {
        //スクロール量 > アニメーションさせたい要素の位置
        target.classList.add("is-animated");
      }
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
});

//Swiper-------------------------------------------------------------------
//トップMV
var mvswiper = new Swiper(".js-mv-swiper", {
  // スライドの間隔ー単位はpx
  spaceBetween: 0,
  // 表示されるスライドの枚数
  slidesPerView: 1,
  // スライドの高さに合わせてSwiperの高さを変える
  autoHeight: true,
  // ループする
  loop: true,
  effect: "fade",
  speed: 0,
  //自動スライド
  autoplay: {
    delay: 3000,
    stopOnLastSlide: false,
    disableOnInteraction: false,
    reverseDirection: false
  },
  //切り替えエフェクトの指定
  //slide  fade  cube coverflow  flip
  // effect: "fade",

  //切り替わる速さ
  // speed: 4000,

  //ループの有無
  // loop: true,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  }
});

//トップworks
var workswiper = new Swiper(".js-works-swiper", {
  //自動スライド
  autoplay: {
    delay: 300
  },
  //切り替えエフェクトの指定
  //slide  fade  cube coverflow  flip
  effect: "fade",
  //切り替わる速さ
  speed: 2500,
  //ループの有無
  loop: true,
  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  }
});

//制作実績詳細ページ
//【Swiper】アクティブサムネイルを中央に固定表示する連動スライダー
//メインスライド
var slider = new Swiper(".gallery-slider", {
  autoplay: {
    delay: 2000
  },
  slidesPerView: 1,
  centeredSlides: true,
  loop: true,
  loopedSlides: 10,
  //スライドの枚数と同じ値を指定
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  }
});

//サムネイルスライド
var thumbs = new Swiper(".gallery-thumbs", {
  slidesPerView: "auto",
  spaceBetween: 10,
  centeredSlides: true,
  loop: true,
  slideToClickedSlide: true
});

//3系
//slider.params.control = thumbs;
//thumbs.params.control = slider;

//4系～
slider.controller.control = thumbs;
thumbs.controller.control = slider;

//MVタイトル一文字づつspanタグで囲む
var textWrap = document.querySelectorAll(".js-span-wrap");
textWrap.forEach(function (t) {
  return t.innerHTML = t.textContent.replace(/\S/g, "<span>$&</span>");
});

//セクションタイトル一文字づつspanタグで囲む
var textWrap = document.querySelectorAll(".c-section-title");
textWrap.forEach(function (t) {
  return t.innerHTML = t.textContent.replace(/\S/g, "<span>$&</span>");
});

//ページ遷移時にヘッダーの高さ分調整
document.addEventListener("DOMContentLoaded", function () {
  if (location.hash) {
    var headerHeight = document.querySelector(".js-header").clientHeight;
    setTimeout(function () {
      window.scrollBy(0, -headerHeight);
    }, 100);
  }
});