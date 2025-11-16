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
          <h4 class="mb-1">All Cars</h4>
          <nav>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <router-link to="/admin-template/index">Home</router-link>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                All Cars
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
          <div class="mb-2 me-2">
            <div class="dropdown">
              <a
                href="javascript:void(0);"
                class="btn btn-dark d-inline-flex align-items-center"
              >
                <i class="ti ti-upload me-1"></i>Export
              </a>
            </div>
          </div>
          <div class="mb-2">
            <router-link
              to="/admin-template/rentals/add-car-simple"
              class="btn btn-primary d-flex align-items-center me-2"
            >
              <i class="ti ti-plus me-2"></i>Add New Car (Simple)
            </router-link>
            <router-link
              to="/admin-template/rentals/add-car"
              class="btn btn-secondary d-flex align-items-center"
            >
              <i class="ti ti-plus me-2"></i>Add New Car (Full)
            </router-link>
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
          <div class="dropdown me-2">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
              data-bs-toggle="dropdown"
            >
              <i class="ti ti-edit-circle me-1"></i> Bulk Actions
            </a>
            <ul class="dropdown-menu dropdown-menu-end p-2">
              <li>
                <a href="javascript:void(0);" class="dropdown-item rounded-1"
                  >Delete</a
                >
              </li>
            </ul>
          </div>
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
                @input="searchCars"
              />
            </div>
          </div>
          <div class="dropdown">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle coloumn btn btn-white d-inline-flex align-items-center"
              data-bs-toggle="dropdown"
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
                      ><i class="ti ti-grip-vertical me-1"></i> CAR</span
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
                      ><i class="ti ti-grip-vertical me-1"></i>BASE
                      LOCATION</span
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
                      ><i class="ti ti-grip-vertical me-1"></i>PRICE (PER
                      DAY)</span
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
                    <span><i class="ti ti-grip-vertical me-1"></i>DAMAGES</span>
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
                      ><i class="ti ti-grip-vertical me-1"></i>IS FEATURED</span
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
                      ><i class="ti ti-grip-vertical me-1"></i>CREATED
                      DATE</span
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
              Select Cars
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
                  <input
                    class="form-check-input m-0 me-2"
                    type="checkbox"
                  />Ford Endeavour
                </label>
              </li>
              <li>
                <label
                  class="dropdown-item d-flex align-items-center rounded-1"
                >
                  <input
                    class="form-check-input m-0 me-2"
                    type="checkbox"
                  />Ferrari 458 MM
                </label>
              </li>
              <li>
                <label
                  class="dropdown-item d-flex align-items-center rounded-1"
                >
                  <input
                    class="form-check-input m-0 me-2"
                    type="checkbox"
                  />Ford Mustang
                </label>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Car Table -->
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table datatable">
              <thead>
                <tr>
                  <th>CAR</th>
                  <th>BASE LOCATION</th>
                  <th>PRICE (PER DAY)</th>
                  <th>DAMAGES</th>
                  <th>IS FEATURED</th>
                  <th>CREATED DATE</th>
                  <th>STATUS</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="car in cars" :key="car.id">
                  <td>
                    <div class="d-flex align-items-center">
                      <router-link
                        to="/admin-template/rentals/car-details"
                        class="avatar avatar-lg"
                      >
                        <img
                          :src="getImageUrl(car.image_path || 'car-01.jpg')"
                          class="rounded-circle"
                          alt="img"
                        />
                      </router-link>
                      <div class="ms-2">
                        <router-link
                          to="/admin-template/rentals/car-details"
                          class="table-head"
                          >{{ car.make }} {{ car.model }}</router-link
                        >
                        <p class="mb-0">
                          {{ car.category ? car.category.name : "N/A" }}
                        </p>
                      </div>
                    </div>
                  </td>
                  <td>Tanger, Morocco</td>
                  <td>
                    {{ car.daily_rate ? car.daily_rate + " MAD" : "N/A" }}
                  </td>
                  <td>0</td>
                  <td>
                    <span class="badge badge-soft-success">Featured</span>
                  </td>
                  <td>{{ formatDate(car.created_at) }}</td>
                  <td>
                    <span class="badge badge-soft-success">Active</span>
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
                          :to="`/admin-template/rentals/edit-car/${car.id}`"
                        >
                          <i class="ti ti-edit-circle me-1"></i>Edit
                        </router-link>
                        <a
                          class="dropdown-item"
                          href="javascript:void(0);"
                          @click="deleteCar(car.id)"
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
      <!-- /Car Table -->

      <!-- Pagination -->
      <div class="d-sm-flex align-items-center justify-content-between p-3">
        <div class="mb-2 mb-sm-0">
          <p class="mb-0">Showing 1 to 10 of 10 entries</p>
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
      cars: [],
      searchQuery: "",
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
    getImageUrl(imagePath) {
      // If imagePath is provided and not null/empty, use the uploaded image
      if (imagePath) {
        // Handle both relative and absolute paths
        if (imagePath.startsWith("http")) {
          return imagePath;
        } else if (imagePath.startsWith("storage/")) {
          // For images uploaded to storage
          return `http://localhost:8001/${imagePath}`;
        } else {
          // For relative paths, assume they're in the car images directory
          return `http://localhost:8001/storage/${imagePath}`;
        }
      }
      // Fallback to default image
      return new URL("@/assets/admin/img/car/car-01.jpg", import.meta.url).href;
    },
    formatDate(dateString) {
      if (!dateString) return "N/A";
      return new Date(dateString).toLocaleDateString("en-US", {
        year: "numeric",
        month: "short",
        day: "numeric",
      });
    },
    async fetchCars() {
      try {
        this.loading = true;
        const response = await adminApi.getCars();
        this.cars = response.data;
      } catch (error) {
        this.error =
          "Failed to fetch cars: " +
          (error.response?.data?.message || error.message);
        console.error("Error fetching cars:", error);
      } finally {
        this.loading = false;
      }
    },
    async deleteCar(carId) {
      if (confirm("Are you sure you want to delete this car?")) {
        try {
          await adminApi.deleteCar(carId);
          // Remove the car from the local list
          this.cars = this.cars.filter((car) => car.id !== carId);
        } catch (error) {
          alert(
            "Failed to delete car: " +
              (error.response?.data?.message || error.message)
          );
          console.error("Error deleting car:", error);
        }
      }
    },
    searchCars() {
      // In a real implementation, this would filter the cars based on the search query
      // For now, we'll just refetch all cars
      this.fetchCars();
    },
  },
  mounted() {
    this.fetchCars();
  },
};
</script>
