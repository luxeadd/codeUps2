<?php get_header(); ?>

<!-- ローディングアニメーショントップページ -->
<div id="loader" class="c-loader__top"></div>

<!-- トップページMV -->
<div class="l-top-mv p-mv js-mv">

      <!-- Slider main container -->
      <div class="swiper p-mv-swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
          <div class="p-mv__img">
          <picture>
                <source srcset="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/hurisode-mv1.jpg" media="(min-width: 757px)"/><!-- 幅757px以上なら表示 -->
                <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/hurisode-mv1-sp.jpg" alt="MV1画像">
            </picture>
          </div>
          </div> 
          <div class="swiper-slide">
          <div class="p-mv__img">
          <picture>
                <source srcset="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/furisode-mv2.jpg" media="(min-width: 757px)"/><!-- 幅757px以上なら表示 -->
                <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/furisode-mv2.jpg" alt="MV2画像">
            </picture>
             </div>
          </div>
         <div class="swiper-slide">
         <div class="p-mv__img">
         <picture>
                <source srcset="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/furisode-mv3.jpg" media="(min-width: 757px)"/><!-- 幅757px以上なら表示 -->
                <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/furisode-mv3.jpg" alt="MV3画像">
            </picture>
            </div>
        </div>
      </div>
    

  </div><!-- /.p-mv__img -->
  <div class="p-mv__content">
    <h1 class="p-mv__title js-span-wrap">
        しあわせの晴れ舞台
    </h1><!-- /.p-mv__title -->
    <div class="p-mv__suv-title">ハタチのいろどり</div><!-- /.p-mv__suv-title -->
  </div><!-- /.p-mv__content -->

</div><!-- /.l-mv p-mv -->




<!-- トップページコンテンツ -->
<!-- お知らせ -->
<section class="l-top-news p-news">
  <div class="l-inner">
    <div class="p-news__items">
      <div class="p-news__items-inner">

    <?php
  $args = [
    'post_type' => 'post', // カスタム投稿名が「」の場合
    'posts_per_page' => 3, // 表示する数
		  ];
	  $my_query = new WP_Query($args); ?>

		<?php if ($my_query->have_posts()): // 投稿がある場合 ?>
	  <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

       <article class="p-news__item p-news-info">
         <div class="p-news-info__head">
           <time class=" p-news-info__date" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y/n/j'); ?></time>
           <div class="p-news-info__category <?php $cat = get_the_category( ); $cat = $cat[0]; { echo $cat->slug;} ?>">
            <?php $cat = get_the_category(  ); $cat = $cat[0]; {echo $cat->cat_name; } ?>
           </div><!-- /.p-news-info__category -->
      </div><!-- /.p-news-info__head -->

            <div class="p-news-info__body">
                <a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="p-news-info__text"><?php the_title(); //タイトルを表示 ?></a><!-- /.p-news-info__text -->
          </div><!-- /.p-news-info__body -->
        </article>
        
        <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
        
        
        
      </div><!-- /.p-news__items-inner -->
         <div class="p-news__btn c-btn--slide">
             <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="c-btn--news">すべて見る</a><!-- /.c-btn -->
         </div><!-- /.p-news-info__btn -->
    </div><!-- /.p-news__items -->
  </div><!-- /.linner -->
</section><!-- /.l-top-news -->


<!-- プラン -->
<section class="l-top-content p-content js-scrollAnimation">
  <div class="l-inner">
    <h2 class="p-content__title c-section-title js-scrollAnimation">プラン</h2><!-- /.p-content__title -->
  </div><!-- /.l-inner -->
    <ul class="p-content__items  p-content-box">
      <li class="p-content-box__item js-scrollAnimation">
      <a href="/content/#content1" class="p-content-box__link">
         <h3  class="p-content-box__text">レンタル<br>プラン</h3>
      </a>
    </li>
    <li class="p-content-box__item js-scrollAnimation">
      <a href="/content/#content2" class="p-content-box__link">
        <h3 class="p-content-box__text">オーダーレンタル<br>プラン</h3>
      </a>
    </li>
    <li class="p-content-box__item js-scrollAnimation">
      <a href="/content/#content3" class="p-content-box__link">     
        <h3  class="p-content-box__text">購入<br>プラン</h3>
      </a>
    </li>
    <li class="p-content-box__item js-scrollAnimation">
      <a href="/content/#content4" class="p-content-box__link">
      <h3  class="p-content-box__text">ママ振袖<br>プラン</h3>
      </a>
    </li>
    
  </ul>
</section>



<!-- 振袖コレクション -->
<section class="l-top-works p-works ">
  <div class="l-inner">
    <h2 class="p-works__title c-section-title js-scrollAnimation">振袖コレクション</h2><!-- /.p-works__title -->
  </div><!-- /.l-inner -->
  <div class="p-works__content js-scrollAnimation">
    <div class="p-works__inner">

      <div class="p-works__img-box  js-scrollAnimation">
        
          <!-- Slider main container -->
          <div class="swiper p-works-swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper ">
              <!-- Slides -->

              <?php
                    $args = [
                      'post_type' => 'works', // カスタム投稿名が「gourmet」の場合
                      'orderby' => 'rand', //ランダム表示
                    ];
                    $my_query = new WP_Query($args); ?>
                  
                  <?php if ($my_query->have_posts()): // 投稿がある場合 ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

              <div class="swiper-slide ">
                    <?php
                  if (has_post_thumbnail() ) {
                  // アイキャッチ画像が設定されてれば大サイズで表示
                  the_post_thumbnail('large');
                  } 
                  ?>
              </div>
              <?php endwhile; ?>
              <?php endif; wp_reset_postdata(); ?>
            </div>
          </div> 
      </div><!-- /.p-works__img-box -->
      
      <div class="p-works__text-box">
        <div class="p-works__sub-title">王道からモダンまで</div><!-- /.p-works__sub-title -->
        <p class="p-works__text">furisodeupsの振袖コレクションページです。<br>王道古典柄からモダン最新柄まで人気の振袖をご用意しております。<br>きっとあなたの１着が見つかりますよ！運命の１着を探してみてください。

</p><!-- /.p-works__text -->
        <div class="p-works__btn c-btn--slide--white" >
          <a href="<?php echo esc_url( home_url( '/works/' ) ); ?>" class="c-btn">詳しく見る</a><!-- /.c-btn -->
        </div><!-- /.p-works__btn -->
      </div><!-- /.p-works__box -->
    </div><!-- /.p-works__inner -->
    </div><!-- /.p-works__content -->
  </section><!-- /.l-top-works -->
  
  
<!--会社紹介 -->
<section class="l-top-overview p-overview js-scrollAnimation">
  <div class="l-inner">
    <h2 class="p-overview__title c-section-title js-scrollAnimation">会社紹介</h2><!-- /.p-works__title -->
  </div><!-- /.l-inner -->
  <div class="p-overview__content">
    <div class="p-overview__inner">
      <div class="p-overview__img js-scrollAnimation">
        <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/office.jpg" alt="overview画像">
      </div><!-- /.p-works__img -->
      <div class="p-overview__text-box">
        <div class="p-overview__sub-title">老舗振袖専門店だからこその</div><!-- /.p-works__sub-title -->
        <p class="p-overview__text">創業50年だからこその安心感と品揃えで、あなたの成人式を徹底サポート致します。<br>年間2000名を超えるお客様に好評を頂いております。</p><!-- /.p-works__text -->
        <div class="p-overview__btn c-btn--slide--white">
          <a href="<?php echo esc_url( home_url( '/overview/' ) ); ?>" class="c-btn">詳しく見る</a><!-- /.c-btn -->
        </div><!-- /.p-works__btn -->
      </div><!-- /.p-works__box -->
    </div><!-- /.p-overview__inner -->
    </div><!-- /.p-works__content -->
  </section><!-- /.l-top-works -->


<!-- ブログ -->
<section  class="l-top-blog p-blog">
  <div class="l-inner">
    <h2 class="p-blog__title c-section-title js-scrollAnimation">ブログ</h2><!-- /.p-blog__title -->
    <div class="p-blog__items">

    <?php
      $args = [
        'post_type' => 'blog', // カスタム投稿名が「」の場合
        'posts_per_page' => 3, // 表示する数
          ];
        $my_query = new WP_Query($args); ?>

        <?php if ($my_query->have_posts()): // 投稿がある場合 ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

      <a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="p-blog__item  p-card js-scrollAnimation">
         <div class="p-card__img">
         
            <?php
              if (has_post_thumbnail() ) {
              // アイキャッチ画像が設定されてれば大サイズで表示
              the_post_thumbnail('large');
              } 
              ?>

         </div><!-- /.p-card_img -->
         <div  class="p-card__body">
             <h3 class="p-card__title">
             <?php the_title(); //タイトルを表示 ?>
             </h3><!-- /.p-card__title -->
             <div class="p-card__text">
                <?php if(SCF::get( 'news-text' )) {
                  echo mb_substr(SCF::get( 'news-text' ),0,40);
                } ?>.....
             </div><!-- /.p-card__text -->
            </div><!-- /.p-card__body -->
             <div href="" class="p-card__bottom">
                <div class="p-card__category   <?php echo esc_html( get_the_terms( get_the_ID(), 'genre' )[0]->slug ); ?>">
                <?php echo esc_html( get_the_terms( get_the_ID(), 'genre' )[0]->name ); ?>
                 </div>
               <time class=" p-card__date" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y/n/j'); ?></time>
              </div><!-- /.p-card__bottom -->
       </a>

       <?php endwhile; ?>
    <?php endif; wp_reset_postdata(); ?>

    </div><!-- /.p-blog__items -->

    <div class="p-blog__btn c-btn--slide--white">
       <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="c-btn">詳しく見る</a><!-- /.c-btn -->
    </div><!-- /.p-blog__btn -->
  </div><!-- /.l-inner -->
</section><!-- /.l-top-blog p-blog -->

<!-- お問い合わせ -->
<section  class="l-top-contact">
   <?php get_template_part( 'template-parts/contact' ); ?>
</section><!-- /.l-top-contact -->

<!-- toTopボタン -->
<?php get_template_part( 'template-parts/to-top' ); ?>

<?php get_footer(); ?>