<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-198426121-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-198426121-3');
  </script>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="l-header p-header js-header">
    <div class="p-header__inner">

      <?php
      $home = esc_url(home_url("/"));
      $news = esc_url(home_url("/news/"));
      $content = esc_url(home_url("/content/"));
      $works = esc_url(home_url("/works/"));
      $overview = esc_url(home_url("/overview/"));
      $blog = esc_url(home_url("/blog/"));
      $contact = esc_url(home_url("/contact/"));
      ?>

      <!-- ヘッダーロゴ -->
      <div class="p-header__logo">
        <a href="<?php echo $home; ?>">
          <img class="c-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/common/furisodeups.svg" alt="furisodeups">
        </a>
      </div><!-- /.p-header__logo -->

      <!-- ドロワーアイコン  -->
      <div id="js-hamburger" class="p-header__drawer c-hamburger js-hamburger ">
        <span></span>
        <span></span>
        <span></span>
      </div><!-- /.p-header__menu -->


      <!-- ドロワーメニュー -->
      <div id="js-drawer-menu" class="p-header__menu p-drawer-menu js-drawer-menu">
        <ul class="p-drawer-menu__items">
          <li id="js-drawer-menu__item" class="p-drawer-menu__item"><a href="<?php echo $home; ?>">トップ</a></li><!-- /.p-drawer-menu__item -->
          <li id="js-drawer-menu__item" class="p-drawer-menu__item"><a href="<?php echo $news; ?>">お知らせ</a></li><!-- /.p-drawer-menu__item -->
          <li id="js-drawer-menu__item" class="p-drawer-menu__item"><a href="<?php echo $content; ?>">プラン</a></li><!-- /.p-drawer-menu__item -->
          <li id="js-drawer-menu__item" class="p-drawer-menu__item"><a href="<?php echo $works; ?>">コレクション</a></li><!-- /.p-drawer-menu__item -->
          <li id="js-drawer-menu__item" class="p-drawer-menu__item"><a href="<?php echo $overview; ?>">会社紹介</a></li><!-- /.p-drawer-menu__item -->
          <li id="js-drawer-menu__item" class="p-drawer-menu__item"><a href="<?php echo $blog; ?>">ブログ</a></li><!-- /.p-drawer-menu__item -->
          <li id="js-drawer-menu__item" class="p-drawer-menu__item"><a href="<?php echo $contact; ?>">お問い合わせ</a></li><!-- /.p-drawer-menu__item -->
        </ul><!-- /.p-drawer-menu__items -->
      </div><!-- /.p-header__menu -->


      <!-- pcーメニュー -->
      <nav class="p-header__pc-menu p-pc-menu ">
        <ul class="p-pc-menu__items">
          <li class="p-pc-menu__item"><a href="<?php echo $news; ?>">お知らせ</a></li><!-- /.p-pc-menu__item -->
          <li class="p-pc-menu__item"><a href="<?php echo $content; ?>">プランB</a></li><!-- /.p-pc-menu__item -->
          <li class="p-pc-menu__item"><a href="<?php echo $works; ?>">コレクション</a></li><!-- /.p-pc-menu__item -->
          <li class="p-pc-menu__item"><a href="<?php echo $overview; ?>">会社紹介</a></li><!-- /.p-pc-menu__item -->
          <li class="p-pc-menu__item"><a href="<?php echo $blog; ?>">ブログ</a></li><!-- /.p-pc-menu__item -->
        </ul><!-- /.p-pc-menu__items -->
      </nav><!-- /.p-header__menu -->


      <!-- pcーメニューボタン -->
      <div class="p-pc-menu__btn c-btn--slide ">
        <a href="<?php echo $contact; ?>" class="p-pc-menu__btn-in c-btn--header">お問い合わせ</a><!-- /.p-pc-menu__item -->
      </div><!-- /.p-pc-menu__btn -->


      <!-- ドロワーメニュー展開時背景 -->
      <div id="js-header__overlay" class="p-header__overlay js-overlay"></div><!-- /.p-header__overlay -->

    </div><!-- /.p-header__inner -->
  </header>

  <main>