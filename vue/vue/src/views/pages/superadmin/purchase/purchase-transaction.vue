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
      title: "Purchase Transaction",
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
                        <i class="ti ti-grip-vertical me-2"></i>Invoice ID
                      </p>
                      <div class="status-toggle">
                        <input type="checkbox" id="col-name" class="check" />
                        <label for="col-name" class="checktoggle"></label>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <p class="mb-0 d-flex align-items-center">
                        <i class="ti ti-grip-vertical me-2"></i>Customer
                      </p>
                      <div class="status-toggle">
                        <input type="checkbox" id="col-phone" class="check" />
                        <label for="col-phone" class="checktoggle"></label>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <p class="mb-0 d-flex align-items-center">
                        <i class="ti ti-grip-vertical me-2"></i>Payment Method
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
                                    Paid
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    Unpaid
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
                            >Payment</a
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
                                    Payment Method
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    Paypal
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                    Debit Card
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
                          <router-link
                            to="/super-admin/purchase-transaction"
                            class="btn btn-primary"
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
            <purchase-table></purchase-table>
          </div>
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="datatable-length"></div>
            </div>
            <div class="col-md-6">
              <div class="datatable-paginate"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Page Wrapper -->

  <!-- Invoices -->
  <div class="modal fade" id="view_invoice">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-body p-5">
          <div class="row justify-content-between align-items-center mb-3">
            <div class="col-md-6">
              <div class="mb-4">
                <img src="@/assets/img/logo.svg" class="img-fluid" alt="logo" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="text-end mb-3">
                <h5 class="text-dark mb-1">Invoice</h5>
                <p class="mb-1 fw-normal">
                  <i class="ti ti-file-invoice me-1"></i>INV0287
                </p>
                <p class="mb-1 fw-normal">
                  <i class="ti ti-calendar me-1"></i>Issue date : 12 Sep 2024
                </p>
                <p class="fw-normal">
                  <i class="ti ti-calendar me-1"></i>Due date : 12 Oct 2024
                </p>
              </div>
            </div>
          </div>
          <div class="row mb-3 d-flex justify-content-between">
            <div class="col-md-7">
              <p class="text-dark mb-2 fw-medium fs-16">Invoice From :</p>
              <div>
                <p class="mb-1">Crms</p>
                <p class="mb-1">797 Hilltop Street, Springfield</p>
                <p class="mb-1">crms@example.com</p>
              </div>
            </div>
            <div class="col-md-5">
              <p class="text-dark mb-2 fw-medium fs-16 text-end">Invoice To :</p>
              <div>
                <p class="mb-1 text-end">NovaWave LLC</p>
                <p class="mb-1 text-end">
                  367 Hillcrest Lane, Irvine, California, United States
                </p>
                <p class="mb-1 text-end">michael@example.com</p>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <div class="table-responsive mb-3">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th>Plan</th>
                    <th class="text-end">Billing Cycle</th>
                    <th class="text-end">Created Date</th>
                    <th class="text-end">Expiring On</th>
                    <th class="text-end">Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Advanced (Monthly)</td>
                    <td class="text-end">30 Days</td>
                    <td class="text-end">12 Sep 2024</td>
                    <td class="text-end">12 Oct 2024</td>
                    <td class="text-end">$200</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row mb-3 d-flex justify-content-between">
            <div class="col-md-4">
              <div>
                <h6 class="mb-4">Payment info:</h6>
                <p class="mb-0">Credit Card - 123***********789</p>
                <div class="d-flex justify-content-between align-items-center mb-2 pe-3">
                  <p class="mb-0">Amount</p>
                  <p class="text-dark fw-medium mb-2">$200.00</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="d-flex justify-content-between align-items-center pe-3">
                <p class="text-dark fw-medium mb-0">Sub Total</p>
                <p class="mb-2">$200.00</p>
              </div>
              <div class="d-flex justify-content-between align-items-center pe-3">
                <p class="text-dark fw-medium mb-0">Tax</p>
                <p class="mb-2">$0.00</p>
              </div>
              <div class="d-flex justify-content-between align-items-center pe-3">
                <p class="text-dark fw-medium mb-0">Total</p>
                <p class="text-dark fw-medium mb-2">$200.00</p>
              </div>
            </div>
          </div>
          <div class="card border mb-0">
            <div class="card-body">
              <p class="text-dark fw-medium mb-2">Terms & Conditions:</p>
              <p class="fs-12 fw-normal d-flex align-items-baseline mb-2">
                <i class="ti ti-point-filled text-primary me-1"></i>All payments must be
                made according to the agreed schedule. Late payments may incur additional
                fees.
              </p>
              <p class="fs-12 fw-normal d-flex align-items-baseline">
                <i class="ti ti-point-filled text-primary me-1"></i>We are not liable for
                any indirect, incidental, or consequential damages, including loss of
                profits, revenue, or data.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Invoices -->

  <!-- Delete Modal -->
  <div class="modal fade" id="delete_company" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Subscription?</h4>
            <p class="mb-0">
              Are you sure you want to remove <br />
              company you selected.
            </p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link to="/super-admin/purchase-transaction" class="btn btn-danger"
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
