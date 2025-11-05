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
            <h1>Sign Up</h1>
            <p class="account-subtitle">We'll send a confirmation code to your email.</p>
            <Form @submit="onSubmit" :validation-schema="schema" v-slot="{ errors }">
              <div class="input-block">
                <label class="form-label"
                  >Username <span class="text-danger">*</span></label
                >
                <input type="text" class="form-control" placeholder="" />
              </div>
              <div class="input-block mt-3">
                <label class="form-label">Email <span class="text-danger">*</span></label>
                <Field
                  name="email"
                  type="text"
                  class="form-control"
                  placeholder="Email"
                  :class="{ 'is-invalid': errors.email }"
                />
                <div class="invalid-feedback">{{ errors.email }}</div>
                <div class="emailshow text-danger" id="email"></div>
              </div>
              <div class="input-block mt-3">
                <label class="form-label"
                  >Password <span class="text-danger">*</span></label
                >
                <div class="pass-group">
                  <Field
                    name="password"
                    :type="showPassword ? 'text' : 'password'"
                    class="form-control pass-input mt-2"
                    placeholder="Password"
                    :class="{ 'is-invalid': errors.password }"
                  />
                  <span @click="toggleShow" class="toggle-password">
                    <i
                      :class="{
                        'fas fa-eye': showPassword,
                        'fas fa-eye-slash': !showPassword,
                      }"
                    ></i>
                  </span>
                  <div class="invalid-feedback">{{ errors.password }}</div>
                  <div class="emailshow text-danger" id="password"></div>
                </div>
              </div>
              <button class="btn btn-outline-light w-100 btn-size mt-1" type="submit">Sign In </button>
              <div class="login-or">
                <span class="or-line"></span>
                <span class="span-or">Or, Create an account with your email</span>
              </div>
              <!-- Social Login -->
              <div class="social-login">
                <a
                  href="javascript:;"
                  class="d-flex align-items-center justify-content-center input-block btn google-login w-100"
                  ><span
                    ><img
                      src="@/assets/img/icons/google.svg"
                      class="img-fluid"
                      alt="Google" /></span
                  >Log in with Google</a
                >
              </div>
              <div class="social-login">
                <a
                  href="javascript:;"
                  class="d-flex align-items-center justify-content-center input-block btn google-login w-100"
                  ><span
                    ><img
                      src="@/assets/img/icons/facebook.svg"
                      class="img-fluid"
                      alt="Facebook" /></span
                  >Log in with Facebook</a
                >
              </div>
              <!-- /Social Login -->
              <div class="text-center dont-have">
                Already have an Account? <router-link to="/">Sign In</router-link>
              </div>
            </Form>
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
import { ref } from "vue";
import { Form, Field } from "vee-validate";
import * as Yup from "yup";
import { router } from "@/router";
export default {
  components: {
    Form,
    Field,
  },
  computed: {
    buttonLabel() {
      return this.showPassword ? "Hide" : "Show";
    },
  },
  methods: {
    toggleShow() {
      this.showPassword = !this.showPassword;
    },
  },
  setup() {
    const showPassword = ref(false);
    const emailError = ref("");
    const passwordError = ref("");

    const schema = Yup.object().shape({
      email: Yup.string().required("Email is required").email("Email is invalid"),
      password: Yup.string()
        .min(6, "Password must be at least 6 characters")
        .required("Password is required"),
    });

    const onSubmit = (values) => {
      if (values.password === values.password) {
        let Rawdata = localStorage.getItem("storedData");
        let Pdata = [];
        Pdata = JSON.parse(Rawdata);
        const Eresult = Pdata.find(({ email }) => email == values.email);
        if (Eresult) {
          document.getElementById("email").innerHTML = "This email are already exist";
        } else {
          Pdata.push(values);
          const jsonData = JSON.stringify(Pdata);
          router.push("/");
          localStorage.setItem("storedData", jsonData);
        }
      }
    };

    return {
      showPassword,
      schema,
      onSubmit,
      emailError,
      passwordError,
    };
  },
};
</script>
