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
              <div class="col-8">
                <h4 class="page-title">Roles</h4>
              </div>
              <div class="col-4 text-end">
                <div class="head-icons">
                  <router-link
                    to="/user/roles-permissions"
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
            <!-- Search -->
            <div class="card-header">
              <!-- Search -->
              <div class="row align-items-center">
                <div class="col-sm-4">
                  <div class="icon-form mb-3 mb-sm-0">
                    <span class="form-icon"><i class="ti ti-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search Roles" />
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="text-sm-end">
                    <a
                      href="javascript:void(0);"
                      class="btn btn-primary"
                      data-bs-toggle="modal"
                      data-bs-target="#add_role"
                      ><i class="ti ti-square-rounded-plus me-2"></i>Add New Roles</a
                    >
                  </div>
                </div>
              </div>
              <!-- /Search -->
            </div>
            <!-- /Search -->
            <div class="card-body">
              <!-- Roles List -->
              <div class="table-responsive custom-table">
                <a-table
                  class="table"
                  :columns="columns"
                  :data-source="data"
                  :row-selection="rowSelection"
                >
                  <template #bodyCell="{ column, record }">
                    <template v-if="column.key === 'RoleName'">
                      <div>{{ record.RoleName }}</div>
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
                            data-bs-target="#edit_role"
                            ><i class="ti ti-edit text-blue"></i> Edit</a
                          ><router-link class="dropdown-item" to="/user/permission"
                            ><i class="ti ti-shield text-success"></i>
                            Permission</router-link
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
              <!-- /Roles List -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <roles-permissions-modal></roles-permissions-modal>
</template>
<script>
const columns = [
  {
    title: "",
    dataIndex: "",
    sorter: false,
  },
  {
    title: "Role Name",
    dataIndex: "RoleName",
    key: "RoleName",
    sorter: {
      compare: (a, b) => {
        a = a.RoleName.toLowerCase();
        b = b.RoleName.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Created At",
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
    title: "Action",
    key: "action",
    sorter: true,
  },
];
const data = [
  {
    key: 1,
    RoleName: "Admin",
    CreatedAt: "25 Sep 2023, 12:12 pm",
  },
  {
    key: 2,
    RoleName: "Company Owner",
    CreatedAt: "27 Sep 2023, 07:40 am",
  },
  {
    key: 3,
    RoleName: "Deal Owner",
    CreatedAt: "29 Sep 2023, 08:20 am",
  },
  {
    key: 4,
    RoleName: "Project Manager",
    CreatedAt: "25 Sep 2023, 12:12 pm",
  },
  {
    key: 5,
    RoleName: "Client",
    CreatedAt: "15 Oct 2023, 06:18 pm",
  },
  {
    key: 6,
    RoleName: "Lead",
    CreatedAt: "29 Oct 2023, 03:10 pm",
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
