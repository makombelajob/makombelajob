const form = document.querySelector("form");
const pseudo = document.querySelector("#nickname");
const email = document.querySelector("#email");
const pass = document.querySelector("#pass");
const rgpd = document.querySelector("#rgpd");

let pseudoValid = false;
let emailValid = false;
let passValid = false;
let rgpdValid = false;

pseudo.addEventListener("change", () => {
    if (pseudo.value.length >= 5) {
        pseudo.classList.add("is-valid");
        pseudo.classList.remove("is-invalid");
        pseudoValid = true;
    } else {
        pseudo.classList.remove("is-valid");
        pseudo.classList.add("is-invalid");
        pseudoValid = false;
    }
    toutValid();
});

email.addEventListener("change", () => {
    const regexMail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (regexMail.test(email.value)) {
        email.classList.add("is-valid");
        email.classList.remove("is-invalid");
        emailValid = true;
    } else {
        email.classList.remove("is-valid");
        email.classList.add("is-invalid");
        emailValid = false;
    }
    toutValid();

});

pass.addEventListener("change", () => {
    if (pass.value.length >= 16) {
        pass.classList.add("is-valid");
        pass.classList.remove("is-invalid");
        passValid = true;
    } else {
        pass.classList.remove("is-valid");
        pass.classList.add("is-invalid" );
        passValid = false;
    }
    toutValid();

});

rgpd.addEventListener("change", () => {
    if (rgpd.checked) {
        rgpd.classList.add("is-valid");
        rgpd.classList.remove("is-invalid");
        rgpdValid = true;
    } else {
        rgpd.classList.remove("is-valid");
        rgpd.classList.add("is-invalid");
        rgpdValid = false;
    }
    toutValid();
});
function toutValid() {
    const btnSubmit = document.querySelector("button");
    if (pseudoValid && emailValid && passValid && rgpdValid) {
        btnSubmit.disabled = false;
    }else {
        btnSubmit.disabled = true;
    }
}
