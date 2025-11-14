<template>
  <layouts-header></layouts-header>
  <breadcrumb :title="title" :text="text" :text1="text1" />
  <section class="section faq-section">
    <div class="container">
      <div class="faq-info">
        <div class="faq-card bg-white" data-aos="fade-down">
          <h4 class="faq-title">
            <a
              class="collapsed"
              data-bs-toggle="collapse"
              href="#faqOne"
              aria-expanded="false"
              >Qu'est-ce que la location de voiture avec Omiz Car ?</a
            >
          </h4>
          <div id="faqOne" class="card-collapse collapse">
            <p>
              Omiz Car est un service de location de voitures à Tanger, au Maroc, spécialisé dans la fourniture de véhicules économiques et fiables pour les touristes et voyageurs d'affaires. Nous offrons des tarifs compétitifs et un service de livraison à l'aéroport pour votre confort.
            </p>
          </div>
        </div>
        <div class="faq-card bg-white" data-aos="fade-down">
          <h4 class="faq-title">
            <a
              class="collapsed"
              data-bs-toggle="collapse"
              href="#faqTwo"
              aria-expanded="false"
              >Dans quelles zones opérez-vous ?</a
            >
          </h4>
          <div id="faqTwo" class="card-collapse collapse">
            <p>
              Nous sommes basés à Tanger et desservons principalement la région de Tanger-Tétouan. Notre service de livraison comprend l'aéroport de Tanger-Ibn Battouta ainsi que les principales zones touristiques et commerciales de la ville.
            </p>
          </div>
        </div>
        <div class="faq-card bg-white" data-aos="fade-down">
          <h4 class="faq-title">
            <a
              class="collapsed"
              data-bs-toggle="collapse"
              href="#faqThree"
              aria-expanded="false"
              >Quels documents dois-je fournir pour louer une voiture ?</a
            >
          </h4>
          <div id="faqThree" class="card-collapse collapse">
            <p>
              Pour louer un véhicule chez Omiz Car, vous devez présenter :
              <ul>
                <li>Votre permis de conduire valide</li>
                <li>Votre passeport ou carte d'identité</li>
                <li>Une carte de crédit pour la caution</li>
              </ul>
              Pour les conducteurs internationaux, un permis international est recommandé.
            </p>
          </div>
        </div>
        <div class="faq-card bg-white" data-aos="fade-down">
          <h4 class="faq-title">
            <a
              class="collapsed"
              data-bs-toggle="collapse"
              href="#faqFour"
              aria-expanded="false"
              >Proposez-vous une assurance ?</a
            >
          </h4>
          <div id="faqFour" class="card-collapse collapse">
            <p>
              Oui, toutes nos locations comprennent une assurance de base. Nous proposons également des options d'assurance étendue pour votre tranquillité d'esprit pendant votre voyage au Maroc.
            </p>
          </div>
        </div>
        <div class="faq-card bg-white" data-aos="fade-down">
          <h4 class="faq-title">
            <a
              class="collapsed"
              data-bs-toggle="collapse"
              href="#faqFive"
              aria-expanded="false"
              >Puis-je modifier ou annuler ma réservation ?</a
            >
          </h4>
          <div id="faqFive" class="card-collapse collapse">
            <p>
              Vous pouvez modifier ou annuler votre réservation gratuitement jusqu'à 24 heures avant la date de début de location. Après ce délai, des frais peuvent s'appliquer selon les conditions générales.
            </p>
          </div>
        </div>
        <div class="faq-card bg-white" data-aos="fade-down">
          <h4 class="faq-title">
            <a
              class="collapsed"
              data-bs-toggle="collapse"
              href="#faqSix"
              aria-expanded="false"
              >Les véhicules sont-ils équipés d'un GPS ?</a
            >
          </h4>
          <div id="faqSix" class="card-collapse collapse">
            <p>
              Nos véhicules ne sont pas équipés de GPS intégré, mais nous pouvons vous recommander des applications de navigation gratuites très efficaces au Maroc. Nous pouvons également vous fournir un GPS portable moyennant un supplément.
            </p>
          </div>
        </div>
        <div class="faq-card bg-white" data-aos="fade-down">
          <h4 class="faq-title">
            <a
              class="collapsed"
              data-bs-toggle="collapse"
              href="#faqSeven"
              aria-expanded="false"
              >À quelle heure puis-je récupérer ma voiture ?</a
            >
          </h4>
          <div id="faqSeven" class="card-collapse collapse">
            <p>
              Notre service est disponible 24h/24 et 7j/7. Vous pouvez récupérer votre véhicule dès votre arrivée à l'aéroport ou à l'heure convenue lors de votre réservation. La restitution se fait selon l'horaire convenu lors de la réservation.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <layout-footer></layout-footer>
</template>

<script>
export default {
  data() {
    return {
      title: "FAQ",
      text: "Pages",
      text1: "Questions Fréquentes",
    };
  },
};
</script>