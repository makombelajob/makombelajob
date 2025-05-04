"use strict";

var _this = void 0;

var email = document.querySelector("#email");
email.addEventListener("change", function () {
  var regex = new RegExp("\\S+@\\S+\\.\\S+");

  if (regex.test(email.value)) {
    console.log(email.value);
  }
});
var form = document.querySelector("form");
form.addEventListener("submit", function () {
  _this.submit();
});