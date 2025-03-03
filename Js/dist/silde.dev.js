"use strict";

var next = document.querySelector("#right");
next.addEventListener("click", function () {
  var article = document.querySelector(".active");
  article.classList.remove("active");

  if (article.nextElementSibling) {
    article.nextElementSibling.classList.add("active");
  } else {
    article.parentElement.firstElementChild.classList.add("active");
  }
});
var prev = document.querySelector("#left");
prev.addEventListener("click", function () {
  var article = document.querySelector(".active");
  article.classList.remove("active");

  if (article.previousElementSibling) {
    article.previousElementSibling.classList.add("active");
  } else {
    article.parentElement.lastElementChild.classList.add("active");
  }
});
var intervale = setInterval(function () {
  var article = document.querySelector(".active");
  article.classList.remove("active");

  if (article.nextElementSibling) {
    article.nextElementSibling.classList.add("active");
  } else {
    article.parentElement.firstElementChild.classList.add("active");
  }
}, setTimeout = 5000);
var intervaleLang = setInterval(function () {
  var langue = document.querySelector(".listactive");
  langue.classList.remove("listactive");

  if (langue.nextElementSibling) {
    langue.nextElementSibling.classList.add("listactive");
  } else {
    langue.parentElement.firstElementChild.classList.add("listactive");
  }
}, setTimeout = 2500);
var intervaleLivre = setInterval(function () {
  var langue = document.querySelector(".livreactive");
  langue.classList.remove("livreactive");

  if (langue.nextElementSibling) {
    langue.nextElementSibling.classList.add("livreactive");
  } else {
    langue.parentElement.firstElementChild.classList.add("livreactive");
  }
}, setTimeout = 3500);
var intervalePro = setInterval(function () {
  var langue = document.querySelector(".proactive");
  langue.classList.remove("proactive");

  if (langue.nextElementSibling) {
    langue.nextElementSibling.classList.add("proactive");
  } else {
    langue.parentElement.firstElementChild.classList.add("proactive");
  }
}, setTimeout = 4500);
var mouseenter = document.querySelectorAll(".mouseenter");
console.log(mouseenter);
mouseenter.addEventListener("mouseenter", function () {
  var _iteratorNormalCompletion = true;
  var _didIteratorError = false;
  var _iteratorError = undefined;

  try {
    for (var _iterator = mouseenter[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
      var mouse = _step.value;
      mouse.clearInterval(intervale, intervaleLang, intervaleLivre, intervalePro);
    }
  } catch (err) {
    _didIteratorError = true;
    _iteratorError = err;
  } finally {
    try {
      if (!_iteratorNormalCompletion && _iterator["return"] != null) {
        _iterator["return"]();
      }
    } finally {
      if (_didIteratorError) {
        throw _iteratorError;
      }
    }
  }
});