"use strict";

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }
function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
// -----------------------
// お問い合わせフォーム確認画面(ContactForm7用)
// -----------------------

// input[text],input[textAre]入力項目と確認用要素のペアを作成
var fields = [{
  input: document.querySelector(".js_inputCompany"),
  confirm: document.querySelector(".js_confirmCompany")
}, {
  input: document.querySelector(".js_inputName"),
  confirm: document.querySelector(".js_confirmName")
}, {
  input: document.querySelector(".js_inputEmail"),
  confirm: document.querySelector(".js_confirmMail")
}, {
  input: document.querySelector(".js_inputTel"),
  confirm: document.querySelector(".js_confirmTel")
}, {
  input: document.querySelector(".js_inputTextArea"),
  confirm: document.querySelector(".js_confirmTextArea")
}];

// その他入力項目の各要素の取得
var inputArea = document.querySelector(".inputArea");
var radioButtons = document.querySelectorAll('.js_inputRadio input[type="radio"]');
var checkboxes = document.querySelectorAll('.js_inputCheck input[type="checkbox"]');
var inputSelect = document.querySelector(".js_inputSelect");
var btnConfirm = document.querySelector(".js_btnConfirm");
var requiredInputs = document.querySelectorAll(".js_inputRequired");
var inputAgree = document.querySelector('.js_inputAgree input[type="checkbox"]');

// その他確認表示用の各要素の取得
var confirmArea = document.querySelector(".confirmArea");
var confirmRadio = document.querySelector(".js_confirmRadio");
var confirmCheck = document.querySelector(".js_confirmCheck");
var confirmSelect = document.querySelector(".js_confirmSelect");
var confirmAgree = document.querySelector(".js_confirmAgree");

// input[text],input[textAre]入力項目と確認用要素の値を同期
document.addEventListener('DOMContentLoaded', function () {
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
  if (fields && fields.length > 0) {}
});

// ラジオボタン選択で確認用項目に表示
function updateConfirmRadio() {
  var selectedRadio = _toConsumableArray(radioButtons).find(function (radio) {
    return radio.checked;
  });
  confirmRadio.textContent = selectedRadio ? selectedRadio.value : "";
}
radioButtons.forEach(function (radio) {
  radio.addEventListener("change", updateConfirmRadio);
});
updateConfirmRadio();

// チェックボックス選択で確認用項目に表示
function updateConfirmCheck() {
  var selectedValues = Array.from(checkboxes).filter(function (checkbox) {
    return checkbox.checked;
  }).map(function (checkbox) {
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
  var selectedOption = inputSelect.options[inputSelect.selectedIndex];
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

// チェックボックスとセレクトボックスの初期値を反映
updateConfirmCheck();
updateConfirmRadio();

// 確認ボタンクリック時のオーバーレイ要素を作成
function createOverlay() {
  var overlay = document.createElement("div");
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
var overlay = createOverlay();
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

// 必須項目に入力があればボタン活性化（ContactForm7用）
var requiredContainers = document.querySelectorAll(".wpcf7-validates-as-required");
var isCheckboxGroupFilled = function isCheckboxGroupFilled(container) {
  var checkboxes = container.querySelectorAll('input[type="checkbox"]');
  if (checkboxes.length === 0) return true; // チェックボックスがなければ常にtrue
  return Array.from(checkboxes).some(function (checkbox) {
    return checkbox.checked;
  });
};
var checkFields = function checkFields() {
  var isAllFilled = Array.from(requiredContainers).every(function (container) {
    if (container.querySelector("input, select, textarea")) {
      return container.querySelector("input, select, textarea").value !== "" && isCheckboxGroupFilled(container);
    }
    return isCheckboxGroupFilled(container);
  });
  btnConfirm.disabled = !isAllFilled;
};
if (requiredContainers.length > 0) {
  btnConfirm.disabled = true;
  requiredContainers.forEach(function (container) {
    var inputs = container.querySelectorAll("input, select, textarea");
    inputs.forEach(function (input) {
      input.addEventListener("input", checkFields);
    });
  });
}

// 送信ボタンクリックでサンクス画面へ
document.addEventListener("wpcf7mailsent", function (event) {
  location = "/contact/thanks/";
}, false);