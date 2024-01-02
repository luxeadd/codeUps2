// -----------------------
// お問い合わせフォーム確認画面(ContactForm7用)
// -----------------------

// input[text],input[textAre]入力項目と確認用要素のペアを作成
let fields = [
  {
    input: document.querySelector(".js_inputCompany"),
    confirm: document.querySelector(".js_confirmCompany"),
  },
  {
    input: document.querySelector(".js_inputName"),
    confirm: document.querySelector(".js_confirmName"),
  },
  {
    input: document.querySelector(".js_inputEmail"),
    confirm: document.querySelector(".js_confirmMail"),
  },
  {
    input: document.querySelector(".js_inputTel"),
    confirm: document.querySelector(".js_confirmTel"),
  },
  {
    input: document.querySelector(".js_inputTextArea"),
    confirm: document.querySelector(".js_confirmTextArea"),
  },
];

// その他入力項目の各要素の取得
let inputArea = document.querySelector(".inputArea");
let radioButtons = document.querySelectorAll('.js_inputRadio input[type="radio"]');
let checkboxes = document.querySelectorAll('.js_inputCheck input[type="checkbox"]');
let inputSelect = document.querySelector(".js_inputSelect");
let btnConfirm = document.querySelector(".js_btnConfirm");
let requiredInputs = document.querySelectorAll(".js_inputRequired");
let inputAgree = document.querySelector('.js_inputAgree input[type="checkbox"]');

// その他確認表示用の各要素の取得
// .confirmAreaはCSSでdisplay:noneをつけておく
let confirmArea = document.querySelector(".confirmArea");
let confirmRadio = document.querySelector(".js_confirmRadio");
let confirmCheck = document.querySelector(".js_confirmCheck");
let confirmSelect = document.querySelector(".js_confirmSelect");
let confirmAgree = document.querySelector(".js_confirmAgree");

// input[text],input[textAre]入力項目と確認用要素の値を同期
if (fields && fields.length > 0) {
  fields.forEach(function (field) {
    if (field.input && field.confirm) {
      field.input.addEventListener("input", function () {
        if (field.input.type === "textarea") {
          field.confirm.innerHTML = field.input.value.replace(/\n/g, "<br>");
        } else {
          field.confirm.textContent = field.input.value;
        }
      });
    }
  });
}

// ラジオボタン選択で確認用項目に表示
function updateConfirmRadio() {
  const selectedRadio = [...radioButtons].find((radio) => radio.checked);
  confirmRadio.textContent = selectedRadio ? selectedRadio.value : "";
}

radioButtons.forEach((radio) => {
  radio.addEventListener("change", updateConfirmRadio);
});

updateConfirmRadio();

// チェックボックス選択で確認用項目に表示
function updateConfirmCheck() {
  let selectedValues = Array.from(checkboxes)
    .filter(function (checkbox) {
      return checkbox.checked;
    })
    .map(function (checkbox) {
      return checkbox.nextElementSibling.textContent;
    });

  confirmCheck.textContent = selectedValues.join(", ");
}

checkboxes.forEach(function (checkbox) {
  checkbox.addEventListener("change", updateConfirmCheck);
});

updateConfirmCheck();

// セレクトボックス選択で確認用項目に表示
inputSelect.addEventListener("change", function () {
  let selectedOption = inputSelect.options[inputSelect.selectedIndex];
  confirmSelect.textContent = selectedOption.text;
});

// 同意チェックの変更を監視して確認要素にテキストを挿入
inputAgree.addEventListener("change", function () {
  if (inputAgree.checked) {
    confirmAgree.textContent = "プライバシーポリシーに同意します";
  } else {
    confirmAgree.textContent = "";
  }
});

// 初期値の設定
fields.forEach(function (field) {
  if (field.input.type === "radio" && field.input.checked) {
    confirmRadio.textContent = field.input.value;
  } else if (field.input.type === "textarea") {
    field.confirm.innerHTML = field.input.value.replace(/\n/g, "<br>");
  } else {
    field.confirm.textContent = field.input.value;
  }
});

// ラジオボタンとチェックボックスの初期値を反映
updateConfirmCheck();
updateConfirmRadio();

// 確認ボタンクリック時のオーバーレイ要素を作成
function createOverlay() {
  let overlay = document.createElement("div");
  overlay.className = "overlay";
  overlay.style.position = "fixed";
  overlay.style.top = "0";
  overlay.style.left = "0";
  overlay.style.width = "100%";
  overlay.style.height = "100%";
  overlay.style.backgroundColor = "rgba(255, 255, 255, 1)";
  overlay.style.display = "none";
  overlay.style.transition = "opacity .5s";
  document.body.appendChild(overlay);
  return overlay;
}

// 確認ボタンを押して確認画面を表示
let overlay = createOverlay();

btnConfirm.addEventListener("click", function () {
  confirmArea.style.display = "block";
  inputArea.style.display = "none";
  overlay.style.display = "block";

  setTimeout(function () {
    overlay.style.opacity = "0";
    setTimeout(function () {
      overlay.style.display = "none";
    }, 500);
  }, 500);

  window.scrollTo(0, 0);
});

// 必須項目すべて入力でボタン活性化（ContactForm7用）
const requiredContainers = document.querySelectorAll(".wpcf7-validates-as-required");

const isCheckboxGroupFilled = (container) => {
  const checkboxes = container.querySelectorAll('input[type="checkbox"]');
  if (checkboxes.length === 0) return true; // チェックボックスがなければ常にtrue
  return Array.from(checkboxes).some((checkbox) => checkbox.checked);
};

const checkFields = () => {
  let isAllFilled = Array.from(requiredContainers).every((container) => {
    if (container.querySelector("input, select, textarea")) {
      return (
        container.querySelector("input, select, textarea").value !== "" &&
        isCheckboxGroupFilled(container)
      );
    }
    return isCheckboxGroupFilled(container);
  });

  btnConfirm.disabled = !isAllFilled;
};

if (requiredContainers.length > 0) {
  btnConfirm.disabled = true;
  requiredContainers.forEach((container) => {
    const inputs = container.querySelectorAll("input, select, textarea");
    inputs.forEach((input) => {
      input.addEventListener("input", checkFields);
    });
  });
}

// 送信ボタンクリックでサンクス画面へ遷移
document.addEventListener(
  "wpcf7mailsent",
  function (event) {
    location = "/contact/thanks/";
  },
  false
);
