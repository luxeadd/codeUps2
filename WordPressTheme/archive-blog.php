<?php get_header(); ?>

<!-- 下層ページMV -->
<div class="l-lower-blog-mv p-lower-blog-mv p-lower-common-mv js-mv">
  <h1 class="p-lower-common-mv__title">ブログ</h1><!-- /.p-news-mv__title -->
</div><!-- /.l-news-mv p-news-mv -->

<!-- breadcrumbs -->
<?php get_template_part( 'template-parts/breadcrumbs' ); ?>



<!-- 下層ページコンテンツ -->
<div class="l-lower-works-nav p-lower-works-nav">
  <div class="l-inner p-lower-works-nav__inner">
    <div class="p-lower-works-nav__top">
      <a href="<?php echo esc_url( get_post_type_archive_link( 'blog' ) ); ?>" class="p-lower-works-nav__item--top is-genre-active">GENRE</a>
    </div><!-- /.p-lower-works-nav__top -->

    <div class="p-lower-works-nav__bottom">
    <?php
    $genre_terms = get_terms( 'genre', array( 'hide_empty' => false ) );
    foreach ( $genre_terms as $genre_term ) :
  ?>
      <a href="<?php echo esc_url( get_term_link( $genre_term, 'genre' ) ); ?>" class="p-lower-works-nav__item"><?php echo esc_html( $genre_term->name ); ?></a>
      <?php
    endforeach;
  ?>
    </div><!-- /.p-lower-works-nav__top -->
  </div><!-- /.l-inner -->
</div><!-- /.p-lower-works-nav -->



<section class="l-lower-blog-items">
   <div class="l-inner">      
      <div class="p-lower-blog-items">

      <?php
         //記事があればentriesブロック以下を表示
         if ( have_posts() ) : ?>
            <?php
            //記事数ぶんループ
            while ( have_posts() ) :
            the_post(); ?>

         <a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="p-lower-blog-items__item p-card">
            <div class="p-card__img">
            <?php
               if (has_post_thumbnail() ) {
               // アイキャッチ画像が設定されてれば大サイズで表示
               the_post_thumbnail('large');
               } 
               ?>
            </div><!-- /.p-card_img -->
            <div href="" class="p-card__body">
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
                  </div><!-- /.p-card__category -->
                  <time class=" p-card__date" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y/n/j'); ?></time>
               </div><!-- /.p-card__bottom -->
            </div><!-- /.p-card__body -->
         </a>
         

         <?php
          endwhile;
          ?>      
          <?php endif; ?>

      </div><!-- /.p-lower-blog-items__items -->
   </div><!-- /.l-inner -->
</section><!-- /.l-lower-blog-items -->
   
   

<!-- pagination -->
<div class="l-lower-blog-pagination p-lower-blog-pagination">

<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

</div><!-- /.l-news-paginaition -->

   

   
   
   

<section class="l-lower-blog-contact">
   <?php get_template_part( 'template-parts/contact' ); ?>
</section><!-- /.l-top-contact -->

<!-- toTopボタン -->
<div class="c-toTop js-to-top">
    <div class="arrow-top"></div>
</div><!-- /.c-toTop -->

<?php get_footer(); ?>