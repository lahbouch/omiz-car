<template>
  <div class="review-sec mb-0 pb-0">
    <div class="review-header">
      <h4>Galerie</h4>
    </div>
    <div class="gallery-list">
      <ul>
        <li
          v-for="(image, index) in galleryImages"
          :key="index"
          @click="show(index)"
          data-aos="fade-down"
        >
          <div class="gallery-widget">
            <a href="javascript:;" data-fancybox="gallery1">
              <img
                class="img-fluid"
                alt="Image"
                :src="getImageUrl(image.src)"
              />
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <vue-easy-lightbox
    :visible="visible"
    :index="index"
    :imgs="galleryImagesOne.map((image) => ({ src: getImageUrl(image.src) }))"
    @hide="visible = false"
    @on-prev="handlePrev"
    @on-next="handleNext"
  />
</template>

<script>
import VueEasyLightbox from "vue-easy-lightbox";

export default {
  components: {
    VueEasyLightbox,
  },
  data() {
    return {
      title: "Galerie",
      text: "Pages",
      text1: "Galerie",
      visible: false,
      index: 0,
      galleryImages: [
        { src: "gallery-thumb-01.jpg" },
        { src: "gallery-thumb-02.jpg" },
        { src: "gallery-thumb-03.jpg" },
        { src: "gallery-thumb-04.jpg" },
      ],
      galleryImagesOne: [
        { src: "gallery-big-01.jpg" },
        { src: "gallery-big-02.jpg" },
        { src: "gallery-big-03.jpg" },
        { src: "gallery-big-04.jpg" },
      ],
    };
  },
  methods: {
    show(index) {
      this.index = index;
      this.visible = true;
    },
    handlePrev() {
      // Optional: implement if needed
    },
    handleNext() {
      // Optional: implement if needed
    },
    getImageUrl(imageName) {
      return new URL(`/src/assets/img/gallery/${imageName}`, import.meta.url)
        .href;
    },
  },
};
</script>
