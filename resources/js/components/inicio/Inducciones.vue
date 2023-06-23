<template>
  <section id="formaciones" class="">
    <div class="row">
      <div class="col-4 offset-4">
        <h2 class="titulo">Inducción</h2>
        <hr class="line-title" />
        <br />
      </div>
    </div>
    <br />
    <div class="">
      <div class="container-1">
        <div class="card-1" v-for="formacion in form" :key="formacion.id">
          <img
            :src="'../storage/images/inducciones/' + formacion.imagen"
            alt=""
          />
            <h4 style="text-align: justify">
              {{ formacion.titulo }}
            </h4>
            <div class="card-text" :id="'tooltip-target-' + formacion.id">
              <span v-html="formacion.cuerpo.substring(0, 319)"></span>
            </div>
            <a
              
              :href="formacion.adjunto"
              class="btn btn-outline-dark"
              target="_blank"
              ><i class="bi bi-arrow-right"></i> Ingresa</a
            >
          <b-tooltip
            placement="bottom"
            :target="'tooltip-target-' + formacion.id"
            triggers="hover"
          >
            <span v-html="formacion.cuerpo"></span>
          </b-tooltip>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import axios from "axios";
export default {
  name: "Inducciones",
  data() {
    return {
      form: [],
    };
  },
  created() {
    this.getInducciones();
  },
  methods: {
    getInducciones() {
      axios
        .get("/inductions")
        .then((res) => (this.form = res.data))
        // .then((res) => console.log(this.form))
        .catch((err) => console.log(err));
    },
  },
};
</script>
