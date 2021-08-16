<?php get_header(); ?>
<div class="js-mv"></div>

<div class="l-post-works-breadcrumbs">
  <div class="breadcrumbs">
    <div class="l-inner">
      <?php if(function_exists('bcn_display'))
    {
      bcn_display();
    }?>
    </div><!-- /.l-inner -->
  </div>
</div><!-- /.l-post-works-breadcrumbs -->



<section class="l-post-works p-post-works">
<div class="l-inner p-post-works__inner">

  <h1 class="p-post-works__title">
       <?php the_title(); ?>
  </h1><!-- /.p-post-works__title -->
  
  <div class="p-post-works__title-bottom">
    <time class="p-post-works__date" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y/n/j'); ?></time>
    <div class="p-post-works__category">
    <?php echo esc_html( get_the_terms( get_the_ID(), 'works_genre' )[0]->name ); ?>
    </div><!-- /.p-post-works__category -->
  </div><!-- /.p-post-works__title-bottom -->

</div><!-- /.l-inner -->

<div class="p-post-works__img">
<div class="gallery">                
    <div class="swiper-container gallery-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
            <?php
                  if (has_post_thumbnail() ) {
                  // アイキャッチ画像が設定されてれば大サイズで表示
                  the_post_thumbnail('large');
                  } 
                  ?>
              </div>

              <?php 
              $works_image_box = SCF::get('works-image-box'); 
              ?>
                <?php foreach ($works_image_box as $works_image ) :?>
                
                <div class="swiper-slide">
                <?php echo wp_get_attachment_image($works_image['works-image'],'large') ; ?>
                </div>

                <?php endforeach ?>
                
        </div>

        <div class="swiper-button-prev">
               <div class="arrow-left"></div>
        </div>
        <div class="swiper-button-next">
              <div class="arrow-right"></div>
        </div>
    </div>

    <div class="swiper-container gallery-thumbs">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
            <?php
                  if (has_post_thumbnail() ) {
                  // アイキャッチ画像が設定されてれば大サイズで表示
                  the_post_thumbnail('thumbnail');
                  } 
                  ?>
            </div>

            <?php 
            $works_image_box = SCF::get('works-image-box'); 
          
            ?>
                <?php foreach ($works_image_box as $works_image ) :?>
                
                <div class="swiper-slide">
                <?php echo wp_get_attachment_image($works_image['works-image'],'thumbnail') ; ?>
                </div>

                <?php endforeach ?>
         
        </div>
    </div>
</div>

</div><!-- /.p-post-works__img -->


<div class="p-post-works__wrapper">
  <div class="l-inner p-post-works__inner">


  <?php $works_text_box = SCF::get('works-text-box'); ?>
<?php foreach ($works_text_box as $works_text ) :?>

 <div class="p-post-works__body">
   <h2 class="p-post-works__sub-title">
         <?php echo $works_text['works-title']; ?>
   </h2><!-- /.p-post-works__sub-title -->
   <p class="p-post-works__text">
        <?php echo nl2br($works_text['works-text']); ?>
    </p><!-- /.p-post-works__text -->
  </div><!-- /.p-post-works__body -->
  
  <?php endforeach ?>

    
  </div><!-- / -->
</div><!-- /.p-post-works__wrapper -->
  
  
<div class="p-post-works__list-box sp-only">
  <div class="l-inner p-post-works__inner">

    <ul class="p-post-works__lists">

    <?php $works_lists1 = SCF::get('works-lists1'); ?>
      <?php foreach ($works_lists1 as $works_list1 ) :?>
      <li class="p-post-works__list">
            <?php echo $works_list1['works-list1']; ?>
        </li><!-- /.p-post-works__list -->
  <?php endforeach ?>
     
    </ul><!-- /.p-post-works__lists -->
    
    <ol class="p-post-works__lists">

    <?php $works_lists2 = SCF::get('works-lists2'); ?>
      <?php foreach ($works_lists2 as $works_list2 ) :?>
      <li class="p-post-works__list">
            <?php echo $works_list2['works-list2']; ?>
        </li><!-- /.p-post-works__list -->
  <?php endforeach ?>

    </ol><!-- /.p-post-works__lists -->
    
  </div><!-- /.l-inner -->
</div><!-- /.p-post-works__list-box -->

</section><!-- /.l-post-works -->




<!-- pagination -->

<?php
 $previous_post = get_previous_post();
 $previous_id = $previous_post->ID;
 $previous_date = mysql2date('Y.m.d', $previous_post->post_date);
 $next_post = get_next_post();
 $next_id = $next_post->ID;
 $next_date = mysql2date('Y.m.d', $next_post->post_date);
?>

<div class="l-post-works-pagination p-post-works-pagination">

<div class='wp-pagenavi'>
     <!-- 前に記事がなければ非表示 -->
   <?php if( $previous_post ): ?>    
      <a class="previouspostslink" rel="prev" href="<?php the_permalink( $previous_id ); ?>">PREV</a>
      <?php endif; ?>

       <a href="/works" class="home">一覧</a>

    <!-- 次にに記事がなければ非表示 -->
    <?php if( $next_post ): ?>  
      <a class="nextpostslink" rel="next" href="<?php the_permalink( $next_id ); ?>">NEXT</a>
      <?php endif; ?>

    </div>

    
</div><!-- /.l-works-paginaition -->




<!-- 関連記事 -->
<section class="l-post-works-article p-post-works-article">
<div class="l-inner">
  <div class="p-post-works-article__head--sp sp-only">
    おすすめ記事
  </div><!-- /.p-post-works-article__head -->
  <div class="p-post-works-article__head--pc pc-only">
    関連記事
  </div><!-- /.p-post-works-article__head -->

  <div class="p-post-works-article__box">

  <?php
    $related_query = new WP_Query(
      array(
         'posts_per_page'=> 4, //表示件数
         'post_type' => 'works', //カスタム投稿タイプ名
         'orderby' => 'rand', //ランダム表示
         'post__not_in' => array($post->ID) //表示中の記事を除外
      )
    );
    ?>
    <?php if ( $related_query->have_posts() ) : ?>
      <?php while ( $related_query->have_posts() ) : ?>
        <?php $related_query->the_post(); ?>


        <a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="p-post-works-article__item p-card">
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
             
              </div><!-- /.p-card__text -->
              <div href="" class="p-card__bottom">
                  <div class="p-card__category">
                  <?php echo esc_html( get_the_terms( get_the_ID(), 'works_genre' )[0]->name )?>
                  </div><!-- /.p-card__category -->
                  <time class=" p-card__date" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y/n/j'); ?></time>
              </div><!-- /.p-card__bottom -->
            </div><!-- /.p-card__body -->
        </a>
        
        <?php endwhile; ?> 
        <?php endif; ?>
  <?php wp_reset_postdata(); ?>

  </div><!-- /.p-post-works-article__box -->

</div><!-- /.l-inner -->


</section><!-- /.l-post-works-article -->


<section class="l-post-works-contact">
   <?php get_template_part( 'template-parts/contact' ); ?>
</section><!-- /.l-top-contact -->

<?php get_footer(); ?>