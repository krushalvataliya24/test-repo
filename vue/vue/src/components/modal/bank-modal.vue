<template>
  <!-- Add Bank Account -->
  <div class="modal fade" id="add_bank" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Bank Account</h5>
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
                >Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Bank <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Branch <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Account Number <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-0">
              <label class="col-form-label"
                >IFSC Code <span class="text-danger">*</span></label
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
  <!-- /Add Bank Account -->

  <!-- Edit Bank Account -->
  <div class="modal fade" id="edit_bank" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Bank Account</h5>
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
                >Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="Darlee Robertson" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Bank <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="HDFC" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Branch <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="Bringham" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Account Number <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="**** **** 4872" />
            </div>
            <div class="mb-0">
              <label class="col-form-label"
                >IFSC Code <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="198367" />
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
  <!-- /Edit Bank Account -->

  <!-- Delete Contact -->
  <div class="modal fade" id="delete_bank" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Bank</h4>
            <p class="mb-0">
              Are you sure you want to remove <br />
              bank you selected.
            </p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link
                to="/financial-settings/bank-accounts"
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
  <!-- /Delete Contact -->
</template>
<script>
export default {
  data() {
    return {};
  },
  methods: {
    submitForm() {
      this.$router.push("/financial-settings/bank-accounts");
    },
  },
};
</script>
