<template>
  <layouts-header></layouts-header>
  <layouts-sidebar></layouts-sidebar>

  <!-- Page Wrapper -->
  <div class="page-wrapper">
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- Page Header -->
          <page-header :title="title" />
          <!-- /Page Header -->

          <!-- Card -->
          <div class="card">
            <div class="card-header">
              <!-- Search -->
              <div class="row align-items-center">
                <div class="col-sm-4">
                  <div class="icon-form mb-3 mb-sm-0">
                    <span class="form-icon"><i class="ti ti-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search Proposals">
                  </div>							
                </div>		
                <div class="col-sm-8">					
                  <div class="d-flex align-items-center flex-wrap row-gap-2 justify-content-sm-end">
                    <div class="dropdown me-2">
                      <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="ti ti-package-export me-2"></i>Export</a>
                      <div class="dropdown-menu  dropdown-menu-end">
                        <ul>
                          <li>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-file-type-pdf text-danger me-1"></i>Export as PDF</a>
                          </li>
                          <li>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-file-type-xls text-green me-1"></i>Export as Excel </a>
                          </li>
                        </ul>
                      </div>
                    </div>	
                    <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add"><i class="ti ti-square-rounded-plus me-2"></i>Add New Proposals</a>
                  </div>
                </div>
              </div>
              <!-- /Search -->
            </div>
            <div class="card-body">
              <!-- Filter -->
              <proposals-filter></proposals-filter>
              <!-- /Filter -->

              <!-- Contact Grid -->
              <div class="row">
                <div class="col-xxl-3 col-xl-4 col-md-6" v-for="item in ProposalGrid" :key="item.id">
                  <div class="card border">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0">
                          <span class="badge badge-purple-light">#1493016</span>
                        </div>
                        <div class="dropdown table-action">
                          <a href="#" class="action-icon bg-white" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-ellipsis-v"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_proposals"><i class="ti ti-trash text-danger"></i> Delete</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> View Proposal</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-checks text-success"></i> Mark As Accepted</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file text-tertiary"></i> Mark as Draft</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-sticker text-blue"></i> Mark ad Declined</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-subtask text-pink"></i> Convert to estimate</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file-invoice text-tertiary"></i> Convert to Invoice</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
                          </div>
                        </div>
                      </div>
                      <div class="d-block">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                          <div>
                            <h4>SEO Proposal</h4>
                            <p>Project : Truelysell</p>
                          </div>                                                    
                          <div>
                            <span :class="item.BadgeClass">{{ item.Badge }}</span>
                          </div>
                        </div>                                                
                        <div class="mb-3">
                          <p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-moneybag fs-12"></i></span>Total Value : $2,04,214</p>
                          <p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-event fs-12"></i></span>Date : 25 May 2024</p>
                          <p class="d-flex align-items-center"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-stats fs-12"></i></span>Open till : 31 Jun 2024</p>
                        </div>
                      </div>
                      <div class="bg-light-400 rounded p-2">
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0);" class="avatar avatar-sm bg-white border me-2">
                            <img :src="require(`@/assets/img/icons/${item.Image}`)" class="w-auto h-auto" alt="img">
                          </a>  
                          <div class="d-flex flex-column">
                            <span class="d-block">Sent to</span>
                            <a href="javascript:void(0);" class="text-default">NovaWave LLC</a>
                          </div>                                                 
                        </div>                                                
                      </div>
                    </div>							
                  </div>
                </div>
              </div>
              <!-- /Contact Grid -->

              <div class="load-btn text-center">
                <a href="javascript:void(0);" class="btn btn-primary"
                  >Load More Contacts<i class="ti ti-loader"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- /Card -->
        </div>
      </div>
    </div>
  </div>
  <!-- /Page Wrapper -->

  <proposals-modal></proposals-modal>
</template>

<script>
import "daterangepicker/daterangepicker.css";
import "daterangepicker/daterangepicker.js";
import { ref } from "vue";
import { onMounted } from "vue";
import moment from "moment";
import DateRangePicker from "daterangepicker";
import ProposalGrid from "@/assets/json/proposals-grid.json";

export default {
  data() {
    return {
      ProposalGrid: ProposalGrid,
      title: "Proposals",
    };
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
