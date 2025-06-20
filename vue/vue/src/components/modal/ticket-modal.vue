<template>
  <!-- Add Tickets -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Add New Ticket</h5>
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
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label">
                Subject <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Assigned Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Created Date <span class="text-danger">*</span></label
              >
              <div class="cal-icon cal-icon-info">
                <date-picker
                  v-model="startdate"
                  placeholder="Select Date"
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
                >Due Date <span class="text-danger">*</span></label
              >
              <div class="cal-icon cal-icon-info">
                <date-picker
                  v-model="startdateOne"
                  placeholder="Created Date"
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
                >Assignee Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Priority <span class="text-danger">*</span></label
              >
              <vue-select :options="TickSel" id="ticksel" placeholder="Choose" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Status<span class="text-danger">*</span></label
              >
              <vue-select :options="ChooseSel" id="choosesel" placeholder="Choose" />
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <a href="#" class="btn btn-light me-2">Cancel</a>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add Tickets -->

  <!-- Edit Tickets -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Edit New Ticket</h5>
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
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label">
                Subject <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="Support for theme" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Assigned Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="Richard" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Created Date <span class="text-danger">*</span></label
              >
              <div class="cal-icon cal-icon-info">
                <date-picker
                  v-model="startdate"
                  placeholder="Select Date"
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
                >Due Date <span class="text-danger">*</span></label
              >
              <div class="cal-icon cal-icon-info">
                <date-picker
                  v-model="startdateOne"
                  placeholder="Created Date"
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
                >Assignee Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="Darlee Robertson" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Priority <span class="text-danger">*</span></label
              >
              <vue-select :options="EditLowsel" id="editlowsel" placeholder="Low" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Status<span class="text-danger">*</span></label
              >
              <vue-select :options="EditClosel" id="editclosel" placeholder="Closed" />
            </div>
          </div>
        </div>

        <div class="d-flex align-items-center justify-content-end">
          <a href="#" class="btn btn-light me-2">Cancel</a>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Edit Tickets -->

  <!-- Delete Tickets -->
  <div class="modal fade" id="delete_contact" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Tickets</h4>
            <p class="mb-0">Are you sure you want to remove it</p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link
                to="/support/tickets"
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
  <!-- /Delete Tickets -->
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
      TickSel: ["Choose", "Low", "Medium", "High"],
      ChooseSel: ["Choose", "Closed", "Open", "Open", "Pending", "Resolved"],
      EditLowsel: ["Low", "Medium", "High"],
      EditClosel: ["Closed", "Open", "Pending", "Resolved"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/support/tickets");
    },
  },
};
</script>
