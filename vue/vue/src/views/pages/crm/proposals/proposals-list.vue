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

              <!-- Projects List -->
              <div class="table-responsive custom-table">
                <a-table
                  :columns="columns"
                  :data-source="data"
                  :row-selection="rowSelection"
                >
                  <template #bodyCell="{ column, record }">
                    <template v-if="column.key === 'Proposals_ID'">
                      <div>
                        <a href="#" class="title-name add-popups">{{
                          record.Proposals_ID
                        }}</a>
                      </div>
                    </template>
                    <template v-if="column.key === 'Subject'">
                      <div>
                        <a href="#" class="title-name">{{ record.Subject }}</a>
                      </div>
                    </template>
                    <template v-else-if="column.key === 'Send_To'">
                      <h2 class="d-flex align-items-center">
                        <router-link to="/crm/company-details" class="avatar avatar-sm border me-2"
                          ><img
                            class="w-auto h-auto"
                            :src="require(`@/assets/img/icons/${record.Send_Image}`)"
                            alt="User Image" /></router-link
                        ><router-link
                          to="/crm/company-details"
                          >{{ record.Send_To }}</router-link
                        >
                      </h2>
                    </template>
                    <template v-else-if="column.key === 'Project'">
                      <h2 class="d-flex align-items-center">
                        <a href="#" class="avatar avatar-sm border me-2"
                          ><img
                            class="w-auto h-auto"
                            :src="
                              require(`@/assets/img/priority/${record.Project_Image}`)
                            "
                            alt="User Image" /></a
                        ><a href="#">{{
                          record.Project
                        }}</a>
                      </h2>
                    </template>
                    <template v-else-if="column.key === 'Status'">
                      <span :class="record.Status">{{ record.Status }}</span>
                    </template>
                    <template v-else-if="column.key === 'action'">
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
                            data-bs-target="#delete_proposals"
                            ><i class="ti ti-trash text-danger"></i> Delete</a
                          ><a class="dropdown-item" href="javascript:void(0);"
                            ><i class="ti ti-clipboard-copy text-green"></i> View
                            Proposal</a
                          ><a class="dropdown-item" href="javascript:void(0);"
                            ><i class="ti ti-checks text-success"></i> Mark as Accpeted</a
                          ><a class="dropdown-item" href="javascript:void(0);"
                            ><i class="ti ti-file text-tertiary"></i> Mark as Draft</a
                          ><a class="dropdown-item" href="javascript:void(0);"
                            ><i class="ti ti-sticker text-blue"></i> Mark ad Declined</a
                          ><a class="dropdown-item" href="javascript:void(0);"
                            ><i class="ti ti-subtask text-pink"></i> Convert to
                            estimate</a
                          ><a class="dropdown-item" href="javascript:void(0);"
                            ><i class="ti ti-file-invoice text-tertiary"></i> Convert to
                            Invoice</a
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
  <!-- /Page Wrapper -->
  <proposals-modal></proposals-modal>
</template>
<script>
const columns = [
  {
    title: "Proposals ID",
    dataIndex: "Proposals_ID",
    key: "Proposals_ID",
    sorter: {
      compare: (a, b) => {
        a = a.Proposals_ID.toLowerCase();
        b = b.Proposals_ID.toLowerCase();
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
    title: "Send To",
    dataIndex: "Send_To",
    key: "Send_To",
    sorter: {
      compare: (a, b) => {
        a = a.Send_To.toLowerCase();
        b = b.Send_To.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Total Value",
    dataIndex: "Total_Value",
    sorter: {
      compare: (a, b) => {
        a = a.Total_Value.toLowerCase();
        b = b.Total_Value.toLowerCase();
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
    title: "Open Till",
    dataIndex: "Open_till",
    sorter: {
      compare: (a, b) => {
        a = a.Open_till.toLowerCase();
        b = b.Open_till.toLowerCase();
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
    title: "Created Date",
    dataIndex: "Created_Date",
    sorter: {
      compare: (a, b) => {
        a = a.Created_Date.toLowerCase();
        b = b.Created_Date.toLowerCase();
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
    key: "1",
    Proposals_ID: "#1493024",
    Subject: "SEO Proposal",
    Send_To: "NovaWave LLC",
    Send_Image: "company-icon-01.svg",
    Total_Value: "$2,05,426",
    Date: "15 May 2024",
    Open_till: "15 Aug 2023",
    Project: "Truelysell",
    Project_Image: "truellysel.svg",
    Created_Date: "21 May 2024",
    Status_Class: "badge badge-pill badge-status bg-success",
    Status: "Accepted",
  },
  {
    key: "2",
    Proposals_ID: "#1493023",
    Subject: "Web Design",
    Send_To: "Redwood Inc",
    Send_Image: "company-icon-10.svg",
    Total_Value: "$2,105",
    Date: "16 Jan 2024",
    Open_till: "15 Sep 2024",
    Project: "Dreamsports",
    Project_Image: "project-01.svg",
    Created_Date: "15 Apr 2024",
    Status_Class: "badge badge-pill badge-status bg-warning",
    Status: "Declined",
  },
  {
    key: "3",
    Proposals_ID: "#1493022",
    Subject: "Logo & Branding",
    Send_To: "HarborView",
    Send_Image: "company-icon-08.svg",
    Total_Value: "$4,05,656",
    Date: "17 Sep 2024",
    Open_till: "15 Nov 2024",
    Project: "Best@laundry",
    Project_Image: "best.svg",
    Created_Date: "12 Mar 2024",
    Status_Class: "badge badge-pill badge-status bg-danger",
    Status: "Deleted",
  },
  {
    key: "4",
    Proposals_ID: "#1493021",
    Subject: "Development",
    Send_To: "CoastalStar Co.",
    Send_Image: "company-icon-07.svg",
    Total_Value: "$2,05,426",
    Date: "18 May 2024",
    Open_till: "15 Jun 2024",
    Project: "Doccure",
    Project_Image: "project-02.svg",
    Created_Date: "15 Feb 2024",
    Status_Class: "badge badge-pill badge-status bg-pending",
    Status: "Draft",
  },
  {
    key: "5",
    Proposals_ID: "#1493020",
    Subject: "SEO Proposal",
    Send_To: "RiverStone Ventur",
    Send_Image: "company-icon-05.svg",
    Total_Value: "$3,15,145",
    Date: "19 Aug 2024",
    Open_till: "15 Oct 2024",
    Project: "Kofejob",
    Project_Image: "project-01.svg",
    Created_Date: "15 Jan 2024",
    Status_Class: "badge badge-pill badge-status bg-pending",
    Status: "Sent",
  },
  {
    key: "6",
    Proposals_ID: "#1493019",
    Subject: "Web Design",
    Send_To: "Summit Peak",
    Send_Image: "company-icon-04.svg",
    Total_Value: "$6,154",
    Date: "20 May 2024",
    Open_till: "08 Aug 2024",
    Project: "DreamPOS",
    Project_Image: "dream-pos.svg",
    Created_Date: "15 Dec 2023",
    Status_Class: "badge badge-pill badge-status bg-pending",
    Status: "Draft",
  },
  {
    key: "7",
    Proposals_ID: "#1493018",
    Subject: "Logo",
    Send_To: "Silver Hawk",
    Send_Image: "company-icon-03.svg",
    Total_Value: "$1,457",
    Date: "22 Aug 2024",
    Open_till: "25 Jan 2025",
    Project: "Servbook",
    Project_Image: "servbook.svg",
    Created_Date: "15 Nov 2023",
    Status_Class: "badge badge-pill badge-status bg-purple",
    Status: "Paused",
  },
  {
    key: "8",
    Proposals_ID: "#1493017",
    Subject: "Branding",
    Send_To: "BlueSky Industries",
    Send_Image: "company-icon-02.svg",
    Total_Value: "$2,01,464",
    Date: "15 May 2024",
    Open_till: "12 Aug 2024",
    Project: "Truelysell",
    Project_Image: "truellysell.svg",
    Created_Date: "15 Sep 2023",
    Status_Class: "badge badge-pill badge-status bg-success",
    Status: "Accepted",
  },
  {
    key: "9",
    Proposals_ID: "#1493018",
    Subject: "Development",
    Send_To: "Golden Gate Ltd",
    Send_Image: "company-icon-09.svg",
    Total_Value: "$1,10,145",
    Date: "14 Aug 2024",
    Open_till: "07 Dec 2024",
    Project: "Dreamschat",
    Project_Image: "dreamchat.svg",
    Created_Date: "15 Aug 2023",
    Status_Class: "badge badge-pill badge-status bg-danger",
    Status: "Declined",
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
      title: "Proposals",
    };
  },
};
</script>
