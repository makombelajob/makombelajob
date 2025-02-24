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