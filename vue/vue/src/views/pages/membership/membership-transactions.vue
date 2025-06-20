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
              <div class="row align-items-center">
                <div class="col-sm-4">
                  <div class="icon-form mb-3 mb-sm-0">
                    <span class="form-icon"><i class="ti ti-search"></i></span>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Search Contacts"
                    />
                  </div>
                </div>
                <div class="col-sm-8">
                  <div
                    class="d-flex align-items-center flex-wrap row-gap-2 justify-content-sm-end"
                  >
                    <div class="dropdown">
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
                              ><i class="ti ti-file-type-pdf text-danger me-1"></i>Export
                              as PDF</a
                            >
                          </li>
                          <li>
                            <a href="javascript:void(0);" class="dropdown-item"
                              ><i class="ti ti-file-type-xls text-green me-1"></i>Export
                              as Excel
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
            <!-- /Search -->
            <div class="card-body">
              <!-- Filter -->
              <membership-filter></membership-filter>
              <!-- /Filter -->

              <!-- Transactions List -->
              <div class="table-responsive custom-table">
                <a-table
                  class="table"
                  :columns="columns"
                  :data-source="data"
                  :row-selection="rowSelection"
                >
                  <template #bodyCell="{ column, record }">
                    <template v-if="column.key === 'Star'">
                      <div class="set-star rating-select filled">
                        <i class="fa fa-star"></i>
                      </div>
                    </template>
                    <template v-else-if="column.key === 'Status'">
                      <span :class="record.Class">{{ record.Status }}</span>
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
              <!-- /Transactions List -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
    title: "Type",
    dataIndex: "Type",
    sorter: {
      compare: (a, b) => {
        a = a.Type.toLowerCase();
        b = b.Type.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Amount",
    dataIndex: "Amount",
    key: "Amount",
    sorter: {
      compare: (a, b) => {
        a = a.Amount.toLowerCase();
        b = b.Amount.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Date",
    dataIndex: "Date",
    sorter: {
      compare: (a, b) => {
        a = a.Date.toLowerCase();
        b = b.Date.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Payment Type",
    dataIndex: "PaymentType",
    sorter: {
      compare: (a, b) => {
        a = a.PaymentType.toLowerCase();
        b = b.PaymentType.toLowerCase();
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
];
const data = [
  {
    key: 1,
    Type: "Wallet Topup",
    Amount: "+$650",
    Date: "25 Sep 2023, 01:22 pm",
    PaymentType: "Paypal",
    Class: "badge badge-pill badge-status bg-success",
    Status: "Completed",
  },
  {
    key: 2,
    Type: "Purchase",
    Amount: "-350",
    Date: "27 Sep 2023, 04:18 pm",
    PaymentType: "Cash",
    Class: "badge badge-pill badge-status bg-danger",
    Status: "Cancel",
  },
  {
    key: 3,
    Type: "Refund",
    Amount: "+$100",
    Date: "29 Sep 2023, 10:08 am",
    PaymentType: "Paypal",
    Class: "badge badge-pill badge-status bg-success",
    Status: "Completed",
  },
  {
    key: 4,
    Type: "Wallet Topup",
    Amount: "+$650",
    Date: "05 Oct 2023, 09:43 am",
    PaymentType: "Cash",
    Class: "badge badge-pill badge-status bg-success",
    Status: "Completed",
  },
  {
    key: 5,
    Type: "Wallet Topup",
    Amount: "+$650",
    Date: "17 Oct 2023, 01:22 am",
    PaymentType: "Paypal",
    Class: "badge badge-pill badge-status bg-danger",
    Status: "Cancel",
  },
  {
    key: 6,
    Type: "Wallet Topup",
    Amount: "+$650",
    Date: "22 Oct 2023, 06:32 pm",
    PaymentType: "Cash",
    Class: "badge badge-pill badge-status bg-success",
    Status: "Completed",
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
      title: "Membership Trasactions",
      data,
      columns,
      rowSelection,
    };
  },
};
</script>
