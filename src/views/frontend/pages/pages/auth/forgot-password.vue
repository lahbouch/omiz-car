<template>
  <div class="main-wrapper login-body">
    <!-- Header -->
    <header class="log-header">
      <router-link to="/home/"
        ><img class="img-fluid logo-dark" src="@/assets/img/logo.svg" alt="Logo"
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
            <h1>Forgot Password</h1>
            <p class="account-subtitle">
              Enter your email and we will send you a link to reset your password.
            </p>
            <form @submit.prevent="submitForm">
              <div class="input-block ">
                <label class="form-label"
                  >Email Address <span class="text-danger">*</span></label
                >
                <input type="email" class="form-control" placeholder="" />
              </div>
              <router-link
                to="reset-password"
                class="btn btn-outline-light w-100 btn-size mt-3"
                >Save Changes</router-link
              >
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
      this.$router.push("/index");
    },
  },
};
</script>
