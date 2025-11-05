<template>
  <div class="review-sec listing-feature">
    <div class="review-header">
      <h4>Car Features</h4>
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
      <h4>Tariff</h4>
    </div>
    <div class="table-responsive">
      <table class="table border mb-3">
        <thead class="thead-dark">
          <tr>
            <th>Name</th>
            <th>Daily Price</th>
            <th>Base Kilometers</th>
            <th>Kilometers Extra Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>4 to 5 Days</td>
            <td>$150</td>
            <td>25</td>
            <td>$28</td>
          </tr>
          <tr>
            <td>5 to 8 Days</td>
            <td>$250</td>
            <td>90</td>
            <td>$45</td>
          </tr>
          <tr>
            <td>8 to 15 Days</td>
            <td>$380</td>
            <td>120</td>
            <td>$60</td>
          </tr>
          <tr>
            <td>16 to 25 Days</td>
            <td>$500</td>
            <td>500</td>
            <td>$80</td>
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
