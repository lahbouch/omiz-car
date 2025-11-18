<template>
  <layouts-header></layouts-header>
  <breadcrumb :title="title" :text="text" :text1="text1" />
  <!-- Contact us -->
  <section class="contact-section">
    <div class="container">
      <div class="contact-info-area">
        <div class="row">
          <div
            class="col-lg-3 col-md-6 col-12 d-flex"
            v-for="item in ContactUS"
            :key="item.id"
            data-aos="fade-down"
            data-aos-duration="1200"
            data-aos-delay="0.1"
          >
            <div class="single-contact-info flex-fill">
              <span><i :class="item.Icon"></i></span>
              <h3>{{ item.Title }}</h3>
              <a href="javascript:;">{{ item.Content }}</a>
            </div>
          </div>
        </div>
      </div>
      <div
        class="form-info-area"
        data-aos="fade-down"
        data-aos-duration="1200"
        data-aos-delay="0.5"
      >
        <div class="row">
          <div class="col-lg-6">
            <img
              src="@/assets/img/contact-info.jpg"
              class="img-fluid"
              alt="Contact"
            />
          </div>
          <div class="col-lg-6">
            <form @submit.prevent="submitContactForm">
              <div class="row">
                <h1>Contactez Omiz Car</h1>
                <div v-if="successMessage" class="alert alert-success">
                  {{ successMessage }}
                </div>
                <div v-if="errorMessage" class="alert alert-danger">
                  {{ errorMessage }}
                </div>
                <div class="col-md-12">
                  <div class="input-block">
                    <label>Nom <span class="text-danger">*</span></label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="contactForm.name"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="input-block">
                    <label
                      >Adresse email <span class="text-danger">*</span></label
                    >
                    <input
                      type="email"
                      class="form-control"
                      v-model="contactForm.email"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="input-block">
                    <label
                      >Numéro de téléphone
                      <span class="text-danger">*</span></label
                    >
                    <input
                      type="text"
                      class="form-control"
                      v-model="contactForm.phone"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="input-block">
                    <label
                      >Commentaires <span class="text-danger">*</span></label
                    >
                    <textarea
                      class="form-control"
                      rows="4"
                      cols="50"
                      v-model="contactForm.message"
                      required
                    >
                    </textarea>
                  </div>
                </div>
              </div>
              <button class="btn contact-btn" :disabled="loading">
                <span v-if="loading">Envoi en cours...</span>
                <span v-else>Réservez sur WhatsApp</span>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Contact us -->
  <scroll></scroll>
  <layout-footer></layout-footer>
</template>

<script>
import ContactUS from "@/assets/json/contact-us.json";
import api from "@/services/api";

export default {
  data() {
    return {
      ContactUS: ContactUS,
      title: this.$t("Contact"),
      text: this.$t("Pages"),
      text1: this.$t("Contact"),
      contactForm: {
        name: "",
        email: "",
        phone: "",
        message: "",
      },
      loading: false,
      successMessage: "",
      errorMessage: "",
    };
  },
  methods: {
    async submitContactForm() {
      this.loading = true;
      this.successMessage = "";
      this.errorMessage = "";

      try {
        await api.createContactMessage(this.contactForm);
        this.successMessage = "Votre message a été envoyé avec succès!";
        // Reset form
        this.contactForm = {
          name: "",
          email: "",
          phone: "",
          message: "",
        };
      } catch (error) {
        this.errorMessage =
          "Erreur lors de l'envoi du message. Veuillez réessayer.";
        console.error("Error submitting contact form:", error);
      } finally {
        this.loading = false;
      }
    },
  },
};
</script>
