<template>
  <!-- Add City -->
  <div class="modal fade" id="add_city" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add City</h5>
          <div class="d-flex align-items-center mod-toggle">
            <button
              class="btn-close custom-btn-close border p-1 me-0 text-dark"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <i class="ti ti-x"></i>
            </button>
          </div>
        </div>
        <form @submit.prevent="submitForm">
          <div class="modal-body">
            <div class="mb-3">
              <label class="col-form-label"
                >Country Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >State Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-0">
              <label class="col-form-label"
                >City Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="modal-footer">
            <div class="d-flex align-items-center justify-content-end m-0">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-primary">Create</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /Add City  -->

  <!-- Edit City  -->
  <div class="modal fade" id="edit_city" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit City</h5>
          <div class="d-flex align-items-center mod-toggle">
            <button
              class="btn-close custom-btn-close border p-1 me-0 text-dark"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <i class="ti ti-x"></i>
            </button>
          </div>
        </div>
        <form @submit.prevent="submitForm">
          <div class="modal-body">
            <div class="mb-3">
              <label class="col-form-label"
                >Country Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="American Samoa(+684)" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >State Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="Swains Island" />
            </div>
            <div class="mb-0">
              <label class="col-form-label"
                >City Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="Gandzasar" />
            </div>
          </div>
          <div class="modal-footer">
            <div class="d-flex align-items-center justify-content-end m-0">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /Edit City  -->

  <!-- Delete City -->
  <div class="modal fade" id="delete_city" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove City?</h4>
            <p class="mb-0">Are you sure you want to remove it</p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link
                to="/location/cities"
                class="btn btn-danger"
                data-bs-dismiss="modal"
                >Yes, Delete it</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Delete City -->
</template>
<script>
export default {
  data() {
    return {};
  },
  methods: {
    submitForm() {
      this.$router.push("/location/cities");
    },
  },
};
</script>
