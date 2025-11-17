<template>
  <admin-header></admin-header>
  <admin-sidebar></admin-sidebar>

  <!-- Page Wrapper -->
  <div class="page-wrapper">
    <div class="content me-4">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="mb-3">
            <router-link
              to="/admin-template/bookings/reservations"
              class="d-inline-flex align-items-center fw-medium"
              ><i class="ti ti-arrow-narrow-left me-2"></i
              >Reservation</router-link
            >
          </div>
          <div class="card">
            <div
              class="card-header d-flex align-items-center justify-content-between"
            >
              <h5>Détails de la réservation #{{ reservation.id }}</h5>
              <span :class="getStatusBadgeClass(reservation.status)">{{
                reservation.status
              }}</span>
            </div>
            <div class="card-body">
              <ul
                class="nav nav-tabs nav-tabs-solid custom-nav-tabs mb-3"
                role="tablist"
              >
                <li class="nav-item" role="presentation">
                  <a
                    class="nav-link active"
                    href="#solid-tab1"
                    data-bs-toggle="tab"
                    aria-selected="true"
                    role="tab"
                    >Informations</a
                  >
                </li>
                <li class="nav-item" role="presentation">
                  <a
                    class="nav-link"
                    href="#solid-tab2"
                    data-bs-toggle="tab"
                    aria-selected="false"
                    role="tab"
                    >Historique</a
                  >
                </li>
              </ul>
              <div class="tab-content">
                <div
                  class="tab-pane active show"
                  id="solid-tab1"
                  role="tabpanel"
                >
                  <div class="border rounded p-3 bg-light mb-3">
                    <div class="row">
                      <div class="col-8">
                        <div class="d-flex align-items-center">
                          <span class="avatar flex-shrink-0 me-2">
                            <img
                              :src="getCarImageUrl(reservation.car_name)"
                              alt="Car"
                            />
                          </span>
                          <div>
                            <p class="mb-1">
                              {{ reservation.car?.category?.name || "Voiture" }}
                            </p>
                            <h6 class="fs-14">
                              {{ reservation.car?.make }}
                              {{
                                reservation.car?.model ||
                                reservation.car_name ||
                                "Non spécifié"
                              }}
                            </h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="text-end">
                          <p class="mb-1">Prix</p>
                          <h6 class="fs-14">
                            N/A<span class="text-gray-5 fw-normal">/jour</span>
                          </h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border-bottom mb-3 pb-3">
                    <div
                      class="d-flex align-items-center justify-content-between mb-2"
                    >
                      <h6 class="fw-medium fs-14">Date de début</h6>
                      <p>{{ formatDate(reservation.start_date) }}</p>
                    </div>
                    <div
                      class="d-flex align-items-center justify-content-between mb-2"
                    >
                      <h6 class="fw-medium fs-14">Date de fin</h6>
                      <p>{{ formatDate(reservation.end_date) }}</p>
                    </div>
                    <div
                      class="d-flex align-items-center justify-content-between mb-2"
                    >
                      <h6 class="fw-medium fs-14">Période de location</h6>
                      <p>
                        {{
                          calculateRentalPeriod(
                            reservation.start_date,
                            reservation.end_date
                          )
                        }}
                      </p>
                    </div>
                    <div
                      class="d-flex align-items-center justify-content-between mb-2"
                    >
                      <h6 class="fw-medium fs-14">Type de conduite</h6>
                      <p>Self</p>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="d-flex align-items-center">
                          <div class="bg-light p-3 rounded flex-fill mb-3">
                            <h6 class="mb-1 fs-14 fw-medium">
                              Lieu de récupération
                            </h6>
                            <p>Non spécifié</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="bg-light p-3 rounded mb-3">
                          <h6 class="mb-1 fs-14 fw-medium">Lieu de retour</h6>
                          <p>Non spécifié</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border-bottom mb-3">
                    <div class="row">
                      <div class="col-md-6">
                        <div>
                          <div class="mb-3">
                            <h6
                              class="d-inline-flex align-items-center fs-14 fw-medium"
                            >
                              Client
                            </h6>
                          </div>
                          <div class="d-flex align-items-center mb-3">
                            <span
                              class="avatar avatar-rounded flex-shrink-0 me-2"
                            >
                              <img
                                src="@/assets/admin/img/customer/customer-02.jpg"
                                alt="Customer"
                              />
                            </span>
                            <div>
                              <h6 class="fs-14 fw-medium mb-1">
                                {{ reservation.firstname }}
                                {{ reservation.lastname }}
                              </h6>
                              <p>Non spécifié</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div>
                          <div class="mb-3">
                            <h6
                              class="d-inline-flex align-items-center fs-14 fw-medium"
                            >
                              Chauffeur
                            </h6>
                          </div>
                          <div class="d-flex align-items-center mb-3">
                            <span
                              class="avatar avatar-rounded flex-shrink-0 me-2"
                            >
                              <img
                                src="@/assets/admin/img/customer/customer-01.jpg"
                                alt="Driver"
                              />
                            </span>
                            <div>
                              <h6 class="fs-14 fw-medium mb-1">Non assigné</h6>
                              <p>Non spécifié</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border-bottom mb-3 pb-2">
                    <div
                      class="d-flex align-items-center justify-content-between mb-2"
                    >
                      <h6 class="fw-medium fs-14">Prix du véhicule</h6>
                      <p>N/A</p>
                    </div>
                    <div
                      class="d-flex align-items-center justify-content-between mb-2"
                    >
                      <h6 class="fw-medium d-flex align-items-center fs-14">
                        Services supplémentaires
                        <a
                          href="javascript:void(0);"
                          class="me-2 ms-2"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          data-bs-original-title="Non spécifié"
                          ><i class="ti ti-info-circle-filled"></i
                        ></a>
                      </h6>
                      <p>N/A</p>
                    </div>
                    <div
                      class="d-flex align-items-center justify-content-between mb-2"
                    >
                      <h6 class="fw-medium d-flex align-items-center fs-14">
                        Dépôt de garantie
                      </h6>
                      <p>N/A</p>
                    </div>
                    <div
                      class="d-flex align-items-center justify-content-between mb-2"
                    >
                      <h6 class="fw-medium d-flex align-items-center fs-14">
                        Prix du chauffeur
                      </h6>
                      <p>N/A</p>
                    </div>
                  </div>
                  <div
                    class="d-flex align-items-center justify-content-between"
                  >
                    <h6>Prix total</h6>
                    <h6>N/A</h6>
                  </div>
                </div>
                <div class="tab-pane" id="solid-tab2" role="tabpanel">
                  <div class="border rounded p-3 bg-light mb-3">
                    <div class="row">
                      <div class="col-8">
                        <div class="d-flex align-items-center">
                          <span class="avatar flex-shrink-0 me-2">
                            <img
                              :src="getCarImageUrl(reservation.car_name)"
                              alt="Car"
                            />
                          </span>
                          <div>
                            <p class="mb-1">
                              {{ reservation.car?.category?.name || "Voiture" }}
                            </p>
                            <h6 class="fs-14">
                              {{ reservation.car?.make }}
                              {{
                                reservation.car?.model ||
                                reservation.car_name ||
                                "Non spécifié"
                              }}
                            </h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="text-end">
                          <p class="mb-1">Prix</p>
                          <h6 class="fs-14">
                            N/A<span class="text-gray-5 fw-normal">/jour</span>
                          </h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <h6 class="mb-3">Historique</h6>
                    <div class="d-flex align-items-center mb-3">
                      <div
                        class="border rounded text-center flex-shrink-0 p-1 me-2"
                      >
                        <h5 class="mb-2">
                          {{
                            formatDateToDay(
                              reservation.created_at || reservation.start_date
                            )
                          }}
                        </h5>
                        <span
                          class="fw-medium fs-12 bg-primary-transparent p-1 d-inline-block rounded-1 text-gray-9"
                          >{{
                            formatDateToMonthYear(
                              reservation.created_at || reservation.start_date
                            )
                          }}</span
                        >
                      </div>
                      <div>
                        <h6 class="fs-14 mb-1">Réservation créée</h6>
                        <span class="fs-13">Heure inconnue</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="d-flex align-items-center justify-content-center flex-wrap row-gap-3"
          >
            <a
              href="javascript:void(0);"
              class="btn btn-primary me-3"
              @click="updateStatus('confirmed')"
              ><i class="ti ti-check me-1"></i>Confirmer</a
            >
            <a
              href="javascript:void(0);"
              class="btn btn-dark me-3"
              @click="updateStatus('in progress')"
              ><i class="ti ti-loader me-1"></i>En cours</a
            >
            <a
              href="javascript:void(0);"
              class="btn btn-danger"
              @click="updateStatus('rejected')"
              ><i class="ti ti-x me-1"></i>Rejeter</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <div
      class="footer d-sm-flex align-items-center justify-content-between bg-white p-3"
    >
      <p class="mb-0">
        <a href="javascript:void(0);">Privacy Policy</a>
        <a href="javascript:void(0);" class="ms-4">Terms of Use</a>
      </p>
      <p>
        &copy; 2025 Dreamsrent, Made with <span class="text-danger">❤</span> by
        <a href="javascript:void(0);" class="text-secondary">Dreams</a>
      </p>
    </div>
    <!-- /Footer-->
  </div>
  <!-- /Page Wrapper -->

  <div class="modal fade" id="reservation_completed">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content">
        <div class="modal-body text-center">
          <form @submit.prevent="submitForm">
            <span
              class="avatar avatar-lg bg-transparent-success rounded-circle text-success mb-3"
            >
              <i class="ti ti-check fs-26"></i>
            </span>
            <h4 class="mb-1">Création réussie</h4>
            <p class="mb-3">
              Réservation créée pour
              <span class="text-gray-9"
                >"{{ reservation.car?.make }}
                {{
                  reservation.car?.model || reservation.car_name || "Voiture"
                }}"</span
              >
              du
              <span class="text-gray-9">{{
                formatDate(reservation.start_date)
              }}</span>
            </p>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary w-100">
                Voir les détails
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import adminApi from "@/services/adminApi";

export default {
  data() {
    return {
      reservation: {
        id: 1,
        firstname: "Jean",
        lastname: "Dupont",
        start_date: "2025-02-10",
        end_date: "2025-02-11",
        notes: "Réservation de test",
        car_name: "Peugeot 208",
        status: "pending",
        created_at: "2025-02-01",
      },
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/admin-template/bookings/reservations");
    },
    getCarImageUrl(carName) {
      // Return a default car image
      return new URL("@/assets/admin/img/car/car-07.jpg", import.meta.url).href;
    },
    getStatusBadgeClass(status) {
      const statusClasses = {
        confirmed: "badge bg-success-transparent",
        "in progress": "badge bg-warning-transparent",
        completed: "badge bg-primary-transparent",
        rejected: "badge bg-danger-transparent",
        pending: "badge bg-orange-transparent",
      };
      return (
        statusClasses[status?.toLowerCase()] || "badge bg-secondary-transparent"
      );
    },
    formatDate(dateString) {
      if (!dateString) return "N/A";
      return new Date(dateString).toLocaleDateString("fr-FR", {
        year: "numeric",
        month: "long",
        day: "numeric",
      });
    },
    formatDateToDay(dateString) {
      if (!dateString) return "N/A";
      return new Date(dateString).getDate();
    },
    formatDateToMonthYear(dateString) {
      if (!dateString) return "N/A";
      return new Date(dateString).toLocaleDateString("fr-FR", {
        month: "short",
        year: "numeric",
      });
    },
    calculateRentalPeriod(startDate, endDate) {
      if (!startDate || !endDate) return "N/A";
      const start = new Date(startDate);
      const end = new Date(endDate);
      const diffTime = Math.abs(end - start);
      const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
      return `${diffDays} jour${diffDays > 1 ? "s" : ""}`;
    },
    async updateStatus(newStatus) {
      try {
        await adminApi.updateReservation(this.reservation.id, {
          status: newStatus,
        });
        this.reservation.status = newStatus;
        // Show success message
        alert(`Statut mis à jour à "${newStatus}"`);
      } catch (error) {
        console.error("Error updating reservation status:", error);
        alert("Erreur lors de la mise à jour du statut");
      }
    },
  },
  async mounted() {
    // Get reservation ID from route params
    const reservationId = this.$route.params.id;
    if (reservationId) {
      try {
        const response = await adminApi.getReservation(reservationId);
        this.reservation = response.data;
      } catch (error) {
        console.error("Error fetching reservation:", error);
        // Keep the default reservation data
      }
    }
  },
};
</script>
