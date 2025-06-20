<template>
  <a-table
    class="table thead-light"
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
      <template v-else-if="column.key === 'Name'">
        <h2 class="d-flex align-items-center">
          <router-link to="/crm/contact-details" class="avatar avatar-sm me-2"
            ><img
              class="img-fluid"
              :src="require(`@/assets/img/profiles/${record.Customer_Image}`)"
              alt="User Image" /></router-link
          ><router-link to="/crm/contact-details" class="d-flex flex-column"
            >{{ record.Customer_Name }}
            <span class="text-default">{{ record.Customer_No }}</span></router-link
          >
        </h2>
      </template>
      <template v-else-if="column.key === 'Tag'">
        <span :class="record.TagClass">{{ record.Tag }}</span>
      </template>
      <template v-else-if="column.key === 'Rating'">
        <div class="set-star">
          <span><i class="fa fa-star filled"></i> {{ record.Rating }}</span>
        </div>
      </template>
      <template v-else-if="column.key === 'Contact'">
        <ul class="social-links d-flex align-items-center">
          <li>
            <a href="javascript:;"><i class="ti ti-mail"></i></a>
          </li>
          <li>
            <a href="javascript:;"><i class="ti ti-phone"></i></a>
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
        <span :class="record.StatusClass">{{ record.Status }}</span>
      </template>
      <template v-else-if="column.key === 'action'">
        <div class="dropdown table-action">
          <a
            href="javascript:;"
            class="action-icon"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            ><i class="fa fa-ellipsis-v"></i
          ></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a
              class="dropdown-item"
              href="javascript:void(0);"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvas_edit"
              ><i class="ti ti-edit text-blue"></i> Edit</a
            >
            <a
              class="dropdown-item"
              href="javascript:;"
              data-bs-toggle="modal"
              data-bs-target="#delete_contact"
              ><i class="ti ti-trash text-danger"></i> Delete</a
            ><router-link class="dropdown-item" to="/crm/contact-details"
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
    Customer_Name: "Darlee Robertson",
    Customer_Image: "avatar-19.jpg",
    Customer_No: "Facility Manager",
    Phone: "1234567890",
    Email: "robertson@example.com",
    Location: "Germany",
    Tag: "Collab",
    TagClass: "badge badge-tag badge-success-light",
    Rating: "4.2",
    Owner: "Hendry",
    Status: "Active",
    StatusClass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "2",
    Customer_Name: "Sharon Roy",
    Customer_Image: "avatar-20.jpg",
    Customer_No: "Installer",
    Phone: "+1 989757485",
    Email: "sharon@example.com",
    Location: "USA",
    Tag: "Promotion",
    TagClass: "badge badge-tag badge-purple-light",
    Rating: "5.0",
    Owner: "Guillory",
    Status: "Inactive",
    StatusClass: "badge badge-pill badge-status bg-danger",
  },
  {
    key: "3",
    si_no: "",
    select: "",
    Customer_Name: "Vaughan",
    Customer_Image: "avatar-21.jpg",
    Customer_No: "Senior  Manager",
    Phone: "+1 546555455",
    Email: "vaughan12@example.com",
    Location: "Canada",
    Tag: "Collab",
    TagClass: "badge badge-tag badge-success-light",
    Rating: "3.5",
    Owner: "Jami",
    Status: "Active",
    StatusClass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "4",
    Customer_Name: "Jessica",
    Customer_Image: "avatar-23.jpg",
    Customer_No: "Test Engineer",
    Phone: "+1 454478787",
    Email: "jessica13@example.com",
    Location: "India",
    Tag: "Rated",
    TagClass: "badge badge-tag badge-warning-light",
    Rating: "4.5",
    Owner: "Theresa",
    Status: "Active",
    StatusClass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "5",
    Customer_Name: "Carol Thomas",
    Customer_Image: "avatar-16.jpg",
    Customer_No: "UI /UX Designer",
    Phone: "+1 124547845",
    Email: "caroltho3@example.com",
    Location: "China",
    Tag: "Collab",
    TagClass: "badge badge-tag badge-success-light",
    Rating: "4.7",
    Owner: "Espinosa",
    Status: "Active",
    StatusClass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "6",
    Customer_Name: "Dawn Mercha",
    Customer_Image: "avatar-22.jpg",
    Customer_No: "Technician",
    Phone: "+1 478845447",
    Email: "dawnmercha@example.com",
    Location: "Japan",
    Tag: "Rated",
    TagClass: "badge badge-tag badge-warning-light",
    Rating: "5.0",
    Owner: "Japan",
    Status: "Active",
    StatusClass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "7",
    Customer_Name: "Rachel Hampton",
    Customer_Image: "avatar-24.jpg",
    Customer_No: "Software Developer",
    Phone: "+1 215544845",
    Email: "rachel@example.com",
    Location: "Indonesia",
    Tag: "Promotion",
    TagClass: "badge badge-tag badge-purple-light",
    Rating: "3.1",
    Owner: "Newell",
    Status: "Active",
    StatusClass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "8",
    Customer_Name: "Jonelle Curtiss",
    Customer_Image: "avatar-25.jpg",
    Customer_No: "Supervisor",
    Phone: "+1 121145471",
    Email: "jonelle@example.com",
    Location: "Cuba",
    Tag: "Rating",
    TagClass: "badge badge-tag badge-warning-light",
    Rating: "5.0",
    Owner: "Janet",
    Status: "Active",
    StatusClass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "9",
    Customer_Name: "Jonathan",
    Customer_Image: "avatar-26.jpg",
    Customer_No: "Team Lead Dev",
    Phone: "+1 321454789",
    Email: "jonathan@example.com",
    Location: "Isreal",
    Tag: "Collab",
    TagClass: "badge badge-tag badge-success-light",
    Rating: "2.7",
    Owner: "Craig",
    Status: "Active",
    StatusClass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "10",
    Customer_Name: "Brook",
    Customer_Image: "avatar-01.jpg",
    Customer_No: "Team Lead Dev ",
    Phone: "+1 278907145",
    Email: "brook@example.com",
    Location: "Colombia",
    Tag: "Promotion",
    TagClass: "badge badge-tag badge-purple-light",
    Rating: "3.0",
    Owner: "Daniel",
    Status: "Active",
    StatusClass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "11",
    si_no: "",
    select: "",
    Customer_Name: "Eric Adams",
    Customer_Image: "avatar-06.jpg",
    Customer_No: "HR Manager",
    Phone: "+1 19023-78104",
    Email: "ericadams@example.com",
    Location: "France",
    Tag: "1",
    Rating: "3.0",
    Owner: "Daniel",
    Status: "Active",
    StatusClass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "12",
    Customer_Name: "Richard Cooper",
    Customer_Image: "avatar-05.jpg",
    Customer_No: "Devops Engineer",
    Phone: "+1 18902-63904",
    Email: "richard@example.com",
    Location: "Belgium",
    Tag: "1",
    Rating: "3.0",
    Owner: "Daniel",
    Status: "Active",
    StatusClass: "badge badge-pill badge-status bg-success",
  },
];

const columns = [
  {
    key: "Star",
    sorter: false,
  },
  {
    title: "Name",
    dataIndex: "Customer_Name",
    key: "Name",
    sorter: {
      compare: (a, b) => {
        a = a.Customer_Name.toLowerCase();
        b = b.Customer_Name.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Phone",
    dataIndex: "Phone",
    sorter: {
      compare: (a, b) => {
        a = a.Phone.toLowerCase();
        b = b.Phone.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Email",
    dataIndex: "Email",
    sorter: {
      compare: (a, b) => {
        a = a.Email.toLowerCase();
        b = b.Email.toLowerCase();
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
    title: "Location",
    dataIndex: "Location",
    sorter: {
      compare: (a, b) => {
        a = a.Location.toLowerCase();
        b = b.Location.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Rating",
    dataIndex: "Rating",
    key: "Rating",
    sorter: {
      compare: (a, b) => {
        a = a.Rating.toLowerCase();
        b = b.Rating.toLowerCase();
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
    title: "Contact",
    dataIndex: "Contact",
    key: "Contact",
    sorter: {
      compare: (a, b) => {
        a = a.Contact.toLowerCase();
        b = b.Contact.toLowerCase();
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
      data,
      columns,
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
