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
          <div class="set-star rating-select"><i class="fa fa-star"></i></div>
        </div>
      </template>
      <template v-else-if="column.key === 'Name'">
        <h2 class="d-flex align-items-center">
          <router-link to="/crm/company-details" class="avatar avatar-sm border rounded p-1 me-2"
            ><img
              class="w-auto h-auto"
              :src="require(`@/assets/img/icons/${record.company_image}`)"
              alt="User Image"
          /></router-link>
          <router-link
            to="/crm/company-details"
            class="d-flex flex-column fw-medium"
            >{{ record.company_name }}</router-link
          >
        </h2>
      </template>
      <template v-else-if="column.key === 'Tag'">
        <span :class="record.tagclass">{{ record.tag }}</span>
      </template>
      <template v-else-if="column.key === 'Rating'">
        <div class="set-star">
          <span><i class="fa fa-star filled"></i> {{ record.rating }} </span>
        </div>
      </template>
      <template v-else-if="column.key === 'Contact'">
        <ul class="social-links d-flex align-items-center">
          <li>
            <a href="javascript:;"><i class="ti ti-mail"></i></a>
          </li>
          <li>
            <a href="javascript:;"><i class="ti ti-phone-check"></i></a>
          </li>
          <li>
            <a href="javascript:;"><i class="ti ti-message-circle-share"></i></a>
          </li>
          <li>
            <a href="javascript:;"><i class="ti ti-brand-skype"></i></a>
          </li>
          <li>
            <a href="javascript:;"><i class="ti ti-brand-facebook"></i></a>
          </li>
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
            <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
            <a
              class="dropdown-item"
              href="javascript:;"
              data-bs-toggle="modal"
              data-bs-target="#delete_contact"
              ><i class="ti ti-trash text-danger"></i> Delete</a
            ><router-link class="dropdown-item" to="/crm/company-details"
              ><i class="ti ti-eye text-blue-light"></i> Preview</router-link
            >
          </div>
        </div>
      </template>
    </template>
  </a-table>
</template>

<script>
const columns = [
  {
    key: "Star",
    sorter: false,
  },
  {
    title: "Name",
    dataIndex: "customer_name",
    key: "Name",
    sorter: {
      compare: (a, b) => {
        a = a.company_name.toLowerCase();
        b = b.company_name.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Phone",
    dataIndex: "phone",
    sorter: {
      compare: (a, b) => {
        a = a.phone.toLowerCase();
        b = b.phone.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Email",
    dataIndex: "email",
    sorter: {
      compare: (a, b) => {
        a = a.email.toLowerCase();
        b = b.email.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Tags",
    dataIndex: "tag",
    key: "Tag",
    sorter: {
      compare: (a, b) => {
        a = a.tag.toLowerCase();
        b = b.tag.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Location",
    dataIndex: "location",
    sorter: {
      compare: (a, b) => {
        a = a.location.toLowerCase();
        b = b.location.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Rating",
    dataIndex: "rating",
    key: "Rating",
    sorter: {
      compare: (a, b) => {
        a = a.rating.toLowerCase();
        b = b.rating.toLowerCase();
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
    title: "Contact",
    dataIndex: "contact",
    key: "Contact",
    sorter: {
      compare: (a, b) => {
        a = a.contact.toLowerCase();
        b = b.contact.toLowerCase();
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
    dataIndex: "Action",
    key: "action",
    sorter: true,
  },
];

const data = [
  {
    key: "1",
    company_name: "NovaWave LLC",
    company_image: "company-icon-01.svg",
    phone: "+1 875455453",
    email: "robertson@example.com",
    location: "Germany",
    tag: "Promotion",
    tagclass: "badge badge-tag badge-purple-light",
    rating: "4.2",
    owner: "Hendry",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "2",
    company_name: "BlueSky Industries",
    company_image: "company-icon-02.svg",
    phone: "+1 989757485",
    email: "sharon@example.com",
    location: "USA",
    tag: "Rated",
    tagclass: "badge badge-tag badge-warning-light",
    rating: "5.0",
    owner: "Guillory",
    status: "Inactive",
    statusclass: "badge badge-pill badge-status bg-danger",
  },
  {
    key: "3",
    company_name: "SilverHawk",
    company_image: "company-icon-03.svg",
    phone: "+1 546555455",
    email: "vaughan12@example.com",
    location: "Canada",
    tag: "Promotion",
    tagclass: "badge badge-tag badge-purple-light",
    rating: "3.5",
    owner: "Jami",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "4",
    company_name: "SummitPeak",
    company_image: "company-icon-04.svg",
    phone: "+1 454478787",
    email: "jessica13@example.com",
    location: "India",
    tag: "Promotion",
    tagclass: "badge badge-tag badge-purple-light",
    rating: "4.5",
    owner: "Theresa",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "5",
    company_name: "RiverStone Ventur",
    company_image: "company-icon-05.svg",
    phone: "+1 124547845",
    email: "caroltho3@example.com",
    location: "China",
    tag: "Promotion",
    tagclass: "badge badge-tag badge-purple-light",
    rating: "4.7",
    owner: "Espinosa",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "6",
    company_name: "Bright Bridge Grp",
    company_image: "company-icon-06.svg",
    phone: "+1 478845447",
    email: "dawnmercha@example.com",
    location: "Japan",
    tag: "Promotion",
    tagclass: "badge badge-tag badge-purple-light",
    rating: "5.0",
    owner: "Martin",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "7",
    company_name: "CoastalStar Co.",
    company_image: "company-icon-07.svg",
    phone: "+1 215544845",
    email: "rachel@example.com",
    location: "Indonesia",
    tag: "Promotion",
    tagclass: "badge badge-tag badge-purple-light",
    rating: "3.1",
    owner: "Newell",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "8",
    company_name: "HarborView",
    company_image: "company-icon-08.svg",
    phone: "+1 121145471",
    email: "jonelle@example.com",
    location: "Cuba",
    tag: "Promotion",
    tagclass: "badge badge-tag badge-purple-light",
    rating: "5.0",
    owner: "Janet",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "9",
    company_name: "Golden Gate Ltd",
    company_image: "company-icon-09.svg",
    phone: "+1 321454789",
    email: "jonathan@example.com",
    location: "Isreal",
    tag: "Promotion",
    tagclass: "badge badge-tag badge-purple-light",
    rating: "2.7",
    owner: "Craig",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "10",
    si_no: "",
    select: "",
    company_name: "Redwood Inc",
    company_image: "company-icon-10.svg",
    phone: "+1 278907145",
    email: "brook@example.com",
    location: "Colombia",
    tag: "Promotion",
    tagclass: "badge badge-tag badge-purple-light",
    rating: "3.0",
    owner: "Daniel",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "11",
    company_name: "SilverHawk",
    company_image: "company-icon-03.svg",
    phone: "+1 546555455",
    email: "vaughan12@example.com",
    location: "Canada",
    tag: "Promotion",
    tagclass: "badge badge-tag badge-purple-light",
    rating: "3.5",
    owner: "Jami",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "12",
    company_name: "SummitPeak",
    company_image: "company-icon-04.svg",
    phone: "+1 454478787",
    email: "jessica13@example.com",
    location: "India",
    tag: "Promotion",
    tagclass: "badge badge-tag badge-purple-light",
    rating: "4.5",
    owner: "Theresa",
    status: "Active",
    statusclass: "badge badge-pill badge-status bg-success",
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
