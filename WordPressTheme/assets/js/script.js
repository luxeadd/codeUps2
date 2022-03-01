
//ハンバーガーメニュー---------------
const jsHamburger = document.getElementById('js-hamburger');
const body = document.body;
const spHeaderMenu = document.getElementById('js-drawer-menu')
const drawerBackground = document.getElementById('js-header__overlay')
const drawerMenuItem = document.getElementById('js-drawer-menu__item')

//ハンバーガーメニュークリックアクション
jsHamburger.addEventListener('click', function() {
 jsHamburger.classList.toggle('open');
 spHeaderMenu.classList.toggle('open');
 drawerBackground.classList.toggle('open');

});

drawerBackground.addEventListener('click', () => {
	jsHamburger.classList.toggle('open');
 spHeaderMenu.classList.toggle('open');
 drawerBackground.classList.toggle('open');
})




//スムーススクロール
const smoothScrollTrigger = document.querySelectorAll('a[href^="#"]');
  for (let i = 0; i < smoothScrollTrigger.length; i++){
    smoothScrollTrigger[i].addEventListener('click', (e) => {
      e.preventDefault();
      let href = smoothScrollTrigger[i].getAttribute('href');
      let targetElement = document.getElementById(href.replace('#', ''));
      const rect = targetElement.getBoundingClientRect().top;
      const offset = window.pageYOffset;
			const header = document.querySelector('.js-header');
			const header_h = header.clientHeight;
      const gap = header_h;
      const targetLink = rect + offset - gap;
			

      window.scrollTo({
        top: targetLink,
        behavior: 'smooth',
      });
    });
  }


 //スクロールしたらheaderの色を変える
    //headerにchange-colorクラスをつけ色を指定
let jsHeader = document.querySelector('.js-header');
let jsMv = document.querySelector('.js-mv');
let mv_h = jsMv.clientHeight;
 
window.addEventListener('scroll', () => {
  if (window.scrollY >= mv_h) {
    jsHeader.classList.add('change-color');
  }
  if (window.scrollY < mv_h) {
    jsHeader.classList.remove('change-color');
  }
})




//topに戻るボタン
//トップに戻るボタンの要素を取得
 const topButton = document.getElementById('js-to-top')
 function getScrolled() {
  return ( window.pageYOffset !== undefined ) ? window.pageYOffset: document.documentElement.scrollTop;
 }
//ボタンの表示・非表示
 window.onscroll = function() {
  ( getScrolled() > 500 ) ? topButton.classList.add( 'is-fadein' ): topButton.classList.remove( 'is-fadein' );
 };         
//トップに移動する関数
 function scrollToTop() {
//scrollToは指定先にスクロールするメソッド
 	window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
 };    
//イベント登録
 topButton.onclick = function() {
  scrollToTop();
 };



//ローディングフェイドアウト
var loader = document.getElementById('loader');
  setTimeout(function(){ 
		loader.style.display = "none"; 
  }, 2000);
	
	//CSSに以下を付与しておくとフワッと消える
	// animation : loader-fadeOut 2s;
  // animation-fill-mode: both;
	
	// @keyframes loader-fadeOut {
		// 	60% {
			// 		opacity: 1;
			// 	}
			// 	100% {
				// 		opacity: 0;
				// 	}
				// }
				
				
//アニメーションスクロール判定
let targets = document.querySelectorAll('.js-scrollAnimation');//アニメーションさせたい要素
let offset = 100;//アニメーションタイミング

window.addEventListener('scroll', function() {//スクロールしたとき

  var scroll = window.scrollY;//スクロール量を取得
  var h = window.innerHeight;//画面の高さを取得

  for(let target of targets) {
    var pos = target.getBoundingClientRect().top + scroll;//アニメーションさせたい要素の位置を取得
    if (scroll > pos - h + offset) {//スクロール量 > アニメーションさせたい要素の位置
      target.classList.add('is-animated');
    }
  }

});



//Swiper-------------------------------------------------------------------
//トップMV
let mvswiper = new Swiper('.p-mv-swiper', {
	//自動スライド
			autoplay: {
				delay: 2000,
			 
			},
		 
		//切り替えエフェクトの指定
			//slide  fade  cube coverflow  flip
		effect: "fade",
	 
		//切り替わる速さ
		speed: 4000,
		
		//ループの有無
		loop: true,
	
		// If we need pagination
		pagination: {
		 el: '.swiper-pagination',
			clickable : true,
		 },
		
		});


		//トップworks
		let workswiper = new Swiper('.p-works-swiper', {
		 //自動スライド
				 autoplay: {
					 delay: 300,
					
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
				el: '.swiper-pagination',
				 clickable : true,
				},
			 
			 });
	


//制作実績詳細ページ
//【Swiper】アクティブサムネイルを中央に固定表示する連動スライダー
 //メインスライド
var slider = new Swiper ('.gallery-slider', {
 autoplay: {
	 delay: 2000,
	
 },

 slidesPerView: 1,
 centeredSlides: true,
 loop: true,
 loopedSlides: 10, //スライドの枚数と同じ値を指定
 navigation: {
		 nextEl: '.swiper-button-next',
		 prevEl: '.swiper-button-prev',
 },
});
			
	//サムネイルスライド
	var thumbs = new Swiper ('.gallery-thumbs', {
		slidesPerView: 'auto',
		spaceBetween: 10,
		centeredSlides: true,
		loop: true,
		slideToClickedSlide: true,
	});

	//3系
	//slider.params.control = thumbs;
	//thumbs.params.control = slider;

	//4系～
	slider.controller.control = thumbs;
	thumbs.controller.control = slider;


//一文字づつspanタグで囲む
var textWrap = document.querySelectorAll('.js-span-wrap');
textWrap.forEach((t) => (
  t.innerHTML = t.textContent.replace(/\S/g,'<span>$&</span>')
));