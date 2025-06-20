<template>
  <!-- Add New Task -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
      <h4>Add New Task</h4>
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
                  >Title <span class="text-danger">*</span></label
                >
                <input type="text" class="form-control" />
              </div>
              <div class="mb-3">
                <label class="col-form-label">Category</label>
                <vue-select :options="CateSel" id="catesel" placeholder="Choose" />
              </div>
              <div class="mb-3">
                <label class="col-form-label"
                  >Responsible Persons <span class="text-danger">*</span></label
                >
                <vue-select
                  :options="GueSeltask"
                  id="gueseltask"
                  placeholder="Darlee Robertson"
                />
              </div>
            </div>
            <div class="col-md-6">
              <label class="col-form-label"
                >Start Date <span class="text-danger">*</span></label
              >
              <div class="mb-3 icon-form">
                <date-picker
                  v-model="startdate"
                  class="form-control datetimepicker"
                  :editable="true"
                  :clearable="false"
                  :input-format="dateFormat"
                  value="29-02-2020"
                />
                <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
              </div>
            </div>
            <div class="col-md-6">
              <label class="col-form-label"
                >Due Date <span class="text-danger">*</span></label
              >
              <div class="mb-3 icon-form">
                <date-picker
                  v-model="startdateOne"
                  class="form-control datetimepicker"
                  :editable="true"
                  :clearable="false"
                  :input-format="dateFormat"
                  value="29-02-2020"
                />
                <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Tags <span class="text-danger">*</span></label
                >
                <vue3-tags-input
                  class="input-tags form-control"
                  type="text"
                  data-role="tagsinput"
                  name="Label"
                  value="Promotion, Collab"
                  :tags="tags"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Priority</label>
                <div class="select-priority">
                  <span class="select-icon"
                    ><i class="ti ti-square-rounded-filled"></i
                  ></span>
                  <vue-select :options="MedSel" id="medsel" placeholder="Select" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Status</label>
                <vue-select :options="ActSelect" id="actselect" placeholder="Active" />
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
          <button type="button" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add New Task -->

  <!-- Edit Task -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom">
      <h4>Edit Task</h4>
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
                  >Title <span class="text-danger">*</span></label
                >
                <input
                  type="text"
                  class="form-control"
                  value="Add a form to Update Task"
                />
              </div>
              <div class="mb-3">
                <label class="col-form-label">Category</label>
                <vue-select :options="EmailSel" id="emailsel" placeholder="Choose" />
              </div>
              <div class="mb-3">
                <label class="col-form-label"
                  >Responsible Persons <span class="text-danger">*</span></label
                >
                <vue-select
                  :options="GueSelcontent"
                  id="gueselcontent"
                  placeholder="Darlee Robertson"
                />
              </div>
            </div>
            <div class="col-md-6">
              <label class="col-form-label"
                >Start Date <span class="text-danger">*</span></label
              >
              <div class="mb-3 icon-form">
                <date-picker
                  v-model="startdateTwo"
                  class="form-control datetimepicker"
                  :editable="true"
                  :clearable="false"
                  :input-format="dateFormat"
                  value="27-10-2024"
                />
                <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
              </div>
            </div>
            <div class="col-md-6">
              <label class="col-form-label"
                >Due Date <span class="text-danger">*</span></label
              >
              <div class="mb-3 icon-form">
                <date-picker
                  v-model="startdateThree"
                  class="form-control datetimepicker"
                  :editable="true"
                  :clearable="false"
                  :input-format="dateFormat"
                  value="29-10-2024"
                />
                <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Tags <span class="text-danger">*</span></label
                >
                <vue3-tags-input
                  class="input-tags form-control"
                  type="text"
                  data-role="tagsinput"
                  name="Label"
                  value="Promotion, Collab"
                  :tags="tags"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Priority</label>
                <div class="select-priority">
                  <span class="select-icon"
                    ><i class="ti ti-square-rounded-filled"></i
                  ></span>
                  <vue-select :options="LowSelect" id="lowselect" placeholder="High" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Status</label>
                <vue-select :options="StaSel" id="stasel" placeholder="Active" />
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
  <!-- /Edit Task -->

  <!-- Delete Task -->
  <div class="modal fade" id="delete_activity" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Task?</h4>
            <p class="mb-0">
              Are you sure you want to remove <br />
              task you selected.
            </p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link to="/crm/tasks" class="btn btn-danger" data-bs-dismiss="modal"
                >Yes, Delete it</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Delete Task -->

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
import Vue3TagsInput from "vue3-tags-input";
import { ref } from "vue";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
const currentDateTwo = ref(new Date());
const currentDateThree = ref(new Date());
export default {
  components: {
    Vue3TagsInput,
  },
  data() {
    return {
      editor: ClassicEditor,
      editorData: "Description",
      editorConfig: {},
      startdate: currentDate,
      startdateOne: currentDateOne,
      startdateTwo: currentDateTwo,
      startdateThree: currentDateThree,
      dateFormat: "dd-MM-yyyy",
      CateSel: ["Choose", "Calls", "Email", "Email", "Meeting"],
      MedSel: ["Select", "High", "Low", "Medium"],
      ActSelect: ["Active", "Inactive"],
      EmailSel: ["Choose", "Calls", "Email", "Email", "Meeting"],
      StaSel: ["Active", "Inactive"],
      LowSelect: ["High", "Low", "Medium"],
      tags: ["Promotion", "Collab"],
      GueSeltask: [
        "Darlee Robertson",
        "Sharon Roy",
        "Vaughan",
        "Jessica",
        "Carol Thomas",
      ],
      GueSelcontent: [
        "Darlee Robertson",
        "Sharon Roy",
        "Vaughan",
        "Jessica",
        "Carol Thomas",
      ],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/crm/task");
    },
  },
};
</script>
