<template>
  <!-- Popular Services -->
  <section class="section popular-services popular-explore">
    <div class="container">
      <!-- Heading title-->
      <div class="section-heading" data-aos="fade-down">
        <h2>Explore Most Popular Cars</h2>
        <p>
          Here's a list of some of the most popular cars globally, based on sales and customer preferences
        </p>
      </div>
      <!-- /Heading title -->
      <div class="row justify-content-center">
        <div class="col-lg-12" data-aos="fade-down">
          <div class="listing-tabs-group">
            <ul class="nav listing-buttons gap-3" data-bs-tabs="tabs">
              <li>
                <a
                  class="active"
                  aria-current="true"
                  data-bs-toggle="tab"
                  href="#Carmazda"
                >
                  <span>
                    <img src="@/assets/img/icons/car-icon-01.svg" alt="Mazda" />
                  </span>
                  Mazda
                </a>
              </li>
              <li>
                <a data-bs-toggle="tab" href="#Caraudi">
                  <span>
                    <img src="@/assets/img/icons/car-icon-02.svg" alt="Audi" />
                  </span>
                  Audi
                </a>
              </li>
              <li>
                <a data-bs-toggle="tab" href="#Carhonda">
                  <span>
                    <img src="@/assets/img/icons/car-icon-03.svg" alt="Honda" />
                  </span>
                  Honda
                </a>
              </li>
              <li>
                <a data-bs-toggle="tab" href="#Cartoyota">
                  <span>
                    <img src="@/assets/img/icons/car-icon-04.svg" alt="Toyota" />
                  </span>
                  Toyota
                </a>
              </li>
              <li>
                <a data-bs-toggle="tab" href="#Caracura">
                  <span>
                    <img src="@/assets/img/icons/car-icon-05.svg" alt="Acura" />
                  </span>
                  Acura
                </a>
              </li>
              <li>
                <a data-bs-toggle="tab" href="#Cartesla">
                  <span>
                    <img src="@/assets/img/icons/car-icon-06.svg" alt="Tesla" />
                  </span>
                  Tesla
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="tab-content">
        <div class="tab-pane active" id="Carmazda">
          <mazda></mazda>
        </div>
        <div class="tab-pane fade" id="Caraudi">
          <audi></audi>
        </div>
        <div class="tab-pane fade" id="Carhonda">
          <honda></honda>
        </div>
        <div class="tab-pane fade" id="Cartoyota">
          <toyota></toyota>
        </div>
        <div class="tab-pane fade" id="Caracura">
          <acura></acura>
        </div>
        <div class="tab-pane fade" id="Cartesla">
          <tesla></tesla>
        </div>
      </div>
    </div>
  </section>
  <!-- /Popular Services -->
</template>
