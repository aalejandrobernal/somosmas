<template>
    <div>
        <div class="row aling-items-center">
            <div class="col-6 offset-3">
                <h1 class="titulo">Fechas Especiales</h1>
                <hr class="line-title">
            </div>

            <div class="col-12">
                <p>Un pequeño homenaje para las mujeres que hacen parte de nuestro ecosistema. !!!Feliz día para todas
                    ustedes!!!</p>
            </div>

            <div class="col-12">
                <a href="https://youtu.be/d1drzgRUekY" class="glightbox play-btn" target="_blank">
                    <img style="width: 100%; height:100%" src="/storage/images/banners/mujer.png" alt="">
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 p-3">
                <p>Descubre a continuación la versión completa de cada uno de los videos de nuestras compañeras. Haz
                    clic sobre el video que quieras visualizar.</p>
            </div>
        </div>

        <section id="momentos">
            <!-- Image1 !-->
            <div class="modal-video">
                <b-modal size="xl" :id="'my-modal01'" hide-footer>
                    <video id="video_m" class="video_m" src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/bleidy.mp4"
                        type="video/mp4" :controls="'true'"></video>
                </b-modal>
            </div>
            <!-- Image2 !-->
            <div class="modal-video">
                <b-modal size="xl" :id="'my-modal02'" hide-footer>
                    <video id="video_m" class="video_m" src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/catalina.mp4"
                        type="video/mp4" :controls="'true'"></video>
                </b-modal>
            </div>
            <!-- Image3 !-->
            <div class="modal-video">
                <b-modal size="xl" :id="'my-modal03'" hide-footer>
                    <video id="video_m" class="video_m" src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/claudiap.mp4"
                        type="video/mp4" :controls="'true'"></video>
                </b-modal>
            </div>
            <!-- Image4 !-->
            <div class="modal-video">
                <b-modal size="xl" :id="'my-modal04'" hide-footer>
                    <video id="video_m" class="video_m" src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/liliana.mp4"
                        type="video/mp4" :controls="'true'"></video>
                </b-modal>
            </div>
            <!-- Image5 !-->
            <div class="modal-video">
                <b-modal size="xl" :id="'my-modal05'" hide-footer>
                    <video id="video_m" class="video_m" src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/maribel.mp4"
                        type="video/mp4" :controls="'true'"></video>
                </b-modal>
            </div>
            <!-- Image6 !-->
            <div class="modal-video">
                <b-modal size="xl" :id="'my-modal06'" hide-footer>
                    <video id="video_m" class="video_m" src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/monica.mp4"
                        type="video/mp4" :controls="'true'"></video>
                </b-modal>
            </div>
            <!-- Image7 !-->
            <div class="modal-video">
                <b-modal size="xl" :id="'my-modal07'" hide-footer>
                    <video id="video_m" class="video_m" src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/olga.mp4"
                        type="video/mp4" :controls="'true'"></video>
                </b-modal>
            </div>
        </section>

        <section id="prueba">
            <div class="carrusel1">
                <div class="carrusel-items1">
                    <div class="carrusel-item1">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modal01">
                            <img v-b-modal="'my-modal01'" class="w-100 mb-4 rounded nn" src="/images/galeriav/bleidy.jpg" alt="">
                        </a>
                    </div>
                    <div class="carrusel-item1">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modal02">
                            <img v-b-modal="'my-modal02'" class="w-100 mb-4 rounded nn" src="/images/galeriav/catalina.jpg" alt="">
                        </a>
                    </div>
                    <div class="carrusel-item1">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modal03">
                            <img v-b-modal="'my-modal03'" class="w-100 mb-4 rounded nn" src="/images/galeriav/claudia.jpg" alt="">
                        </a>
                    </div>
                    <div class="carrusel-item1">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modal04">
                            <img v-b-modal="'my-modal04'" class="w-100 mb-4 rounded nn" src="/images/galeriav/liliana.jpg" alt="">
                        </a>
                    </div>
                    <div class="carrusel-item1">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modal05">
                            <img v-b-modal="'my-modal05'" class="w-100 mb-4 rounded nn" src="/images/galeriav/maribel.jpg" alt="">
                        </a>
                    </div>
                    <div class="carrusel-item1">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modal06">
                            <img v-b-modal="'my-modal06'" class="w-100 mb-4 rounded nn" src="/images/galeriav/monica.jpg" alt="">
                        </a>
                    </div>
                    <div class="carrusel-item1">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modal07">
                            <img v-b-modal="'my-modal07'" class="w-100 mb-4 rounded nn" src="/images/galeriav/olga.jpg" alt="">
                        </a>
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
        const carrusel = document.querySelector(".carrusel-items1");

        let maxScrollLeft = carrusel.scrollWidth - carrusel.clientWidth;
        let intervalo = null;
        let step = 1;

        const start = () => {
            intervalo = setInterval(function () {
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
    },
    methods: {

    }
}
</script>

