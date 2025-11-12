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
            <h1>Sign In</h1>
            <p class="account-subtitle">
              We'll send a confirmation code to your email.
            </p>
            <Form
              @submit="onSubmit"
              :validation-schema="schema"
              v-slot="{ errors }"
            >
              <div class="input-block">
                <label class="form-label"
                  >Email <span class="text-danger">*</span></label
                >
                <Field
                  name="email"
                  type="text"
                  value="example@dreamstechnologies.com"
                  class="form-control"
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
                    value="123456"
                    class="form-control pass-input mt-2"
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
              <div class="input-block mt-3">
                <router-link
                  class="forgot-link"
                  to="/authentication/forgot-password"
                  >Forgot Password ?</router-link
                >
              </div>
              <div class="input-block m-0">
                <label class="custom_check d-inline-flex"
                  ><span>Remember me</span>
                  <input type="checkbox" name="remeber" />
                  <span class="checkmark"></span>
                </label>
              </div>
              <button class="btn btn-outline-light w-100 btn-size mt-1">
                Sign In
              </button>
              <div class="login-or">
                <span class="or-line"></span>
                <span class="span-or-log">Or, log in with your email</span>
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
                Don't have an account yet?
                <router-link to="/authentication/register"
                  >Register</router-link
                >
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
import { router } from "@/router";
import { Form, Field } from "vee-validate";
import * as Yup from "yup";
export default {
  components: {
    Form,
    Field,
  },
  data() {
    return {
      showPassword: false,
      password: null,
      emailError: "",
      passwordError: "",
    };
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
    let users = localStorage.getItem("storedData");
    if (users === null) {
      let password = [
        {
          email: "example@dreamstechnologies.com",
          password: "123456",
        },
      ];
      const jsonData = JSON.stringify(password);
      localStorage.setItem("storedData", jsonData);
    }
    const schema = Yup.object().shape({
      email: Yup.string()
        .required("Email is required")
        .email("Email is invalid"),
      password: Yup.string()
        .min(6, "Password must be at least 6 characters")
        .required("Password is required"),
    });
    const onSubmit = (values) => {
      document.getElementById("email").innerHTML = "";
      document.getElementById("password").innerHTML = "";
      let data = localStorage.getItem("storedData");
      var Pdata = JSON.parse(data);
      const Eresult = Pdata.find(({ email }) => email === values.email);
      if (Eresult) {
        if (Eresult.password === values.password) {
          router.push("/home/");
        } else {
          document.getElementById("password").innerHTML = "Incorrect password";
        }
      } else {
        document.getElementById("email").innerHTML = "Email is not valid";
      }
    };
    return {
      schema,
      onSubmit,
      checked: ref(false),
    };
  },
};
</script>
