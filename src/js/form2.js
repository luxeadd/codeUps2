/*----------------------------------------------------
お問合せ
-----------------------------------------------------*/
$(function () {
  // 入力内容取得用 変数
  var val;
  // id取得用 変数
  var id;
  // ラジオボタン値取得用 変数
  var radio;
  // チェックボックス値取得用 変数
  var check;
  // input要素のtype属性値取得用（ラジオボタンであるかどうか判別のため）
  var type;
  // ラジオボタン初期値の取得　以下の記述で全てのラジオボタンの初期値を取得
  $("[type='radio']:checked").each(function (index) {
    // ラジオボタン値取得
    radio = $(this).val();
    // ラジオボタンの祖先要素からid名を取得
    id = $(this).parents("[id]").attr("id");
    // 取得したid名を確認用のclass名末尾に付与して、確認画面の値を指定
    $(".confirm_" + id).text(radio);
  });
  
  //入力欄の内容が変わった際の処理　入力した内容が確認画面へ登録される
  $(".input_area input,.input_area select,.input_area textarea").change(
    function () {
      //入力内容取得
      val = $(this).val();
      //type属性の取得
      type = $(this).attr("type");
      //type属性がラジオボタンだった場合の処理
      if (type == "radio") {
        // ラジオボタン値取得
        radio = $(this).val();
        // ラジオボタンの祖先要素からid名を取得
        id = $(this).parents("[id]").attr("id");
        // 取得したid名を確認用のclass名末尾に付与して、確認画面の値を指定
        $(".confirm_" + id).text(radio);
      } //type属性がチェックボックスだった場合の処理
      else if (type == "checkbox") {
        // チェックボックス値取得
        check = $(this).val();
        // ラジオボタンの祖先要素からid名を取得
        id = $(this).parents("[id]").attr("id");
        // 取得したid名を確認用のclass名末尾に付与して、確認画面の値を指定
        $(".confirm_" + id).append(check + " / ");
      } //type属性がラジオボタンではなかった場合の処理
      else {
        // 入力欄のid名を取得
        id = $(this).attr("id");
        // 取得したid名を確認用のclass名末尾に付与して、確認画面の値を指定
        $(".confirm_" + id).text(val);
      }
    }
  );
  //確認ボタンを押した際の処理　入力画面を非表示・確認画面を表示
  $(".confirm_button").click(function () {
    $(".input_area").hide();
    $(".confirm_area").show();
    $(window).scrollTop($("#wrap").position().top);
  });
  //戻るボタンを押した際の処理　入力画面を表示・確認画面を非表示
  $(".back_button").click(function () {
    $(".input_area").show();
    $(".confirm_area").hide();
    $(window).scrollTop($("#wrap").position().top);
  });

  //必須項目チェック用　定数の作成
  const target = '[aria-required="true"]';
  //承認が不要の場合は削除、ネーム名もひとそれぞれ違う可能性あり
  const target2 = '[name="acceptance-86"]';
  const target3 = "[aria-describedby]";

  //キー操作、状態変化をトリガーに実行
  $(target + "," + target2 + "," + target3).on(
    "keydown keyup keypress change",
    function () {
      //判定用のフラグ
      let flag = true;
      let flag2 = $(target2).is(":checked");
      let flag3 = $(target3).attr("aria-describedby");

      //指定要素をループで１つずつ確認
      $(target).each(function (e) {
        if ($(target).eq(e).val() === "") {
          flag = false;
        }
      });

      //フラグをみてtrueなら確認ボタンを有効。falseなら無効にする
      if (flag && flag2 && !flag3) {
        //必須項目すべて入力済みであれば有効にする
        $(".confirm_button").removeAttr("disabled");
      } else {
        //未入力など漏れがある場合は無効にする
        $(".confirm_button").attr("disabled", "");
      }
    }
  );
});
//送信後完了画面へ（URLはご自身で変更してください）
$(function () {
  document.addEventListener(
    "wpcf7mailsent",
    function (event) {
      location = "/thanks";
    },
    false
  );
});
