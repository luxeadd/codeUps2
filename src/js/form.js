var inputCompany = document.querySelector(".js_inputCompany");
var inputName = document.querySelector(".js_inputName");
var inputEmail = document.querySelector(".js_inputEmail");
var inputTel = document.querySelector(".js_inputTel");
var inputTextArea = document.querySelector(".js_inputTextArea");
var inputRadios = document.querySelectorAll(".js_inputRadio");

var confirmCompany = document.querySelector(".js_confirmCompany");
var confirmName = document.querySelector(".js_confirmName");
var confirmMail = document.querySelector(".js_confirmMail");
var confirmTel = document.querySelector(".js_confirmTel");
var confirmTextArea = document.querySelector(".js_confirmTextArea");
var confirmRadio = document.querySelector(".js_confirmRadio");

var inputCheckboxes = document.querySelectorAll(".js_inputCheck");
var confirmCheck = document.querySelector(".js_confirmCheck");


inputCompany.addEventListener("input", function () {
  confirmCompany.textContent = inputCompany.value;
});

inputName.addEventListener("input", function () {
  confirmName.textContent = inputName.value;
});

inputEmail.addEventListener("input", function () {
  confirmMail.textContent = inputEmail.value;
});

inputTel.addEventListener("input", function () {
  confirmTel.textContent = inputTel.value;
});

inputTextArea.addEventListener("input", function() {
  var inputValue = inputTextArea.value;
  var formattedValue = inputValue.replace(/\n/g, "<br>");
  confirmTextArea.innerHTML = formattedValue;
});

inputRadios.forEach(function(radio) {
  if (radio.checked) {
      confirmRadio.textContent = radio.value;
  }
});

inputRadios.forEach(function(radio) {
  radio.addEventListener("click", function() {
      if (radio.checked) {
          confirmRadio.textContent = radio.value;
      }
  });
});

function updateConfirmCheck() {
  var selectedCheckboxes = Array.from(inputCheckboxes).filter(function(checkbox) {
      return checkbox.checked;
  });
  
  var selectedValues = selectedCheckboxes.map(function(checkbox) {
      return checkbox.nextElementSibling.textContent;
  });

  confirmCheck.textContent = selectedValues.join(", ");
}
updateConfirmCheck();

inputCheckboxes.forEach(function(checkbox) {
  checkbox.addEventListener("change", updateConfirmCheck);
});
