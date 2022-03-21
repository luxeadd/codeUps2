<footer class="p-footer">
  <div class="p-footer__inner">
    
  <?php
        $home = esc_url( home_url( "/" ));
        $news = esc_url( home_url( "/news/" ));
        $content = esc_url( home_url( "/content/" ));
        $works = esc_url( home_url( "/works/" ));
        $overview = esc_url( home_url( "/overview/" ));
        $blog = esc_url( home_url( "/blog/" ));
        $contact = esc_url( home_url( "/contact/" ));
      ?>

    <div class="p-footer__content">
      <div class="p-footer__logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/furisodeups.svg" alt="furisodeups">
      </div><!-- /.p-footer__logo -->
       
      <ul class="p-footer__menu--pc  p-footer-menu--pc">
        <li class="p-footer-menu--pc__item"><a href="<?php echo $news; ?>">お知らせ</a></li><!-- /.p-footer__item -->
        <li class="p-footer-menu--pc__item"><a href="<?php echo $content; ?>">プラン</a></li><!-- /.p-footer__item -->
        <li class="p-footer-menu--pc__item"><a href="<?php echo $works; ?>">コレクション</a></li><!-- /.p-footer__item -->
        <li class="p-footer-menu--pc__item"><a href="<?php echo $overview; ?>">会社紹介</a></li><!-- /.p-footer__item -->
        <li class="p-footer-menu--pc__item"><a href="<?php echo $blog; ?>">ブログ</a></li><!-- /.p-footer__item -->
        <li class="p-footer-menu--pc__item"><a href="<?php echo $contact; ?>">お問い合わせ</a></li><!-- /.p-footer__item -->
      </ul><!-- /.p-footer__menu -->


    </div><!-- /.p-footer__content -->
  </div><!-- /.l-inner -->

    <div class="p-footer__copy">
      &copy; 2022 furisodeups Inc.
      <script type="text/javascript" language="JavaScript">
          TYnow = new Date();
          document.write(' - ' + TYnow.getFullYear());
      </script>
    </div><!-- /.p-footer__copy -->


</footer>
<?php wp_footer(); ?>
</body>
</html>