<template>
  <!-- Rental deals -->
  <section class="section popular-services">
    <div class="container">
      <!-- Heading title-->
      <div class="section-heading" data-aos="fade-down">
        <h2>Recommended Car Rental deals</h2>
        <p>Here are some versatile options that cater to different needs</p>
      </div>
      <!-- /Heading title -->
      <div class="row">
        <div class="popular-slider-group">
          <div class="owl-carousel rental-deal-slider owl-theme">
            <!-- owl carousel item -->
            <Carousel :wrap-around="true" :settings="settings" :breakpoints="breakpoints">
              <Slide v-for="item in Rental" :key="item.id">
                <div class="rental-car-item">
                  <div class="listing-item mb-0">
                    <div class="listing-img">
                      <router-link
                        to="/listing/listing-details"
                        v-if="item.Slider.length === 1"
                      >
                        <img
                          :src="getImageUrl(item.Slider[0].Image)"
                          class="img-fluid"
                          alt="Toyota"
                        />
                      </router-link>
                      <div class="img-slider owl-carousel owl-theme" v-else>
                        <Carousel
                          :wrap-around="true"
                          :settingsOne="settingsOne"
                          :breakpointsOne="breakpointsOne"
                        >
                          <Slide v-for="slideItem in item.Slider" :key="slideItem.id">
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
                            <Navigation />
                            <Pagination />
                          </template>
                        </Carousel>
                      </div>
                      <div class="fav-item justify-content-end">
                        <a
                          href="javascript:void(0)"
                          class="fav-icon"
                          @click="toggleSelected(item)"
                          :class="{ selected: item.isSelected }"
                        >
                          <i class="feather-heart"></i>
                        </a>
                      </div>
                    </div>
                    <div class="listing-content">
                      <div class="listing-features">
                        <div class="fav-item-rental">
                          <div class="featured-text">$380<span>/day</span></div>
                        </div>
                        <div class="list-rating">
                          <i class="fas fa-star filled"></i>
                          <i class="fas fa-star filled"></i>
                          <i class="fas fa-star filled"></i>
                          <i class="fas fa-star filled"></i>
                          <i class="fas fa-star filled"></i>
                          <span>(5.0)</span>
                        </div>
                        <h3 class="listing-title">
                          <router-link to="/listing/listing-details"
                            >Mercedes-Benz</router-link
                          >
                        </h3>
                      </div>
                      <div class="listing-details-group">
                        <ul>
                          <li>
                            <span
                              ><img src="@/assets/img/icons/car-parts-01.svg" alt="Auto"
                            /></span>
                            <p>Auto</p>
                          </li>
                          <li>
                            <span
                              ><img src="@/assets/img/icons/car-parts-02.svg" alt="10 KM"
                            /></span>
                            <p>30 KM</p>
                          </li>
                          <li>
                            <span
                              ><img
                                src="@/assets/img/icons/car-parts-03.svg"
                                alt="Petrol"
                            /></span>
                            <p>Diesel</p>
                          </li>
                        </ul>
                        <ul>
                          <li>
                            <span
                              ><img src="@/assets/img/icons/car-parts-04.svg" alt="Power"
                            /></span>
                            <p>Power</p>
                          </li>
                          <li>
                            <span
                              ><img src="@/assets/img/icons/car-parts-07.svg" alt="2018"
                            /></span>
                            <p>AC</p>
                          </li>
                          <li>
                            <span
                              ><img
                                src="@/assets/img/icons/car-parts-06.svg"
                                alt="Persons"
                            /></span>
                            <p>5 Persons</p>
                          </li>
                        </ul>
                      </div>
                      <div class="listing-button">
                        <router-link to="/listing/listing-details" class="btn btn-order"
                          ><span><i class="feather-calendar me-2"></i></span>Rent
                          Now</router-link
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </Slide>
              <template #addons>
                <Navigation />
              </template>
            </Carousel>
            <!-- /owl carousel item -->
          </div>
        </div>
      </div>
      <!-- View More -->
      <div class="view-all text-center" data-aos="fade-down">
        <router-link
          to="/listing/listing-grid"
          class="btn btn-view d-inline-flex align-items-center"
          >Go to all Cars <span><i class="feather-arrow-right ms-2"></i></span
        ></router-link>
      </div>
      <!-- View More -->
    </div>
  </section>
  <!-- /Rental deals -->
</template>

<script>
import { Carousel, Navigation, Pagination, Slide } from "vue3-carousel";
import Rental from "@/assets/json/index-rental.json";
import "vue3-carousel/dist/carousel.css";
export default {
  data() {
    return {
      Rental: Rental,
      settings: {
        itemsToShow: 1,
        snapAlign: "center",
      },
      breakpoints: {
        575: {
          itemsToShow: 2,
          snapAlign: "center",
        },
        767: {
          itemsToShow: 1,
          snapAlign: "center",
        },
        991: {
          itemsToShow: 2,
          snapAlign: "center",
        },
        1024: {
          itemsToShow: 3,
          snapAlign: "start",
        },
      },
      settingsOne: {
        itemsToShow: 1,
        snapAlign: "center",
      },
      breakpointsOne: {
        575: {
          itemsToShow: 2,
          snapAlign: "center",
        },
        767: {
          itemsToShow: 1,
          snapAlign: "center",
        },
        991: {
          itemsToShow: 2,
          snapAlign: "center",
        },
        1024: {
          itemsToShow: 3,
          snapAlign: "start",
        },
      },
    };
  },
  methods: {
    toggleSelected(item) {
      item.isSelected = !item.isSelected;
    },
    getImageUrl(imageName) {
      return new URL(`/src/assets/img/cars/${imageName}`, import.meta.url).href;
    },
  },
  components: {
    Carousel,
    Slide,
    Navigation,
    Pagination,
  },
};
</script>
