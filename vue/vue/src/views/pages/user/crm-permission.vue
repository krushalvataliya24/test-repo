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
                <h4 class="page-title">Permission</h4>
              </div>
              <div class="col-4 text-end">
                <div class="head-icons">
                  <router-link
                    to="/user/permission"
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
              <div class="row">
                <div class="col-md-5 col-sm-4">
                  <div class="mb-3 mb-sm-0">
                    <h4>Role Name : <span class="text-danger">Admin</span></h4>
                  </div>
                </div>
                <div class="col-md-7 col-sm-8">
                  <div class="text-sm-end">
                    <label
                      class="checkboxs d-flex align-items-center justify-content-sm-end"
                      ><input type="checkbox" /><span
                        class="checkmarks position-relative d-flex me-2"
                      ></span
                      >Allow All Modules</label
                    >
                  </div>
                </div>
              </div>
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
                    <template v-if="column.key === 'Modules'">
                      <div>{{ record.Modules }}</div>
                    </template>
                    <template v-else-if="column.key === 'Create'">
                      <div>
                        <label class="checkboxs"
                          ><input type="checkbox" /><span class="checkmarks"></span
                        ></label>
                      </div>
                    </template>
                    <template v-else-if="column.key === 'Edit'">
                      <label class="checkboxs"
                        ><input type="checkbox" /><span class="checkmarks"></span
                      ></label>
                    </template>
                    <template v-else-if="column.key === 'View'">
                      <label class="checkboxs"
                        ><input type="checkbox" /><span class="checkmarks"></span
                      ></label>
                    </template>
                    <template v-else-if="column.key === 'Delete'">
                      <label class="checkboxs"
                        ><input type="checkbox" /><span class="checkmarks"></span
                      ></label>
                    </template>
                    <template v-else-if="column.key === 'AllowAll'">
                      <label class="checkboxs"
                        ><input type="checkbox" /><span class="checkmarks"></span
                      ></label>
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
</template>
<script>
const columns = [
  {
    title: "",
    dataIndex: "",
    sorter: false,
  },
  {
    title: "Modules",
    dataIndex: "Modules",
    key: "Modules",
    sorter: {
      compare: (a, b) => {
        a = a.Modules.toLowerCase();
        b = b.Modules.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Sub Module",
    dataIndex: "SubModules",
    sorter: {
      compare: (a, b) => {
        a = a.SubModules.toLowerCase();
        b = b.SubModules.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Create",
    dataIndex: "Create",
    key: "Create",
    sorter: {
      compare: (a, b) => {
        a = a.Create.toLowerCase();
        b = b.Create.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Edit",
    dataIndex: "Edit",
    key: "Edit",
    sorter: {
      compare: (a, b) => {
        a = a.Edit.toLowerCase();
        b = b.Edit.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "View",
    dataIndex: "View",
    key: "View",
    sorter: {
      compare: (a, b) => {
        a = a.View.toLowerCase();
        b = b.View.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Delete",
    dataIndex: "Delete",
    key: "Delete",
    sorter: {
      compare: (a, b) => {
        a = a.Delete.toLowerCase();
        b = b.Delete.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Allow All",
    dataIndex: "AllowAll",
    key: "AllowAll",
    sorter: {
      compare: (a, b) => {
        a = a.AllowAll.toLowerCase();
        b = b.AllowAll.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "",
    key: "action",
    sorter: true,
  },
];
const data = [
  {
    key: 1,
    Modules: "Dashboard",
    SubModules: "Dashboard",
  },
  {
    key: 2,
    Modules: "Contacts",
    SubModules: "Contacts",
  },
  {
    key: 3,
    Modules: "Companies",
    SubModules: "Companies",
  },
  {
    key: 4,
    Modules: "Leads",
    SubModules: "Leads",
  },
  {
    key: 5,
    Modules: "Deals",
    SubModules: "Deals",
  },
  {
    key: 6,
    Modules: "Pipelines",
    SubModules: "Pipelines",
  },
  {
    key: 7,
    Modules: "Compaign",
    SubModules: "Compaign",
  },
  {
    key: 8,
    Modules: "Projects",
    SubModules: "Projects",
  },
  {
    key: 9,
    Modules: "Tasks",
    SubModules: "Tasks",
  },
  {
    key: 10,
    Modules: "Activity",
    SubModules: "Activity",
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
