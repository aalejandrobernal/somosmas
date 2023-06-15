<template>
    <div>
        <section id="#momentos" class="d-flex justify-content-center align-items-center p-2">
            <div class="row aling items center">
                <div class="col-4 offset-4">
                    <h2 class="titulo">Momentos</h2>
                    <hr class="line-title">
                </div>

                <div class="col-12 texto">
                    <p>Quien dijo que el tiempo no se puede detener, disfruta de esta galería.</p>
                </div>
            </div>
        </section>

        <section id="galleryy">
            <div class="carrusel1">
                <div class="carrusel-items2">
                    <div class="carrusel-item">
                        <img src="/images/galeria/0.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/1.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/2.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/3.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/4.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/5.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/6.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/7.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/8.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/9.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/10.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/11.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/12.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/13.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/14.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/15.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/16.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/17.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/18.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/19.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/20.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/21.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/22.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/23.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/24.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/25.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/26.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/27.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/28.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/29.jpg" alt="">
                    </div>
                    <div class="carrusel-item">
                        <img src="/images/galeria/30.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>

export default {
    components: {

    },
    data() {
        return {

        }
    },
    mounted() {

        const carrusel1 = document.querySelector(".carrusel-items2");
        let maxScrollLeft1 = carrusel1.scrollWidth - carrusel1.clientWidth;
        let intervalo1 = null;
        let step1 = 1;
        const start1 = () => {
            intervalo1 = setInterval(function () {
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
    },
    methods: {

    }
}
</script>

