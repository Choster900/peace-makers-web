<template>
    <div class="page-wrap">
        <!-- header  -->
        <header class="header-section has-header-main">
            <!-- Header main -->
            <HeaderMain></HeaderMain>
        </header>
        <section class="item-detail-section section-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pe-xl-5">
                        <div class="item-detail-content">
                            <div class="item-detail-img-container mb-4 cursor-pointer" @click="openFileInput">
                                <img :src="blog.foto_principal_blog" alt="" class="w-100 rounded-3"
                                    v-if="!urlImageFile">
                                <img v-else class="w-100 rounded-3" :src="urlImageFile" alt="Feed 01">
                                <!-- <div class="cursor-pointer absolute inset-0 h-full"></div> -->
                            </div>

                            <input type="file" ref="fileInput" accept="image/gif,image/jpeg,image/png,image/jpg,image"
                                style="display: none;" @change="handleFileChange">


                            <ul class="btns-group pb-3">
                                <li >
                                    <button class="btn btn-lg btn-dark" @click="updateCurrentBlog()">
                                        GUARDAR TODO
                                        <span class="d-none d-xl-inline-block">(Reemplazara imagen y cambios hechos en
                                            la publicacion)</span>
                                    </button>
                                </li>
                                <li class="w-full">
                                    <button class="w-full btn btn-lg btn-danger" @click="disableBlog()">
                                        Deshabilitar blog
                                        <!-- <span class="d-none d-xl-inline-block">(Reemplazara imagen y cambios hechos en
                                            la publicacion)</span> -->
                                    </button>
                                </li>
                            </ul>

                            <div class="item-detail-tab">

                                <ul class="nav nav-tabs nav-tabs-s1">
                                    <li class="nav-item">
                                        <button class="nav-link" type="button ">
                                            <span class="underline">
                                                INFORMATIVA
                                            </span>
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" type="button">GALERIA
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--  {{ blog }} -->
                    <div class="col-lg-6">
                        <div class="item-detail-content mt-4 mt-lg-0">
                            <div class="flex justify-between">
                                <h1 v-if="!EnableForEdit" class="item-detail-title mb-2">{{ blog.titulo_blog }}</h1>

                                <input type="text" id="text" v-else v-model="blog.titulo_blog"
                                    class="mb-2 shadow-sm rounded-md w-full text-black font-medium  border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="Nombre de la Publicacion" required>

                                <lord-icon src="https://cdn.lordicon.com/wkvacbiw.json" trigger="click"
                                    @click="EnableForEdit = !EnableForEdit" class="cursor-pointer"
                                    style="width:50px;height:50px">
                                </lord-icon>
                            </div>


                            <div class="item-detail-meta d-flex flex-wrap align-items-center mb-3">
                                <span class="item-detail-text-meta">lorem</span>
                                <span class="dot-separeted"></span>
                                <span class="item-detail-text-meta">ipsum</span>
                                <span class="dot-separeted"></span>
                                <span class="item-detail-text-meta">dolor</span>
                            </div>

                            <div class="form-item mb-4">
                                <h5 class="mb-1 text-sm font-semibold">Selecciona categoría</h5>
                                <p class="form-text mb-2 text-xs text-gray-500">Esta es la colección donde aparecerá tu
                                    artículo.</p>
                                <select class="form-select h-10 p-1 px-2 border rounded-md text-sm leading-6"
                                    aria-label="Default select example" v-model="blog.id_categoria_blog">
                                    <option v-for="(cat, i) in optionsCategories" :key="i" :value="cat.id_categoria">{{
                                cat.nombre_categoria }}</option>
                                </select>
                            </div>

           <!--                  <br>
                            <br>
                            <br>
                            <br> -->
                            <p class="item-detail-text mb-4" v-if="!EnableForEdit">{{ blog.descripcion_blog }}</p>

                            <textarea placeholder='Message' rows="6" name='message' v-else
                                v-model="blog.descripcion_blog"
                                class="w-full rounded-md px-4 border text-sm pt-2.5 outline-[#007bff]"></textarea>


                            <div class="item-credits pb-3">
                                <div class="row g-4">
                                    <div class="col-xl-6">
                                        <div class="card-media card-media-s1">
                                            <DropdownLink class="card-media-img flex-shrink-0 d-block">
                                                <img src="../../../images/thumb/avatar-10.jpg" alt="avatar">
                                            </DropdownLink>
                                            <div class="card-media-body *:text-xs">
                                                <DropdownLink href="/"
                                                    class="fw-semibold hover:text-indigo-600 cursor-pointer">
                                                    @SERGIO_LOPEZ</DropdownLink>
                                                <p class="fw-medium small">SERGIO ADONAY LOPEZ MEJIA</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--  <button
                                class="middle none center w-full rounded-md bg-[#0E3C55] py-2 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                data-ripple-light="true">
                                Terminar y guardar
                            </button> -->
                        </div>
                    </div>

                    <div class="tab-pane fade show active mt-5" aria-labelledby="owners-tab">
                        <div class="item-detail-tab-wrap">
                            <div class="card-media card-media-s2 mb-3">
                                <div class="flex  items-start justify-center bg-white px-6 md:px-40">
                                    <div class="space-y-6 border-l-2 border-dashed">

                                        <div class="relative w-full" v-for="(item, index) in arraySeccionInformativa">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor"
                                                class="absolute -top-0.5 z-10 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
                                                <path fill-rule="evenodd"
                                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="ml-6">
                                                <h4 class="font-bold text-blue-500">{{ item.nombre_seccion_informativa
                                                    }}</h4>

                                                <input type="text" id="text" v-model="item.nombre_seccion_informativa"
                                                    @input="updateSeccionInformativa(item.id_seccion_informativa, 'nombre_seccion_informativa', $event.target.value)"
                                                    class="mb-2 shadow-sm rounded-md w-full h-10 text-black font-medium border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                                    placeholder="Nombre de la Publicacion" required>


                                                <p class="mt-2 max-w-screen-sm text-sm text-gray-500">
                                                    {{ item.contenido_seccion_informativa }}</p>


                                                <textarea placeholder='Message' rows="6" name='message'
                                                    v-model="item.contenido_seccion_informativa"
                                                    @input="updateSeccionInformativa(item.id_seccion_informativa, 'contenido_seccion_informativa', $event.target.value)"
                                                    class="w-full rounded-md px-4 border text-sm pt-2.5 outline-[#007bff]"></textarea>
                                                <span class="mt-1 block text-sm font-semibold text-blue-500">{{
                                moment().format("LL") }}</span>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-52 py-10">

                        <button class="border-[4px] px-20 border-dashed w-full flex justify-center gap-2 items-center"
                            @click="modalIsOpen = true">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-10">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>

                            <span class="">
                                AGREGAR NUEVA SECCION INFORMATICA

                            </span>
                        </button>
                    </div>

                    <Modal :show="modalIsOpen" :maxWidth="xl" :closeable="true">
                        <div class="relative m-3">
                            <button type="button" @click="modalIsOpen = false"
                                class="absolute top-0 right-0 mt-1 mr-1 text-gray-600 hover:text-gray-800 focus:outline-none">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                            <div class="mb-4">
                                <h2 class="text-lg font-semibold text-gray-800">Agrega categoria</h2>
                            </div>
                            <!-- Resto del contenido del modal -->

                            <div class="form-item mb-4">
                                <h5 class="mb-1">Selecciona categoría</h5>
                                <p class="form-text mb-3">Selecciona categoría para la nueva sección informativa.</p>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="1">Título con texto</option>
                                    <option value="2">Título, texto y una imagen</option>
                                    <option value="3">Título, texto con un enlace informativo</option>
                                    <option value="4">Otros</option>
                                </select>
                            </div>
                            <div class="flex justify-between">
                                <button @click="modalIsOpen = false"
                                    class="px-4 py-2 text-sm font-medium text-gray- 00 bg-gray-200 rounded-md hover:bg-gray-300 focus:outline-none focus:ring focus:border-blue-300">Discard</button>
                                <button @click="clickForPushToArraySecction"
                                    class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:border-blue-300">Apply
                                    Changes</button>
                            </div>
                        </div>

                    </Modal>

                </div>
            </div>
        </section>

    </div>
    <pre>
    {{ blog }}

    {{ arraySeccionInformativa }}
    </pre>
</template>

<script>
import HeaderMain from '@/Layouts/HeaderMain.vue';
import { useNewBlog } from '@/Composable/CreateBlog/useNewBlog'
import DropdownLink from '@/Components/DropdownLink.vue';
import { onActivated, ref, toRefs, onMounted } from 'vue';
import Modal from '@/Components/Modal.vue';
import Swal from 'sweetalert2';
import moment from 'moment';
export default {
    components: { HeaderMain, DropdownLink, Modal },
    props: ["blog"],
    setup(props) {

        const { blog } = toRefs(props)

        const {
            fileInput,
            handleDrop,
            urlImageFile,
            openFileInput,
            handleDragOver,
            handleFileChange, EnableForEdit, idBlog,
            tituloBlog, descripcionBlog, fotoPrincipalBlog, contenidoDescripcionBlog, numeroVisitasBlog,
            fechaReflejadaBlog, estadoBlog, archivoFull
        } = useNewBlog()

        const modalIsOpen = ref(false)
        const arraySeccionInformativa = ref([])

        onMounted(async () => {

            //console.log(blog.value.secciones_informativas);

            blog.value.secciones_informativas.map((value, index) => {
                arraySeccionInformativa.value.push(value);
            })

            getCategoriesBlog()


            console.log(blog.value);


        })


        const updateCurrentBlog = async () => {
            const confirmed = await Swal.fire({
                title: '¿Está seguro de actualizar un nuevo blog?',
                icon: 'question',
                iconHtml: '❓',
                confirmButtonText: 'Si, Agregar el blog',
                confirmButtonColor: '#141368',
                cancelButtonText: 'Cancelar',
                showCancelButton: true,
                showCloseButton: true
            });


            if (confirmed.isConfirmed) {



                axios.post('/updateBlog', { blog: blog.value, fileInput: archivoFull.value }, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                })
                    .then((response) => {
                        console.log(response);
                    })
                    .catch((error) => {

                        console.error(error);
                    });

            }

        }


        const disableBlog = async () => {
            const confirmed = await Swal.fire({
                title: '¿Está seguro de deshabilitar blog?',
                icon: 'question',
                iconHtml: '❓',
                confirmButtonText: 'Si, Agregar el blog',
                confirmButtonColor: '#141368',
                cancelButtonText: 'Cancelar',
                showCancelButton: true,
                showCloseButton: true
            });


            if (confirmed.isConfirmed) {



                axios.post('/disableBlog', { blog: blog.value})
                    .then((response) => {
                        console.log(response);
                    })
                    .catch((error) => {

                        console.error(error);
                    });

            }

        }

        const clickForPushToArraySecction = async () => {

            const confirmed = await Swal.fire({
                title: '¿Está seguro de crear un nuevo blog?',
                icon: 'question',
                iconHtml: '❓',
                confirmButtonText: 'Si, Agregar el blog',
                confirmButtonColor: '#141368',
                cancelButtonText: 'Cancelar',
                showCancelButton: true,
                showCloseButton: true
            });

            if (confirmed.isConfirmed) {

                arraySeccionInformativa.value.push({
                    'id_seccion_informativa': '',
                    'id_tipo_seccion': 1, // esto para mientras
                    'id_blog': blog.value.id_blog,
                    'nombre_seccion_informativa': '',
                    'contenido_seccion_informativa': '',
                    'imagen_tipo_informacion': '',
                    'fecha_creacion_seccion_informativa': '',
                    'fecha_actualizacion_informativa': '',
                    'usuario_seccion_informativa': '',
                })
                modalIsOpen.value = false

                addArraySeccionInformtiva()
            }
        }

        const addArraySeccionInformtiva = async () => {


            /*  const confirmed = await Swal.fire({
                 title: '¿Está seguro de crear un nuevo blog?',
                 icon: 'question',
                 iconHtml: '❓',
                 confirmButtonText: 'Si, Agregar el blog',
                 confirmButtonColor: '#141368',
                 cancelButtonText: 'Cancelar',
                 showCancelButton: true,
                 showCloseButton: true
             });

             if (confirmed.isConfirmed) { */
            axios.post('/add-secction-informativa', { arraySeccionInformativa: arraySeccionInformativa.value, idBlog: blog.value.id_blog })
                .then((response) => {
                    arraySeccionInformativa.value = []
                    console.log(response.data);

                    response.data.map((value, index) => {
                        arraySeccionInformativa.value.push(value);
                    })

                })
                .catch((error) => {

                    console.error(error);
                });
            // }


        }

        const updateSeccionInformativa = (idSeccionInfo, campoActualizar, valorEnviado) => {

            console.log({ idSeccionInfo, campoActualizar, valorEnviado });
            axios.post('/update-secction-informativa', {
                id_seccion_informativa: idSeccionInfo,
                campoActualizar: campoActualizar,
                valorEnviado: valorEnviado,

            })
                .then((response) => {
                    console.log(response);
                })
                .catch((error) => {

                    console.error(error);
                });
        }

        const updateBlop = (campoActualizar, valorEnviado) => {

            axios.post('/update-blog', {
                id_blog: blog.value.id_blog,
                campoActualizar: campoActualizar,
                valorEnviado: valorEnviado,

            })
                .then((response) => {
                    console.log(response);
                })
                .catch((error) => {

                    console.error(error);
                });
        }


        const optionsCategories = ref(null)
        const getCategoriesBlog = async () => {
            try {
                const response = await axios.get('/getCategoriesBlog');
                console.log(response);
                optionsCategories.value = response.data
            } catch (error) {
                console.error(`Error fetching categories: ${error}`);
                return null;
            }
        };


        return {
            modalIsOpen, arraySeccionInformativa, clickForPushToArraySecction,
            updateBlop,
            optionsCategories,
            disableBlog,
            fileInput,
            handleDrop,
            updateCurrentBlog,
            EnableForEdit,
            moment,
            archivoFull,
            urlImageFile,
            openFileInput, updateSeccionInformativa,
            handleDragOver,
            handleFileChange, idBlog,
            tituloBlog, descripcionBlog, fotoPrincipalBlog, contenidoDescripcionBlog, numeroVisitasBlog,
            fechaReflejadaBlog, estadoBlog

        }
    }
}
</script>

<style></style>
