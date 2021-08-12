<?php get_header(); ?>

<!-- トップページMV -->
<div class="l-top-mv p-mv js-mv">

  <div class="swiper">
      <!-- Slider main container -->
      <div class="swiper-container p-mv-swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
          <div class="p-mv__img">
          <picture>
                <source srcset="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/MV1-pc.jpg" media="(min-width: 757px)"/><!-- 幅757px以上なら表示 -->
                <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/MV1-sp.jpg" alt="MV1画像">
            </picture>
          </div>
          </div> 
          <div class="swiper-slide">
          <div class="p-mv__img">
          <picture>
                <source srcset="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/MV2-pc.jpg" media="(min-width: 757px)"/><!-- 幅757px以上なら表示 -->
                <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/MV2-sp.jpg" alt="MV2画像">
            </picture>
             </div>
          </div>
         <div class="swiper-slide">
         <div class="p-mv__img">
         <picture>
                <source srcset="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/MV3-pc.jpg" media="(min-width: 757px)"/><!-- 幅757px以上なら表示 -->
                <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/MV3-sp.jpg" alt="MV3画像">
            </picture>
            </div>
        </div>
      </div>
    
 </div><!-- /.swiper -->

  </div><!-- /.p-mv__img -->
  <div class="p-mv__content">
    <h1 class="p-mv__title">メインタイトルが入ります</h1><!-- /.p-mv__title -->
    <div class="p-mv__suv-title">サブタイトルが入ります</div><!-- /.p-mv__suv-title -->
  </div><!-- /.p-mv__content -->

</div><!-- /.l-mv p-mv -->




<!-- トップページコンテンツ -->
<!-- お知らせ -->
<section class="l-top-news p-news">
  <div class="p-news__inner">
    <div class="p-news__items">
      <article class="p-news__item p-news-info">

        <div class="p-news-info__head">
          <time class=" p-news-info__date" datetime="<?php the_time( 'c' ) ; ?>">2020.07.20</time>
           <div class="p-news-info__category">お知らせ</div><!-- /.p-news-info__category -->
         </div><!-- /.p-news-info__head -->

         <div class="p-news-info__body">
           <a href="" class="p-news-info__text">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</a><!-- /.p-news-info__text -->
         </div><!-- /.p-news-info__body -->

         <div class="p-news__btn c-btn--slide">
             <a href="" class="c-btn--news">すべて見る</a><!-- /.c-btn -->
         </div><!-- /.p-news-info__btn -->
        </article>
    </div><!-- /.p-news__items -->
  </div><!-- /.linner -->
</section><!-- /.l-top-news -->


<!-- 事業内容 -->
<section class="l-top-content p-content">
    <div class="l-bg-line"></div><!-- /.l-bg-line -->
    <h2 class="p-content__title c-section-title">事業内容</h2><!-- /.p-content__title -->
    <ul class="p-content__items  p-content-box">
      <li class="p-content-box__item">
      <a href="" class="p-content-box__link">
      <picture>
          <source srcset="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/content1.jpg" media="(min-width: 786px)"/><!-- 幅786px以上なら表示 -->
          <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/content1-sp.jpg" alt="contact画像1">
        </picture>
      </a>
        <h3 class="p-content-box__text">経営理念ページへ</h3>
    </li>
    <li class="p-content-box__item">
      <a href="" class="p-content-box__link">
      <picture>
          <source srcset="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/content2.jpg" media="(min-width: 786px)"/><!-- 幅786px以上なら表示 -->
          <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/content2-sp.jpg" alt="contact画像2">
        </picture>
      </a>
        <h3 class="p-content-box__text">理念1へ</h3>
    </li>
    <li class="p-content-box__item">
      <a href="" class="p-content-box__link">
      <picture>
          <source srcset="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/content3.jpg" media="(min-width: 786px)"/><!-- 幅786px以上なら表示 -->
          <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/content3-sp.jpg" alt="contact画像3">
        </picture>
      </a>
        <h3 class="p-content-box__text">理念2へ</h3>
    </li>
    <li class="p-content-box__item">
      <a href="" class="p-content-box__link">
      <picture>
          <source srcset="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/content4.jpg" media="(min-width: 786px)"/><!-- 幅786px以上なら表示 -->
          <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/content1-sp.jpg" alt="contact画像4">
        </picture>
      </a>
        <h3 class="p-content-box__text">理念3へ</h3>
    </li>
    
  </ul>
</section>



<!-- 制作実績 -->
<section class="l-top-works p-works">
  <h2 class="p-works__title c-section-title">制作実績</h2><!-- /.p-works__title -->
  <div class="p-works__content">
    <div class="p-works__inner">

      <div class="p-works__img-box">
        
        <div class="swiper  ">
          <!-- Slider main container -->
          <div class="swiper-container p-works-swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper ">
              <!-- Slides -->
              <div class="swiper-slide ">
                
                <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/works1.jpg" alt="works画像1">
                
              </div>
              <div class="swiper-slide">
                
                <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/works2.jpg" alt="works画像2">
                
              </div>
              <div class="swiper-slide">
                
                <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/works3.jpg" alt="works画像3">
                
              </div>
            </div>
            
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            
            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
          </div> 
        </div><!-- /.swiper -->
      </div><!-- /.p-works__img-box -->
      
      <div class="p-works__text-box">
        <div class="p-works__sub-title">メインタイトルが入ります。</div><!-- /.p-works__sub-title -->
        <p class="p-works__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><!-- /.p-works__text -->
        <div class="p-works__btn c-btn--slide--white" >
          <a href="" class="c-btn">詳しく見る</a><!-- /.c-btn -->
        </div><!-- /.p-works__btn -->
      </div><!-- /.p-works__box -->
    </div><!-- /.p-works__inner -->
    </div><!-- /.p-works__content -->
  </section><!-- /.l-top-works -->
  
  
<!--企業概要 -->
<section class="l-top-overview p-overview">
  <h2 class="p-overview__title c-section-title">企業概要</h2><!-- /.p-works__title -->
  <div class="p-overview__content">
    <div class="p-overview__inner">
      <div class="p-overview__img">
        <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/overview1.jpg" alt="overview画像">
      </div><!-- /.p-works__img -->
      <div class="p-overview__text-box">
        <div class="p-overview__sub-title">メインタイトルが入ります。</div><!-- /.p-works__sub-title -->
        <p class="p-overview__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><!-- /.p-works__text -->
        <div class="p-overview__btn c-btn--slide--white">
          <a href="" class="c-btn">詳しく見る</a><!-- /.c-btn -->
        </div><!-- /.p-works__btn -->
      </div><!-- /.p-works__box -->
    </div><!-- /.p-overview__inner -->
    </div><!-- /.p-works__content -->
  </section><!-- /.l-top-works -->


<!-- ブログ -->
<section class="l-top-blog p-blog">
  <div class="l-inner">
    <h2 class="p-blog__title c-section-title">ブログ</h2><!-- /.p-blog__title -->
    <div class="l-blog-items p-blog__items">
      <a href="" class="p-blog__item p-card">
         <div class="p-card__img">
             <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/blog1.jpg" alt="blog画像1">
         </div><!-- /.p-card_img -->
         <div href="" class="p-card__body">
             <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3><!-- /.p-card__title -->
             <div class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</div><!-- /.p-card__text -->
             <div href="" class="p-card__bottom">
               <div class="p-card__category">カテゴリ</div><!-- /.p-card__category -->
               <time class=" p-card__date" datetime="<?php the_time( 'c' ) ; ?>">2021.07.20</time>
              </div><!-- /.p-card__bottom -->
            </div><!-- /.p-card__body -->
       </a>
      <a href="" class="p-blog__item p-card">
         <div class="p-card__img">
             <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/blog2.jpg" alt="blog画像2">
         </div><!-- /.p-card_img -->
         <div class="p-card__body">
             <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3><!-- /.p-card__title -->
             <div class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</div><!-- /.p-card__text -->
             <div class="p-card__bottom">
               <div class="p-card__category">カテゴリ</div><!-- /.p-card__category -->
               <time class=" p-card__date" datetime="<?php the_time( 'c' ) ; ?>">2021.07.20</time>
              </div><!-- /.p-card__bottom -->
            </div><!-- /.p-card__body -->
       </a>
      <a href="" class="p-blog__item p-card">
         <div class="p-card__img">
             <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/blog3.jpg" alt="blog画像3">
         </div><!-- /.p-card_img -->
         <div class="p-card__body">
             <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3><!-- /.p-card__title -->
             <div class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</div><!-- /.p-card__text -->
             <div class="p-card__bottom">
               <div class="p-card__category">カテゴリ</div><!-- /.p-card__category -->
               <time class=" p-card__date" datetime="<?php the_time( 'c' ) ; ?>">2021.07.20</time>
              </div><!-- /.p-card__bottom -->
            </div><!-- /.p-card__body -->
       </a>
      <a href="" class="p-blog__item p-card">
         <div class="p-card__img">
             <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/blog4.jpg" alt="blog画像4">
         </div><!-- /.p-card_img -->
         <div class="p-card__body">
             <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3><!-- /.p-card__title -->
             <div class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</div><!-- /.p-card__text -->
             <div class="p-card__bottom">
               <div class="p-card__category">カテゴリ</div><!-- /.p-card__category -->
               <time class=" p-card__date" datetime="<?php the_time( 'c' ) ; ?>">2021.07.20</time>
              </div><!-- /.p-card__bottom -->
            </div><!-- /.p-card__body -->
       </a>
      <a href="" class="p-blog__item p-card">
         <div class="p-card__img">
             <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/blog5.jpg" alt="blog画像5">
         </div><!-- /.p-card_img -->
         <div class="p-card__body">
             <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3><!-- /.p-card__title -->
             <div class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</div><!-- /.p-card__text -->
             <div class="p-card__bottom">
               <div class="p-card__category">カテゴリ</div><!-- /.p-card__category -->
               <time class=" p-card__date" datetime="<?php the_time( 'c' ) ; ?>">2021.07.20</time>
              </div><!-- /.p-card__bottom -->
            </div><!-- /.p-card__body -->
       </a>
      <a href="" class="p-blog__item p-card">
         <div class="p-card__img">
             <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/blog6.jpg" alt="blog画像6">
         </div><!-- /.p-card_img -->
         <div class="p-card__body">
             <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3><!-- /.p-card__title -->
             <div class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</div><!-- /.p-card__text -->
             <div class="p-card__bottom">
               <div class="p-card__category">カテゴリ</div><!-- /.p-card__category -->
               <time class=" p-card__date" datetime="<?php the_time( 'c' ) ; ?>">2021.07.20</time>
              </div><!-- /.p-card__bottom -->
            </div><!-- /.p-card__body -->
       </a>
    </div><!-- /.p-blog__items -->

    <div class="p-blog__btn c-btn--slide--white">
       <a href="" class="c-btn">詳しく見る</a><!-- /.c-btn -->
    </div><!-- /.p-blog__btn -->
  </div><!-- /.l-inner -->
</section><!-- /.l-top-blog p-blog -->

<!-- お問い合わせ -->
<section class="l-top-contact">
   <?php get_template_part( 'template-parts/contact' ); ?>
</section><!-- /.l-top-contact -->

<!-- toTopボタン -->
<div class="c-toTop js-to-top">
    <div class="arrow-top"></div>
</div><!-- /.c-toTop -->

<?php get_footer(); ?>