<?php get_header(); ?>

<!-- 下層ページMV -->
<div class="p-lower-works-mv p-lower-common-mv js-mv">
  <h1 class="p-lower-common-mv__title">コレクション</h1><!-- /.p-news-mv__title -->
</div><!-- /.l-news-mv p-news-mv -->


<!-- 背景画像 -->
<div class="p-lower-works-back"></div><!-- /.p-lower-news-back -->

<!-- breadcrumbs -->
<?php get_template_part( 'template-parts/breadcrumbs' ); ?>



<!-- 下層ページコンテンツ -->
<div class="l-lower-works-nav p-lower-works-nav">
  <div class="l-inner p-lower-works-nav__inner">
    <div class="p-lower-works-nav__top">
    <a href="" class="p-lower-works-nav__item--top is-genre-active">すべて</a>
    </div><!-- /.p-lower-works-nav__top -->

    <div class="p-lower-works-nav__bottom">
    <?php
    $worksGenre_terms = get_terms( 'works_genre', array( 'hide_empty' => false ) );
    foreach ( $worksGenre_terms as $worksGenre_term ) :
  ?>
      <a href="<?php echo esc_url( get_term_link( $worksGenre_term, 'works_genre' ) ); ?>" class="p-lower-works-nav__item"><?php echo esc_html( $worksGenre_term->name ); ?></a>
      
      <?php
    endforeach;
    ?>
    </div><!-- /.p-lower-works-nav__top -->
  </div><!-- /.l-inner -->
</div><!-- /.p-lower-works-nav -->


<div class="l-lower-works-items p-lower-works-items">
   <div class="l-inner">

     <div class="p-lower-works-items__body">
       
<?php
//記事があればentriesブロック以下を表示
if ( have_posts() ) : ?>
<?php
//記事数ぶんループ
while ( have_posts() ) :
  the_post(); ?>


<a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="p-lower-works-items__item p-works-card">
  <div class="p-work-card__img">
    <?php
            if (has_post_thumbnail() ) {
              // アイキャッチ画像が設定されてれば大サイズで表示
              the_post_thumbnail('large');
            } 
            ?>
      <div class="p-works-card__category <?php echo esc_html( get_the_terms( get_the_ID(), 'works_genre' )[0]->slug ); ?>">
        <?php echo esc_html( get_the_terms( get_the_ID(), 'works_genre' )[0]->name ); ?>
      </div><!-- /.p-works-card__category -->
      </div><!-- /.p-work-card__img -->
      <div class="p-works-card__title">
        <?php the_title(); //タイトルを表示 ?>
      </div><!-- /.p-lower-card__title -->
    </a><!-- /.p-lower-works__item -->
    
<?php
endwhile;
?>      
<?php endif; ?>
      
    </div><!-- /.p-lower-works-items__body -->
  </div><!-- /.l-inner -->
  </div><!-- /.l-lower-works-items -->
  
  
  <!-- pagination -->
  <div class="l-lower-works-pagination p-lower-works-pagination">
          
          <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
          
        </div><!-- /.l-news-paginaition -->
        
        
        
        
        <section class="l-lower-works-contact">
          <?php get_template_part( 'template-parts/contact' ); ?>
        </section><!-- /.l-top-contact -->
        
        <!-- toTopボタン -->
<?php get_template_part( 'template-parts/to-top' ); ?>


<?php get_footer(); ?>