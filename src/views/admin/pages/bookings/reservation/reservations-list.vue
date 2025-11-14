<template>
  <admin-header></admin-header>
  <admin-sidebar></admin-sidebar>

  <!-- Page Wrapper -->
  <div class="page-wrapper">
    <div class="content me-4">
      <!-- Breadcrumb -->
      <div
        class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3"
      >
        <div class="my-auto mb-2">
          <h4 class="mb-1">All Reservations</h4>
          <nav>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <router-link to="/admin-template/index">Home</router-link>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                All Reservations
              </li>
            </ol>
          </nav>
        </div>
        <div
          class="d-flex my-xl-auto right-content align-items-center flex-wrap"
        >
          <div class="mb-2 me-2">
            <a
              href="javascript:void(0);"
              class="btn btn-white d-flex align-items-center"
              ><i class="ti ti-printer me-2"></i>Print</a
            >
          </div>
          <div class="mb-2">
            <div class="dropdown">
              <a
                href="javascript:void(0);"
                class="btn btn-dark d-inline-flex align-items-center"
              >
                <i class="ti ti-upload me-1"></i>Export
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- /Breadcrumb -->

      <!-- Table Header -->
      <div
        class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3"
      >
        <div class="d-flex align-items-center flex-wrap row-gap-3">
          <div class="dropdown me-2">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
              data-bs-toggle="dropdown"
            >
              <i class="ti ti-filter me-1"></i> Sort By : Latest
            </a>
            <ul class="dropdown-menu dropdown-menu-end p-2">
              <li>
                <a href="javascript:void(0);" class="dropdown-item rounded-1"
                  >Latest</a
                >
              </li>
              <li>
                <a href="javascript:void(0);" class="dropdown-item rounded-1"
                  >Ascending</a
                >
              </li>
              <li>
                <a href="javascript:void(0);" class="dropdown-item rounded-1"
                  >Desending</a
                >
              </li>
              <li>
                <a href="javascript:void(0);" class="dropdown-item rounded-1"
                  >Last Month</a
                >
              </li>
              <li>
                <a href="javascript:void(0);" class="dropdown-item rounded-1"
                  >Last 7 Days</a
                >
              </li>
            </ul>
          </div>
          <div class="me-2">
            <div class="input-icon-start position-relative topdatepicker">
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
          <div class="dropdown">
            <a
              href="#filtercollapse"
              class="filtercollapse coloumn d-inline-flex align-items-center"
              data-bs-toggle="collapse"
              role="button"
              aria-expanded="false"
              aria-controls="filtercollapse"
            >
              <i class="ti ti-filter me-1"></i> Filter
              <span class="badge badge-xs rounded-pill bg-danger ms-2">0</span>
            </a>
          </div>
        </div>
        <div
          class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3"
        >
          <div class="top-search me-2">
            <div class="top-search-group">
              <span class="input-icon">
                <i class="ti ti-search"></i>
              </span>
              <input
                type="text"
                class="form-control"
                placeholder="Search"
                v-model="searchQuery"
                @input="searchBookings"
              />
            </div>
          </div>
          <div class="dropdown">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle coloumn btn btn-white d-inline-flex align-items-center"
              data-bs-toggle="dropdown"
              data-bs-auto-close="outside"
            >
              <i class="ti ti-layout-board me-1"></i> Columns
            </a>
            <div class="dropdown-menu dropdown-menu-lg p-2">
              <ul>
                <li>
                  <div
                    class="dropdown-item d-flex align-items-center justify-content-between rounded-1"
                  >
                    <span class="d-inline-flex align-items-center"
                      ><i class="ti ti-grip-vertical me-1"></i>CAR</span
                    >
                    <div class="form-check form-check-sm form-switch mb-0">
                      <input
                        class="form-check-input form-label"
                        type="checkbox"
                        role="switch"
                        checked=""
                      />
                    </div>
                  </div>
                </li>
                <li>
                  <div
                    class="dropdown-item d-flex align-items-center justify-content-between rounded-1"
                  >
                    <span
                      ><i class="ti ti-grip-vertical me-1"></i>CUSTOMER</span
                    >
                    <div class="form-check form-check-sm form-switch mb-0">
                      <input
                        class="form-check-input form-label"
                        type="checkbox"
                        role="switch"
                        checked=""
                      />
                    </div>
                  </div>
                </li>
                <li>
                  <div
                    class="dropdown-item d-flex align-items-center justify-content-between rounded-1"
                  >
                    <span
                      ><i class="ti ti-grip-vertical me-1"></i>PICK UP
                      DETAILS</span
                    >
                    <div class="form-check form-check-sm form-switch mb-0">
                      <input
                        class="form-check-input form-label"
                        type="checkbox"
                        role="switch"
                        checked=""
                      />
                    </div>
                  </div>
                </li>
                <li>
                  <div
                    class="dropdown-item d-flex align-items-center justify-content-between rounded-1"
                  >
                    <span
                      ><i class="ti ti-grip-vertical me-1"></i>DROP OFF
                      DETAILS</span
                    >
                    <div class="form-check form-check-sm form-switch mb-0">
                      <input
                        class="form-check-input form-label"
                        type="checkbox"
                        role="switch"
                        checked=""
                      />
                    </div>
                  </div>
                </li>
                <li>
                  <div
                    class="dropdown-item d-flex align-items-center justify-content-between rounded-1"
                  >
                    <span><i class="ti ti-grip-vertical me-1"></i>STATUS</span>
                    <div class="form-check form-check-sm form-switch mb-0">
                      <input
                        class="form-check-input form-label"
                        type="checkbox"
                        role="switch"
                        checked=""
                      />
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- /Table Header -->

      <div class="collapse" id="filtercollapse">
        <div class="filterbox mb-3 d-flex align-items-center">
          <h6 class="me-3">Filters</h6>
          <div class="dropdown me-2">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
              data-bs-toggle="dropdown"
              data-bs-auto-close="outside"
            >
              Pick Up Location
            </a>
            <ul class="dropdown-menu dropdown-menu-lg p-2">
              <li>
                <div class="top-search m-2">
                  <div class="top-search-group">
                    <span class="input-icon">
                      <i class="ti ti-search"></i>
                    </span>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Search"
                    />
                  </div>
                </div>
              </li>
              <li>
                <label
                  class="dropdown-item d-flex align-items-center rounded-1"
                >
                  <input class="form-check-input m-0 me-2" type="checkbox" />Los
                  Angles
                </label>
              </li>
              <li>
                <label
                  class="dropdown-item d-flex align-items-center rounded-1"
                >
                  <input class="form-check-input m-0 me-2" type="checkbox" />New
                  York City
                </label>
              </li>
              <li>
                <label
                  class="dropdown-item d-flex align-items-center rounded-1"
                >
                  <input
                    class="form-check-input m-0 me-2"
                    type="checkbox"
                  />Houston
                </label>
              </li>
              <li>
                <label
                  class="dropdown-item d-flex align-items-center rounded-1"
                >
                  <input
                    class="form-check-input m-0 me-2"
                    type="checkbox"
                  />Munich
                </label>
              </li>
              <li>
                <label
                  class="dropdown-item d-flex align-items-center rounded-1"
                >
                  <input
                    class="form-check-input m-0 me-2"
                    type="checkbox"
                  />Montreal
                </label>
              </li>
            </ul>
          </div>
          <div class="dropdown me-2">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
              data-bs-toggle="dropdown"
              data-bs-auto-close="outside"
            >
              Drop Off Location
            </a>
            <ul class="dropdown-menu dropdown-menu-lg p-2">
              <li>
                <div class="top-search m-2">
                  <div class="top-search-group">
                    <span class="input-icon">
                      <i class="ti ti-search"></i>
                    </span>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Search"
                    />
                  </div>
                </div>
              </li>
              <li>
                <label
                  class="dropdown-item d-flex align-items-center rounded-1"
                >
                  <input class="form-check-input m-0 me-2" type="checkbox" />Los
                  Angles
                </label>
              </li>
              <li>
                <label
                  class="dropdown-item d-flex align-items-center rounded-1"
                >
                  <input class="form-check-input m-0 me-2" type="checkbox" />New
                  York City
                </label>
              </li>
              <li>
                <label
                  class="dropdown-item d-flex align-items-center rounded-1"
                >
                  <input
                    class="form-check-input m-0 me-2"
                    type="checkbox"
                  />Houston
                </label>
              </li>
              <li>
                <label
                  class="dropdown-item d-flex align-items-center rounded-1"
                >
                  <input
                    class="form-check-input m-0 me-2"
                    type="checkbox"
                  />Munich
                </label>
              </li>
              <li>
                <label
                  class="dropdown-item d-flex align-items-center rounded-1"
                >
                  <input
                    class="form-check-input m-0 me-2"
                    type="checkbox"
                  />Montreal
                </label>
              </li>
            </ul>
          </div>
          <div class="dropdown me-2">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
              data-bs-toggle="dropdown"
              data-bs-auto-close="outside"
            >
              Status
            </a>
            <ul class="dropdown-menu dropdown-menu-lg p-2">
              <li>
                <label
                  class="dropdown-item d-flex align-items-center rounded-1"
                >
                  <input
                    class="form-check-input m-0 me-2"
                    type="checkbox"
                  />Confirmed
                </label>
              </li>
              <li>
                <label
                  class="dropdown-item d-flex align-items-center rounded-1"
                >
                  <input class="form-check-input m-0 me-2" type="checkbox" />In
                  Progress
                </label>
              </li>
              <li>
                <label
                  class="dropdown-item d-flex align-items-center rounded-1"
                >
                  <input
                    class="form-check-input m-0 me-2"
                    type="checkbox"
                  />Completed
                </label>
              </li>
              <li>
                <label
                  class="dropdown-item d-flex align-items-center rounded-1"
                >
                  <input
                    class="form-check-input m-0 me-2"
                    type="checkbox"
                  />Rejected
                </label>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Reservation Table -->
      <div class="card">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-center table-hover mb-0">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>CAR</th>
                  <th>CUSTOMER</th>
                  <th>PICK UP DETAILS</th>
                  <th>DROP OFF DETAILS</th>
                  <th>STATUS</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="booking in bookings" :key="booking.id">
                  <td>#{{ booking.id }}</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <router-link
                        to="/admin-template/bookings/reservation-details"
                        class="avatar avatar-xl flex-shrink-0"
                      >
                        <img
                          :src="getCarImageUrl(booking.car?.image_path)"
                          alt="Car"
                        />
                      </router-link>
                      <div class="ms-2">
                        <p class="fw-semibold mb-1">
                          {{ booking.car?.make }} {{ booking.car?.model }}
                        </p>
                        <p class="text-gray-5 mb-0">
                          #{{ booking.car?.registration_number }}
                        </p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <router-link
                        to="/admin-template/manage/customer-details"
                        class="avatar flex-shrink-0"
                      >
                        <img :src="getCustomerImageUrl()" alt="Customer" />
                      </router-link>
                      <div class="ms-2">
                        <p class="fw-semibold mb-1">
                          {{ booking.customer?.first_name }}
                          {{ booking.customer?.last_name }}
                        </p>
                        <span class="badge badge-soft-primary">{{
                          booking.customer?.type || "Client"
                        }}</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="mb-1">{{ formatDate(booking.pickup_date) }}</p>
                    <p class="text-gray-5 mb-0">
                      {{ booking.pickup_location }}
                    </p>
                  </td>
                  <td>
                    <p class="mb-1">{{ formatDate(booking.return_date) }}</p>
                    <p class="text-gray-5 mb-0">
                      {{ booking.return_location }}
                    </p>
                  </td>
                  <td>
                    <span :class="getStatusBadgeClass(booking.status)">{{
                      booking.status
                    }}</span>
                  </td>
                  <td>
                    <div class="dropdown">
                      <a
                        href="javascript:void(0);"
                        class="btn btn-white btn-sm"
                        data-bs-toggle="dropdown"
                      >
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <router-link
                          class="dropdown-item"
                          :to="`/admin-template/bookings/reservation-details/${booking.id}`"
                        >
                          <i class="ti ti-eye me-1"></i>View
                        </router-link>
                        <a
                          class="dropdown-item"
                          href="javascript:void(0);"
                          @click="deleteBooking(booking.id)"
                        >
                          <i class="ti ti-trash me-1"></i>Delete
                        </a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /Reservation Table -->

      <!-- Pagination -->
      <div class="d-sm-flex align-items-center justify-content-between p-3">
        <div class="mb-2 mb-sm-0">
          <p class="mb-0">Showing {{ bookings.length }} entries</p>
        </div>
        <div>
          <ul class="pagination mb-0">
            <li class="page-item disabled">
              <a class="page-link" href="javascript:void(0);">Previous</a>
            </li>
            <li class="page-item">
              <a class="page-link active" href="javascript:void(0);">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0);">Next</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- /Pagination -->
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
import adminApi from "@/services/adminApi";
import "daterangepicker/daterangepicker.css";
import "daterangepicker/daterangepicker.js";
import { ref } from "vue";
import { onMounted } from "vue";
import moment from "moment";
import DateRangePicker from "daterangepicker";

export default {
  data() {
    return {
      bookings: [],
      searchQuery: "",
      loading: true,
      error: null,
    };
  },
  methods: {
    getCarImageUrl(imageName) {
      if (!imageName) {
        return new URL("@/assets/admin/img/car/car.jpg", import.meta.url).href;
      }

      if (imageName.startsWith("http") || imageName.startsWith("/")) {
        return imageName;
      }

      try {
        return new URL(
          `/src/assets/admin/img/car/${imageName}`,
          import.meta.url
        ).href;
      } catch (error) {
        return new URL("@/assets/admin/img/car/car.jpg", import.meta.url).href;
      }
    },
    getCustomerImageUrl() {
      return new URL(
        "@/assets/admin/img/profiles/avatar-01.jpg",
        import.meta.url
      ).href;
    },
    getStatusBadgeClass(status) {
      const statusClasses = {
        confirmed: "badge badge-soft-success",
        "in progress": "badge badge-soft-warning",
        completed: "badge badge-soft-primary",
        rejected: "badge badge-soft-danger",
      };
      return (
        statusClasses[status.toLowerCase()] || "badge badge-soft-secondary"
      );
    },
    formatDate(dateString) {
      if (!dateString) return "N/A";
      return new Date(dateString).toLocaleDateString("en-US", {
        year: "numeric",
        month: "short",
        day: "numeric",
      });
    },
    async fetchBookings() {
      try {
        this.loading = true;
        const response = await adminApi.getBookings();
        this.bookings = response.data;
      } catch (error) {
        this.error =
          "Failed to fetch bookings: " +
          (error.response?.data?.message || error.message);
        console.error("Error fetching bookings:", error);
      } finally {
        this.loading = false;
      }
    },
    async deleteBooking(bookingId) {
      if (confirm("Are you sure you want to delete this booking?")) {
        try {
          await adminApi.deleteBooking(bookingId);
          // Remove the booking from the local list
          this.bookings = this.bookings.filter(
            (booking) => booking.id !== bookingId
          );
        } catch (error) {
          alert(
            "Failed to delete booking: " +
              (error.response?.data?.message || error.message)
          );
          console.error("Error deleting booking:", error);
        }
      }
    },
    searchBookings() {
      // In a real implementation, this would filter the bookings based on the search query
      // For now, we'll just refetch all bookings
      this.fetchBookings();
    },
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
  mounted() {
    this.fetchBookings();
  },
};
</script>
