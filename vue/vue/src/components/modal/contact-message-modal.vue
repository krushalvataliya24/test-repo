<template>
  <!-- Add Contact Message -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Add Contact Messages</h5>
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
        <div class="row">
          <div class="col-md-12">
            <div class="mb-3">
              <label class="col-form-label">
                Name <span class="text-danger">*</span></label
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
                  <input type="checkbox" id="user" class="check" checked="" />
                  <label for="user" class="checktoggle"></label>
                </div>
              </div>
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Phone <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="col-md-12">
            <div class="mb-3">
              <label class="col-form-label"
                >Message <span class="text-danger">*</span></label
              >
              <textarea class="form-control"></textarea>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <a href="#" class="btn btn-light me-2">Cancel</a>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add Contact Message -->

  <!-- Edit Contact Message -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Edit Contact Messages</h5>
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
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label">
                  Name <span class="text-danger">*</span></label
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
                    <input type="checkbox" id="email" class="check" checked="" />
                    <label for="email" class="checktoggle"></label>
                  </div>
                </div>
                <input type="text" class="form-control" value="robertson@example.com" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Phone <span class="text-danger">*</span></label
                >
                <input type="text" class="form-control" value="+1 989757485" />
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Message <span class="text-danger">*</span></label
                >
                <textarea class="form-control">
Duis aute irure dolor in reprehenderit</textarea
                >
              </div>
            </div>
          </div>
        </div>
        <div class="submit-button text-end">
          <a href="#" class="btn btn-light sidebar-close1">Cancel</a>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Edit Contact Message -->

  <!-- Delete User -->
  <div class="modal fade" id="delete_contact" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Contact Messages</h4>
            <p class="mb-0">Are you sure you want to remove it</p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link to="/support/contact-messages" class="btn btn-danger" data-bs-dismiss="modal"
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
    return {};
  },
  methods: {
    submitForm() {
      this.$router.push("/support/contact-messages");
    },
  },
};
</script>
