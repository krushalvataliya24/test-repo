<template>
  <!-- Add Translation -->
  <div class="modal fade" id="add_translation" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Translation</h5>
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
              <label class="form-label"
                >Language <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
            <div class="mb-3">
              <label class="form-label">Code <span class="text-danger">*</span></label>
              <input type="text" class="form-control" />
            </div>
            <div class="mb-0">
              <label class="form-label">Status</label>
              <div class="radio-wrap">
                <div class="d-flex flex-wrap">
                  <div class="radio-btn">
                    <input
                      type="radio"
                      class="status-radio"
                      id="add-active"
                      name="status"
                      checked=""
                    />
                    <label for="add-active">Active</label>
                  </div>
                  <div class="radio-btn">
                    <input
                      type="radio"
                      class="status-radio"
                      id="add-inactive"
                      name="status"
                    />
                    <label for="add-inactive">Inactive</label>
                  </div>
                </div>
              </div>
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
  <!-- /Add Translation -->

  <!-- Edit Translation -->
  <div class="modal fade" id="edit_translation" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Translation</h5>
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
              <label class="form-label"
                >Language <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="English" />
            </div>
            <div class="mb-3">
              <label class="form-label">Code <span class="text-danger">*</span></label>
              <input type="text" class="form-control" value="en" />
            </div>
            <div class="mb-0">
              <label class="form-label">Status</label>
              <div class="radio-wrap">
                <div class="d-flex flex-wrap">
                  <div class="radio-btn">
                    <input
                      type="radio"
                      class="status-radio"
                      id="edit-active"
                      name="status"
                      checked=""
                    />
                    <label for="edit-active">Active</label>
                  </div>
                  <div class="radio-btn">
                    <input
                      type="radio"
                      class="status-radio"
                      id="edit-inactive"
                      name="status"
                    />
                    <label for="edit-inactive">Inactive</label>
                  </div>
                </div>
              </div>
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
  <!-- /Edit Translation -->

  <!-- Import Sample -->
  <div class="modal fade" id="import_sample" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Import Sample</h5>
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
              <label class="form-label">File <span class="text-danger">*</span></label>
              <vue-select :options="InvenSel" id="invensel" placeholder="Inventory" />
            </div>
            <div class="mb-3">
              <label class="form-label"
                >Language <span class="text-danger">*</span></label
              >
              <vue-select :options="Chinesel" id="chinesel" placeholder="English" />
            </div>
            <div class="mb-3">
              <div class="drag-attach">
                <input type="file" />
                <div class="img-upload"><i class="ti ti-file-broken"></i>Upload File</div>
              </div>
            </div>
            <div class="mb-0">
              <label class="form-label">Uploaded Files</label>
              <div class="upload-file">
                <h6>Projectneonals teyys.xls</h6>
                <p>4.25 MB</p>
                <div class="progress">
                  <div
                    class="progress-bar bg-success"
                    role="progressbar"
                    style="width: 25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
                <p class="black-text">45%</p>
              </div>
              <div class="upload-file d-flex align-items-center">
                <div>
                  <h6 class="fw-medium">tes.txt</h6>
                  <p>4.25 MB</p>
                </div>
                <a href="javascript:void(0);" class="text-danger"
                  ><i class="ti ti-trash-x"></i
                ></a>
              </div>
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
  <!-- /Import Sample -->

  <!-- Delete Translation -->
  <div class="modal fade" id="delete_translation" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="text-center">
              <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
                <i class="ti ti-trash-x fs-36 text-danger"></i>
              </div>
              <h4 class="mb-2">Remove Translation?</h4>
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
  <!-- /Delete Translation -->
</template>
<script>
export default {
  data() {
    return {
      InvenSel: ["Inventory", "Expense", "Product"],
      Chinesel: ["English", "Hindi", "Chinese"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/website-settings/language");
    },
  },
};
</script>
