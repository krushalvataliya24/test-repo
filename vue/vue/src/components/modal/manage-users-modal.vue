<template>
  <!-- Add User -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Add New User</h5>
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
        <div>
          <!-- Basic Info -->
          <div>
            <div class="row">
              <div class="col-md-12">
                <div class="profile-pic-upload">
                  <div class="profile-pic">
                    <span><i class="ti ti-photo"></i></span>
                  </div>
                  <div class="upload-content">
                    <div class="upload-btn">
                      <input type="file" />
                      <span> <i class="ti ti-file-broken"></i>Upload File </span>
                    </div>
                    <p>JPG, GIF or PNG. Max size of 800K</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="col-form-label">
                    Name <span class="text-danger">*</span></label
                  >
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="col-form-label"
                    >User Name <span class="text-danger">*</span></label
                  >
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="col-form-label"
                      >Email <span class="text-danger">*</span></label
                    >
                    <div class="status-toggle small-toggle-btn d-flex align-items-center">
                      <span class="me-2 label-text">Email Opt Out</span>
                      <input type="checkbox" id="user1" class="check" checked="" />
                      <label for="user1" class="checktoggle"></label>
                    </div>
                  </div>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="col-form-label"
                    >Role <span class="text-danger">*</span></label
                  >
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="col-form-label"
                    >Phone 1 <span class="text-danger">*</span></label
                  >
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="col-form-label">Phone 2</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="col-form-label"
                    >Password <span class="text-danger">*</span></label
                  >
                  <div class="icon-form-end">
                    <span class="form-icon"><i class="ti ti-eye-off"></i></span>
                    <input type="password" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="col-form-label"
                    >Repeat Password <span class="text-danger">*</span></label
                  >
                  <div class="icon-form-end">
                    <span class="form-icon"><i class="ti ti-eye-off"></i></span>
                    <input type="password" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="col-form-label"
                    >Location <span class="text-danger">*</span></label
                  >
                  <vue-select :options="Cansel" id="cansel" placeholder="Choose" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="radio-wrap">
                  <label class="col-form-label">Status</label>
                  <div class="d-flex align-items-center">
                    <div class="me-2">
                      <input
                        type="radio"
                        class="status-radio"
                        id="active1"
                        name="status"
                        checked=""
                      />
                      <label for="active1">Active</label>
                    </div>
                    <div>
                      <input
                        type="radio"
                        class="status-radio"
                        id="inactive1"
                        name="status"
                      />
                      <label for="inactive1">Inactive</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Basic Info -->
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <a href="#" class="btn btn-light me-2" data-bs-dismiss="offcanvas">Cancel</a>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add User -->

  <!-- Edit User -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Edit User</h5>
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
        <div>
          <!-- Basic Info -->
          <div>
            <div class="row">
              <div class="col-md-12">
                <div class="profile-pic-upload">
                  <div class="profile-pic">
                    <span><i class="ti ti-photo"></i></span>
                  </div>
                  <div class="upload-content">
                    <div class="upload-btn">
                      <input type="file" />
                      <span> <i class="ti ti-file-broken"></i>Upload File </span>
                    </div>
                    <p>JPG, GIF or PNG. Max size of 800K</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="col-form-label">
                    Name <span class="text-danger">*</span></label
                  >
                  <input type="text" class="form-control" value="Darlee Robertson" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="col-form-label"
                    >User Name <span class="text-danger">*</span></label
                  >
                  <input type="text" class="form-control" value="Darlee Robertson" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="col-form-label"
                      >Email <span class="text-danger">*</span></label
                    >
                    <div class="status-toggle small-toggle-btn d-flex align-items-center">
                      <span class="me-2 label-text">Email Opt Out</span>
                      <input type="checkbox" id="user2" class="check" checked="" />
                      <label for="user2" class="checktoggle"></label>
                    </div>
                  </div>
                  <input type="text" class="form-control" value="robertson@example.com" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="col-form-label"
                    >Role <span class="text-danger">*</span></label
                  >
                  <input type="text" class="form-control" value="Facility Manager" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="col-form-label"
                    >Phone 1 <span class="text-danger">*</span></label
                  >
                  <input type="text" class="form-control" value="	+1 989757485" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="col-form-label">Phone 2</label>
                  <input type="text" class="form-control" value="	+1 989757485" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="col-form-label"
                    >Password <span class="text-danger">*</span></label
                  >
                  <div class="icon-form-end">
                    <span class="form-icon"><i class="ti ti-eye-off"></i></span>
                    <input type="password" class="form-control" value="****" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="col-form-label"
                    >Repeat Password <span class="text-danger">*</span></label
                  >
                  <div class="icon-form-end">
                    <span class="form-icon"><i class="ti ti-eye-off"></i></span>
                    <input type="password" class="form-control" value="****" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="col-form-label"
                    >Location <span class="text-danger">*</span></label
                  >
                  <vue-select
                    :options="EditCansel"
                    id="editcansel"
                    placeholder="Germany"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="radio-wrap">
                  <label class="col-form-label">Status</label>
                  <div class="d-flex align-items-center">
                    <div class="me-2">
                      <input
                        type="radio"
                        class="status-radio"
                        id="active2"
                        name="status"
                        checked=""
                      />
                      <label for="active2">Active</label>
                    </div>
                    <div>
                      <input
                        type="radio"
                        class="status-radio"
                        id="inactive2"
                        name="status"
                      />
                      <label for="inactive2">Inactive</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Basic Info -->
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <a href="#" class="btn btn-light me-2" data-bs-dismiss="offcanvas">Cancel</a>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Edit User -->

  <!-- Delete User -->
  <div class="modal fade" id="delete_contact" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove users?</h4>
            <p class="mb-0">Are you sure you want to remove it</p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link to="/user/manage-users" class="btn btn-danger" data-bs-dismiss="modal"
                >Yes, Delete it</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Delete User -->
</template>
<script>
export default {
  data() {
    return {
      EditCansel: ["Germany", "USA", "Canada", "India", "China"],
      Cansel: ["Choose", "Germany", "USA", "Canada", "India", "China"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/user/manage-users");
    },
  },
};
</script>
