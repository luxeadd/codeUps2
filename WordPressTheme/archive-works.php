<?php get_header(); ?>

<!-- 下層ページMV -->
<div class="l-lower-works-mv p-lower-works-mv p-lower-common-mv js-mv">
  <h1 class="p-lower-common-mv__title">制作実績</h1><!-- /.p-news-mv__title -->
</div><!-- /.l-news-mv p-news-mv -->

<!-- breadcrumbs -->
<?php get_template_part( 'template-parts/breadcrumbs' ); ?>



<!-- 下層ページコンテンツ -->
<div class="l-lower-works-nav p-lower-works-nav">
  <div class="l-inner p-lower-works-nav__inner">
    <div class="p-lower-works-nav__top">
      <a href="" class="p-lower-works-nav__item p-lower-works-nav__item--is-active">GENRE</a>
    </div><!-- /.p-lower-works-nav__top -->

    <div class="p-lower-works-nav__bottom">
      <a href="" class="p-lower-works-nav__item">カテゴリ１</a>
      <a href="" class="p-lower-works-nav__item">カテゴリカテゴリ</a>
      <a href="" class="p-lower-works-nav__item">カテ</a>
    </div><!-- /.p-lower-works-nav__top -->
  </div><!-- /.l-inner -->
</div><!-- /.p-lower-works-nav -->


<div class="l-lower-works-items p-lower-works-items">

   <a href="" class="p-lower-works-items__item p-works-card">
      <div class="p-work-card__img">
           <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/works/lower-works1-pc.jpg" alt="lower-works画像1">      
      </div><!-- /.p-work-card__img -->
      <div class="p-works-card__category">カテゴリ1</div><!-- /.p-works-card__category -->
      <div class="p-works-card__title">CodeUps株式会社</div><!-- /.p-lower-card__title -->
   </a><!-- /.p-lower-works__item -->

   <a href="" class="p-lower-works-items__item p-works-card">
      <div class="p-work-card__img">
           <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/works/lower-works2-pc.jpg" alt="lower-works画像2">      
      </div><!-- /.p-work-card__img -->
      <div class="p-works-card__category">カテゴリ1</div><!-- /.p-works-card__category -->
      <div class="p-works-card__title">CodeUps株式会社</div><!-- /.p-lower-card__title -->
   </a><!-- /.p-lower-works__item -->

   <a href="" class="p-lower-works-items__item p-works-card">
      <div class="p-work-card__img">
           <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/works/lower-works3-pc.jpg" alt="lower-works画像3">      
      </div><!-- /.p-work-card__img -->
      <div class="p-works-card__category">カテゴリ1</div><!-- /.p-works-card__category -->
      <div class="p-works-card__title">CodeUps株式会社</div><!-- /.p-lower-card__title -->
   </a><!-- /.p-lower-works__item -->

   <a href="" class="p-lower-works-items__item p-works-card">
      <div class="p-work-card__img">
           <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/works/lower-works4-pc.jpg" alt="lower-works画像4">      
      </div><!-- /.p-work-card__img -->
      <div class="p-works-card__category">カテゴリ1</div><!-- /.p-works-card__category -->
      <div class="p-works-card__title">CodeUps株式会社</div><!-- /.p-lower-card__title -->
   </a><!-- /.p-lower-works__item -->

   <a href="" class="p-lower-works-items__item p-works-card">
      <div class="p-work-card__img">
           <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/works/lower-works5-pc.jpg" alt="lower-works画像5">      
      </div><!-- /.p-work-card__img -->
      <div class="p-works-card__category">カテゴリ1</div><!-- /.p-works-card__category -->
      <div class="p-works-card__title">CodeUps株式会社</div><!-- /.p-lower-card__title -->
   </a><!-- /.p-lower-works__item -->

   <a href="" class="p-lower-works-items__item p-works-card">
      <div class="p-work-card__img">
           <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/works/lower-works6-pc.jpg" alt="lower-works画像6">      
      </div><!-- /.p-work-card__img -->
      <div class="p-works-card__category">カテゴリ1</div><!-- /.p-works-card__category -->
      <div class="p-works-card__title">CodeUps株式会社</div><!-- /.p-lower-card__title -->
   </a><!-- /.p-lower-works__item -->

</div><!-- /.l-lower-works-items -->


<!-- pagination -->
<div class="l-lower-works-pagination p-lower-works-pagination">

   <div class='wp-pagenavi'>
      <a class="previouspostslink" rel="prev" href="#">PREV</a>
      <span class='current'>1</span>
      <a class="page smaller" href="#">2</a>
      <a class="page smaller" href="#">3</a>
      <a class="page larger" href="#">4</a>
      <a class="nextpostslink" rel="next" href="#">NEXT</a>
    </div>

</div><!-- /.l-news-paginaition -->




<section class="l-lower-works-contact">
   <?php get_template_part( 'template-parts/contact' ); ?>
</section><!-- /.l-top-contact -->

<!-- toTopボタン -->
<div class="c-toTop js-to-top">
    <div class="arrow-top"></div>
</div><!-- /.c-toTop -->

<?php get_footer(); ?>