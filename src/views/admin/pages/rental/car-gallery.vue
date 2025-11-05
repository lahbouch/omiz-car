<template>
  <div class="tab-pane fade" id="car-gallery">
    <div class="border-bottom mb-3 pb-3">
      <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
        <h6>Gallery</h6>
        <router-link to="/admin-template/rentals/edit-car" class="link-default">
          <i class="ti ti-edit"></i>
        </router-link>
      </div>

      <!-- Gallery using vue-easy-lightbox -->
      <div class="d-flex align-items-center flex-wrap gap-3">
        <div class="gallery-wrap" v-for="(image, index) in images" :key="index">
          <img
            :src="getImageUrl(image.thumbnail)"
            :alt="'Car image ' + index"
            @click="openLightbox(index)"
          />
        </div>
      </div>
    </div>

    <!-- Video section -->
    <div>
      <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
        <h6>Video</h6>
        <router-link to="/admin-template/rentals/edit-car" class="link-default">
          <i class="ti ti-edit"></i>
        </router-link>
      </div>
      <video-gallery></video-gallery>
    </div>

    <!-- Lightbox modal -->
    <vue-easy-lightbox
      :visible="visible"
      :imgs="images.map((image) => getImageUrlOne(image.fullImage))"
      :index="currentIndex"
      @hide="visible = false"
    />
  </div>
</template>

<script>
import { ref } from "vue";
import VueEasyLightbox from "vue-easy-lightbox";

export default {
  components: {
    VueEasyLightbox,
  },
  data() {
    return {
      visible: false, // Controls visibility of the lightbox
      currentIndex: 0, // Holds the current image index for lightbox
      images: [
        {
          thumbnail: "car-02.jpg",
          fullImage: "car-lg-02.jpg",
        },
        {
          thumbnail: "car-07.jpg",
          fullImage: "car-lg-03.jpg",
        },
        {
          thumbnail: "car-04.jpg",
          fullImage: "car-lg-04.jpg",
        },
      ],
    };
  },
  methods: {
    openLightbox(index) {
      this.currentIndex = index;
      this.visible = true;
    },
    getImageUrl(imageName) {
      return new URL(`/src/assets/admin/img/car/${imageName}`, import.meta.url).href;
    },
    getImageUrlOne(imageName) {
      return new URL(`/src/assets/admin/img/car/${imageName}`, import.meta.url).href;
    },
  },
};
</script>
