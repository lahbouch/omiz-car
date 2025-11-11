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
            <form action="javascript:;">
              <div class="row">
                <h1>Contactez Omiz Car</h1>
                <div class="col-md-12">
                  <div class="input-block">
                    <label>Nom <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="" />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="input-block">
                    <label
                      >Adresse email <span class="text-danger">*</span></label
                    >
                    <input type="text" class="form-control" placeholder="" />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="input-block">
                    <label
                      >Numéro de téléphone
                      <span class="text-danger">*</span></label
                    >
                    <input type="text" class="form-control" placeholder="" />
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
                      placeholder=""
                    >
                    </textarea>
                  </div>
                </div>
              </div>
              <button class="btn contact-btn">Réservez sur WhatsApp</button>
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
export default {
  data() {
    return {
      ContactUS: ContactUS,
      title: "Contact",
      text: "Pages",
      text1: "Contact",
    };
  },
};
</script>
