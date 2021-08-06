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
      <h1 class="p-header__logo">
        <a href="">
          <img class="c-logo" src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/logo.svg" alt="タイトルロゴ">
        </a>
      </h1><!-- /.p-header__logo -->

     <!-- ドロワーアイコン  -->
      <div class="p-header__drawer c-hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
      </div><!-- /.p-header__menu -->


      <!-- ドロワーメニュー -->
      <div class="p-header__menu p-drawer-menu js-drawer-menu">
        <ul class="p-drawer-menu__items">
          <li class="p-drawer-menu__item"><a href="">トップ</a></li><!-- /.p-drawer-menu__item -->
          <li class="p-drawer-menu__item"><a href="">お知らせ</a></li><!-- /.p-drawer-menu__item -->
          <li class="p-drawer-menu__item"><a href="">事業内容</a></li><!-- /.p-drawer-menu__item -->
          <li class="p-drawer-menu__item"><a href="">制作実績</a></li><!-- /.p-drawer-menu__item -->
          <li class="p-drawer-menu__item"><a href="">企業概要</a></li><!-- /.p-drawer-menu__item -->
          <li class="p-drawer-menu__item"><a href="">ブログ</a></li><!-- /.p-drawer-menu__item -->
          <li class="p-drawer-menu__item"><a href="">お問い合わせ</a></li><!-- /.p-drawer-menu__item -->
        </ul><!-- /.p-drawer-menu__items -->
      </div><!-- /.p-header__menu -->
     
      <!-- ドロワーメニュー展開時背景 -->
      <div class="p-header__overlay js-overlay"></div><!-- /.p-header__overlay -->

    </div><!-- /.p-header__inner -->
  </header>