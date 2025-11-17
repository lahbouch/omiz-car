<template>
  <div class="listing-page map-page">
    <layouts-header></layouts-header>
    <breadcrumb :title="title" :text="text" :text1="text1" />

    <!-- Add search filter section -->
    <section class="search-filter-section">
      <div class="container">
        <div class="search-filter-bar">
          <div class="search-input-group">
            <input
              type="text"
              v-model="searchQuery"
              placeholder="Rechercher par nom de voiture, marque, modèle..."
              class="form-control search-input"
              @input="filterCars"
            />
            <button class="search-button" @click="filterCars">
              <i class="feather-search"></i>
            </button>
          </div>
          <div class="filter-results">
            <span>{{ filteredCars.length }} véhicules trouvés</span>
          </div>
        </div>
      </div>
    </section>

    <map-filter></map-filter>

    <section class="section car-listing">
      <div class="container-fluid p-0">
        <div class="row gx-0">
          <!-- Loading State -->
          <div v-if="loading" class="col-12 text-center py-5">
            <div class="spinner-border text-primary" role="status">
              <span class="visually-hidden">Chargement...</span>
            </div>
            <p class="mt-2">Chargement des véhicules...</p>
          </div>

          <!-- Error State -->
          <div v-else-if="error" class="col-12 text-center py-5">
            <div class="alert alert-danger" role="alert">
              {{ error }}
            </div>
            <button class="btn btn-primary" @click="fetchCars">
              Réessayer
            </button>
          </div>

          <!-- Success State -->
          <template v-else>
            <!-- Left Listing -->
            <div class="col-xl-8 col-lg-12">
              <div class="map-list">
                <map-sort></map-sort>

                <div
                  class="listview-car"
                  v-for="item in filteredCars"
                  :key="item.id"
                >
                  <div class="card">
                    <div class="blog-widget d-flex">
                      <div class="blog-img">
                        <router-link
                          :to="`/listing/listing-details/${item.id}`"
                        >
                          <img
                            :src="getImageUrl(item.image)"
                            class="img-fluid"
                            :alt="item.Name"
                          />
                        </router-link>
                        <div class="fav-item justify-content-end">
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
                      </div>

                      <div class="bloglist-content w-100">
                        <div class="card-body">
                          <div class="blog-list-head d-flex">
                            <div class="blog-list-title">
                              <h3>
                                <router-link
                                  :to="`/listing/listing-details/${item.id}`"
                                  >{{ item.Name }}</router-link
                                >
                              </h3>
                              <h6>
                                Catégorie : <span>{{ item.Category }}</span>
                              </h6>
                            </div>
                            <div class="blog-list-rate"></div>
                          </div>

                          <div class="listing-details-group">
                            <ul>
                              <li>
                                <span
                                  ><img
                                    src="@/assets/img/icons/car-parts-01.svg"
                                /></span>
                                <p>{{ item.transmission }}</p>
                              </li>
                              <li>
                                <span
                                  ><img
                                    src="@/assets/img/icons/car-parts-02.svg"
                                /></span>
                                <p>{{ item.mileage }}</p>
                              </li>
                              <li>
                                <span
                                  ><img
                                    src="@/assets/img/icons/car-parts-03.svg"
                                /></span>
                                <p>{{ item.fuel_type }}</p>
                              </li>
                              <li>
                                <span
                                  ><img
                                    src="@/assets/img/icons/car-parts-04.svg"
                                /></span>
                                <p>{{ item.power }}</p>
                              </li>
                              <li>
                                <span
                                  ><img
                                    src="@/assets/img/icons/car-parts-06.svg"
                                /></span>
                                <p>{{ item.persons }}</p>
                              </li>
                              <li>
                                <span
                                  ><img
                                    src="@/assets/img/icons/car-parts-05.svg"
                                /></span>
                                <p>{{ item.year }}</p>
                              </li>
                            </ul>
                          </div>

                          <div class="blog-list-head list-head-bottom d-flex">
                            <div class="blog-list-title">
                              <div class="title-bottom">
                                <div class="car-list-icon">
                                  <img
                                    :src="getImageUrlOne(item.profile_image)"
                                    alt="user"
                                  />
                                </div>
                                <div class="address-info">
                                  <h6>
                                    <i class="feather-map-pin"></i
                                    >{{ item.location }}
                                  </h6>
                                </div>
                                <div class="list-km">
                                  <span class="km-count">
                                    <img
                                      src="@/assets/img/icons/map-pin.svg"
                                    />{{ item.Meter }}
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="listing-button">
                              <button
                                @click="openBookingForm(item)"
                                class="btn btn-order"
                              >
                                <span
                                  ><i class="feather-calendar me-2"></i></span
                                >Réserver
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="feature-text">
                        <span :class="item.MakeClass">{{ item.make }}</span>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Pagination -->
                <div class="blog-pagination">
                  <nav>
                    <ul class="pagination page-item justify-content-center">
                      <li class="previtem">
                        <a class="page-link" href="javascript:;">
                          <i class="fas fa-regular fa-arrow-left me-2"></i>
                          Précédent
                        </a>
                      </li>
                      <li class="justify-content-center pagination-center">
                        <div class="page-group">
                          <ul>
                            <li class="page-item">
                              <a class="page-link" href="javascript:;">1</a>
                            </li>
                            <li class="page-item">
                              <a class="active page-link" href="javascript:;"
                                >2</a
                              >
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:;">3</a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nextlink">
                        <a class="page-link" href="javascript:;"
                          >Suivant
                          <i class="fas fa-regular fa-arrow-right ms-2"></i
                        ></a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>

            <!-- Right Map -->
            <div class="col-xl-4 col-lg-12 map-right grid-list-map">
              <div class="map-listing">
                <GoogleMap
                  api-key="YOUR_GOOGLE_MAPS_API_KEY"
                  :center="center"
                  :zoom="14"
                  style="width: 100%; height: 500px"
                >
                  <Marker
                    v-for="loc in locations"
                    :key="loc.id"
                    :options="{ position: { lat: loc.lat, lng: loc.lng } }"
                    @click="selectMarker(loc)"
                  />
                  <InfoWindow
                    v-if="activeMarker"
                    :options="{
                      position: {
                        lat: activeMarker.lat,
                        lng: activeMarker.lng,
                      },
                    }"
                    @closeclick="activeMarker = null"
                  >
                    <div class="listing-item" style="width: 250px">
                      <div class="listing-img mb-2">
                        <a :href="activeMarker.profile_link">
                          <img
                            :src="activeMarker.carImageUrl"
                            class="img-fluid"
                            alt="car"
                          />
                        </a>
                        <div class="fav-item justify-content-end">
                          <a href="javascript:void(0)" class="fav-icon">
                            <i class="feather-heart"></i>
                          </a>
                        </div>
                        <span class="featured-text">{{
                          activeMarker.car_brand
                        }}</span>
                      </div>
                      <div class="listing-content">
                        <div
                          class="listing-features d-flex justify-content-between align-items-center mb-2"
                        >
                          <div>
                            <h6 class="mb-0">
                              <a :href="activeMarker.profile_link">{{
                                activeMarker.car_name
                              }}</a>
                            </h6>
                            <div class="list-rating text-warning small">
                              <i class="fas fa-star filled"></i>
                              <i class="fas fa-star filled"></i>
                              <i class="fas fa-star filled"></i>
                              <i class="fas fa-star filled"></i>
                              <i class="fas fa-star"></i>
                              <span class="text-muted">
                                {{ activeMarker.reviews }}</span
                              >
                            </div>
                          </div>
                          <img
                            :src="activeMarker.userImageUrl"
                            class="rounded-circle"
                            width="40"
                            :alt="activeMarker.car_name"
                          />
                        </div>
                        <div class="listing-details-group">
                          <ul
                            class="d-flex flex-wrap list-unstyled gap-2 small"
                          >
                            <li>
                              <img :src="activeMarker.partManual" width="16" />
                              Manual
                            </li>
                            <li>
                              <img :src="activeMarker.partKM" width="16" /> 10
                              KM
                            </li>
                            <li>
                              <img :src="activeMarker.partFuel" width="16" />
                              Petrol
                            </li>
                            <li>
                              <img :src="activeMarker.partPower" width="16" />
                              Power
                            </li>
                          </ul>
                        </div>
                        <div
                          class="listing-location-details d-flex justify-content-between mt-2"
                        >
                          <span
                            ><i class="feather-map-pin"></i>
                            {{ activeMarker.address }}</span
                          >
                          <h6 class="text-end mb-0">
                            {{ activeMarker.amount }}<span>/ Jour</span>
                          </h6>
                        </div>
                        <div class="listing-button text-center mt-2">
                          <button
                            @click="openBookingForm(activeMarker)"
                            class="btn btn-sm btn-primary"
                          >
                            <i class="feather-calendar me-1"></i> Réserver
                          </button>
                        </div>
                      </div>
                    </div>
                  </InfoWindow>
                </GoogleMap>
              </div>
            </div>
          </template>
        </div>
      </div>
    </section>

    <!-- Booking Form Modal -->
    <div v-if="showBookingForm" class="booking-modal">
      <div class="booking-modal-content">
        <div class="booking-modal-header">
          <h4>Réserver {{ selectedCar?.Name || selectedCar?.car_name }}</h4>
          <button @click="closeBookingForm" class="close-button">
            &times;
          </button>
        </div>
        <div class="booking-modal-body">
          <BookingForm
            :whatsapp-number="whatsappNumber"
            :car-info="carInfo"
            @booking-sent="handleBookingSent"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import api from "@/services/api";
import layoutsHeader from "@/views/frontend/layouts/layouts-header.vue";
import breadcrumb from "@/components/breadcrumb.vue";
import mapFilter from "@/views/frontend/pages/listing/listing-map/map-filter.vue";
import mapSort from "@/views/frontend/pages/listing/listing-map/map-sort.vue";
import { GoogleMap, Marker, InfoWindow } from "vue3-google-map";
import BookingForm from "@/components/BookingForm.vue";

// Import images at the top level
import carPart01 from "@/assets/img/icons/car-parts-01.svg";
import carPart02 from "@/assets/img/icons/car-parts-02.svg";
import carPart03 from "@/assets/img/icons/car-parts-03.svg";
import carPart04 from "@/assets/img/icons/car-parts-04.svg";
import defaultCarImage from "@/assets/img/car-list-1.jpg";
import defaultProfileImage from "@/assets/img/profiles/avatar-03.jpg";

export default {
  name: "ListingMap",
  components: {
    layoutsHeader,
    breadcrumb,
    mapFilter,
    mapSort,
    GoogleMap,
    Marker,
    InfoWindow,
    BookingForm,
  },
  data() {
    return {
      title: "Liste des voitures",
      text: "Accueil",
      text1: "Liste des voitures",
      loading: false,
      error: null,
      Listing_Map: [],
      center: { lat: 35.7592, lng: -5.834 }, // Tanger coordinates
      locations: [],
      activeMarker: null,
      showBookingForm: false,
      selectedCar: null,
      whatsappNumber: "212618181155",
      searchQuery: "",
      filteredCars: [],
    };
  },
  computed: {
    carInfo() {
      if (!this.selectedCar) return null;

      return {
        id: this.selectedCar.id,
        name: this.selectedCar.Name || this.selectedCar.car_name,
        category: this.selectedCar.Category || this.selectedCar.car_brand,
        image: this.getImageUrl(
          this.selectedCar.image || this.selectedCar.carImageUrl
        ),
        transmission: this.selectedCar.transmission || "Auto",
        fuelType: this.selectedCar.fuel_type || "Essence",
        year: this.selectedCar.year || "2022",
        price: this.selectedCar.amount || "100 DH",
      };
    },
  },
  mounted() {
    this.fetchCars();
  },
  methods: {
    async fetchCars() {
      this.loading = true;
      this.error = null;
      try {
        console.log("Fetching cars from API...");
        const response = await api.getCars();
        console.log("API Response:", response);

        // Check if response is valid
        if (!response || !response.data || !Array.isArray(response.data)) {
          throw new Error("Invalid API response format");
        }

        // Map API data to the format expected by the template
        this.Listing_Map = response.data.map((car) => ({
          id: car.id,
          Name: `${car.make} ${car.model}`,
          Category: car.category?.name || car.make,
          make: car.category?.name || car.make,
          MakeClass: "", // We'll set this based on some criteria
          profile_image: "avatar-03.jpg", // Default profile image
          image: car.image_path || "car-list-1.jpg", // Use car image or default

          transmission: car.transmission || "Auto",
          mileage: car.mileage || "10 KM",
          fuel_type: car.fuel_type || "Essence",
          power: "Power", // Default value
          year: car.year || "2022",
          persons: "5 Personnes", // Default value
          location: "Tanger, Maroc", // Default location
          Meter: car.mileage || "10 KM", // Default value

          isSelected: false,
        }));

        // Initially show all cars
        this.filteredCars = [...this.Listing_Map];

        // Create locations for the map
        this.locations = this.Listing_Map.map((car, index) => ({
          id: car.id,
          lat: 35.7592 + index * 0.01, // Slightly different coordinates for each car
          lng: -5.834 + index * 0.01,
          car_name: car.Name,
          car_brand: car.Category,
          carImageUrl: this.getImageUrl(car.image),
          userImageUrl: this.getImageUrlOne(car.profile_image),
          partManual: carPart01,
          partKM: carPart02,
          partFuel: carPart03,
          partPower: carPart04,
          reviews: car.Reviews, // Use the reviews from the car data
          address: car.location,
          amount: car.price || "100 DH", // Default price
          profile_link: `/listing/listing-details/${car.id}`,
        }));
        console.log("Cars loaded successfully:", this.Listing_Map.length);
      } catch (error) {
        console.error("Error fetching cars:", error);
        // More detailed error message
        if (error.response) {
          // The request was made and the server responded with a status code
          // that falls out of the range of 2xx
          console.error("Error response:", error.response);
          this.error = `Erreur serveur: ${error.response.status} - ${error.response.statusText}`;
        } else if (error.request) {
          // The request was made but no response was received
          console.error("Error request:", error.request);
          this.error =
            "Erreur de connexion au serveur. Veuillez vérifier que le serveur est en cours d'exécution.";
        } else {
          // Something happened in setting up the request that triggered an Error
          console.error("Error message:", error.message);
          this.error = `Erreur lors du chargement des véhicules: ${error.message}`;
        }
      } finally {
        this.loading = false;
      }
    },
    getImageUrl(imagePath) {
      // If it's already a full URL, return as is
      if (imagePath && imagePath.startsWith("http")) {
        return imagePath;
      }

      // If it's a storage path (uploaded images), use the Laravel storage URL
      if (imagePath && imagePath.startsWith("storage/")) {
        return `http://localhost:8000/${imagePath}`;
      }

      // If it's a car-images path (uploaded images), use the Laravel storage URL
      if (imagePath && imagePath.startsWith("car-images/")) {
        return `http://localhost:8000/storage/${imagePath}`;
      }

      // If it's just a filename, construct the path to default images
      if (imagePath) {
        // In a real implementation, you would map the image path to the imported images
        // For now, we'll return the default image
        return defaultCarImage;
      }

      // Default image
      return defaultCarImage;
    },
    getImageUrlOne(imagePath) {
      if (imagePath) {
        // In a real implementation, you would map the image path to the imported images
        // For now, we'll return the default image
        return defaultProfileImage;
      }
      return defaultProfileImage;
    },
    toggleSelected(item) {
      item.isSelected = !item.isSelected;
    },
    selectMarker(location) {
      this.activeMarker = location;
    },
    retryFetch() {
      this.fetchCars();
    },
    openBookingForm(car) {
      this.selectedCar = car;
      this.showBookingForm = true;
      // Prevent background scrolling when modal is open
      document.body.style.overflow = "hidden";
    },
    closeBookingForm() {
      this.showBookingForm = false;
      this.selectedCar = null;
      // Restore background scrolling
      document.body.style.overflow = "auto";
    },
    handleBookingSent(bookingData) {
      console.log("Booking sent:", bookingData);
      // Close the booking form after successful submission
      this.closeBookingForm();
      // You could also show a success message here
    },
    filterCars() {
      if (!this.searchQuery.trim()) {
        // If search query is empty, show all cars
        this.filteredCars = [...this.Listing_Map];
        return;
      }

      const query = this.searchQuery.toLowerCase().trim();
      this.filteredCars = this.Listing_Map.filter((car) => {
        return (
          car.Name.toLowerCase().includes(query) ||
          car.Category.toLowerCase().includes(query) ||
          car.make.toLowerCase().includes(query) ||
          car.transmission.toLowerCase().includes(query) ||
          car.fuel_type.toLowerCase().includes(query) ||
          car.year.includes(query)
        );
      });
    },
  },
};
</script>

<style scoped>
.search-filter-section {
  padding: 20px 0;
  background-color: #f8f9fa;
}

.search-filter-bar {
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
  align-items: center;
  justify-content: space-between;
}

.search-input-group {
  display: flex;
  flex: 1;
  max-width: 600px;
}

.search-input {
  flex: 1;
  padding: 10px 15px;
  border: 1px solid #ddd;
  border-radius: 4px 0 0 4px;
  font-size: 16px;
}

.search-button {
  background-color: #007bff;
  color: white;
  border: none;
  padding: 10px 15px;
  border-radius: 0 4px 4px 0;
  cursor: pointer;
}

.search-button:hover {
  background-color: #0056b3;
}

.filter-results {
  color: #6c757d;
  font-size: 14px;
}

.booking-modal {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;
}

.booking-modal-content {
  background-color: white;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  max-width: 600px;
  width: 90%;
  max-height: 90vh;
  overflow-y: auto;
}

.booking-modal-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  border-bottom: 1px solid #eee;
}

.booking-modal-header h4 {
  margin: 0;
  color: #333;
}

.close-button {
  background: none;
  border: none;
  font-size: 24px;
  cursor: pointer;
  color: #999;
}

.close-button:hover {
  color: #333;
}

.booking-modal-body {
  padding: 20px;
}

@media (max-width: 768px) {
  .search-filter-bar {
    flex-direction: column;
    align-items: stretch;
  }

  .search-input-group {
    max-width: none;
  }
}
</style>
