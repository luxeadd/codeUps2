<?php get_header(); ?>

<!----------- 投稿ページ ------------>

<!-- 下層ページMV -->
<div class="p-news-mv p-lower-common-mv js-mv">
  <h1 class="p-lower-common-mv__title">お知らせ</h1><!-- /.p-news-mv__title -->
</div><!-- /.l-news-mv p-news-mv -->

<!-- 背景画像 -->
<div class="p-lower-news-back"></div><!-- /.p-lower-news-back -->

<!-- breadcrumbs -->
<?php get_template_part( 'template-parts/breadcrumbs' ); ?>


<!-- 下層ページコンテンツ -->
<section class="l-lower-news p-lower-news">
  <div class="p-lower-news__inner l-inner">
    <div class="p-lower-news__items">

  <?php
//記事があればentriesブロック以下を表示
if ( have_posts() ) : ?>
   <?php
    //記事数ぶんループ
    while ( have_posts() ) :
    the_post(); ?>

      <article class="p-lower-news__item p-news-info">
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
  
        <?php
          endwhile;
          ?>      
     <?php endif; ?>
     
    </div><!-- /.p-news__items -->
  </div><!-- /.l-inner -->
</section>



<!-- pagination -->
<div class="l-news-pagination">

<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

</div><!-- /.l-news-paginaition -->



<section class="l-news-contact">
   <?php get_template_part( 'template-parts/contact' ); ?>
</section><!-- /.l-top-contact -->

<!-- toTopボタン -->
<?php get_template_part( 'template-parts/to-top' ); ?>


<?php get_footer(); ?>