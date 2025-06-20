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
                    <input type="text" class="form-control" placeholder="Search Contacts">
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
                    <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add"><i class="ti ti-square-rounded-plus me-2"></i>Add New Contracts</a>
                  </div>
                </div>
              </div>
              <!-- /Search -->
            </div>
            <div class="card-body">

              <!-- Filter -->
              <contracts-filter></contracts-filter>
              <!-- /Filter -->

              <!-- Projects List -->
              <div class="table-responsive custom-table">
                <a-table
                  class="table"
                  :columns="columns"
                  :data-source="data"
                  :row-selection="rowSelection"
                >
                  <template #bodyCell="{ column, record }">
                    <template v-if="column.key === 'ContractID'">
                      <div>
                        <a href="#" class="add-popups">{{ record.ContractID }}</a>
                      </div>
                    </template>
                    <template v-if="column.key === 'Subject'">
                      <div>
                        <a href="#" class="title-name">{{ record.Subject }}</a>
                      </div>
                    </template>
                    <template v-if="column.key === 'Customer'">
                      <h2 class="d-flex align-items-center">
                        <router-link to="/crm/company-details" class="avatar avatar-sm border me-2"
                          ><img
                            class="w-auto h-auto"
                            :src="require(`@/assets/img/icons/${record.Image}`)"
                            alt="User Image" /></router-link
                        ><router-link
                          to="/crm/company-details"
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
                          <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit" href="#"
                            ><i class="ti ti-edit text-blue"></i> Edit</a
                          ><a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_contracts"
                            ><i class="ti ti-trash text-danger"></i> Delete</a
                          ><a class="dropdown-item" href="javascript:void(0);"
                            ><i class="ti ti-copy text-tertiary"></i> Clone</a
                          ><a class="dropdown-item" href="javascript:void(0);"
                            ><i class="ti ti-clipboard-copy text-violet"></i> View
                            Contract</a
                          ><a class="dropdown-item" href="javascript:void(0);"
                            ><i class="ti ti-checks text-success"></i> Mark as Signed</a
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
  <contracts-modal></contracts-modal>
</template>
<script>
const columns = [
  {
    title: "Contract ID",
    dataIndex: "ContractID",
    key: "ContractID",
    sorter: {
      compare: (a, b) => {
        a = a.ContractID.toLowerCase();
        b = b.ContractID.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Subject",
    dataIndex: "Subject",
    key: "Subject",
    sorter: {
      compare: (a, b) => {
        a = a.Subject.toLowerCase();
        b = b.Subject.toLowerCase();
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
    title: "Contract Value",
    dataIndex: "ContractValue",
    sorter: {
      compare: (a, b) => {
        a = a.ContractValue.toLowerCase();
        b = b.ContractValue.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Contract Type",
    dataIndex: "ContractType",
    sorter: {
      compare: (a, b) => {
        a = a.ContractType.toLowerCase();
        b = b.ContractType.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Start Date",
    dataIndex: "StartDate",
    sorter: {
      compare: (a, b) => {
        a = a.StartDate.toLowerCase();
        b = b.StartDate.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "End Date",
    dataIndex: "EndDate",
    sorter: {
      compare: (a, b) => {
        a = a.EndDate.toLowerCase();
        b = b.EndDate.toLowerCase();
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
    ContractID: "#1493024",
    Subject: "SEO Proposal",
    Customer: "NovaWave LLC",
    Image: "company-icon-01.svg",
    ContractValue: "$2,05,426",
    ContractType: "Contracts under Seal",
    StartDate: "15 Aug 2024",
    EndDate: "15 May 2024",
  },
  {
    key: "2",
    ContractID: "#1493023",
    Subject: "Web Design",
    Customer: "Redwood Inc",
    Image: "company-icon-10.svg",
    ContractValue: "$2,105",
    ContractType: "Implied Contracts",
    StartDate: "15 Sep 2024",
    EndDate: "15 Apr 2024",
  },
  {
    key: "3",
    ContractID: "#1493022",
    Subject: "Logo & Branding",
    Customer: "HarborView",
    Image: "company-icon-08.svg",
    ContractValue: "$4,05,656",
    ContractType: "Implied Contracts",
    StartDate: "15 Nov 2024",
    EndDate: "15 Mar 2024",
  },
  {
    key: "4",
    ContractID: "#1493021",
    Subject: "Development",
    Customer: "CoastalStar Co.",
    Image: "company-icon-07.svg",
    ContractValue: "$2,05,426",
    ContractType: "Executory Contracts",
    StartDate: "15 Jun 2024",
    EndDate: "15 Feb 2024",
  },
  {
    key: "5",
    ContractID: "#1493020",
    Subject: "SEO Proposal",
    Customer: "RiverStone Ventur",
    Image: "company-icon-05.svg",
    ContractValue: "$3,15,145",
    ContractType: "Voidable Contracts",
    StartDate: "15 Oct 2024",
    EndDate: "15 Jan 2024",
  },
  {
    key: "6",
    ContractID: "#1493019",
    Subject: "Web Design",
    Customer: "Summit Peak",
    Image: "company-icon-04.svg",
    ContractValue: "$6,154",
    ContractType: "Unilateral Contracts",
    StartDate: "08 Aug 2024",
    EndDate: "15 Dec 2023",
  },
  {
    key: "7",
    ContractID: "#1493018",
    Subject: "Logo",
    Customer: "Silver Hawk",
    Image: "company-icon-03.svg",
    ContractValue: "$1,457",
    ContractType: "Unconscionable",
    StartDate: "25 Jan 2025",
    EndDate: "15 Nov 2023",
  },
  {
    key: "8",
    ContractID: "#1493017",
    Subject: "Branding",
    Customer: "BlueSky Industries",
    Image: "company-icon-02.svg",
    ContractValue: "$2,01,464",
    ContractType: "Express Contracts",
    StartDate: "12 Aug 2024",
    EndDate: "15 Sep 2023",
  },
  {
    key: "9",
    ContractID: "#1493018",
    Subject: "Development",
    Customer: "Golden Gate Ltd",
    Image: "company-icon-09.svg",
    ContractValue: "$1,10,145",
    ContractType: "Contracts under Seal",
    StartDate: "07 Dec 2024",
    EndDate: "15 Aug 2023",
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
      title: "Contracts",
    };
  },
};
</script>
