<template>
  <div class="review-sec listing-feature">
    <div class="review-header">
      <h4>Caractéristiques du véhicule</h4>
    </div>
    <div class="listing-description">
      <div class="row">
        <div class="col-md-4" v-for="item in Listing_Features" :key="item.id">
          <ul>
            <li>
              <span><i class="bx bx-check-double"></i></span>{{ item.feature }}
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="review-sec listing-feature">
    <div class="review-header">
      <h4>Tarifs</h4>
    </div>
    <div class="table-responsive">
      <table class="table border mb-3">
        <thead class="thead-dark">
          <tr>
            <th>Nom</th>
            <th>Prix journalier</th>
            <th>Kilomètres de base</th>
            <th>Prix kilomètres supplémentaires</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>4 à 5 jours</td>
            <td>450 MAD</td>
            <td>25</td>
            <td>28 MAD</td>
          </tr>
          <tr>
            <td>5 à 8 jours</td>
            <td>420 MAD</td>
            <td>90</td>
            <td>45 MAD</td>
          </tr>
          <tr>
            <td>8 à 15 jours</td>
            <td>400 MAD</td>
            <td>120</td>
            <td>60 MAD</td>
          </tr>
          <tr>
            <td>16 à 25 jours</td>
            <td>380 MAD</td>
            <td>500</td>
            <td>80 MAD</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>
<script>
import Listing_Features from "@/assets/json/listing-features.json";
export default {
  data() {
    return {
      Listing_Features: Listing_Features,
    };
  },
};
</script>
