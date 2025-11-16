<template>
  <layouts-header></layouts-header>
  <breadcrumb :title="title" :text="text" :text1="text1" />
  <div v-if="loading" class="container">
    <div class="text-center py-5">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
  </div>
  <div v-else-if="error" class="container">
    <div class="alert alert-danger">
      {{ error }}
    </div>
  </div>
  <section v-else class="section product-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <!-- Car Images -->
          <div class="product-img">
            <div class="image-slider owl-carousel">
              <Carousel
                :wrap-around="true"
                :settings="settings"
                :breakpoints="breakpoints"
              >
                <Slide v-for="(image, index) in getCarImages(car)" :key="index">
                  <div class="slide-images">
                    <img
                      :src="getImageUrl(image)"
                      class="img-fluid"
                      :alt="`${car.make} ${car.model}`"
                    />
                  </div>
                </Slide>
                <template #addons>
                  <Navigation />
                </template>
              </Carousel>
            </div>
          </div>
          <!-- /Car Images -->

          <!-- Car Description -->
          <div class="review-sec">
            <div class="review-header">
              <h4>{{ car.make }} {{ car.model }}</h4>
              <p>{{ car.year }} • {{ car.category?.name || "Économique" }}</p>
            </div>
            <div class="review-body">
              <p>
                {{ car.features || "Car features description would go here." }}
              </p>
            </div>
          </div>
          <!-- /Car Description -->

          <!--Listing Features Section-->
          <div class="review-sec">
            <div class="review-header">
              <h4>Caractéristiques</h4>
            </div>
            <div class="listing-feature">
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div class="feature-box">
                    <span><i class="bx bx-gas-pump"></i></span>
                    <h6>Carburant</h6>
                    <p>{{ car.fuel_type || "Essence" }}</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="feature-box">
                    <span><i class="bx bx-car"></i></span>
                    <h6>Transmission</h6>
                    <p>{{ car.transmission || "Automatique" }}</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="feature-box">
                    <span><i class="bx bx-cog"></i></span>
                    <h6>Année</h6>
                    <p>{{ car.year }}</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="feature-box">
                    <span><i class="bx bx-palette"></i></span>
                    <h6>Couleur</h6>
                    <p>{{ car.color || "Blanc" }}</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="feature-box">
                    <span><i class="bx bx-map"></i></span>
                    <h6>Localisation</h6>
                    <p>Tanger, Morocco</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="feature-box">
                    <span><i class="bx bx-tachometer"></i></span>
                    <h6>Kilométrage</h6>
                    <p>{{ car.mileage || "10,000 KM" }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/Listing Features Section-->

          <!-- Gallery -->
          <div class="review-sec mb-0">
            <div class="review-header">
              <h4>Galerie</h4>
            </div>
            <div class="gallery-slider owl-carousel">
              <div class="gallery-img">
                <img
                  src="@/assets/img/cars/car-01.jpg"
                  class="img-fluid"
                  alt="Gallery"
                />
              </div>
              <div class="gallery-img">
                <img
                  src="@/assets/img/cars/car-02.jpg"
                  class="img-fluid"
                  alt="Gallery"
                />
              </div>
              <div class="gallery-img">
                <img
                  src="@/assets/img/cars/car-03.jpg"
                  class="img-fluid"
                  alt="Gallery"
                />
              </div>
              <div class="gallery-img">
                <img
                  src="@/assets/img/cars/car-04.jpg"
                  class="img-fluid"
                  alt="Gallery"
                />
              </div>
            </div>
          </div>
          <!-- /Gallery -->

          <!-- Video -->
          <div class="review-sec mb-0">
            <div class="review-header">
              <h4>Vidéo</h4>
            </div>
            <div class="short-video">
              <img
                class="img-fluid"
                alt="Image"
                src="@/assets/img/video-img.jpg"
              />
              <a
                href="https://www.youtube.com/embed/ExJZAegsOis"
                data-fancybox="video"
                class="video-icon"
              >
                <i class="bx bx-play"></i>
              </a>
            </div>
          </div>
          <!-- /Video -->

          <!-- FAQ -->
          <div class="review-sec faq-feature">
            <div class="review-header">
              <h4>FAQ</h4>
            </div>
            <div class="faq-info">
              <div class="faq-card">
                <h4 class="faq-title">
                  <a
                    class="collapsed"
                    data-bs-toggle="collapse"
                    href="#faqOne"
                    aria-expanded="false"
                    >Quel âge dois-je avoir pour louer une voiture ?</a
                  >
                </h4>
                <div id="faqOne" class="card-collapse collapse">
                  <p>
                    Pour louer une voiture chez Omiz Car, vous devez avoir au
                    moins 18 ans et posséder un permis de conduire valide. Un
                    dépôt de garantie peut être requis selon le type de
                    véhicule.
                  </p>
                </div>
              </div>
              <div class="faq-card">
                <h4 class="faq-title">
                  <a
                    class="collapsed"
                    data-bs-toggle="collapse"
                    href="#faqTwo"
                    aria-expanded="false"
                    >De quels documents ai-je besoin pour louer une voiture ?</a
                  >
                </h4>
                <div id="faqTwo" class="card-collapse collapse">
                  <p>
                    Vous devez présenter un permis de conduire valide et une
                    pièce d'identité. Un dépôt de garantie peut être requis
                    selon le type de véhicule.
                  </p>
                </div>
              </div>
              <div class="faq-card">
                <h4 class="faq-title">
                  <a
                    class="collapsed"
                    data-bs-toggle="collapse"
                    href="#faqThree"
                    aria-expanded="false"
                    >Quels types de véhicules sont disponibles à la location
                    ?</a
                  >
                </h4>
                <div id="faqThree" class="card-collapse collapse">
                  <p>
                    Nous proposons une flotte de 15 véhicules économiques
                    récents (2018-2022), parfaitement entretenus pour votre
                    confort et votre sécurité.
                  </p>
                </div>
              </div>
              <div class="faq-card">
                <h4 class="faq-title">
                  <a
                    class="collapsed"
                    data-bs-toggle="collapse"
                    href="#faqFour"
                    aria-expanded="false"
                    >Puis-je louer une voiture avec une carte de débit ?</a
                  >
                </h4>
                <div id="faqFour" class="card-collapse collapse">
                  <p>
                    Oui, nous acceptons les cartes de débit avec un dépôt de
                    garantie supplémentaire. La carte doit être au nom du
                    conducteur principal.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- /FAQ -->

          <!-- Policies -->
          <div class="review-sec">
            <div class="review-header">
              <h4>Politiques</h4>
            </div>
            <div class="policy-list">
              <div class="policy-item">
                <div class="policy-info">
                  <h6>Frais d'annulation</h6>
                  <p>
                    Les frais d'annulation seront appliqués selon la politique
                  </p>
                </div>
                <router-link to="/pages/privacy-policy"
                  >En savoir plus</router-link
                >
              </div>
              <div class="policy-item">
                <div class="policy-info">
                  <h6>Politique</h6>
                  <p>
                    J'accepte par la présente les termes et conditions du
                    contrat de location avec Omiz Car
                  </p>
                </div>
                <router-link to="/pages/privacy-policy"
                  >Voir les détails</router-link
                >
              </div>
            </div>
          </div>
          <!-- /Policies -->

          <div class="review-sec">
            <div class="review-header">
              <h4>Avis des clients</h4>
            </div>
            <div class="review-list">
              <div class="review-item">
                <div class="review-img">
                  <img src="@/assets/img/profiles/avatar-02.jpg" alt="Avatar" />
                </div>
                <div class="review-content">
                  <h6>John Doe <span>30 Sep 2023</span></h6>
                  <div class="rating">
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <p>
                    Excellent service! La voiture était propre et en parfait
                    état. Le processus de location était simple et rapide.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="booking-widget">
              <div class="widget-head">
                <h4>{{ car.daily_rate }} MAD<span>/jour</span></h4>
              </div>
              <div class="widget-body">
                <div class="booking-form">
                  <div class="field-group">
                    <div class="input-block">
                      <label>Date de début</label>
                      <input
                        type="text"
                        class="form-control datetimepicker"
                        placeholder="Sélectionnez une date"
                      />
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="input-block">
                      <label>Date de fin</label>
                      <input
                        type="text"
                        class="form-control datetimepicker"
                        placeholder="Sélectionnez une date"
                      />
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="input-block">
                      <label>Lieu de prise en charge</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Entrez le lieu"
                      />
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="input-block">
                      <label>Lieu de retour</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Entrez le lieu"
                      />
                    </div>
                  </div>
                  <div class="field-group mb-0">
                    <button class="btn btn-primary w-100">
                      Réserver maintenant
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card product-card">
              <div class="card-body">
                <div class="card-title">
                  <h5>Caractéristiques</h5>
                </div>
                <ul class="card-list">
                  <li>
                    <span><i class="bx bx-gas-pump"></i> Carburant</span>
                    <span>{{ car.fuel_type || "Essence" }}</span>
                  </li>
                  <li>
                    <span><i class="bx bx-car"></i> Transmission</span>
                    <span>{{ car.transmission || "Automatique" }}</span>
                  </li>
                  <li>
                    <span><i class="bx bx-cog"></i> Année</span>
                    <span>{{ car.year }}</span>
                  </li>
                  <li>
                    <span><i class="bx bx-palette"></i> Couleur</span>
                    <span>{{ car.color || "Blanc" }}</span>
                  </li>
                  <li>
                    <span><i class="bx bx-tachometer"></i> Kilométrage</span>
                    <span>{{ car.mileage || "10,000 KM" }}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <layout-footer></layout-footer>
</template>
<script>
import { Carousel, Navigation, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";
import api from "@/services/api";

export default {
  data() {
    return {
      title: "Détails du véhicule",
      text: "Listings",
      text1: "Détails du véhicule",
      car: {},
      loading: true,
      error: null,
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
    Navigation,
  },
  methods: {
    getImageUrl(imageName) {
      // If it's already a full URL, return as is
      if (
        imageName &&
        (imageName.startsWith("http") || imageName.startsWith("/"))
      ) {
        return imageName;
      }

      // If it's just a filename, construct the path
      if (imageName) {
        return new URL(
          `/src/assets/admin/img/car/${imageName}`,
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
    async fetchCar() {
      try {
        const carId = this.$route.params.id;
        if (!carId) {
          this.error = "ID de voiture non spécifié";
          return;
        }

        const response = await api.getCar(carId);
        this.car = response.data;
      } catch (error) {
        console.error("Error fetching car:", error);
        this.error = "Erreur lors du chargement des détails de la voiture";
      } finally {
        this.loading = false;
      }
    },
  },
  async mounted() {
    await this.fetchCar();
  },
  watch: {
    $route(to, from) {
      // Reload car data when route changes
      if (to.params.id !== from.params.id) {
        this.loading = true;
        this.error = null;
        this.fetchCar();
      }
    },
  },
};
</script>
