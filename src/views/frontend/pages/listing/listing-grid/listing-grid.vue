<template>
  <div class="listing-page">
    <layouts-header></layouts-header>
    <breadcrumb :title="title" :text="text" :text1="text1" />
    <listing-filter></listing-filter>
    <section class="section car-listing pt-0">
      <div class="container">
        <div class="row">
          <listing-sidebar></listing-sidebar>
          <div class="col-lg-9">
            <div class="row">
              <div
                class="col-lg-4 col-md-6 col-12"
                v-for="item in Mazda"
                :key="item.id"
                data-aos="fade-down"
              >
                <div class="listing-item">
                  <div class="listing-img">
                    <router-link
                      to="/listing/listing-details"
                      v-if="item.Slider.length === 1"
                    >
                      <img
                        :src="getImageUrl(item.Slider[0].Image)"
                        class="img-fluid"
                        alt="Audi"
                      />
                    </router-link>
                    <div class="img-slider owl-carousel" v-else>
                      <Carousel
                        :wrap-around="true"
                        :settings="settings"
                        :breakpoints="breakpoints"
                      >
                        <Slide
                          v-for="slideItem in item.Slider"
                          :key="slideItem.id"
                        >
                          <!-- Display only the first image from the Slider array -->
                          <div class="slide-images">
                            <router-link to="/listing/listing-details">
                              <img
                                :src="getImageUrl(slideItem.Image)"
                                class="img-fluid"
                                alt="Toyota"
                              />
                            </router-link>
                          </div>
                        </Slide>
                        <template #addons>
                          <Pagination />
                          <Navigation />
                        </template>
                      </Carousel>
                    </div>
                    <div
                      class="fav-item justify-content-end"
                      v-if="item.Slider.length > 1"
                    >
                      <span class="img-count"
                        ><i class="feather-image"></i>04</span
                      >
                      <a
                        href="javascript:void(0)"
                        class="fav-icon"
                        @click="toggleSelected(item)"
                        :class="{ selected: item.isSelected }"
                      >
                        <i class="feather-heart"></i>
                      </a>
                    </div>
                    <div class="fav-item justify-content-end" v-else>
                      <a href="javascript:void(0)" class="fav-icon">
                        <i class="feather-heart"></i>
                      </a>
                    </div>
                    <span class="featured-text">{{ item.Cars }}</span>
                  </div>
                  <div class="listing-content">
                    <div
                      class="listing-features d-flex align-items-end justify-content-between"
                    >
                      <div class="list-rating">
                        <a href="javascript:void(0)" class="author-img">
                          <img
                            :src="getImageUrlOne(item.Avatar)"
                            alt="author"
                          />
                        </a>
                        <h3 class="listing-title">
                          <router-link to="/listing/listing-details">{{
                            item.Title
                          }}</router-link>
                        </h3>
                        <div class="list-rating">
                          <i class="fas fa-star filled me-1"></i>
                          <i class="fas fa-star filled me-1"></i>
                          <i class="fas fa-star filled me-1"></i>
                          <i class="fas fa-star filled me-1"></i>
                          <i class="fas fa-star"></i>
                          <span>{{ item.Reviews }}</span>
                        </div>
                      </div>
                      <div class="list-km">
                        <span class="km-count"
                          ><img
                            src="@/assets/img/icons/map-pin.svg"
                            alt="author"
                          />{{ item.MapPin }}</span
                        >
                      </div>
                    </div>
                    <div class="listing-details-group">
                      <ul>
                        <li>
                          <span
                            ><img :src="getImageUrlTwo(item.Gear)" alt="Auto"
                          /></span>
                          <p>{{ item.Drive }}</p>
                        </li>
                        <li>
                          <span
                            ><img
                              src="@/assets/img/icons/car-parts-02.svg"
                              alt="10 KM"
                          /></span>
                          <p>{{ item.KM }}</p>
                        </li>
                        <li>
                          <span
                            ><img
                              src="@/assets/img/icons/car-parts-03.svg"
                              alt="Petrol"
                          /></span>
                          <p>{{ item.liquid }}</p>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <span
                            ><img
                              src="@/assets/img/icons/car-parts-04.svg"
                              alt="Power"
                          /></span>
                          <p>{{ item.Steering }}</p>
                        </li>
                        <li>
                          <span
                            ><img
                              src="@/assets/img/icons/car-parts-05.svg"
                              alt="2018"
                          /></span>
                          <p>{{ item.Engine }}</p>
                        </li>
                        <li>
                          <span
                            ><img
                              src="@/assets/img/icons/car-parts-06.svg"
                              alt="Persons"
                          /></span>
                          <p>{{ item.Seat }}</p>
                        </li>
                      </ul>
                    </div>
                    <div class="listing-location-details">
                      <div class="listing-price">
                        <span><i class="feather-map-pin"></i></span
                        >{{ item.Location }} (50 km max)
                      </div>
                      <div class="listing-price">
                        <h6>{{ item.Price }} <span>/ Jour</span></h6>
                      </div>
                    </div>
                    <div class="listing-button">
                      <router-link
                        to="/listing/listing-details"
                        class="btn btn-order"
                        ><span><i class="feather-calendar me-2"></i></span
                        >Réserver maintenant</router-link
                      >
                    </div>
                  </div>
                  <div :class="item.BadgeClass">
                    <span :class="item.BadgeBgClass">{{ item.Badge }}</span>
                  </div>
                </div>
              </div>
            </div>
            <!--Pagination-->
            <div class="blog-pagination">
              <nav>
                <ul class="pagination page-item justify-content-center">
                  <li class="previtem">
                    <a class="page-link" href="javascript:;"
                      ><i class="fas fa-regular fa-arrow-left me-2"></i> Prev</a
                    >
                  </li>
                  <li class="justify-content-center pagination-center">
                    <div class="page-group">
                      <ul>
                        <li class="page-item">
                          <a class="page-link" href="javascript:;">1</a>
                        </li>
                        <li class="page-item">
                          <a class="active page-link" href="javascript:;"
                            >2 <span class="visually-hidden">(current)</span></a
                          >
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="javascript:;">3</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="javascript:;">4</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="javascript:;">5</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nextlink">
                    <a class="page-link" href="javascript:;"
                      >Next <i class="fas fa-regular fa-arrow-right ms-2"></i
                    ></a>
                  </li>
                </ul>
              </nav>
            </div>
            <!--/Pagination-->
          </div>
        </div>
      </div>
    </section>
    <layout-footer></layout-footer>
  </div>
</template>
<script>
import { Carousel, Pagination, Navigation, Slide } from "vue3-carousel";
import Mazda from "@/assets/json/index-mazda.json";
import "vue3-carousel/dist/carousel.css";
export default {
  data() {
    return {
      title: this.$t("Vehicles"),
      text: this.$t("Listings"),
      text1: this.$t("Our Fleet"),
      Mazda: Mazda,
      isSelected: false,
      settings: {
        itemsToShow: 1,
        snapAlign: "center",
      },
      breakpoints: {
        575: {
          itemsToShow: 1,
          snapAlign: "center",
        },
        767: {
          itemsToShow: 1,
          snapAlign: "center",
        },
        991: {
          itemsToShow: 1,
          snapAlign: "center",
        },
        1024: {
          itemsToShow: 1,
          snapAlign: "start",
        },
      },
    };
  },
  components: {
    Carousel,
    Slide,
    Pagination,
    Navigation,
  },
  methods: {
    toggleSelected(item) {
      item.isSelected = !item.isSelected;
    },
    getImageUrl(imageName) {
      return new URL(`/src/assets/img/cars/${imageName}`, import.meta.url).href;
    },
    getImageUrlOne(imageName) {
      return new URL(`/src/assets/img/profiles/${imageName}`, import.meta.url)
        .href;
    },
    getImageUrlTwo(imageName) {
      return new URL(`/src/assets/img/icons/${imageName}`, import.meta.url)
        .href;
    },
  },
};
</script>
