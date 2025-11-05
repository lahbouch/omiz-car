<template>
  <section class="section popular-car-type">
    <div class="container">
      <!-- Heading title-->
      <div class="section-heading" data-aos="fade-down">
        <h2>Most Popular Cartypes</h2>
        <p>
          Most popular worldwide Car Category due to their reliability, affordability, and features.
        </p>
      </div>
      <!-- /Heading title -->
      <div class="row">
        <div class="popular-slider-group">
          <div class="owl-carousel popular-cartype-slider owl-theme">
            <!-- owl carousel item -->
            <Carousel :wrap-around="true" :settings="settings" :breakpoints="breakpoints">
              <Slide v-for="item in Cartypes" :key="item.id">
                <div class="listing-owl-item">
                  <div class="listing-owl-group">
                    <div class="listing-owl-img">
                      <img
                        :src="getImageUrl(item.Image)"
                        class="img-fluid"
                        alt="Popular Cartypes"
                      />
                    </div>
                    <h6>{{ item.Title }}</h6>
                    <p>{{ item.Cars }}</p>
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
          >View all Cars <span><i class="feather-arrow-right ms-2"></i></span
        ></router-link>
      </div>
      <!-- View More -->
    </div>
  </section>

  <!-- Facts By The Numbers -->
  <section class="section facts-number">
    <div class="facts-left">
      <img src="@/assets/img/bg/facts-left.png" class="img-fluid" alt="facts left" />
    </div>
    <div class="facts-right">
      <img src="@/assets/img/bg/facts-right.png" class="img-fluid" alt="facts right" />
    </div>
    <div class="container">
      <!-- Heading title-->
      <div class="section-heading" data-aos="fade-down">
        <h2 class="title text-white">Facts By The Numbers</h2>
        <p class="description text-white">
          Here are some dreamsrent interesting facts presented by the numbers
        </p>
      </div>
      <!-- /Heading title -->
      <div class="counter-group">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
            <div class="count-group flex-fill">
              <div class="customer-count d-flex align-items-center">
                <div class="count-img">
                  <img src="@/assets/img/icons/bx-heart.svg" alt="" />
                </div>
                <div class="count-content">
                  <h4>
                    <vue3-autocounter
                      class="counterUp"
                      ref="counter"
                      :startAmount="0"
                      :delay="3"
                      :endAmount="16"
                      :duration="5"
                      separator=","
                      :autoinit="true"
                    />K+
                  </h4>
                  <p>Happy Customers</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
            <div class="count-group flex-fill">
              <div class="customer-count d-flex align-items-center">
                <div class="count-img">
                  <img src="@/assets/img/icons/bx-car.svg" alt="" />
                </div>
                <div class="count-content">
                  <h4>
                    <vue3-autocounter
                      class="counterUp"
                      ref="counter"
                      :startAmount="0"
                      :delay="3"
                      :endAmount="2547"
                      :duration="5"
                      separator=","
                      :autoinit="true"
                    />+
                  </h4>
                  <p>Count of Cars</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
            <div class="count-group flex-fill">
              <div class="customer-count d-flex align-items-center">
                <div class="count-img">
                  <img src="@/assets/img/icons/bx-headphone.svg" alt="" />
                </div>
                <div class="count-content">
                  <h4>
                    <vue3-autocounter
                      class="counterUp"
                      ref="counter"
                      :startAmount="0"
                      :delay="3"
                      :endAmount="625"
                      :duration="5"
                      separator=","
                      :autoinit="true"
                    />K+
                  </h4>
                  <p>Car Center Solutions</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
            <div class="count-group flex-fill">
              <div class="customer-count d-flex align-items-center">
                <div class="count-img">
                  <img src="@/assets/img/icons/bx-history.svg" alt="" />
                </div>
                <div class="count-content">
                  <h4>
                    <vue3-autocounter
                      class="counterUp"
                      ref="counter"
                      :startAmount="0"
                      :delay="3"
                      :endAmount="200"
                      :duration="5"
                      separator=","
                      :autoinit="true"
                    />K+
                  </h4>
                  <p>Total Kilometer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Facts By The Numbers -->
</template>

<script>
import { Carousel, Navigation, Slide } from "vue3-carousel";
import Cartypes from "@/assets/json/cartypes.json";
import "vue3-carousel/dist/carousel.css";
export default {
  data() {
    return {
      Cartypes: Cartypes,
      settings: {
        itemsToShow: 1,
        snapAlign: "center",
      },
      breakpoints: {
        575: {
          itemsToShow: 3,
          snapAlign: "center",
        },
        767: {
          itemsToShow: 3,
          snapAlign: "center",
        },
        991: {
          itemsToShow: 3,
          snapAlign: "center",
        },
        1024: {
          itemsToShow: 4.9,
          snapAlign: "start",
        },
      },
    };
  },
  components: {
    Carousel,
    Slide,
    Navigation,
  },
  methods: {
    getImageUrl(imageName) {
      return new URL(`/src/assets/img/cars/${imageName}`, import.meta.url).href;
    },
  },
};
</script>
