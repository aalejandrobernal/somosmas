$(document).ready(function() {
    alert('hola')
    $("#modal01").on("hide.bs.modal", function() {
        $(this)
            .find("video")[0]
            .pause();
    });

    $("#modal02").on("hide.bs.modal", function() {
        $(this)
            .find("video")[0]
            .pause();
    });

    $("#modal03").on("hide.bs.modal", function() {
        $(this)
            .find("video")[0]
            .pause();
    });

    $("#modal04").on("hide.bs.modal", function() {
        $(this)
            .find("video")[0]
            .pause();
    });

    $("#modal05").on("hide.bs.modal", function() {
        $(this)
            .find("video")[0]
            .pause();
    });

    $("#modal06").on("hide.bs.modal", function() {
        $(this)
            .find("video")[0]
            .pause();
    });

    $("#modal07").on("hide.bs.modal", function() {
        $(this)
            .find("video")[0]
            .pause();
    });

    const carrusel = document.querySelector(".carrusel-items1");

    let maxScrollLeft = carrusel.scrollWidth - carrusel.clientWidth;
    let intervalo = null;
    let step = 1;

    const start = () => {
        intervalo = setInterval(function() {
            carrusel.scrollLeft = carrusel.scrollLeft + step;
            if (carrusel.scrollLeft === maxScrollLeft) {
                step = step * -1;
            } else if (carrusel.scrollLeft === 0) {
                step = step * -1;
            }
        }, 10);
    };

    const stop = () => {
        clearInterval(intervalo);
    };

    carrusel.addEventListener("mouseover", () => {
        stop();
    });

    carrusel.addEventListener("mouseout", () => {
        start();
    });
    start();


    const carrusel1 = document.querySelector(".carrusel-items2");
    let maxScrollLeft1 = carrusel1.scrollWidth - carrusel1.clientWidth;
    let intervalo1 = null;
    let step1 = 1;
    const start1 = () => {
        intervalo1 = setInterval(function() {
            carrusel1.scrollLeft = carrusel1.scrollLeft + step1;
            if (carrusel1.scrollLeft === maxScrollLeft1) {
                step1 = step1 * -1;
            } else if (carrusel1.scrollLeft === 0) {
                step1 = step1 * -1;
            }
        }, 10);
    };
    const stop1 = () => {
        clearInterval(intervalo1);
    };
    carrusel1.addEventListener("mouseover", () => {
        stop1();
    });
    carrusel1.addEventListener("mouseout", () => {
        start1();
    });
    start1();
});
