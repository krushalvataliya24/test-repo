<template>
  <layouts-header></layouts-header>
  <layouts-sidebar></layouts-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- Page Header -->
          <page-header :title="title" />
          <!-- /Page Header -->

          <!-- Settings Menu -->
          <settings-tabs></settings-tabs>
          <!-- /Settings Menu -->

          <div class="row">
            <general-sidebar></general-sidebar>

            <div class="col-xl-9 col-lg-12">
              <!-- Settings Info -->
              <div class="card">
                <div class="card-body pb-0">
                  <h4 class="fw-semibold mb-3">Security Settings</h4>
                  <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="card border shadow-none flex-fill mb-3">
                        <div class="card-body d-flex justify-content-between flex-column">
                          <div class="mb-3">
                            <div
                              class="d-flex align-items-center justify-content-between mb-1"
                            >
                              <h6 class="fw-semibold">Password</h6>
                            </div>
                            <p>Last Changed 03 Jan 2023, 09:00 AM</p>
                          </div>
                          <div>
                            <a
                              href="javascript:void(0)"
                              class="btn btn-light"
                              data-bs-toggle="modal"
                              data-bs-target="#change_password"
                            >
                              Change Password
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="card border shadow-none flex-fill mb-3">
                        <div class="card-body d-flex justify-content-between flex-column">
                          <div class="mb-3">
                            <div
                              class="d-flex align-items-center justify-content-between mb-1"
                            >
                              <h6 class="fw-semibold">Two Factor</h6>
                              <div class="form-check form-switch">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  role="switch"
                                  checked
                                />
                              </div>
                            </div>
                            <p>Receive codes via SMS or email every time you login</p>
                          </div>
                          <div>
                            <a
                              href="javascript:void(0)"
                              class="btn btn-primary"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_two_factor"
                              >Delete Account</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="card border shadow-none flex-fill mb-3">
                        <div class="card-body d-flex justify-content-between flex-column">
                          <div class="mb-3">
                            <div
                              class="d-flex align-items-center justify-content-between mb-1"
                            >
                              <h6 class="fw-semibold">Google Authenticator</h6>
                              <div class="form-check form-switch">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  role="switch"
                                  checked
                                />
                              </div>
                            </div>
                            <p>
                              Google Authenticator adds an extra layer of security to your
                              online accounts by adding a second step of verification when
                              you sign in.
                            </p>
                          </div>
                          <div>
                            <span class="badge badge-soft-success">Connected</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="card border shadow-none flex-fill mb-3">
                        <div class="card-body d-flex justify-content-between flex-column">
                          <div class="mb-3">
                            <div
                              class="d-flex align-items-center justify-content-between mb-1"
                            >
                              <h6 class="fw-semibold">
                                Phone Number Verification<i
                                  class="ti ti-square-rounded-check-filled text-success ms-1"
                                ></i>
                              </h6>
                            </div>
                            <p>
                              Verified Mobile Number :
                              <span class="text-gray-9">+99264710583</span>
                            </p>
                          </div>
                          <div class="d-flex align-items-center">
                            <a href="javascript:void(0)" class="btn btn-light me-3"
                              >Change</a
                            >
                            <a href="javascript:void(0)" class="link-danger fw-semibold"
                              >Remove</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="card border shadow-none flex-fill mb-3">
                        <div class="card-body d-flex justify-content-between flex-column">
                          <div class="mb-3">
                            <div
                              class="d-flex align-items-center justify-content-between mb-1"
                            >
                              <h6 class="fw-semibold">
                                Email Verification<i
                                  class="ti ti-square-rounded-check-filled text-success ms-1"
                                ></i>
                              </h6>
                            </div>
                            <p>Verified Email : <span>info@example.com</span></p>
                          </div>
                          <div class="d-flex align-items-center">
                            <a href="javascript:void(0)" class="btn btn-light me-3"
                              >Change</a
                            >
                            <a href="javascript:void(0)" class="link-danger fw-semibold"
                              >Remove</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="card border shadow-none flex-fill mb-3">
                        <div class="card-body d-flex justify-content-between flex-column">
                          <div class="mb-3">
                            <div
                              class="d-flex align-items-center justify-content-between mb-1"
                            >
                              <h6 class="fw-semibold">Device Management</h6>
                            </div>
                            <p>Last Changed 17 Feb 2023, 11.00 AM</p>
                          </div>
                          <div class="d-flex align-items-center">
                            <a href="javascript:void(0)" class="btn btn-light">Manage</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="card border shadow-none flex-fill mb-3">
                        <div class="card-body d-flex justify-content-between flex-column">
                          <div class="mb-3">
                            <div
                              class="d-flex align-items-center justify-content-between mb-1"
                            >
                              <h6 class="fw-semibold">Account Activity</h6>
                            </div>
                            <p>Last Changed 22 Feb 2023, 01:20 PM</p>
                          </div>
                          <div class="d-flex align-items-center">
                            <a href="javascript:void(0)" class="btn btn-light">View</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="card border shadow-none flex-fill mb-3">
                        <div class="card-body d-flex justify-content-between flex-column">
                          <div class="mb-3">
                            <div
                              class="d-flex align-items-center justify-content-between mb-1"
                            >
                              <h6 class="fw-semibold">Deactive Account</h6>
                            </div>
                            <p>Last Changed 04 Mar 2023, 08:40 AM</p>
                          </div>
                          <div class="d-flex align-items-center">
                            <a href="javascript:void(0)" class="btn btn-light"
                              >Deactive</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="card border shadow-none flex-fill mb-3">
                        <div class="card-body d-flex justify-content-between flex-column">
                          <div class="mb-3">
                            <div
                              class="d-flex align-items-center justify-content-between mb-1"
                            >
                              <h6 class="fw-semibold">Delete Account</h6>
                            </div>
                            <p>Last Changed 13 Mar 2023, 02:40 PM</p>
                          </div>
                          <div class="d-flex align-items-center">
                            <a
                              href="javascript:void(0)"
                              class="btn btn-primary"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_account"
                              >Delete Account</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Settings Info -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Change Password -->
  <div class="modal fade" id="change_password" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Change Password</h5>
          <button
            class="btn-close custom-btn-close border p-1 me-0 text-dark"
            data-bs-dismiss="modal"
            aria-label="Close"
          >
            <i class="ti ti-x"></i>
          </button>
        </div>
        <form @submit.prevent="submitForm">
          <div class="modal-body">
            <div class="mb-3">
              <label class="col-form-label"
                >Current Password <span class="text-danger">*</span></label
              >
              <input type="password" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >New Password <span class="text-danger">*</span></label
              >
              <input type="password" class="form-control" />
            </div>
            <div class="mb-0">
              <label class="col-form-label"
                >Confirm Password <span class="text-danger">*</span></label
              >
              <input type="password" class="form-control" />
            </div>
          </div>
          <div class="modal-footer">
            <div class="d-flex align-items-center">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /Change Password -->

  <!-- Delete Account -->
  <div class="modal custom-modal fade" id="delete_account" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="text-center">
              <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
                <i class="ti ti-trash-x fs-36 text-danger"></i>
              </div>
              <h4 class="mb-2">Delete Account</h4>
              <p class="mb-0">Are you sure you want to remove it.</p>
              <div class="d-flex align-items-center justify-content-center mt-4">
                <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">
                  Yes, Delete it
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Delete Account -->

  <!-- Delete Account -->
  <div class="modal custom-modal fade" id="delete_two_factor" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Delete Two Factor</h4>
            <p class="mb-0">Are you sure you want to remove it.</p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">
                Yes, Delete it
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Delete Account -->
</template>
<script>
export default {
  data() {
    return {
      title: "Settings",
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/settings/security");
    },
  },
};
</script>
