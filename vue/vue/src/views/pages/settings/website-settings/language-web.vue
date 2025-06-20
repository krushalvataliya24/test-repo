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
              <!-- Language Web -->
              <div class="card">
                <div class="card-header">
                  <div>
                    <div class="mb-4">
                      <h4 class="fs-20">Language</h4>
                    </div>
                    <div class="row gy-3">
                      <div class="col-xl-5 col-md-3 col-lg-5">
                        <div class="">
                          <div class="d-flex align-items-center">
                            <div class="lang-flag me-2">
                              <a href="javascript:void(0);">
                                <img
                                  class="avatar-img"
                                  src="@/assets/img/icons/flag-02.svg"
                                  alt="Flag"
                                /><span>Arabic</span>
                              </a>
                            </div>
                            <ul class="lang-direct d-flex align-items-center">
                              <li>
                                <a href="javascript:void(0);" class="active">LTR</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);">RTL</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-7 col-md-9 col-lg-12">
                        <div
                          class="d-flex align-items-center flex-wrap row-gap-2 justify-content-sm-end"
                        >
                          <div class="dropdown me-2">
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
                          <router-link
                            to="/website-settings/language"
                            class="btn btn-primary"
                            ><i class="ti ti-arrow-narrow-left me-2"></i>Back to
                            Translation</router-link
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
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
                              <i class="ti ti-grip-vertical me-2"></i>Medium
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
                              <i class="ti ti-grip-vertical me-2"></i>File
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
                              <i class="ti ti-grip-vertical me-2"></i>Total
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

                  <!-- Language List -->
                  <div class="table-responsive custom-table">
                    <a-table
                      class="table"
                      :columns="columns"
                      :data-source="data"
                      :row-selection="rowSelection"
                    >
                      <template #bodyCell="{ column, record }">
                        <template v-if="column.key === 'Star'">
                          <div class="sorting_1">
                            <div class="set-star rating-select">
                              <i class="fa fa-star"></i>
                            </div>
                          </div>
                        </template>
                        <template v-else-if="column.key === 'File'"
                          ><span class="black-text">{{ record.File }}</span></template
                        >
                        <template v-else-if="column.key === 'Progress'">
                          <div class="pipeline-progress d-flex align-items-center">
                            <div class="progress">
                              <div :class="record.Class" role="progressbar"></div>
                            </div>
                            <span>{{ record.Progress }}</span>
                          </div>
                        </template>
                        <template v-else-if="column.key === 'action'">
                          <a
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#add_translate"
                            ><i class="ti ti-edit text-black"></i
                          ></a>
                        </template>
                      </template>
                    </a-table>
                  </div>
                  <!-- /Language List -->
                </div>
              </div>
              <!-- /Language Web -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <language-web-modal></language-web-modal>
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
    title: "Medium",
    dataIndex: "Medium",
    key: "Medium",
    sorter: {
      compare: (a, b) => {
        a = a.Medium.toLowerCase();
        b = b.Medium.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "File",
    dataIndex: "File",
    key: "File",
    sorter: {
      compare: (a, b) => {
        a = a.File.toLowerCase();
        b = b.File.toLowerCase();
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
    title: "Action",
    key: "action",
    sorter: true,
  },
];
const data = [
  {
    key: 1,
    Medium: "Web",
    File: "Inventory",
    Total: "3481",
    Done: "2861",
    Progress: "80%",
    Class: "progress-bar progress-bar-warning",
  },
  {
    key: 2,
    Medium: "Web",
    File: "Expense",
    Total: "4815",
    Done: "4815",
    Progress: "100%",
    Class: "progress-bar progress-bar-success",
  },
  {
    key: 3,
    Medium: "Web",
    File: "Product",
    Total: "2590",
    Done: "250",
    Progress: "5%",
    Class: "progress-bar progress-bar-danger",
  },
  {
    key: 4,
    Medium: "Web",
    File: "Settings",
    Total: "1892",
    Done: "387",
    Progress: "40%",
    Class: "progress-bar progress-bar-info",
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
