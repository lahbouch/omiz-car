<template>
    <ul class="main-nav" :class="{ active: isActive }">
        <template v-for="item in HeaderData" :key="item.tittle">
            <li class="has-submenu megamenu" @mouseenter="activateMenu" :class="{ 'active': isActiveRoute(item.active_link) }" 
                @mouseleave="deactivateMenu" v-if="item.separateRoute === true && item.tittle === 'Home'">
                <a href="javascript:void(0);" @click="toggleTab(item)">{{ item.tittle }}
                    <i class="fas fa-chevron-down"></i>
                </a>
                <ul class="submenu mega-submenu" :class="{ 'd-block': item.showAsTab }">
                    <li>
                        <div class="megamenu-wrapper">
                            <div class="row">
                                <div class="col-lg-3" v-for="menu in item.menu" :key="menu.menuValue">
                                    <div class="single-demo" :class="{ 'active': isActiveRoute(menu.route) }">
                                        <div class="demo-img">
                                            <router-link :to="menu.routes">
                                                <img :src="getImageUrl(menu.image)" class="img-fluid" alt="img">
                                            </router-link>
                                        </div>
                                        <div class="demo-info">
                                            <router-link :to="menu.routes">{{menu.menuValue}}
                                                <span :class="[ {
                                                    'new': menu.version === 'New',
                                                    'hot': menu.version === 'Hot',
                                                    'new': menu.version === 'New',
                                                    'new': menu.version === 'New',
                                                    },
                                                ]">
                                        {{menu.version}}</span> </router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li v-else-if="item.separateRoute === false" class="has-submenu" :class="{ 'active': isActiveRoute(item.active_link) || isActiveRoute(item.active_link1) || isActiveRoute(item.active_link2) || isActiveRoute(item.active_link3)}">
                <a href="javascript:void(0);" @click="toggleTab(item)">
                    {{ item.tittle }} <i class="fas fa-chevron-down"></i>
                </a>
                <ul class="submenu" :class="{ 'd-block': item.showAsTab }">
                    <template v-for="menuItem in item.menu" :key="menuItem.menuValue">
                        <li v-if="menuItem.hasSubRoute === false" :class="{ 'active': isActiveRoute(menuItem.active_link) }">
                            <router-link :to="{ 'path': menuItem.routes }">{{ menuItem.menuValue }}</router-link>
                        </li>
                        <li v-else-if="menuItem.hasSubRoute === true" class="has-submenu" :class="{ 'active': isActiveRoute(menuItem.active_link) }">
                            <a href="javascript:void(0);" @click="toggleTab(menuItem)">{{ menuItem.menuValue }}</a>
                            <ul class="submenu" :class="{ 'd-block': menuItem.showAsTab }">
                                <template v-for="subMenu in menuItem.subMenus" :key="subMenu.menuValue">
                                    <li v-if="subMenu.hasSubRoute === false" :class="{ 'active': isActiveRoute(subMenu.active_link) }">
                                        <router-link :to="{ 'path': subMenu.routes }" :target="subMenu.admin ? '_blank' : '_self'">
                                            {{ subMenu.menuValue }}
                                        </router-link>
                                    </li>
                                </template>                                
                            </ul>
                        </li>
                    </template>
                </ul>
            </li>
        </template>
    </ul>
</template>


<script>
import { ref } from "vue";
import { useRoute } from "vue-router";
import HeaderData from '@/assets/json/header-menu.json'

export default {
    data(){
        return{
            HeaderData: HeaderData,
            route_array: [],
            openDropdownIndex: null,
            isDropdownOpen: false,
            isDropdownOpen1: null,
            isSidebarOpen: false,
        }
    },
    methods: {
        openSubMenu() {
            this.isDropdownOpen = !this.isDropdownOpen;
            this.openDropdownIndex = null;
        },
        openSubMenu1(index) {
            this.isDropdownOpen1 = this.isDropdownOpen1 === index ? null : index;
        },
        toggleSubMenu(index) {
            this.openDropdownIndex = this.openDropdownIndex === index ? null : index;
            this.isDropdownOpen = false;
        },
        closeSidebar() {
            this.isSidebarOpen = false;
            document.documentElement.classList.remove("menu-opened");
        },
        toggleTab(item) {
            item.showAsTab = !item.showAsTab;
        },
        getImageUrl(imageName) {
            return new URL(`/src/assets/img/menu/${imageName}`, import.meta.url).href;
        },
    },
    setup() {
        const route = useRoute();
        const isActive = ref(false);
    
        const activateMenu = () => {
            isActive.value = true;
        };
    
        const deactivateMenu = () => {
            isActive.value = false;
        };
    
        // Function to check if current route matches the active link
        const isActiveRoute = (activeLink) => {
            return route.path.includes(activeLink);
        };
    
        return {
            isActive,
            activateMenu,
            deactivateMenu,
            route,
            isActiveRoute
        };
    },
}
</script>