<template>
  <layouts-header></layouts-header>
  <breadcrumb :title="title" :text="text" :text1="text1" />
  <listing-head></listing-head>
  <section class="section product-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <listing-carphoto></listing-carphoto>

          <listing-description></listing-description>

          <!--Listing Features Section-->
          <listing-specifications></listing-specifications>

          <listing-features></listing-features>

          <!--/Listing Features Section-->

          <!-- Gallery -->
          <listing-gallery></listing-gallery>
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

          <listing-review></listing-review>
        </div>
        <listingdetails-sidebar></listingdetails-sidebar>
      </div>
      <listing></listing>
    </div>
  </section>
  <layout-footer></layout-footer>
  <listing-modal></listing-modal>
</template>
<script>
export default {
  data() {
    return {
      title: "Détails du véhicule",
      text: "Listings",
      text1: "Détails du véhicule",
    };
  },
};
</script>
