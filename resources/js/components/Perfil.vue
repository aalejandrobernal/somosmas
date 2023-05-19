<template>
    <div class="container d-flex justify-content-center p-5">
        <b-card  title="Datos Personales" class="w-100 shadow" >
            <b-card-text>
                   <div class="row justify-content-center">
                        <div class="col-1.5" v-if="!fotonone">
                            <b-img style="height: 175px; width: 175px;" src="../images/fotonone.jpeg" class="rounded-circle mx-auto d-block shadow" fluid alt="Responsive image"></b-img>
                        </div>
                        <div v-else>
                            <div class="col-1.5 " v-if="file1" >
                                <b-img style="height: 175px; width: 175px;" :src="imagen" class="rounded-circle mx-auto d-block shadow" fluid alt="Responsive image"></b-img>
                            </div>
                            <div v-else>
                                <b-img style="height: 175px; width: 175px;" :src="'../images/fotos/'+user.foto" class="rounded-circle mx-auto d-block shadow" fluid alt="Responsive image"></b-img>
                            </div>
                        </div>
                            
                        <b-form @submit="EnviarImagen" enctype="multipart/form-data" >
                            <div class="row justify-content-center">
                                <div class="col-4 p-3 ">
                                    <b-form-file
                                        size="sm"
                                        @input="validateImg"
                                        @change="ObtenerImagen"
                                        :state="Boolean(fields.file)"
                                        accept="image/*"
                                        placeholder="Elija un archivo o suéltelo aquí..."
                                        drop-placeholder="Suelta el archivo aquí..."
                                    ></b-form-file>
                                    <p v-if="errorMessage3" style="color:red">{{ errorMessage3}}</p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <b-button type="submit" style="width: 150px !important;" class="ctn ">Actualizar foto</b-button>
                            </div>
                        </b-form>
                   </div>
                    <b-form @submit="onSubmit" @reset="onReset" >
                        <div class="row">
                            <div class="col-6 px-5 pt-5">
                            <b-form-group id="input-group-2" label="Nombre:" label-for="input-2">
                                <b-form-input
                                disabled
                                id="input-2"
                                :placeholder="user.nombre"
                                ></b-form-input>
                            </b-form-group>

                            <b-form-group id="input-group-3" label="Documento:" label-for="input-3">
                                <b-form-input
                                disabled
                                id="input-3"
                                :placeholder="user.documento"
                                ></b-form-input>
                            </b-form-group>

                            <b-form-group id="input-group-1" label="Correo:" label-for="input-1">
                                <b-form-input
                                id="input-1"
                                :placeholder="user.email"
                                disabled
                                ></b-form-input>
                            </b-form-group>

                            <b-form-group id="input-group-4" label="Cargo:" label-for="input-4">
                                <b-form-input
                                disabled
                                id="input-4"
                                :placeholder="user.cargo"
                                ></b-form-input>
                            </b-form-group>
                            
                            </div>
                            <div class="col-6 px-5 pt-5">
                                <b-form-group id="input-group-5" label="Fecha de nacimeinto :" label-for="input-5">
                                    <b-form-input
                                    disabled
                                    id="input-5"
                                    :placeholder="user.fecha_nacimiento"
                                    ></b-form-input>
                                </b-form-group>
                                <b-form-group id="input-group-6" label="Contraseña actual :" label-for="input-6">
                                    <b-form-input
                                    @input="validateForm"
                                    type="password"
                                    id="input-6"
                                    v-model="password"
                                    placeholder="Ingrese la actual contraseña"
                                    required
                                    ></b-form-input>
                                    <p v-if="errorMessage1" style="color:red">{{ errorMessage1 }}</p>
                                </b-form-group>
                                <b-form-group id="input-group-7" label="Contraseña Nueva :" label-for="input-7">
                                    <b-form-input
                                    @input="validateNewPassword"
                                    type="password"
                                    id="input-7"
                                    v-model="new_password"
                                    placeholder="Ingrese nueva contraseña"
                                    required
                                    ></b-form-input>
                                    <p v-if="errorMessage2" style="color:red">{{ errorMessage2 }}</p>
                                </b-form-group>
                                <p class="caracteres">*Si deseas actualizar algún dato personal por favor contacta al administrador.* </p>
                            </div>
                        </div>
                        <div class="row justify-content-center p-3">
                            <b-button v-if="validateNewPassword() && validateForm()" type="submit" style="width: 150px !important;" class="ctn ">Actualizar</b-button>
                            <b-button v-else class="ctn " style="width: 150px !important;" disabled>Actualizar</b-button>
                        </div>
                    </b-form>
            </b-card-text>
        </b-card>
    </div>
</template>

<script>
    import sha1 from 'js-sha1';
    import axios from 'axios';
    import swal from "sweetalert2";
    export default {
        name:'perfil',
        mounted() {
            axios.get('/editar_perfil')
            .then((res) => {
                this.user.id=res.data[0].id;
                this.pass.id=res.data[0].id;
                this.user.documento=res.data[0].documento;
                this.user.nombre=res.data[0].nombre;
                this.user.email=res.data[0].email;
                this.user.foto=res.data[0].foto;
                this.fotonone=res.data[0].foto;
                this.user.cargo=res.data[0].cargo;
                this.user.fecha_nacimiento=res.data[0].nacimiento;
                this.password_old=res.data[0].password;
            })
            .catch((err) => console.log(err))
        },
        data(){
            return{
                fields:{
                    titulo :'',
                    comments:'',
                    file: null,
                } ,
                fotonone: '',
                file1: null,
                errorMessage1: '',
                errorMessage2: '',
                errorMessage3: '',
                password_old:"",
                password:"",
                new_password:"",
                variants: ['cnt'],
                user: {
                    id: '',
                    documento: '',
                    nombre: '',
                    fecha_nacimiento: '',
                    fecha_ingreso: '', 
                    cargo: '', 
                    email: '',
                    foto: ''
                },
                pass:{
                    id: '',   
                    new_password: '',
                    password: ''
                },
            }
        },
        created(){
       },
       methods:{
            validateNewPassword(){
                if (this.new_password.length < 8) {
                    this.errorMessage2 = 'La contraseña debe tener al menos 8 caracteres';
                    return false;
                }
                if (this.new_password === this.password) {
                    this.errorMessage2 = 'La contraseña no puede ser igual a la actual';
                    return false;
                }
                this.errorMessage2 = '';
                return true;
            },
            validateForm() {
                if (this.password_old !== sha1(this.password)) {
                    this.errorMessage1 = 'La contraseña no coinciden con la actual ';
                    return false;
                }
                    this.errorMessage1 = '';
                    return true;
            },
            validateImg() {
                if (this.fields.file === null) {
                    this.errorMessage3 = 'no se ha cargado alguna imagen';
                    return false;
                }
                    this.errorMessage = '';
                    return true;
            },
            ObtenerImagen(e){
                this.fields.file = e.target.files[0] ;
                this.CargarImage(this.fields.file);
            },
            CargarImage(files){
                let reader = new FileReader();
                reader.onload = (e) => {
                    this.file1 = e.target.result;
                    this.fotonone = e.target.result;
                };
                reader.readAsDataURL(files);
            },

            onSubmit(event) {
                event.preventDefault()
                this.pass.new_password=sha1(this.new_password);
                this.pass.password=sha1(this.password);
                axios.post('/cambiocontrasena',this.pass)
                .then((res) => { })
                .catch((err) => console.log(err))
                swal.fire({
                    icon : "success",
                    title: "La contraseña se ha actualizado correctamente",
                    allowEscapeKey: false,
                    allowOutsideClick: false,
                    showConfirmButton: true,
                                });
                },
            EnviarImagen(event){
                event.preventDefault()
                let formData = new FormData();
                for(let key in this.fields){
                    formData.append(key, this.fields[key]);
                }
                if(this.fields.file){
                    axios.post('/update-foto',formData)
                    .then((res) => {
                        console.log(res.data)
                    })
                    .catch((err) => console.log(err))
                    swal.fire({
                    icon : "success",
                    title: "La imagen se ha actualizado correctamente",
                    allowEscapeKey: false,
                    allowOutsideClick: false,
                    showConfirmButton: true,
                                });
                }else{
                    swal.fire({
                    icon : "error",
                    title: "No se ha cargado ninguna imagen",
                    allowEscapeKey: false,
                    allowOutsideClick: false,
                    showConfirmButton: true,
                                });
                }
            },
            onReset(event) {
                event.preventDefault()
                // Reset our form values
                this.password = ''
                this.new_password = ''
                // Trick to reset/clear native browser form validation state
                
            }
       },
       computed: {
            imagen() {
                return this.file1;
            }
        }
    }
</script>
<link rel="stylesheet" href="{{ asset('css/somosmas.css') }}">