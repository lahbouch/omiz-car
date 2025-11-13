<template>
  <div class="detail-product">
    <div class="pro-info">
      <div class="pro-badge">
        <span class="badge-km"
          ><i class="fa-solid fa-person-walking"></i>4.2 Km de distance</span
        >
        <a href="javascript:void(0);" class="fav-icon"
          ><i class="fa-regular fa-heart"></i
        ></a>
      </div>
      <ul>
        <li class="del-airport">
          <i class="fa-solid fa-check"></i>Livraison à l'aéroport
        </li>
        <li class="del-home">
          <i class="fa-solid fa-check"></i>Livraison à domicile
        </li>
      </ul>
    </div>
    <Carousel
      class="slider detail-bigimg"
      id="gallery"
      :items-to-show="1"
      :wrap-around="false"
      v-model="currentSlide"
    >
      <Slide v-for="(image, index) in images" :key="index" class="product-img">
        <div class="carousel__item">
          <img :src="getImageUrl(image.src)" :alt="image.alt" />
        </div>
      </Slide>
      <template #addons>
        <Navigation />
      </template>
    </Carousel>

    <Carousel
      id="thumbnails"
      :items-to-show="4"
      :wrap-around="true"
      v-model="currentSlide"
      ref="carousel"
    >
      <Slide v-for="(image, index) in imagesOne" :key="index">
        <div
          class="carousel__item slider slider-nav-thumbnails"
          @click="slideTo(index)"
        >
          <img :src="getImageUrl(image.src)" :alt="image.alt" />
        </div>
      </Slide>
    </Carousel>
  </div>
  <div class="review-sec pb-0">
    <div class="review-header">
      <h4>Services supplémentaires</h4>
    </div>
    <div class="lisiting-service">
      <div class="row">
        <div
          class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6"
        >
          <div class="service-img">
            <img src="@/assets/img/icons/service-01.svg" alt="Icon" />
          </div>
          <div class="service-info">
            <p>Système de navigation GPS</p>
          </div>
        </div>
        <div
          class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6"
        >
          <div class="service-img">
            <img src="@/assets/img/icons/service-02.svg" alt="Icon" />
          </div>
          <div class="service-info">
            <p>Point d'accès Wi-Fi</p>
          </div>
        </div>
        <div
          class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6"
        >
          <div class="service-img">
            <img src="@/assets/img/icons/service-03.svg" alt="Icon" />
          </div>
          <div class="service-info">
            <p>Sièges de sécurité pour enfants</p>
          </div>
        </div>
        <div
          class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6"
        >
          <div class="service-img">
            <img src="@/assets/img/icons/service-04.svg" alt="Icon" />
          </div>
          <div class="service-info">
            <p>Options de carburant</p>
          </div>
        </div>
        <div
          class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6"
        >
          <div class="service-img">
            <img src="@/assets/img/icons/service-05.svg" alt="Icon" />
          </div>
          <div class="service-info">
            <p>Assistance routière</p>
          </div>
        </div>
        <div
          class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6"
        >
          <div class="service-img">
            <img src="@/assets/img/icons/service-06.svg" alt="Icon" />
          </div>
          <div class="service-info">
            <p>Radio satellite</p>
          </div>
        </div>
        <div
          class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6"
        >
          <div class="service-img">
            <img src="@/assets/img/icons/service-07.svg" alt="Icon" />
          </div>
          <div class="service-info">
            <p>Accessoires supplémentaires</p>
          </div>
        </div>
        <div
          class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6"
        >
          <div class="service-img">
            <img src="@/assets/img/icons/service-08.svg" alt="Icon" />
          </div>
          <div class="service-info">
            <p>Enregistrement express</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent } from "vue";
import { Carousel, Slide, Navigation } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";

export default defineComponent({
  components: {
    Carousel,
    Slide,
    Navigation,
  },
  data() {
    return {
      images: [
        { src: "slider-01.jpg", alt: "Slider" },
        { src: "slider-02.jpg", alt: "Slider" },
        { src: "slider-03.jpg", alt: "Slider" },
        { src: "slider-04.jpg", alt: "Slider" },
        { src: "slider-05.jpg", alt: "Slider" },
      ],
      imagesOne: [
        { src: "slider-thum-01.jpg", alt: "Slider" },
        { src: "slider-thum-02.jpg", alt: "Slider" },
        { src: "slider-thum-03.jpg", alt: "Slider" },
        { src: "slider-thum-04.jpg", alt: "Slider" },
        { src: "slider-thum-05.jpg", alt: "Slider" },
      ],
      currentSlide: 0,
    };
  },
  methods: {
    slideTo(val) {
      this.currentSlide = val;
    },
    getImageUrl(imageName) {
      return new URL(`/src/assets/img/cars/${imageName}`, import.meta.url).href;
    },
  },
});
</script>
