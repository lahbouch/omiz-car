<template>
  <div class="main-wrapper login-body">
    <!-- Header -->
    <header class="log-header">
      <router-link to="/home/"
        ><img
          class="img-fluid logo-dark"
          src="@/assets/img/logo.png"
          alt="Logo"
      /></router-link>
    </header>
    <!-- /Header -->

    <div class="login-wrapper">
      <div class="loginbox">
        <div class="login-auth">
          <div class="login-auth-wrap">
            <div class="sign-group">
              <router-link to="/home/" class="btn sign-up"
                ><span
                  ><i class="fe feather-corner-down-left" aria-hidden="true"></i
                ></span>
                Back To Home</router-link
              >
            </div>
            <h1>Reset Password</h1>
            <p class="account-subtitle">
              Your new password must be different from previous used passwords.
            </p>
            <form @submit.prevent="submitForm">
              <div class="input-block">
                <label class="form-label"
                  >New Password <span class="text-danger">*</span></label
                >
                <div class="pass-group">
                  <input
                    type="password"
                    class="form-control pass-input"
                    placeholder=""
                  />
                  <span class="fas fa-eye toggle-password"></span>
                </div>
              </div>
              <div class="input-block mt-3">
                <label class="form-label"
                  >Confirm Password <span class="text-danger">*</span></label
                >
                <div class="pass-group">
                  <input
                    type="password"
                    class="form-control pass-input"
                    placeholder=""
                  />
                  <span class="fas fa-eye toggle-password"></span>
                </div>
              </div>
              <button class="btn btn-outline-light w-100 btn-size mt-3">
                Save Changes
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <auth-footer></auth-footer>
    <!-- /Footer -->
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },
  methods: {
    submitForm() {
      this.$router.push("/home/index");
    },
  },
};
</script>
