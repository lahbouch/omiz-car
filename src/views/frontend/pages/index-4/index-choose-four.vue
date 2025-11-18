<template>
  <section class="section why-choose">
    <div class="choose-left">
      <img
        src="../../../../../assets/img/bg/choose-left.png"
        class="img-fluid"
        :alt="$t('Why Choose Us')"
      />
    </div>
    <div class="container">
      <!-- Heading title-->
      <div class="section-heading heading-four" data-aos="fade-down">
        <h2>{{ $t("Why Choose Us") }}</h2>
        <p>
          {{
            $t("Discover the reasons that make Omiz Car your trusted partner")
          }}
        </p>
      </div>
      <!-- /Heading title -->
      <div class="why-choose-group">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
            <div class="card flex-fill">
              <div class="card-body">
                <div class="choose-img choose-black">
                  <img
                    src="../../../../../assets/img/icons/bx-user-check.svg"
                    alt=""
                  />
                </div>
                <div class="choose-content">
                  <h4>{{ $t("Easy and fast booking") }}</h4>
                  <p>
                    {{
                      $t(
                        "Simplified and fast booking process via WhatsApp. Customer service available 24/7 to assist you."
                      )
                    }}
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
            <div class="card flex-fill">
              <div class="card-body">
                <div class="choose-img choose-secondary">
                  <img
                    src="../../../../../assets/img/icons/bx-crown.svg"
                    alt=""
                  />
                </div>
                <div class="choose-content">
                  <h4>{{ $t("Airport delivery") }}</h4>
                  <p>
                    {{
                      $t(
                        "Direct delivery service to Tangier airport. Extended service area up to 50 km around Tangier-Tetouan."
                      )
                    }}
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
            <div class="card flex-fill">
              <div class="card-body">
                <div class="choose-img choose-primary">
                  <img
                    src="../../../../../assets/img/icons/bx-badge-check.svg"
                    alt=""
                  />
                </div>
                <div class="choose-content">
                  <h4>{{ $t("Guaranteed customer satisfaction") }}</h4>
                  <p>
                    {{
                      $t(
                        "Fleet of 15 economical vehicles regularly maintained. 24/7 roadside assistance and quick replacement if needed."
                      )
                    }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "IndexChooseFour",
};
</script>
