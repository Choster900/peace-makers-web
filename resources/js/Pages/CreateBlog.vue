<template>
    <div class="page-wrap">
        <!-- header  -->
        <header class="header-section has-header-main bg-pattern-3">
            <!-- Header main -->
            <HeaderMain></HeaderMain>
        </header>
        <!-- create -->
        <section class="create-section section-space-b pt-4 pt-md-5 mt-md-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-head-sm">
                            <router-link :to="SectionData.createMultipleData.path" class="btn-link fw-semibold"><em
                                    class="ni ni-arrow-left"></em> {{ SectionData.createMultipleData.btnText
                                }}
                            </router-link>
                            <h1 class="mt-2">Crea un nuevo blog</h1>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-8">
                        <form action="#" class="form-create mb-5 mb-lg-0">
                            <div class="form-item mb-4">
                                <h5 class="mb-3">Subir archivo</h5>
                                <div class="file-upload-wrap">
                                    <p class="file-name mb-4" id="file-name">PNG, GIF, WEBP, MP4 or MP3. Max 100mb.</p>
                                    <!-- <input id="file-upload" class="file-upload-input" data-target="file-name"
                                        type="file" hidden> -->
                                    <input type="file" ref="fileInput"
                                        accept="image/gif,image/jpeg,image/png,image/jpg,image" style="display: none;"
                                        @change="handleFileChange">
                                    <label for="file-upload" class="input-label btn btn-dark" @click="openFileInput">
                                        Selecciona archivo</label>
                                    <span class="block pt-2">
                                        {{ fileName || 'Ningun archivo seleccionado' }}
                                    </span>
                                </div>
                            </div><!-- end form-item -->
                            <div class="form-item mb-4">
                                <h5 class="mb-3">Select Method</h5>
                                <ul class="row g-4 nav nav-tabs nav-tabs-s2" id="myTab" role="tablist">
                                    <li class="nav-item col-6 col-sm-4 col-lg-3" role="presentation"
                                        v-for="list in SectionData.selectMethodTabNavTwo" :key="list.id">
                                        <button class="nav-link" :class="list.isActive" :id="list.slug"
                                            data-bs-toggle="tab" :data-bs-target="list.bsTarget" type="button">
                                            <em class="ni nav-link-icon" :class="list.icon"></em>
                                            <span class="nav-link-title mt-1 d-block">{{ list.title }}</span>
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content mt-4" id="myTabContent">
                                    <div class="tab-pane fade show active" id="fixed-price" role="tabpanel"
                                        aria-labelledby="fixed-price-tab">
                                        <div class="form-create-tab-wrap">
                                            <label class="mb-2 form-label">Titulo</label>
                                            <input type="text" class="form-control form-control-s1"
                                                placeholder="Ingrese un titulo para el blog" v-model="tituloBlog">
                                        </div><!-- end form-create-tab-wrap -->
                                    </div><!-- end tab-pane -->
                                </div><!-- end tab-content -->
                            </div>
                            <div class="form-item mb-4">
                                <h5 class="mb-1">Selecciona categoria</h5>
                                <p class="form-text mb-3">This is the collection where your item will appear.</p>
                                <select class="form-select" aria-label="Default select example" v-model="idCategory">
                                    <option value="1" v-for="(cat, i) in optionsCategories" :key="i">{{
                                cat.nombre_categoria }}</option>

                                </select>
                            </div>
                            <!-- end form-item -->
                            <div class="form-item mb-4">

                                <div class="mb-4">
                                    <label class="mb-2 form-label">Description</label>
                                    <textarea name="message" class="form-control form-control-s1"
                                        v-model="descriptionBlog"
                                        placeholder="e. g. After purchasing you’ll be able to get the real T-Shirt"></textarea>
                                </div>
                            </div><!-- end form-item -->
                            <button class="btn btn-dark" type="button" @click="saveNewBlog">Create Item</button>
                        </form>
                    </div><!-- endn col -->
                </div><!-- row-->
            </div><!-- container -->
        </section><!-- create-section -->
        <!-- Footer  -->
        <Footer classname="bg-dark on-dark"></Footer>
    </div><!-- end page-wrap -->
</template>

<script>
// Import component data. You can change the data in the store to reflect in all component
import HeaderMain from '@/Layouts/HeaderMain.vue';
import Footer from '@/Layouts/Footer.vue';
import { ref, onMounted } from 'vue';
import axios from 'axios';
// vue select
import vSelect from 'vue-select'
import "vue-select/dist/vue-select.css";
import Swal from 'sweetalert2'
import Dropdown from 'primevue/dropdown';

export default {
    name: 'CreateMultiple',
    components: {
        HeaderMain,
        Footer,
        vSelect
    },
    setup() {

        const fileInput = ref(null);
        const blogFile = ref(null);
        const fileName = ref(null);
        const urlImageFile = ref(null);
        const tituloBlog = ref(null);
        const descriptionBlog = ref(null);
        const optionsCategories = ref(null);
        const idCategory = ref(null);

        const openFileInput = () => {
            fileInput.value.click();
        };

        const handleFileChange = () => {
            const selectedFile = fileInput.value.files[0];
            if (selectedFile) {
                setImageData(selectedFile);
            }
        };

        const handleDragOver = (event) => {
            event.preventDefault();
        };

        const handleDrop = (event) => {
            event.preventDefault();
            const selectedFile = event.dataTransfer.files[0];
            if (selectedFile) {
                setImageData(selectedFile);
            }
            fileInput.value = null;
        };

        const setImageData = (selectedFile) => {
            blogFile.value = selectedFile;
            urlImageFile.value = URL.createObjectURL(selectedFile);
            fileName.value = selectedFile.name
            console.log('Archivo seleccionado:', selectedFile.name);
        };


        const saveNewBlog = async () => {
            // Mostrar confirmación al usuario
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
                axios.post('/addNewBlog', {
                    blogFile: blogFile.value,
                    fileName: fileName.value,
                    idCategory: idCategory.value,
                    tituloBlog: tituloBlog.value,
                    descriptionBlog: descriptionBlog.value,
                }, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                })
                    .then((response) => {
                        console.log(response);

                        window.location.href = `/post-detail/${response.data}`;

                    })
                    .catch((error) => {

                        console.error(error);
                    });
            }
        }

        const getCategoriesBlog = async () => {
            try {
                const response = await axios.get('getCategoriesBlog');
                console.log(response);
                optionsCategories.value = response.data
            } catch (error) {
                console.error(`Error fetching categories: ${error}`);
                return null;
            }
        };

        onMounted(() => {
            getCategoriesBlog()
        })


        return {
            fileInput,
            blogFile,
            handleDrop,
            fileName,
            urlImageFile,
            openFileInput,
            handleDragOver,
            handleFileChange,
            tituloBlog,
            descriptionBlog,
            saveNewBlog,
            idCategory,
            optionsCategories,
            SectionData: {
                // multiple data
                createMultipleData: {
                    btnText: 'Manage collectible type',
                    path: '/create',
                    title: 'Create multiple collectible'
                },
            },
            selected: 'Select Collection',
            options: [
                'Select Collection',
                'Abstraction',
                'Patternlicious',
                'Skecthify',
                'Cartoonism',
                'Virtuland',
                'Papercut'
            ]
        }
    },

}
</script>
