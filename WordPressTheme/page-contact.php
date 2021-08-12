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
      <form  action=""  class="contact-form"  id="js-form" method="POST">
        <dl  class="contact__form--dl">
          
          <div  class="contact__form--row">
            <dt  class="contact__form--label">
              <label  for="your-name"  class="is-required pc-only"  >※会社名
                </label>
              <label  for="your-name"  class="is-required sp-only" >※会社名・団体名
                </label>
              </dt>
              <dd  class="contact__form--input">
                <input  type="text"  id="your-name " name=""  placeholder="テキストがはいります">
              </dd>
            </div>

          <div  class="contact__form--row sp-only">
            <dt  class="contact__form--label ">
              <label  for="your-name"  class="is-required "  >※部署名
                </label>
              </dt>
              <dd  class="contact__form--input">
                <input  type="text"  id="your-name " name=""  placeholder="テキストがはいります">
              </dd>
            </div>
            
            <div  class="contact__form--row">
              <dt  class="contact__form--label">
                <label  for="your-name"  class="is-required"  >※お名前</label>
              </dt>
              <dd  class="contact__form--input">
                <input  type="text"  id="your-name " name=""  placeholder="テキストがはいります">
              </dd>
            </div>
            
            <div  class="contact__form--row">
              <dt  class="contact__form--label">
                <label  for="your-name"  class="is-required"  >※ふりがな</label>
              </dt>
              <dd  class="contact__form--input">
                <input  type="text"  id="your-name " name=""  placeholder="テキストがはいります">
              </dd>
            </div>
            
            <div  class="contact__form--row pc-only">
              <dt  class="contact__form--label">
                <label  for="your-email"  class="is-required">※メールアドレス</label>
              </dt>
              <dd  class="contact__form--input">
                <input  type="email"  id="your-email" name="" placeholder="text@example.com">
              </dd>
            </div>
            
            
            <div  class="contact__form--row">
              <dt  class="contact__form--label">
                <label  for="your-message">※お問い合わせ内容</label>
              </dt>
              <dd  class="contact__form--input">
                <textarea  name=""  id="your-message"  placeholder="テキストがはいります"></textarea>
              </dd>
            </div>
          </dl>
          
          
          <div  class="contact__form--submit">
            <input  type="submit"  id="submit" name="" value="送信"  disabled>
          </div>
          
        </form><!-- /.contact-form -->
        
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