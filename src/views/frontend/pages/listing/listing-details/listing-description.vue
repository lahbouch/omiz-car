<template>
  <div class="review-sec mb-0">
    <div class="review-header">
      <h4>Description du véhicule</h4>
    </div>
    <div class="description-list">
      <p>
        La Toyota Corolla est une berline économique fiable et confortable,
        parfaite pour vos déplacements dans la région de Tanger-Tétouan. Avec sa
        consommation réduite et son entretien régulier, cette voiture vous
        garantit une expérience de conduite agréable et sans souci.
      </p>
      <p>
        Équipée de toutes les commodités modernes, la Corolla offre un excellent
        rapport qualité-prix pour les touristes et les hommes d'affaires. Son
        intérieur spacieux et son coffre généreux vous permettront de
        transporter vos bagages en toute commodité.
      </p>
      <p>
        Avec Omiz Car, vous bénéficiez d'un service professionnel et rapide,
        avec une livraison possible directement à l'aéroport de Tanger. Notre
        flotte de 15 véhicules est régulièrement entretenue pour votre sécurité
        et votre confort.
      </p>
      <div class="read-more">
        <div class="more-text" v-show="showMore">
          <p>
            La Toyota Corolla est idéale pour les déplacements en ville comme
            pour les trajets plus longs dans la région. Son système de
            navigation GPS intégré vous permettra de trouver facilement votre
            chemin dans les rues de Tanger et ses environs.
          </p>
          <p>
            Avec son moteur efficace et ses commandes intuitives, cette voiture
            convient aussi bien aux conducteurs expérimentés qu'aux débutants.
            Réservez dès maintenant via WhatsApp et profitez de nos prix
            compétitifs.
          </p>
        </div>
        <a href="javascript:void(0);" class="more-link" @click="toggleMore">{{
          buttonText
        }}</a>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      showMore: false,
    };
  },
  computed: {
    buttonText() {
      return this.showMore ? "Afficher moins" : "Afficher plus";
    },
  },
  methods: {
    toggleMore() {
      this.showMore = !this.showMore;
    },
  },
};
</script>
<style scoped>
/* Add your component styles here */
.read-more .more-text {
  display: none; /* Initially hide the more-text */
}
</style>
