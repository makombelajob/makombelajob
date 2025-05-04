const next = document.querySelector("#right");
next.addEventListener("click", () => {
    const article = document.querySelector(".active");
    article.classList.remove("active");
    if(article.nextElementSibling) {
        article.nextElementSibling.classList.add("active");
    } else {
        article.parentElement.firstElementChild.classList.add("active");
    }
});

const prev = document.querySelector("#left");
prev.addEventListener("click", () => {
    const article = document.querySelector(".active");
    article.classList.remove("active");
    if (article.previousElementSibling) {
        article.previousElementSibling.classList.add("active");
    } else {
        article.parentElement.lastElementChild.classList.add("active");
    }
});

let intervale = setInterval( () => {
    const article = document.querySelector(".active");
    article.classList.remove("active");
    if (article.nextElementSibling) {
        article.nextElementSibling.classList.add("active");
    } else {
        article.parentElement.firstElementChild.classList.add("active");
    }
}, setTimeout = 5000);

let intervaleLang = setInterval( () => {
    const langue = document.querySelector(".listactive");
    langue.classList.remove("listactive");
    if(langue.nextElementSibling){
        langue.nextElementSibling.classList.add("listactive");
    } else {
        langue.parentElement.firstElementChild.classList.add("listactive");
    }
}, setTimeout = 2500);

let intervaleLivre = setInterval(() => {
    const langue = document.querySelector(".livreactive");
    langue.classList.remove("livreactive");
    if (langue.nextElementSibling) {
        langue.nextElementSibling.classList.add("livreactive");
    } else {
        langue.parentElement.firstElementChild.classList.add("livreactive");
    }
}, setTimeout = 3500);

let intervalePro = setInterval(() => {
    const langue = document.querySelector(".proactive");
    langue.classList.remove("proactive");
    if (langue.nextElementSibling) {
        langue.nextElementSibling.classList.add("proactive");
    } else {
        langue.parentElement.firstElementChild.classList.add("proactive");
    }
}, setTimeout = 4500);

const mouseenter = document.querySelectorAll(".mouseenter");
console.log(mouseenter);
mouseenter.addEventListener("mouseenter", () => {
    for(const mouse of mouseenter){
        mouse.clearInterval(intervale, intervaleLang, intervaleLivre, intervalePro);
    }
})