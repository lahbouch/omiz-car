<template>
  <div
    class="modal custom-modal fade check-availability-modal"
    id="pages_edit"
    role="dialog"
  >
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <div class="form-header text-start mb-0">
            <h4 class="mb-0 text-dark fw-bold">Détails de disponibilité</h4>
          </div>
          <button
            type="button"
            class="close"
            data-bs-dismiss="modal"
            aria-label="Close"
          >
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="available-for-ride">
                <p>
                  <i class="fa-regular fa-circle-check"></i>Toyota Corolla est
                  disponible pour la location
                </p>
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="row booking-info">
                <div class="col-md-4 pickup-address">
                  <h5>Récupération</h5>
                  <p>Aéroport de Tanger, Maroc</p>
                  <span>Date & heure : 11 Jan 2023</span>
                </div>
                <div class="col-md-4 drop-address">
                  <h5>Retour</h5>
                  <p>Aéroport de Tanger, Maroc</p>
                  <span>Date & heure : 11 Jan 2023</span>
                </div>
                <div class="col-md-4 booking-amount">
                  <h5>Montant de la réservation</h5>
                  <h6><span>450 MAD </span> /jour</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="booking-info seat-select">
                <h6>Services supplémentaires</h6>
                <label class="custom_check">
                  <input type="checkbox" name="rememberme" class="rememberme" />
                  <span class="checkmark"></span>
                  Siège bébé - <span class="ms-2">50 MAD</span>
                </label>
              </div>
            </div>
            <div class="col-md-12">
              <div class="booking-info pay-amount">
                <h6>Option de paiement</h6>
                <div class="radio radio-btn">
                  <label>
                    <input type="radio" name="radio" /> Payer un acompte
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="radio" /> Montant total
                  </label>
                </div>
              </div>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-6">
              <div class="booking-info service-tax">
                <ul>
                  <li>Prix de la location <span>450 MAD</span></li>
                  <li>Services supplémentaires <span>50 MAD</span></li>
                  <li>Taxes <span>25 MAD</span></li>
                </ul>
              </div>
              <div class="grand-total">
                <h5>Total</h5>
                <span>525 MAD</span>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <router-link
            @click="redirectReload"
            to="/pages-booking/booking-order"
            class="btn btn-back"
            >Voir les détails<i class="fa-solid fa-arrow-right"></i
          ></router-link>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  methods: {
    redirectReload() {
      this.$router.push({ path: "/pages-booking/booking-order" }).then(() => {
        this.$router.go();
      });
    },
  },
};
</script>
