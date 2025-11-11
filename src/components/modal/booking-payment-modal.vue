<template>
  <div
    class="modal custom-modal fade check-availability-modal payment-success-modal"
    id="pages_edit"
    role="dialog"
  >
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-body">
          <div class="payment-success">
            <span class="check"><i class="fa-solid fa-check-double"></i></span>
            <h5>Paiement réussi</h5>
            <p>
              Votre paiement a été effectué avec succès. Numéro de transaction
              :<span> #5064164454</span>
            </p>
            <div class="order-confirm">
              <router-link
                @click="redirectReload"
                to="/pages-booking/booking-order"
                >Aller à la confirmation de commande<i
                  class="fa-solid fa-arrow-right ms-2"
                ></i
              ></router-link>
            </div>
          </div>
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
