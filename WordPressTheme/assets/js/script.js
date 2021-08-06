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
	jQuery('a[href^="#"]').click(function() {
		let header = jQuery(".js-header").height();
		let speed = 300;
		let id = jQuery(this).attr("href");
		let target = jQuery("#" == id ? "html" : id);
		let position = jQuery(target).offset().top - header;
		if ("fixed" !== jQuery("#header").css("position")) {
			position = jQuery(target).offset().top;
		}
		if (0 > position) {
			position = 0;
		}
		jQuery("html, body").animate(
			{
				scrollTop: position
			},
			speed
		);
		return false;
	});

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


//Swiper-------------------------------------------------------------------
     const swiper = new Swiper('.js-mv-swiper-container', {
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
     
     // Navigation arrows
    //  navigation: {
    //    nextEl: '.swiper-button-next',
    //    prevEl: '.swiper-button-prev',
    //   },
     // And if we need scrollbar
     // scrollbar: {
     // el: '.swiper-scrollbar',
     // },
   
   //ビューごとのスライド
    // speed: 600,
     //loopedSlides: 6,
     //sp
     //spaceBetween: 24,
     //width: 274,
     //pc,tab
     //breakpoints: {
       //768: {
         //spaceBetween: 40,
         //width: 400,
       //}
    //}
     });

		    // べージトップボタン=========================
				jQuery('.js-to-top').click(function() {
					jQuery('html,body').animate({scrollTop:0},'500');
					});
				 
				 // page-topクラスをクリックでイベント発火。html,bodyで全体の情報を取得しanimateメソッドで移動をかける。500ms（0.5秒）でTopまでスクロール
				 
				 jQuery('.js-to-top').hide();
				 // page-topクラスを消す
				 jQuery(window).scroll(function () {
					 if($(window).scrollTop() > 80 ) {
						jQuery('.js-to-top').slideDown(300);
					 } else {
						jQuery('.js-to-top').slideUp(300);
						}
					});
				 
				 // ウインドウをスクロールしてイベント発火
				 // ウインドウを80px TopからスクロールしたらslideDownで表示。0.3秒で
				 
					 
			//スティッキーヘッダー=======================
     //スクロールしたらheaderの色を変える
    //headerにchange-colorクラスをつけ色を指定
    jQuery(window).on('scroll', function () {
			var MV =  jQuery(".p-mv").innerHeight(); //headerの高さ取得 
			if (  MV <  jQuery(this).scrollTop()) { 
			 jQuery('.p-header').addClass('change-color'); }
			else {
			 jQuery('.p-header').removeClass('change-color'); } });
 

		


});

