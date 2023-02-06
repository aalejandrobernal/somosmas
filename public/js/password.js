const iconEye1 = document.querySelector(".icon-eye1");

iconEye1.addEventListener("click", function() {
const icon = this.querySelector("i");

    if(this.nextElementSibling.type === "password") {
        this.nextElementSibling.type = "text";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }else{
        this.nextElementSibling.type = "password";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    }
});

const iconEye2 = document.querySelector(".icon-eye2");

iconEye2.addEventListener("click", function() {
const icon = this.querySelector("i");

    if(this.nextElementSibling.type === "password") {
        this.nextElementSibling.type = "text";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }else{
        this.nextElementSibling.type = "password";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    }
});

const iconEye3 = document.querySelector(".icon-eye3");

iconEye3.addEventListener("click", function() {
const icon = this.querySelector("i");

    if(this.nextElementSibling.type === "password") {
        this.nextElementSibling.type = "text";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }else{
        this.nextElementSibling.type = "password";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    }
});

const iconEye = document.querySelector(".icon-eye");

iconEye.addEventListener("click", function() {
const icon = this.querySelector("i");

    if(this.nextElementSibling.type === "password") {
        this.nextElementSibling.type = "text";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }else{
        this.nextElementSibling.type = "password";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    }
});