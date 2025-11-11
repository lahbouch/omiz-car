<template>
  <layouts-header></layouts-header>
  <breadcrumb :title="title" :text="text" :text1="text1" />
  <section class="privacy-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="terms-policy">
            <p data-aos="fade-down">
              Bienvenue chez Omiz Car. Les présentes Conditions Générales de
              Location régissent l'utilisation de nos services de location de
              véhicules. En réservant un véhicule avec Omiz Car, vous acceptez
              ces conditions. Veuillez les lire attentivement.
            </p>
            <p data-aos="fade-down">
              Omiz Car est une entreprise de location de voitures basée à
              Tanger, spécialisée dans la fourniture de services fiables et
              rapides aux touristes et hommes d'affaires dans la région de
              Tanger-Tétouan et ses environs jusqu'à 50 km. Notre flotte de 15
              véhicules économiques est régulièrement entretenue pour garantir
              votre sécurité et votre confort.
            </p>
            <p data-aos="fade-down">
              Nous nous engageons à offrir un service professionnel qui inspire
              confiance. Notre mission est de simplifier votre voyage en vous
              offrant une expérience de location sans tracas, avec des prix
              compétitifs et un service client disponible 24/7.
            </p>

            <h4 data-aos="fade-down">Conditions de location</h4>

            <ul data-aos="fade-down">
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Âge minimum :</strong> 18 ans avec permis de conduire
                valide
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Dépôt de garantie :</strong> Selon le type de véhicule
                (entre 200 MAD et 500 MAD)
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Zone de desserte :</strong> Tanger, Tétouan et environs
                (50 km)
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Livraison possible :</strong> À l'aéroport de Tanger
                avec supplément
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Assistance routière :</strong> 24/7 incluse dans tous
                nos services
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Maintenance :</strong> Régulière de tous les véhicules
                pour votre sécurité
              </li>
            </ul>

            <h4 data-aos="fade-down">Modalités de réservation</h4>

            <ul data-aos="fade-down">
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Réservation :</strong> Via WhatsApp au 0655449468 /
                0666609899
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Paiement :</strong> Carte bancaire ou acompte à la
                réservation
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Confirmation :</strong> Immédiate après paiement de
                l'acompte
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Annulation :</strong> Selon notre politique
                d'annulation
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Modification :</strong> Possible avec préavis de 24
                heures
              </li>
            </ul>

            <h4 data-aos="fade-down">Obligations du locataire</h4>

            <ul data-aos="fade-down">
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span>Présenter
                un permis de conduire valide et une pièce d'identité
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span>Respecter
                les conditions d'utilisation du véhicule
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span>Ne pas
                sous-louer le véhicule à un tiers
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span>Respecter
                les limitations de kilométrage si applicables
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span>Signaler
                immédiatement tout accident ou panne
              </li>
            </ul>

            <p data-aos="fade-down">
              En cas d'annulation, des frais peuvent s'appliquer selon notre
              politique d'annulation. Nous recommandons de réserver au moins 24
              heures à l'avance pour garantir la disponibilité du véhicule de
              votre choix. Les réservations peuvent être effectuées via WhatsApp
              au 0655449468 / 0666609899.
            </p>

            <p class="mb-0" data-aos="fade-down">
              Omiz Car se réserve le droit de modifier ces conditions générales
              à tout moment. Les modifications prendront effet dès leur
              publication sur notre site web. Pour toute question concernant ces
              conditions, veuillez nous contacter à omizcar@gmail.com.
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
      title: "Conditions générales",
      text: "Pages",
      text1: "Conditions générales",
    };
  },
};
</script>
