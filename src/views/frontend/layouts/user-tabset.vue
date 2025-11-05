<template>
  <!-- Dashboard Menu -->
  <div class="dashboard-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="dashboard-menu">
            <ul>
              <li>
                <router-link to="/user/user-dashboard">
                  <img src="@/assets/img/icons/dashboard-icon.svg" alt="Icon" />
                  <span>Dashboard</span>
                </router-link>
              </li>
              <li>
                <router-link
                  v-bind:class="{
                    active:
                      currentPath.includes('user-booking-upcoming') ||
                      currentPath.includes('user-booking-inprogress') ||
                      currentPath.includes('user-booking-complete') ||
                      currentPath.includes('user-booking-cancelled'),
                  }"
                  to="/user/user-bookings"
                >
                  <img src="@/assets/img/icons/booking-icon.svg" alt="Icon" />
                  <span>My Bookings</span>
                </router-link>
              </li>
              <li>
                <router-link to="/user/user-reviews">
                  <img src="@/assets/img/icons/review-icon.svg" alt="Icon" />
                  <span>Reviews</span>
                </router-link>
              </li>
              <li>
                <router-link to="/user/user-wishlist">
                  <img src="@/assets/img/icons/wishlist-icon.svg" alt="Icon" />
                  <span>Wishlist</span>
                </router-link>
              </li>
              <li>
                <router-link to="/user/user-messages">
                  <img src="@/assets/img/icons/message-icon.svg" alt="Icon" />
                  <span>Messages</span>
                </router-link>
              </li>
              <li>
                <router-link to="/user/user-wallet">
                  <img src="@/assets/img/icons/wallet-icon.svg" alt="Icon" />
                  <span>My Wallet</span>
                </router-link>
              </li>
              <li>
                <router-link to="/user/user-payment">
                  <img src="@/assets/img/icons/payment-icon.svg" alt="Icon" />
                  <span>Payments</span>
                </router-link>
              </li>
              <li>
                <router-link
                  v-bind:class="{
                    active:
                      currentPath.includes('user-settings') ||
                      currentPath.includes('user-security') ||
                      currentPath.includes('user-preferences') ||
                      currentPath.includes('user-notifications') ||
                      currentPath.includes('user-integration'),
                  }"
                  to="/user/user-settings"
                >
                  <img src="@/assets/img/icons/settings-icon.svg" alt="Icon" />
                  <span>Settings</span>
                </router-link>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Dashboard Menu -->
</template>

<script>
export default {
  data() {
    return {
      currentPath: this.$route.path, // Initialize currentPath with the current route path
    };
  },
};
</script>
