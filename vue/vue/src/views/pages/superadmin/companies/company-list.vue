<template>
  <layouts-header></layouts-header>
  <layouts-sidebar></layouts-sidebar>
  <!-- Page Wrapper -->
  <div class="page-wrapper">
    <div class="content">
      <!-- Breadcrumb -->
      <page-header :title="title" />
      <!-- /Breadcrumb -->

      <div class="card">
        <div class="card-header">
          <!-- Search -->
          <div class="row align-items-center">
            <div class="col-sm-4">
              <div class="icon-form mb-3 mb-sm-0">
                <span class="form-icon"><i class="ti ti-search"></i></span>
                <input type="text" class="form-control" placeholder="Search Companies" />
              </div>
            </div>
            <div class="col-sm-8">
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
                          ><i class="ti ti-file-type-pdf text-danger me-1"></i>Export as
                          PDF</a
                        >
                      </li>
                      <li>
                        <a href="javascript:void(0);" class="dropdown-item"
                          ><i class="ti ti-file-type-xls text-green me-1"></i>Export as
                          Excel
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <a
                  href="javascript:void(0);"
                  class="btn btn-primary"
                  data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvas_add"
                  ><i class="ti ti-square-rounded-plus me-2"></i>Add Company</a
                >
              </div>
            </div>
          </div>
          <!-- /Search -->
        </div>
        <div class="card-body">
          <div
            class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-4"
          >
            <div class="d-flex align-items-center flex-wrap row-gap-2">
              <div class="dropdown me-2">
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
                        <i class="ti ti-circle-chevron-right me-1"></i>Recently Viewed
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="dropdown-item">
                        <i class="ti ti-circle-chevron-right me-1"></i>Recently Added
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="icon-form">
                <span class="form-icon"><i class="ti ti-calendar"></i></span>
                <input type="text" class="form-control bookingrange" placeholder="" />
              </div>
            </div>
            <div class="d-flex align-items-center flex-wrap row-gap-2">
              <div class="dropdown me-2">
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
                    Please drag and drop your column to reorder your table and enable see
                    option as you want.
                  </p>
                  <div class="border-top pt-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <p class="mb-0 d-flex align-items-center">
                        <i class="ti ti-grip-vertical me-2"></i>Name
                      </p>
                      <div class="status-toggle">
                        <input type="checkbox" id="col-name" class="check" />
                        <label for="col-name" class="checktoggle"></label>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <p class="mb-0 d-flex align-items-center">
                        <i class="ti ti-grip-vertical me-2"></i>Phone
                      </p>
                      <div class="status-toggle">
                        <input type="checkbox" id="col-phone" class="check" />
                        <label for="col-phone" class="checktoggle"></label>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <p class="mb-0 d-flex align-items-center">
                        <i class="ti ti-grip-vertical me-2"></i>Email
                      </p>
                      <div class="status-toggle">
                        <input type="checkbox" id="col-email" class="check" />
                        <label for="col-email" class="checktoggle"></label>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <p class="mb-0 d-flex align-items-center">
                        <i class="ti ti-grip-vertical me-2"></i>Tags
                      </p>
                      <div class="status-toggle">
                        <input type="checkbox" id="col-tag" class="check" />
                        <label for="col-tag" class="checktoggle"></label>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <p class="mb-0 d-flex align-items-center">
                        <i class="ti ti-grip-vertical me-2"></i>Location
                      </p>
                      <div class="status-toggle">
                        <input type="checkbox" id="col-loc" class="check" />
                        <label for="col-loc" class="checktoggle"></label>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <p class="mb-0 d-flex align-items-center">
                        <i class="ti ti-grip-vertical me-2"></i>Rating
                      </p>
                      <div class="status-toggle">
                        <input type="checkbox" id="col-rate" class="check" />
                        <label for="col-rate" class="checktoggle"></label>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <p class="mb-0 d-flex align-items-center">
                        <i class="ti ti-grip-vertical me-2"></i>Owner
                      </p>
                      <div class="status-toggle">
                        <input type="checkbox" id="col-owner" class="check" />
                        <label for="col-owner" class="checktoggle"></label>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
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
                    <div class="d-flex align-items-center justify-content-between mb-3">
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
              <div class="form-sorts dropdown">
                <a
                  href="javascript:void(0);"
                  data-bs-toggle="dropdown"
                  data-bs-auto-close="outside"
                  ><i class="ti ti-filter-share"></i>Filter</a
                >
                <div class="filter-dropdown-menu dropdown-menu dropdown-menu-md-end p-3">
                  <div class="filter-set-view">
                    <div class="filter-set-head">
                      <h4><i class="ti ti-filter-share"></i>Filter</h4>
                    </div>
                    <div class="accordion" id="accordionExample">
                      <div class="filter-set-content">
                        <div class="filter-set-content-head">
                          <a
                            href="#"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo"
                            aria-expanded="true"
                            aria-controls="collapseTwo"
                            >Country</a
                          >
                        </div>
                        <div
                          class="filter-set-contents accordion-collapse collapse show"
                          id="collapseTwo"
                          data-bs-parent="#accordionExample"
                        >
                          <div class="filter-content-list">
                            <div class="mb-2 icon-form">
                              <span class="form-icon"><i class="ti ti-search"></i></span>
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Search Country"
                              />
                            </div>
                            <ul>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    India
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    USA
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    France
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    United Kingdom
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    UAE
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    Italy
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    Japan
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    Germany
                                  </label>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="filter-set-content">
                        <div class="filter-set-content-head">
                          <a
                            href="#"
                            class="collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#owner"
                            aria-expanded="false"
                            aria-controls="owner"
                            >Owner</a
                          >
                        </div>
                        <div
                          class="filter-set-contents accordion-collapse collapse"
                          id="owner"
                          data-bs-parent="#accordionExample"
                        >
                          <div class="filter-content-list">
                            <div class="mb-2 icon-form">
                              <span class="form-icon"><i class="ti ti-search"></i></span>
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Search Owner"
                              />
                            </div>
                            <ul>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" checked />
                                    <span class="checkmarks"></span>
                                    Hendry
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    Guillory
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    Jami
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    Theresa
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    Espinosa
                                  </label>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="filter-set-content">
                        <div class="filter-set-content-head">
                          <a
                            href="#"
                            class="collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#Status"
                            aria-expanded="false"
                            aria-controls="Status"
                            >Status</a
                          >
                        </div>
                        <div
                          class="filter-set-contents accordion-collapse collapse"
                          id="Status"
                          data-bs-parent="#accordionExample"
                        >
                          <div class="filter-content-list">
                            <ul>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" checked />
                                    <span class="checkmarks"></span>
                                    Active
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    Inactive
                                  </label>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="filter-set-content">
                        <div class="filter-set-content-head">
                          <a
                            href="#"
                            class="collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseOne"
                            aria-expanded="false"
                            aria-controls="collapseOne"
                            >Rating</a
                          >
                        </div>
                        <div
                          class="filter-set-contents accordion-collapse collapse"
                          id="collapseOne"
                          data-bs-parent="#accordionExample"
                        >
                          <div class="filter-content-list">
                            <ul>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" checked />
                                    <span class="checkmarks"></span>
                                    <span class="rating">
                                      <i class="fa fa-star filled"></i>
                                      <i class="fa fa-star filled"></i>
                                      <i class="fa fa-star filled"></i>
                                      <i class="fa fa-star filled"></i>
                                      <i class="fa fa-star filled"></i>
                                      <span>5.0</span>
                                    </span>
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    <span class="rating">
                                      <i class="fa fa-star filled"></i>
                                      <i class="fa fa-star filled"></i>
                                      <i class="fa fa-star filled"></i>
                                      <i class="fa fa-star filled"></i>
                                      <i class="fa fa-star"></i>
                                      <span>4.0</span>
                                    </span>
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    <span class="rating">
                                      <i class="fa fa-star filled"></i>
                                      <i class="fa fa-star filled"></i>
                                      <i class="fa fa-star filled"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <span>3.0</span>
                                    </span>
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    <span class="rating">
                                      <i class="fa fa-star filled"></i>
                                      <i class="fa fa-star filled"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <span>2.0</span>
                                    </span>
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    <span class="rating">
                                      <i class="fa fa-star filled"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <span>1.0</span>
                                    </span>
                                  </label>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="filter-set-content">
                        <div class="filter-set-content-head">
                          <a
                            href="#"
                            class="collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseThree"
                            aria-expanded="false"
                            aria-controls="collapseThree"
                            >Tags</a
                          >
                        </div>
                        <div
                          class="filter-set-contents accordion-collapse collapse"
                          id="collapseThree"
                          data-bs-parent="#accordionExample"
                        >
                          <div class="filter-content-list">
                            <ul>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" checked />
                                    <span class="checkmarks"></span>
                                    Promotion
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    Rated
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    Rejected
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    Collab
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    Calls
                                  </label>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="filter-reset-btns">
                      <div class="row">
                        <div class="col-6">
                          <a href="#" class="btn btn-light">Reset</a>
                        </div>
                        <div class="col-6">
                          <router-link to="/super-admin/company" class="btn btn-primary"
                            >Filter</router-link
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="table-responsive custom-table">
            <a-table
              class="table datatable thead-light"
              :columns="columns"
              :data-source="data"
              :row-selection="rowSelection"
            >
              <template #bodyCell="{ column, record }">
                <template v-if="column.key === 'Star'">
                  <div class="set-star rating-select"><i class="fa fa-star"></i></div>
                </template>
                <template v-if="column.key === 'CompanyName'">
                  <div class="d-flex align-items-center">
                    <a
                      href="javascript:void(0);"
                      class="avatar avatar-sm border rounded p-1 me-2"
                    >
                      <img
                        class="w-auto h-auto"
                        :src="require(`@/assets/img/icons/${record.Image}`)"
                        alt="User Image"
                      />
                    </a>
                    <a href="javascript:void(0);" class="d-flex flex-column fw-medium">{{
                      record.CompanyName
                    }}</a>
                  </div>
                </template>
                <template v-if="column.key === 'Plan'">
                  <div class="d-flex align-items-center justify-content-between">
                    <span>{{ record.Plan }}</span>
                    <a
                      href="javascript:void(0);"
                      class="badge bg-green badge-lg text-white ms-3"
                      data-bs-toggle="offcanvas"
                      data-bs-target="#upgrade_plan"
                      >Upgrade</a
                    >
                  </div>
                </template>
                <template v-if="column.key === 'Status'">
                  <span class="badge badge-pill badge-status bg-success">Active</span>
                </template>
                <template v-if="column.key === 'action'">
                  <div class="dropdown table-action">
                    <a
                      href="#"
                      class="action-icon"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <i class="fa fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvas_edit"
                      >
                        <i class="ti ti-edit text-blue"></i>Edit
                      </a>
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#delete_company"
                      >
                        <i class="ti ti-trash text-danger"></i>Delete
                      </a>
                    </div>
                  </div>
                </template>
              </template>
            </a-table>
          </div>
        </div>
      </div>
    </div>

    <div
      class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3"
    >
      <p class="mb-0">2014-2025 &copy; SmartHR.</p>
      <p>
        Designed &amp; Developed By
        <a href="javascript:void(0);" class="text-primary">Dreams</a>
      </p>
    </div>
  </div>
  <!-- /Page Wrapper -->
  <companies-modal></companies-modal>
</template>
<script>
const columns = [
  {
    title: "",
    dataIndex: "Star",
    key: "Star",
    sorter: false,
  },
  {
    title: "Company Name",
    dataIndex: "CompanyName",
    key: "CompanyName",
    sorter: {
      compare: (a, b) => {
        a = a.CompanyName.toLowerCase();
        b = b.CompanyName.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Email",
    dataIndex: "Email",
    sorter: {
      compare: (a, b) => {
        a = a.Email.toLowerCase();
        b = b.Email.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Accoun tURL",
    dataIndex: "AccountURL",
    key: "AccountURL",
    sorter: {
      compare: (a, b) => {
        a = a.AccountURL.toLowerCase();
        b = b.AccountURL.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Plan",
    dataIndex: "Plan",
    key: "Plan",
    sorter: {
      compare: (a, b) => {
        a = a.Plan.toLowerCase();
        b = b.Plan.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "CreatedDate",
    dataIndex: "CreatedDate",
    sorter: {
      compare: (a, b) => {
        a = a.CreatedDate.toLowerCase();
        b = b.CreatedDate.toLowerCase();
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
    title: "",
    key: "action",
    sorter: true,
  },
];
const data = [
  {
    CompanyName: "BlueSky Industries",
    Email: "michael@example.com",
    AccountURL: "bwi.example.com",
    Plan: "Advanced (Monthly)",
    CreatedDate: "12 Sep 2024",
    Image: "company-icon-01.svg",
    Status: "Active",
  },
  {
    CompanyName: "Stellar Dynamics",
    Email: "sophie@example.com",
    AccountURL: "sd.example.com",
    Plan: "Basic (Yearly)",
    CreatedDate: "24 Oct 2024",
    Image: "company-icon-02.svg",
    Status: "Active",
  },
  {
    CompanyName: "Silver Hawk",
    Email: "cameron@example.com",
    AccountURL: "qn.example.com",
    Plan: "Advanced (Monthly)",
    CreatedDate: "18 Feb 2024",
    Image: "company-icon-03.svg",
    Status: "Active",
  },
  {
    CompanyName: "Summit  Peak",
    Email: "doris@example.com",
    AccountURL: "eve.example.com",
    Plan: "Advanced (Monthly)",
    CreatedDate: "17 Oct 2024",
    Image: "company-icon-04.svg",
    Status: "Active",
  },
  {
    CompanyName: "RiverStone Ventur",
    Email: "thomas@example.com",
    AccountURL: "at.example.com",
    Plan: "Enterprise (Monthly)",
    CreatedDate: "20 Jul 2024",
    Image: "company-icon-05.svg",
    Status: "Active",
  },
  {
    CompanyName: "Bright Bridge Grp",
    Email: "kathleen@example.com",
    AccountURL: "bsv.example.com",
    Plan: "Advanced (Monthly)",
    CreatedDate: "10 Apr 2024",
    Image: "company-icon-06.svg",
    Status: "Active",
  },
  {
    CompanyName: "CoastalStar Co.",
    Email: "bruce@example.com",
    AccountURL: "tfe.example.com",
    Plan: "Enterprise (Yearly)",
    CreatedDate: "29 Aug 2024",
    Image: "company-icon-07.svg",
    Status: "Active",
  },
  {
    CompanyName: "HarborView",
    Email: "estelle@example.com",
    AccountURL: "upd.example.com",
    Plan: "Basic (Monthly)",
    CreatedDate: "22 Feb 2024",
    Image: "company-icon-08.svg",
    Status: "Inactive",
  },
  {
    CompanyName: "Golden Gate Ltd<",
    Email: "stephen@example.com",
    AccountURL: "nn.example.com",
    Plan: "Basic (Yearly)",
    CreatedDate: "03 Nov 2024",
    Image: "company-icon-09.svg",
    Status: "Active",
  },
  {
    CompanyName: "Redwood Inc",
    Email: "angela@example.com",
    AccountURL: "ed.example.com",
    Plan: "Advanced (Monthly)",
    CreatedDate: "17 Dec 2024",
    Image: "company-icon-10.svg",
    Status: "Active",
  },
];
const rowSelection = {
  onChange: () => {},
  onSelect: () => {},
  onSelectAll: () => {},
};
import "daterangepicker/daterangepicker.css";
import "daterangepicker/daterangepicker.js";
import { ref } from "vue";
import { onMounted } from "vue";
import moment from "moment";
import DateRangePicker from "daterangepicker";
import { totalChart, activeChart, inactiveChart, locationChart } from "./data";
export default {
  data() {
    return {
      totalChart: totalChart,
      activeChart: activeChart,
      inactiveChart: inactiveChart,
      locationChart: locationChart,
      title: "Companies",
      text: "Superadmin",
      text1: "Companies",
      data,
      columns,
      rowSelection,
    };
  },
  methods: {
    toggleHeader() {
      document.getElementById("collapse-header").classList.toggle("active");
      document.body.classList.toggle("header-collapse");
    },
  },
  setup() {
    const dateRangeInput = ref(null);

    // Move the function declaration outside of the onMounted callback
    function booking_range(start, end) {
      return start.format("M/D/YYYY") + " - " + end.format("M/D/YYYY");
    }

    onMounted(() => {
      if (dateRangeInput.value) {
        const start = moment().subtract(6, "days");
        const end = moment();

        new DateRangePicker(
          dateRangeInput.value,
          {
            startDate: start,
            endDate: end,
            ranges: {
              Today: [moment(), moment()],
              Yesterday: [moment().subtract(1, "days"), moment().subtract(1, "days")],
              "Last 7 Days": [moment().subtract(6, "days"), moment()],
              "Last 30 Days": [moment().subtract(29, "days"), moment()],
              "This Month": [moment().startOf("month"), moment().endOf("month")],
              "Last Month": [
                moment().subtract(1, "month").startOf("month"),
                moment().subtract(1, "month").endOf("month"),
              ],
            },
          },
          booking_range
        );

        booking_range(start, end);
      }
    });

    return {
      dateRangeInput,
    };
  },
};
</script>
