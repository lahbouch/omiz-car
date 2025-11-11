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
          <h2>Meilleur tarif garanti</h2>
        </div>
        <div class="support-item">
          <h2>Annulation gratuite</h2>
        </div>
        <div class="support-item">
          <h2>Meilleure sécurité</h2>
        </div>
        <div class="support-item">
          <h2>Flotte récente</h2>
        </div>
        <div class="support-item">
          <h2>Fiabilité prouvée</h2>
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
            <h2>Questions fréquemment posées</h2>
            <p>Trouvez les réponses à vos questions sur nos services</p>
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
                  Quel âge dois-je avoir pour louer une voiture ?
                </button>
              </h2>
              <div
                id="faqOne"
                class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body">
                  <p>
                    Pour louer une voiture avec Omiz Car, vous devez avoir au
                    moins 18 ans et posséder un permis de conduire valide. Un
                    dépôt de garantie peut être requis selon le type de véhicule
                    choisi.
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
                  De quels documents ai-je besoin pour louer une voiture ?
                </button>
              </h2>
              <div
                id="faqTwo"
                class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body">
                  <p>
                    Vous devez présenter un permis de conduire valide et une
                    pièce d'identité (carte nationale ou passeport). Un dépôt de
                    garantie peut être requis selon le type de véhicule.
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
                  Quels types de véhicules sont disponibles à la location ?
                </button>
              </h2>
              <div
                id="faqThree"
                class="accordion-collapse collapse show"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body">
                  <p>
                    Nous proposons une flotte de 15 véhicules économiques
                    récents (2018-2022), parfaitement entretenus pour votre
                    confort et votre sécurité à Tanger, Tétouan et environs.
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
                  Puis-je louer une voiture avec une carte de débit ?
                </button>
              </h2>
              <div
                id="faqFour"
                class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body">
                  <p>
                    Oui, nous acceptons les cartes de débit avec un dépôt de
                    garantie supplémentaire. La carte doit être au nom du
                    conducteur principal.
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
                  Quelle est votre politique en matière de carburant ?
                </button>
              </h2>
              <div
                id="faqFive"
                class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body">
                  <p>
                    La voiture doit être rendue avec le même niveau de carburant
                    qu'à la prise en charge. Nous fournissons un plein au
                    départ.
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
                  Puis-je ajouter des conducteurs supplémentaires à mon contrat
                  de location ?
                </button>
              </h2>
              <div
                id="faqSix"
                class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body">
                  <p>
                    Oui, vous pouvez ajouter des conducteurs supplémentaires
                    moyennant un supplément. Chaque conducteur doit présenter un
                    permis de conduire valide.
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
                  src="@/assets/img/logo-white.svg"
                  class="img-fluid aos"
                  alt="logo"
                />
              </div>
              <div class="footer-contact-info">
                <p>
                  Omiz Car vous offre une flotte de 15 véhicules économiques
                  parfaitement entretenus pour répondre à tous vos besoins de
                  déplacement à Tanger, Tétouan et environs.
                </p>
              </div>
              <div class="d-flex align-items-center gap-1 app-icon">
                <a href="javascript:void(0);">
                  <img
                    src="@/assets/img/icons/gpay.svg"
                    class="img-fluid"
                    alt="logo"
                  />
                </a>
                <a href="javascript:void(0);">
                  <img
                    src="@/assets/img/icons/app.svg"
                    class="img-fluid"
                    alt="logo"
                  />
                </a>
              </div>
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
                  <h5 class="footer-title">Liens rapides</h5>
                  <ul>
                    <li>
                      <a href="javascript:void(0)">Mon compte</a>
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
              <div class="col-lg-4 col-md-6">
                <!-- Footer Widget -->
                <div class="footer-widget footer-menu">
                  <h5 class="footer-title">Pages</h5>
                  <ul>
                    <li>
                      <a href="about-us.html">À propos</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">Devenir partenaire</a>
                    </li>
                    <li>
                      <a href="faq.html">FAQ</a>
                    </li>
                    <li>
                      <a href="testimonial.html">Témoignages</a>
                    </li>
                    <li>
                      <a href="contact-us.html">Contact</a>
                    </li>
                  </ul>
                </div>
                <!-- /Footer Widget -->
              </div>
              <div class="col-lg-4 col-md-6">
                <!-- Footer Widget -->
                <div class="footer-widget footer-menu">
                  <h5 class="footer-title">Liens utiles</h5>
                  <ul>
                    <li>
                      <a href="javascript:void(0)">Mon compte</a>
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
                <p>Copyright &copy; 2025 Omiz Car. Tous droits réservés.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="payment-list">
                <a href="javascript:void(0);">
                  <img src="@/assets/img/icons/payment-01.svg" alt="img" />
                </a>
                <a href="javascript:void(0);">
                  <img src="@/assets/img/icons/payment-02.svg" alt="img" />
                </a>
                <a href="javascript:void(0);">
                  <img src="@/assets/img/icons/payment-03.svg" alt="img" />
                </a>
              </div>
            </div>
            <div class="col-lg-4">
              <ul class="privacy-link">
                <li>
                  <a href="privacy-policy.html">Confidentialité</a>
                </li>
                <li>
                  <a href="terms-condition.html">Conditions générales</a>
                </li>
                <li>
                  <a href="javascript:void(0);">Politique de remboursement</a>
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
