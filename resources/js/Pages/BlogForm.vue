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
                    {{ urlImageFile }}
                    <img class="block w-full" :src="urlImageFile" alt="Feed 01" >

                    <section>
                        <div class="flex items-center">
                            <div class="mr-4">
                                <div class="text-sm text-slate-800 space-y-2 mb-5">
                                    <div class="relative !my-4">
                                        <div class="relative w-2/3 rounded-lg overflow-hidden">
                                            <img class="block w-full"
                                                src="https://www.tooltyp.com/wp-content/uploads/2014/10/1900x920-8-beneficios-de-usar-imagenes-en-nuestros-sitios-web.jpg"
                                                alt="Feed 01">

                                            <div @click="openFileInput"
                                                class="cursor-pointer absolute inset-0 bg-black/60 opacity-0 hover:opacity-75 transition-opacity duration-300">
                                                <svg fill="#ffffff"
                                                    class="w-10 h-10 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white"
                                                    viewBox="0 0 32 32" stroke="#ffffff">
                                                    <path
                                                        d="M30 2.497h-28c-1.099 0-2 0.901-2 2v23.006c0 1.099 0.9 2 2 2h28c1.099 0 2-0.901 2-2v-23.006c0-1.099-0.901-2-2-2zM30 27.503l-28-0v-5.892l8.027-7.779 8.275 8.265c0.341 0.414 0.948 0.361 1.379 0.035l3.652-3.306 6.587 6.762c0.025 0.025 0.053 0.044 0.080 0.065v1.85zM30 22.806l-5.876-6.013c-0.357-0.352-0.915-0.387-1.311-0.086l-3.768 3.282-8.28-8.19c-0.177-0.214-0.432-0.344-0.709-0.363-0.275-0.010-0.547 0.080-0.749 0.27l-7.309 7.112v-14.322h28v18.309zM23 12.504c1.102 0 1.995-0.894 1.995-1.995s-0.892-1.995-1.995-1.995-1.995 0.894-1.995 1.995c0 1.101 0.892 1.995 1.995 1.995z">
                                                    </path>
                                                </svg>
                                            </div>

                                            <input type="file" ref="fileInput"
                                                accept="image/gif,image/jpeg,image/png,image/jpg,image"
                                                style="display: none;" @change="handleFileChange_NOCOMPOSABLE">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                    <div class="col-lg-6 pe-xl-5">
                        <div class="item-detail-content">
                            <div class="item-detail-img-container mb-4">
                                <img src="../../images/thumb/nft-lg.jpg" alt="" class="w-100 rounded-3">
                            </div>
                            <!-- end item-detail-img-container -->
                            <div class="item-detail-tab">

                                <ul class="nav nav-tabs nav-tabs-s1" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" type="button">tes </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item-detail-content mt-4 mt-lg-0">
                            <h1 class="item-detail-title mb-2">Lorem ipsum dolor sit amet consectetur.</h1>
                            <div class="item-detail-meta d-flex flex-wrap align-items-center mb-3">
                                <span class="item-detail-text-meta">lorem</span>
                                <span class="dot-separeted"></span>
                                <span class="item-detail-text-meta">ipsum</span>
                                <span class="dot-separeted"></span>
                                <span class="item-detail-text-meta">dolor</span>
                            </div>
                            <p class="item-detail-text mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Corporis iste reprehenderit voluptatibus fuga cum doloribus in quae accusamus, voluptates,
                                impedit dignissimos eius itaque atque sint hic veritatis quisquam magnam officia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</template>

<script>
import HeaderMain from '@/Layouts/HeaderMain.vue';
import { useNewBlog } from '@/Composable/CreateBlog/useNewBlog'
import HeroFour from '@/Components/section/HeroFour.vue';
export default {
    components: { HeaderMain },
    setup() {
        const {
            fileInput,
            courseFile,
            handleDrop,
            coursePhoto,
            urlImageFile,
            openFileInput,
            handleDragOver,
            handleFileChange
        } = useNewBlog()

        const handleFileChange_NOCOMPOSABLE = () => {
            handleFileChange();
            coursePhoto.value = fileNameHandlingCoursePhoto.value
            courseFile.value = fileHandlingCourseFile.value
        }
        return {
            handleFileChange_NOCOMPOSABLE,
            fileInput,
            courseFile,
            handleDrop,
            coursePhoto,
            urlImageFile,
            openFileInput,
            handleDragOver,
            handleFileChange,
        }
    }
}
</script>

<style></style>

