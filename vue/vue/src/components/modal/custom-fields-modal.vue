<template>
  <!-- Add Custom Fields -->
  <div class="modal fade" id="add_fields" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Custom Fields</h5>
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
                >Custom Fields For <span class="text-danger">*</span></label
              >
              <vue-select :options="ChooSel" id="choosel" placeholder="Choose" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Label <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Type <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label">Default Value</label>
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Required <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-0">
              <label class="col-form-label"
                >Status <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
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
  <!-- /Add Custom Fields -->

  <!-- Edit Custom Fields -->
  <div class="modal fade" id="edit_fields" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Custom Fields</h5>
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
                >Custom Fields For <span class="text-danger">*</span></label
              >
              <vue-select :options="EditChoosel" id="editchoosel" placeholder="Choose" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Label <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="Name" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Type <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="Text" />
            </div>
            <div class="mb-3">
              <label class="col-form-label">Default Value</label>
              <input type="text" class="form-control" value="Name" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Required <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="Required" />
            </div>
            <div class="mb-0">
              <label class="col-form-label"
                >Status <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="Active" />
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
  <!-- /Edit Custom Fields -->

  <!-- Delete Fields -->
  <div class="modal fade" id="delete_fields" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="text-center">
              <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
                <i class="ti ti-trash-x fs-36 text-danger"></i>
              </div>
              <h4 class="mb-2">Remove Field?</h4>
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
  <!-- /Delete Fields -->
</template>
<script>
export default {
  data() {
    return {
      ChooSel: ["Choose", "Expense", "Transaction"],
      EditChoosel: ["Choose", "Expense", "Transaction"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/app-settings/custom-fields");
    },
  },
};
</script>
