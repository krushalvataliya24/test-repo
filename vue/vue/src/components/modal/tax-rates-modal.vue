<template>
  <!-- Add Tax Rate -->
  <div class="modal custom-modal fade" id="add_tax" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Tax Rate</h5>
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
            <div class="form-wrap">
              <label class="col-form-label"
                >Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="form-wrap">
              <label class="col-form-label"
                >Tax Rate % <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="modal-btn">
              <a href="javascript:;" class="btn btn-light" data-bs-dismiss="modal"
                >Cancel</a
              >
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Tax Rate -->

  <!-- Edit Tax Rate -->
  <div class="modal custom-modal fade" id="edit_tax" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Tax Rate</h5>
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
            <div class="form-wrap">
              <label class="col-form-label"
                >Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="VAT" />
            </div>
            <div class="form-wrap">
              <label class="col-form-label"
                >Tax Rate % <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="16" />
            </div>
            <div class="modal-btn">
              <a href="javascript:;" class="btn btn-light" data-bs-dismiss="modal"
                >Cancel</a
              >
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Edit Tax Rate -->
</template>
<script>
export default {
  data() {
    return {};
  },
  methods: {
    submitForm() {
      this.$router.push("/financial-settings/tax-rates");
    },
  },
};
</script>
