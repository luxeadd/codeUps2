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
    <div class="p-post-works__category <?php echo esc_html( get_the_terms( get_the_ID(), 'works_genre' )[0]->slug ); ?>">
    <?php echo esc_html( get_the_terms( get_the_ID(), 'works_genre' )[0]->name ); ?>
    </div><!-- /.p-post-works__category -->
  </div><!-- /.p-post-works__title-bottom -->

  
  <div class="p-post-works__block">
    <div class="p-post-works__img">
      <div class="gallery">                
        <div class="swiper gallery-slider">
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
            <?php $works_text_box = SCF::get('works-text-box'); ?>
            <?php foreach ($works_text_box as $works_text ) :?>
              
              <div class="p-post-works__body">
                <h2 class="p-post-works__sub-title">
                  <?php echo $works_text['works-title']; ?>
                </h2><!-- /.p-post-works__sub-title -->
                <p class="p-post-works__text">
                  <?php echo $works_text['works-text']; ?>
                </p><!-- /.p-post-works__text -->
              </div><!-- /.p-post-works__body -->
              
              <?php endforeach ?>
            </div><!-- /.p-post-works__wrapper -->
          </div><!-- /.p-post-works__block -->
        </div><!-- /.l-inner -->
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
  <div class="p-post-works-article__head">
    関連商品
  </div><!-- /.p-post-works-article__head -->

  <div class="p-post-works-article__box">

  <?php
 global $post;
 $term = array_shift(get_the_terms($post->ID, 'works_genre')); 
 $args = array(
  'numberposts' => 4, 
  'post_type' => 'works', //カスタム投稿タイプ名
  'taxonomy' => 'works_genre', //タクソノミー名
  'term' => $term->slug, //ターム名
  'orderby' => 'rand', //ランダム表示
  'post__not_in' => array($post->ID) //表示中の記事を除外
 );
?>
<?php $myPosts = get_posts($args); if($myPosts) : ?>
<?php foreach($myPosts as $post) : setup_postdata($post); ?>


  <a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="p-post-works-article__item p-works-card">
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
    
        
    <?php endforeach; ?>
<?php else : ?>
 <p>関連アイテムはまだありません。</p>
<?php endif; wp_reset_postdata(); ?>

  </div><!-- /.p-post-works-article__box -->

</div><!-- /.l-inner -->


</section><!-- /.l-post-works-article -->


<section class="l-post-works-contact">
   <?php get_template_part( 'template-parts/contact' ); ?>
</section><!-- /.l-top-contact -->

<!-- toTopボタン -->
<?php get_template_part( 'template-parts/to-top' ); ?>


<?php get_footer(); ?>