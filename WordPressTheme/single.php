<?php get_header(); ?>

<div class="js-mv"></div>

<!-- 背景画像 -->
<div class="p-post-news-back"></div><!-- /.p-lower-news-back -->

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
        <?php the_title(); ?>
  </h1><!-- /.p-post-news__title -->
  
  <div class="p-post-news__title-bottom">
    <time class="p-post-news__date" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y/n/j'); ?></time>
    <div class="p-post-news__category <?php $cat = get_the_category( ); $cat = $cat[0]; { echo $cat->slug;} ?>">
      <?php $cat = get_the_category(  ); $cat = $cat[0]; {echo $cat->cat_name; } ?>
    </div><!-- /.p-post-news__category -->
  </div><!-- /.p-post-news__title-bottom -->

</div><!-- /.l-inner -->

<div class="p-post-news__img">
      <?php
      if (has_post_thumbnail() ) {
      // アイキャッチ画像が設定されてれば大サイズで表示
      the_post_thumbnail('large');
      } 
      ?>
</div><!-- /.p-post-news__img -->

<div class="p-post-news__body">
  <div class="l-inner p-post-news__inner">

    <p class="p-post-news__text">
    <?php $newsTextSub = scf::get('news-text'); echo nl2br( $newsTextSub ); ?>
         
     </p><!-- /.p-post-news__text -->
      
      <h2 class="p-post-news__sub-title">
      <?php echo  SCF::get( 'news-title-sub' );?>
      </h2><!-- /.p-post-news__sub-title -->

      <p class="p-post-news__text">
      <?php $newsTextSub = scf::get('news-text-sub'); echo nl2br( $newsTextSub ); ?>
      </p><!-- /.p-post-news__text -->
          
      <h3 class="p-post-news__sub-title2">
      <?php echo SCF::get( 'news-title-sub2' );?>
      </h3><!-- /.p-post-news__sub-title2 -->
            
      <p class="p-post-news__text">
      <?php $newsTextSub = scf::get('news-text-sub2'); echo nl2br( $newsTextSub ); ?>
      </p><!-- /.p-post-news__text -->
          
  </div><!-- / -->
</div><!-- /.p-post-news__body -->

  <div class="p-post-news__img2">
   <img src="<?php $newsImageSub = scf::get('news-image-sub'); echo wp_get_attachment_url( $newsImageSub ); ?>" alt="投稿サブ画像" >
  </div><!-- /.p-post-news__img -->
</section><!-- /.l-post-news -->






<!-- pagination -->

<?php
 $previous_post = get_previous_post();
 $previous_id = $previous_post->ID;
 $previous_date = mysql2date('Y.m.d', $previous_post->post_date);
 $next_post = get_next_post();
 $next_id = $next_post->ID;
 $next_date = mysql2date('Y.m.d', $next_post->post_date);
?>


<div class="l-post-news-pagination p-post-news-pagination">

   <div class='wp-pagenavi'>
      <a class="previouspostslink" rel="prev" href="<?php the_permalink( $previous_id ); ?>">PREV</a>
       <a href="/news" class="home">一覧</a>
      <a class="nextpostslink" rel="next" href="<?php the_permalink( $next_id ); ?>">NEXT</a>
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
      

          <?php
          // 同じカテゴリから記事を10件呼び出す
          $categories = get_the_category($post->ID);
          
          $category_ID = array();
          
          foreach($categories as $category):
            array_push( $category_ID, $category -> cat_ID);
          endforeach ;
          
          $args = array(
            // 今読んでいる記事を除く
            'post__not_in' => array($post -> ID),
            'posts_per_page'=> 4,
            'category__in' => $category_ID,
            // ランダムに記事を選ぶ
            'orderby' => 'rand',
          );
          $query = new WP_Query($args);
          if( $query -> have_posts() ):
            while ($query -> have_posts()) :
            $query -> the_post();
          ?>
         
         <a href="<?php the_permalink(); ?>" class="p-post-news-article__item p-card">
            <div class="p-card__img">
            <?php if (has_post_thumbnail() ) {  the_post_thumbnail('large');}  ?>
            </div><!-- /.p-card_img -->
            <div href="" class="p-card__body">
              <h3 class="p-card__title"><?php the_title(); //タイトルを表示 ?></h3><!-- /.p-card__title -->
            </div><!-- /.p-card__body -->
              <div href="" class="p-card__bottom">
               <div class="p-card__category <?php $cat = get_the_category( ); $cat = $cat[0]; { echo $cat->slug;} ?>">
                  <?php $cat = get_the_category(  ); $cat = $cat[0]; {echo $cat->cat_name; } ?>
               </div><!-- /.p-card__category -->
                <time class=" p-card__date" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y/n/j'); ?></time>
              </div><!-- /.p-card__bottom -->
        </a>
         

          <?php endwhile; endif; ?>
          <?php wp_reset_postdata(); ?> 

       
  </div><!-- /.p-post-news-article__box -->

</div><!-- /.l-inner -->
</section><!-- /.l-post-news-article -->


<section class="l-post-news-contact">
   <?php get_template_part( 'template-parts/contact' ); ?>
</section><!-- /.l-top-contact -->

<!-- toTopボタン -->
<?php get_template_part( 'template-parts/to-top' ); ?>

<?php get_footer(); ?>