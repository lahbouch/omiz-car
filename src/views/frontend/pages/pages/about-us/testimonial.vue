<template>
  <section class="section about-testimonial testimonials-section">
    <div class="container">
      <!-- Heading title-->
      <div class="section-heading" data-aos="fade-down">
        <h2 class="title text-white">{{ $t("What our clients say") }}</h2>
        <p class="description text-white">
          {{ $t("Discover testimonials from our satisfied customers") }}
        </p>
      </div>
      <!-- /Heading title -->
      <div
        class="owl-carousel about-testimonials testimonial-group mb-0 owl-theme"
      >
        <!-- Carousel Item -->
        <Carousel
          :wrap-around="true"
          :settings="settings"
          :breakpoints="breakpoints"
        >
          <Slide v-for="item in Abouttestimonial" :key="item.id">
            <div class="testimonial-item d-flex me-2">
              <div class="card flex-fill">
                <div class="card-body">
                  <div class="quotes-head"></div>
                  <div class="review-box">
                    <div class="review-profile">
                      <div class="review-img">
                        <img
                          :src="getImageUrl(item.image)"
                          class="img-fluid"
                          alt="img"
                        />
                      </div>
                    </div>
                    <div class="review-details">
                      <h6>{{ item.name }}</h6>
                      <div class="list-rating">
                        <div class="list-rating-star">
                          <i class="fas fa-star filled me-1"></i>
                          <i class="fas fa-star filled me-1"></i>
                          <i class="fas fa-star filled me-1"></i>
                          <i class="fas fa-star filled me-1"></i>
                          <i class="fas fa-star filled"></i>
                        </div>
                        <p><span>(5.0)</span></p>
                      </div>
                    </div>
                  </div>
                  <p>
                    {{ $t("Impeccable service from Omiz Car! Quick rental, clean and well-maintained car. Perfect airport delivery. I highly recommend!") }}
                  </p>
                </div>
              </div>
            </div>
          </Slide>
          <template #addons>
            <Pagination />
          </template>
        </Carousel>
        <!-- /Carousel Item  -->
      </div>
    </div>
  </section>
</template>
<script>
import { Carousel, Pagination, Slide } from "vue3-carousel";
import Abouttestimonial from "@/assets/json/abouttestimonial.json";
import "vue3-carousel/dist/carousel.css";
export default {
  data() {
    return {
      Abouttestimonial: Abouttestimonial,
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
          itemsToShow: 2,
          snapAlign: "start",
        },
      },
    };
  },
  components: {
    Carousel,
    Slide,
    Pagination,
  },
  methods: {
    getImageUrl(imageName) {
      return new URL(`/src/assets/img/profiles/${imageName}`, import.meta.url)
        .href;
    },
  },
};
</script>