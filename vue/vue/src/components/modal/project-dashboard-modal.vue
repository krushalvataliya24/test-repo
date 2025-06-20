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
                <vue-select :options="Apptypesel" id="apptypesel" placeholder="Choose" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Client <span class="text-danger">*</span></label
                >
                <vue-select :options="Hawkel" id="hawkel" placeholder="Select" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Category <span class="text-danger">*</span></label
                >
                <vue-select :options="ViewSelect" id="viewselect" placeholder="" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Project Timing <span class="text-danger">*</span></label
                >
                <vue-select :options="HouMinSel" id="houminsel" placeholder="Select" />
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
                  :options="DashProSel"
                  id="dashprosel"
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
                  :options="TeamProSel"
                  id="teamprosel"
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
                    value="29-02-2020"
                    :input-format="dateFormat"
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
                    v-model="startdateOne"
                    class="form-control datetimepicker"
                    :editable="true"
                    :clearable="false"
                    value="29-02-2020"
                    :input-format="dateFormat"
                  />
                  <span class="form-icon"><i class="ti ti-calendar-event"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Priority</label>
                <vue-select
                  :options="ProDashSelMe"
                  id="prodashselme"
                  placeholder="Select"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Status</label>
                <vue-select
                  :options="ProActivelMe"
                  id="proactivelme"
                  placeholder="Select"
                />
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
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add New Project -->
</template>
<script>
import { ref } from "vue";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
export default {
  data() {
    return {
      startdate: currentDate,
      startdateOne: currentDateOne,
      dateFormat: "dd-MM-yyyy",
      ProActivelMe: ["Select", "Active", "Inactive"],
      ProDashSelMe: ["Select", "High", "Low", "Medium"],
      TeamProSel: [
        "Darlee Robertson",
        "Sharon Roy",
        "Vaughan",
        "Jessica",
        "Carol Thomas",
      ],
      DashProSel: [
        "Darlee Robertson",
        "Sharon Roy",
        "Vaughan",
        "Jessica",
        "Carol Thomas",
      ],
      ViewSelect: ["Select", "HarborView", "LLC"],
      Hawkel: ["Select", "NovaWave LLC", "SilverHawk", "HarborView"],
      Apptypesel: ["Choose", "Mobile App", "Meeting"],
      HouMinSel: ["Select", "Hourly", "Minutes"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/dashboard/project-dashboard");
    },
  },
};
</script>
