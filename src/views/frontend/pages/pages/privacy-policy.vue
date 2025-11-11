<template>
  <layouts-header></layouts-header>
  <breadcrumb :title="title" :text="text" :text1="text1" />
  <section class="section privacy-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="terms-policy">
            <p data-aos="fade-down">
              Chez Omiz Car, nous accordons une grande importance à la
              protection de votre vie privée. Cette politique de confidentialité
              explique comment nous collectons, utilisons et protégeons vos
              informations personnelles lorsque vous utilisez nos services de
              location de voitures.
            </p>
            <p data-aos="fade-down">
              Omiz Car est une entreprise de location de voitures basée à
              Tanger, spécialisée dans la fourniture de services fiables et
              rapides aux touristes et hommes d'affaires dans la région de
              Tanger-Tétouan et ses environs jusqu'à 50 km. Nous collectons
              uniquement les informations nécessaires pour vous fournir nos
              services de location.
            </p>
            <p data-aos="fade-down">
              Nous nous engageons à utiliser vos informations personnelles
              uniquement dans le cadre de la fourniture de nos services de
              location de voitures. Vos données ne seront jamais vendues, louées
              ou partagées avec des tiers sans votre consentement explicite,
              sauf dans les cas prévus par la loi.
            </p>

            <h4 data-aos="fade-down">Informations que nous collectons</h4>

            <ul data-aos="fade-down">
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Informations d'identification :</strong> Nom complet,
                adresse, numéro de téléphone, email
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Documents officiels :</strong> Copie du permis de
                conduire et pièce d'identité
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Informations de paiement :</strong> Données bancaires
                pour le traitement des paiements
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Données de réservation :</strong> Dates, lieux,
                préférences de véhicule
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Données d'utilisation :</strong> Historique des
                locations et services utilisés
              </li>
            </ul>

            <h4 data-aos="fade-down">Utilisation de vos informations</h4>

            <ul data-aos="fade-down">
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Traitement des réservations :</strong> Pour confirmer
                et gérer vos locations
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Communication :</strong> Pour vous envoyer des
                confirmations et mises à jour
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Service client :</strong> Pour répondre à vos demandes
                et questions
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Amélioration des services :</strong> Pour améliorer
                notre offre et expérience client
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Conformité légale :</strong> Pour respecter les
                obligations légales et réglementaires
              </li>
            </ul>

            <h4 data-aos="fade-down">Protection de vos données</h4>

            <ul data-aos="fade-down">
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Sécurité technique :</strong> Chiffrement et mesures de
                sécurité avancées
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Accès restreint :</strong> Seuls les employés autorisés
                peuvent accéder aux données
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Formation du personnel :</strong> Sensibilisation à la
                protection des données
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Audits réguliers :</strong> Contrôles de sécurité et
                conformité
              </li>
            </ul>

            <p data-aos="fade-down">
              Vous avez le droit d'accéder à vos données personnelles, de les
              rectifier ou de les supprimer. Vous pouvez également vous opposer
              au traitement de vos données dans certaines conditions. Pour
              exercer ces droits, veuillez nous contacter à omizcar@gmail.com.
            </p>

            <p class="mb-0" data-aos="fade-down">
              Omiz Car se réserve le droit de modifier cette politique de
              confidentialité à tout moment. Les modifications prendront effet
              dès leur publication sur notre site web. Nous vous encourageons à
              consulter régulièrement cette page pour rester informé de nos
              pratiques en matière de confidentialité. Dernière mise à jour :
              Novembre 2025.
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
      title: "Politique de confidentialité",
      text: "Pages",
      text1: "Politique de confidentialité",
    };
  },
};
</script>
