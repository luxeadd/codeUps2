<?php get_header(); ?>

<!-- 下層ページMV -->
<div class="p-lower-contact-mv p-lower-common-mv js-mv">
  <h1 class="p-lower-common-mv__title">お問い合わせ</h1><!-- /.p-news-mv__title -->
</div><!-- /.l-news-mv p-news-mv -->

<!-- breadcrumbs -->
<?php get_template_part('template-parts/breadcrumbs'); ?>



<!-- 下層ページコンテンツ -->
<div class="l-lower-contact-form p-lower-contact-form">


  <div class="contact__form">
    <div class="l-inner">
      <div action="" class="contact-form" id="js-form">

        <?#php echo do_shortcode('[contact-form-7 id="332" title="オリジナルフォーム"]'); 
        ?>

        <div class="form">
          <div class="form__top">
            <div class="form__topText">
              ご依頼やご相談についてのご質問やご要望がございましたら、下記フォームよりお気軽にお問い合わせください。送付いただいた内容を確認の上、担当者からご連絡させていただきます。
            </div>
          </div>

          <div class="form__contents">
            <div class="form__content">
              <div class="form__head">
                <p class="form__title">お問い合わせ種別</p>
                <span class="form__required">必須</span>
              </div>
              <div class="form__item">
                <div class="formRadio">
                  <label>
                    <input type="radio" name="radio-name"><span>制作依頼</span>
                  </label>
                  <label>
                    <input type="radio" name="radio-name"><span>採用</span>
                  </label>
                  <label>
                    <input type="radio" name="radio-name"><span>IR</span>
                  </label>
                  <label>
                    <input type="radio" name="radio-name"><span>その他</span>
                  </label>
                </div>
              </div>
            </div>

            <div class="form__content">
              <div class="form__head">
                <p class="form__title">お問い合わせ種別</p>
                <span class="form__required">必須</span>
              </div>
              <div class="form__item">
                <div class="formCheck">
                  <label>
                    <input class="formCheck__item" type="checkbox" name="check1"><span>備考1</span>
                  </label>
                  <label>
                    <input class="formCheck__item" type="checkbox" name="check2"><span>備考2</span>
                  </label>
                  <label>
                    <input class="formCheck__item" type="checkbox" name="check3"><span>備考3</span>
                  </label>
                  <label>
                    <input class="formCheck__item" type="checkbox" name="check4"><span>備考4</span>
                  </label>
                </div>
              </div>
            </div>

            <div class="form__content">
              <div class="form__head">
                <p class="form__title">会社名・団体名</p>
              </div>
              <div class="form__item">
                <input class="formText" type="text">
              </div>
            </div>

            <div class="form__content">
              <div class="form__head">
                <p class="form__title">お名前</p>
                <span class="form__required">必須</span>
              </div>
              <div class="form__item">
                <input class="formText" type="text">
              </div>
            </div>

            <div class="form__content">
              <div class="form__head">
                <p class="form__title">メールアドレス</p>
                <span class="form__required">必須</span>
              </div>
              <div class="form__item">
                <input class="formText" type="email">
              </div>
            </div>

            <div class="form__content">
              <div class="form__head">
                <p class="form__title">電話番号</p>
              </div>
              <div class="form__item">
                <input class="formText" type="tel">
              </div>
            </div>


            <div class="form__content">
              <div class="form__head">
                <p class="form__title">ご用件</p>
                <span class="form__required">必須</span>
              </div>
              <div class="form__item">
                <select name="ご用件" class="formSelect">
                  <option value="">ご用件を選択</option>
                  <option value="">セレクトAセレクトAセレクトA</option>
                  <option value="">セレクトBセレクトBセレクトB</option>
                  <option value="">セレクトCセレクトC</option>
                </select>
              </div>
            </div>

            <div class="form__content">
              <div class="form__head">
                <p class="form__title">お問い合わせ内容</p>
                <span class="form__required">必須</span>
              </div>
              <div class="form__item">
                <textarea class="formTextArea"></textarea>
              </div>
            </div>

            <div class="form__content">
              <div class="form__head">
                <p class="form__title">PRIVACY POLICY</p>
              </div>
              <div class="form__item">
                <div class="formPolicy">
                  <p class="formPolicy__text">

                    個人情報保護方針<br>
                    株式会社DIGSMILE（以下、当社）では、個人情報の重要性を認識し、以下の基準に従って、適切な管理、保護に努めます。<br><br>

                    1.個人情報の収集、利用<br>
                    当社では、お客様との取引、サービスの提供のために個人情報を適法に収集し、収集した目的の範囲内で、個人情報を利用いたします。<br>

                    2.個人情報の第三者への開示と提供<br>
                    収集したお客様の個人情報は、法的な要請等によらない限り、お客様の承諾を得ない第三者に対して提供・開示はいたしません。<br>
                    業務の都合上、業務委託先に個人情報を提供する場合は、機密保持契約等によって業務委託先に個人情報保護を義務付けるとともに、業務委託先が適切に個人情報を取り扱うように管理いたします。<br><br>

                    3.個人情報の保護<br>
                    当社では、個人情報の紛失、破壊、改ざん、不正アクセス、および漏えい等を防止するため、適切な対策を行います。<br><br>

                    4.法令および関連規範の遵守<br>
                    当社は、個人情報の取り扱いに関して、個人情報保護法をはじめとする個人情報に関する法令および関連する規範を遵守します。<br><br>

                    5.個人情報の開示・訂正・削除<br>
                    当社では、個人情報の開示・訂正・削除等の依頼があった場合、情報提供者本人であることを確認の上、すみやかに対応いたします。<br>

                    法令や当社方針により、プライバシー・ポリシーを予告なく改訂することがあります。<br><br>

                    お問い合わせ窓口<br>
                    当社の個人情報の取扱いに関するお問い合わせは下記までご連絡お願いいたします。
                    株式会社ファイアープレイス<br>
                    044-589-4333
                  </p>
                </div>
              </div>
            </div>


            <div class="form__content form__contentCheckbox">
              <div class="formAgree">
                <label>
                  <input class="formAgree__item" type="checkbox" name=""><span>個人情報の取り扱いについて同意のうえ送信します。</span>
                </label>
              </div>
            </div>

            <div class="form__content form__contentButton">
              <input class="formBtn" type="submit" value="送信">
            </div>
          </div>
        </div>


      </div><!-- /.contact-form -->


      <div id="js-success" class="contact__message">
        <p>送信完了しました。ありがとうございました。 </p>
      </div><!-- /.contact__message -->

      <div id="js-error" class="contact__message -error">
        <p>送信に失敗しました。ページを更新して再度送信してください。 </p>
      </div><!-- /.contact__message -->

    </div>
  </div><!-- /.contact__form -->

</div><!-- /.l-lower-contact-form -->





<section class="l-lower-contact-contact sp-only">
  <?php get_template_part('template-parts/contact'); ?>
</section><!-- /.l-top-contact -->






<!-- toTopボタン -->
<?php get_template_part('template-parts/to-top'); ?>


<?php get_footer(); ?>