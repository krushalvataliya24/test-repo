<template>
  <!-- Add New Project -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
      <h4>Add New Project</h4>
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
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Project ID<span class="text-danger"> *</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Project Type <span class="text-danger">*</span></label
                >
                <vue-select
                  :options="ProjecttypeEdit"
                  id="projecttypeed"
                  placeholder="Choose"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Client <span class="text-danger">*</span></label
                >
                <vue-select :options="Client" id="clienttype" placeholder="Select" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Category <span class="text-danger">*</span></label
                >
                <vue-select :options="Category" id="categorytype" placeholder="Select" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Project Timing <span class="text-danger">*</span></label
                >
                <vue-select :options="Timing" id="projecttime" placeholder="Select" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Price <span class="text-danger">*</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Amount <span class="text-danger">*</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Total <span class="text-danger">*</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Responsible Persons <span class="text-danger">*</span></label
                >
                <vue-select
                  :options="Responsible"
                  id="responsible"
                  placeholder="Darlee Robertson"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Team Leader <span class="text-danger">*</span></label
                >
                <vue-select
                  :options="GueSelteam"
                  id="gueselteam"
                  placeholder="Darlee Robertson"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Start Date <span class="text-danger">*</span></label
                >
                <div class="icon-form">
                  <date-picker
                    v-model="startdate"
                    class="form-control datetimepicker"
                    :editable="true"
                    :clearable="false"
                    :input-format="dateFormat"
                    value="29-02-2020"
                  />
                  <span class="form-icon"><i class="ti ti-calendar-event"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Due Date <span class="text-danger">*</span></label
                >
                <div class="icon-form">
                  <date-picker
                    v-model="startdateTwo"
                    class="form-control datetimepicker"
                    :editable="true"
                    :clearable="false"
                    :input-format="dateFormat"
                    value="29-02-2020"
                  />
                  <span class="form-icon"><i class="ti ti-calendar-event"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Priority</label>
                <vue-select :options="Priority" id="prioritygun" placeholder="Select" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Status</label>
                <vue-select :options="Status" id="inactive" placeholder="Select" />
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Description <span class="text-danger">*</span></label
                >
                <textarea class="form-control" rows="4"></textarea>
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
            data-bs-target="#create_project"
          >
            Create
          </button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add New Project -->

  <!-- Edit Project -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom">
      <h4>Edit Project</h4>
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
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Project ID<span class="text-danger"> *</span></label
                >
                <input class="form-control" type="text" value="12" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Project Type <span class="text-danger">*</span></label
                >
                <vue-select :options="Type" id="choosetype" placeholder="Meeting" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Client <span class="text-danger">*</span></label
                >
                <vue-select :options="NovaWave" id="novawave" placeholder="Select" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Category <span class="text-danger">*</span></label
                >
                <vue-select :options="LLC" id="llc" placeholder="Select" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Project Timing <span class="text-danger">*</span></label
                >
                <vue-select :options="Hourly" id="selecthour" placeholder="Select" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Price <span class="text-danger">*</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Amount <span class="text-danger">*</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Total <span class="text-danger">*</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Responsible Persons <span class="text-danger">*</span></label
                >
                <vue-select
                  :options="GueSelpro"
                  id="gueselpro"
                  placeholder="Darlee Robertson"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Team Leader <span class="text-danger">*</span></label
                >
                <vue-select
                  :options="GueSelperson"
                  id="gueselperson"
                  placeholder="Sharon Roy"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Start Date <span class="text-danger">*</span></label
                >
                <div class="icon-form">
                  <date-picker
                    v-model="startdateTwo"
                    class="form-control datetimepicker"
                    :editable="true"
                    :clearable="false"
                    :input-format="dateFormat"
                    value="29-02-2020"
                  />
                  <span class="form-icon"><i class="ti ti-calendar-event"></i></span>
                </div>
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
                    class="form-control datetimepicker"
                    :editable="true"
                    :clearable="false"
                    :input-format="dateFormat"
                    value="29-02-2020"
                  />
                  <span class="form-icon"><i class="ti ti-calendar-event"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Priority</label>
                <vue-select :options="Priority" id="lowmedium" placeholder="Select" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Status</label>
                <vue-select :options="Status" id="lowactive" placeholder="Select" />
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Description <span class="text-danger">*</span></label
                >
                <textarea class="form-control" rows="4"></textarea>
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
  <!-- /Edit Project -->

  <!-- Delete Project -->
  <div class="modal fade" id="delete_project" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Project?</h4>
            <p class="mb-0">
              Are you sure you want to remove <br />
              project you selected.
            </p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link
                to="/crm/projects-list"
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
  <!-- /Delete Project -->

  <!-- Create Project -->
  <div class="modal custom-modal fade" id="create_project" role="dialog">
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
            <h3>Project Created Successfully!!!</h3>
            <p>View the details of project, created</p>
            <div class="col-lg-12 text-center modal-btn">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <router-link to="/crm/projects-list" class="btn btn-primary"
                >View Details</router-link
              >
            </div>
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
import { ref } from "vue";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
const currentDateTwo = ref(new Date());
const currentDateThree = ref(new Date());
export default {
  data() {
    return {
      startdate: currentDate,
      startdateOne: currentDateOne,
      startdateTwo: currentDateTwo,
      startdateThree: currentDateThree,
      dateFormat: "dd-MM-yyyy",
      ProjecttypeEdit: ["Choose", "Mobile App", "Meeting"],
      Client: ["Select", "NovaWave LLC", "SilverHawk", "HarborView"],
      Category: ["Select", "HarborView", "LLC"],
      Timing: [
        "Select",
        "Hourly",
        "Weekly",
        "Monthly",
        "Less than 1 Month",
        "Less than 3 Months",
      ],
      Priority: ["Select", "High", "Low", "Medium"],
      Status: ["Select", "Active", "Inactive"],
      Type: ["Choose", "Mobile App", "Meeting"],
      NovaWave: ["Select", "NovaWave LLC", "SilverHawk", "HarborView"],
      LLC: ["Select", "HarborView", "LLC"],
      Hourly: [
        "Select",
        "Hourly",
        "Weekly",
        "Monthly",
        "Less than 1 Month",
        "Less than 3 Months",
      ],
      Responsible: [
        "Darlee Robertson",
        "Sharon Roy",
        "Vaughan",
        "Jessica",
        "Carol Thomas",
      ],
      GueSelpro: ["Darlee Robertson", "Sharon Roy", "Vaughan", "Jessica", "Carol Thomas"],
      GueSelperson: [
        "Darlee Robertson",
        "Sharon Roy",
        "Vaughan",
        "Jessica",
        "Carol Thomas",
      ],
      GueSelteam: [
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
      this.$router.push("/crm/project-list");
    },
  },
};
</script>
