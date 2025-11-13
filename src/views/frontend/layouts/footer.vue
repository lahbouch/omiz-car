<template>
  <!-- Footer -->
  <footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top aos" data-aos="fade-down">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <!-- Footer Widget -->
                <div class="footer-widget footer-menu">
                  <h5 class="footer-title">À propos</h5>
                  <ul>
                    <li>
                      <router-link to="/pages/about-us"
                        >Notre entreprise</router-link
                      >
                    </li>
                    <li>
                      <router-link to="/listing/listing-map"
                        >Nos véhicules</router-link
                      >
                    </li>
                    <li>
                      <a href="javascript:void(0)">Devenir partenaire</a>
                    </li>
                    <li>
                      <router-link to="/pages/faq">FAQ</router-link>
                    </li>
                    <li>
                      <router-link to="/contact-us">Contact</router-link>
                    </li>
                  </ul>
                </div>
                <!-- /Footer Widget -->
              </div>
              <div class="col-lg-4 col-md-6">
                <!-- Footer Widget -->
                <div class="footer-widget footer-menu">
                  <h5 class="footer-title">Types de véhicules</h5>
                  <ul>
                    <li>
                      <router-link to="/listing/listing-map"
                        >Tous les véhicules</router-link
                      >
                    </li>
                    <li>
                      <a href="javascript:void(0)">Berlines</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">Citadines</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">SUVs</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">Électriques</a>
                    </li>
                  </ul>
                </div>
                <!-- /Footer Widget -->
              </div>
              <div class="col-lg-4 col-md-6">
                <!-- Footer Widget -->
                <div class="footer-widget footer-menu">
                  <h5 class="footer-title">Liens rapides</h5>
                  <ul>
                    <li>
                      <router-link to="/contact-us"
                        >Réserver maintenant</router-link
                      >
                    </li>
                    <li>
                      <a href="javascript:void(0)">Campagnes</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">Devenir partenaire</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">Offres et promotions</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">Services financiers</a>
                    </li>
                  </ul>
                </div>
                <!-- /Footer Widget -->
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="footer-contact footer-widget">
              <h5 class="footer-title">Informations de contact</h5>
              <div class="footer-contact-info">
                <div class="footer-address">
                  <span><i class="feather-phone-call"></i></span>
                  <div class="addr-info">
                    <a href="tel:+212655449468">+212 655 449 468</a>
                  </div>
                </div>
                <div class="footer-address">
                  <span><i class="feather-mail"></i></span>
                  <div class="addr-info">
                    <a href="mailto:omizcar@gmail.com">omizcar@gmail.com</a>
                  </div>
                </div>
                <div class="update-form">
                  <form action="javascript:;">
                    <span><i class="feather-mail"></i></span>
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Entrez votre email"
                    />
                    <button type="submit" class="btn btn-subscribe">
                      <span><i class="feather-send"></i></span>
                    </button>
                  </form>
                </div>
              </div>
              <div class="footer-social-widget">
                <ul class="nav-social">
                  <li>
                    <a href="javascript:void(0)"
                      ><i
                        class="fa-brands fa-facebook-f fa-facebook fi-icon"
                      ></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"
                      ><i class="fab fa-instagram fi-icon"></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"
                      ><i class="fab fa-behance fi-icon"></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"
                      ><i class="fab fa-twitter fi-icon"></i>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"
                      ><i class="fab fa-linkedin fi-icon"></i
                    ></a>
                  </li>
                </ul>
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
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="copyright-text">
                <p>
                  © {{ new Date().getFullYear() }} Omiz Car. Tous droits
                  réservés.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <!-- Copyright Menu -->
              <div class="copyright-menu">
                <div class="vistors-details">
                  <ul class="d-flex">
                    <li>
                      <a href="javascript:void(0)"
                        ><img
                          class="img-fluid"
                          src="@/assets/img/icons/paypal.svg"
                          alt="Paypal"
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0)"
                        ><img
                          class="img-fluid"
                          src="@/assets/img/icons/visa.svg"
                          alt="Visa"
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0)"
                        ><img
                          class="img-fluid"
                          src="@/assets/img/icons/master.svg"
                          alt="Master"
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0)"
                        ><img
                          class="img-fluid"
                          src="@/assets/img/icons/applegpay.svg"
                          alt="applegpay"
                      /></a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- /Copyright Menu -->
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
