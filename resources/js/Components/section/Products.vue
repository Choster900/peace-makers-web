<template>
    <div class="card card-full">
        <div class="card-image">
            <img src="../../../images/thumb/nft-2.jpg" class="card-img-top" alt="art image">
        </div>
        <div class="card-body p-4">
            <h5 class="card-title text-truncate mb-0">{{ product.title }}</h5>
            <div class="card-author mb-1 d-flex align-items-center">
                <span class="me-1 card-author-by text-xs">By</span>
                <div class="custom-tooltip-wrap">
                    <DropdownLink href="/product-detail"
                        class="text-xs custom-tooltip author-link text-slate-600 font-semibold">{{ product.author }}
                    </DropdownLink>
                    <div class="card-generic custom-tooltip-dropdown">
                        <div class="author-action align-items-center mb-3 flex">
                            <div class="flex-shrink-0 avatar">
                                <img src="../../../images/thumb/avatar.jpg" alt="avatar">
                            </div>
                            <div class="ms-2">
                                <span class="author-username">{{ product.userName }}</span>
                                <span class="author-follow-text md:block">{{ product.followersText }}</span>
                            </div>
                        </div>
                        <h6 class="author-name mb-1">{{ product.authorName }}</h6>
                        <p class="author-desc smaller mb-3">{{ product.desc }}</p>

                        <DropdownLink :to="product.authorLink" class="btn btn-sm bg-dark-dim">Ver</DropdownLink>
                    </div><!-- end dropdown-menu -->
                </div><!-- end custom-tooltip-wrap -->
            </div><!-- end card-author -->
            <div class="card-price-wrap d-flex align-items-center justify-content-sm-between mb-3">
                <div class="me-5 me-sm-2">
                    <span class="card-price-title">Hace: </span>
                    <span class="card-price-number ">2 dias</span>
                </div>
              <!--   <div class="text-sm-end">
                    <span class="card-price-title">Current bid</span>
                    <span class="card-price-number md:block">{{ product.priceTwo }} ETH</span>
                </div> -->
            </div><!-- end card-price-wrap -->

        </div><!-- end card-body -->
        <DropdownLink href="/product-detail" class="details"></DropdownLink>
    </div><!-- end card -->
</template>
<script>
import { createPopper } from '@popperjs/core';
import DropdownLink from '../DropdownLink.vue';
export default {
    name: 'Products',
    props: ['product'],
    mounted() {
        /*============= Custom Tooltips =============== */
        function customTooltip(selector, active) {
            let elem = document.querySelectorAll(selector);
            if (elem.length > 0) {
                elem.forEach(item => {
                    const parent = item.parentElement;
                    const next = item.nextElementSibling;
                    createPopper(item, next);
                    parent.addEventListener("mouseenter", function () {
                        parent.classList.add(active);
                    });
                    parent.addEventListener("mouseleave", function () {
                        parent.classList.remove(active);
                    });
                });
            }
        }
        customTooltip('.custom-tooltip', 'active');
    },
    components: { DropdownLink }
}
</script>

<style lang="css" scoped>
.details {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.author-link,
.card-price-wrap {
    z-index: 2;
    position: relative;
}
</style>
