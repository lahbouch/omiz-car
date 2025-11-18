<template>
  <section class="rental-section-four">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="rental-img">
            <img
              src="/src/assets/img/about/rent-car.png"
              alt="img"
              class="img-fluid"
            />
          </div>
        </div>
        <div class="col-lg-5">
          <div class="rental-content">
            <div
              class="section-heading heading-four text-start"
              data-aos="fade-down"
            >
              <h2>{{ $t("Rent your car in 3 simple steps") }}</h2>
              <p>{{ $t("Discover how to book your car with Omiz Car") }}</p>
            </div>
            <div class="step-item d-flex align-items-center">
              <span class="step-icon bg-primary me-3">
                <i class="bx bx-calendar-heart"></i>
              </span>
              <div>
                <h5>{{ $t("1. Choose the date and location") }}</h5>
                <p>
                  {{
                    $t(
                      "Determine the date and location of your rental. Consider your travel itinerary and pick-up/return locations"
                    )
                  }}
                </p>
              </div>
            </div>
            <div class="step-item d-flex align-items-center">
              <span class="step-icon bg-secondary-100 me-3">
                <i class="bx bxs-edit-location"></i>
              </span>
              <div>
                <h5>{{ $t("2. Select your vehicle") }}</h5>
                <p>
                  {{
                    $t(
                      "Check the availability of the desired vehicle type for your chosen dates and locations."
                    )
                  }}
                </p>
              </div>
            </div>
            <div class="step-item d-flex align-items-center">
              <span class="step-icon bg-dark me-3">
                <i class="bx bx-coffee-togo"></i>
              </span>
              <div>
                <h5>{{ $t("3. Book and receive your car") }}</h5>
                <p>
                  {{
                    $t(
                      "Confirm your reservation and receive your car according to your preferences."
                    )
                  }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
