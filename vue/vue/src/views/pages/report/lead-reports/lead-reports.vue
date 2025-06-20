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

          <div class="card">
            <div class="card-body">
              <!-- Search -->
              <div class="card-header">
                <!-- Search -->
                <div class="row">
                  <div class="col-md-5 col-sm-4">
                    <div class="icon-form mb-3 mb-sm-0">
                      <span class="form-icon"><i class="ti ti-search"></i></span>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Search Leads"
                      />
                    </div>
                  </div>
                  <div class="col-md-7 col-sm-8">
                    <div class="text-sm-end">
                      <a
                        href="download_report"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#download_report"
                        ><i class="ti ti-file-download me-2"></i>Download Report</a
                      >
                    </div>
                  </div>
                </div>

                <!-- Search -->
              </div>
              <!-- /Search -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-7 d-flex">
                    <div class="card shadow flex-fill">
                      <div
                        class="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-2"
                      >
                        <h4>Leads by Year</h4>
                        <div class="icon-form">
                          <span class="form-icon"><i class="ti ti-calendar"></i></span>
                          <input
                            type="text"
                            class="form-control bookingrange"
                            placeholder=""
                            ref="dateRangeInput"
                          />
                        </div>
                      </div>
                      <div class="card-body">
                        <div id="leads-report">
                          <apexchart
                            type="bar"
                            height="275"
                            :options="reportCharts.RepCharts"
                            :series="reportCharts.series"
                          ></apexchart>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5 d-flex">
                    <div class="card shadow flex-fill">
                      <div
                        class="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-2"
                      >
                        <h4>Leads by Source</h4>
                        <div class="icon-form">
                          <span class="form-icon"><i class="ti ti-calendar"></i></span>
                          <input
                            type="text"
                            class="form-control bookingrange"
                            placeholder=""
                            ref="dateRangeInput1"
                          />
                        </div>
                      </div>
                      <div class="card-body">
                        <div id="leads-analysis">
                          <apexchart
                            type="donut"
                            height="275"
                            :options="analysisCharts.AnaCharts"
                            :series="analysisCharts.series"
                          ></apexchart>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Filter -->
                <lead-report-filter></lead-report-filter>
                <!-- /Filter -->

                <!-- Report List -->
                <div class="table-responsive custom-table">
                  <a-table
                    class="table"
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
                      <template v-if="column.key === 'LeadName'">
                        <router-link to="/crm/leads-details" class="title-name">{{
                          record.LeadName
                        }}</router-link>
                      </template>
                      <template v-if="column.key === 'CompanyName'">
                        <h2 class="d-flex align-items-center">
                          <router-link
                            to="/crm/company-details"
                            class="avatar avatar-sm border me-2"
                            ><img
                              class="w-auto h-auto"
                              :src="require(`@/assets/img/icons/${record.Image}`)"
                              alt="User Image" /></router-link
                          ><router-link
                            to="/crm/company-details"
                            class="d-flex flex-column"
                            >NovaWave LLC<span class="text-default"
                              >Newyork, USA
                            </span></router-link
                          >
                        </h2>
                      </template>
                      <template v-if="column.key === 'LeadStatus'">
                        <span :class="record.Class">{{ record.LeadStatus }}</span>
                      </template>
                      <template v-if="column.key === 'LeadOwner'">
                        <div>
                          <span class="title-name">{{ record.LeadOwner }}</span>
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
                <!-- /Report List -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <lead-report-modal></lead-report-modal>
</template>
<script>
import "daterangepicker/daterangepicker.css";
import "daterangepicker/daterangepicker.js";
import { ref } from "vue";
import { onMounted } from "vue";
import moment from "moment";
import DateRangePicker from "daterangepicker";
import { analysisCharts, reportCharts } from "./data";
export default {
  data() {
    return {
      title: "Lead Report",
      analysisCharts: analysisCharts,
      reportCharts: reportCharts,
      data,
      columns,
      rowSelection,
    };
  },
  setup() {
    const dateRangeInput = ref(null);
    const dateRangeInput1 = ref(null);

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
      if (dateRangeInput1.value) {
        const start = moment().subtract(6, "days");
        const end = moment();

        new DateRangePicker(
          dateRangeInput1.value,
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
      dateRangeInput1,
    };
  },
};
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
    title: "Lead Name",
    dataIndex: "LeadName",
    key: "LeadName",
    sorter: {
      compare: (a, b) => {
        a = a.LeadName.toLowerCase();
        b = b.LeadName.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
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
    title: "Phone",
    dataIndex: "Phone",
    sorter: {
      compare: (a, b) => {
        a = a.Phone.toLowerCase();
        b = b.Phone.toLowerCase();
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
    title: "Lead Status",
    dataIndex: "LeadStatus",
    key: "LeadStatus",
    sorter: {
      compare: (a, b) => {
        a = a.LeadStatus.toLowerCase();
        b = b.LeadStatus.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Lead Owner",
    dataIndex: "LeadOwner",
    key: "LeadOwner",
    sorter: {
      compare: (a, b) => {
        a = a.LeadOwner.toLowerCase();
        b = b.LeadOwner.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Source",
    dataIndex: "Source",
    sorter: {
      compare: (a, b) => {
        a = a.Source.toLowerCase();
        b = b.Source.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Created Date",
    dataIndex: "CreatedDate",
    sorter: {
      compare: (a, b) => {
        a = a.CreatedDate.toLowerCase();
        b = b.CreatedDate.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
];
const data = [
  {
    key: 1,
    LeadName: "Collins",
    CompanyName: "NovaWave LLC",
    Location: "Newyork, USA",
    Image: "company-icon-01.svg",
    Phone: "+1 875455453",
    Email: "robertson@example.com",
    LeadStatus: "Closed",
    Class: "badge badge-pill badge-status bg-success",
    LeadOwner: "Hendry",
    Source: "Paid Social",
    CreatedDate: "25 Sep 2023, 01:22 pm",
  },
  {
    key: 2,
    LeadName: "Konopelski",
    CompanyName: "BlueSky Industries",
    Location: "Winchester, KY",
    Image: "company-icon-02.svg",
    Phone: "+1 989757485",
    Email: "sharon@example.com",
    LeadStatus: "Not Contacted",
    Class: "badge badge-pill badge-status bg-pending",
    LeadOwner: "Guillory",
    Source: "Referrals",
    CreatedDate: "29 Sep 2023, 04:15 pm",
  },
  {
    key: 3,
    LeadName: "Adams",
    CompanyName: "SilverHawk",
    Location: "Jametown, NY",
    Image: "company-icon-03.svg",
    Phone: "+1 546555455",
    Email: "vaughan12@example.com",
    LeadStatus: "Closed",
    Class: "badge badge-pill badge-status bg-success",
    LeadOwner: "Jami",
    Source: "Campaigns",
    CreatedDate: "04 Oct 2023, 10:18 am",
  },
  {
    key: 4,
    LeadName: "Schumm",
    CompanyName: "SummitPeak",
    Location: "Compton, RI",
    Image: "company-icon-04.svg",
    Phone: "+1 454478787",
    Email: "jessica13@example.com",
    LeadStatus: "Contacted",
    Class: "badge badge-pill badge-status bg-warning",
    LeadOwner: "Theresa",
    Source: "Google",
    CreatedDate: "17 Oct 2023, 03:31 pm",
  },
  {
    key: 5,
    LeadName: "Wisozk",
    CompanyName: "RiverStone Ventur",
    Location: "Dayton, OH",
    Image: "company-icon-05.svg",
    Phone: "+1 124547845",
    Email: "caroltho3@example.com",
    LeadStatus: "Closed",
    Class: "badge badge-pill badge-status bg-success",
    LeadOwner: "Espinosa",
    Source: "Paid Social",
    CreatedDate: "24 Oct 2023, 09:14 pm",
  },
  {
    key: 6,
    LeadName: "Heller",
    CompanyName: "Bright Bridge Grp",
    Location: "Lafayette, LA",
    Image: "company-icon-06.svg",
    Phone: "+1 478845447",
    Email: "dawnmercha@example.com",
    LeadStatus: "Closed",
    Class: "badge badge-pill badge-status bg-success",
    LeadOwner: "Martin",
    Source: "Referrals",
    CreatedDate: "08 Nov 2023, 09:56 am",
  },
  {
    key: 7,
    LeadName: "Gutkowski",
    CompanyName: "CoastalStar Co.",
    Location: "Centerville, VA",
    Image: "company-icon-07.svg",
    Phone: "+1 215544845",
    Email: "rachel@example.com",
    LeadStatus: "Closed",
    Class: "badge badge-pill badge-status bg-success",
    LeadOwner: "Newell",
    Source: "Campaigns",
    CreatedDate: "14 Nov 2023, 04:19 pm",
  },
  {
    key: 8,
    LeadName: "Walter",
    CompanyName: "HarborView",
    Location: "Providence, RI",
    Image: "company-icon-08.svg",
    Phone: "+1 121145471",
    Email: "jonelle@example.com",
    LeadStatus: "Closed",
    Class: "badge badge-pill badge-status bg-success",
    LeadOwner: "Janet",
    Source: "Google",
    CreatedDate: "23 Nov 2023, 11:14 pm",
  },
  {
    key: 9,
    LeadName: "Hansen",
    CompanyName: "Golden Gate Ltd",
    Location: "Swayzee, IN",
    Image: "company-icon-09.svg",
    Phone: "+1 321454789",
    Email: "jonathan@example.com",
    LeadStatus: "Closed",
    Class: "badge badge-pill badge-status bg-success",
    LeadOwner: "Craig",
    Source: "Paid Social",
    CreatedDate: "10 Dec 2023, 06:43 am",
  },
  {
    key: 10,
    LeadName: "Leuschke",
    CompanyName: "Redwood Inc",
    Location: "Florida City, FL",
    Image: "company-icon-10.svg",
    Phone: "+1 278907145",
    Email: "brook@example.com",
    LeadStatus: "Lost",
    Class: "badge badge-pill badge-status bg-danger",
    LeadOwner: "Daniel",
    Source: "Referrals",
    CreatedDate: "25 Dec 2023, 08:17 pm",
  },
];
const rowSelection = {
  onChange: () => {},
  onSelect: () => {},
  onSelectAll: () => {},
};
</script>
