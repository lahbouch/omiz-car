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
                <!-- Image Upload Section -->
                <div class="col-md-12 mb-4">
                  <div class="d-flex align-items-center gap-4 flex-wrap">
                    <div
                      class="d-flex align-items-center justify-content-center avatar avatar-xxl me-3 flex-shrink-0 border rounded-circle frames"
                    >
                      <img
                        :src="
                          previewImage || '@/assets/admin/img/car/car-02.jpg'
                        "
                        class="img-fluid rounded-circle"
                        alt="Car"
                        style="width: 100%; height: 100%; object-fit: cover"
                      />
                      <a
                        href="javascript:void(0);"
                        class="upload-img-trash trash-end btn btn-sm rounded-circle"
                        @click="removeImage"
                        v-if="previewImage"
                      >
                        <i class="ti ti-trash fs-12"></i>
                      </a>
                    </div>
                    <div>
                      <div
                        class="drag-upload-btn btn btn-md btn-dark d-inline-flex align-items-center mb-2"
                      >
                        <i class="ti ti-photo me-1"></i>Upload Photo
                        <input
                          type="file"
                          class="form-control image-sign"
                          @change="handleImageUpload"
                          accept="image/*"
                        />
                      </div>
                      <p class="mb-0">Recommended size is 500px x 500px</p>
                    </div>
                  </div>
                </div>

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
                    <label class="form-label">Transmission</label>
                    <select class="form-control" v-model="carData.transmission">
                      <option value="Auto">Auto</option>
                      <option value="Manual">Manual</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Mileage (KM)</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="carData.mileage"
                      placeholder="e.g., 10 KM"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Fuel Type</label>
                    <select class="form-control" v-model="carData.fuel_type">
                      <option value="Petrol">Petrol</option>
                      <option value="Diesel">Diesel</option>
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
        transmission: "Auto",
        mileage: "10 KM",
        fuel_type: "Petrol",
        available: true,
        features: "",
        image_path: "",
      },
      loading: false,
      error: null,
      previewImage: null,
      imageFile: null,
    };
  },
  methods: {
    handleImageUpload(event) {
      const file = event.target.files[0];
      if (file) {
        this.imageFile = file;
        // Create a preview of the image
        const reader = new FileReader();
        reader.onload = (e) => {
          this.previewImage = e.target.result;
        };
        reader.readAsDataURL(file);
      }
    },
    removeImage() {
      this.previewImage = null;
      this.imageFile = null;
      this.carData.image_path = "";
    },
    async uploadImage() {
      if (!this.imageFile) return null;

      try {
        // Upload the image to the server
        const response = await adminApi.uploadCarImage(this.imageFile);
        if (response.data.success) {
          return response.data.image_path;
        } else {
          throw new Error(response.data.message || "Failed to upload image");
        }
      } catch (error) {
        console.error("Error uploading image:", error);
        throw error;
      }
    },
    async submitForm() {
      this.loading = true;
      this.error = null;

      try {
        // Upload image first if exists
        if (this.imageFile) {
          const imagePath = await this.uploadImage();
          this.carData.image_path = imagePath;
        }

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
