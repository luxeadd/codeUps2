<?php get_header(); ?>

<!-- 下層ページMV -->
<div class="p-lower-overview-mv p-lower-common-mv js-mv">
  <h1 class="p-lower-common-mv__title">企業概要</h1><!-- /.p-news-mv__title -->
</div><!-- /.l-news-mv p-news-mv -->

<!-- breadcrumbs -->
<?php get_template_part( 'template-parts/breadcrumbs' ); ?>



<!-- 下層ページコンテンツ -->
<section class="l-lower-overview-body p-lower-overview-body">
   <div class="l-inner">
      <dl class="p-lower-overview-body__lists">

        <div class="p-lower-overview-body__list">
           <dt class="p-lower-overview-body__title-box">
              <h2 class="p-lower-overview-body__title">会社名</h2>
           </dt>
           <dd class="p-lower-overview-body__text-box">
              <p class="p-lower-overview-body__text">株式会社フリソデアプス</p>
           </dd>
        </div><!-- / -->

        <div class="p-lower-overview-body__list">
           <dt class="p-lower-overview-body__title-box">
              <h2 class="p-lower-overview-body__title">設立</h2>
           </dt>
           <dd class="p-lower-overview-body__text-box">
              <p class="p-lower-overview-body__text">1985年5月15日</p>
           </dd>
        </div><!-- / -->
        
        <div class="p-lower-overview-body__list">
           <dt class="p-lower-overview-body__title-box">
              <h2 class="p-lower-overview-body__title">資本金</h2>
           </dt>
           <dd class="p-lower-overview-body__text-box">
              <p class="p-lower-overview-body__text">1000万円</p>
           </dd>
        </div><!-- / -->

        <div class="p-lower-overview-body__list">
           <dt class="p-lower-overview-body__title-box">
              <h2 class="p-lower-overview-body__title">売上高</h2>
           </dt>
           <dd class="p-lower-overview-body__text-box">
              <p class="p-lower-overview-body__text">20億円</p>
           </dd>
        </div><!-- / -->

        <div class="p-lower-overview-body__list">
           <dt class="p-lower-overview-body__title-box">
              <h2 class="p-lower-overview-body__title">代表者</h2>
           </dt>
           <dd class="p-lower-overview-body__text-box">
              <p class="p-lower-overview-body__text">山田 輝男</p>
           </dd>
        </div><!-- / -->

        <div class="p-lower-overview-body__list">
           <dt class="p-lower-overview-body__title-box">
              <h2 class="p-lower-overview-body__title">従業員数</h2>
           </dt>
           <dd class="p-lower-overview-body__text-box">
              <p class="p-lower-overview-body__text">140名</p>
           </dd>
        </div><!-- / -->

        <div class="p-lower-overview-body__list">
           <dt class="p-lower-overview-body__title-box">
              <h2 class="p-lower-overview-body__title">事業内容</h2>
           </dt>
           <dd class="p-lower-overview-body__text-box">
              <p class="p-lower-overview-body__text">着物販売・レンタル事業</p>
           </dd>
        </div><!-- / -->

        <div class="p-lower-overview-body__list">
           <dt class="p-lower-overview-body__title-box">
              <h2 class="p-lower-overview-body__title">所在地</h2>
           </dt>
           <dd class="p-lower-overview-body__text-box">
              <p class="p-lower-overview-body__text">東京駅</p>
           </dd>
         </div>
         
      </dl>
   </div><!-- /.l-inner -->
</section><!-- /.p-lower-overview-body -->
      

      <div class="l-lower-overview-map p-lower-overview-map">
         <div class="p-lower-overview-map__iframe-wrap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.828030380884!2d139.7649361156239!3d35.6812361801942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1628762304796!5m2!1sja!2sjp" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
         </div><!-- /.p-lower-overview-iframe -->
      </div><!-- /.p-lower-overview-map -->

<section class="l-lower-overview-contact">
   <?php get_template_part( 'template-parts/contact' ); ?>
</section><!-- /.l-top-contact -->

<!-- toTopボタン -->
<?php get_template_part( 'template-parts/to-top' ); ?>


<?php get_footer(); ?>