<template>
  <!-- Add New Deals -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Add New Deals</h5>
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
        <div class="row">
          <div class="col-md-12">
            <div class="mb-3">
              <label class="col-form-label"
                >Deal Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between">
                <label class="col-form-label"
                  >Pipeine <span class="text-danger">*</span></label
                >
                <a
                  href=""
                  class="label-add"
                  data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvas_pipeline"
                >
                  <i class="ti ti-square-rounded-plus"></i>
                  Add New
                </a>
              </div>
              <vue-select :options="Market" id="marketingdeals" placeholder="Choose" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Status <span class="text-danger">*</span></label
              >
              <vue-select :options="Open" id="openone" placeholder="Choose" />
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
              <vue-select :options="Currency" id="currencydoller" placeholder="Select" />
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Period <span class="text-danger">*</span></label
              >
              <vue-select :options="Period" id="periodvalue" placeholder="Choose" />
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
          <div class="col-md-12">
            <div class="mb-3">
              <label class="col-form-label"
                >Contact <span class="text-danger">*</span></label
              >
              <vue-select
                :options="GueSeldeals"
                id="gueseldeals"
                placeholder="Darlee Robertson"
              />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Project <span class="text-danger">*</span></label
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
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Due Date <span class="text-danger">*</span></label
              >
              <div class="icon-form">
                <date-picker
                  v-model="startdate"
                  value="29-02-2020"
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
                >Expected Closing Date <span class="text-danger">*</span></label
              >
              <div class="icon-form">
                <date-picker
                  v-model="startdateOne"
                  value="29-02-2020"
                  class="datetimepicker form-control"
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
                >Assignee <span class="text-danger">*</span></label
              >
              <vue-select :options="SonSel" id="sonsel" placeholder="Darlee Robertson" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Follow Up Date <span class="text-danger">*</span></label
              >
              <div class="icon-form">
                <date-picker
                  v-model="startdateTwo"
                  value="29-02-2020"
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
                >Source <span class="text-danger">*</span></label
              >
              <vue-select :options="Source" id="sourceselect" placeholder="Select" />
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
                value="Collab, Rated"
                :tags3="tags3"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Priority <span class="text-danger">*</span></label
              >
              <vue-select :options="Priority" placeholder="Select" id="prioritydone" />
            </div>
          </div>
          <div class="col-lg-12">
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
  <!-- /Add New Deals -->

  <!-- Edit Deals -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Edit Deals</h5>
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
        <div class="row">
          <div class="col-md-12">
            <div class="mb-3">
              <label class="col-form-label"
                >Deal Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="Collins" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between">
                <label class="col-form-label"
                  >Pipeine <span class="text-danger">*</span></label
                >
                <a
                  href=""
                  class="label-add"
                  data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvas_pipeline"
                >
                  <i class="ti ti-square-rounded-plus"></i>
                  Add New
                </a>
              </div>
              <vue-select :options="Choose" id="choosecall" placeholder="Sales" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Status <span class="text-danger">*</span></label
              >
              <vue-select :options="Status" id="openstatus" placeholder="Open" />
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Deal Value<span class="text-danger"> *</span></label
              >
              <input class="form-control" type="text" value="$04,51,000" />
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Currency <span class="text-danger">*</span></label
              >
              <vue-select :options="Currency" id="selectedcurrency" placeholder="$" />
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Period <span class="text-danger">*</span></label
              >
              <vue-select :options="Period" id="selectedperiod" placeholder="Choose" />
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
          <div class="col-md-12">
            <div class="mb-3">
              <label class="col-form-label"
                >Contact <span class="text-danger">*</span></label
              >
              <vue-select
                :options="Vaughan"
                id="vaughan"
                placeholder="Darlee Robertson"
              />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Project <span class="text-danger">*</span></label
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
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Due Date <span class="text-danger">*</span></label
              >
              <div class="icon-form">
                <date-picker
                  v-model="startdateThree"
                  value="29-02-2020"
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
                >Expected Closing Date <span class="text-danger">*</span></label
              >
              <div class="icon-form">
                <date-picker
                  v-model="startdateFour"
                  value="29-02-2020"
                  class="datetimepicker form-control"
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
                >Assignee <span class="text-danger">*</span></label
              >
              <vue-select
                :options="RoyModal"
                id="roymodal"
                placeholder="Darlee Robertson"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Follow Up Date <span class="text-danger">*</span></label
              >
              <div class="icon-form">
                <date-picker
                  v-model="startdateFive"
                  value="29-02-2020"
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
                >Source <span class="text-danger">*</span></label
              >
              <vue-select
                :options="Source"
                id="selectedsource"
                placeholder="Social Media"
              />
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
                value="Collab, Rated"
                :tags3="tags3"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Priority <span class="text-danger">*</span></label
              >
              <vue-select :options="Priority" id="optionpriority" placeholder="Low" />
            </div>
          </div>
          <div class="col-lg-12">
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
        <div class="d-flex align-items-center justify-content-end">
          <button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">
            Cancel
          </button>
          <button type="button" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Edit Deals -->

  <!-- Delete Deal -->
  <div class="modal fade" id="delete_deal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Deal?</h4>
            <p class="mb-0">
              Are you sure you want to remove <br />
              deal you selected.
            </p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link
                to="/crm/deals-list"
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
  <!-- /Delete Deal -->

  <!-- Create Deal -->
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
              <i class="ti ti-medal"></i>
            </div>
            <h3>Deal Created Successfully!!!</h3>
            <p>View the details of deal, created</p>
            <div class="col-lg-12 text-center modal-btn">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <router-link to="/crm/deals-details" class="btn btn-primary"
                >View Details</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Create Deal -->

  <!-- Add New Pipeline -->
  <div
    class="offcanvas offcanvas-end offcanvas-large"
    tabindex="-1"
    id="offcanvas_pipeline"
  >
    <div class="offcanvas-header border-bottom">
      <h4>Add New Pipeline</h4>
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
          <div class="mb-3">
            <label class="col-form-label"
              >Pipeline Name <span class="text-danger">*</span></label
            >
            <input class="form-control" type="text" />
          </div>
          <div class="mb-3">
            <div class="pipe-title d-flex align-items-center justify-content-between">
              <h5 class="form-title">Pipeline Stages</h5>
              <a
                href="#"
                class="add-stage"
                data-bs-toggle="modal"
                data-bs-target="#add_stage"
                ><i class="ti ti-square-rounded-plus"></i>Add New</a
              >
            </div>
            <div class="pipeline-listing">
              <div class="pipeline-item">
                <p><i class="ti ti-grip-vertical"></i> Inpipeline</p>
                <div class="action-pipeline">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"
                    ><i class="ti ti-edit text-blue"></i>Edit</a
                  >
                  <a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"
                    ><i class="ti ti-trash text-danger"></i>Delete</a
                  >
                </div>
              </div>
              <div class="pipeline-item">
                <p><i class="ti ti-grip-vertical"></i> Follow Up</p>
                <div class="action-pipeline">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"
                    ><i class="ti ti-edit text-blue"></i>Edit</a
                  >
                  <a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"
                    ><i class="ti ti-trash text-danger"></i>Delete</a
                  >
                </div>
              </div>
              <div class="pipeline-item">
                <p><i class="ti ti-grip-vertical"></i> Schedule Service</p>
                <div class="action-pipeline">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"
                    ><i class="ti ti-edit text-blue"></i>Edit</a
                  >
                  <a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"
                    ><i class="ti ti-trash text-danger"></i>Delete</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <h5 class="form-title">Access</h5>
            <div class="d-flex flex-wrap access-item nav">
              <div class="radio-btn" data-bs-toggle="tab" data-bs-target="#all">
                <input
                  type="radio"
                  class="status-radio"
                  id="all"
                  name="status"
                  checked=""
                />
                <label for="all">All</label>
              </div>
              <div class="radio-btn" data-bs-toggle="tab" data-bs-target="#select-person">
                <input type="radio" class="status-radio" id="select" name="status" />
                <label for="select">Select Person</label>
              </div>
            </div>
            <div class="tab-content mb-3">
              <div class="tab-pane fade" id="select-person">
                <div class="access-wrapper">
                  <div class="access-view">
                    <div class="access-img">
                      <img src="@/assets/img/profiles/avatar-21.jpg" alt="Image" />Vaughan
                    </div>
                    <a href="#">Remove</a>
                  </div>
                  <div class="access-view">
                    <div class="access-img">
                      <img src="@/assets/img/profiles/avatar-01.jpg" alt="Image" />Jessica
                    </div>
                    <a href="#">Remove</a>
                  </div>
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
  <!-- /Add New Pipeline -->

  <!-- Delete Stage -->
  <div class="modal fade" id="delete_stage" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Stage?</h4>
            <p class="mb-0">
              Are you sure you want to remove <br />
              stage you selected.
            </p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link
                to="/crm/deals-list"
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
  <!-- /Delete Stage -->

  <!-- Add New Stage -->
  <div class="modal custom-modal fade" id="add_stage" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Stage</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="mb-3">
              <label class="col-form-label">Stage Name *</label>
              <input type="text" class="form-control" />
            </div>
            <div class="modal-btn text-end">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-danger">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add New Stage -->

  <!-- Edit Stage -->
  <div class="modal custom-modal fade" id="edit_stage" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Stage</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="mb-3">
              <label class="col-form-label">Stage Name *</label>
              <input type="text" class="form-control" value="Inpipeline" />
            </div>
            <div class="modal-btn text-end">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-danger">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Edit Stage -->

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
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import { ref } from "vue";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
const currentDateTwo = ref(new Date());
const currentDateThree = ref(new Date());
const currentDateFour = ref(new Date());
const currentDateFive = ref(new Date());
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
      startdateFour: currentDateFour,
      startdateFive: currentDateFive,
      dateFormat: "dd-MM-yyyy",
      Market: ["Choose", "Sales", "Marketing", "Calls"],
      Open: ["Choose", "Open", "Lost", "Won"],
      Currency: ["Choose", "Dollar", "Euro", "Pound", "Rupee"],
      Period: ["Choose", "Days", "Month"],
      tags: ["Devops Design", "MargrateDesign", "UI for Chat", "Web Chat"],
      tags3: ["Collab, Rated"],
      Source: ["Select", "Google", "Social Media"],
      Priority: ["Select", "Highy", "Low", "Medium"],
      Choose: ["Choose", "Sales", "Marketing", "Calls"],
      Status: ["Choose", "Open", "Lost", "Won"],
      SonSel: ["Darlee Robertson", "Sharon Roy", "Vaughan", "Jessica", "Carol Thomas"],
      Vaughan: ["Darlee Robertson", "Sharon Roy", "Vaughan", "Jessica", "Carol Thomas"],
      RoyModal: ["Darlee Robertson", "Sharon Roy", "Vaughan", "Jessica", "Carol Thomas"],
      GueSeldeals: [
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
      this.$router.push("/crm/deals-list");
    },
  },
};
</script>
