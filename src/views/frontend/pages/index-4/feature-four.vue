<template>
  <section class="feature-section pt-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="feature-img">
            <div
              class="section-heading heading-four text-start"
              data-aos="fade-down"
            >
              <h2>{{ $t("Why choose Omiz Car?") }}</h2>
              <p>
                {{
                  $t(
                    "Because we understand your mobility needs in unfamiliar cities. We offer you a professional, reliable and fast service as if you were at home."
                  )
                }}
              </p>
            </div>
            <img
              src="/src/assets/img/cars/car.png"
              alt="img"
              class="img-fluid"
            />
          </div>
        </div>

        <div class="col-lg-6">
          <div class="row row-gap-4">
            <!-- Feature Item -->
            <div class="col-md-6 d-flex">
              <div class="feature-item flex-fill">
                <span class="feature-icon">
                  <i class="bx bxs-info-circle"></i>
                </span>
                <div>
                  <h6 class="mb-1">{{ $t("Competitive prices") }}</h6>
                  <p>{{ $t("Attractive rates for optimal quality") }}</p>
                </div>
              </div>
            </div>
            <!-- /Feature Item -->

            <!-- Feature Item -->
            <div class="col-md-6 d-flex">
              <div class="feature-item flex-fill">
                <span class="feature-icon">
                  <i class="bx bx-exclude"></i>
                </span>
                <div>
                  <h6 class="mb-1">{{ $t("Airport delivery") }}</h6>
                  <p>
                    {{ $t("Receive your car directly at Tangier airport") }}
                  </p>
                </div>
              </div>
            </div>
            <!-- /Feature Item -->

            <!-- Feature Item -->
            <div class="col-md-6 d-flex">
              <div class="feature-item flex-fill">
                <span class="feature-icon">
                  <i class="bx bx-money"></i>
                </span>
                <div>
                  <h6 class="mb-1">{{ $t("Reduced deposit") }}</h6>
                  <p>
                    {{ $t("An affordable deposit for your peace of mind") }}
                  </p>
                </div>
              </div>
            </div>
            <!-- /Feature Item -->

            <!-- Feature Item -->
            <div class="col-md-6 d-flex">
              <div class="feature-item flex-fill">
                <span class="feature-icon">
                  <i class="bx bxs-car-mechanic"></i>
                </span>
                <div>
                  <h6 class="mb-1">{{ $t("Maintained fleet") }}</h6>
                  <p>
                    {{
                      $t(
                        "A fleet of 15 economical vehicles regularly maintained"
                      )
                    }}
                  </p>
                </div>
              </div>
            </div>
            <!-- /Feature Item -->

            <!-- Feature Item -->
            <div class="col-md-6 d-flex">
              <div class="feature-item flex-fill">
                <span class="feature-icon">
                  <i class="bx bx-support"></i>
                </span>
                <div>
                  <h6 class="mb-1">{{ $t("24/7 assistance") }}</h6>
                  <p>
                    {{
                      $t(
                        "Customer service available at all times to accompany you"
                      )
                    }}
                  </p>
                </div>
              </div>
            </div>
            <!-- /Feature Item -->

            <!-- Feature Item -->
            <div class="col-md-6 d-flex">
              <div class="feature-item flex-fill">
                <span class="feature-icon">
                  <i class="bx bxs-coin"></i>
                </span>
                <div>
                  <h6 class="mb-1">{{ $t("Total transparency") }}</h6>
                  <p>{{ $t("No hidden fees, clear and detailed pricing") }}</p>
                </div>
              </div>
            </div>
            <!-- /Feature Item -->
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
