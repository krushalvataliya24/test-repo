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
                      placeholder="Search Company"
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
                      <h4>Contact by Year</h4>
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
                      <div id="company-year">
                        <apexchart
                          type="line"
                          height="273"
                          :options="companyYear.yearCharts"
                          :series="companyYear.series"
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
                      <h4>Contact by Source</h4>
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
                          height="273"
                          :options="analysisCharts.AnaCharts"
                          :series="analysisCharts.series"
                        ></apexchart>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Filter -->
              <company-report-filter></company-report-filter>
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
                    <template v-else-if="column.key === 'Name'">
                      <h2 class="d-flex align-items-center">
                        <router-link
                          to="/crm/company-details"
                          class="avatar avatar-sm border me-2"
                          ><img
                            class="w-auto h-auto"
                            :src="require(`@/assets/img/icons/${record.Image}`)"
                            alt="User Image" /></router-link
                        ><router-link to="/crm/company-details">{{
                          record.Name
                        }}</router-link>
                      </h2>
                    </template>
                    <template v-else-if="column.key === 'Owner'">
                      <div>
                        <span class="title-name">{{ record.Owner }}</span>
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
  <company-report-modal></company-report-modal>
</template>
<script>
import "daterangepicker/daterangepicker.css";
import "daterangepicker/daterangepicker.js";
import { ref } from "vue";
import { onMounted } from "vue";
import moment from "moment";
import DateRangePicker from "daterangepicker";
import { companyYear, analysisCharts } from "./data";
export default {
  data() {
    return {
      title: "Company Report",
      companyYear: companyYear,
      analysisCharts: analysisCharts,
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
    title: "Name",
    dataIndex: "Name",
    key: "Name",
    sorter: {
      compare: (a, b) => {
        a = a.Name.toLowerCase();
        b = b.Name.toLowerCase();
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
    title: "Location",
    dataIndex: "Location",
    key: "Location",
    sorter: {
      compare: (a, b) => {
        a = a.Location.toLowerCase();
        b = b.Location.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Owner",
    dataIndex: "Owner",
    key: "Owner",
    sorter: {
      compare: (a, b) => {
        a = a.Owner.toLowerCase();
        b = b.Owner.toLowerCase();
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
    title: "Won Deals",
    dataIndex: "WonDeals",
    sorter: {
      compare: (a, b) => {
        a = a.WonDeals.toLowerCase();
        b = b.WonDeals.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Lost Deals",
    dataIndex: "LostDeals",
    sorter: {
      compare: (a, b) => {
        a = a.LostDeals.toLowerCase();
        b = b.LostDeals.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Date Created",
    dataIndex: "DateCreated",
    sorter: {
      compare: (a, b) => {
        a = a.DateCreated.toLowerCase();
        b = b.DateCreated.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
];
const data = [
  {
    key: 1,
    Image: "company-icon-01.svg",
    Name: "NovaWave LLC",
    Phone: "+1 875455453",
    Email: "robertson@example.com",
    Location: "Germany",
    Owner: "Hendry",
    Source: "Paid Social",
    WonDeals: "5 Deals, $100000",
    LostDeals: "2 Deals, $80000",
    DateCreated: "25 Sep 2023, 01:22 pm",
  },
  {
    key: 2,
    Image: "company-icon-02.svg",
    Name: "BlueSky Industries",
    Phone: "+1 989757485",
    Email: "sharon@example.com",
    Location: "USA",
    Owner: "Guillory",
    Source: "Referrals",
    WonDeals: "4 Deals, $120000",
    LostDeals: "3 Deals, $90000",
    DateCreated: "29 Sep 2023, 04:15 pm",
  },
  {
    key: 3,
    Image: "company-icon-03.svg",
    Name: "SilverHawk",
    Phone: "+1 546555455",
    Email: "vaughan12@example.com",
    Location: "Canada",
    Owner: "Jami",
    Source: "Campaigns",
    WonDeals: "3 Deals, $110000",
    LostDeals: "2 Deals, $70000",
    DateCreated: "04 Oct 2023, 10:18 am",
  },
  {
    key: 4,
    Image: "company-icon-04.svg",
    Name: "SummitPeak",
    Phone: "+1 454478787",
    Email: "jessica13@example.com",
    Location: "India",
    Owner: "Theresa",
    Source: "Google",
    WonDeals: "6 Deals, $200000",
    LostDeals: "3 Deals, $100000",
    DateCreated: "17 Oct 2023, 03:31 pm",
  },
  {
    key: 5,
    Image: "company-icon-05.svg",
    Name: "RiverStone Ventur",
    Phone: "+1 124547845",
    Email: "caroltho3@example.com",
    Location: "China",
    Owner: "Espinosa",
    Source: "Paid Social",
    WonDeals: "3 Deals, $80000",
    LostDeals: "1 Deal, $40000",
    DateCreated: "24 Oct 2023, 09:14 pm",
  },
  {
    key: 6,
    Image: "company-icon-06.svg",
    Name: "Bright Bridge Grp",
    Phone: "+1 478845447",
    Email: "dawnmercha@example.com",
    Location: "Japan",
    Owner: "Martin",
    Source: "Referrals",
    WonDeals: "5 Deals, $95000",
    LostDeals: "2 Deals, $60000",
    DateCreated: "08 Nov 2023, 09:56 am",
  },
  {
    key: 7,
    Image: "company-icon-07.svg",
    Name: "CoastalStar Co.",
    Phone: "+1 215544845",
    Email: "rachel@example.com",
    Location: "Indonesia",
    Owner: "Newell",
    Source: "Campaigns",
    WonDeals: "4 Deals, $100000",
    LostDeals: "1 Deal, $50000",
    DateCreated: "14 Nov 2023, 04:19 pm",
  },
  {
    key: 8,
    Image: "company-icon-08.svg",
    Name: "HarborView",
    Phone: "+1 121145471",
    Email: "jonelle@example.com",
    Location: "Cuba",
    Owner: "Janet",
    Source: "Google",
    WonDeals: "3 Deals, $70000",
    LostDeals: "3 Deals, $80000",
    DateCreated: "23 Nov 2023, 11:14 pm",
  },
  {
    key: 9,
    Image: "company-icon-09.svg",
    Name: "Golden Gate Ltd",
    Phone: "+1 321454789",
    Email: "jonathan@example.com",
    Location: "Isreal",
    Owner: "Craig",
    Source: "Referrals",
    WonDeals: "6 Deals, $130000",
    LostDeals: "4 Deals, $100000",
    DateCreated: "10 Dec 2023, 06:43 am",
  },
  {
    key: 10,
    Image: "company-icon-10.svg",
    Name: "Redwood Inc",
    Phone: "+1 278907145",
    Email: "brook@example.com",
    Location: "Colombia",
    Owner: "Daniel",
    Source: "Campaigns",
    WonDeals: "5 Deals, $90000",
    LostDeals: "2 Deals, $55000",
    DateCreated: "25 Dec 2023, 08:17 pm",
  },
];
const rowSelection = {
  onChange: () => {},
  onSelect: () => {},
  onSelectAll: () => {},
};
</script>
