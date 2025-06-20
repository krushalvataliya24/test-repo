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
            <other-sidebar></other-sidebar>
            <div class="col-xl-9 col-lg-12">
              <!-- Settings Info -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="fs-20">Ban IP Address</h4>
                    <a
                      href="javascript:void(0)"
                      class="btn btn-icon btn-sm border"
                      data-bs-toggle="modal"
                      data-bs-target="#add_ip"
                      ><i class="ti ti-plus"></i
                    ></a>
                  </div>
                  <div class="row">
                    <!-- Ban Ip Box -->
                    <div class="col-xxl-4 col-sm-6">
                      <div
                        class="border rounded d-flex align-items-center justify-content-between mb-4 p-3"
                      >
                        <div class="d-flex align-items-center">
                          <a
                            href="javascript:void(0);"
                            class="me-2 text-default"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            data-bs-original-title="Temporarily block to protect user accounts from internet fraudsters."
                            ><i class="ti ti-info-circle-filled"></i
                          ></a>
                          <p>198.120.16.01</p>
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
                              data-bs-target="#edit_ip"
                              ><i class="fa-solid fa-pencil text-blue"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_ip"
                              ><i class="fa-regular fa-trash-can text-danger"></i>
                              Delete</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /Ban Ip Box -->
                    <!-- Ban Ip Box -->
                    <div class="col-xxl-4 col-sm-6">
                      <div
                        class="border rounded d-flex align-items-center justify-content-between mb-4 p-3"
                      >
                        <div class="d-flex align-items-center">
                          <a
                            href="javascript:void(0);"
                            class="me-2 text-default"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            data-bs-original-title="Temporarily block to protect user accounts from internet fraudsters."
                            ><i class="ti ti-info-circle-filled"></i
                          ></a>
                          <p>198.120.23.56</p>
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
                              data-bs-target="#edit_ip"
                              ><i class="fa-solid fa-pencil text-blue"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_ip"
                              ><i class="fa-regular fa-trash-can text-danger"></i>
                              Delete</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /Ban Ip Box -->
                    <!-- Ban Ip Box -->
                    <div class="col-xxl-4 col-sm-6">
                      <div
                        class="border rounded d-flex align-items-center justify-content-between mb-4 p-3"
                      >
                        <div class="d-flex align-items-center">
                          <a
                            href="javascript:void(0);"
                            class="me-2 text-default"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            data-bs-original-title="Temporarily block to protect user accounts from internet fraudsters."
                            ><i class="ti ti-info-circle-filled"></i
                          ></a>
                          <p>198.132.57.12</p>
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
                              data-bs-target="#edit_ip"
                              ><i class="fa-solid fa-pencil text-blue"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_ip"
                              ><i class="fa-regular fa-trash-can text-danger"></i>
                              Delete</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /Ban Ip Box -->
                    <!-- Ban Ip Box -->
                    <div class="col-xxl-4 col-sm-6">
                      <div
                        class="border rounded d-flex align-items-center justify-content-between mb-4 p-3"
                      >
                        <div class="d-flex align-items-center">
                          <a
                            href="javascript:void(0);"
                            class="me-2 text-default"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            data-bs-original-title="Temporarily block to protect user accounts from internet fraudsters."
                            ><i class="ti ti-info-circle-filled"></i
                          ></a>
                          <p>198.120.32.01</p>
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
                              data-bs-target="#edit_ip"
                              ><i class="fa-solid fa-pencil text-blue"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_ip"
                              ><i class="fa-regular fa-trash-can text-danger"></i>
                              Delete</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /Ban Ip Box -->
                    <!-- Ban Ip Box -->
                    <div class="col-xxl-4 col-sm-6">
                      <div
                        class="border rounded d-flex align-items-center justify-content-between mb-4 p-3"
                      >
                        <div class="d-flex align-items-center">
                          <a
                            href="javascript:void(0);"
                            class="me-2 text-default"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            data-bs-original-title="Temporarily block to protect user accounts from internet fraudsters."
                            ><i class="ti ti-info-circle-filled"></i
                          ></a>
                          <p>198.120.32.25</p>
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
                              data-bs-target="#edit_ip"
                              ><i class="fa-solid fa-pencil text-blue"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_ip"
                              ><i class="fa-regular fa-trash-can text-danger"></i>
                              Delete</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /Ban Ip Box -->
                  </div>
                  <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-light me-2">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                </div>
              </div>
              <!-- /Settings Info -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <banip-modal></banip-modal>
</template>
<script>
export default {
  data() {
    return {
      title: "Settings",
    };
  },
};
</script>
