<template>
  <!-- Nexmo -->
  <div class="modal custom-modal fade" id="add_nexmo" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Nexmo</h5>
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
                >API Key <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >API Secret Key <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Sender ID <span class="text-danger">*</span></label
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
  <!-- /Nexmo -->

  <!-- Add 2Factor -->
  <div class="modal custom-modal fade" id="add_factor" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">2Factor</h5>
          <div class="d-flex align-items-center mod-toggle">
            <div class="status-toggle">
              <input type="checkbox" id="toggle1" class="check" checked="" />
              <label for="toggle1" class="checktoggle"></label>
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
                >API Key <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >API Secret Key <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Sender ID <span class="text-danger">*</span></label
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
  <!-- /Add 2Factor -->

  <!-- Add Twilio -->
  <div class="modal custom-modal fade" id="add_twilio" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Twilio</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="mb-3">
              <label class="col-form-label"
                >API Key <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >API Secret Key <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Sender ID <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="modal-btn">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Twilio -->
</template>
<script>
export default {
  data() {
    return {};
  },
  methods: {
    submitForm() {
      this.$router.push("/system-settings/sms-gateways");
    },
  },
};
</script>
