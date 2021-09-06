<footer class="l-footer p-footer">
  <div class="p-footer__inner">
    <div class="p-footer__content">
      <div class="p-footer__logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/logo.svg" alt="">
      </div><!-- /.p-footer__logo -->

       
      <ul class="p-footer__menu--pc  p-footer-menu--pc">
        <li class="p-footer-menu--pc__item"><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">お知らせ</a></li><!-- /.p-footer__item -->
        <li class="p-footer-menu--pc__item"><a href="<?php echo esc_url( home_url( '/content/' ) ); ?>">事業内容</a></li><!-- /.p-footer__item -->
        <li class="p-footer-menu--pc__item"><a href="<?php echo esc_url( home_url( '/works/' ) ); ?>">制作実績</a></li><!-- /.p-footer__item -->
        <li class="p-footer-menu--pc__item"><a href="<?php echo esc_url( home_url( '/overview/' ) ); ?>">企業概要</a></li><!-- /.p-footer__item -->
        <li class="p-footer-menu--pc__item"><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">ブログ</a></li><!-- /.p-footer__item -->
        <li class="p-footer-menu--pc__item"><a href="/contact">お問い合わせ</a></li><!-- /.p-footer__item -->
      </ul><!-- /.p-footer__menu -->


    </div><!-- /.p-footer__content -->
  </div><!-- /.l-inner -->

    <div class="p-footer__copy">
      &copy; 2021 CodeUps Inc.
    </div><!-- /.p-footer__copy -->


</footer>
<?php wp_footer(); ?>
</body>
</html>