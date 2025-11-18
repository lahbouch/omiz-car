<template>
  <layouts-header></layouts-header>
  <breadcrumb :title="title" :text="text" :text1="text1" />
  <!-- About -->
  <aboutexperiences></aboutexperiences>
  <!-- /About -->

  <!-- services -->
  <service></service>
  <!-- /services -->

  <!-- Facts By The Numbers -->
  <factnumbers></factnumbers>
  <!-- /Facts By The Numbers -->

  <!-- Why Choose Us -->
  <choose-us></choose-us>
  <!-- /Why Choose Us -->

  <!-- About us Testimonials -->
  <testimonial></testimonial>
  <!-- About us Testimonials -->

  <!-- FAQ  -->
  <faq></faq>
  <!-- /FAQ -->
  <layout-footer></layout-footer>
</template>

<script>
export default {
  data() {
    return {
      title: this.$t("About Us"),
      text: this.$t("Pages"),
      text1: this.$t("About Us"),
    };
  },
};
</script>
