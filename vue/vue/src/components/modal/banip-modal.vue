<template>
  <!-- Add Ban IP Address -->
  <div class="modal custom-modal fade" id="add_ip" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Ban IP Address</h5>
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
                >IP Address <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label">Reason For Ban</label>
              <textarea class="form-control" rows="4"></textarea>
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
  <!-- /Add Ban IP Address -->

  <!-- Edit Ban IP Address -->
  <div class="modal custom-modal fade" id="edit_ip" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Ban IP Address</h5>
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
                >IP Address <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="col-form-label">Reason For Ban</label>
              <textarea class="form-control" rows="4"></textarea>
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
  <!-- /Edit Ban IP Address -->

  <!-- Delete IP Address -->
  <div class="modal custom-modal fade" id="delete_ip" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0 m-0 justify-content-end">
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="success-message text-center">
              <div class="success-popup-icon">
                <i class="ti ti-trash-x"></i>
              </div>
              <h3>Remove IP Address?</h3>
              <p>Are you sure you want to remove it.</p>
              <div class="col-lg-12 text-center modal-btn">
                <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
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
  <!-- /Delete IP Address -->
</template>
<script>
export default {
  data() {
    return {};
  },
  methods: {
    submitForm() {
      this.$router.push("/other-settings/ban-ip-address");
    },
  },
};
</script>
