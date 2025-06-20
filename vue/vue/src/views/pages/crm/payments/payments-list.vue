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
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Search Payments"
                    />
                  </div>
                </div>
                <div class="col-sm-8">
                  <div
                    class="d-flex align-items-center flex-wrap row-gap-2 justify-content-sm-end mb-3 mb-sm-0"
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
            <div class="card-body">
              <!-- Filter -->
              <payments-filter></payments-filter>
              <!-- /Filter -->

              <!-- Projects List -->
              <div class="table-responsive custom-table">
                <a-table class="table" :columns="columns" :data-source="data">
                  <template #bodyCell="{ column, record }">
                    <template v-if="column.key === 'InvoiceId'">
                      <td class="sorting_1">
                        <a href="#" class="title-name edit-popup">{{
                          record.InvoiceId
                        }}</a>
                      </td></template
                    >

                    <template v-if="column.key === 'Customer'">
                      <h2 class="d-flex align-items-center">
                        <router-link
                          to="/crm/company-details"
                          class="avatar avatar-sm border me-2"
                          ><img
                            class="w-auto h-auto"
                            :src="require(`@/assets/img/icons/${record.ClientImg}`)"
                            alt="User Image" /></router-link
                        ><router-link
                          to="/crm/company-details"
                          class="d-flex flex-column"
                          >{{ record.Customer }}</router-link
                        >
                      </h2>
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
                          <a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas_edit"
                            ><i class="ti ti-eye text-indigo"></i> Preview</a
                          ><a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_payments"
                            ><i class="ti ti-trash text-danger"></i> Delete</a
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
  <payments-modal></payments-modal>
</template>
<script>
const columns = [
  {
    title: "Invoice Id",
    dataIndex: "InvoiceId",
    key: "InvoiceId",
    sorter: {
      compare: (a, b) => {
        a = a.InvoiceId.toLowerCase();
        b = b.InvoiceId.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Customer",
    dataIndex: "Customer",
    key: "Customer",
    sorter: {
      compare: (a, b) => {
        a = a.Customer.toLowerCase();
        b = b.Customer.toLowerCase();
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
    title: "Payment Method",
    dataIndex: "PaymentMethod",
    sorter: {
      compare: (a, b) => {
        a = a.PaymentMethod.toLowerCase();
        b = b.PaymentMethod.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Transaction Id",
    dataIndex: "TransactionId",
    key: "TransactionId",
    sorter: {
      compare: (a, b) => {
        a = a.TransactionId.toLowerCase();
        b = b.TransactionId.toLowerCase();
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
    key: "1",
    InvoiceId: "#1254058",
    Customer: "NovaWave LLC",
    ClientImg: "company-icon-01.svg",
    Amount: "$2500",
    DueDate: "15 Oct 2023",
    PaymentMethod: "Cash",
    TransactionId: "TXNID1234567890",
  },
  {
    key: "2",
    InvoiceId: "#1254057",
    Customer: "BlueSky Industries",
    ClientImg: "company-icon-02.svg",
    Amount: "$1450",
    DueDate: "19 Oct 2023",
    PaymentMethod: "Credit",
    TransactionId: "TXNID9876543210",
  },
  {
    key: "3",
    InvoiceId: "#1254056",
    Customer: "Silver Hawk",
    ClientImg: "company-icon-03.svg",
    Amount: "$2100",
    DueDate: "24 Oct 2023",
    PaymentMethod: "Cash",
    TransactionId: "TXNID2468135790",
  },
  {
    key: "4",
    InvoiceId: "#1254055",
    Customer: "Summit Peak",
    ClientImg: "company-icon-04.svg",
    Amount: "$4000",
    DueDate: "10 Nov 2023",
    PaymentMethod: "Credit",
    TransactionId: "TXNID1357924680",
  },
  {
    key: "5",
    InvoiceId: "#1254054",
    Customer: "RiverStone Ventur",
    ClientImg: "company-icon-05.svg",
    Amount: "$2120",
    DueDate: "18 Nov 2023",
    PaymentMethod: "Cash",
    TransactionId: "TXNID0123456789",
  },
  {
    key: "6",
    InvoiceId: "#1254053",
    Customer: "CoastalStar Co.",
    ClientImg: "company-icon-04.svg",
    Amount: "$3500",
    DueDate: "20 Nov 2023",
    PaymentMethod: "Credit",
    TransactionId: "TXNIDABCDE12345",
  },
  {
    key: "7",
    InvoiceId: "#1254052",
    Customer: "HarborView",
    ClientImg: "company-icon-03.svg",
    Amount: "$1230",
    DueDate: "07 Dec 2023",
    PaymentMethod: "Cash",
    TransactionId: "TXNID54321XYZ789",
  },
  {
    key: "8",
    InvoiceId: "#1254051",
    Customer: "Golden Gate Ltd",
    ClientImg: "company-icon-02.svg",
    Amount: "$3125",
    DueDate: "14 Dec 2023",
    PaymentMethod: "Credit",
    TransactionId: "TXNIDQWERTY0987",
  },
  {
    key: "9",
    InvoiceId: "#1254050",
    Customer: "Redwood Inc",
    ClientImg: "company-icon-10.svg",
    Amount: "$4180",
    DueDate: "22 Dec 2023",
    PaymentMethod: "Cash",
    TransactionId: "TXNID98765ASDF43",
  },
  {
    key: "10",
    InvoiceId: "#1254049",
    Customer: "NovaWave LLC",
    ClientImg: "company-icon-05.svg",
    Amount: "$5000",
    DueDate: "28 Dec 2023",
    PaymentMethod: "Cash",
    TransactionId: "TXNID1A2B3C4D5E6",
  },
];
export default {
  data() {
    return {
      columns,
      data,
      title: "Payments",
    };
  },
};
</script>
