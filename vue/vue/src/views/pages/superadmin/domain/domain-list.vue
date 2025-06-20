<script>
import "daterangepicker/daterangepicker.css";
import "daterangepicker/daterangepicker.js";
import { ref } from "vue";
import { onMounted } from "vue";
import moment from "moment";
import DateRangePicker from "daterangepicker";

export default {
  data() {
    return {
      title: "Domain",
      text: "Superadmin",
      text1: "Domain List",
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
                <input type="text" class="form-control" placeholder="Search" />
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
                <input
                  type="text"
                  class="form-control bookingrange"
                  ref="dateRangeInput"
                  placeholder=""
                />
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
                        <i class="ti ti-grip-vertical me-2"></i>Domain Url
                      </p>
                      <div class="status-toggle">
                        <input type="checkbox" id="col-phone" class="check" />
                        <label for="col-phone" class="checktoggle"></label>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <p class="mb-0 d-flex align-items-center">
                        <i class="ti ti-grip-vertical me-2"></i>Plan
                      </p>
                      <div class="status-toggle">
                        <input type="checkbox" id="col-email" class="check" />
                        <label for="col-email" class="checktoggle"></label>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <p class="mb-0 d-flex align-items-center">
                        <i class="ti ti-grip-vertical me-2"></i>Status
                      </p>
                      <div class="status-toggle">
                        <input type="checkbox" id="col-tag" class="check" />
                        <label for="col-tag" class="checktoggle"></label>
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
                                    Approved
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    Pending
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
                            >Plan</a
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
                                    Enterprise
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    Advanced
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    Basic
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
                          <router-link to="/super-admin/domain" class="btn btn-primary"
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
          <div class="custom-datatable-filter table-responsive">
            <domain-table></domain-table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Page Wrapper -->

  <domain-modal></domain-modal>
</template>
