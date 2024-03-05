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
                                <img src="../../images/thumb/nft-lg.jpg" alt="" class="w-100 rounded-3"
                                    v-if="!urlImageFile">
                                <img v-else class="w-100 rounded-3" :src="urlImageFile" alt="Feed 01">
                                <!-- <div class="cursor-pointer absolute inset-0 h-full"></div> -->
                            </div>

                            <input type="file" ref="fileInput" accept="image/gif,image/jpeg,image/png,image/jpg,image"
                                style="display: none;" @change="handleFileChange">
                            <div class="item-detail-tab">

                                <ul class="nav nav-tabs nav-tabs-s1" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" type="button">Button Option 1
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" type="button">Button Option 2
                                        </button>
                                    </li>
                                </ul>
                            </div>



                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item-detail-content mt-4 mt-lg-0">
                            <div class="flex">
                                <h1 class="item-detail-title mb-2">Lorem ipsum dolor sit amet consectetur.</h1>

                                <!-- <input type="text" id="text"
                                    class="mb-2 shadow-sm rounded-md w-full text-black font-medium  border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="Nombre de la Publicacion" required> -->

                                <lord-icon src="https://cdn.lordicon.com/wkvacbiw.json" trigger="click"
                                    class="cursor-pointer" style="width:50px;height:50px">
                                </lord-icon>
                            </div>


                            <div class="item-detail-meta d-flex flex-wrap align-items-center mb-3">
                                <span class="item-detail-text-meta">lorem</span>
                                <span class="dot-separeted"></span>
                                <span class="item-detail-text-meta">ipsum</span>
                                <span class="dot-separeted"></span>
                                <span class="item-detail-text-meta">dolor</span>
                            </div>


                            <p class="item-detail-text mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Corporis iste reprehenderit voluptatibus fuga cum doloribus in quae accusamus,
                                voluptates,
                                impedit dignissimos eius itaque atque sint hic veritatis quisquam magnam officia.</p>

                            <!-- <textarea placeholder='Message' rows="6" name='message'
                                class="w-full rounded-md px-4 border text-sm pt-2.5 outline-[#007bff]"></textarea> -->


                            <div class="item-credits">
                                <div class="row g-4">
                                    <div class="col-xl-6">
                                        <div class="card-media card-media-s1">
                                            <DropdownLink class="card-media-img flex-shrink-0 d-block">
                                                <img src="../../images/thumb/avatar-10.jpg" alt="avatar">
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
                        </div>
                    </div>

                    <div class="tab-content mt-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="owners" role="tabpanel" aria-labelledby="owners-tab">
                            <div class="item-detail-tab-wrap">
                                <div class="card-media card-media-s2 mb-3">
                                    contenido 1
                                </div>
                            </div>
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
import DropdownLink from '@/Components/DropdownLink.vue';
import { useHandleState } from '@/Composable/CreateBlog/useHandleState';

export default {
    components: { HeaderMain, DropdownLink },
    setup() {
        const {
            fileInput,
            handleDrop,
            urlImageFile,
            openFileInput,
            handleDragOver,
            handleFileChange
        } = useNewBlog()

        const { stateSecciont } = useHandleState()

        return {
            fileInput,
            handleDrop,
            urlImageFile,
            openFileInput,
            handleDragOver,
            handleFileChange,
            stateSecciont,
        }
    }
}
</script>

<style></style>
