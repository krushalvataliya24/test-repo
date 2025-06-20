<template>
  <layouts-header></layouts-header>
  <layouts-sidebar></layouts-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- Page Header -->
          <div class="page-header">
            <div class="row align-items-center">
              <div class="col-sm-8">
                <h4 class="page-title">
                  Delete Account Request<span class="count-title">123</span>
                </h4>
              </div>
              <div class="col-sm-4 text-sm-end">
                <div class="head-icons">
                  <router-link
                    to="delete-request"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    data-bs-original-title="Refresh"
                    ><i class="ti ti-refresh-dot"></i
                  ></router-link>
                  <a
                    href="javascript:void(0);"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    data-bs-original-title="Collapse"
                    id="collapse-header"
                    ><i class="ti ti-chevrons-up"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <!-- /Page Header -->

          <div class="card">
            <div class="card-header">
              <!-- Search -->
              <div class="row align-items-center">
                <div class="col-sm-4">
                  <div class="icon-form mb-3 mb-sm-0">
                    <span class="form-icon"><i class="ti ti-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search User" />
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
            <div class="card-body">
              <!-- Filter -->
              <delete-filter></delete-filter>
              <!-- /Filter -->

              <!-- Delete Request List -->
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
                    <template v-else-if="column.key === 'UserName'">
                      <h2 class="d-flex align-items-center">
                        <a href="javascript:void(0);" class="avatar avatar-sm me-2"
                          ><img
                            class="w-auto h-auto"
                            :src="require(`@/assets/img/profiles/${record.Image}`)"
                            alt="User Image" /></a
                        ><a href="javascript:void(0);" class="d-flex flex-column"
                          >{{ record.UserName }}
                          <span class="text-default">{{ record.Posting }}</span></a
                        >
                      </h2>
                    </template>
                    <template v-else-if="column.key === 'action'">
                      <span
                        class="badge badge-tag badge-success-light"
                        data-bs-toggle="modal"
                        data-bs-target="#delete_account"
                        >Confirm</span
                      >
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
              <!-- /Delete Request List -->
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
    title: "UserName",
    dataIndex: "UserName",
    key: "UserName",
    sorter: {
      compare: (a, b) => {
        a = a.UserName.toLowerCase();
        b = b.UserName.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Requisition Date",
    dataIndex: "RequisitionDate",
    sorter: {
      compare: (a, b) => {
        a = a.RequisitionDate.toLowerCase();
        b = b.RequisitionDate.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Delete Request Date",
    dataIndex: "DeleteRequestDate",
    key: "DeleteRequestDate",
    sorter: {
      compare: (a, b) => {
        a = a.DeleteRequestDate.toLowerCase();
        b = b.DeleteRequestDate.toLowerCase();
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
    key: 1,
    UserName: "Darlee Robertson",
    Posting: "Facility Manager",
    RequisitionDate: "25 Sep 2023, 12:12 pm",
    Image: "avatar-19.jpg",
    DeleteRequestDate: "25 Sep 2023, 12:12 pm",
  },
  {
    key: 2,
    UserName: "Sharon Roy",
    Posting: "Installer",
    RequisitionDate: "27 Sep 2023, 07:40 am",
    Image: "avatar-20.jpg",
    DeleteRequestDate: "27 Sep 2023, 07:40 am",
  },
  {
    key: 3,
    UserName: "Vaughan",
    Posting: "Senior Manager",
    RequisitionDate: "29 Sep 2023, 08:20 am",
    Image: "avatar-21.jpg",
    DeleteRequestDate: "29 Sep 2023, 08:20 am",
  },
  {
    key: 4,
    UserName: "Jessica",
    Posting: "Test Engineer",
    RequisitionDate: "25 Sep 2023, 12:12 pm",
    Image: "avatar-23.jpg",
    DeleteRequestDate: "25 Sep 2023, 12:12 pm",
  },
  {
    key: 5,
    UserName: "Carol Thomas",
    Posting: "UI /UX Designer",
    RequisitionDate: "02 Oct 2023, 10:10 am",
    Image: "avatar-16.jpg",
    DeleteRequestDate: "02 Oct 2023, 10:10 am",
  },
  {
    key: 6,
    UserName: "Dawn Mercha",
    Posting: "Technician",
    RequisitionDate: "17 Oct 2023, 04:25 pm",
    Image: "avatar-22.jpg",
    DeleteRequestDate: "17 Oct 2023, 04:25 pm",
    Action: "Confirm",
  },
  {
    key: 7,
    UserName: "Rachel Hampton",
    Posting: "Software Developer",
    RequisitionDate: "28 Oct 2023, 07:16 am",
    Image: "avatar-24.jpg",
    DeleteRequestDate: "28 Oct 2023, 07:16 am",
  },
  {
    key: 8,
    UserName: "Jonelle Curtiss",
    Posting: "Supervisor",
    RequisitionDate: "08 Nov 2023, 06:10 am",
    Image: "avatar-25.jpg",
    DeleteRequestDate: "08 Nov 2023, 06:10 am",
  },
  {
    key: 9,
    UserName: "Jonathan",
    Posting: "Team Lead Dev",
    RequisitionDate: "15 Nov 2023, 11:50 am",
    Image: "avatar-26.jpg",
    DeleteRequestDate: "15 Nov 2023, 11:50 am",
  },
  {
    key: 10,
    UserName: "Brook",
    Posting: "Team Lead Dev",
    RequisitionDate: "25 Nov 2023, 06:34 pm",
    Image: "avatar-01.jpg",
    DeleteRequestDate: "25 Nov 2023, 06:34 pm",
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
      data,
      columns,
      rowSelection,
    };
  },
};
</script>
