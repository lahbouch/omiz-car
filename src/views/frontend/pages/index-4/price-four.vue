<template>
  <!-- Support Section -->
  <section class="support-section">
    <div
      class="horizontal-slide d-flex"
      data-direction="left"
      data-speed="slow"
    >
      <div class="slide-list d-flex">
        <div class="support-item">
          <h2>{{ $t("Best rate guaranteed") }}</h2>
        </div>
        <div class="support-item">
          <h2>{{ $t("Free cancellation") }}</h2>
        </div>
        <div class="support-item">
          <h2>{{ $t("Best security") }}</h2>
        </div>
        <div class="support-item">
          <h2>{{ $t("Recent fleet") }}</h2>
        </div>
        <div class="support-item">
          <h2>{{ $t("Proven reliability") }}</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- /Support Section -->

  <!-- FAQ Section -->
  <section class="faq-section-four pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="section-heading heading-four" data-aos="fade-down">
            <h2>{{ $t("Frequently asked questions") }}</h2>
            <p>
              {{ $t("Find the answers to your questions about our services") }}
            </p>
          </div>
          <div class="accordion faq-accordion" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqOne"
                  aria-expanded="true"
                  aria-controls="faqOne"
                >
                  {{ $t("What age must I be to rent a car?") }}
                </button>
              </h2>
              <div
                id="faqOne"
                class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body">
                  <p>
                    {{
                      $t(
                        "To rent a car with Omiz Car, you must be at least 18 years old and have a valid driver's license. A deposit may be required depending on the type of vehicle chosen."
                      )
                    }}
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqTwo"
                  aria-expanded="true"
                  aria-controls="faqTwo"
                >
                  {{ $t("What documents do I need to rent a car?") }}
                </button>
              </h2>
              <div
                id="faqTwo"
                class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body">
                  <p>
                    {{
                      $t(
                        "You must present a valid driver's license and an identity document (national ID card or passport). A deposit may be required depending on the type of vehicle."
                      )
                    }}
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqThree"
                  aria-expanded="true"
                  aria-controls="faqThree"
                >
                  {{ $t("What types of vehicles are available for rent?") }}
                </button>
              </h2>
              <div
                id="faqThree"
                class="accordion-collapse collapse show"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body">
                  <p>
                    {{
                      $t(
                        "We offer a fleet of 15 recent economical vehicles (2018-2022), perfectly maintained for your comfort and safety in Tangier, Tetouan and surroundings."
                      )
                    }}
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqFour"
                  aria-expanded="true"
                  aria-controls="faqFour"
                >
                  {{ $t("Can I rent a car with a debit card?") }}
                </button>
              </h2>
              <div
                id="faqFour"
                class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body">
                  <p>
                    {{
                      $t(
                        "Yes, we accept debit cards with an additional deposit. The card must be in the name of the primary driver."
                      )
                    }}
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqFive"
                  aria-expanded="true"
                  aria-controls="faqFive"
                >
                  {{ $t("What is your fuel policy?") }}
                </button>
              </h2>
              <div
                id="faqFive"
                class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body">
                  <p>
                    {{
                      $t(
                        "The car must be returned with the same fuel level as at the time of pickup. We provide a full tank at departure."
                      )
                    }}
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqSix"
                  aria-expanded="true"
                  aria-controls="faqSix"
                >
                  {{
                    $t("Can I add additional drivers to my rental contract?")
                  }}
                </button>
              </h2>
              <div
                id="faqSix"
                class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body">
                  <p>
                    {{
                      $t(
                        "Yes, you can add additional drivers for a supplement. Each driver must present a valid driver's license."
                      )
                    }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer footer-four">
    <!-- Footer Top -->
    <div class="footer-top aos" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="footer-contact footer-widget">
              <div class="footer-logo">
                <img
                  src="@/assets/img/logo-white.png"
                  class="img-fluid aos"
                  alt="logo"
                />
              </div>
              <div class="footer-contact-info">
                <p>
                  {{
                    $t(
                      "Omiz Car offers you a fleet of 15 economical vehicles perfectly maintained to meet all your travel needs in Tangier, Tetouan and surroundings."
                    )
                  }}
                </p>
              </div>
              <!-- <div class="d-flex align-items-center gap-1 app-icon">
                <a href="javascript:void(0);">
                  <img
                    src="/src/assets/img/icons/gpay.svg"
                    class="img-fluid"
                    alt="logo"
                  />
                </a>
                <a href="javascript:void(0);">
                  <img
                    src="/src/assets/img/icons/app.svg"
                    class="img-fluid"
                    alt="logo"
                  />
                </a>
              </div> -->
              <ul class="social-icon">
                <li>
                  <a href="javascript:void(0)"
                    ><i class="fa-brands fa-facebook-f"></i
                  ></a>
                </li>
                <li>
                  <a href="javascript:void(0)"
                    ><i class="fa-brands fa-instagram"></i
                  ></a>
                </li>
                <li>
                  <a href="javascript:void(0)"
                    ><i class="fab fa-behance"></i
                  ></a>
                </li>
                <li>
                  <a href="javascript:void(0)"
                    ><i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)"
                    ><i class="fab fa-linkedin"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <!-- Footer Widget -->
                <div class="footer-widget footer-menu">
                  <h5 class="footer-title">{{ $t("Quick Links") }}</h5>
                  <ul>
                    <li>
                      <a href="javascript:void(0)">{{ $t("My Account") }}</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">{{ $t("Campaigns") }}</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">{{
                        $t("Become a Partner")
                      }}</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">{{
                        $t("Offers and Promotions")
                      }}</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">{{
                        $t("Financial Services")
                      }}</a>
                    </li>
                  </ul>
                </div>
                <!-- /Footer Widget -->
              </div>
              <div class="col-lg-4 col-md-6">
                <!-- Footer Widget -->
                <div class="footer-widget footer-menu">
                  <h5 class="footer-title">{{ $t("Pages") }}</h5>
                  <ul>
                    <li>
                      <router-link to="/pages/about-us">{{
                        $t("About Us")
                      }}</router-link>
                    </li>
                    <li>
                      <a href="javascript:void(0)">{{
                        $t("Become a Partner")
                      }}</a>
                    </li>
                    <li>
                      <router-link to="/pages/faq">{{ $t("FAQ") }}</router-link>
                    </li>
                    <li>
                      <router-link to="/pages/testimonial">{{
                        $t("Testimonials")
                      }}</router-link>
                    </li>
                    <li>
                      <router-link to="/contact-us">{{
                        $t("Contact")
                      }}</router-link>
                    </li>
                  </ul>
                </div>
                <!-- /Footer Widget -->
              </div>
              <div class="col-lg-4 col-md-6">
                <!-- Footer Widget -->
                <div class="footer-widget footer-menu">
                  <h5 class="footer-title">{{ $t("Useful Links") }}</h5>
                  <ul>
                    <li>
                      <a href="javascript:void(0)">{{ $t("My Account") }}</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">{{ $t("Campaigns") }}</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">{{
                        $t("Become a Partner")
                      }}</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">{{
                        $t("Offers and Promotions")
                      }}</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">{{
                        $t("Financial Services")
                      }}</a>
                    </li>
                  </ul>
                </div>
                <!-- /Footer Widget -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Footer Top -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <div class="container">
        <!-- Copyright -->
        <div class="copyright">
          <div class="row align-items-center row-gap-3">
            <div class="col-lg-4">
              <div class="copyright-text">
                <p>
                  {{ $t("Copyright") }} &copy; 2025 Omiz Car.
                  {{ $t("All Rights Reserved") }}.
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <!-- <div class="payment-list">
                <a href="javascript:void(0);">
                  <img src="/src/assets/img/icons/payment-01.svg" alt="img" />
                </a>
                <a href="javascript:void(0);">
                  <img src="/src/assets/img/icons/payment-02.svg" alt="img" />
                </a>
                <a href="javascript:void(0);">
                  <img src="/src/assets/img/icons/payment-03.svg" alt="img" />
                </a>
              </div> -->
            </div>
            <div class="col-lg-4">
              <ul class="privacy-link">
                <li>
                  <router-link to="/pages/privacy-policy">{{
                    $t("Privacy")
                  }}</router-link>
                </li>
                <li>
                  <router-link to="/pages/terms-condition">{{
                    $t("Terms and Conditions")
                  }}</router-link>
                </li>
                <li>
                  <router-link to="/pages/refund-policy">{{
                    $t("Refund Policy")
                  }}</router-link>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /Copyright -->
      </div>
    </div>
    <!-- /Footer Bottom -->
  </footer>
  <!-- /Footer -->
</template>
