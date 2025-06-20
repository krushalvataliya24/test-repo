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

          <div class="card ">
            <div class="card-header">
              <!-- Search -->
              <div class="row align-items-center">
                <div class="col-sm-4">
                  <div class="icon-form mb-3 mb-sm-0">
                    <span class="form-icon"><i class="ti ti-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search Estimations">
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
                    <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add" ><i class="ti ti-square-rounded-plus me-2"></i>Add Estimations</a>
                  </div>
                </div>
              </div>
              <!-- /Search -->
            </div>
            <div class="card-body">

              <!-- Filter -->
              <estimations-filter></estimations-filter>
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
                    <template v-if="column.key === 'Star'">
                      <div class="set-star rating-select">
                        <i class="fa fa-star"></i>
                      </div>
                    </template>
                    <template v-if="column.key === 'EstimationsID'"
                      ><a href="#" :class="record.IdClass">{{
                        record.EstimationsID
                      }}</a></template
                    >
                    <template v-else-if="column.key === 'Client'">
                      <h2 class="d-flex align-items-center">
                        <router-link to="/crm/company-details" class="avatar avatar-sm border me-2">
                          <img
                            class="w-auto h-auto"
                            :src="require(`@/assets/img/icons/${record.ClientImage}`)"
                            alt="User Image"
                          />
                        </router-link>
                        <router-link
                          to="/crm/company-details"
                          >{{ record.Client }}</router-link
                        >
                      </h2>
                    </template>
                    <template v-else-if="column.key === 'Project'">
                      <h2 class="d-flex align-items-center">
                        <a href="#" class="avatar avatar-sm border me-2">
                          <img
                            class="w-auto h-auto"
                            :src="require(`@/assets/img/priority/${record.ProjectImage}`)"
                            alt="User Image"
                          />
                        </a>
                        <a href="#">{{
                          record.Project
                        }}</a>
                      </h2>
                    </template>
                    <template v-else-if="column.key === 'EstimationBy'">
                      <h2 class="d-flex align-items-center">
                        <a href="#" class="avatar avatar-sm me-2">
                          <img
                            class="w-auto h-auto"
                            :src="require(`@/assets/img/profiles/${record.AvatarImage}`)"
                            alt="User Image"
                          />
                        </a>
                        <a
                          href="javascript:void(0);" class="d-flex flex-column"
                          >{{ record.EstimationBy }}<span class="text-default">{{ record.Role }} </span>
                        </a>
                      </h2>
                    </template>
                    <template v-else-if="column.key === 'Status'">
                      <span :class="record.StatusClass">{{ record.Status }}</span>
                    </template>
                    <template v-else-if="column.key === 'action'">
                      <div class="dropdown table-action">
                        <a
                          href="#"
                          class="action-icon"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <i class="fa fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit">
                            <i class="ti ti-edit text-blue"></i> Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_estimations"
                            ><i class="ti ti-trash text-danger"></i>Delete</a
                          >
                          <a class="dropdown-item" href="javascript:void(0);"
                            ><i class="ti ti-clipboard-copy text-violet"></i> View
                            Estimation</a
                          >
                          <a class="dropdown-item" href="javascript:void(0);"
                            ><i class="ti ti-checks text-green"></i> Mark as Accpeted</a
                          >
                          <a class="dropdown-item" href="javascript:void(0);"
                            ><i class="ti ti-file"></i> Mark as Draft</a
                          >
                          <a class="dropdown-item" href="javascript:void(0);"
                            ><i class="ti ti-sticker text-blue"></i> Mark as Declined</a
                          >
                          <a class="dropdown-item" href="javascript:void(0);"
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
  <estimations-modal></estimations-modal>
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
    title: "Estimations ID",
    dataIndex: "EstimationsID",
    key: "EstimationsID",
    sorter: {
      compare: (a, b) => {
        a = a.EstimationsID.toLowerCase();
        b = b.EstimationsID.toLowerCase();
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
    title: "Expiry Date",
    dataIndex: "ExpiryDate",
    sorter: {
      compare: (a, b) => {
        a = a.ExpiryDate.toLowerCase();
        b = b.ExpiryDate.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Estimation By",
    dataIndex: "EstimationBy",
    key: "EstimationBy",
    sorter: {
      compare: (a, b) => {
        a = a.EstimationBy.toLowerCase();
        b = b.EstimationBy.toLowerCase();
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
    ClientImage: "company-icon-01.svg",
    ProjectImage: "truellysel.svg",
    AvatarImage: "avatar-19.jpg",
    EstimationsID: "#274738",
    IdClass: "add-popups-sent",
    Client: "NovaWave LLC",
    Amount: "$2,15,000",
    Project: "Truelysell",
    Date: "15 Oct 2023",
    ExpiryDate: "25 Sep 2023",
    EstimationBy: "Darlee Robertson",
    Role: "Facility Manager",
    StatusClass: "badge badge-pill badge-status bg-violet",
    Status: "Sent",
  },
  {
    key: "2",
    ClientImage: "company-icon-02.svg",
    ProjectImage: "dreamchat.svg",
    AvatarImage: "avatar-20.jpg",
    EstimationsID: "#274737",
    IdClass: "add-popups",
    Client: "BlueSky Industries",
    Amount: "$1,45,000",
    Project: "Dreamschat",
    Date: "19 Oct 2023",
    ExpiryDate: "10 Sep 2028",
    EstimationBy: "Sharon Roy",
    Role: "Installer",
    StatusClass: "badge badge-pill badge-status bg-success",
    Status: "Accepted",
  },
  {
    key: "3",
    ClientImage: "company-icon-03.svg",
    ProjectImage: "truellysell.svg",
    AvatarImage: "avatar-21.jpg",
    EstimationsID: "#274736",
    IdClass: "add-popups-draft",
    Client: "Silver Hawk",
    Amount: "$2,15,000",
    Project: "Truelysell",
    Date: "24 Oct 2023",
    ExpiryDate: "20 Oct 2026",
    EstimationBy: "Vaughan",
    Role: "Senior Manager",
    StatusClass: "badge badge-pill badge-status bg-warning",
    Status: "Draft",
  },
  {
    key: "4",
    ClientImage: "company-icon-04.svg",
    ProjectImage: "servbook.svg",
    AvatarImage: "avatar-23.jpg",
    EstimationsID: "#274735",
    IdClass: "add-popups",
    Client: "Summit Peak",
    Amount: "$4,80,380",
    Project: "Servbook",
    Date: "10 Nov 2023",
    ExpiryDate: "07 Oct 2028",
    EstimationBy: "Jessica",
    Role: "Test Engineer",
    StatusClass: "badge badge-pill badge-status bg-success",
    Status: "Accepted",
  },
  {
    key: "5",
    ClientImage: "company-icon-05.svg",
    ProjectImage: "dream-pos.svg",
    AvatarImage: "avatar-16.jpg",
    EstimationsID: "#274734",
    IdClass: "add-popups-declined",
    Client: "RiverStone Ventur",
    Amount: "$2,12,000",
    Project: "DreamPOS",
    Date: "18 Nov 2023",
    ExpiryDate: "10 Oct 2026",
    EstimationBy: "Carol Thomas",
    Role: "UI /UX Designer",
    StatusClass: "badge badge-pill badge-status bg-danger",
    Status: "Declined",
  },
  {
    key: "6",
    ClientImage: "company-icon-07.svg",
    ProjectImage: "project-01.svg",
    AvatarImage: "avatar-22.jpg",
    EstimationsID: "#274733",
    IdClass: "add-popups-draft",
    Client: "CoastalStar Co.",
    Amount: "$3,50,000",
    Project: "Kofejob",
    Date: "20 Nov 2023",
    ExpiryDate: "18 Oct 2027",
    EstimationBy: "Dawn Mercha",
    Role: "Technician",
    StatusClass: "badge badge-pill badge-status bg-warning",
    Status: "Draft",
  },
  {
    key: "7",
    ClientImage: "company-icon-08.svg",
    ProjectImage: "project-02.svg",
    AvatarImage: "avatar-24.jpg",
    EstimationsID: "#274732",
    IdClass: "add-popups-sent",
    Client: "HarborView",
    Amount: "$1,23,000",
    Project: "Doccure",
    Date: "07 Dec 2023",
    ExpiryDate: "05 Nov 2026",
    EstimationBy: "Rachel Hampton",
    Role: "Software Developer",
    StatusClass: "badge badge-pill badge-status bg-violet",
    Status: "Sent",
  },
  {
    key: "8",
    ClientImage: "company-icon-09.svg",
    ProjectImage: "best.svg",
    AvatarImage: "avatar-24.jpg",
    EstimationsID: "#274731",
    IdClass: "add-popups",
    Client: "Golden Gate Ltd",
    Amount: "$3,12,50",
    Project: "Best@laundry",
    Date: "14 Dec 2023",
    ExpiryDate: "11 Nov 2028",
    EstimationBy: "Jonelle Curtiss",
    Role: "Supervisor",
    StatusClass: "badge badge-pill badge-status bg-success",
    Status: "Accepted",
  },
  {
    key: "9",
    ClientImage: "company-icon-10.svg",
    ProjectImage: "project-01.svg",
    AvatarImage: "avatar-26.jpg",
    EstimationsID: "#274730",
    IdClass: "add-popups-declined",
    Client: "Golden Gate Ltd",
    Amount: "$4,18,000",
    Project: "Dreamsports",
    Date: "22 Dec 2023",
    ExpiryDate: "20 Nov 2027",
    EstimationBy: "Jonathan",
    Role: "Team Lead Dev",
    StatusClass: "badge badge-pill badge-status bg-danger",
    Status: "Declined",
  },
  {
    key: "10",
    ClientImage: "company-icon-01.svg",
    ProjectImage: "truellysel.svg",
    AvatarImage: "avatar-01.jpg",
    EstimationsID: "#274729",
    IdClass: "add-popups",
    Client: "NovaWave LLC",
    Amount: "$4,80,380",
    Project: "Truelysell",
    Date: "28 Dec 2023",
    ExpiryDate: "25 Nov 2026",
    EstimationBy: "Brook",
    Role: "Team Lead Dev",
    StatusClass: "badge badge-pill badge-status bg-success",
    Status: "Accepted",
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
      title: "Estimations",
    };
  },
};
</script>
