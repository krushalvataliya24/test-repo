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
      <template v-else-if="column.key === 'Progress'">
        <ul class="list-progress">
          <li>
            <h6>{{ record.open }}</h6>
            <p>Opened</p>
          </li>
          <li>
            <h6>{{ record.close }}</h6>
            <p>Closed</p>
          </li>
          <li>
            <h6>{{ record.unscubscribe }}</h6>
            <p>Unsubscribe</p>
          </li>
          <li>
            <h6>{{ record.delivered }}</h6>
            <p>Delivered</p>
          </li>
          <li>
            <h6>{{ record.converstion }}</h6>
            <p>Conversation</p>
          </li>
        </ul>
      </template>
      <template v-else-if="column.key === 'Members'">
        <ul class="project-mem">
          <li>
            <a href="javascript:;"
              ><img
                :src="require(`@/assets/img/profiles/${record.mem_image1}`)"
                alt="img"
            /></a>
          </li>
          <li>
            <a href="javascript:;"
              ><img
                :src="require(`@/assets/img/profiles/${record.mem_image2}`)"
                alt="img"
            /></a>
          </li>
          <li>
            <a href="javascript:;"
              ><img
                :src="require(`@/assets/img/profiles/${record.mem_image3}`)"
                alt="img"
            /></a>
          </li>
          <li class="more-set"><a href="javascript:;">3+</a></li>
        </ul>
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
              data-bs-target="#delete_campaign"
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
    name: "Distribution",
    type: "Public Relations",
    mem_image1: "avatar-14.jpg",
    mem_image2: "avatar-15.jpg",
    mem_image3: "avatar-16.jpg",
    start_date: "25 Sep 2023",
    end_date: "29 Sep 2023",
    created_date: "25 Sep 2023",
    open: "40.5%",
    close: "20.5%",
    unscubscribe: "30.5%",
    delivered: "70.5%",
    converstion: "35.0%",
    status: "Success",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    id: "2",
    name: "Merchandising",
    type: "Content Marketing",
    mem_image1: "avatar-03.jpg",
    mem_image2: "avatar-05.jpg",
    mem_image3: "avatar-06.jpg",
    start_date: "03 Oct 2023",
    end_date: "16 Oct 2023",
    created_date: "03 Oct 2023",
    open: "65.5%",
    close: "83.5%",
    unscubscribe: "67.5%",
    delivered: "32.0%",
    converstion: "22.5%",
    status: "Pending",
    statusclass: "badge badge-pill badge-status bg-warning",
  },
  {
    id: "3",
    name: "Pricing",
    type: "Social Marketing",
    mem_image1: "avatar-04.jpg",
    mem_image2: "avatar-01.jpg",
    mem_image3: "avatar-16.jpg",
    start_date: "17 Oct 2023",
    end_date: "28 Oct 2023",
    created_date: "17 Oct 2023",
    open: "64.0%",
    close: "97.0%",
    unscubscribe: "14.5%",
    delivered: "38.5%",
    converstion: "53.0%",
    status: "Success",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    id: "4",
    name: "Increased sales",
    type: "Brand",
    mem_image1: "avatar-12.jpg",
    mem_image2: "avatar-15.jpg",
    mem_image3: "avatar-13.jpg",
    start_date: "07 Nov 2023",
    end_date: "14 Nov 2023",
    created_date: "07 Nov 2023",
    open: "32.5%",
    close: "57.0%",
    unscubscribe: "26.3%",
    delivered: "65.8%",
    converstion: "17.4%",
    status: "Bounced",
    statusclass: "badge badge-pill badge-status bg-danger",
  },
  {
    id: "5",
    name: "Brand recognition",
    type: "Sales",
    mem_image1: "avatar-10.jpg",
    mem_image2: "avatar-11.jpg",
    mem_image3: "avatar-16.jpg",
    start_date: "19 Nov 2023",
    end_date: "26 Nov 2023",
    created_date: "19 Nov 2023",
    open: "72.6%",
    close: "53.5%",
    unscubscribe: "16.5%",
    delivered: "83.0%",
    converstion: "29.3%",
    status: "Running",
    statusclass: "badge badge-pill badge-status bg-green",
  },
  {
    id: "6",
    name: "Enhanced brand",
    type: "Media",
    mem_image1: "avatar-14.jpg",
    mem_image2: "avatar-09.jpg",
    mem_image3: "avatar-08.jpg",
    start_date: "02 Dec 2023",
    end_date: "13 Dec 2023",
    created_date: "02 Dec 2023",
    open: "56.3%",
    close: "20.5%",
    unscubscribe: "30.5%",
    delivered: "70.5%",
    converstion: "35.0%",
    status: "Paused",
    statusclass: "badge badge-pill badge-status bg-info",
  },
  {
    id: "7",
    name: "Repeat customers",
    type: "Rebranding",
    mem_image1: "avatar-06.jpg",
    mem_image2: "avatar-07.jpg",
    mem_image3: "avatar-16.jpg",
    start_date: "17 Dec 2023",
    end_date: "27 Dec 2023",
    created_date: "17 Dec 2023",
    open: "63.2%",
    close: "20.5%",
    unscubscribe: "30.5%",
    delivered: "70.5%",
    converstion: "87.8%",
    status: "Success",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    id: "8",
    name: "Competitor ",
    type: "Product launch",
    mem_image1: "avatar-04.jpg",
    mem_image2: "avatar-15.jpg",
    mem_image3: "avatar-05.jpg",
    start_date: "06 Jan 2024",
    end_date: "17 Jan 2024",
    created_date: "06 Jan 2024",
    open: "40.5%",
    close: "52.7%",
    unscubscribe: "13.5%",
    delivered: "70.5%",
    converstion: "35.0%",
    status: "Paused",
    statusclass: "badge badge-pill badge-status bg-info",
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
    title: "Progress",
    dataIndex: "open",
    key: "Progress",
    sorter: {
      compare: (a, b) => {
        a = a.open.toLowerCase();
        b = b.open.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Members",
    key: "Members",
    sorter: false,
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
    title: "Created",
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
      data,
      columns,
      rowSelection,
    };
  },
};
</script>
