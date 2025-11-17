<template>
  <admin-header></admin-header>
  <admin-sidebar></admin-sidebar>

  <!-- Page Wrapper -->
  <div class="page-wrapper">
    <div class="content pb-0">
      <!-- Breadcrumb -->
      <div
        class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3"
      >
        <div class="my-auto mb-2">
          <h4 class="mb-1">Dashboard</h4>
          <nav>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <router-link to="/admin-template/index">Home</router-link>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Admin Dashboard
              </li>
            </ol>
          </nav>
        </div>
        <div
          class="d-flex my-xl-auto right-content align-items-center flex-wrap"
        >
          <div class="input-icon-start position-relative topdatepicker mb-2">
            <span class="input-icon-addon">
              <i class="ti ti-calendar"></i>
            </span>
            <input
              type="text"
              class="form-control date-range bookingrange"
              ref="dateRangeInput"
              placeholder="dd/mm/yyyy - dd/mm/yyyy"
            />
          </div>
        </div>
      </div>
      <!-- /Breadcrumb -->

      <div class="row">
        <div class="col-xl-8 d-flex flex-column">
          <!-- Welcome Wrap -->
          <div class="card flex-fill">
            <div class="card-body">
              <div class="row align-items-center row-gap-3">
                <div class="col-sm-7">
                  <h4 class="mb-1">Welcome, Admin</h4>
                  <p>
                    {{ cars.length }}+ Budget Friendly Cars Available for the
                    rents
                  </p>
                  <div class="d-flex align-items-center flex-wrap gap-4 mb-3">
                    <div>
                      <p class="mb-1">Total No of Cars</p>
                      <h3>{{ cars.length }}</h3>
                    </div>
                    <div>
                      <p class="d-flex align-items-center mb-2">
                        <span class="line-icon bg-violet me-2"></span
                        ><span class="fw-semibold text-gray-9 me-1">{{
                          bookings.length
                        }}</span
                        >In Rental
                      </p>
                      <p class="d-flex align-items-center">
                        <span class="line-icon bg-orange me-2"></span
                        ><span class="fw-semibold text-gray-9 me-1">0</span>
                        Upcoming
                      </p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center gap-3 flex-wrap">
                    <router-link
                      to="/admin-template/bookings/reservations"
                      class="btn btn-primary d-flex align-items-center"
                      ><i class="ti ti-eye me-1"></i>Reservations</router-link
                    >
                    <router-link
                      to="/admin-template/rentals/add-car"
                      class="btn btn-dark d-flex align-items-center"
                      ><i class="ti ti-plus me-1"></i>Add New Car</router-link
                    >
                  </div>
                </div>
                <div class="col-sm-5">
                  <img src="@/assets/admin/img/icons/car.svg" alt="img" />
                </div>
              </div>
            </div>
          </div>
          <!-- /Welcome Wrap -->

          <div class="row">
            <!-- Total Reservations -->
            <div class="col-md-4 d-flex">
              <div class="card flex-fill">
                <div class="card-body pb-1">
                  <div class="border-bottom mb-0 pb-2">
                    <div class="d-flex align-items-center">
                      <span
                        class="avatar avatar-sm bg-secondary-100 text-secondary me-2"
                      >
                        <i class="ti ti-calendar-time fs-14"></i>
                      </span>
                      <p>Total Reservations</p>
                    </div>
                  </div>
                  <div
                    class="d-flex align-items-center justify-content-between gap-2"
                  >
                    <div class="py-2">
                      <h5 class="mb-1">{{ bookings.length }}</h5>
                      <p>
                        <span class="text-success fw-semibold">+0%</span> Last
                        Week
                      </p>
                    </div>
                    <div id="reservation-chart">
                      <apexchart
                        type="bar"
                        height="90"
                        :options="reservationChart.sline"
                        :series="reservationChart.series"
                      ></apexchart>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Total Reservations -->

            <!-- Total Earnings -->
            <div class="col-md-4 d-flex">
              <div class="card flex-fill">
                <div class="card-body pb-1">
                  <div class="border-bottom mb-0 pb-2">
                    <div class="d-flex align-items-center">
                      <span
                        class="avatar avatar-sm bg-orange-100 text-orange me-2"
                      >
                        <i class="ti ti-moneybag fs-14"></i>
                      </span>
                      <p>Total Earnings</p>
                    </div>
                  </div>
                  <div
                    class="d-flex align-items-center justify-content-between gap-2"
                  >
                    <div class="py-2">
                      <h5 class="mb-1">$0</h5>
                      <p>
                        <span class="text-success fw-semibold">+0%</span> Last
                        Week
                      </p>
                    </div>
                    <div id="earning-chart">
                      <apexchart
                        type="bar"
                        height="90"
                        :options="earningChart.sline"
                        :series="earningChart.series"
                      ></apexchart>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Total Earnings -->

            <!-- Total Cars -->
            <div class="col-md-4 d-flex">
              <div class="card flex-fill">
                <div class="card-body pb-1">
                  <div class="border-bottom mb-0 pb-2">
                    <div class="d-flex align-items-center">
                      <span
                        class="avatar avatar-sm bg-violet-100 text-violet me-2"
                      >
                        <i class="ti ti-car fs-14"></i>
                      </span>
                      <p>Total Cars</p>
                    </div>
                  </div>
                  <div
                    class="d-flex align-items-center justify-content-between gap-2"
                  >
                    <div class="py-2">
                      <h5 class="mb-1">{{ cars.length }}</h5>
                      <p>
                        <span class="text-danger fw-semibold">+0%</span> Last
                        Week
                      </p>
                    </div>
                    <div id="car-chart">
                      <apexchart
                        type="bar"
                        height="90"
                        :options="carChart.sline"
                        :series="carChart.series"
                      ></apexchart>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Total Cars -->
          </div>
        </div>

        <!-- Newly Added Cars -->
        <div class="col-xl-4 d-flex">
          <div class="card flex-fill">
            <div class="card-body">
              <div
                class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3"
              >
                <h5>Newly Added Cars</h5>
                <router-link
                  to="/admin-template/rentals/cars"
                  class="text-decoration-underline fw-medium"
                  >View All</router-link
                >
              </div>
              <div v-if="cars.length > 0">
                <div class="mb-2">
                  <img
                    :src="getImageUrl(cars[0].image_path || 'car.jpg')"
                    alt="img"
                    class="rounded w-100"
                  />
                </div>
                <div
                  class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3"
                >
                  <div>
                    <p class="fs-13 mb-1">
                      {{ cars[0].category ? cars[0].category.name : "N/A" }}
                    </p>
                    <h6 class="fs-14 fw-semibold mb-1">
                      {{ cars[0].make }} {{ cars[0].model }}
                    </h6>
                  </div>
                  <h6 class="fs-14 fw-semibold">
                    {{ cars[0].daily_rate }} MAD
                    <span class="fw-normal text-gray-5">/day</span>
                  </h6>
                </div>
                <div class="row g-2 justify-content-center mb-3">
                  <div class="col-sm-4 col-6 d-flex">
                    <div class="bg-light border p-2 br-5 flex-fill text-center">
                      <h6 class="fs-14 fw-semibold">Fuel Type</h6>
                      <span class="fs-13">Petrol</span>
                    </div>
                  </div>
                  <div class="col-sm-4 col-6 d-flex">
                    <div class="bg-light border p-2 br-5 flex-fill text-center">
                      <h6 class="fs-14 fw-semibold">Passengers</h6>
                      <span class="fs-13">04</span>
                    </div>
                  </div>
                  <div class="col-sm-4 col-6 d-flex">
                    <div class="bg-light border p-2 br-5 flex-fill text-center">
                      <h6 class="fs-14 fw-semibold">Driving Type</h6>
                      <span class="fs-13">Self</span>
                    </div>
                  </div>
                </div>
              </div>
              <div v-else>
                <p>No cars available yet.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- /Newly Added Cars -->
      </div>

      <div class="row">
        <!-- Recent Bookings -->
        <div class="col-xl-8 d-flex">
          <div class="card flex-fill">
            <div class="card-body">
              <div
                class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3"
              >
                <h5>Recent Bookings</h5>
                <router-link
                  to="/admin-template/bookings/reservations"
                  class="text-decoration-underline fw-medium"
                  >View All</router-link
                >
              </div>
              <div class="table-responsive">
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th>Booking ID</th>
                      <th>Customer</th>
                      <th>Car</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Amount</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr
                      v-for="booking in bookings.slice(0, 5)"
                      :key="booking.id"
                    >
                      <td>
                        <router-link
                          to="/admin-template/bookings/reservations-details"
                          class="fs-12 fw-medium"
                          >#{{ booking.id }}</router-link
                        >
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <router-link
                            to="/admin-template/manage/customer-details"
                            class="avatar flex-shrink-0"
                          >
                            <img
                              src="@/assets/admin/img/profiles/avatar-01.jpg"
                              class="rounded-circle"
                              alt=""
                            />
                          </router-link>
                          <div class="flex-grow-1 ms-2">
                            <h6 class="fs-14 fw-semibold mb-1">
                              <router-link
                                to="/admin-template/manage/customer-details"
                                >Customer</router-link
                              >
                            </h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        {{
                          booking.car
                            ? booking.car.make + " " + booking.car.model
                            : "N/A"
                        }}
                      </td>
                      <td>{{ formatDate(booking.pickup_date) }}</td>
                      <td>{{ formatDate(booking.return_date) }}</td>
                      <td>{{ booking.total_amount }} MAD</td>
                      <td>
                        <span
                          class="badge badge-md bg-success-transparent d-inline-flex align-items-center"
                          ><i class="ti ti-circle-filled fs-6 me-2"></i
                          >{{ booking.status }}</span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /Recent Bookings -->

        <!-- Recent Invoices -->
        <div class="col-xl-4 d-flex">
          <div class="card flex-fill">
            <div class="card-body">
              <div
                class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3"
              >
                <h5>Recent Invoices</h5>
                <router-link
                  to="/admin-template/finance/invoice"
                  class="text-decoration-underline fw-medium"
                  >View All</router-link
                >
              </div>
              <div class="table-responsive">
                <table class="table table-borderless mb-0">
                  <thead>
                    <tr>
                      <th>Invoice ID</th>
                      <th>Customer</th>
                      <th>Amount</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr
                      v-for="booking in bookings.slice(0, 3)"
                      :key="booking.id"
                    >
                      <td>
                        <router-link
                          to="/admin-template/finance/invoice-details"
                          class="fs-12 fw-medium"
                          >#INV{{ booking.id }}</router-link
                        >
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <router-link
                            to="/admin-template/manage/customer-details"
                            class="avatar avatar-xs flex-shrink-0"
                          >
                            <img
                              src="@/assets/admin/img/profiles/avatar-01.jpg"
                              class="rounded-circle"
                              alt=""
                            />
                          </router-link>
                          <div class="ms-2">
                            <p class="fs-13 mb-0">Customer</p>
                          </div>
                        </div>
                      </td>
                      <td>{{ booking.total_amount }} MAD</td>
                      <td>
                        <span
                          class="badge badge-md bg-success-transparent d-inline-flex align-items-center"
                          ><i class="ti ti-circle-filled fs-6 me-2"></i
                          >Paid</span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /Recent Invoices -->
      </div>
    </div>

    <!-- Footer-->
    <div
      class="footer d-sm-flex align-items-center justify-content-between bg-white p-3"
    >
      <p class="mb-0">
        <a href="javascript:void(0);">Privacy Policy</a>
        <a href="javascript:void(0);" class="ms-4">Terms of Use</a>
      </p>
      <p>
        &copy; 2025 Dreamsrent, Made with <span class="text-danger">❤</span> by
        <a href="javascript:void(0);" class="text-secondary">Dreams</a>
      </p>
    </div>
    <!-- /Footer-->
  </div>
  <!-- /Page Wrapper -->
</template>

<script>
import "daterangepicker/daterangepicker.css";
import "daterangepicker/daterangepicker.js";
import { ref } from "vue";
import { onMounted } from "vue";
import moment from "moment";
import DateRangePicker from "daterangepicker";
import adminApi from "@/services/adminApi";

import {
  reservationChart,
  earningChart,
  carChart,
  salesStatistics,
  statisticsChart,
} from "./data";

export default {
  data() {
    return {
      reservationChart: reservationChart,
      earningChart: earningChart,
      carChart: carChart,
      salesStatistics: salesStatistics,
      statisticsChart: statisticsChart,
      cars: [],
      bookings: [],
      loading: true,
      error: null,
    };
  },
  setup() {
    const dateRangeInput = ref(null);

    // Move the function declaration outside of the onMounted callback
    function booking_range(start, end) {
      return start.format("M/D/YYYY") + " - " + end.format("M/D/YYYY");
    }

    onMounted(() => {
      if (dateRangeInput.value) {
        const start = moment().subtract(6, "days");
        const end = moment();

        new DateRangePicker(
          dateRangeInput.value,
          {
            startDate: start,
            endDate: end,
            ranges: {
              Today: [moment(), moment()],
              Yesterday: [
                moment().subtract(1, "days"),
                moment().subtract(1, "days"),
              ],
              "Last 7 Days": [moment().subtract(6, "days"), moment()],
              "Last 30 Days": [moment().subtract(29, "days"), moment()],
              "This Month": [
                moment().startOf("month"),
                moment().endOf("month"),
              ],
              "Last Month": [
                moment().subtract(1, "month").startOf("month"),
                moment().subtract(1, "month").endOf("month"),
              ],
            },
          },
          booking_range
        );

        booking_range(start, end);
      }
    });

    return {
      dateRangeInput,
    };
  },
  methods: {
    getImageUrl(imageName) {
      // Handle cases where the image path might be null or undefined
      if (!imageName) {
        return new URL("@/assets/admin/img/car/car.jpg", import.meta.url).href;
      }

      // If it's already a full path, return as is
      if (imageName.startsWith("http") || imageName.startsWith("/")) {
        return imageName;
      }

      // Otherwise, construct the path
      try {
        return new URL(
          `/src/assets/admin/img/car/${imageName}`,
          import.meta.url
        ).href;
      } catch (error) {
        // Fallback to default image if there's an error
        return new URL("@/assets/admin/img/car/car.jpg", import.meta.url).href;
      }
    },
    formatDate(dateString) {
      if (!dateString) return "N/A";
      return new Date(dateString).toLocaleDateString("en-US", {
        year: "numeric",
        month: "short",
        day: "numeric",
      });
    },
    async fetchDashboardData() {
      try {
        this.loading = true;

        // Fetch cars
        const carsResponse = await adminApi.getCars();
        this.cars = carsResponse.data;

        // Fetch bookings
        const bookingsResponse = await adminApi.getBookings();
        this.bookings = bookingsResponse.data;
      } catch (error) {
        this.error =
          "Failed to fetch dashboard data: " +
          (error.response?.data?.message || error.message);
        console.error("Error fetching dashboard data:", error);
      } finally {
        this.loading = false;
      }
    },
  },
  mounted() {
    this.fetchDashboardData();
  },
};
</script>
