<template>
  <div class="modal custom-modal fade" id="add_settings" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">AWS Settings</h5>
          <div class="d-flex align-items-center mod-toggle">
            <div class="status-toggle">
              <input type="checkbox" id="toggle" class="check" checked="" />
              <label for="toggle" class="checktoggle"></label>
            </div>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <i class="ti ti-x"></i>
            </button>
          </div>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="mb-3">
              <label class="col-form-label"
                >AWS Access Key <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Secret Key <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Bucket Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Region <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Base URL <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="modal-btn">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
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
      this.$router.push("/other-settings/storage");
    },
  },
};
</script>
