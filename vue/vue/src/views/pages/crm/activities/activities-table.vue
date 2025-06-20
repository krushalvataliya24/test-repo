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
    title: "We scheduled a meeting for next week",
    due_date: "25 Sep 2023, 12:12 pm",
    owner: "Hendry",
    created_date: "22 Sep 2023, 10:14 am",
    icon: "ti ti-user-share",
    status: "Meeting",
    statusclass: "badge activity-badge bg-purple",
  },
  {
    id: "2",
    title: "Had conversation with Fred regarding task",
    due_date: "29 Sep 2023, 04:12 pm",
    owner: "Monty Beer",
    created_date: "27 Sep 2023, 03:26 pm",
    icon: "ti ti-phone",
    status: "Calls",
    statusclass: "badge activity-badge bg-green",
  },
  {
    id: "3",
    title: "Analysing latest time estimation for new project",
    due_date: "11 Oct 2023, 05:00 pm",
    owner: "Bradtke",
    created_date: "03 Oct 2023, 03:53 pm",
    icon: "ti ti-mail",
    status: "Email",
    statusclass: "badge activity-badge bg-warning",
  },
  {
    id: "4",
    title: "Store and manage contact data",
    due_date: "19 Oct 2023, 02:35 pm",
    owner: "Swaniawski",
    created_date: "14 Oct 2023, 01:25 pm",
    icon: "ti ti-subtask",
    status: "Tasks",
    statusclass: "badge activity-badge bg-blue",
  },
  {
    id: "5",
    title: "Will have a meeting before project start",
    due_date: "27 Oct 2023, 12:30 pm",
    owner: "Sally",
    created_date: "21 Oct 2023, 03:00 pm",
    icon: "ti ti-user-share",
    status: "Meeting",
    statusclass: "badge activity-badge bg-purple",
  },
  {
    id: "6",
    title: "Call John and discuss about project",
    due_date: "12 Nov 2023, 10:20 pm",
    owner: "Itzel",
    created_date: "02 Nov 2023, 05:35 pm",
    icon: "ti ti-phone",
    status: "Calls",
    statusclass: "badge activity-badge bg-green",
  },
  {
    id: "7",
    title: "Built landing pages",
    due_date: "25 Nov 2023, 01:40 pm",
    owner: "Danny",
    created_date: "20 Nov 2023, 08:20 am",
    icon: "ti ti-subtask",
    status: "Tasks",
    statusclass: "badge activity-badge bg-blue",
  },
  {
    id: "8",
    title: "Regarding latest updates in project",
    due_date: "30 Nov 2023, 09:20 pm",
    owner: " Lynch",
    created_date: "25 Nov 2023, 07:20 pm",
    icon: "ti ti-mail",
    status: "Email",
    statusclass: "badge activity-badge bg-warning",
  },
  {
    id: "9",
    title: "Discussed budget proposal with Edwin",
    due_date: "08 Dec 2023, 04:35 pm",
    owner: "Merwin",
    created_date: "01 Dec 2023, 10:45 am",
    icon: "ti ti-phone",
    status: "Calls",
    statusclass: "badge activity-badge bg-green",
  },
  {
    id: "10",
    title: "Attach final proposal for upcoming project",
    due_date: "19 Dec 2023, 02:20 pm",
    owner: " Andrew",
    created_date: "10 Dec 2023, 06:30 pm",
    icon: "ti ti-mail",
    status: "Email",
    statusclass: "badge activity-badge bg-warning",
  },
  {
    id: "11",
    title: "Discussed budget proposal with Edwin",
    due_date: "26 Dec 2023, 08:30 am",
    owner: "Clausen",
    created_date: "18 Dec 2023, 05:00 pm",
    icon: "ti ti-phone",
    status: "Calls",
    statusclass: "badge activity-badge bg-green",
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
