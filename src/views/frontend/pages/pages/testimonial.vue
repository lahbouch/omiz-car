<template>
  <layouts-header></layouts-header>
  <breadcrumb :title="title" :text="text" :text1="text1" />
  <div class="testimonials-section">
    <div class="container">
      <div class="testimonial-group">
        <div class="row">
          <!-- Col -->
          <div
            v-for="item in testimonial"
            :key="item.id"
            class="col-lg-6 col-12 d-flex"
            data-aos="fade-down"
            data-aos-duration="1200"
            data-aos-delay="100"
          >
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
                  Service exceptionnel d'Omix Car à Tanger ! La voiture était
                  parfaite pour explorer la région. Livraison rapide à
                  l'aéroport et personnel très accueillant. Je recommande
                  vivement pour vos déplacements au Maroc !
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Pagination -->
      <div class="row">
        <div
          class="col-lg-12"
          data-aos="fade-down"
          data-aos-duration="1200"
          data-aos-delay="900"
        >
          <div
            class="pagination d-flex align-items-center justify-content-center"
          >
            <nav>
              <ul class="pagination">
                <li class="previtem">
                  <a class="page-link" href="javascript:;"
                    ><i class="fas fa-regular fa-arrow-left me-2"></i>
                    Précédent</a
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
                          >2 <span class="visually-hidden">(actuel)</span></a
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
                    >Suivant <i class="fas fa-regular fa-arrow-right ms-2"></i
                  ></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!-- /Pagination -->
    </div>
  </div>
  <layout-footer></layout-footer>
</template>
<script>
import testimonial from "@/assets/json/testimonial.json";
export default {
  data() {
    return {
      testimonial: testimonial,
      title: "Témoignages",
      text: "Pages",
      text1: "Avis Clients",
    };
  },
  methods: {
    getImageUrl(imageName) {
      return new URL(`/src/assets/img/profiles/${imageName}`, import.meta.url)
        .href;
    },
  },
};
</script>
