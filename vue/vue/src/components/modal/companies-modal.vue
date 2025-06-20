<template>
  <!-- Add Company -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Add New Company</h5>
      <button
        type="button"
        class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
        data-bs-dismiss="offcanvas"
        aria-label="Close"
      >
        <i class="ti ti-x"></i>
      </button>
    </div>
    <div class="offcanvas-body">
      <form @submit.prevent="submitForm">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <div class="profile-upload">
                    <div class="profile-upload-img">
                      <span><i class="ti ti-photo"></i></span>
                      <img
                        src="@/assets/img/profiles/avatar-20.jpg"
                        alt="img"
                        class="preview1"
                      />
                      <button type="button" class="profile-remove">
                        <i class="ti ti-x"></i>
                      </button>
                    </div>
                    <div class="profile-upload-content">
                      <label class="profile-upload-btn">
                        <i class="ti ti-file-broken"></i> Upload File
                        <input type="file" class="input-img" />
                      </label>
                      <p>JPG, GIF or PNG. Max size of 800K</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Company Name <span class="text-danger"> *</span></label
                  >
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Email Address</label>
                  <input type="email" class="form-control" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <label class="form-label">Account URL</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Phone Number <span class="text-danger"> *</span></label
                  >
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Website</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Password <span class="text-danger"> *</span></label
                  >
                  <div class="pass-group">
                    <input
                      :type="showPassword ? 'text' : 'password'"
                      class="pass-input form-control"
                    />
                    <span
                      @click="toggleShow"
                      class="ti toggle-password"
                      :class="{
                        'ti-eye': showPassword,
                        'ti-eye-off': !showPassword,
                      }"
                    ></span>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Confirm Password <span class="text-danger"> *</span></label
                  >
                  <div class="pass-group">
                    <input
                      :type="showPassword1 ? 'text' : 'password'"
                      class="pass-inputs form-control"
                    />
                    <span
                      @click="toggleShow1"
                      class="ti toggle-passwords"
                      :class="{
                        'ti-eye': showPassword1,
                        'ti-eye-off': !showPassword1,
                      }"
                    ></span>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <label class="form-label">Address</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Plan Name <span class="text-danger"> *</span></label
                  >
                  <vue-select :options="AdvanSelc" id="advanselc" placeholder="Select" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Plan Type <span class="text-danger"> *</span></label
                  >
                  <vue-select :options="SelMonth" id="selmonth" placeholder="Select" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Currency <span class="text-danger"> *</span></label
                  >
                  <vue-select :options="DollarSel" id="dollarsel" placeholder="Select" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Language <span class="text-danger"> *</span></label
                  >
                  <vue-select
                    :options="EnglishSele"
                    id="englishsele"
                    placeholder="Select"
                  />
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-0">
                  <div class="radio-wrap">
                    <label class="col-form-label">Status</label>
                    <div class="d-flex flex-wrap">
                      <div class="me-2">
                        <input
                          type="radio"
                          class="status-radio"
                          id="person"
                          name="leave"
                          checked=""
                        />
                        <label for="person">Active</label>
                      </div>
                      <div>
                        <input
                          type="radio"
                          class="status-radio"
                          id="Organization"
                          name="leave"
                        />
                        <label for="Organization">Inactive</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">
            Cancel
          </button>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add Company -->

  <!-- Edit Company -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Edit Company</h5>
      <button
        type="button"
        class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
        data-bs-dismiss="offcanvas"
        aria-label="Close"
      >
        <i class="ti ti-x"></i>
      </button>
    </div>
    <div class="offcanvas-body">
      <form @submit.prevent="submitForm">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <div class="profile-upload">
                    <div class="profile-upload-img">
                      <span><i class="ti ti-photo"></i></span>
                      <img
                        src="@/assets/img/profiles/avatar-20.jpg"
                        alt="img"
                        class="preview1"
                      />
                      <button type="button" class="profile-remove">
                        <i class="ti ti-x"></i>
                      </button>
                    </div>
                    <div class="profile-upload-content">
                      <label class="profile-upload-btn">
                        <i class="ti ti-file-broken"></i> Upload File
                        <input type="file" class="input-img" />
                      </label>
                      <p>JPG, GIF or PNG. Max size of 800K</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Company Name <span class="text-danger"> *</span></label
                  >
                  <input type="text" class="form-control" value="Stellar Dynamics" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Email Address</label>
                  <input type="email" class="form-control" value="sophie@example.com" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <label class="form-label">Account URL</label>
                  <input type="text" class="form-control" value="sd.example.com" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Phone Number <span class="text-danger"> *</span></label
                  >
                  <input type="text" class="form-control" value="+1 895455450" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Website</label>
                  <input type="text" class="form-control" value="Admin Website" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Password <span class="text-danger"> *</span></label
                  >
                  <div class="pass-group">
                    <input
                      :type="showPassword ? 'text' : 'password'"
                      class="pass-input form-control"
                    />
                    <span
                      @click="toggleShow"
                      class="ti toggle-password"
                      :class="{
                        'ti-eye': showPassword,
                        'ti-eye-off': !showPassword,
                      }"
                    ></span>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Confirm Password <span class="text-danger"> *</span></label
                  >
                  <div class="pass-group">
                    <input
                      :type="showPassword1 ? 'text' : 'password'"
                      class="pass-inputs form-control"
                    />
                    <span
                      @click="toggleShow1"
                      class="ti toggle-passwords"
                      :class="{
                        'ti-eye': showPassword1,
                        'ti-eye-off': !showPassword1,
                      }"
                    ></span>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <label class="form-label">Address</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Plan Name <span class="text-danger"> *</span></label
                  >
                  <vue-select
                    :options="EditAdvanSelc"
                    id="editadvanselc"
                    placeholder="Advanced"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Plan Type <span class="text-danger"> *</span></label
                  >
                  <vue-select
                    :options="EditSelMonth"
                    id="editselmonth"
                    placeholder="Monthly"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Currency <span class="text-danger"> *</span></label
                  >
                  <vue-select
                    :options="EditDollarSel"
                    id="editdollarsel"
                    placeholder="Dollar"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Language <span class="text-danger"> *</span></label
                  >
                  <vue-select
                    :options="EditEnglishSele"
                    id="editenglishsele"
                    placeholder="English"
                  />
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-0">
                  <div class="radio-wrap">
                    <label class="col-form-label">Status</label>
                    <div class="d-flex flex-wrap">
                      <div class="me-2">
                        <input
                          type="radio"
                          class="status-radio"
                          id="person"
                          name="leave"
                          checked=""
                        />
                        <label for="person">Active</label>
                      </div>
                      <div>
                        <input
                          type="radio"
                          class="status-radio"
                          id="Organization"
                          name="leave"
                        />
                        <label for="Organization">Inactive</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">
            Cancel
          </button>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Edit Company -->

  <!-- Upgrade Plane -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="upgrade_plan">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Upgrade Package</h5>
      <button
        type="button"
        class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
        data-bs-dismiss="offcanvas"
        aria-label="Close"
      >
        <i class="ti ti-x"></i>
      </button>
    </div>
    <div class="offcanvas-body">
      <form @submit.prevent="submitForm">
        <div class="card">
          <div class="card-body pb-0">
            <div class="mb-1">
              <div class="">
                <h5 class="mb-3">Current Plan Details</h5>
                <div class="row align-items-center">
                  <div class="col-md-4">
                    <div class="mb-3">
                      <p class="fs-12 mb-0">Company Name</p>
                      <p class="text-gray-9">NovaWave LLC</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <p class="fs-12 mb-0">Plan Name</p>
                      <p class="text-gray-9">Advanced</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <p class="fs-12 mb-0">Plan Type</p>
                      <p class="text-gray-9">Monthly</p>
                    </div>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-md-4">
                    <div class="mb-3">
                      <p class="fs-12 mb-0">Price</p>
                      <p class="text-gray-9">200</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <p class="fs-12 mb-0">Register Date</p>
                      <p class="text-gray-9">12 Sep 2024</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <p class="fs-12 mb-0">Expiring On</p>
                      <p class="text-gray-9">11 Oct 2024</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <h5 class="mb-3">Change Plan</h5>
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="col-form-label"
                      >Plan Name <span class="text-danger">*</span></label
                    >
                    <vue-select
                      :options="OneAdvanSelc"
                      id="oneadvanselc"
                      placeholder="Select"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="col-form-label"
                      >Plan Type <span class="text-danger">*</span></label
                    >
                    <vue-select
                      :options="OneSelMonth"
                      id="Oneselmonth"
                      placeholder="Select"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="col-form-label"
                      >Ammount<span class="text-danger">*</span></label
                    >
                    <input type="text" class="form-control" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="col-form-label"
                      >Payment Date <span class="text-danger">*</span></label
                    >
                    <div class="input-icon-end position-relative">
                      <date-picker
                        v-model="startdate"
                        class="form-control datetimepicker"
                        placeholder="dd/mm/yyyy"
                        :editable="true"
                        :clearable="false"
                        :input-format="dateFormat"
                      />
                      <span class="input-icon-addon">
                        <i class="ti ti-calendar text-gray-7"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="col-form-label"
                      >Next Payment Date <span class="text-danger">*</span></label
                    >
                    <div class="input-icon-end position-relative">
                      <date-picker
                        v-model="startdateOne"
                        class="form-control datetimepicker"
                        placeholder="dd/mm/yyyy"
                        :editable="true"
                        :clearable="false"
                        :input-format="dateFormat"
                      />
                      <span class="input-icon-addon">
                        <i class="ti ti-calendar text-gray-7"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="col-form-label"
                      >Expiring On <span class="text-danger">*</span></label
                    >
                    <div class="input-icon-end position-relative">
                      <date-picker
                        v-model="startdateTwo"
                        class="form-control datetimepicker"
                        placeholder="dd/mm/yyyy"
                        :editable="true"
                        :clearable="false"
                        :input-format="dateFormat"
                      />
                      <span class="input-icon-addon">
                        <i class="ti ti-calendar text-gray-7"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">
            Cancel
          </button>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Upgrade Plane -->

  <!-- Delete Company -->
  <div class="modal fade" id="delete_company" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Company?</h4>
            <p class="mb-0">
              Are you sure you want to remove <br />
              company you selected.
            </p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link to="/super-admin/company" class="btn btn-danger"
                >Yes, Delete</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Delete Company -->
</template>
<script>
import { ref } from "vue";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
const currentDateTwo = ref(new Date());
export default {
  data() {
    return {
      showPassword: false,
      showPassword1: false,
      startdate: currentDate,
      startdateOne: currentDateOne,
      startdateTwo: currentDateTwo,
      dateFormat: "dd-MM-yyyy",
      AdvanSelc: ["Select", "Advanced", "Basic", "Enterprise"],
      SelMonth: ["Select", "Monthly", "Yearly"],
      DollarSel: ["Select", "Dollar", "Euro"],
      EnglishSele: ["Select", "English", "Chinese"],
      EditAdvanSelc: ["Select", "Advanced", "Basic", "Enterprise"],
      EditSelMonth: ["Select", "Monthly", "Yearly"],
      EditDollarSel: ["Select", "Dollar", "Euro"],
      EditEnglishSele: ["Select", "English", "Chinese"],
      OneAdvanSelc: ["Select", "Advanced", "Basic", "Enterprise"],
      OneSelMonth: ["Select", "Monthly", "Yearly"],
    };
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
    submitForm() {
      this.$router.push("/super-admin/companies");
    },
  },
};
</script>
