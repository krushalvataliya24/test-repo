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
            <div class="card-header">
              <!-- Search -->
              <div class="row align-items-center">
                <div class="col-sm-4">
                  <div class="icon-form mb-3 mb-sm-0">
                    <span class="form-icon"><i class="ti ti-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search Invoices">
                  </div>							
                </div>		
                <div class="col-sm-8">					
                  <div class="d-flex align-items-center flex-wrap row-gap-2 justify-content-sm-end">
                    <div class="dropdown me-2">
                      <a href="javascript:void(0);" class="dropdown-toggle"  data-bs-toggle="dropdown"><i class="ti ti-package-export me-2"></i>Export</a>
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
                    <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add" ><i class="ti ti-square-rounded-plus me-2"></i>Add New Invoices</a>
                  </div>
                </div>
              </div>
              <!-- /Search -->
            </div>
            <div class="card-body">

              <!-- Filter -->
              <invoices-filter></invoices-filter>
              <!-- /Filter -->

              <!-- Projects List -->
              <div class="table-responsive custom-table">
                <a-table
                  class="table datatable"
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
                    <template v-if="column.key === 'InvoiceID'">
                      <a href="#" :class="record.IdClass">{{ record.InvoiceID }}</a>
                    </template>
                    <template v-if="column.key === 'Client'">
                      <h2 class="d-flex align-items-center">
                        <router-link to="/crm/company-details" class="avatar avatar-sm border me-2"
                          ><img
                            class="w-auto h-auto"
                            :src="require(`@/assets/img/icons/${record.ClientImage}`)"
                            alt="User Image" /></router-link
                        ><router-link
                          to="/crm/company-details"
                          class="d-flex flex-column"
                          >{{ record.Client }}</router-link
                        >
                      </h2>
                    </template>
                    <template v-if="column.key === 'Project'">
                      <h2 class="d-flex align-items-center">
                        <a href="#" class="avatar avatar-sm border me-2"
                          ><img
                            class="w-auto h-auto"
                            :src="require(`@/assets/img/priority/${record.ProjectImage}`)"
                            alt="User Image" /></a
                        ><a href="#" class="d-flex flex-column">{{
                          record.Project
                        }}</a>
                      </h2>
                    </template>
                    <template v-if="column.key === 'Status'">
                      <span :class="record.StatusClass">{{ record.Status }}</span>
                    </template>
                    <template v-if="column.key === 'action'">
                      <div class="dropdown table-action">
                        <a
                          href="#"
                          class="action-icon"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                          ><i class="fa fa-ellipsis-v"></i
                        ></a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"
                            ><i class="ti ti-edit text-blue"></i> Edit</a
                          ><a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_invoices"
                            ><i class="ti ti-trash text-danger"></i> Delete</a
                          ><a class="dropdown-item" href="javascript:void(0);"
                            ><i class="ti ti-clipboard-copy text-green"></i> View
                            Invoices</a
                          ><a class="dropdown-item" href="javascript:void(0);"
                            ><i class="ti ti-checks text-success"></i> Mark as Paid</a
                          ><a class="dropdown-item" href="javascript:void(0);"
                            ><i class="ti ti-file text-tertiary"></i> Mark as Partially
                            Paid</a
                          ><a class="dropdown-item" href="javascript:void(0);"
                            ><i class="ti ti-sticker text-blue"></i> Mark ad Unpaid</a
                          ><a class="dropdown-item" href="javascript:void(0);"
                            ><i class="ti ti-printer text-info"></i> Print</a
                          >
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
              <!-- /Projects List -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <invoices-modal></invoices-modal>
</template>
<script>
const columns = [
  {
    title: "",
    dataIndex: "",
    key: "Star",
    sorter: false,
  },
  {
    title: "Invoice ID",
    dataIndex: "InvoiceID",
    key: "InvoiceID",
    sorter: {
      compare: (a, b) => {
        a = a.InvoiceID.toLowerCase();
        b = b.InvoiceID.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Client",
    dataIndex: "Client",
    key: "Client",
    sorter: {
      compare: (a, b) => {
        a = a.Client.toLowerCase();
        b = b.Client.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Project",
    dataIndex: "Project",
    key: "Project",
    sorter: {
      compare: (a, b) => {
        a = a.Project.toLowerCase();
        b = b.Project.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Due Date",
    dataIndex: "DueDate",
    sorter: {
      compare: (a, b) => {
        a = a.DueDate.toLowerCase();
        b = b.DueDate.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Amount",
    dataIndex: "Amount",
    sorter: {
      compare: (a, b) => {
        a = a.Amount.toLowerCase();
        b = b.Amount.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Paid Amount",
    dataIndex: "PaidAmount",
    sorter: {
      compare: (a, b) => {
        a = a.PaidAmount.toLowerCase();
        b = b.PaidAmount.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Balance Amount",
    dataIndex: "BalanceAmount",
    sorter: {
      compare: (a, b) => {
        a = a.BalanceAmount.toLowerCase();
        b = b.BalanceAmount.toLowerCase();
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
    ClientImage: "company-icon-01.svg",
    ProjectImage: "truellysel.svg",
    InvoiceID: "#1254058",
    IdClass: "title-name add-popups-draft",
    Client: "NovaWave LLC",
    Project: "Truelysell",
    DueDate: "21 May 2024",
    Amount: "$2,15,000",
    PaidAmount: "$2,15,000",
    BalanceAmount: "$0",
    StatusClass: "badge badge-pill badge-status bg-warning",
    Status: "Partially Paid",
  },
  {
    ClientImage: "company-icon-10.svg",
    ProjectImage: "project-01.svg",
    InvoiceID: "#1254057",
    IdClass: "title-name add-popups",
    Client: "BlueSky Industries",
    Project: "Dreamschat",
    DueDate: "19 Oct 2023",
    Amount: "$1,45,000",
    PaidAmount: "$1,45,000",
    BalanceAmount: "$0",
    StatusClass: "badge badge-pill badge-status bg-success",
    Status: "Paid",
  },
  {
    ClientImage: "company-icon-08.svg",
    ProjectImage: "best.svg",
    InvoiceID: "#1254056",
    IdClass: "title-name add-popups-draft",
    Client: "Silver Hawk",
    Project: "Truelysell",
    DueDate: "24 Oct 2023",
    Amount: "$2,15,000",
    PaidAmount: "$1,00,000",
    BalanceAmount: "$1,15,000",
    StatusClass: "badge badge-pill badge-status bg-warning",
    Status: "Partially Paid",
  },
  {
    ClientImage: "company-icon-07.svg",
    ProjectImage: "project-02.svg",
    InvoiceID: "#1254055",
    IdClass: "title-name add-popups",
    Client: "Summit Peak",
    Project: "Servbook",
    DueDate: "10 Nov 2023",
    Amount: "$4,80,380",
    PaidAmount: "$4,80,380",
    BalanceAmount: "$0",
    StatusClass: "badge badge-pill badge-status bg-success",
    Status: "Paid",
  },
  {
    ClientImage: "company-icon-05.svg",
    ProjectImage: "project-01.svg",
    InvoiceID: "#1254054",
    IdClass: "title-name add-popups-declined",
    Client: "RiverStone Ventur",
    Project: "DreamPOS",
    DueDate: "18 Nov 2023",
    Amount: "$2,12,000",
    PaidAmount: "$0",
    BalanceAmount: "$2,12,000",
    StatusClass: "badge badge-pill badge-status bg-danger",
    Status: "Unpaid",
  },
  {
    ClientImage: "company-icon-04.svg",
    ProjectImage: "dream-pos.svg",
    InvoiceID: "#1254053",
    IdClass: "title-name add-popups-draft",
    Client: "CoastalStar Co.",
    Project: "Kofejob",
    DueDate: "20 Nov 2023",
    Amount: "$3,50,000",
    PaidAmount: "$1,50,000",
    BalanceAmount: "$2,00,000",
    StatusClass: "badge badge-pill badge-status bg-warning",
    Status: "Partially Paid",
  },
  {
    ClientImage: "company-icon-03.svg",
    ProjectImage: "servbook.svg",
    InvoiceID: "#1254052",
    IdClass: "title-name add-popups",
    Client: "HarborView",
    Project: "Doccure",
    DueDate: "07 Dec 2023",
    Amount: "$1,23,000",
    PaidAmount: "$1,23,000",
    BalanceAmount: "$1,23,000",
    StatusClass: "badge badge-pill badge-status bg-violet",
    Status: "Overdue",
  },
  {
    ClientImage: "company-icon-02.svg",
    ProjectImage: "truellysell.svg",
    InvoiceID: "#1254051",
    IdClass: "title-name add-popups",
    Client: "Golden Gate Ltd",
    Project: "Best@laundry",
    DueDate: "14 Dec 2023",
    Amount: "$3,12,500",
    PaidAmount: "$3,12,500",
    BalanceAmount: "$0",
    StatusClass: "badge badge-pill badge-status bg-success",
    Status: "Paid",
  },
  {
    ClientImage: "company-icon-09.svg",
    ProjectImage: "dreamchat.svg",
    InvoiceID: "#1254050",
    IdClass: "title-name add-popups-declined",
    Client: "Redwood Inc",
    Project: "Dreamsports",
    DueDate: "22 Dec 2023",
    Amount: "$4,18,000",
    PaidAmount: "$0",
    BalanceAmount: "$4,18,000",
    StatusClass: "badge badge-pill badge-status bg-danger",
    Status: "Unpaid",
  },
  {
    ClientImage: "company-icon-01.svg",
    ProjectImage: "dreamchat.svg",
    InvoiceID: "#1254049",
    IdClass: "title-name add-popups",
    Client: "NovaWave LLC",
    Project: "Truelysell",
    DueDate: "28 Dec 2023",
    Amount: "$5,00,000",
    PaidAmount: "$5,00,000",
    BalanceAmount: "$0",
    StatusClass: "badge badge-pill badge-status bg-success",
    Status: "Paid",
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
      columns,
      data,
      rowSelection,
      title: "Invoices",
    };
  },
};
</script>
