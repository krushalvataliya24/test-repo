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
            <website-sidebar></website-sidebar>
            <div class="col-xl-9 col-lg-12">
              <!-- Custom Fields -->
              <div class="card">
                <div class="card-body">
                  <h4 class="fw-semibold mb-3">Language</h4>
                  <!-- Search -->
                  <div class="row">
                    <div class="col-xl-3 col-md-3 col-lg-5">
                      <div class="mb-3 icon-form">
                        <span class="form-icon"><i class="ti ti-search"></i></span>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Search Language"
                        />
                      </div>
                    </div>
                    <div class="col-xl-9 col-md-9 col-lg-12">
                      <div
                        class="d-flex align-items-center flex-wrap justify-content-sm-end"
                      >
                        <div class="dropdown me-2 mb-3">
                          <a
                            href="javascript:void(0);"
                            class="dropdown-toggle"
                            data-bs-toggle="dropdown"
                            ><i class="ti ti-package-export me-2"></i>Export</a
                          >
                          <div class="dropdown-menu dropdown-menu-end">
                            <ul>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item"
                                  ><i class="ti ti-file-type-pdf text-danger me-1"></i
                                  >Export as PDF</a
                                >
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item"
                                  ><i class="ti ti-file-type-xls text-green me-1"></i
                                  >Export as Excel
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <a
                          href="javascript:void(0);"
                          class="btn btn-primary me-2 mb-3"
                          data-bs-toggle="modal"
                          data-bs-target="#import_sample"
                          ><i class="ti ti-download me-2"></i>Import Sample</a
                        >
                        <a
                          href="javascript:void(0);"
                          class="btn btn-primary mb-3"
                          data-bs-toggle="modal"
                          data-bs-target="#add_translation"
                          ><i class="ti ti-square-rounded-plus me-2"></i>Add
                          Translation</a
                        >
                      </div>
                    </div>
                  </div>
                  <!-- /Search -->

                  <!-- Filter -->
                  <div
                    class="d-flex align-items-center justify-content-between flex-wrap mb-2"
                  >
                    <div class="dropdown mb-3">
                      <a
                        href="javascript:void(0);"
                        class="dropdown-toggle"
                        data-bs-toggle="dropdown"
                        ><i class="ti ti-sort-ascending-2 me-2"></i>Sort
                      </a>
                      <div class="dropdown-menu dropdown-menu-start">
                        <ul>
                          <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                              <i class="ti ti-circle-chevron-right me-1"></i>Ascending
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                              <i class="ti ti-circle-chevron-right me-1"></i>Descending
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                              <i class="ti ti-circle-chevron-right me-1"></i>Recently
                              Viewed
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                              <i class="ti ti-circle-chevron-right me-1"></i>Recently
                              Added
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="dropdown mb-3">
                      <a
                        href="javascript:void(0);"
                        class="btn bg-soft-purple text-purple"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside"
                        ><i class="ti ti-columns-3 me-2"></i>Manage Columns</a
                      >
                      <div class="dropdown-menu dropdown-menu-md-end dropdown-md p-3">
                        <h4 class="mb-2 fw-semibold">Want to manage datatables?</h4>
                        <p class="mb-3">
                          Please drag and drop your column to reorder your table and
                          enable see option as you want.
                        </p>
                        <div class="border-top pt-3">
                          <div
                            class="d-flex align-items-center justify-content-between mb-3"
                          >
                            <p class="mb-0 d-flex align-items-center">
                              <i class="ti ti-grip-vertical me-2"></i>Language
                            </p>
                            <div class="status-toggle">
                              <input type="checkbox" id="col-name" class="check" />
                              <label for="col-name" class="checktoggle"></label>
                            </div>
                          </div>
                          <div
                            class="d-flex align-items-center justify-content-between mb-3"
                          >
                            <p class="mb-0 d-flex align-items-center">
                              <i class="ti ti-grip-vertical me-2"></i>Code
                            </p>
                            <div class="status-toggle">
                              <input type="checkbox" id="col-phone" class="check" />
                              <label for="col-phone" class="checktoggle"></label>
                            </div>
                          </div>
                          <div
                            class="d-flex align-items-center justify-content-between mb-3"
                          >
                            <p class="mb-0 d-flex align-items-center">
                              <i class="ti ti-grip-vertical me-2"></i>RTL
                            </p>
                            <div class="status-toggle">
                              <input type="checkbox" id="col-email" class="check" />
                              <label for="col-email" class="checktoggle"></label>
                            </div>
                          </div>
                          <div
                            class="d-flex align-items-center justify-content-between mb-3"
                          >
                            <p class="mb-0 d-flex align-items-center">
                              <i class="ti ti-grip-vertical me-2"></i>Total
                            </p>
                            <div class="status-toggle">
                              <input type="checkbox" id="col-tag" class="check" />
                              <label for="col-tag" class="checktoggle"></label>
                            </div>
                          </div>
                          <div
                            class="d-flex align-items-center justify-content-between mb-3"
                          >
                            <p class="mb-0 d-flex align-items-center">
                              <i class="ti ti-grip-vertical me-2"></i>Done
                            </p>
                            <div class="status-toggle">
                              <input type="checkbox" id="col-loc" class="check" />
                              <label for="col-loc" class="checktoggle"></label>
                            </div>
                          </div>
                          <div
                            class="d-flex align-items-center justify-content-between mb-3"
                          >
                            <p class="mb-0 d-flex align-items-center">
                              <i class="ti ti-grip-vertical me-2"></i>Progress
                            </p>
                            <div class="status-toggle">
                              <input type="checkbox" id="col-rate" class="check" />
                              <label for="col-rate" class="checktoggle"></label>
                            </div>
                          </div>
                          <div
                            class="d-flex align-items-center justify-content-between mb-3"
                          >
                            <p class="mb-0 d-flex align-items-center">
                              <i class="ti ti-grip-vertical me-2"></i>Status
                            </p>
                            <div class="status-toggle">
                              <input type="checkbox" id="col-owner" class="check" />
                              <label for="col-owner" class="checktoggle"></label>
                            </div>
                          </div>
                          <div
                            class="d-flex align-items-center justify-content-between mb-3"
                          >
                            <p class="mb-0 d-flex align-items-center">
                              <i class="ti ti-grip-vertical me-2"></i>Contact
                            </p>
                            <div class="status-toggle">
                              <input
                                type="checkbox"
                                id="col-contact"
                                class="check"
                                checked=""
                              />
                              <label for="col-contact" class="checktoggle"></label>
                            </div>
                          </div>
                          <div
                            class="d-flex align-items-center justify-content-between mb-3"
                          >
                            <p class="mb-0 d-flex align-items-center">
                              <i class="ti ti-grip-vertical me-2"></i>Status
                            </p>
                            <div class="status-toggle">
                              <input type="checkbox" id="col-status" class="check" />
                              <label for="col-status" class="checktoggle"></label>
                            </div>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 d-flex align-items-center">
                              <i class="ti ti-grip-vertical me-2"></i>Action
                            </p>
                            <div class="status-toggle">
                              <input type="checkbox" id="col-action" class="check" />
                              <label for="col-action" class="checktoggle"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /Filter -->

                  <!-- Contact List -->
                  <div class="table-responsive custom-table">
                    <a-table
                      class="table dataTable no-footer"
                      :columns="columns"
                      :data-source="data"
                      :row-selection="rowSelection"
                    >
                      <template #bodyCell="{ column, record }">
                        <template v-if="column.key === 'Star'">
                          <div class="set-star rating-select">
                            <i class="fa fa-star"></i>
                          </div>
                        </template>
                        <template v-else-if="column.key === 'Language'">
                          <h2 class="d-flex align-items-center">
                            <a
                              href="javascript:void(0);"
                              class="avatar avatar-sm border me-2"
                              ><img
                                class="w-auto h-auto"
                                :src="require(`@/assets/img/icons/${record.Image}`)"
                                alt="User Image" /></a
                            ><a href="javascript:void(0);">{{ record.Language }}</a>
                          </h2>
                        </template>
                        <template v-else-if="column.key === 'RTL'">
                          <div class="status-toggle">
                            <input
                              type="checkbox"
                              :id="record.Id"
                              class="check"
                              undefined=""
                            /><label :for="record.For" class="checktoggle"
                              >/label&gt;</label
                            >
                          </div>
                        </template>
                        <template v-else-if="column.key === 'Progress'">
                          <div class="pipeline-progress d-flex align-items-center">
                            <div class="progress">
                              <div :class="record.Progressclass" role="progressbar"></div>
                            </div>
                            <span>{{ record.Progress }}</span>
                          </div>
                        </template>
                        <template v-else-if="column.key === 'Status'">
                          <span class="badge badge-pill badge-status bg-success">{{
                            record.Status
                          }}</span>
                        </template>
                        <template v-else-if="column.key === 'action'">
                          <div class="d-flex align-items-center">
                            <ul class="lang-type">
                              <li>
                                <router-link to="/website-settings/language-web"
                                  >Web</router-link
                                >
                              </li>

                              <li><a href="javascript:void(0);">App</a></li>
                              <li><a href="javascript:void(0);">Admin</a></li>
                            </ul>
                            <div class="dropdown table-action">
                              <a
                                href="#"
                                class="action-icon"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                ><i class="fa fa-ellipsis-v"></i
                              ></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="#"
                                  data-bs-toggle="modal"
                                  data-bs-target="#edit_translation"
                                  ><i class="ti ti-edit text-blue"></i> Edit</a
                                ><a
                                  class="dropdown-item"
                                  href="#"
                                  data-bs-toggle="modal"
                                  data-bs-target="#delete_translation"
                                  ><i class="ti ti-trash text-danger"></i> Delete</a
                                >
                              </div>
                            </div>
                          </div>
                        </template>
                      </template>
                    </a-table>
                  </div>
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <div class="datatable-length"></div>
                    </div>
                    <div class="col-md-6">
                      <div class="datatable-paginate"></div>
                    </div>
                  </div>
                  <!-- /Contact List -->
                </div>
              </div>
              <!-- /Custom Fields -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <language-settings-modal></language-settings-modal>
</template>
<script>
const columns = [
  {
    title: "",
    dataIndex: "",
    sorter: false,
  },
  {
    title: "",
    dataIndex: "",
    key: "Star",
    sorter: false,
  },
  {
    title: "Language",
    dataIndex: "Language",
    key: "Language",
    sorter: {
      compare: (a, b) => {
        a = a.Language.toLowerCase();
        b = b.Language.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Code",
    dataIndex: "Code",
    sorter: {
      compare: (a, b) => {
        a = a.Code.toLowerCase();
        b = b.Code.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "RTL",
    dataIndex: "RTL",
    key: "RTL",
    sorter: {
      compare: (a, b) => {
        a = a.RTL.toLowerCase();
        b = b.RTL.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Total",
    dataIndex: "Total",
    sorter: {
      compare: (a, b) => {
        a = a.Total.toLowerCase();
        b = b.Total.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Done",
    dataIndex: "Done",
    sorter: {
      compare: (a, b) => {
        a = a.Done.toLowerCase();
        b = b.Done.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Progress",
    dataIndex: "Progress",
    key: "Progress",
    sorter: {
      compare: (a, b) => {
        a = a.Progress.toLowerCase();
        b = b.Progress.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Status",
    dataIndex: "Status",
    key: "Status",
    sorter: {
      compare: (a, b) => {
        a = a.Status.toLowerCase();
        b = b.Status.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Action",
    key: "action",
    sorter: true,
  },
];
const data = [
  {
    key: 1,
    Language: "English",
    Image: "flag-01.svg",
    Code: "en",
    Total: "3481",
    Done: "2861",
    For: "English",
    Id: "English",
    Progress: "80%",
    Status: "Active",
    Statusclass: "badge badge-pill badge-status bg-success",
    Progressclass: "progress-bar progress-bar-warning",
  },
  {
    key: 2,
    Language: "Arabic",
    Image: "flag-02.svg",
    Code: "ar",
    Total: "4815",
    Done: "4815",
    For: "Arabic",
    Id: "Arabic",
    Progress: "100%",
    Status: "Active",
    Statusclass: "badge badge-pill badge-status bg-success",
    Progressclass: "progress-bar progress-bar-success",
  },
  {
    key: 3,
    Language: "Chinese",
    Image: "flag-01.svg",
    Code: "zh",
    Total: "2590",
    Done: "250",
    For: "Chinese",
    Id: "Chinese",
    Progress: "5%",
    Status: "Active",
    Statusclass: "badge badge-pill badge-status bg-success",
    Progressclass: "progress-bar progress-bar-danger",
  },
  {
    key: 4,
    Language: "Hindi",
    Image: "flag-01.svg",
    Code: "hi",
    Total: "1892",
    Done: "387",
    For: "Hindi",
    Id: "Hindi",
    Progress: "40%",
    Status: "Active",
    Statusclass: "badge badge-pill badge-status bg-success",
    Progressclass: "progress-bar progress-bar-info",
  },
];
const rowSelection = {
  onChange: () => {},
  onSelect: () => {},
  onSelectAll: () => {},
};
export default {
  data() {
    return {
      title: "Settings",
      data,
      columns,
      rowSelection,
    };
  },
};
</script>
