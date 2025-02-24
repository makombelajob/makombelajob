const burger = document.querySelector(".burger");
burger.addEventListener("click", () => {
    const open = document.querySelector(".open");
    open.classList.add("active");
});

const close = document.querySelector("#close");
close.addEventListener("click", () => {
    const open = document.querySelector(".open");
    open.classList.remove("active");
});
