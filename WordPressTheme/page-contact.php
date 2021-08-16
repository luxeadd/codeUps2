<?php get_header(); ?>

<!-- 下層ページMV -->
<div class="l-lower-contact-mv p-lower-contact-mv p-lower-common-mv js-mv">
  <h1 class="p-lower-common-mv__title">お問い合わせ</h1><!-- /.p-news-mv__title -->
</div><!-- /.l-news-mv p-news-mv -->

<!-- breadcrumbs -->
<?php get_template_part( 'template-parts/breadcrumbs' ); ?>



<!-- 下層ページコンテンツ -->
<div class="l-lower-contact-form p-lower-contact-form">


    <div  class="contact__form">
      <div  action=""  class="contact-form"  id="js-form" >
     
      <?php echo do_shortcode('[contact-form-7 id="332" title="オリジナルフォーム"]'); ?>
       
        </div><!-- /.contact-form -->
        
        <div  id="js-success"  class="contact__message">
          <p>送信完了しました。ありがとうございました。 </p>
        </div><!-- /.contact__message -->
        
        <div  id="js-error"  class="contact__message -error">
          <p>送信に失敗しました。ページを更新して再度送信してください。 </p>
        </div><!-- /.contact__message -->
    
        
      </div><!-- /.contact__form -->
    </div><!-- /.l-lower-contact-form -->
    
    
    
    
    
<section class="l-lower-contact-contact sp-only">
   <?php get_template_part( 'template-parts/contact' ); ?>
</section><!-- /.l-top-contact -->

    
    
    
    
    
    <!-- toTopボタン -->
<div class="c-toTop js-to-top">
    <div class="arrow-top"></div>
</div><!-- /.c-toTop -->

<?php get_footer(); ?>