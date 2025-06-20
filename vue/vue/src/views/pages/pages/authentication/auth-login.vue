<template>
  <div class="account-content">
    <div class="d-flex flex-wrap w-100 vh-100 overflow-hidden account-bg-01">
      <div class="d-flex align-items-center justify-content-center flex-wrap vh-100 overflow-auto p-4 w-50 bg-backdrop">
        <Form
          @submit="onSubmit"
          :validation-schema="schema"
          v-slot="{ errors }"
          class="flex-fill"
        >
          <div class="mx-auto mw-450">
            <div class="text-center mb-4">
              <img src="@/assets/img/logo.svg" class="img-fluid" alt="Logo" />
            </div>
            <div class="mb-4">
              <h4 class="mb-2 fs-20">Sign In</h4>
              <p>Access the CRMS panel using your email and passcode.</p>
            </div>
            <div class="mb-3">
              <label class="col-form-label">Email Address</label>
              <div class="position-relative">
                  <span class="input-icon-addon">
                      <i class="ti ti-mail"></i>
                  </span>
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
            </div>
            <div class="mb-3">
              <label class="col-form-label">Password</label>
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
                      'ti ti-eye': showPassword,
                      'ti ti-eye-off': !showPassword,
                    }"
                  ></i>
                </span>
                <div class="invalid-feedback">{{ errors.password }}</div>
                <div class="emailshow text-danger" id="password"></div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="form-check form-check-md d-flex align-items-center">
                  <input class="form-check-input" type="checkbox" value="" id="checkebox-md" checked="">
                  <label class="form-check-label" for="checkebox-md">
                      Remember Me
                  </label>
              </div>
              <div class="text-end">
                  <router-link to="/forgot-password" class="text-primary fw-medium link-hover">Forgot Password?</router-link>
              </div>
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary w-100">Sign In</button>
            </div>
            <div class="mb-3">
                <h6>New on our platform?<router-link to="/register" class="text-purple link-hover"> Create an account</router-link></h6>
            </div>
            <div class="form-set-login or-text mb-3">
                <h4>OR</h4>
            </div>
            <div class="d-flex align-items-center justify-content-center flex-wrap mb-3">
                <div class="text-center me-2 flex-fill">
                    <a href="javascript:void(0);" class="br-10 p-2 px-4 btn bg-pending  d-flex align-items-center justify-content-center">
                        <img class="img-fluid m-1" src="@/assets/img/icons/facebook-logo.svg" alt="Facebook">
                    </a>
                </div>
                <div class="text-center me-2 flex-fill">
                    <a href="javascript:void(0);" class="br-10 p-2 px-4 btn bg-white d-flex align-items-center justify-content-center">
                        <img class="img-fluid  m-1" src="@/assets/img/icons/google-logo.svg" alt="Facebook">
                    </a>
                </div>
                <div class="text-center flex-fill">
                    <a href="javascript:void(0);" class="bg-dark br-10 p-2 px-4 btn btn-dark d-flex align-items-center justify-content-center">
                        <img class="img-fluid  m-1" src="@/assets/img/icons/apple-logo.svg" alt="Apple">
                    </a>
                </div>
            </div>
            <div class="text-center">
                <p class="fw-medium text-gray">Copyright &copy; {{ new Date().getFullYear() }} - CRMS</p>
            </div>
          </div>
        </Form>
      </div>
    </div>
  </div>
</template>

<script>
import { ref } from "vue";
import { router } from "@/router";
import { Form, Field } from "vee-validate";
import * as Yup from "yup";
export default {
  components: {
    /* eslint-disable vue/no-reserved-component-names */
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
          router.push("/dashboard");
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
