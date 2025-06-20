<template>
  <!-- Filter -->
  <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-4">
    <div class="d-flex align-items-center flex-wrap row-gap-2">
      <div class="sort-dropdown drop-down task-drops me-3">
        <a href="javascript:void(0);" class="dropdown-toggle"  data-bs-toggle="dropdown">All Invoices </a>
        <div class="dropdown-menu  dropdown-menu-start">
          <ul>
            <li>
              <a href="#">
                <i class="ti ti-dots-vertical"></i>All Invoices
              </a>
            </li>
            <li>
              <a href="#">
                <i class="ti ti-dots-vertical"></i>Paid
              </a>
            </li>
            <li>
              <a href="#">
                <i class="ti ti-dots-vertical"></i>Partially Paid
              </a>
            </li>
            <li>
              <a href="#">
                <i class="ti ti-dots-vertical"></i>Overdue
              </a>
            </li>
            <li>
              <a href="#">
                <i class="ti ti-dots-vertical"></i>Unpaid
              </a>
            </li>
          </ul>
        </div>
        </div>
      <div class="dropdown me-2">
        <a href="javascript:void(0);" class="dropdown-toggle"  data-bs-toggle="dropdown"><i class="ti ti-sort-ascending-2 me-2"></i>Sort </a>
        <div class="dropdown-menu  dropdown-menu-start">
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
        <input type="text" class="form-control bookingrange" ref="dateRangeInput" placeholder="">
      </div>
    </div>
    <div class="d-flex align-items-center flex-wrap row-gap-2">
      <div class="dropdown me-2">
        <a href="javascript:void(0);" class="btn bg-soft-purple text-purple"  data-bs-toggle="dropdown"  data-bs-auto-close="outside"><i class="ti ti-columns-3 me-2"></i>Manage Columns</a>
        <div class="dropdown-menu  dropdown-menu-md-end dropdown-md p-3">
          <h4 class="mb-2 fw-semibold">Want to manage datatables?</h4>
          <p class="mb-3">Please drag and drop your column to reorder your table and enable see option as you want.</p>
          <div class="border-top pt-3">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Estimations ID</p>
              <div class="status-toggle">
                <input type="checkbox" id="col-name" class="check">
                <label for="col-name" class="checktoggle"></label>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Client</p>
              <div class="status-toggle">
                <input type="checkbox" id="col-phone" class="check">
                <label for="col-phone" class="checktoggle"></label>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Project</p>
              <div class="status-toggle">
                <input type="checkbox" id="col-email" class="check">
                <label for="col-email" class="checktoggle"></label>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Due Date</p>
              <div class="status-toggle">
                <input type="checkbox" id="col-tag" class="check">
                <label for="col-tag" class="checktoggle"></label>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Amount</p>
              <div class="status-toggle">
                <input type="checkbox" id="col-loc" class="check">
                <label for="col-loc" class="checktoggle"></label>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Paid Amount</p>
              <div class="status-toggle">
                <input type="checkbox" id="col-rate" class="check">
                <label for="col-rate" class="checktoggle"></label>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Balance Amount</p>
              <div class="status-toggle">
                <input type="checkbox" id="col-owner" class="check">
                <label for="col-owner" class="checktoggle"></label>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Status</p>
              <div class="status-toggle">
                <input type="checkbox" id="col-status" class="check">
                <label for="col-status" class="checktoggle"></label>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Action</p>
              <div class="status-toggle">
                <input type="checkbox" id="col-action" class="check">
                <label for="col-action" class="checktoggle"></label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-sorts dropdown me-2">
        <a href="javascript:void(0);" data-bs-toggle="dropdown"  data-bs-auto-close="outside"><i class="ti ti-filter-share"></i>Filter</a>
        <div class="filter-dropdown-menu dropdown-menu  dropdown-menu-md-end p-4">
          <div class="filter-set-view">
            <div class="filter-set-head">
              <h4><i class="ti ti-filter-share"></i>Filter</h4>
            </div>
            <div class="accordion" id="accordionExample">
              
              <div class="filter-set-content">
                <div class="filter-set-content-head">
                  <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#owner" aria-expanded="false" aria-controls="owner">Client</a>
                </div>
                <div class="filter-set-contents accordion-collapse collapse" id="owner" data-bs-parent="#accordionExample">
                  <div class="filter-content-list">
                    <div class="mb-2 icon-form">
                      <span class="form-icon"><i class="ti ti-search"></i></span>
                      <input type="text" class="form-control" placeholder="Search Client">
                    </div>
                    <ul>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox" checked>
                            <span class="checkmarks"></span>
                            NovaWave LLC
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                            Redwood Inc
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                            HarborVie w
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                            CoastalStar Co.
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                            RiverStone Ventur
                          </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              
              
              <div class="filter-set-content">
                <div class="filter-set-content-head">
                  <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Project</a>
                </div>
                <div class="filter-set-contents accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionExample">
                  <div class="filter-content-list">
                    <ul>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox" checked>
                            <span class="checkmarks"></span>
                            Truelysell
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                            Dreamsports	
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                            Best@laundry	
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                            Doccure
                          </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="filter-set-content">
                <div class="filter-set-content-head">
                  <a href="#" class="collapsed" data-bs-toggle="collapse"
                    data-bs-target="#collapsethree" aria-expanded="false"
                    aria-controls="collapsethree">Amount</a>
                </div>
                <div class="filter-set-contents accordion-collapse collapse"
                  id="collapsethree" data-bs-parent="#accordionExample">
                  <div class="filter-content-list">
                    <div class="mb-2 icon-form">
                      <span class="form-icon"><i class="ti ti-search"></i></span>
                      <input type="text" class="form-control" placeholder="Search Amount">
                    </div>
                    <ul>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox" checked>
                            <span class="checkmarks"></span>
                            $2,15,000
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                            $1,45,000
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                            $2,15,000
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                            $4,80,380
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                            $2,12,000
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
                  <router-link to="/crm/invoices-list" class="btn btn-primary">Filter</router-link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="view-icons">
        <router-link to="/crm/invoices-list" class="active"><i class="ti ti-list-tree"></i></router-link>
        <router-link to="/crm/invoice-grid"><i class="ti ti-grid-dots"></i></router-link>
      </div>
    </div>	
  </div>
  <!-- /Filter -->
</template>
<script>
import "daterangepicker/daterangepicker.css";
import "daterangepicker/daterangepicker.js";
import { ref } from "vue";
import { onMounted } from "vue";
import moment from "moment";
import DateRangePicker from "daterangepicker";

export default {
  data() {
    return {};
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
