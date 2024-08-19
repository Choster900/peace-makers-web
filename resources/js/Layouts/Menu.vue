<template>
    <nav class="header-menu menu nav">
        <!-- menu list -->
        <MenuList></MenuList>
        <ul class="menu-btns menu-btns-2">
            <li class="d-none d-lg-inline-block">
                <DropdownLink :href="route('donate')" class="icon-btn icon-btn-s1" title="Wallet">
                    <em class="ni ni-wallet"></em></DropdownLink>
            </li>
            <li class="d-none d-lg-inline-block dropdown" ref="dropdownContainer">
                <button type="button" class="icon-btn icon-btn-s1" @click="toggleDropdown">
                    <em class="ni ni-user"></em>
                </button>
                <ul :class="[
                    'dropdown-menu',
                    'card-generic',
                    'card-generic-s3',
                    'dropdown-menu-end',
                    'mt-2',
                    { show: isDropdownVisible },
                ]" class="dropdown-menu card-generic card-generic-s3 dropdown-menu-end mt-2"
                    data-popper-placement="bottom-end" style="
                        position: absolute;
                        inset: 0px 0px auto auto;
                        margin: 0px;
                        transform: translate(-5.55556px, 46.6667px);
                    ">
                    <li>
                        <h6 class="dropdown-header" v-if="$page.props.auth.user">Hello {{  $page.props.auth.user?.name }}</h6>
                    </li>
                    <li v-for="list in authorNav" :key="list.id">
                        <router-link class="dropdown-item card-generic-item" :to="list.path">
                            <em class="ni me-2" :class="list.icon"></em>{{ list.title }}
                        </router-link>
                    </li>
                    <li>
                        <a href="#" class="text-left dropdown-item card-generic-item theme-toggler"
                            title="Toggle Dark/Light mode">
                            <em class="ni ni-moon me-2"></em> Dark Mode

                            <!-- <pre>
                                {{ $page.props.auth.user?.id }}
                            </pre> -->
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <DropdownLink v-if="$page.props.auth.user?.id " :href="route('logout')" method="post" class="dropdown-item card-generic-item ">
                            <em class="ni ni-power me-2" ></em>Logout
                        </DropdownLink>
                        <DropdownLink v-else :href="route('login')" method="get" class="dropdown-item card-generic-item ">
                            <em class="ni ni-power me-2"  ></em>Login
                        </DropdownLink>
                    </li>
                </ul>
            </li>
            <li class="d-lg-none">
                <ButtonLink text="Connect Wallet" link="/wallet" classname="btn btn-lg" :class="classname"></ButtonLink>
            </li>
        </ul>
    </nav>
</template>

<script>
import ThemeSwither from "@/Components/ThemeSwither.vue";
import MenuList from "./MenuList.vue";
import { ref, onMounted, nextTick, onBeforeUnmount } from "vue";
import DropdownLink from "@/Components/DropdownLink.vue";

export default {
    name: "Menu",
    props: ["classname"],
    components: {
        MenuList,
        ThemeSwither,
        DropdownLink,
    },
    setup() {
        const authorNav = ref([
            {
                id: 1,
                title: "Profile",
                path: "profile",
                icon: "ni-user",
            },
            {
                id: 2,
                title: "Dashboard",
                path: "offers",
                icon: "ni-dashboard",
            },
            {
                id: 3,
                title: "Account Settings",
                path: "account",
                icon: "ni-setting",
            },
            {
                id: 4,
                title: "Help center",
                path: "contact",
                icon: "ni-question-alt",
            },
        ]);

        const isDropdownVisible = ref(false);
        const dropdownContainer = ref(null);

        const toggleDropdown = () => {
            isDropdownVisible.value = !isDropdownVisible.value;
        };

        const handleClickOutside = (event) => {
            console.log("Click detected:", event.target);
            console.log("Dropdown container:", dropdownContainer.value);
            if (
                dropdownContainer.value &&
                !dropdownContainer.value.contains(event.target)
            ) {
                isDropdownVisible.value = false;
            }
        };

        const themeSwitcher = (selector) => {
            let themeToggler = document.querySelectorAll(selector);
            if (themeToggler.length > 0) {
                themeToggler.forEach((item) => {
                    item.addEventListener("click", function (e) {
                        e.preventDefault();
                        document.body.classList.toggle("dark-mode");
                        if (document.body.classList.contains("dark-mode")) {
                            localStorage.setItem("website_theme", "dark-mode");
                        } else {
                            localStorage.setItem("website_theme", "default");
                        }
                    });
                });
            }

            function retrieveTheme() {
                var theme = localStorage.getItem("website_theme");
                if (theme != null) {
                    document.body.classList.remove("default", "dark-mode");
                    document.body.classList.add(theme);
                }
            }

            retrieveTheme();

            if (window) {
                window.addEventListener(
                    "storage",
                    function () {
                        retrieveTheme();
                    },
                    false
                );
            }
        };

        onMounted(async () => {
            await nextTick();
            themeSwitcher(".theme-toggler");
            console.log(
                "Dropdown container onMounted:",
                dropdownContainer.value
            );
            document.addEventListener("click", handleClickOutside);
        });

        onBeforeUnmount(() => {
            document.removeEventListener("click", handleClickOutside);
        });

        return {
            isDropdownVisible,
            toggleDropdown,
            dropdownContainer,
            authorNav,
        };
    },
};
</script>

<style scoped>
/* Añade cualquier estilo adicional aquí */
</style>
