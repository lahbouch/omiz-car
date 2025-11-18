<template>
  <footer class="footer-two">
    <div class="sec-bg">
      <img src="@/assets/img/bg/sec-bg-wave.png" alt="Img" />
      <img src="@/assets/img/bg/anchor-img-02.png" alt="Img" />
    </div>
    <div class="container">
      <div class="footer-top">
        <div class="row">
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="footer-widget">
              <div class="widget-title">
                <h4>{{ $t("Company") }}</h4>
                <ul class="footer-links">
                  <li>
                    <router-link to="/pages/about-us"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("Our Company") }}</router-link
                    >
                  </li>
                  <li>
                    <router-link to="/listing/listing-map"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("Our Vehicles") }}</router-link
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("Become a Partner") }}</a
                    >
                  </li>
                  <li>
                    <router-link to="/pages/faq"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("FAQ") }}</router-link
                    >
                  </li>
                  <li>
                    <router-link to="/contact-us"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("Contact") }}</router-link
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="footer-widget">
              <div class="widget-title">
                <h4>{{ $t("Vehicle Types") }}</h4>
                <ul class="footer-links">
                  <li>
                    <router-link to="/listing/listing-map"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("All Vehicles") }}</router-link
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fas fa-chevron-right"></i>{{ $t("Sedans") }}</a
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("City Cars") }}</a
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fas fa-chevron-right"></i>{{ $t("SUVs") }}</a
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("Electric") }}</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="footer-widget">
              <div class="widget-title">
                <h4>{{ $t("Quick Links") }}</h4>
                <ul class="footer-links">
                  <li>
                    <router-link to="/contact-us"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("Book Now") }}</router-link
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("Campaigns") }}</a
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("Become a Partner") }}</a
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("Offers and Promotions") }}</a
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("Financial Services") }}</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="footer-widget">
              <div class="widget-title">
                <h4>{{ $t("Resources") }}</h4>
                <ul class="footer-links">
                  <li>
                    <router-link to="/pages/faq"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("Support") }}</router-link
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("Security") }}</a
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("Help Center") }}</a
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("Preferences") }}</a
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("Clients") }}</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="footer-widget">
              <div class="widget-title">
                <h4>{{ $t("Get Started") }}</h4>
                <ul class="footer-links">
                  <li>
                    <router-link to="/pages/about-us"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("Introduction") }}</router-link
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("Documentation") }}</a
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fas fa-chevron-right"></i>{{ $t("Usage") }}</a
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fas fa-chevron-right"></i>{{ $t("API") }}</a
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fas fa-chevron-right"></i
                      >{{ $t("Elements") }}</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="footer-widget">
              <div class="widget-title">
                <h4>{{ $t("24/7 Support") }}</h4>
                <ul class="footer-address">
                  <li>
                    {{ $t("Want to book a vehicle? Contact us!") }}
                  </li>
                  <li>{{ $t("Contact") }}: +212 655 449 468</li>
                  <li>{{ $t("Emergency") }}: +212 666 609 899</li>
                  <li>Email: omizcar@gmail.com</li>
                  <li class="social-link">
                    <ul>
                      <li>
                        <a href="javascript:void(0);"
                          ><i class="fa-brands fa-facebook-f"></i
                        ></a>
                      </li>
                      <li>
                        <a href="javascript:void(0);"
                          ><i class="fab fa-instagram"></i
                        ></a>
                      </li>
                      <li>
                        <a href="javascript:void(0);"
                          ><i class="fab fa-linkedin-in"></i
                        ></a>
                      </li>
                      <li>
                        <a href="javascript:void(0);"
                          ><i class="fab fa-twitter"></i
                        ></a>
                      </li>
                      <li>
                        <a href="javascript:void(0);"
                          ><i class="fab fa-youtube"></i
                        ></a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <div class="container">
        <div class="copyright">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="copyright-text">
                <p>
                  {{ $t("Copyright") }} © {{ new Date().getFullYear() }}
                  <span>Omiz Car</span>. {{ $t("All Rights Reserved") }}.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="footer-list">
                <ul>
                  <li>
                    <router-link to="/pages/privacy-policy">{{
                      $t("Privacy Policy")
                    }}</router-link>
                  </li>
                  <li>
                    <router-link to="/pages/terms-condition">{{
                      $t("Terms & Conditions")
                    }}</router-link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Footer Bottom -->
  </footer>
</template>
