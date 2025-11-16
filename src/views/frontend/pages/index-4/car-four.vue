<template>
  <!-- Car Section -->
  <section class="car-section">
    <div class="container">
      <div class="section-heading heading-four" data-aos="fade-down">
        <h2>Découvrez notre flotte de 15 véhicules économiques</h2>
        <p>Parfaitement entretenus pour votre confort et votre sécurité</p>
      </div>

      <div class="row">
        <!-- Car List -->
        <div
          class="col-lg-4 col-md-6"
          v-for="item in cars"
          :key="item.id"
          data-aos="fade-down"
        >
          <div class="listing-item listing-item-two">
            <div class="listing-img">
              <router-link
                :to="`/listing/listing-details/${item.id}`"
                v-if="getCarImages(item).length === 1"
              >
                <img
                  :src="getImageUrl(getCarImages(item)[0])"
                  class="img-fluid"
                  alt="Car"
                />
              </router-link>
              <div class="img-slider owl-carousel" v-else>
                <Carousel
                  :wrap-around="true"
                  :settings="settings"
                  :breakpoints="breakpoints"
                >
                  <Slide
                    v-for="(image, index) in getCarImages(item)"
                    :key="index"
                  >
                    <div class="slide-images">
                      <router-link :to="`/listing/listing-details/${item.id}`">
                        <img
                          :src="getImageUrl(image)"
                          class="img-fluid"
                          alt="Car"
                        />
                      </router-link>
                    </div>
                  </Slide>
                  <template #addons>
                    <Pagination />
                  </template>
                </Carousel>
              </div>
              <div class="fav-item">
                <div class="d-flex align-items-center gap-2">
                  <span class="featured-text">Populaire</span>
                  <span
                    class="availability"
                    :class="item.available ? 'available' : 'not-available'"
                  >
                    {{ item.available ? "Available" : "Not Available" }}
                  </span>
                </div>
                <a href="javascript:void(0)" class="fav-icon selected">
                  <i class="feather-heart"></i>
                </a>
              </div>
              <span class="location"
                ><i class="bx bx-map me-1"></i>Tanger, Morocco (50 km max)</span
              >
            </div>
            <div class="listing-content">
              <div
                class="listing-features d-flex align-items-center justify-content-between"
              >
                <div class="list-rating">
                  <h3 class="listing-title">
                    <router-link :to="`/listing/listing-details/${item.id}`">
                      {{ item.make }} {{ item.model }}
                    </router-link>
                  </h3>
                  <div class="list-rating">
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                    <span
                      >(4.0)
                      {{ Math.floor(Math.random() * 100) + 50 }} Reviews</span
                    >
                  </div>
                </div>
                <div>
                  <h4 class="price">
                    {{ item.daily_rate }} MAD <span>/ Day</span>
                  </h4>
                </div>
              </div>
              <div class="listing-details-group">
                <ul>
                  <li>
                    <img src="@/assets/img/icons/car-parts-01.svg" alt="Auto" />
                    <p>{{ item.transmission || "Auto" }}</p>
                  </li>
                  <li>
                    <img
                      src="@/assets/img/icons/car-parts-02.svg"
                      alt="10 KM"
                    />
                    <p>{{ item.mileage || "10 KM" }}</p>
                  </li>
                  <li>
                    <img
                      src="@/assets/img/icons/car-parts-03.svg"
                      alt="Petrol"
                    />
                    <p>{{ item.fuel_type || "Petrol" }}</p>
                  </li>
                  <li>
                    <img src="@/assets/img/icons/car-parts-05.svg" alt="2018" />
                    <p>{{ item.year }}</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- /Car List -->
      </div>

      <div class="view-all-btn text-center aos" data-aos="fade-down">
        <router-link
          to="/listing/listing-grid"
          class="btn btn-secondary d-inline-flex align-items-center"
          >Voir toutes les voitures<i class="bx bx-right-arrow-alt ms-1"></i
        ></router-link>
      </div>
    </div>
  </section>
  <!-- /Car Section -->
</template>
<script>
import { Carousel, Pagination, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";
import api from "@/services/api";

export default {
  data() {
    return {
      cars: [],
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
          snapAlign: "center",
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
    getImageUrl(imagePath) {
      // If it's already a full URL, return as is
      if (imagePath && imagePath.startsWith("http")) {
        return imagePath;
      }

      // If it's a storage path (uploaded images), use the Laravel storage URL
      if (imagePath && imagePath.startsWith("storage/")) {
        return `http://localhost:8001/${imagePath}`;
      }

      // If it's a car-images path (uploaded images), use the Laravel storage URL
      if (imagePath && imagePath.startsWith("car-images/")) {
        return `http://localhost:8001/storage/${imagePath}`;
      }

      // If it's just a filename, construct the path to default images
      if (imagePath) {
        return new URL(
          `/src/assets/admin/img/car/${imagePath}`,
          import.meta.url
        ).href;
      }

      // Default image
      return new URL("@/assets/img/car-default.jpg", import.meta.url).href;
    },
    getCarImages(car) {
      // Return an array of image paths for the car
      if (car.image_path) {
        return [car.image_path];
      }
      return ["car-default.jpg"];
    },
    async fetchCars() {
      try {
        const response = await api.getCars();
        // Limit to 6 cars for the homepage display
        this.cars = response.data.slice(0, 6);
      } catch (error) {
        console.error("Error fetching cars:", error);
        // Fallback to static data if API fails
        this.cars = [
          {
            id: 1,
            make: "Toyota",
            model: "Camry SE 350",
            year: "2018",
            daily_rate: "160",
            available: true,
            transmission: "Auto",
            mileage: "10 KM",
            fuel_type: "Diesel",
            image_path: "car-11.jpg",
          },
        ];
      }
    },
  },
  async mounted() {
    await this.fetchCars();
  },
};
</script>
