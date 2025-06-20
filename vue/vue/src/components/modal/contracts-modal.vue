<template>
  <!-- Add New Contracts -->
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
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Subject <span class="text-danger">*</span></label
                >
                <input type="text" class="form-control" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Date of Birth<span class="text-danger">*</span></label
                >
                <div class="icon-form">
                  <date-picker
                    v-model="startdate"
                    class="form-control datetimepicker"
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
                  >End Date<span class="text-danger">*</span></label
                >
                <div class="icon-form">
                  <date-picker
                    v-model="startdateOne"
                    class="form-control datetimepicker"
                    :editable="true"
                    :clearable="false"
                    :input-format="dateFormat"
                  />
                  <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Client <span class="text-danger">*</span></label
                >
                <vue-select :options="MobileSel" id="mobilesel" placeholder="Choose" />
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Contact Value<span class="text-danger">*</span></label
                >
                <vue-select :options="ChoSel" id="chosel" placeholder="Choose" />
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Contact Value <span class="text-danger">*</span></label
                >
                <input type="text" class="form-control" />
              </div>
            </div>
            <div class="col-md-12">
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
  <!-- /Add New Contracts -->

  <!-- Edit Contracts -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom">
      <h4>Edit Contract</h4>
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
                  >Subject <span class="text-danger">*</span></label
                >
                <input type="text" class="form-control" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Date of Birth<span class="text-danger">*</span></label
                >
                <div class="icon-form">
                  <date-picker
                    v-model="startdateTwo"
                    class="form-control datetimepicker"
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
                  >End Date<span class="text-danger">*</span></label
                >
                <div class="icon-form">
                  <date-picker
                    v-model="startdateThree"
                    class="form-control datetimepicker"
                    :editable="true"
                    :clearable="false"
                    :input-format="dateFormat"
                  />
                  <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Client <span class="text-danger">*</span></label
                >
                <vue-select
                  :options="EditMobileSel"
                  id="editmobilesel"
                  placeholder="Choose"
                />
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Contact Value<span class="text-danger">*</span></label
                >
                <vue-select
                  :options="SeallSel"
                  id="seallsel"
                  placeholder="Contracts under Seal"
                />
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Contact Value <span class="text-danger">*</span></label
                >
                <input type="text" class="form-control" />
              </div>
            </div>
            <div class="col-md-12">
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
  <!-- /Edit Contracts -->

  <!-- Delete Contracts -->
  <div class="modal fade" id="delete_contracts" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Contract?</h4>
            <p class="mb-0">
              Are you sure you want to remove <br />
              contract you selected.
            </p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link
                to="/crm/contracts-list"
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
  <!-- /Delete Contracts -->

  <!-- Create Contracts -->
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
            <h3>Contracts Created Successfully!!!</h3>
            <p>View the details of contracts, created</p>
            <div class="col-lg-12 text-center modal-btn">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Create Contracts -->
</template>
<script>
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import { ref } from "vue";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
const currentDateTwo = ref(new Date());
const currentDateThree = ref(new Date());
const currentDateFour = ref(new Date());
const currentDateFive = ref(new Date());
export default {
  data() {
    return {
      editor: ClassicEditor,
      editorData: "Description",
      editorConfig: {},
      startdate: currentDate,
      startdateOne: currentDateOne,
      startdateTwo: currentDateTwo,
      startdateThree: currentDateThree,
      startdateFour: currentDateFour,
      startdateFive: currentDateFive,
      dateFormat: "dd-MM-yyyy",
      MobileSel: ["Choose", "Mobile App", "Meeting"],
      EditMobileSel: ["Choose", "Mobile App", "Meeting"],
      ChoSel: ["Choose", "Mobile App", "Meeting"],
      SeallSel: ["Contract under Seal", "Meeting"],
      ViewSel: ["Harbor View", "CoastalStar Co.", "RiverStone Ventur"],
      ContractsSel: ["Contracts under Seal", "COntract", "RiverStone Ventur"],
      SignedSel: [
        "Mark as Signed",
        "View PDF",
        "Download",
        "Mark as Signed",
        "Clone",
        "Edit",
        "Print",
      ],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/crm/contracts-list");
    },
  },
};
</script>
