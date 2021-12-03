<?php get_header(); ?>

<!-- ローディングアニメーション -->
<div id="loader" class="loader-wrap">
<div class="loader-ring">
  <span></span>
<img class="c-logo" src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/logo.svg" alt="タイトルロゴ">
 </div>
    </div><!-- /.loader-wrap -->

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
    

  </div><!-- /.p-mv__img -->
  <div class="p-mv__content">
    <h1 class="p-mv__title">
        <span>メ</span>
        <span>イ</span>
        <span>ン</span>
        <span>タ</span>
        <span>イ</span>
        <span>ト</span>
        <span>ル</span>
        <span>が</span>
        <span>入</span>
        <span>リ</span>
        <span>ま</span>
        <span>す</span>
    </h1><!-- /.p-mv__title -->
    <div class="p-mv__suv-title">サブタイトルが入ります</div><!-- /.p-mv__suv-title -->
  </div><!-- /.p-mv__content -->

</div><!-- /.l-mv p-mv -->




<!-- トップページコンテンツ -->
<!-- お知らせ -->
<section class="l-top-news p-news">
  <div class="p-news__inner">
    <div class="p-news__items">
      <div class="p-news__items-inner">

    <?php
  $args = [
    'post_type' => 'post', // カスタム投稿名が「」の場合
    'posts_per_page' => 1, // 表示する数
		  ];
	  $my_query = new WP_Query($args); ?>

		<?php if ($my_query->have_posts()): // 投稿がある場合 ?>
	  <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

       <article class="p-news__item p-news-info">
         <div class="p-news-info__head">
           <time class=" p-news-info__date" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y/n/j'); ?></time>
           <?php
              // カテゴリー１つ目の名前を表示
              $category = get_the_category();
              if ($category[0] ) {
                echo '<div class="p-news-info__category">' . $category[0]->cat_name . '</div>';
              }
              ?>
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


<!-- 事業内容 -->
<section class="l-top-content p-content js-scrollAnimation">
    <h2 class="p-content__title c-section-title">事業内容</h2><!-- /.p-content__title -->
    <ul class="p-content__items  p-content-box">
      <li class="p-content-box__item js-scrollAnimation">
      <a href="/content" class="p-content-box__link">
         <h3  class="p-content-box__text">経営理念ページへ</h3>
      </a>
    </li>
    <li class="p-content-box__item js-scrollAnimation">
      <a href="/content/#content1" class="p-content-box__link">
        <h3 class="p-content-box__text">理念1へ</h3>
      </a>
    </li>
    <li class="p-content-box__item js-scrollAnimation">
      <a href="/content/#content2" class="p-content-box__link">     
        <h3  class="p-content-box__text">理念2へ</h3>
      </a>
    </li>
    <li class="p-content-box__item js-scrollAnimation">
      <a href="/content/#content3" class="p-content-box__link">
      <h3  class="p-content-box__text">理念3へ</h3>
      </a>
    </li>
    
  </ul>
</section>



<!-- 制作実績 -->
<section class="l-top-works p-works">
  <h2 class="p-works__title c-section-title">制作実績</h2><!-- /.p-works__title -->
  <div class="p-works__content">
    <div class="p-works__inner">

      <div class="p-works__img-box js-scrollAnimation">
        
          <!-- Slider main container -->
          <div class="swiper p-works-swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper ">
              <!-- Slides -->

              <?php
                    $args = [
                      'post_type' => 'works', // カスタム投稿名が「gourmet」の場合
                      'posts_per_page' => 3, // 表示する数
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
            
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            
            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
          </div> 
      </div><!-- /.p-works__img-box -->
      
      <div class="p-works__text-box">
        <div class="p-works__sub-title">メインタイトルが入ります。</div><!-- /.p-works__sub-title -->
        <p class="p-works__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><!-- /.p-works__text -->
        <div class="p-works__btn c-btn--slide--white" >
          <a href="<?php echo esc_url( home_url( '/works/' ) ); ?>" class="c-btn">詳しく見る</a><!-- /.c-btn -->
        </div><!-- /.p-works__btn -->
      </div><!-- /.p-works__box -->
    </div><!-- /.p-works__inner -->
    </div><!-- /.p-works__content -->
  </section><!-- /.l-top-works -->
  
  
<!--企業概要 -->
<section class="l-top-overview p-overview js-scrollAnimation">
  <h2 class="p-overview__title c-section-title">企業概要</h2><!-- /.p-works__title -->
  <div class="p-overview__content">
    <div class="p-overview__inner">
      <div class="p-overview__img js-scrollAnimation">
        <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/overview1.jpg" alt="overview画像">
      </div><!-- /.p-works__img -->
      <div class="p-overview__text-box">
        <div class="p-overview__sub-title">メインタイトルが入ります。</div><!-- /.p-works__sub-title -->
        <p class="p-overview__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><!-- /.p-works__text -->
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
    <h2 class="p-blog__title c-section-title">ブログ</h2><!-- /.p-blog__title -->
    <div class="l-blog-items p-blog__items">

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
                <?php if(SCF::get( 'news-text-sub' )) {
                  echo mb_substr(SCF::get( 'news-text-sub' ),0,39);
                } ?>
             </div><!-- /.p-card__text -->
             <div href="" class="p-card__bottom">
                <div class="p-card__category">
                <?php echo esc_html( get_the_terms( get_the_ID(), 'genre' )[0]->name ); ?>
                 </div>
                
               <time class=" p-card__date" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y/n/j'); ?></time>
              </div><!-- /.p-card__bottom -->
            </div><!-- /.p-card__body -->
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