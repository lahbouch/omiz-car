<template>
  <layouts-header></layouts-header>
  <breadcrumb :title="title" :text="text" :text1="text1" />
  <section class="section privacy-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="terms-policy">
            <p data-aos="fade-down">
              Chez Omiz Car, nous nous efforçons de vous offrir un service de
              location de voitures de la plus haute qualité. Cette politique de
              remboursement explique nos conditions concernant les
              remboursements en cas d'annulation ou de problème avec nos
              services.
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
              Nous comprenons que des circonstances imprévues peuvent survenir,
              et nous nous engageons à traiter chaque demande de remboursement
              de manière équitable et transparente.
            </p>

            <h4 data-aos="fade-down">
              Conditions d'annulation et de remboursement
            </h4>

            <ul data-aos="fade-down">
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Annulation gratuite :</strong> Annulation gratuite
                jusqu'à 48 heures avant la date de location prévue
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Annulation tardive :</strong> 50% de frais d'annulation
                si annulé entre 48 et 24 heures avant la location
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Annulation de dernière minute :</strong> 100% de frais
                si annulé moins de 24 heures avant la location
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Pas de remboursement :</strong> Aucun remboursement
                pour les annulations effectuées après le début de la location
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Problèmes techniques :</strong> Remboursement intégral
                en cas de panne ou problème technique du véhicule
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Service non fourni :</strong> Remboursement intégral si
                nous ne pouvons pas fournir le service convenu
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span
                ><strong>Dommages :</strong> Les dommages au véhicule sont
                couverts par l'assurance incluse dans le prix
              </li>
            </ul>

            <h4 data-aos="fade-down">Procédure de demande de remboursement</h4>

            <p data-aos="fade-down">
              Pour demander un remboursement, veuillez nous contacter dans un
              délai de 30 jours suivant la date de location. Vous pouvez nous
              joindre par téléphone au 0655449468 / 0666609899 ou par email à
              omizcar@gmail.com. Votre demande doit inclure :
            </p>

            <ul data-aos="fade-down">
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span>Votre nom
                complet et coordonnées
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span>Numéro de
                réservation
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span>Date et
                heure de la location
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span>Raison de
                la demande de remboursement
              </li>
              <li>
                <span><i class="fa-solid fa-circle-check"></i></span>Toute
                preuve pertinente (photos, documents, etc.)
              </li>
            </ul>

            <h4 data-aos="fade-down">Délais de traitement</h4>

            <p data-aos="fade-down">
              Une fois votre demande reçue, notre équipe la traitera dans un
              délai de 5 jours ouvrables. Nous pourrons vous demander des
              informations supplémentaires si nécessaire. Les décisions
              concernant les remboursements sont prises par notre direction et
              sont finales.
            </p>

            <p data-aos="fade-down">
              Les remboursements approuvés seront traités via le même moyen de
              paiement utilisé pour la réservation, sauf accord contraire. Le
              délai de crédit sur votre compte dépend du moyen de paiement
              utilisé et peut varier de 3 à 10 jours ouvrables.
            </p>

            <p class="mb-0" data-aos="fade-down">
              Omiz Car se réserve le droit de modifier cette politique de
              remboursement à tout moment. Les modifications prendront effet dès
              leur publication sur notre site web. Pour toute question
              concernant cette politique, veuillez nous contacter à
              omizcar@gmail.com.
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
      title: "Politique de remboursement",
      text: "Pages",
      text1: "Politique de remboursement",
    };
  },
};
</script>
