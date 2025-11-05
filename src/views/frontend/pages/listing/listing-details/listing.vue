<template>
  <div class="row">
    <div class="col-md-12">
      <div class="details-car-grid">
        <div class="details-slider-heading">
          <h3>You May be Interested in</h3>
        </div>
        <div class="owl-carousel rental-deal-slider details-car owl-theme">
          <Carousel :wrap-around="true" :settings="settings" :breakpoints="breakpoints">
            <Slide v-for="item in Listing" :key="item.id">
              <div class="rental-car-item">
                <div class="listing-item pb-0">
                  <div class="listing-img">
                    <router-link to="/listing/listing-details">
                      <img
                        :src="getImageUrl(item.image)"
                        class="img-fluid"
                        alt="KIA"
                      />
                    </router-link>
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
                    <span :class="item.BrandClass">{{ item.Brand }}</span>
                  </div>
                  <div class="listing-content">
                    <div
                      class="listing-features d-flex align-items-end justify-content-between"
                    >
                      <div class="list-rating">
                        <a href="javascript:void(0)" class="author-img">
                          <img
                            :src="getImageUrlOne(item.profile_image)"
                            alt="author"
                          />
                        </a>
                        <h3 class="listing-title">
                          <router-link to="listing-details">{{ item.Name }}</router-link>
                        </h3>
                        <div class="list-rating">
                          <i class="fas fa-star filled"></i>
                          <i class="fas fa-star filled"></i>
                          <i class="fas fa-star filled"></i>
                          <i class="fas fa-star filled"></i>
                          <i class="fas fa-star filled"></i>
                          <span>{{ item.Reviews }}</span>
                        </div>
                      </div>
                      <div class="list-km">
                        <span class="km-count"
                          ><img src="@/assets/img/icons/map-pin.svg" alt="author" />{{
                            item.Meter
                          }}</span
                        >
                      </div>
                    </div>
                    <div class="listing-details-group">
                      <ul>
                        <li>
                          <span
                            ><img src="@/assets/img/icons/car-parts-05.svg" alt="Manual"
                          /></span>
                          <p>{{ item.transmission }}</p>
                        </li>
                        <li>
                          <span
                            ><img src="@/assets/img/icons/car-parts-02.svg" alt="18 KM"
                          /></span>
                          <p>{{ item.mileage }}</p>
                        </li>
                        <li>
                          <span
                            ><img src="@/assets/img/icons/car-parts-03.svg" alt="Diesel"
                          /></span>
                          <p>{{ item.fuel_type }}</p>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <span
                            ><img src="@/assets/img/icons/car-parts-04.svg" alt="Power"
                          /></span>
                          <p>{{ item.power }}</p>
                        </li>
                        <li>
                          <span
                            ><img src="@/assets/img/icons/car-parts-05.svg" alt="2018"
                          /></span>
                          <p>{{ item.year }}</p>
                        </li>
                        <li>
                          <span
                            ><img src="@/assets/img/icons/car-parts-06.svg" alt="Persons"
                          /></span>
                          <p>{{ item.persons }}</p>
                        </li>
                      </ul>
                    </div>
                    <div class="listing-location-details">
                      <div class="listing-price">
                        <span><i class="feather-map-pin"></i></span> {{ item.location }}
                      </div>
                      <div class="listing-price">
                        <h6>{{ item.price }} <span>/ Day</span></h6>
                      </div>
                    </div>
                    <div class="listing-button">
                      <router-link to="listing-details" class="btn btn-order"
                        ><span><i class="feather-calendar me-2"></i></span>Rent
                        Now</router-link
                      >
                    </div>
                  </div>
                  <div class="feature-text">
                    <span :class="item.MakeClass">{{ item.make }}</span>
                  </div>
                </div>
              </div>
            </Slide>
            <template #addons>
              <Navigation />
            </template>
          </Carousel>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { Carousel, Navigation, Slide } from "vue3-carousel";
import Listing from "@/assets/json/listing.json";
import "vue3-carousel/dist/carousel.css";
export default {
  data() {
    return {
      Listing: Listing,
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
          itemsToShow: 3,
          snapAlign: "center",
        },
        1024: {
          itemsToShow: 3,
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
    toggleSelected(item) {
      item.isSelected = !item.isSelected;
    },
    getImageUrl(imageName) {
      return new URL(`/src/assets/img/cars/${imageName}`, import.meta.url).href;
    },
    getImageUrlOne(imageName) {
      return new URL(`/src/assets/img/profiles/${imageName}`, import.meta.url).href;
    },
  },
};
</script>
