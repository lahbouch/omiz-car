<template>
  <section class="brand-section">
    <div class="container">
      <div class="section-heading heading-four" data-aos="fade-down">
        <h2 class="text-white">{{ $t("Rental by brands") }}</h2>
        <p>{{ $t("Discover the brands available in our fleet") }}</p>
      </div>
      <div class="brands-slider owl-carousel">
        <Carousel
          :wrap-around="true"
          :settings="settings"
          :breakpoints="breakpoints"
          :autoplay="3000"
        >
          <Slide v-for="item in brandFour" :key="item.id">
            <div class="brand-wrap">
              <img
                :src="getImageUrl(item.Image)"
                alt="img"
                style="width: 120px !important"
              />
              <p>{{ item.name }}</p>
            </div>
          </Slide>
          <template #addons> </template>
        </Carousel>
      </div>
      <div class="brand-img text-center">
        <img src="/src/assets/img/bg/brand.png" alt="img" class="img-fluid" />
      </div>
    </div>
  </section>
</template>

<script>
import { Carousel, Navigation, Slide } from "vue3-carousel";
import brandFour from "@/assets/json/brand-four.json";
import "vue3-carousel/dist/carousel.css";
export default {
  data() {
    return {
      brandFour: brandFour,
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
      return new URL(`/src/assets/img/brand/${imageName}`, import.meta.url)
        .href;
    },
  },
};
</script>
