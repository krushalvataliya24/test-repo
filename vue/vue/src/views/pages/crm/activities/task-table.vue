<template>
  <a-table
    class="table thead-light"
    :columns="columns"
    :data-source="data"
    :row-selection="rowSelection"
  >
    <template #bodyCell="{ column, record }">
      <template v-if="column.key === 'Activity_Type'">
        <div>
          <span :class="record.statusclass"
            ><i :class="record.icon"></i>{{ record.status }}</span
          >
        </div>
      </template>
      <template v-else-if="column.key === 'action'">
        <div class="dropdown table-action">
          <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"
            ><i class="fa fa-ellipsis-v"></i
          ></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a
              class="dropdown-item"
              href="#"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvas_edit"
              ><i class="ti ti-edit text-blue"></i> Edit</a
            ><a
              class="dropdown-item"
              href="#"
              data-bs-toggle="modal"
              data-bs-target="#delete_activity"
              ><i class="ti ti-trash text-danger"></i> Delete</a
            >
          </div>
        </div>
      </template>
    </template>
  </a-table>
</template>

<script>
const data = [
  {
    id: "1",
    title: "Store and manage contact data",
    due_date: "19 Oct 2023, 02:35 pm",
    owner: "Swaniawski",
    created_date: "14 Oct 2023, 01:25 pm",
    icon: "ti ti-subtask",
    status: "Tasks",
    statusclass: "badge activity-badge bg-blue",
  },
  {
    id: "2",
    title: "Built landing pages",
    due_date: "25 Nov 2023, 01:40 pm",
    owner: "Danny",
    created_date: "20 Nov 2023, 08:20 am",
    icon: "ti ti-subtask",
    status: "Tasks",
    statusclass: "badge activity-badge bg-blue",
  },
];

const columns = [
  {
    title: "Title",
    dataIndex: "title",
    sorter: {
      compare: (a, b) => {
        a = a.title.toLowerCase();
        b = b.title.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Activity Type",
    dataIndex: "status",
    key: "Activity_Type",
    sorter: {
      compare: (a, b) => {
        a = a.status.toLowerCase();
        b = b.status.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Due Date",
    dataIndex: "due_date",
    sorter: {
      compare: (a, b) => {
        a = a.due_date.toLowerCase();
        b = b.due_date.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Owner",
    dataIndex: "owner",
    sorter: {
      compare: (a, b) => {
        a = a.owner.toLowerCase();
        b = b.owner.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Created At",
    dataIndex: "created_date",
    sorter: {
      compare: (a, b) => {
        a = a.created_date.toLowerCase();
        b = b.created_date.toLowerCase();
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
    };
  },
};
</script>
