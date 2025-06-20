<template>
  <!-- Add New Campaign -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
      <h4>Add New Campaign</h4>
      <button
        type="button"
        class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
        data-bs-dismiss="offcanvas"
        aria-label="Close"
      >
        <i class="ti ti-x"></i>
      </button>
    </div>
    <div class="offcanvas-body">
      <form @submit.prevent="submitForm">
        <div>
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Name <span class="text-danger">*</span></label
                >
                <input type="text" class="form-control" />
              </div>
              <div class="mb-3">
                <label class="col-form-label"
                  >Campaign Type <span class="text-danger">*</span></label
                >
                <vue-select
                  :options="PublicSelect"
                  id="pubilcselect"
                  placeholder="Choose"
                />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Deal Value<span class="text-danger"> *</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Currency <span class="text-danger">*</span></label
                >
                <vue-select
                  :options="SelectAmount"
                  id="selectamount"
                  placeholder="Choose"
                />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Period <span class="text-danger">*</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Period Value <span class="text-danger">*</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-lg-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Target Audience <span class="text-danger">*</span></label
                >
                <vue3-tags-input
                  class="input-tags form-control"
                  type="text"
                  data-role="tagsinput"
                  name="Label"
                  value="Tag1"
                  :tags5="tags5"
                />
              </div>
              <div class="mb-3">
                <label class="col-form-label"
                  >Description <span class="text-danger">*</span></label
                >
                <textarea class="form-control" rows="4"></textarea>
              </div>
              <div class="mb-3">
                <label class="col-form-label"
                  >Attachment <span class="text-danger">*</span></label
                >
                <div class="drag-attach">
                  <input type="file" />
                  <div class="img-upload">
                    <i class="ti ti-file-broken"></i>Upload File
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label class="col-form-label">Uploaded Files</label>
                <div class="upload-file upload-list">
                  <div>
                    <h6>tes.txt</h6>
                    <p>4.25 MB</p>
                  </div>
                  <a href="javascript:void(0);" class="text-danger"
                    ><i class="ti ti-trash-x"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">
            Cancel
          </button>
          <button type="button" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add New Campaign -->

  <!-- Edit Campaign -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom">
      <h4>Edit Campaign</h4>
      <button
        type="button"
        class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
        data-bs-dismiss="offcanvas"
        aria-label="Close"
      >
        <i class="ti ti-x"></i>
      </button>
    </div>
    <div class="offcanvas-body">
      <form @submit.prevent="submitForm">
        <div class="pro-create">
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Name <span class="text-danger">*</span></label
                >
                <input type="text" class="form-control" value="Enhanced brand" />
              </div>
              <div class="mb-3">
                <label class="col-form-label"
                  >Campaign Type <span class="text-danger">*</span></label
                >
                <vue-select :options="RelaSel" id="relasel" placeholder="Choose" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Deal Value<span class="text-danger"> *</span></label
                >
                <input class="form-control" type="text" value="$12,989" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Currency <span class="text-danger">*</span></label
                >
                <vue-select :options="SelAm" id="selam" placeholder="Choose" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Period <span class="text-danger">*</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Period Value <span class="text-danger">*</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-lg-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Target Audience <span class="text-danger">*</span></label
                >
                <vue3-tags-input
                  class="input-tags form-control"
                  type="text"
                  data-role="tagsinput"
                  name="Label"
                  value="Tag1"
                  :tags5="tags5"
                />
              </div>
              <div class="mb-3">
                <label class="col-form-label"
                  >Description <span class="text-danger">*</span></label
                >
                <textarea class="form-control" rows="4"></textarea>
              </div>
              <div class="mb-3">
                <label class="col-form-label"
                  >Attachment <span class="text-danger">*</span></label
                >
                <div class="drag-attach">
                  <input type="file" />
                  <div class="img-upload">
                    <i class="ti ti-file-broken"></i>Upload File
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label class="col-form-label">Uploaded Files</label>
                <div class="upload-file upload-list">
                  <div>
                    <h6>tes.txt</h6>
                    <p>4.25 MB</p>
                  </div>
                  <a href="javascript:void(0);" class="text-danger"
                    ><i class="ti ti-trash-x"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">
            Cancel
          </button>
          <button type="button" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Edit Campaign -->

  <!-- Delete Campaign -->
  <div class="modal fade" id="delete_campaign" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove campaign?</h4>
            <p class="mb-0">
              Are you sure you want to remove <br />
              campaign you selected.
            </p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link
                to="/crm/campaign"
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
  <!-- /Delete Campaign -->

  <!-- Add New View -->
  <div class="modal custom-modal fade" id="save_view" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New View</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="mb-3">
              <label class="col-form-label">View Name</label>
              <input type="text" class="form-control" />
            </div>
            <div class="modal-btn text-end">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-danger">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add New View -->
</template>
<script>
export default {
  data() {
    return {
      PublicSelect: ["Choose", "Public Relation", "Brand", "Media"],
      SelectAmount: ["Choose", "Dollar", "Euro", "Pound", "Rupee"],
      tags5: ["Small Business", "Corporate Companies", "Urban Apartment"],
      RelaSel: ["Choose", "Public Relations", "Brand", "Media", "Sales"],
      SelAm: ["Choose", "Dollar", "Euro", "Pound", "Rupee"],
      EditSmallSel: [
        "Small Business",
        "Corporate Companies",
        "Urban Apartment",
        "Busniess",
      ],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/crm/campaign");
    },
  },
};
</script>
