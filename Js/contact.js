const email = document.querySelector("#email");
email.addEventListener("change", () => {
        let regex = new RegExp("\\S+@\\S+\\.\\S+");
        if(regex.test(email.value)){
            console.log(email.value);
        }
});

const form = document.querySelector("form");
form.addEventListener("submit", () => {
    this.submit();
});