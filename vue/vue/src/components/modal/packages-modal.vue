<script>
export default {
  data() {
    return {
      PlanName: ["Select", "Advanced", "Basic", "Enterprise"],
      PlanType: ["Select", "Monthly", "Yearly"],
      PlanPosition: ["Select", "1", "2", "3"],
      PlanCurrency: ["Select", "USD", "EURO"],
      PlanFree: ["Select", "Fixed", "Percentage"],
      DiscountType: ["Select", "Fixed", "Percentage"],
      PackStatus: ["Select", "Active", "Inactive"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/super-admin/packages");
    },
  },
};
</script>

<template>
  <!-- Add Plan -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Add New Plan</h5>
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
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <div class="profile-upload">
                    <div class="profile-upload-img">
                      <span><i class="ti ti-photo"></i></span>
                      <img
                        src="@/assets/img/profiles/avatar-20.jpg"
                        alt="img"
                        class="preview1"
                      />
                      <button type="button" class="profile-remove">
                        <i class="ti ti-x"></i>
                      </button>
                    </div>
                    <div class="profile-upload-content">
                      <label class="profile-upload-btn">
                        <i class="ti ti-file-broken"></i> Upload File
                        <input type="file" class="input-img" />
                      </label>
                      <p>JPG, GIF or PNG. Max size of 800K</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Plan Name<span class="text-danger"> *</span></label
                  >
                  <vue-select :options="PlanName" id="planname" placeholder="Select" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Plan Type<span class="text-danger"> *</span></label
                  >
                  <vue-select :options="PlanType" id="plantype" placeholder="Select" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Plan Position<span class="text-danger"> *</span></label
                  >
                  <vue-select
                    :options="PlanPosition"
                    id="planposition"
                    placeholder="Select"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Plan Currency<span class="text-danger"> *</span></label
                  >
                  <vue-select
                    :options="PlanCurrency"
                    id="plancurrency"
                    placeholder="Select"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <div class="d-flex justify-content-between">
                    <label class="form-label"
                      >Plan Currency<span class="text-danger"> *</span></label
                    >
                    <span class="text-primary"
                      ><i class="fa-solid fa-circle-exclamation me-2"></i>Set 0 for
                      free</span
                    >
                  </div>
                  <vue-select :options="PlanFree" id="planfree" placeholder="Select" />
                </div>
              </div>
              <div class="col-md-3">
                <div class="mb-3">
                  <label class="form-label"
                    >Discount Type<span class="text-danger"> *</span></label
                  >
                  <vue-select
                    :options="DiscountType"
                    id="discounttype"
                    placeholder="Select"
                  />
                </div>
              </div>
              <div class="col-md-3">
                <div class="mb-3">
                  <label class="form-label"
                    >Discount<span class="text-danger"> *</span></label
                  >
                  <div class="pass-group">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mb-3">
                  <label class="form-label">Limitations Invoices</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mb-3">
                  <label class="form-label">Max Customers</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mb-3">
                  <label class="form-label">Product</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mb-3">
                  <label class="form-label">Supplier</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-lg-12">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h6>Plan Modules</h6>
                  <div class="form-check d-flex align-items-center">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Select All
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Employees
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Invoices
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Reports
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Contacts
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Clients
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Estimates
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Goals
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Deals
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Projects
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Payments
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      assets
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Leads
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Tickets
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Taxes
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Activities
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Pipelines
                    </label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 me-2 text-dark fw-medium">
                      Access Trial
                    </label>
                    <div class="form-check form-switch me-2">
                      <input
                        class="form-check-input me-2"
                        type="checkbox"
                        role="switch"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row align-items-center gx-3">
                <div class="col-md-4">
                  <div class="d-flex align-items-center mb-3">
                    <div class="flex-fill">
                      <label class="form-label">Trial Days</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="d-block align-items-center ms-3">
                    <label class="form-check-label mt-0 me-2 text-dark">
                      Is Recommended
                    </label>
                    <div class="form-check form-switch me-2">
                      <input
                        class="form-check-input me-2"
                        type="checkbox"
                        role="switch"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="mb-3">
                    <label class="form-label"
                      >Status<span class="text-danger"> *</span></label
                    >
                    <vue-select
                      :options="PackStatus"
                      id="packstatus"
                      placeholder="Select"
                    />
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
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add Plan -->

  <!-- Edit Plan -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Edit Plan</h5>
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
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <div class="profile-upload">
                    <div class="profile-upload-img">
                      <span><i class="ti ti-photo"></i></span>
                      <img
                        src="@/assets/img/profiles/avatar-20.jpg"
                        alt="img"
                        class="preview1"
                      />
                      <button type="button" class="profile-remove">
                        <i class="ti ti-x"></i>
                      </button>
                    </div>
                    <div class="profile-upload-content">
                      <label class="profile-upload-btn">
                        <i class="ti ti-file-broken"></i> Upload File
                        <input type="file" class="input-img" />
                      </label>
                      <p>JPG, GIF or PNG. Max size of 800K</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Plan Name<span class="text-danger"> *</span></label
                  >
                  <vue-select
                    :options="PlanName"
                    id="plannameone"
                    placeholder="Advanced"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Plan Type<span class="text-danger"> *</span></label
                  >
                  <vue-select
                    :options="PlanType"
                    id="plantypeOne"
                    placeholder="Monthky"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Plan Position<span class="text-danger"> *</span></label
                  >
                  <vue-select
                    :options="PlanPosition"
                    id="planpositionone"
                    placeholder="2"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label"
                    >Plan Currency<span class="text-danger"> *</span></label
                  >
                  <vue-select
                    :options="PlanCurrency"
                    id="plancurrencyone"
                    placeholder="Select"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <div class="d-flex justify-content-between">
                    <label class="form-label"
                      >Plan Currency<span class="text-danger"> *</span></label
                    >
                    <span class="text-primary"
                      ><i class="fa-solid fa-circle-exclamation me-2"></i>Set 0 for
                      free</span
                    >
                  </div>
                  <vue-select :options="PlanFree" id="planfreeone" placeholder="Select" />
                </div>
              </div>
              <div class="col-md-3">
                <div class="mb-3">
                  <label class="form-label"
                    >Discount Type<span class="text-danger"> *</span></label
                  >
                  <div class="pass-group">
                    <vue-select
                      :options="DiscountType"
                      id="discounttypeone"
                      placeholder="Select"
                    />
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="mb-3">
                  <label class="form-label"
                    >Discount<span class="text-danger"> *</span></label
                  >
                  <div class="pass-group">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mb-3">
                  <label class="form-label">Limitations Invoices</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mb-3">
                  <label class="form-label">Max Customers</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mb-3">
                  <label class="form-label">Product</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mb-3">
                  <label class="form-label">Supplier</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-lg-12">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h6>Plan Modules</h6>
                  <div class="form-check d-flex align-items-center">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Select All
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Employees
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Invoices
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Reports
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Contacts
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Clients
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Estimates
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Goals
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Deals
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Projects
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Payments
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      assets
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Leads
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Tickets
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Taxes
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Activities
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="form-check d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 text-dark fw-medium">
                      <input class="form-check-input" type="checkbox" />
                      Pipelines
                    </label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="d-flex align-items-center mb-3">
                    <label class="form-check-label mt-0 me-2 text-dark fw-medium">
                      Access Trial
                    </label>
                    <div class="form-check form-switch me-2">
                      <input
                        class="form-check-input me-2"
                        type="checkbox"
                        role="switch"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row align-items-center gx-3">
                <div class="col-md-4">
                  <div class="d-flex align-items-center mb-3">
                    <div class="flex-fill">
                      <label class="form-label">Trial Days</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="d-block align-items-center ms-3">
                    <label class="form-check-label mt-0 me-2 text-dark">
                      Is Recommended
                    </label>
                    <div class="form-check form-switch me-2">
                      <input
                        class="form-check-input me-2"
                        type="checkbox"
                        role="switch"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="mb-3">
                    <label class="form-label"
                      >Status<span class="text-danger"> *</span></label
                    >
                    <vue-select
                      :options="PackStatus"
                      id="packstatusone"
                      placeholder="Select"
                    />
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
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Edit Plan -->

  <!-- Delete Modal -->
  <div class="modal fade" id="delete_invoices" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Plan?</h4>
            <p class="mb-0">
              Are you sure you want to remove <br />
              company you selected.
            </p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link to="/super-admin/packages" class="btn btn-danger"
                >Yes, Delete it</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Delete Modal -->
</template>
