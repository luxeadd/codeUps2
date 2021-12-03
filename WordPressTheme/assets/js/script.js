// ローディング判定
jQuery(function ($) {
jQuery(window).on("load", function() {
	jQuery("body").attr("data-loading", "true");
});

jQuery(function() {
	// スクロール判定
	jQuery(window).on("scroll", function() {
		if (100 < jQuery(this).scrollTop()) {
			jQuery("body").attr("data-scroll", "true");
		} else {
			jQuery("body").attr("data-scroll", "false");
		}
	});

	/* ドロワー */
	jQuery(".js-drawer").on("click", function(e) {
		e.preventDefault();
		let targetClass = jQuery(this).attr("data-target");
		jQuery("." + targetClass).toggleClass("is-checked");
		return false;
	});

	//ナビバートグル
$('.js-hamburger').on('click', function () {
	if($('.js-hamburger').hasClass('open')) {
		$('.js-drawer-menu').removeClass('open');
		$('.js-overlay').fadeOut();
		$(this).removeClass('open');
	} else {
		$('.js-drawer-menu').addClass('open');
		$('.js-overlay').fadeIn();
		$(this).addClass('open');
	 }
  });

$('.js-overlay').on('click', function () {
		$('.js-drawer-menu').removeClass('open');
		$('.js-hamburger').removeClass('open');
		$(this).fadeOut();
  });


	/* スムーススクロール */
	// jQuery('a[href^="#"]').click(function() {
	// 	let header = jQuery(".js-header").height();
	// 	let speed = 300;
	// 	let id = jQuery(this).attr("href");
	// 	let target = jQuery("#" == id ? "html" : id);
	// 	let position = jQuery(target).offset().top - header;
	// 	if ("fixed" !== jQuery("#header").css("position")) {
	// 		position = jQuery(target).offset().top;
	// 	}
	// 	if (0 > position) {
	// 		position = 0;
	// 	}
	// 	jQuery("html, body").animate(
	// 		{
	// 			scrollTop: position
	// 		},
	// 		speed
	// 	);
	// 	return false;
	// });

	/* 電話リンク */
	let ua = navigator.userAgent;
	if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
		jQuery('a[href^="tel:"]')
			.css("cursor", "default")
			.on("click", function(e) {
				e.preventDefault();
			});
	}
});




		    // べージトップボタン=========================
				// jQuery('.js-to-top').click(function() {
				// 	jQuery('html,body').animate({scrollTop:0},'500');
				// 	});
				 
				 // page-topクラスをクリックでイベント発火。html,bodyで全体の情報を取得しanimateメソッドで移動をかける。500ms（0.5秒）でTopまでスクロール
				 
				//  jQuery('.js-to-top').hide();
				//  // page-topクラスを消す
				//  jQuery(window).scroll(function () {
				// 	 if($(window).scrollTop() > 80 ) {
				// 		jQuery('.js-to-top').slideDown(300);
				// 	 } else {
				// 		jQuery('.js-to-top').slideUp(300);
				// 		}
				// 	});
				 
				 // ウインドウをスクロールしてイベント発火
				 // ウインドウを80px TopからスクロールしたらslideDownで表示。0.3秒で
				 
					 
			//スティッキーヘッダー=======================
     //スクロールしたらheaderの色を変える
    //headerにchange-colorクラスをつけ色を指定
    // jQuery(window).on('scroll', function () {
		// 	var MV =  jQuery(".js-mv").innerHeight(); 
		// 	if (  MV <  jQuery(this).scrollTop()) { 
		// 	 jQuery('.js-header').addClass('change-color'); }
		// 	else {
		// 	 jQuery('.js-header').removeClass('change-color'); } });
 

});//jQuery



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


