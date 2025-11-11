<template>
  <div class="col-xl-3 col-lg-4 col-sm-12 col-12 theiaStickySidebar">
    <div class="stickysidebar">
      <form action="#" autocomplete="off" class="sidebar-form">
        <div class="sidebar-heading">
          <h3>Que recherchez-vous ?</h3>
        </div>
        <div class="product-search">
          <div class="form-custom">
            <input
              type="text"
              class="form-control"
              id="member_search1"
              placeholder="Rechercher..."
            />
            <span><img src="@/assets/img/icons/search.svg" alt="img" /></span>
          </div>
        </div>
        <div class="product-availability">
          <h6>Disponibilité</h6>
          <div class="status-toggle">
            <input
              id="mobile_notifications"
              class="check"
              type="checkbox"
              checked=""
            />
            <label for="mobile_notifications" class="checktoggle"
              >checkbox</label
            >
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
                  Marque
                  <span class="float-end"
                    ><i class="fa-solid fa-chevron-down"></i
                  ></span>
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
                          <span class="checkmark"></span> Toyota
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Renault
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Peugeot
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Volkswagen
                        </label>
                        <!-- View All -->
                        <div class="view-content">
                          <div class="viewall-One">
                            <label class="custom_check w-100">
                              <input type="checkbox" name="username" />
                              <span class="checkmark"></span> Dacia
                            </label>
                            <label class="custom_check w-100">
                              <input type="checkbox" name="username" />
                              <span class="checkmark"></span> Citroën
                            </label>
                            <label class="custom_check w-100">
                              <input type="checkbox" name="username" />
                              <span class="checkmark"></span> Fiat
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
                  Catégorie
                  <span class="float-end"
                    ><i class="fa-solid fa-chevron-down"></i
                  ></span>
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
                      <span class="checkmark"></span> Berline (25)
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="username" />
                      <span class="checkmark"></span> Citadine (15)
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="username" />
                      <span class="checkmark"></span> SUV (10)
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="username" />
                      <span class="checkmark"></span> Électrique (5)
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
                          <span class="checkmark"></span> Luxe (06)
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Monospace (6)
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Cabriolet (5)
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
                  Année
                  <span class="float-end"
                    ><i class="fa-solid fa-chevron-down"></i
                  ></span>
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
                          <span class="checkmark"></span> 2017
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
                  Type de carburant
                  <span class="float-end"
                    ><i class="fa-solid fa-chevron-down"></i
                  ></span>
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
                        <label for="petrol">Essence</label>
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
                        <label for="electric">Électrique</label>
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
                        <label for="cng">GPL</label>
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
                  Kilométrage
                  <span class="float-end"
                    ><i class="fa-solid fa-chevron-down"></i
                  ></span>
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
                        <label for="limited">Limité</label>
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
                        <label for="unlimited">Illimité</label>
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
                  Type de location
                  <span class="float-end"
                    ><i class="fa-solid fa-chevron-down"></i
                  ></span>
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
                        <label for="any">Tous</label>
                      </div>
                    </li>
                    <li>
                      <div class="input-selection">
                        <input type="radio" name="day" id="day" checked="" />
                        <label for="day">Par jour</label>
                      </div>
                    </li>
                    <li>
                      <div class="input-selection">
                        <input type="radio" name="hour" id="hour" checked="" />
                        <label for="hour">Par heure</label>
                      </div>
                    </li>
                    <li>
                      <div class="input-selection">
                        <input type="radio" name="week" id="week" />
                        <label for="week">Par semaine</label>
                      </div>
                    </li>
                    <li>
                      <div class="input-selection">
                        <input type="radio" name="month" id="month" />
                        <label for="month">Par mois</label>
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
                  Spécifications
                  <span class="float-end"
                    ><i class="fa-solid fa-chevron-down"></i
                  ></span>
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
                      <span class="checkmark"></span> Climatisation
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="username" />
                      <span class="checkmark"></span> Démarrage sans clé
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="username" />
                      <span class="checkmark"></span> Toit panoramique
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
                          <span class="checkmark"></span> Prise auxiliaire
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Vitres électriques
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Système de navigation
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Régulateur de vitesse
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
                  Couleurs
                  <span class="float-end"
                    ><i class="fa-solid fa-chevron-down"></i
                  ></span>
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
                        <input
                          type="radio"
                          name="color"
                          id="brownColor"
                          value="blue"
                        />
                        <label for="brownColor" class="brown-clr"></label>
                      </div>
                    </li>
                    <li>
                      <div class="input-themeselects">
                        <input
                          type="radio"
                          name="color"
                          id="blackColor"
                          value="green"
                        />
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
                        <input
                          type="radio"
                          name="color"
                          id="grayColor"
                          value="blue"
                        />
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
                        <input
                          type="radio"
                          name="color"
                          id="blueColor"
                          value="yellow"
                        />
                        <label for="blueColor" class="blue-clr"></label>
                      </div>
                    </li>
                    <li>
                      <div class="input-themeselects">
                        <input
                          type="radio"
                          name="color"
                          id="whiteColor"
                          value="yellow"
                        />
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
                  Capacité
                  <span class="float-end"
                    ><i class="fa-solid fa-chevron-down"></i
                  ></span>
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
                      <span class="checkmark"></span> 2 Places
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus" />
                      <span class="checkmark"></span> 4 Places
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus" />
                      <span class="checkmark"></span> 5 Places
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus" />
                      <span class="checkmark"></span> 7 Places
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
                  Prix
                  <span class="float-end"
                    ><i class="fa-solid fa-chevron-down"></i
                  ></span>
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
                  <span class="float-end"
                    ><i class="fa-solid fa-chevron-down"></i
                  ></span>
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
                        <input
                          type="radio"
                          name="transmission"
                          id="manual"
                          checked=""
                        />
                        <label for="manual">Manuelle</label>
                      </div>
                    </li>
                    <li>
                      <div class="input-selection">
                        <input type="radio" name="transmission" id="semi" />
                        <label for="semi">Semi-automatique</label>
                      </div>
                    </li>
                    <li>
                      <div class="input-selection">
                        <input
                          type="radio"
                          name="transmission"
                          id="automatic"
                        />
                        <label for="automatic">Automatique</label>
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
                  Note
                  <span class="float-end"
                    ><i class="fa-solid fa-chevron-down"></i
                  ></span>
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
                  Recommandation client
                  <span class="float-end"
                    ><i class="fa-solid fa-chevron-down"></i
                  ></span>
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
                      <span class="checkmark"></span> 70% & plus
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category" />
                      <span class="checkmark"></span> 60% & plus
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category" />
                      <span class="checkmark"></span> 50% & plus
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category" />
                      <span class="checkmark"></span> 40% & plus
                    </label>
                    <div class="viewall-Two">
                      <label class="custom_check w-100">
                        <input type="checkbox" name="username" />
                        <span class="checkmark"></span>30% & plus
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
          <span><i class="feather-filter me-2"></i></span>Filtrer les résultats
        </button>
        <a href="#" class="reset-filter">Réinitialiser les filtres</a>
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
