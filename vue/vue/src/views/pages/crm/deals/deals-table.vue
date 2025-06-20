<template>
  <a-table
    class="stripped table-hover"
    :columns="columns"
    :data-source="data"
    :row-selection="rowSelection"
  >
    <template #bodyCell="{ column, record }">
      <template v-if="column.key === 'Star'">
        <div class="d-flex align-items-center justify-content-center">
          <div class="set-star rating-select">
            <i class="fa fa-star"></i>
          </div>
        </div>
      </template>
      <template v-else-if="column.key === 'Deal_Name'">
        <div>
          <router-link to="/crm/deals-details" class="title-name">{{
            record.Deal_Name
          }}</router-link>
        </div>
      </template>
      <template v-else-if="column.key === 'Tag'">
        <div>
          <span :class="record.Tagclass">{{ record.Tag }}</span>
        </div>
      </template>
      <template v-else-if="column.key === 'Status'">
        <td>
          <span :class="record.StatusClass">{{ record.Status }}</span>
        </td>
      </template>
      <template v-else-if="column.key === 'action'">
        <div class="dropdown table-action">
          <a href="javascript:;" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"
            ><i class="fa fa-ellipsis-v"></i
          ></a>
          <div class="dropdown-menu dropdown-menu-right" style="">
            <a class="dropdown-item" href="javascript:;"
              ><i class="ti ti-bounce-right text-info"></i>Add Activity</a
            ><a class="dropdown-item edit-popup" href="javascript:;"
              ><i class="ti ti-edit text-blue"></i> Edit</a
            ><a
              class="dropdown-item"
              href="javascript:;"
              data-bs-toggle="modal"
              data-bs-target="#delete_deal"
              ><i class="ti ti-trash text-danger"></i> Delete</a
            ><router-link class="dropdown-item" to="/crm/deals-details"
              ><i class="ti ti-eye text-blue-light"></i> Preview</router-link
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
    key: "1",
    Deal_Name: "Collins",
    Stage: "Qualify To Buy",
    Deal_Value: "$04,51,000",
    Tag: "Collab",
    Tagclass: "badge badge-tag badge-success-light",
    Close_date: "25 Sep 2023",
    Owner: "Hendry",
    Probability: "90%",
    Status: "Won",
    StatusClass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "2",
    Deal_Name: "Konopelski",
    Stage: "Proposal Made",
    Deal_Value: "$03,12,500",
    Tag: "Rated",
    Tagclass: "badge badge-tag badge-warning-light",
    Close_date: "29 Sep 2023",
    Owner: "Guillory",
    Probability: "15 %",
    Status: "Lost",
    StatusClass: "badge badge-pill badge-status bg-danger",
  },
  {
    key: "3",
    Deal_Name: "Adams",
    Stage: "Contact Made",
    Deal_Value: "$04,14,800",
    Tag: "Rejected",
    Tagclass: "badge badge-tag badge-danger-light",
    Close_date: "04 Oct 2023",
    Owner: "Jami",
    Probability: "95 %",
    Status: "Won",
    StatusClass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "4",
    Deal_Name: "Schumm",
    Stage: "Qualify To Buy",
    Deal_Value: "$11,14,400",
    Tag: "Collab",
    Tagclass: "badge badge-tag badge-success-light",
    Close_date: "15 Oct 2023",
    Owner: "Therasa",
    Probability: "99 %",
    Status: "Won",
    StatusClass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "5",
    Deal_Name: "Wisozk",
    Stage: "Presentation",
    Deal_Value: "$16,11,400",
    Tag: "Rated",
    Tagclass: "badge badge-tag badge-warning-light",
    Close_date: "27 Oct 2023",
    Owner: "Espinosa",
    Probability: "10 %",
    Status: "Open",
    StatusClass: "badge badge-pill badge-status bg-purple",
  },
  {
    key: "6",
    Deal_Name: "Heller",
    Stage: "Appointment",
    Deal_Value: "$78,11,800",
    Tag: "Rated",
    Tagclass: "badge badge-tag badge-warning-light",
    Close_date: "07 Nov 2023",
    Owner: "Martin",
    Probability: "70 %",
    Status: "Won",
    StatusClass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "7",
    Deal_Name: "Gutkowski",
    Stage: "Proposal Made",
    Deal_Value: "$09,05,947",
    Tag: "Promotion",
    Tagclass: "badge badge-tag badge-purple-light",
    Close_date: "12 Nov 2023",
    Owner: "Newell",
    Probability: "10 %",
    Status: "Open",
    StatusClass: "badge badge-pill badge-status bg-purple",
  },
  {
    key: "8",
    Deal_Name: "Walter",
    Stage: "Qualify To Buy",
    Deal_Value: "$04,51,000",
    Tag: "Rejected",
    Tagclass: "badge badge-tag badge-danger-light",
    Close_date: "23 Nov 2023",
    Owner: "Janet",
    Probability: "90 %",
    Status: "Won",
    StatusClass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "9",
    Deal_Name: "Hansen",
    Stage: "Appointment",
    Deal_Value: "$72,14,078",
    Tag: "Collab",
    Tagclass: "badge badge-tag badge-success-light",
    Close_date: "11 Dec 2023",
    Owner: "Craig",
    Probability: "40 %",
    Status: "Won",
    StatusClass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "10",
    Deal_Name: "Leuschke",
    Stage: "Proposal Made",
    Deal_Value: "$09,05,947",
    Tag: "Rated",
    Tagclass: "badge badge-tag badge-warning-light",
    Close_date: "17 Dec 2023",
    Owner: "Daniel",
    Probability: "47 %",
    Status: "Lost",
    StatusClass: "badge badge-pill badge-status bg-danger",
  },
];

const columns = [
  {
    key: "Star",
    sorter: false,
  },
  {
    title: "Deal Name",
    dataIndex: "Deal_Name",
    key: "Deal_Name",
    sorter: {
      compare: (a, b) => {
        a = a.Deal_Name.toLowerCase();
        b = b.Deal_Name.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Stage",
    dataIndex: "Stage",
    sorter: {
      compare: (a, b) => {
        a = a.Stage.toLowerCase();
        b = b.Stage.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Deal Value",
    dataIndex: "Deal_Value",
    sorter: {
      compare: (a, b) => {
        a = a.Deal_Value.toLowerCase();
        b = b.Deal_Value.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Tags",
    dataIndex: "Tag",
    key: "Tag",
    sorter: {
      compare: (a, b) => {
        a = a.Tag.toLowerCase();
        b = b.Tag.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Expected Close date",
    dataIndex: "Close_date",
    sorter: {
      compare: (a, b) => {
        a = a.Close_date.toLowerCase();
        b = b.Close_date.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Owner",
    dataIndex: "Owner",
    sorter: {
      compare: (a, b) => {
        a = a.Owner.toLowerCase();
        b = b.Owner.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Probability",
    dataIndex: "Probability",
    sorter: {
      compare: (a, b) => {
        a = a.Probability.toLowerCase();
        b = b.Probability.toLowerCase();
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
    dataIndex: "Action",
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
