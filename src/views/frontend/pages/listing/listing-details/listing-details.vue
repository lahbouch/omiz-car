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
              <h4>Video</h4>
            </div>
            <div class="short-video">
              <img class="img-fluid" alt="Image" src="@/assets/img/video-img.jpg" />
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
              <h4>FAQ’s</h4>
            </div>
            <div class="faq-info">
              <div class="faq-card">
                <h4 class="faq-title">
                  <a
                    class="collapsed"
                    data-bs-toggle="collapse"
                    href="#faqOne"
                    aria-expanded="false"
                    >How old do I need to be to rent a car?</a
                  >
                </h4>
                <div id="faqOne" class="card-collapse collapse">
                  <p>
                    We offer a diverse fleet of vehicles to suit every need, including
                    compact cars, sedans, SUVs and luxury vehicles. You can browse our
                    selection online or contact us for assistance in choosing the right
                    vehicle for you
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
                    >What documents do I need to rent a car?</a
                  >
                </h4>
                <div id="faqTwo" class="card-collapse collapse">
                  <p>
                    We offer a diverse fleet of vehicles to suit every need, including
                    compact cars, sedans, SUVs and luxury vehicles. You can browse our
                    selection online or contact us for assistance in choosing the right
                    vehicle for you
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
                    >What types of vehicles are available for rent?</a
                  >
                </h4>
                <div id="faqThree" class="card-collapse collapse">
                  <p>
                    We offer a diverse fleet of vehicles to suit every need, including
                    compact cars, sedans, SUVs and luxury vehicles. You can browse our
                    selection online or contact us for assistance in choosing the right
                    vehicle for you
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
                    >Can I rent a car with a debit card?</a
                  >
                </h4>
                <div id="faqFour" class="card-collapse collapse">
                  <p>
                    We offer a diverse fleet of vehicles to suit every need, including
                    compact cars, sedans, SUVs and luxury vehicles. You can browse our
                    selection online or contact us for assistance in choosing the right
                    vehicle for you
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- /FAQ -->

          <!-- Policies -->
          <div class="review-sec">
            <div class="review-header">
              <h4>Policies</h4>
            </div>
            <div class="policy-list">
              <div class="policy-item">
                <div class="policy-info">
                  <h6>Cancellation Charges</h6>
                  <p>Cancellation charges will be applied as per the policy</p>
                </div>
                <router-link to="/pages/privacy-policy">Know More</router-link>
              </div>
              <div class="policy-item">
                <div class="policy-info">
                  <h6>Policy</h6>
                  <p>
                    I hereby agree to the terms and conditions of the Lease Agreement with
                    Host
                  </p>
                </div>
                <router-link to="/pages/privacy-policy">View Details</router-link>
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
      title: "Chevrolet Camaro",
      text: "Listings",
      text1: "Chevrolet Camaro",
    };
  },
};
</script>
