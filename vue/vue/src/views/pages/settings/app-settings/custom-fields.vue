<template>
  <layouts-header></layouts-header>
  <layouts-sidebar></layouts-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- Page Header -->
          <page-header :title="title" />
          <!-- /Page Header -->

          <!-- Settings Menu -->
          <settings-tabs></settings-tabs>
          <!-- /Settings Menu -->

          <div class="row">
            <app-sidebar></app-sidebar>
            <div class="col-xl-9 col-lg-12">
              <!-- Custom Fields -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <h4>Custom Fields</h4>
                    <a
                      href="javascript:void(0)"
                      class="btn btn-icon btn-sm border btn-outline-light"
                      data-bs-toggle="modal"
                      data-bs-target="#add_fields"
                      ><i class="ti ti-plus"></i
                    ></a>
                  </div>
                  <form @submit.prevent="submitForm">
                    <!-- Expense -->
                    <div
                      class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3"
                    >
                      <div>
                        <h5 class="fw-semibold mb-1">Expense</h5>
                        <p>Shows the fields of Expense</p>
                      </div>
                      <div class="dropdown">
                        <a
                          href="#"
                          class="btn btn-icon btn-sm border btn-outline-light d-inline-flex align-items-center justify-content-center"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                          ><i class="fa fa-ellipsis-v"></i
                        ></a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a
                            class="dropdown-item d-flex align-items-center"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#edit_fields"
                            ><i class="fa-solid fa-pencil text-blue me-2"></i>Edit</a
                          >
                          <a
                            class="dropdown-item d-flex align-items-center"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_fields"
                            ><i class="fa-regular fa-trash-can text-danger me-2"></i
                            >Delete</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="border-bottom mb-3">
                      <div class="row">
                        <div class="col-md-4 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label">Label</label>
                            <input type="text" class="form-control" value="Name" />
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label">Type</label>
                            <input type="text" class="form-control" value="Text" />
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label">Default Value</label>
                            <input type="text" class="form-control" value="Name" />
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label">Required</label>
                            <input type="text" class="form-control" value="Required" />
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label">Status</label>
                            <input type="text" class="form-control" value="Active" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /Expense -->

                    <!-- Transaction -->
                    <div
                      class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3"
                    >
                      <div>
                        <h5 class="fw-semibold mb-1">Transaction</h5>
                        <p>Shows the fields of Transaction</p>
                      </div>
                      <div class="dropdown">
                        <a
                          href="#"
                          class="btn btn-icon btn-sm border btn-outline-light d-inline-flex align-items-center justify-content-center"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                          ><i class="fa fa-ellipsis-v"></i
                        ></a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a
                            class="dropdown-item d-flex align-items-center"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#edit_fields"
                            ><i class="fa-solid fa-pencil text-blue me-2"></i>Edit</a
                          >
                          <a
                            class="dropdown-item d-flex align-items-center"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_fields"
                            ><i class="fa-regular fa-trash-can text-danger me-2"></i
                            >Delete</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="mb-0">
                      <div class="row">
                        <div class="col-md-4 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label">Label</label>
                            <input type="text" class="form-control" value="Comment" />
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label">Type</label>
                            <input type="text" class="form-control" value="Textarea" />
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label">Default Value</label>
                            <input
                              type="text"
                              class="form-control"
                              value="Enter Comments"
                            />
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label">Required</label>
                            <input type="text" class="form-control" value="Required" />
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label">Status</label>
                            <input type="text" class="form-control" value="Active" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /Transaction -->

                    <div>
                      <a href="#" class="btn btn-light me-2">Cancel</a>
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /Custom Fields -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <custom-fields-modal></custom-fields-modal>
</template>
<script>
export default {
  data() {
    return {
      title: "Custom Fields",
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/app-settings/custom-fields");
    },
  },
};
</script>
