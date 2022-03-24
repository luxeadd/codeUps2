<?php get_header(); ?>

<!-- 下層ページコンテンツ -->
<section class="p-lower-thanks">
   <div class="p-lower-thanks__text">お問い合わせ完了</div><!-- /.p-lower-thanks__text -->
   <div class="p-lower-thanks__text">3営業日以内に<br class="sp-only">返信させて頂きます</div><!-- /.p-lower-thanks__text -->
  
   <?php
        $home = esc_url( home_url( "/" ));
        $news = esc_url( home_url( "/news/" ));
        $content = esc_url( home_url( "/content/" ));
        $works = esc_url( home_url( "/works/" ));
        $overview = esc_url( home_url( "/overview/" ));
        $blog = esc_url( home_url( "/blog/" ));
        $contact = esc_url( home_url( "/contact/" ));
      ?>

   <div class="p-lower-thanks__btn--pc c-btn--slide--white">
     <a href="<<?php echo $home; ?>" class="c-btn">TOPへ</a><!-- /.c-btn -->
    </div><!-- /.p-contact__btn -->
  </section><!-- /.l-lower-thanks -->

<?php get_footer(); ?>