<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>


  <header class="l-header p-header js-header">
    <div class="p-header__inner">
    
    <!-- ヘッダーロゴ -->
      <div class="p-header__logo">
        <a href="/home">
          <img class="c-logo" src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/logo.svg" alt="タイトルロゴ">
        </a>
      </div><!-- /.p-header__logo -->

     <!-- ドロワーアイコン  -->
      <div class="p-header__drawer c-hamburger js-hamburger ">
          <span></span>
          <span></span>
          <span></span>
      </div><!-- /.p-header__menu -->


      <!-- ドロワーメニュー -->
      <div class="p-header__menu p-drawer-menu js-drawer-menu">
        <ul class="p-drawer-menu__items">
          <li class="p-drawer-menu__item"><a href="/home">トップ</a></li><!-- /.p-drawer-menu__item -->
          <li class="p-drawer-menu__item"><a href="/news">お知らせ</a></li><!-- /.p-drawer-menu__item -->
          <li class="p-drawer-menu__item"><a href="/content">事業内容</a></li><!-- /.p-drawer-menu__item -->
          <li class="p-drawer-menu__item"><a href="/works">制作実績</a></li><!-- /.p-drawer-menu__item -->
          <li class="p-drawer-menu__item"><a href="/overview">企業概要</a></li><!-- /.p-drawer-menu__item -->
          <li class="p-drawer-menu__item"><a href="/blog">ブログ</a></li><!-- /.p-drawer-menu__item -->
          <li class="p-drawer-menu__item"><a href="/contact">お問い合わせ</a></li><!-- /.p-drawer-menu__item -->
        </ul><!-- /.p-drawer-menu__items -->
      </div><!-- /.p-header__menu -->


          <!-- pcーメニュー -->
      <nav class="p-header__pc-menu p-pc-menu ">
        <ul class="p-pc-menu__items">
          <li class="p-pc-menu__item"><a href="/news">お知らせ</a></li><!-- /.p-pc-menu__item -->
          <li class="p-pc-menu__item"><a href="/content">事業内容</a></li><!-- /.p-pc-menu__item -->
          <li class="p-pc-menu__item"><a href="/works">制作実績</a></li><!-- /.p-pc-menu__item -->
          <li class="p-pc-menu__item"><a href="/overview">企業概要</a></li><!-- /.p-pc-menu__item -->
          <li class="p-pc-menu__item"><a href="/blog">ブログ</a></li><!-- /.p-pc-menu__item -->
        </ul><!-- /.p-pc-menu__items -->
      </nav><!-- /.p-header__menu -->

      
        <!-- pcーメニューボタン -->
      <div class="p-pc-menu__btn c-btn--slide ">
         <a href="/contact" class="p-pc-menu__btn-in c-btn--header">お問い合わせ</a><!-- /.p-pc-menu__item -->
      </div><!-- /.p-pc-menu__btn -->


      <!-- ドロワーメニュー展開時背景 -->
      <div class="p-header__overlay js-overlay"></div><!-- /.p-header__overlay -->

    </div><!-- /.p-header__inner -->
  </header>