<template>
  <a-table
    class="stripped table-hover"
    :columns="columns"
    :data-source="data"
    :row-selection="rowSelection"
  >
    <template #bodyCell="{ column, record }">
      <template v-if="column.key === 'Star'">
        <div class="set-star rating-select"><i class="fa fa-star"></i></div>
      </template>
      <template v-else-if="column.key === 'Name'">
        <h2 class="d-flex align-items-center">
          <router-link to="/crm/project-details" class="avatar avatar-sm border me-2"
            ><img
              class="w-auto h-auto"
              :src="require(`@/assets/img/priority/${record.pro_img}`)"
              alt="User Image" /></router-link
          ><router-link
            to="/crm/project-details"
            >{{ record.name }}</router-link
          >
        </h2>
      </template>
      <template v-else-if="column.key === 'Client'">
        <h2 class="d-flex align-items-center">
          <router-link to="/crm/company-details" class="avatar avatar-sm border me-2"
            ><img
              class="w-auto h-auto"
              :src="require(`@/assets/img/icons/${record.client_img}`)"
              alt="User Image" /></router-link
          ><router-link
            to="/crm/company-details"
            >{{ record.client }}</router-link
          >
        </h2>
      </template>
      <template v-else-if="column.key === 'Priority'">
        <span :class="record.priorityclass"
          ><i class="ti ti-square-rounded-filled"></i>{{ record.priority }}</span
        >
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
        <span :class="record.statusclass">{{ record.status }}</span>
      </template>
      <template v-else-if="column.key === 'action'">
        <div class="dropdown table-action">
          <a href="javascript:;" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"
            ><i class="fa fa-ellipsis-v"></i
          ></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item " data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit" href="#"
              ><i class="ti ti-edit text-blue"></i> Edit</a
            ><a
              class="dropdown-item"
              href="javascript:;"
              data-bs-toggle="modal"
              data-bs-target="#delete_project"
              ><i class="ti ti-trash text-danger"></i> Delete</a
            ><a class="dropdown-item" href="javascript:void(0);"
              ><i class="ti ti-clipboard-copy text-green"></i> Clone this Project</a
            ><a class="dropdown-item" href="javascript:void(0);"
              ><i class="ti ti-printer text-info"></i> Print</a
            ><a class="dropdown-item" href="javascript:void(0);"
              ><i class="ti ti-subtask"></i> Add New Task</a
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
    name: "Truelysell",
    client: "NovaWave LLC",
    pro_img: "truellysel.svg",
    client_img: "company-icon-01.svg",
    priority: "High",
    priorityclass: "priority badge badge-tag badge-danger-light",
    start_date: "25 Sep 2023",
    end_date: "15 Oct 2023",
    stage: "Plan",
    stageclass: "progress-bar progress-bar-violet",
    type: "Web App",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    id: "2",
    name: "Dreamschat",
    client: "BlueSky Industries",
    pro_img: "dreamchat.svg",
    client_img: "company-icon-02.svg",
    priority: "Medium",
    priorityclass: "priority badge badge-tag badge-warning-light",
    start_date: "29 Sep 2023",
    end_date: "19 Oct 2023",
    stage: "Develop",
    stageclass: "progress-bar progress-bar-info",
    type: "Web App",
    status: "Inactive",
    statusclass: "badge badge-pill badge-status bg-danger",
  },
  {
    id: "3",
    name: "Truelysell",
    client: "SilverHawk",
    pro_img: "truellysell.svg",
    client_img: "company-icon-03.svg",
    priority: "High",
    priorityclass: "priority badge badge-tag badge-danger-light",
    start_date: "05 Oct 2023",
    end_date: "12 Oct 2023",
    stage: "Completed",
    stageclass: "progress-bar progress-bar-success",
    type: "Web App",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    id: "4",
    name: "Servbook",
    client: "SummitPeak",
    pro_img: "servbook.svg",
    client_img: "company-icon-04.svg",
    priority: "Medium",
    priorityclass: "priority badge badge-tag badge-warning-light",
    start_date: "14 Oct 2023",
    end_date: "24 Oct 2023",
    stage: "Design",
    stageclass: "progress-bar progress-bar-warning",
    type: "Web App",
    status: "Inactive",
    statusclass: "badge badge-pill badge-status bg-danger",
  },
  {
    id: "5",
    name: "DreamPOS",
    client: "RiverStone Ventur",
    pro_img: "dream-pos.svg",
    client_img: "company-icon-05.svg",
    priority: "Low",
    priorityclass: "priority badge badge-tag badge-success-light",
    start_date: "15 Nov 2023",
    end_date: "22 Nov 2023",
    stage: "Design",
    stageclass: "progress-bar progress-bar-warning",
    type: "Web App",
    status: "Inactive",
    statusclass: "badge badge-pill badge-status bg-danger",
  },
  {
    id: "6",
    name: "Kofejob",
    client: "CoastalStar Co.",
    pro_img: "project-01.svg",
    client_img: "company-icon-06.svg",
    priority: "High",
    priorityclass: "priority badge badge-tag badge-danger-light",
    start_date: "25 Nov 2023",
    end_date: "09 Dec 2023",
    stage: "Develop",
    stageclass: "progress-bar progress-bar-info",
    type: "Meeting",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    id: "7",
    name: "Doccure",
    client: "HarborView",
    pro_img: "project-02.svg",
    client_img: "company-icon-07.svg",
    priority: "Medium",
    priorityclass: "priority badge badge-tag badge-warning-light",
    start_date: "08 Dec 2023",
    end_date: "16 Dec 2023",
    stage: "Completed",
    stageclass: "progress-bar progress-bar-success",
    type: "Web App",
    status: "Inactive",
    statusclass: "badge badge-pill badge-status bg-danger",
  },
  {
    id: "8",
    name: "Best@laundry",
    client: "Golden Gate Ltd",
    pro_img: "best.svg",
    client_img: "company-icon-08.svg",
    priority: "Low",
    priorityclass: "priority badge badge-tag badge-success-light",
    start_date: "21 Dec 2023",
    end_date: "13 Jan 2024",
    stage: "Completed",
    stageclass: "progress-bar progress-bar-success",
    type: "Meeting",
    status: "Inactive",
    statusclass: "badge badge-pill badge-status bg-danger",
  },
  {
    id: "9",
    name: "POS",
    client: "CoastalStar Inc",
    pro_img: "dream-pos.svg",
    client_img: "company-icon-06.svg",
    priority: "Medium",
    priorityclass: "priority badge badge-tag badge-warning-light",
    start_date: "01 Jan 2024",
    end_date: "11 Jan 2024",
    stage: "Develop",
    stageclass: "progress-bar progress-bar-info",
    type: "Web App",
    status: "Inactive",
    statusclass: "badge badge-pill badge-status bg-danger",
  },
  {
    id: "10",
    name: "Bookserv",
    client: "Redwood Inc",
    pro_img: "servbook.svg",
    client_img: "company-icon-09.svg",
    priority: "Medium",
    priorityclass: "priority badge badge-tag badge-warning-light",
    start_date: "12 Jan 2024",
    end_date: "29 Jan 2024",
    stage: "Develop",
    stageclass: "progress-bar progress-bar-info",
    type: "Meeting",
    status: "Inactive",
    statusclass: "badge badge-pill badge-status bg-danger",
  },
  {
    id: "11",
    name: "Dreamchat",
    client: "Redwood Inc",
    pro_img: "sports.svg",
    client_img: "company-icon-09.svg",
    priority: "Medium",
    priorityclass: "priority badge badge-tag badge-warning-light",
    start_date: "16 Jan 2024",
    end_date: "25 Jan 2024",
    stage: "Develop",
    stageclass: "progress-bar progress-bar-info",
    type: "Meeting",
    status: "Inactive",
    statusclass: "badge badge-pill badge-status bg-danger",
  },
  {
    id: "12",
    name: "Sports",
    client: "Ventur",
    pro_img: "best.svg",
    client_img: "company-icon-08.svg",
    priority: "Medium",
    priorityclass: "priority badge badge-tag badge-warning-light",
    start_date: "12 Jan 2024",
    end_date: "29 Jan 2024",
    stage: "Develop",
    stageclass: "progress-bar progress-bar-info",
    type: "Web App",
    status: "Inactive",
    statusclass: "badge badge-pill badge-status bg-danger",
  },
];

const columns = [
  {
    key: "Star",
    sorter: false,
  },
  {
    title: "Name",
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
    title: "Client",
    dataIndex: "client",
    key: "Client",
    sorter: {
      compare: (a, b) => {
        a = a.client.toLowerCase();
        b = b.client.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Priority",
    dataIndex: "priority",
    key: "Priority",
    sorter: {
      compare: (a, b) => {
        a = a.priority.toLowerCase();
        b = b.priority.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Start Date",
    dataIndex: "start_date",
    sorter: {
      compare: (a, b) => {
        a = a.start_date.toLowerCase();
        b = b.start_date.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "End Date",
    dataIndex: "end_date",
    sorter: {
      compare: (a, b) => {
        a = a.end_date.toLowerCase();
        b = b.end_date.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Type",
    dataIndex: "type",
    sorter: {
      compare: (a, b) => {
        a = a.type.toLowerCase();
        b = b.type.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Pipeline Stage",
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
  mounted() {
    if (document.getElementsByClassName("edit-popup").length > 0) {
      var addPopups = document.getElementsByClassName("edit-popup");
      for (var i = 0; i < addPopups.length; i++) {
        addPopups[i].addEventListener("click", () => {
          var togglePopup = document.getElementsByClassName("toggle-popup1")[0];
          if (togglePopup) {
            togglePopup.classList.add("sidebar-popup");
          }
        });
      }

      var sidebarCloses = document.getElementsByClassName("sidebar-close1");
      for (var j = 0; j < sidebarCloses.length; j++) {
        sidebarCloses[j].addEventListener("click", () => {
          var togglePopup = document.getElementsByClassName("toggle-popup1")[0];
          if (togglePopup) {
            togglePopup.classList.remove("sidebar-popup");
          }
        });
      }
    }
  },
};
</script>
