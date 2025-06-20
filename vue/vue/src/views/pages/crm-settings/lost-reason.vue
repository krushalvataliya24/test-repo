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
                      placeholder="Search Lost Reason"
                    />
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="text-sm-end">
                    <a
                      href="javascript:void(0);"
                      class="btn btn-primary"
                      data-bs-toggle="modal"
                      data-bs-target="#add_reason"
                      ><i class="ti ti-square-rounded-plus me-2"></i>Add New Reason</a
                    >
                  </div>
                </div>
              </div>
              <!-- /Search -->
            </div>
            <!-- /Search -->
            <div class="card-body">
              <!-- Reason List -->
              <div class="table-responsive custom-table">
                <a-table
                  class="table"
                  :columns="columns"
                  :data-source="data"
                  :row-selection="rowSelection"
                >
                  <template #bodyCell="{ column, record }">
                    <template v-if="column.key === 'Title'"
                      ><span class="title-name">{{ record.Title }}</span></template
                    >
                    <template v-else-if="column.key === 'Status'">
                      <span :class="record.Class">{{ record.Status }}</span>
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
                          <a
                            class="dropdown-item"
                            href="javascript:void(0);"
                            data-bs-toggle="modal"
                            data-bs-target="#edit_reason"
                            ><i class="ti ti-edit text-blue"></i> Edit</a
                          ><a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_reason"
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
              <!-- /Reason List -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <lost-reason-modal></lost-reason-modal>
</template>
<script>
const columns = [
  {
    title: "",
    dataIndex: "",
    sorter: false,
  },
  {
    title: "Title",
    dataIndex: "Title",
    key: "Title",
    sorter: {
      compare: (a, b) => {
        a = a.Title.toLowerCase();
        b = b.Title.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "CreatedAt",
    dataIndex: "CreatedAt",
    sorter: {
      compare: (a, b) => {
        a = a.CreatedAt.toLowerCase();
        b = b.CreatedAt.toLowerCase();
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
    key: 1,
    Title: "Client went silent",
    CreatedAt: "25 Sep 2023, 01:22 pm",
    Status: "Active",
    Class: "badge badge-pill badge-status bg-success",
  },
  {
    key: 2,
    Title: "Don't have the budget",
    CreatedAt: "29 Sep 2023, 10:20 pm",
    Status: "Active",
    Class: "badge badge-pill badge-status bg-success",
  },
  {
    key: 3,
    Title: "Doesn't pick up the phone, doesn't respond",
    CreatedAt: "04 Oct 2023, 08:30 am",
    Status: "Active",
    Class: "badge badge-pill badge-status bg-success",
  },
  {
    key: 4,
    Title: "Lack of expertise",
    CreatedAt: "17 Oct 2023, 11:45 am",
    Status: "Inactive",
    Class: "badge badge-pill badge-status bg-danger",
  },
  {
    key: 5,
    Title: "Not responsible",
    CreatedAt: "26 Oct 2023, 04:10 pm",
    Status: "Active",
    Class: "badge badge-pill badge-status bg-success",
  },
  {
    key: 6,
    Title: "They couldn't afford our services",
    CreatedAt: "08 Nov 2023, 05:23 am",
    Status: "Active",
    Class: "badge badge-pill badge-status bg-success",
  },
  {
    key: 7,
    Title: "Went with our competitor",
    CreatedAt: "11 Nov 2023, 02:32 pm",
    Status: "Active",
    Class: "badge badge-pill badge-status bg-success",
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
      title: "Reason",
      data,
      columns,
      rowSelection,
    };
  },
};
</script>
