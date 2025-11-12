<template>
  <section class="banner-section-four">
    <div class="container">
      <div class="home-banner">
        <div class="row align-items-center">
          <div class="col-lg-5" data-aos="fade-down">
            <div class="banner-content">
              <h1>
                Votre voyage commence ici, <span>en toute confiance</span>
              </h1>
              <p>
                Location de voitures économiques à Tanger, Tétouan et environs
                (50 km) Profitez d'un service professionnel, fiable et rapide
                avec Omiz Car.
              </p>
              <div class="customer-list">
                <div class="users-wrap">
                  <ul class="users-list">
                    <li>
                      <img
                        src="@/assets/img/profiles/avatar-11.jpg"
                        class="img-fluid aos"
                        alt="bannerimage"
                      />
                    </li>
                    <li>
                      <img
                        src="@/assets/img/profiles/avatar-15.jpg"
                        class="img-fluid aos"
                        alt="bannerimage"
                      />
                    </li>
                    <li>
                      <img
                        src="@/assets/img/profiles/avatar-03.jpg"
                        class="img-fluid aos"
                        alt="bannerimage"
                      />
                    </li>
                  </ul>
                  <div class="customer-info">
                    <h4>500+ Clients</h4>
                    <p>satisfaits de nos services</p>
                  </div>
                </div>
                <div class="view-all d-flex align-items-center gap-3">
                  <router-link
                    to="/listing/listing-grid"
                    class="btn btn-primary d-inline-flex align-items-center"
                    >Réservez sur WhatsApp<i
                      class="bx bx-right-arrow-alt ms-1"
                    ></i
                  ></router-link>
                  <router-link
                    to="/listing/add-listing"
                    class="btn btn-secondary d-inline-flex align-items-center"
                    ><i class="bx bxs-plus-circle me-1"></i>Découvrez nos
                    offres</router-link
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="banner-image">
              <div class="banner-img" data-aos="fade-down">
                <div class="amount-icon">
                  <span class="day-amt">
                    <p>À partir de</p>
                    <h6>300 MAD</h6>
                  </span>
                </div>
                <span class="rent-tag"
                  ><i class="bx bxs-circle"></i>Disponible à la location</span
                >
                <img
                  src="@/assets/img/banner/banner.png"
                  class="img-fluid"
                  alt="img"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="banner-search">
        <form class="form-block d-flex align-items-center">
          <div class="search-input">
            <div class="input-block">
              <label>Pickup Location</label>
              <vue-select
                :options="YorkSan"
                v-model="selected"
                placeholder="Choose Location"
              />
            </div>
          </div>
          <div class="search-input">
            <div class="input-block">
              <label>Drop Location</label>
              <vue-select
                :options="Austi"
                v-model="selectedOne"
                placeholder="Choose Location"
              />
            </div>
          </div>
          <div class="search-input">
            <div class="input-block">
              <label>Pickup Date & time</label>
              <div class="input-wrap">
                <a-date-picker
                  show-time
                  placeholder="2025-03-14 12:00"
                  class="form-control flatpickr-datetime"
                  @ok="onOk"
                />
                <span class="input-icon"
                  ><i class="bx bx-chevron-down"></i
                ></span>
              </div>
            </div>
          </div>
          <div class="search-input input-end">
            <div class="input-block">
              <label>Drop Date & time</label>
              <div class="input-wrap">
                <a-date-picker
                  show-time
                  placeholder="2025-03-15 12:00"
                  class="form-control flatpickr-datetime"
                  @ok="onOk"
                />
                <span class="input-icon"
                  ><i class="bx bx-chevron-down"></i
                ></span>
              </div>
            </div>
          </div>
          <div class="search-btn">
            <button class="btn btn-primary" type="submit">
              <i class="bx bx-search-alt"></i>
            </button>
          </div>
        </form>
      </div> -->
    </div>
    <div class="banner-bgs">
      <img
        src="@/assets/img/bg/banner-bg-01.png"
        class="bg-01 img-fluid"
        alt="img"
      />
    </div>
  </section>
</template>
<script>
const onOk = (value) => {
  console.log("", value);
};
export default {
  data() {
    return {
      onOk,
      selected: [],
      selectedOne: [],
      YorkSan: [
        { label: "Choose Location", value: "Choose Location" },
        { label: "New York", value: "New York" },
        { label: "Dallas", value: "Dallas" },
        { label: "Chicago", value: "Chicago" },
        { label: "San Diego", value: "San Diego" },
      ],
      Austi: [
        { label: "Choose", value: "Choose" },
        { label: "San Francisco", value: "San Francisco" },
        { label: "Austin", value: "Austin" },
        { label: "Boston", value: "Boston" },
        { label: "Chicago", value: "Chicago" },
      ],
    };
  },
};
</script>
