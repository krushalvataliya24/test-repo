<template>
  <div class="account-page">
    <div class="main-wrapper">
      <div class="account-content">
        <div class="d-flex flex-wrap w-100 vh-100 overflow-hidden account-bg-02">
          <div
            class="d-flex align-items-center justify-content-center flex-wrap vh-100 overflow-auto p-4 w-50 bg-backdrop"
          >
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
                  <h4 class="mb-2 fs-20">Register</h4>
                  <p>Create new CRMS account</p>
                </div>
                <div class="mb-3">
                  <label class="col-form-label">Name</label>
                  <div class="position-relative">
                    <span class="input-icon-addon">
                      <i class="ti ti-user"></i>
                    </span>
                    <input type="text" value="" class="form-control" />
                  </div>
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
                      class="form-control"
                      placeholder="Email"
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
                      class="form-control pass-input mt-2"
                      placeholder="Password"
                      :class="{ 'is-invalid': errors.password }"
                    />
                    <span @click="toggleShow" class="ti toggle-password">
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
                <div class="mb-3">
                  <label class="col-form-label">Confirm Password</label>
                  <div class="pass-group">
                    <Field
                      name="confirmpassword"
                      :type="showPassword1 ? 'text' : 'password'"
                      class="form-control pass-input mt-2"
                      placeholder="Confirm Password"
                      :class="{ 'is-invalid': errors.confirmpassword }"
                    />
                    <span @click="toggleShow1" class="ti toggle-passwords">
                      <i
                        :class="{
                          'ti ti-eye': showPassword1,
                          'ti ti-eye-off': !showPassword1,
                        }"
                      ></i>
                    </span>
                    <div class="invalid-feedback">
                      {{ errors.confirmpassword }}
                    </div>
                    <div class="emailshow text-danger" id="confirmpassword"></div>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <div class="form-check form-check-md d-flex align-items-center">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="checkebox-md"
                      checked=""
                    />
                    <label class="form-check-label" for="checkebox-md">
                      I agree to the
                      <a href="javascript:void(0);" class="text-primary link-hover"
                        >Terms & Privacy</a
                      >
                    </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                </div>
                <div class="mb-3">
                  <h6>
                    Already have an account?
                    <router-link to="/" class="text-purple link-hover">
                      Sign In Instead</router-link
                    >
                  </h6>
                </div>
                <div class="form-set-login or-text mb-3">
                  <h4>OR</h4>
                </div>
                <div
                  class="d-flex align-items-center justify-content-center flex-wrap mb-3"
                >
                  <div class="text-center me-2 flex-fill">
                    <a
                      href="javascript:void(0);"
                      class="br-10 p-2 px-4 btn bg-pending d-flex align-items-center justify-content-center"
                    >
                      <img
                        class="img-fluid m-1"
                        src="@/assets/img/icons/facebook-logo.svg"
                        alt="Facebook"
                      />
                    </a>
                  </div>
                  <div class="text-center me-2 flex-fill">
                    <a
                      href="javascript:void(0);"
                      class="br-10 p-2 px-4 btn bg-white d-flex align-items-center justify-content-center"
                    >
                      <img
                        class="img-fluid m-1"
                        src="@/assets/img/icons/google-logo.svg"
                        alt="Facebook"
                      />
                    </a>
                  </div>
                  <div class="text-center flex-fill">
                    <a
                      href="javascript:void(0);"
                      class="bg-dark br-10 p-2 px-4 btn btn-dark d-flex align-items-center justify-content-center"
                    >
                      <img
                        class="img-fluid m-1"
                        src="@/assets/img/icons/apple-logo.svg"
                        alt="Apple"
                      />
                    </a>
                  </div>
                </div>
                <div class="text-center">
                  <p class="fw-medium text-gray">Copyright &copy; 2024 - CRMS</p>
                </div>
              </div>
            </Form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { ref } from "vue";
import { Form, Field } from "vee-validate";
import * as Yup from "yup";
import { router } from "@/router";
export default {
  data() {
    return {
      showPassword: false,
      showPassword1: false,
      password: null,
    };
  },
  components: {
    /* eslint-disable vue/no-reserved-component-names */
    Form,
    Field,
  },
  computed: {
    buttonLabel() {
      return this.showPassword ? "Hide" : "Show";
    },
    buttonLabel1() {
      return this.showPassword1 ? "Hide" : "Show";
    },
  },
  methods: {
    toggleShow() {
      this.showPassword = !this.showPassword;
    },
    toggleShow1() {
      this.showPassword1 = !this.showPassword1;
    },
  },
  setup() {
    // eslint-disable-next-line no-unused-vars
    const showPassword = ref(false);
    // eslint-disable-next-line no-unused-vars
    const emailError = ref("");
    // eslint-disable-next-line no-unused-vars
    const passwordError = ref("");

    const schema = Yup.object().shape({
      email: Yup.string().required("Email is required").email("Email is invalid"),
      password: Yup.string()
        .min(6, "Password must be at least 6 characters")
        .required("Password is required"),
      confirmpassword: Yup.string()
        .min(6, "Password must be at least 6 characters")
        .required("Confirm password is required"),
    });

    const onSubmit = (values) => {
      if (values.password === values.confirmpassword) {
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
      } else {
        document.getElementById("confirmpassword").innerHTML = "Password not matching";
      }
    };

    return {
      schema,
      onSubmit,
    };
  },
};
</script>
