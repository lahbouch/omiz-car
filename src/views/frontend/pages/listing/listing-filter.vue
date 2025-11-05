<template>
  <div class="section-search page-search">
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
  <div class="sort-section">
    <div class="container">
      <div class="sortby-sec">
        <div class="sorting-div">
          <div class="row d-flex align-items-center">
            <div class="col-xl-4 col-lg-3 col-sm-12 col-12">
              <div class="count-search">
                <p>Showing 1-9 of 154 Cars</p>
              </div>
            </div>
            <div class="col-xl-8 col-lg-9 col-sm-12 col-12">
              <div class="product-filter-group">
                <div class="sortbyset">
                  <ul>
                    <li>
                      <span class="sortbytitle">Show : </span>
                      <div class="sorting-select select-one">
                        <vue-select :options="NumShow" v-model="selected" placeholder="5" />
                      </div>
                    </li>
                    <li>
                      <span class="sortbytitle">Sort By </span>
                      <div class="sorting-select select-two">
                        <vue-select
                          :options="SortNew"
                          v-model="selectedOne"
                          placeholder="Newest"
                        />
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="grid-listview">
                  <ul>
                    <li>
                      <router-link
                        to="/listing/listing-grid"
                        :class="{ active: isGrid }"
                        @click="toggleGrid"
                      >
                        <i class="feather-grid"></i>
                      </router-link>
                    </li>
                    <li>
                      <router-link
                        to="/listing/listing-list"
                        :class="{ active: isList }"
                        @click="toggleList"
                      >
                        <i class="feather-list"></i>
                      </router-link>
                    </li>
                    <li>
                      <router-link
                        to="/listing/listing-map"
                        :class="{ active: isMap }"
                        @click="toggleMap"
                      >
                        <i class="feather-map-pin"></i>
                      </router-link>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { ref } from "vue";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
export default {
  data() {
    return {
      startdate: currentDate,
      startdateOne: currentDateOne,
      dateFormat: "dd-MM-yyyy",
      selected: "5",
      selectedOne: "Newest",
      SortNew: [
        {label: "Newest", value: "Newest"},
        {label: "Relevance", value: "Relevance"},
        {label: "Low to High", value: "Low to High"},
        {label: "High to Low", value: "High to Low"},
        {label: "Best Rated", value: "Best Rated"},
        {label: "Distance", value: "Distance"},
        {label: "Popularity", value: "Popularity"},
      ],
      NumShow: [
        {label: "5", value: "5"}, 
        {label: "10", value: "10"}, 
        {label: "15", value: "15"}, 
        {label: "20", value: "20"}, 
        {label: "30", value: "30"}
      ],
      isList: false,
      isGrid: false,
      isMap: false,
    };
  },
  methods: {
    toggleList() {},
    toggleGrid() {},
    toggleMap() {},
    submitForm() {
      this.$router.push("/listing/listing-grid");
    },
  },
};
</script>
