
const carrusel1 = document.querySelector(".carrusel-items1");

let maxScrollLeft1 = carrusel1.scrollWidth - carrusel1.clientWidth;
let intervalo1 = null;
let step1 = 1;


const start1 = () => {
    intervalo1 = setInterval(function (){
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

carrusel1.addEventListener('mouseover', () => {
    stop1();
});

carrusel1.addEventListener('mouseout', () => {
    start1();
})

start1();
