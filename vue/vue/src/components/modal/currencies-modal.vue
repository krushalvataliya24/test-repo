<template>
  <!-- Add Currency -->
  <div class="modal fade" id="add_currency" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Currency</h5>
          <div class="d-flex align-items-center">
            <div class="status-toggle me-2">
              <input type="checkbox" id="toggle" class="check" checked="" />
              <label for="toggle" class="checktoggle"></label>
            </div>
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
                >Currency Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Code <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Symbol <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-0">
              <label class="col-form-label"
                >Exchange Rate <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="modal-footer">
            <div class="d-flex align-items-center justify-content-end m-0">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /Add Currency -->

  <!-- Edit Currency -->
  <div class="modal fade" id="edit_currency" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Currency</h5>
          <div class="d-flex align-items-center">
            <div class="status-toggle me-2">
              <input type="checkbox" id="toggle1" class="check" checked="" />
              <label for="toggle1" class="checktoggle"></label>
            </div>
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
                >Currency Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="Euro" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Code <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="EUR" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Symbol <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="€" />
            </div>
            <div class="mb-0">
              <label class="col-form-label"
                >Exchange Rate <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="Default" />
            </div>
          </div>
          <div class="modal-footer">
            <div class="d-flex align-items-center justify-content-end m-0">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /Edit Currency -->

  <!-- Delete Account -->
  <div class="modal custom-modal fade" id="delete_currency" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Currency?</h4>
            <p class="mb-0">Are you sure you want to remove it.</p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link
                to="/finanical-settings/currencies"
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
  <!-- /Delete Account -->
</template>
<script>
export default {
  data() {
    return {};
  },
  methods: {
    submitForm() {
      this.$router.push("/finanical-settings/currencies");
    },
  },
};
</script>
