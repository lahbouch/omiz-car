<template>
  <div class="review-sec mb-0">
    <div class="review-header">
      <h4>Description of Listing</h4>
    </div>
    <div class="description-list">
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
        unknown printer took a galley of type and scrambled it to make a type specimen
        book. It has survived not only five centuries, but also the leap into electronic
        typesetting, remaining essentially unchanged.
      </p>
      <p>
        It was popularised in the 1960s with the release of Letraset sheets containing
        Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.It was popularised in the 1960s
        with the release of Letraset sheets containing Lorem Ipsum passages, and more
        recently with desktop publishing software like Aldus PageMaker including versions
        of Lorem Ipsum.
      </p>
      <p>
        It was popularised in the 1960s with the release of Letraset sheets containing
        Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.
      </p>
      <div class="read-more">
        <div class="more-text" v-show="showMore">
          <p>
            It was popularised in the 1960s with the release of Letraset sheets containing
            Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.It was popularised in the
            1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
            more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.
          </p>
        </div>
        <a href="javascript:void(0);" class="more-link" @click="toggleMore">{{
          buttonText
        }}</a>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      showMore: false,
    };
  },
  computed: {
    buttonText() {
      return this.showMore ? "Show Less" : "Show More";
    },
  },
  methods: {
    toggleMore() {
      this.showMore = !this.showMore;
    },
  },
};
</script>
<style scoped>
/* Add your component styles here */
.read-more .more-text {
  display: none; /* Initially hide the more-text */
}
</style>
