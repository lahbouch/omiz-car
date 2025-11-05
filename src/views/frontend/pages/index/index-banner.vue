<template>
  <div>
    <!-- Banner -->
    <section class="banner-section banner-slider">
      <div class="container">
        <div class="home-banner">
          <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-down">
              <p class="explore-text">
                <span><i class="fa-solid fa-thumbs-up me-2"></i></span>100% Trusted car
                rental platform in the World
              </p>
              <h1>
                <span>Find Your Best</span> <br />
                Dream Car for Rental
              </h1>
              <p>
                Experience the ultimate in comfort, performance, and sophistication with
                our luxury car rentals. From sleek sedans and stylish coupes to spacious
                SUVs and elegant convertibles, we offer a range of premium vehicles to
                suit your preferences and lifestyle.
              </p>
              <div class="view-all">
                <router-link
                  to="/listing/listing-grid"
                  class="btn btn-view d-inline-flex align-items-center"
                  >View all Cars <span><i class="feather-arrow-right ms-2"></i></span
                ></router-link>
              </div>
            </div>
            <div class="col-lg-6" data-aos="fade-down">
              <div class="banner-imgs">
                <img
                  src="@/assets/img/car-right.png"
                  class="img-fluid aos"
                  alt="bannerimage"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Banner -->

    <!-- Search -->
    <div class="section-search">
      <div class="container">
        <div class="search-box-banner">
          <form @submit.prevent="submitForm">
            <ul class="align-items-center">
              <li class="column-group-main">
                <div class="input-block">
                  <label>Pickup Location</label>
                  <div class="group-img">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Enter City, Airport, or Address"
                    />
                    <span><i class="feather-map-pin"></i></span>
                  </div>
                </div>
              </li>
              <li class="column-group-main">
                <div class="input-block">
                  <label>Pickup Date</label>
                </div>
                <div class="input-block-wrapp">
                  <div class="input-block date-widget">
                    <div class="group-img">
                      <datepicker
                        v-model="startdate"
                        class="form-control datetimepicker"
                        :editable="true"
                        :clearable="false"
                        :input-format="dateFormat"
                        placeholder="04/11/2023"
                      />
                      <span><i class="feather-calendar"></i></span>
                    </div>
                  </div>
                  <div class="input-block time-widge">
                    <div class="group-img">
                      <a-time-picker
                        class="form-control timepicker"
                        placeholder="  11:00 AM"
                        use12-hours
                        format="h:mm a"
                        type="text"
                      />
                      <span><i class="feather-clock"></i></span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="column-group-main">
                <div class="input-block">
                  <label>Return Date</label>
                </div>
                <div class="input-block-wrapp">
                  <div class="input-block date-widge">
                    <div class="group-img">
                      <datepicker
                        v-model="startdateOne"
                        class="form-control datetimepicker"
                        :editable="true"
                        :clearable="false"
                        :input-format="dateFormat"
                        placeholder="04/11/2023"
                      />
                      <span><i class="feather-calendar"></i></span>
                    </div>
                  </div>
                  <div class="input-block time-widge">
                    <div class="group-img">
                      <a-time-picker
                        class="form-control timepicker"
                        placeholder="  11:00 AM"
                        use12-hours
                        format="h:mm a"
                        type="text"
                      />
                      <span><i class="feather-clock"></i></span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="column-group-last">
                <div class="input-block">
                  <div class="search-btn">
                    <button class="btn search-button" type="submit">
                      <i class="fa fa-search" aria-hidden="true"></i>Search
                    </button>
                  </div>
                </div>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Search -->
</template>

<script>
import { ref } from "vue";
const value = ref();
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
export default {
  data() {
    return {
      startdate: currentDate,
      startdateOne: currentDateOne,
      dateFormat: "dd-MM-yyyy",
      value,
    };
  },
  setup() {
    const value = ref();
    return { value };
  },
  methods: {
    submitForm() {
      this.$router.push("/listing/listing-grid");
    },
  },
};
</script>
