<template>
  <a-table
    class="stripped table-hover"
    :columns="columns"
    :data-source="data"
    :row-selection="rowSelection"
  >
    <template #bodyCell="{ column, record }">
      <template v-if="column.key === 'Name'">
        <div>
          <span class="title-name">{{ record.name }}</span>
        </div>
      </template>
      <template v-else-if="column.key === 'Stage'">
        <div class="pipeline-progress d-flex align-items-center">
          <div class="progress">
            <div :class="record.stageclass" role="progressbar"></div>
          </div>
          <span>{{ record.stage }}</span>
        </div>
      </template>
      <template v-else-if="column.key === 'Status'">
        <div>
          <span :class="record.statusclass">{{ record.status }}</span>
        </div>
      </template>
      <template v-else-if="column.key === 'action'">
        <div class="dropdown table-action">
          <a href="javascript:;" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"
            ><i class="fa fa-ellipsis-v"></i
          ></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit" href="#"
              ><i class="ti ti-edit text-blue"></i> Edit</a
            ><a
              class="dropdown-item"
              href="javascript:;"
              data-bs-toggle="modal"
              data-bs-target="#delete_pipeline"
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
    name: "Sales",
    deal_value: "$4,50,664",
    no_deal: "315",
    stage: "Win",
    stageclass: "progress-bar progress-bar-success",
    createdate: "25 Sep 2023",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    id: "2",
    name: "Marketing",
    deal_value: "$3,12,893",
    no_deal: "447",
    stage: "Win",
    stageclass: "progress-bar progress-bar-success",
    createdate: "29 Sep 2023",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    id: "3",
    name: "Email",
    deal_value: "$2,89,274",
    no_deal: "654",
    stage: "In Pipeline",
    stageclass: "progress-bar progress-bar-violet",
    createdate: "15 Oct 2023",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    id: "4",
    name: "Chats",
    deal_value: "$1,59,326",
    no_deal: "768",
    stage: "Win",
    stageclass: "progress-bar progress-bar-success",
    createdate: "29 Oct 2023",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    id: "5",
    name: "Operational",
    deal_value: "$2,90,173",
    no_deal: "142",
    stage: "Win",
    stageclass: "progress-bar progress-bar-success",
    createdate: "03 Nov 2023",
    status: "Inactive",
    statusclass: "badge badge-pill badge-status bg-danger",
  },
  {
    id: "6",
    name: "Collaborative",
    deal_value: "$4,51,417",
    no_deal: "315",
    stage: "Conversation",
    stageclass: "progress-bar progress-bar-green",
    createdate: "17 Nov 2023",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    id: "7",
    name: "Differentiate",
    deal_value: "$3,17,589",
    no_deal: "478",
    stage: "Lost",
    stageclass: "progress-bar progress-bar-danger",
    createdate: "23 Nov 2023",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    id: "8",
    name: "Interact ",
    deal_value: "$1,69,146",
    no_deal: "664",
    stage: "Lost",
    stageclass: "progress-bar progress-bar-danger",
    createdate: "09 Dec 2023",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
];

const columns = [
  {
    title: "Pipeline Name",
    dataIndex: "name",
    key: "Name",
    sorter: {
      compare: (a, b) => {
        a = a.name.toLowerCase();
        b = b.name.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Total Deal Value",
    dataIndex: "deal_value",
    sorter: {
      compare: (a, b) => {
        a = a.deal_value.toLowerCase();
        b = b.deal_value.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "No of Deals",
    dataIndex: "no_deal",
    sorter: {
      compare: (a, b) => {
        a = a.no_deal.toLowerCase();
        b = b.no_deal.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Stages",
    dataIndex: "stage",
    key: "Stage",
    sorter: {
      compare: (a, b) => {
        a = a.stage.toLowerCase();
        b = b.stage.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Created Date",
    dataIndex: "createdate",
    sorter: {
      compare: (a, b) => {
        a = a.createdate.toLowerCase();
        b = b.createdate.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Status",
    dataIndex: "status",
    key: "Status",
    sorter: {
      compare: (a, b) => {
        a = a.status.toLowerCase();
        b = b.status.toLowerCase();
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
