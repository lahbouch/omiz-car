<template>
  <div class="col-xl-3 col-lg-4 col-sm-12 col-12 theiaStickySidebar">
    <div class="stickysidebar">
      <form action="#" autocomplete="off" class="sidebar-form">
        <div class="sidebar-heading">
          <h3>What Are You Looking For</h3>
        </div>
        <div class="product-search">
          <div class="form-custom">
            <input type="text" class="form-control" id="member_search1" placeholder="" />
            <span><img src="@/assets/img/icons/search.svg" alt="img" /></span>
          </div>
        </div>
        <div class="product-availability">
          <h6>Availability</h6>
          <div class="status-toggle">
            <input id="mobile_notifications" class="check" type="checkbox" checked="" />
            <label for="mobile_notifications" class="checktoggle">checkbox</label>
          </div>
        </div>
        <div class="accord-list">
          <div class="accordion" id="accordionMain1">
            <div class="card-header-new" id="headingOne">
              <h6 class="filter-title">
                <a
                  href="javascript:void(0);"
                  class="w-100"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne"
                >
                  Car Brand
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>
            <div
              id="collapseOne"
              class="collapse show"
              aria-labelledby="headingOne"
              data-bs-parent="#accordionExample1"
            >
              <div class="card-body-chat">
                <div class="row">
                  <div class="col-md-12">
                    <div id="checkBoxes1">
                      <div class="selectBox-cont">
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Tesla
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Ford
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Mercediz Benz
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Audi
                        </label>
                        <!-- View All -->
                        <div class="view-content">
                          <div class="viewall-One">
                            <label class="custom_check w-100">
                              <input type="checkbox" name="username" />
                              <span class="checkmark"></span> Kia
                            </label>
                            <label class="custom_check w-100">
                              <input type="checkbox" name="username" />
                              <span class="checkmark"></span> Honda
                            </label>
                            <label class="custom_check w-100">
                              <input type="checkbox" name="username" />
                              <span class="checkmark"></span> Toyota
                            </label>
                          </div>
                        </div>
                        <!-- /View All -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionMain2">
            <div class="card-header-new" id="headingTwo">
              <h6 class="filter-title">
                <a
                  href="javascript:void(0);"
                  class="w-100 collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo"
                  aria-expanded="true"
                  aria-controls="collapseTwo"
                >
                  Car Category
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>
            <div
              id="collapseTwo"
              class="collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample2"
            >
              <div class="card-body-chat">
                <div id="checkBoxes2">
                  <div class="selectBox-cont">
                    <label class="custom_check w-100">
                      <input type="checkbox" name="username" />
                      <span class="checkmark"></span> Convertible (25)
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="username" />
                      <span class="checkmark"></span> Coupe (15)
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="username" />
                      <span class="checkmark"></span> Sedan (10)
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="username" />
                      <span class="checkmark"></span> EV (5)
                    </label>
                    <!-- View All -->
                    <div class="view-content">
                      <div class="viewall-One">
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Hatchback (123)
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Luxury (06)
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> SUV (6)
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Wagon (5)
                        </label>
                      </div>
                    </div>
                    <!-- /View All -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionMain3">
            <div class="card-header-new" id="headingYear">
              <h6 class="filter-title">
                <a
                  href="javascript:void(0);"
                  class="w-100 collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseYear"
                  aria-expanded="true"
                  aria-controls="collapseYear"
                >
                  Year
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>
            <div
              id="collapseYear"
              class="collapse"
              aria-labelledby="headingYear"
              data-bs-parent="#accordionExample2"
            >
              <div class="card-body-chat">
                <div id="checkBoxes02">
                  <div class="selectBox-cont">
                    <label class="custom_check w-100">
                      <input type="checkbox" name="username" />
                      <span class="checkmark"></span> 2024
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="username" />
                      <span class="checkmark"></span> 2022
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="username" />
                      <span class="checkmark"></span> 2021
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="username" />
                      <span class="checkmark"></span> 2020
                    </label>
                    <!-- View All -->
                    <div class="view-content">
                      <div class="viewall-One">
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> 2019
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> 2018
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> 2019
                        </label>
                      </div>
                    </div>
                    <!-- /View All -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionMain04">
            <div class="card-header-new" id="headingfuel">
              <h6 class="filter-title">
                <a
                  href="javascript:void(0);"
                  class="w-100 collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapsefuel"
                  aria-expanded="true"
                  aria-controls="collapsefuel"
                >
                  Fuel Type
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>
            <div
              id="collapsefuel"
              class="collapse"
              aria-labelledby="headingfuel"
              data-bs-parent="#accordionExample2"
            >
              <div class="card-body-chat">
                <div class="fuel-list">
                  <ul>
                    <li>
                      <div class="input-selection">
                        <input
                          type="radio"
                          name="color"
                          id="petrol"
                          value="red"
                          checked=""
                        />
                        <label for="petrol">Petrol</label>
                      </div>
                    </li>
                    <li>
                      <div class="input-selection">
                        <input
                          type="radio"
                          name="color"
                          id="diesel"
                          value="red"
                          checked=""
                        />
                        <label for="diesel">Diesel</label>
                      </div>
                    </li>
                    <li>
                      <div class="input-selection">
                        <input
                          type="radio"
                          name="color"
                          id="electric"
                          value="red"
                          checked=""
                        />
                        <label for="electric">Electric</label>
                      </div>
                    </li>
                    <li>
                      <div class="input-selection">
                        <input
                          type="radio"
                          name="color"
                          id="cng"
                          value="red"
                          checked=""
                        />
                        <label for="cng">CNG</label>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionMain5">
            <div class="card-header-new" id="headingmileage">
              <h6 class="filter-title">
                <a
                  href="javascript:void(0);"
                  class="w-100 collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapsemileage"
                  aria-expanded="true"
                  aria-controls="collapsemileage"
                >
                  Mileage
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>
            <div
              id="collapsemileage"
              class="collapse"
              aria-labelledby="headingmileage"
              data-bs-parent="#accordionExample2"
            >
              <div class="card-body-chat">
                <div class="fuel-list">
                  <ul>
                    <li>
                      <div class="input-selection">
                        <input
                          type="radio"
                          name="mileage"
                          id="limited"
                          value="red"
                          checked=""
                        />
                        <label for="limited">Limited</label>
                      </div>
                    </li>
                    <li>
                      <div class="input-selection">
                        <input
                          type="radio"
                          name="mileage"
                          id="unlimited"
                          value="red"
                          checked=""
                        />
                        <label for="unlimited">Unlimited</label>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionMain6">
            <div class="card-header-new" id="headingrental">
              <h6 class="filter-title">
                <a
                  href="javascript:void(0);"
                  class="w-100 collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapserental"
                  aria-expanded="true"
                  aria-controls="collapserental"
                >
                  Rental Type
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>
            <div
              id="collapserental"
              class="collapse"
              aria-labelledby="headingrental"
              data-bs-parent="#accordionExample2"
            >
              <div class="card-body-chat">
                <div class="fuel-list">
                  <ul>
                    <li>
                      <div class="input-selection">
                        <input type="radio" name="any" id="any" />
                        <label for="any">Any</label>
                      </div>
                    </li>
                    <li>
                      <div class="input-selection">
                        <input type="radio" name="day" id="day" checked="" />
                        <label for="day">Per Day</label>
                      </div>
                    </li>
                    <li>
                      <div class="input-selection">
                        <input type="radio" name="hour" id="hour" checked="" />
                        <label for="hour">Per Hour</label>
                      </div>
                    </li>
                    <li>
                      <div class="input-selection">
                        <input type="radio" name="week" id="week" />
                        <label for="week">Per Week</label>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionMain06">
            <div class="card-header-new" id="headingspec">
              <h6 class="filter-title">
                <a
                  href="javascript:void(0);"
                  class="w-100 collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapsespec"
                  aria-expanded="true"
                  aria-controls="collapsespec"
                >
                  Car Specifications
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>
            <div
              id="collapsespec"
              class="collapse"
              aria-labelledby="headingspec"
              data-bs-parent="#accordionExample2"
            >
              <div class="card-body-chat">
                <div id="checkBoxes20">
                  <div class="selectBox-cont">
                    <label class="custom_check w-100">
                      <input type="checkbox" name="username" />
                      <span class="checkmark"></span> Air Conditioners
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="username" />
                      <span class="checkmark"></span> Keyless
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="username" />
                      <span class="checkmark"></span> Panoramic
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="username" />
                      <span class="checkmark"></span> Bluetooth
                    </label>
                    <!-- View All -->
                    <div class="view-content">
                      <div class="viewall-One">
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Aux
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Top Window
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Speakers
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Automatic Window
                        </label>
                      </div>
                    </div>
                    <!-- /View All -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionMain7">
            <div class="card-header-new" id="headingColor">
              <h6 class="filter-title">
                <a
                  href="javascript:void(0);"
                  class="w-100 collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseColor"
                  aria-expanded="true"
                  aria-controls="collapseColor"
                >
                  Colors
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>
            <div
              id="collapseColor"
              class="collapse"
              aria-labelledby="headingColor"
              data-bs-parent="#accordionExample2"
            >
              <div class="card-body-chat">
                <div class="theme-colorsset">
                  <ul>
                    <li>
                      <div class="input-themeselects">
                        <input
                          type="radio"
                          name="color"
                          id="greenColor"
                          value="red"
                          checked=""
                        />
                        <label for="greenColor" class="green-clr"></label>
                      </div>
                    </li>
                    <li>
                      <div class="input-themeselects">
                        <input
                          type="radio"
                          name="color"
                          id="yellowColor"
                          value="yellow"
                        />
                        <label for="yellowColor" class="yellow-clr"></label>
                      </div>
                    </li>
                    <li>
                      <div class="input-themeselects">
                        <input type="radio" name="color" id="brownColor" value="blue" />
                        <label for="brownColor" class="brown-clr"></label>
                      </div>
                    </li>
                    <li>
                      <div class="input-themeselects">
                        <input type="radio" name="color" id="blackColor" value="green" />
                        <label for="blackColor" class="black-clr"></label>
                      </div>
                    </li>
                    <li>
                      <div class="input-themeselects">
                        <input
                          type="radio"
                          name="color"
                          id="redColor"
                          value="red"
                          checked=""
                        />
                        <label for="redColor" class="red-clr"></label>
                      </div>
                    </li>
                    <li>
                      <div class="input-themeselects">
                        <input type="radio" name="color" id="grayColor" value="blue" />
                        <label for="grayColor" class="gray-clr"></label>
                      </div>
                    </li>
                    <li>
                      <div class="input-themeselects">
                        <input
                          type="radio"
                          name="color"
                          id="gray100Color"
                          value="green"
                        />
                        <label for="gray100Color" class="gray100-clr"></label>
                      </div>
                    </li>
                    <li>
                      <div class="input-themeselects">
                        <input type="radio" name="color" id="blueColor" value="yellow" />
                        <label for="blueColor" class="blue-clr"></label>
                      </div>
                    </li>
                    <li>
                      <div class="input-themeselects">
                        <input type="radio" name="color" id="whiteColor" value="yellow" />
                        <label for="whiteColor" class="white-clr"></label>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionMain8">
            <div class="card-header-new" id="headingThree">
              <h6 class="filter-title">
                <a
                  href="javascript:void(0);"
                  class="w-100 collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseThree"
                  aria-expanded="true"
                  aria-controls="collapseThree"
                >
                  Capacity
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>
            <div
              id="collapseThree"
              class="collapse"
              aria-labelledby="headingThree"
              data-bs-parent="#accordionExample3"
            >
              <div class="card-body-chat">
                <div id="checkBoxes3">
                  <div class="selectBox-cont">
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus" />
                      <span class="checkmark"></span> 2 Seater
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus" />
                      <span class="checkmark"></span> 4 Seater
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus" />
                      <span class="checkmark"></span> 5 Seater
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus" />
                      <span class="checkmark"></span> 7 Seater
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionMain9">
            <div class="card-header-new" id="headingFour">
              <h6 class="filter-title">
                <a
                  href="javascript:void(0);"
                  class="w-100 collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseFour"
                  aria-expanded="true"
                  aria-controls="collapseFour"
                >
                  Price
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>
            <div
              id="collapseFour"
              class="collapse"
              aria-labelledby="headingFour"
              data-bs-parent="#accordionExample4"
            >
              <div class="card-body-chat">
                <div class="filter-range">
                  <Slider v-model="value" :merge="merge" />
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionMain4">
            <div class="card-header-new" id="headingtransmiss">
              <h6 class="filter-title">
                <a
                  href="javascript:void(0);"
                  class="w-100 collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapsetransmission"
                  aria-expanded="true"
                  aria-controls="collapsetransmission"
                >
                  Transmission
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>
            <div
              id="collapsetransmission"
              class="collapse"
              aria-labelledby="headingtransmiss"
              data-bs-parent="#accordionExample2"
            >
              <div class="card-body-chat">
                <div class="fuel-list">
                  <ul>
                    <li>
                      <div class="input-selection">
                        <input type="radio" name="transmission" id="manual" checked="" />
                        <label for="manual">Manual </label>
                      </div>
                    </li>
                    <li>
                      <div class="input-selection">
                        <input type="radio" name="transmission" id="semi" />
                        <label for="semi">Semi Automatic</label>
                      </div>
                    </li>
                    <li>
                      <div class="input-selection">
                        <input type="radio" name="transmission" id="automatic" />
                        <label for="automatic">Automatic</label>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionMain10">
            <div class="card-header-new" id="headingFive">
              <h6 class="filter-title">
                <a
                  href="javascript:void(0);"
                  class="w-100 collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseFive"
                  aria-expanded="true"
                  aria-controls="collapseFive"
                >
                  Rating
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>
            <div
              id="collapseFive"
              class="collapse"
              aria-labelledby="headingFive"
              data-bs-parent="#accordionExample5"
            >
              <div class="card-body-chat">
                <div id="checkBoxes4">
                  <div class="selectBox-cont">
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category" />
                      <span class="checkmark"></span>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <span class="rating-count">5.0</span>
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category" />
                      <span class="checkmark"></span>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star"></i>
                      <span class="rating-count">4.0</span>
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category" />
                      <span class="checkmark"></span>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <span class="rating-count">3.0</span>
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category" />
                      <span class="checkmark"></span>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <span class="rating-count">2.0</span>
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="username" />
                      <span class="checkmark"></span>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <span class="rating-count">1.0</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionMain11">
            <div class="card-header-new" id="headingSix">
              <h6 class="filter-title">
                <a
                  href="javascript:void(0);"
                  class="w-100 collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseSix"
                  aria-expanded="true"
                  aria-controls="collapseSix"
                >
                  Customer Recommendation
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>
            <div
              id="collapseSix"
              class="collapse"
              aria-labelledby="headingSix"
              data-bs-parent="#accordionExample6"
            >
              <div class="card-body-chat">
                <div id="checkBoxes5">
                  <div class="selectBox-cont">
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category" />
                      <span class="checkmark"></span> 70% & up
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category" />
                      <span class="checkmark"></span> 60% & up
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category" />
                      <span class="checkmark"></span> 50% & up
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category" />
                      <span class="checkmark"></span> 40% & up
                    </label>
                    <div class="viewall-Two">
                      <label class="custom_check w-100">
                        <input type="checkbox" name="username" />
                        <span class="checkmark"></span>30% & up
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button
          type="submit"
          class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary filter-btn"
        >
          <span><i class="feather-filter me-2"></i></span>Filter results
        </button>
        <a href="#" class="reset-filter">Reset Filter</a>
      </form>
    </div>
  </div>
</template>
<script>
import Slider from "@vueform/slider";
export default {
  data() {
    return {
      value: [0, 50],
      merge: 10,
      format: {
        prefix: "",
      },
    };
  },
  components: {
    Slider,
  },
};
</script>
<style>
.slider-connect {
  background: var(--slider-connect-bg, #ff9307) !important;
  cursor: pointer;
}

.slider-tooltip {
  background: var(--slider-tooltip-bg, #0b2540) !important;
  border: 1px solid var(--slider-tooltip-bg, #0b2540) !important;
  border-radius: var(--slider-tooltip-radius, 5px);
  color: var(--slider-tooltip-color, #fff);
  display: block;
  font-size: var(--slider-tooltip-font-size, 0.875rem);
  font-weight: var(--slider-tooltip-font-weight, 600);
  line-height: var(--slider-tooltip-line-height, 1.25rem);
  min-width: var(--slider-tooltip-min-width, 20px);
  padding: var(--slider-tooltip-py, 2px) var(--slider-tooltip-px, 6px);
  position: absolute;
  text-align: center;
  white-space: nowrap;
}

.roundskin .slider-tooltip {
  background: var(--slider-tooltip-bg, #ff9307) !important;
  border: 1px solid var(--slider-tooltip-bg, #ff9307) !important;
  border-radius: var(--slider-tooltip-radius, 5px);
  color: var(--slider-tooltip-color, #fff);
  display: block;
  font-size: var(--slider-tooltip-font-size, 0.875rem);
  font-weight: var(--slider-tooltip-font-weight, 600);
  line-height: var(--slider-tooltip-line-height, 1.25rem);
  min-width: var(--slider-tooltip-min-width, 20px);
  padding: var(--slider-tooltip-py, 2px) var(--slider-tooltip-px, 6px);
  position: absolute;
  text-align: center;
  white-space: nowrap;
}

.slider-handle {
  background-color: #ff9307 !important;
  border: 2px solid #ff9307 !important;
}
</style>
<style src="@vueform/slider/themes/default.css"></style>
