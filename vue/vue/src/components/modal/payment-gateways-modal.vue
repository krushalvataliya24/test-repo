<template>
  <div class="modal fade" id="add_paypal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Paypal</h5>
          <div class="d-flex align-items-center mod-toggle">
            <div class="status-toggle">
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
                >From Email Address <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >API Key <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Secret Key <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-0">
              <label class="col-form-label">Status</label>
              <div class="d-flex align-items-center">
                <div class="me-2">
                  <input
                    type="radio"
                    class="status-radio"
                    id="pdf"
                    name="export-type"
                    checked=""
                  />
                  <label for="pdf">Active</label>
                </div>
                <div>
                  <input
                    type="radio"
                    class="status-radio"
                    id="share"
                    name="export-type"
                  />
                  <label for="share">Inactive</label>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="d-flex align-items-center justify-content-end m-0">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">
                Save
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {};
  },
  methods: {
    submitForm() {
      this.$router.push("/financial-settings/payment-gateways");
    },
  },
};
</script>
