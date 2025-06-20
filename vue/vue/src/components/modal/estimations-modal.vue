<template>
  <!-- Add New Estimation -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
      <h4>Add New Contract</h4>
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
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between">
                <label class="col-form-label">Client</label>
                <a
                  href="#"
                  class="label-add"
                  data-bs-toggle="modal"
                  data-bs-target="#add_client"
                  ><i class="ti ti-square-rounded-plus"></i>Add New</a
                >
              </div>
              <vue-select :options="Bluesky" id="bluesky" placeholder="Choose" />
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Bill To<span class="text-danger"> *</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Ship To<span class="text-danger"> *</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between">
                <label class="col-form-label">Project</label>
                <a
                  href="#"
                  class="label-add"
                  data-bs-toggle="modal"
                  data-bs-target="#save_view"
                  ><i class="ti ti-square-rounded-plus"></i>Add New</a
                >
              </div>
              <vue-select :options="Servbook" id="bookserv" placeholder="Choose" />
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Estimate By <span class="text-danger">*</span></label
                >
                <vue-select :options="VaughanOne" id="vaughanone" placeholder="Choose" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Amount<span class="text-danger"> *</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Currency</label>
                <vue-select :options="Currency" id="currencynine" placeholder="Select" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Estimate Date <span class="text-danger">*</span></label
                >
                <div class="icon-form">
                  <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                  <date-picker
                    v-model="startdate"
                    placeholder=""
                    class="datetimepicker form-control"
                    :editable="true"
                    :clearable="false"
                    :input-format="dateFormat"
                  />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Expiry Date<span class="text-danger">*</span></label
                >
                <div class="icon-form">
                  <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                  <date-picker
                    v-model="startdateOne"
                    placeholder=""
                    class="datetimepicker form-control"
                    :editable="true"
                    :clearable="false"
                    :input-format="dateFormat"
                  />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Status</label>
                <vue-select :options="Status" id="statusnine" placeholder="Select" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Tags <span class="text-danger">*</span></label
                >
                <vue3-tags-input
                  class="input-tags form-control"
                  type="text"
                  data-role="tagsinput"
                  name="Label"
                  value="Tag1"
                  :tags="tags"
                />
              </div>
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Attachment <span class="text-danger">*</span></label
              >
              <div class="drag-attach">
                <input type="file" />
                <div class="img-upload"><i class="ti ti-file-broken"></i>Upload File</div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Description <span class="text-danger">*</span></label
                >
                <ckeditor
                  :editor="editor"
                  v-model="editorData"
                  :config="editorConfig"
                ></ckeditor>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex align-items-center justify-content-end">
          <button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">
            Cancel
          </button>
          <button
            type="button"
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#create_success"
          >
            Create
          </button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add New Estimation -->

  <!-- Edit Estimation -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom">
      <h4>Edit Estimation</h4>
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
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between">
                <label class="col-form-label">Client</label>
                <a
                  href="#"
                  class="label-add"
                  data-bs-toggle="modal"
                  data-bs-target="#add_client"
                  ><i class="ti ti-square-rounded-plus"></i>Add New</a
                >
              </div>
              <vue-select
                :options="Bluesky"
                id="editbluesky"
                placeholder="NovaWave LLC"
              />
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Bill To<span class="text-danger"> *</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Ship To<span class="text-danger"> *</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between">
                <label class="col-form-label">Project</label>
                <a
                  href="#"
                  class="label-add"
                  data-bs-toggle="modal"
                  data-bs-target="#save_view"
                  ><i class="ti ti-square-rounded-plus"></i>Add New</a
                >
              </div>
              <vue-select
                :options="Servbook"
                id="editservbook"
                placeholder="Truelysell"
              />
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Estimate By <span class="text-danger">*</span></label
                >
                <vue-select
                  :options="EditVaughan"
                  id="editvaughan"
                  placeholder="Truelysell"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Amount<span class="text-danger"> *</span></label
                >
                <input class="form-control" type="text" value="2,15,000" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Currency</label>
                <vue-select :options="Currency" id="editcurrency" placeholder="$" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Estimate Date <span class="text-danger">*</span></label
                >
                <div class="icon-form">
                  <date-picker
                    v-model="startdate"
                    placeholder=""
                    class="datetimepicker form-control"
                    :editable="true"
                    :clearable="false"
                    :input-format="dateFormat"
                  />
                  <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Expiry Date<span class="text-danger">*</span></label
                >
                <div class="icon-form">
                  <date-picker
                    v-model="startdateOne"
                    placeholder=""
                    class="datetimepicker form-control"
                    :editable="true"
                    :clearable="false"
                    :input-format="dateFormat"
                  />
                  <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Status</label>
                <vue-select :options="StatusOne" id="editstatus" placeholder="Sent" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Tags <span class="text-danger">*</span></label
                >
                <vue3-tags-input
                  class="input-tags form-control"
                  type="text"
                  data-role="tagsinput"
                  name="Label"
                  value="Tag1"
                  :tags="tags"
                />
              </div>
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Attachment <span class="text-danger">*</span></label
              >
              <div class="drag-attach">
                <input type="file" />
                <div class="img-upload"><i class="ti ti-file-broken"></i>Upload File</div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Description <span class="text-danger">*</span></label
                >
                <ckeditor
                  :editor="editor"
                  v-model="editorData"
                  :config="editorConfig"
                ></ckeditor>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex align-items-center justify-content-end">
          <button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">
            Cancel
          </button>
          <button type="button" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Edit Estimation -->

  <!-- Delete Estimations -->
  <div class="modal fade" id="delete_estimations" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Estimation?</h4>
            <p class="mb-0">
              Are you sure you want to remove <br />
              estimation you selected.
            </p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link
                to="/crm/estimations-list"
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
  <!-- /Delete Estimations -->

  <!-- Create Estimation -->
  <div class="modal custom-modal fade" id="create_success" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0 m-0 justify-content-end">
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <div class="success-message text-center">
            <div class="success-popup-icon bg-light-blue">
              <i class="ti ti-atom-2"></i>
            </div>
            <h3>Estimations Created Successfully!!!</h3>
            <p>View the details of estimations, created</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Create Project -->

  <!-- Add New View -->
  <div class="modal custom-modal fade" id="save_view" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Project</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="mb-3">
              <label class="col-form-label">Project Name</label>
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

  <!-- Add New View -->
  <div class="modal custom-modal fade" id="add_client" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Client</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="mb-3">
              <label class="col-form-label">Client Name</label>
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
import { ref } from "vue";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import Vue3TagsInput from "vue3-tags-input";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
export default {
  components: {
    Vue3TagsInput,
  },
  data() {
    return {
      Bluesky: ["Choose", "NovaWave LLC", "BlueSky Industries", "ASilver Hawkdams"],
      Servbook: ["Choose", "Truelysell", "Dreamschat", "Servbook"],
      VaughanOne: ["Choose", "Darlee Robertson", "Sharon Roy", "Vaughan"],
      EditVaughan: ["Choose", "Darlee Robertson", "Sharon Roy", "Vaughan"],
      Currency: ["Choose", "Dollar", "Euro", "Pound", "Rupee"],
      Status: ["Select", "Active", "Inactive"],
      StatusOne: ["Select", "Active", "Inactive"],
      startdate: currentDate,
      startdateOne: currentDateOne,
      dateFormat: "dd-MM-yyyy",
      tags: ["Tag1", "Tag2", "Tag3"],
      editor: ClassicEditor,
      editorData: "Description",
      editorConfig: {},
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/crm/estimations-list");
    },
  },
};
</script>
