<template>
  <!-- Footer -->
  <footer class="footer footer-three">
    <!-- Footer Top -->
    <div class="footer-top aos" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col-lg-2">
            <div class="footer-contact footer-widget">
              <div class="footer-logo">
                <img
                  src="@/assets/img/logo.png"
                  class="img-fluid aos"
                  alt="logo"
                />
              </div>
              <div class="footer-contact-info">
                <h6>Vous souhaitez réserver un véhicule ? Contactez-nous !</h6>
                <div class="footer-address">
                  <div class="addr-info">
                    <a href="tel:+212655449468"
                      ><i class="bx bxs-phone"></i>+212 655 449 468</a
                    >
                  </div>
                </div>
                <div class="footer-address">
                  <div class="addr-info">
                    <a href="mailto:omizcar@gmail.com"
                      ><i class="bx bxs-envelope"></i>omizcar@gmail.com</a
                    >
                  </div>
                </div>
              </div>
              <ul class="store-icon">
                <li>
                  <a href="javascript:void(0);">
                    <img
                      src="@/assets/img/icons/play-icon.svg"
                      class="img-fluid"
                      alt="logo"
                    />
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <img
                      src="@/assets/img/icons/app-icon.svg"
                      class="img-fluid"
                      alt="logo"
                    />
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
            <!-- Footer Widget -->
            <div class="footer-widget footer-menu">
              <h5 class="footer-title">Entreprise</h5>
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
          <div class="col-lg-2 col-md-6">
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
          <div class="col-lg-2 col-md-6">
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
          <div class="col-lg-2 col-md-6">
            <!-- Footer Widget -->
            <div class="footer-widget footer-menu">
              <h5 class="footer-title">Ressources</h5>
              <ul>
                <li>
                  <router-link to="/pages/faq">Support</router-link>
                </li>
                <li>
                  <a href="javascript:void(0)">Sécurité</a>
                </li>
                <li>
                  <a href="javascript:void(0)">Centre d'aide</a>
                </li>
                <li>
                  <a href="javascript:void(0)">Préférences</a>
                </li>
                <li>
                  <a href="javascript:void(0)">Clients</a>
                </li>
              </ul>
            </div>
            <!-- /Footer Widget -->
          </div>
          <div class="col-lg-2 col-md-6">
            <!-- Footer Widget -->
            <div class="footer-widget footer-menu">
              <h5 class="footer-title">Commencer</h5>
              <ul>
                <li>
                  <router-link to="/pages/about-us">Introduction</router-link>
                </li>
                <li>
                  <a href="javascript:void(0)">Documentation</a>
                </li>
                <li>
                  <a href="javascript:void(0)">Utilisation</a>
                </li>
                <li>
                  <a href="javascript:void(0)">API</a>
                </li>
                <li>
                  <a href="javascript:void(0)">Éléments</a>
                </li>
              </ul>
            </div>
            <!-- /Footer Widget -->
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
            <div class="col-lg-6">
              <div class="copyright-text">
                <p>
                  Copyright © {{ new Date().getFullYear() }}
                  <span>Omiz Car</span>. Tous droits réservés.
                </p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="footer-list">
                <ul>
                  <li class="country-flag">
                    <div class="dropdown">
                      <a
                        class="dropdown-toggle nav-tog"
                        data-bs-toggle="dropdown"
                        href="javascript:void(0);"
                      >
                        <img src="@/assets/img/flags/us.png" alt="Img" />English
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a href="javascript:void(0);" class="dropdown-item">
                          <img
                            src="@/assets/img/flags/fr.png"
                            alt="Img"
                          />French
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                          <img
                            src="@/assets/img/flags/es.png"
                            alt="Img"
                          />Spanish
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                          <img
                            src="@/assets/img/flags/de.png"
                            alt="Img"
                          />German
                        </a>
                      </div>
                    </div>
                  </li>
                  <li class="country-flag lang-nav">
                    <div class="dropdown">
                      <a
                        class="dropdown-toggle nav-tog"
                        data-bs-toggle="dropdown"
                        href="javascript:void(0);"
                      >
                        <i class="bx bx-globe"></i>USD
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a href="javascript:void(0);" class="dropdown-item">
                          <img src="@/assets/img/flags/fr.png" alt="Img" />Euro
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                          <img src="@/assets/img/flags/es.png" alt="Img" />INR
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <ul class="social-icon">
                      <li>
                        <a href="javascript:void(0)"
                          ><i class="fa-brands fa-facebook-f fa-facebook"></i
                        ></a>
                      </li>
                      <li>
                        <a href="javascript:void(0)"
                          ><i class="fab fa-instagram"></i
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
                  </li>
                </ul>
              </div>
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
