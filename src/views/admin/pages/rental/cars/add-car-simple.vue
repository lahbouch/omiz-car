<template>
  <admin-header></admin-header>
  <admin-sidebar></admin-sidebar>

  <!-- Page Wrapper -->
  <div class="page-wrapper">
    <div class="content me-0">
      <div class="mb-3">
        <router-link
          to="/admin-template/rentals/cars"
          class="d-inline-flex align-items-center fw-medium"
          ><i class="ti ti-arrow-left me-1"></i>Back to List</router-link
        >
      </div>
      <div class="card mb-0">
        <div class="card-body">
          <div class="add-wizard car-steps">
            <h3 class="mb-4">Add New Car</h3>

            <div v-if="error" class="alert alert-danger">
              {{ error }}
            </div>

            <form @submit.prevent="submitForm">
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label"
                      >Make <span class="text-danger">*</span></label
                    >
                    <input
                      type="text"
                      class="form-control"
                      v-model="carData.make"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label"
                      >Model <span class="text-danger">*</span></label
                    >
                    <input
                      type="text"
                      class="form-control"
                      v-model="carData.model"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label"
                      >Registration Number
                      <span class="text-danger">*</span></label
                    >
                    <input
                      type="text"
                      class="form-control"
                      v-model="carData.registration_number"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label"
                      >Year <span class="text-danger">*</span></label
                    >
                    <input
                      type="number"
                      class="form-control"
                      v-model="carData.year"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Color</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="carData.color"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label"
                      >Daily Rate (MAD)
                      <span class="text-danger">*</span></label
                    >
                    <input
                      type="number"
                      class="form-control"
                      v-model="carData.daily_rate"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select class="form-control" v-model="carData.category_id">
                      <option value="1">Économique</option>
                      <option value="2">Compacte</option>
                      <option value="3">Berline</option>
                      <option value="4">SUV</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Features</label>
                    <textarea
                      class="form-control"
                      v-model="carData.features"
                      rows="3"
                    ></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Available</label>
                    <select class="form-control" v-model="carData.available">
                      <option :value="true">Yes</option>
                      <option :value="false">No</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="d-flex justify-content-end mt-4">
                <router-link
                  to="/admin-template/rentals/cars"
                  class="btn btn-secondary me-2"
                >
                  Cancel
                </router-link>
                <button
                  type="submit"
                  class="btn btn-primary"
                  :disabled="loading"
                >
                  <span v-if="loading">Saving...</span>
                  <span v-else>Save Car</span>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import adminApi from "@/services/adminApi";

export default {
  data() {
    return {
      carData: {
        make: "",
        model: "",
        registration_number: "",
        year: "",
        color: "",
        daily_rate: "",
        category_id: 1,
        available: true,
        features: "",
      },
      loading: false,
      error: null,
    };
  },
  methods: {
    async submitForm() {
      this.loading = true;
      this.error = null;

      try {
        const response = await adminApi.createCar(this.carData);
        console.log("Car created successfully:", response.data);
        this.$router.push("/admin-template/rentals/cars");
      } catch (error) {
        this.error =
          "Failed to create car: " +
          (error.response?.data?.message || error.message);
        console.error("Error creating car:", error);
      } finally {
        this.loading = false;
      }
    },
  },
};
</script>
