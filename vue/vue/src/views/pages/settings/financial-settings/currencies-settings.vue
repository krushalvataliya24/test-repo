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
            <financial-sidebar></financial-sidebar>
            <div class="col-xl-9 col-lg-12">
              <!-- Currencies -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4>Currencies</h4>
                    <a
                      href="javascript:void(0)"
                      class="btn btn-sm btn-icon border rounded"
                      data-bs-toggle="modal"
                      data-bs-target="#add_currency"
                      ><i class="ti ti-plus"></i
                    ></a>
                  </div>

                  <form @submit.prevent="submitForm">
                    <!-- Euro -->
                    <div
                      class="d-flex align-items-center justify-content-between flex-wrap border-bottom mb-3 pb-3 row-gap-2"
                    >
                      <div>
                        <h5 class="mb-1 fw-semibold">Euro</h5>
                        <p>Shows the details of Euro currency</p>
                      </div>
                      <div class="dropdown table-action">
                        <a
                          href="#"
                          class="action-icon bg-white"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                          ><i class="fa fa-ellipsis-v"></i
                        ></a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#edit_currency"
                            ><i class="fa-solid fa-pencil text-blue"></i> Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_currency"
                            ><i class="fa-regular fa-trash-can text-danger"></i> Delete</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="border-bottom mb-3">
                      <div class="row">
                        <div class="col-md-3 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label"> Currency Name </label>
                            <input type="text" class="form-control" value="Euro" />
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label"> Code </label>
                            <input type="text" class="form-control" value="EUR" />
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label"> Symbol </label>
                            <input type="text" class="form-control" value="€" />
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label"> Exchange Rate </label>
                            <input type="text" class="form-control" value="Default" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /Euro -->

                    <!-- England Pound -->
                    <div
                      class="d-flex align-items-center justify-content-between flex-wrap mb-3 pb-3 border-bottom row-gap-2"
                    >
                      <div>
                        <h5 class="fw-semibold mb-1">England Pound</h5>
                        <p>Shows the details of England Pound currency</p>
                      </div>
                      <div class="dropdown table-action">
                        <a
                          href="#"
                          class="action-icon bg-white"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                          ><i class="fa fa-ellipsis-v"></i
                        ></a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#edit_currency"
                            ><i class="fa-solid fa-pencil text-blue"></i> Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_currency"
                            ><i class="fa-regular fa-trash-can text-danger"></i> Delete</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="mb-3 border-bottom">
                      <div class="row">
                        <div class="col-md-3 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label"> Currency Name </label>
                            <input
                              type="text"
                              class="form-control"
                              value="England Pound"
                            />
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label"> Code </label>
                            <input type="text" class="form-control" value="GBP" />
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label"> Symbol </label>
                            <input type="text" class="form-control" value="€" />
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label"> Exchange Rate </label>
                            <input type="text" class="form-control" value="Default" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /England Pound -->

                    <!-- Indian Rupee -->
                    <div
                      class="d-flex align-items-center justify-content-between flex-wrap mb-3 pb-3 border-bottom row-gap-2"
                    >
                      <div>
                        <h5 class="fw-semibold mb-1">Indian Rupee</h5>
                        <p>Shows the details of Indian Rupee currency</p>
                      </div>
                      <div class="dropdown table-action">
                        <a
                          href="#"
                          class="action-icon bg-white"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                          ><i class="fa fa-ellipsis-v"></i
                        ></a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#edit_currency"
                            ><i class="fa-solid fa-pencil text-blue"></i> Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_currency"
                            ><i class="fa-regular fa-trash-can text-danger"></i> Delete</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="border-bottom mb-3">
                      <div class="row">
                        <div class="col-md-3 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label"> Currency Name </label>
                            <input
                              type="text"
                              class="form-control"
                              value="Indian Rupee"
                            />
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label"> Code </label>
                            <input type="text" class="form-control" value="INR" />
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label"> Symbol </label>
                            <input type="text" class="form-control" value="₹" />
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label"> Exchange Rate </label>
                            <input type="text" class="form-control" value="83.11" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /Indian Rupee -->

                    <!-- US Dollar -->
                    <div
                      class="d-flex align-items-center justify-content-between flex-wrap mb-3 pb-3 border-bottom row-gap-2"
                    >
                      <div>
                        <h5 class="fw-semibold mb-1">US Dollar</h5>
                        <p>Shows the details of US Dollar currency</p>
                      </div>
                      <div class="dropdown table-action">
                        <a
                          href="#"
                          class="action-icon bg-white"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                          ><i class="fa fa-ellipsis-v"></i
                        ></a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#edit_currency"
                            ><i class="fa-solid fa-pencil text-blue"></i> Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_currency"
                            ><i class="fa-regular fa-trash-can text-danger"></i> Delete</a
                          >
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="row">
                        <div class="col-md-3 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label"> Currency Name </label>
                            <input type="text" class="form-control" value="US Dollar" />
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label"> Code </label>
                            <input type="text" class="form-control" value="USD" />
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label"> Symbol </label>
                            <input type="text" class="form-control" value="$" />
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <div class="mb-3">
                            <label class="col-form-label"> Exchange Rate </label>
                            <input type="text" class="form-control" value="Default" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /US Dollar -->

                    <div class="d-flex align-items-center">
                      <a href="#" class="btn btn-light me-2">Cancel</a>
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /Currencies -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <currencies-modal></currencies-modal>
</template>
<script>
export default {
  data() {
    return {
      title: "Settings",
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/financial-settings/currencies");
    },
  },
};
</script>
