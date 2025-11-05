<template>
    <layouts-header></layouts-header>
    <user-breadcrumb :title="title" :text="text" :text1="text1" />

    <user-tabset></user-tabset>

    <!-- Page Content -->
    <div class="content dashboard-content">
        <div class="container">

            <!-- Content Header -->
            <div class="content-header">
                <h4>Wishlist</h4>
            </div>
            <!-- /Content Header -->

            <div class="row">

                <!-- Wishlist -->
                <div class="col-md-12">
                    <div class="wishlist-wrap">
                        <div class="listview-car" v-for="item in Wishlist" :key="item.id">
                            <div class="card">
                                <div class="blog-widget d-flex">
                                    <div class="blog-img">
                                        <router-link to="/listing/listing-details">
                                            <img :src="getImageUrl(item.Image)" class="img-fluid"
                                                alt="blog-img">
                                        </router-link>
                                        <a href="javascript:void(0)" class="fav-icon" @click="toggleSelected(item)"
                                            :class="{ selected: item.isSelected }" data-bs-toggle="tooltip"
                                            data-bs-placement="right" data-bs-original-title="Remove From Wishlist">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="bloglist-content w-100">
                                        <div class="card-body">
                                            <div class="blog-list-head d-flex">
                                                <div class="blog-list-title">
                                                    <h3><router-link
                                                            to="/listing/listing-details">{{ item.Title }}</router-link></h3>
                                                    <h6>Category : <span>{{ item.Category }}</span></h6>
                                                </div>
                                                <div class="blog-list-rate">
                                                    <div class="list-rating">
                                                        <i class="fas fa-star filled me-1"></i>
                                                        <i class="fas fa-star filled me-1"></i>
                                                        <i class="fas fa-star filled me-1"></i>
                                                        <i class="fas fa-star filled me-1"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <span>(5.0)</span>
                                                    </div>
                                                    <h6>{{ item.Price }} <span>/ Day</span></h6>
                                                </div>
                                            </div>
                                            <div class="listing-details-group">
                                                <ul>
                                                    <li>
                                                        <span><img src="@/assets/img/icons/car-parts-05.svg"
                                                                alt="Auto"></span>
                                                        <p>{{ item.Drive }}</p>
                                                    </li>
                                                    <li>
                                                        <span><img src="@/assets/img/icons/car-parts-02.svg"
                                                                alt="10 KM"></span>
                                                        <p>{{ item.Kilometer }}</p>
                                                    </li>
                                                    <li>
                                                        <span><img src="@/assets/img/icons/car-parts-03.svg"
                                                                alt="Petrol"></span>
                                                        <p>{{ item.Variant }}</p>
                                                    </li>
                                                    <li>
                                                        <span><img src="@/assets/img/icons/car-parts-04.svg"
                                                                alt="Power"></span>
                                                        <p>{{ item.Steering }}</p>
                                                    </li>
                                                    <li>
                                                        <span><img src="@/assets/img/icons/car-parts-05.svg"
                                                                alt="2018"></span>
                                                        <p>{{ item.Year }}</p>
                                                    </li>
                                                    <li>
                                                        <span><img src="@/assets/img/icons/car-parts-06.svg"
                                                                alt="Persons"></span>
                                                        <p>{{ item.Seat }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-list-head list-head-bottom d-flex">
                                                <div class="blog-list-title">
                                                    <div class="title-bottom">
                                                        <div class="address-info">
                                                            <h6><i class="feather-map-pin me-2"></i>{{ item.Location }}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="listing-button">
                                                    <router-link to="/listing/listing-details"
                                                        class="btn btn-order"><span><i
                                                                class="feather-calendar me-2"></i></span>Rent
                                                        Now</router-link>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /Wishlist -->

                </div>

            </div>

        </div>
    </div>
    <!-- /Page Content -->

    <layout-footer></layout-footer>
</template>

<script>
import Wishlist from '@/assets/json/user-wishlist.json'
export default {
    data() {
        return {
            Wishlist: Wishlist,
            title: "User Wishlist",
            text: "Home",
            text1: "User Wishlist",
            isSelected: false,
        };
    },
    methods: {
        toggleSelected(item) {
            item.isSelected = !item.isSelected;
        },
        getImageUrl(imageName) {
      return new URL(`/src/assets/img/${imageName}`, import.meta.url).href;
    },

    },
};
</script>