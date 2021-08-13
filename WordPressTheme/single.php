<?php get_header(); ?>


<div class="l-post-news-breadcrumbs">
  <div class="breadcrumbs">
    <div class="l-inner">
      <?php if(function_exists('bcn_display'))
    {
      bcn_display();
    }?>
    </div><!-- /.l-inner -->
  </div>
</div><!-- /.l-post-news-breadcrumbs -->



<section class="l-post-news p-post-news">
<div class="l-inner p-post-news__inner">

  <h1 class="p-post-news__title">
  タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。
  </h1><!-- /.p-post-news__title -->
  
  <div class="p-post-news__title-bottom">
    <time class="p-post-news__date" datetime="<?php the_time( 'c' ) ; ?>">2020/06/13</time>
    <div class="p-post-news__category">
         カテゴリ１
    </div><!-- /.p-post-news__category -->
  </div><!-- /.p-post-news__title-bottom -->

</div><!-- /.l-inner -->

<div class="p-post-news__img">
  <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/post/post1-pc.jpg" alt="">
</div><!-- /.p-post-news__img -->

<div class="p-post-news__body">
  <div class="l-inner p-post-news__inner">

    <p class="p-post-news__text">
    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
     </p><!-- /.p-post-news__text -->
      
      <h2 class="p-post-news__sub-title">
         見出し２
      </h2><!-- /.p-post-news__sub-title -->
        
      <p class="p-post-news__text">
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
      </p><!-- /.p-post-news__text -->
          
      <h3 class="p-post-news__sub-title2">
      見出し３見出し３見出し３見出し３
      </h3><!-- /.p-post-news__sub-title2 -->
            
      <p class="p-post-news__text">
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
      </p><!-- /.p-post-news__text -->
          
  </div><!-- / -->
</div><!-- /.p-post-news__body -->

  <div class="p-post-news__img2">
    <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/post/post2-pc.jpg" alt="">
  </div><!-- /.p-post-news__img -->


<div class="p-post-news__list-box">
  <div class="l-inner p-post-news__inner">

    <ul class="p-post-news__lists">
      <li class="p-post-news__list">
      ・リストが入ります。リストが入ります。リストが入ります。リストが入ります。
      </li><!-- /.p-post-news__list -->
      <li class="p-post-news__list">
      ・リストが入ります。リストが入ります。リストが入ります。リストが入ります。
      </li><!-- /.p-post-news__list -->
      <li class="p-post-news__list">
      ・リストが入ります。リストが入ります。リストが入ります。リストが入ります。
      </li><!-- /.p-post-news__list -->
      <li class="p-post-news__list">
      ・リストが入ります。リストが入ります。リストが入ります。リストが入ります。
      </li><!-- /.p-post-news__list -->
    </ul><!-- /.p-post-news__lists -->
    
    <ol class="p-post-news__lists">
      <li class="p-post-news__list">
      １リストが入ります。リストが入ります。リストが入ります。リストが入ります。
      </li><!-- /.p-post-news__list -->
      <li class="p-post-news__list">
      ２リストが入ります。リストが入ります。リストが入ります。リストが入ります。
      </li><!-- /.p-post-news__list -->
      <li class="p-post-news__list">
      ３リストが入ります。リストが入ります。リストが入ります。リストが入ります。
      </li><!-- /.p-post-news__list -->
      <li class="p-post-news__list">
      ４リストが入ります。リストが入ります。リストが入ります。リストが入ります。
      </li><!-- /.p-post-news__list -->
    </ol><!-- /.p-post-news__lists -->
    
  </div><!-- /.l-inner -->
</div><!-- /.p-post-news__list-box -->

</section><!-- /.l-post-news -->




<!-- pagination -->
<div class="l-post-news-pagination p-post-news-pagination">

   <div class='wp-pagenavi'>
      <a class="previouspostslink" rel="prev" href="#">PREV</a>
      
       <a href="/news" class="home">一覧</a>

      <a class="nextpostslink" rel="next" href="#">NEXT</a>
    </div>

</div><!-- /.l-news-paginaition -->




<!-- 関連記事 -->
<section class="l-post-news-article p-post-news-article">
<div class="l-inner">
  <div class="p-post-news-article__head--sp sp-only">
    おすすめ記事
  </div><!-- /.p-post-news-article__head -->
  <div class="p-post-news-article__head--pc pc-only">
    関連記事
  </div><!-- /.p-post-news-article__head -->

  <div class="p-post-news-article__box">
        <a href="" class="p-post-news-article__item p-card">
            <div class="p-card__img">
              <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/blog10.jpg" alt="blog画像10">
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
        <a href="" class="p-post-news-article__item p-card">
            <div class="p-card__img">
              <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/blog11.jpg" alt="blog画像11">
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
        <a href="" class="p-post-news-article__item p-card">
            <div class="p-card__img">
              <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/blog12.jpg" alt="blog画像12">
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
        <a href="" class="p-post-news-article__item p-card">
            <div class="p-card__img">
              <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/common/blog13.jpg" alt="blog画像13">
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
  </div><!-- /.p-post-news-article__box -->

</div><!-- /.l-inner -->


</section><!-- /.l-post-news-article -->


<section class="l-post-news-contact">
   <?php get_template_part( 'template-parts/contact' ); ?>
</section><!-- /.l-top-contact -->

<?php get_footer(); ?>