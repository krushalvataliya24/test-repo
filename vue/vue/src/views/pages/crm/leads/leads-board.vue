<template>
  <div class="d-flex overflow-x-auto align-items-start mb-4">
    <div
      class="kanban-list-items"
      v-for="(module, color) in modules"
      :key="color"
    >
      <div class="card mb-0">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h4 class="fw-semibold d-flex align-items-center mb-1">
                <i
                  class="ti ti-circle-filled fs-8 me-2"
                  :class="module.DotClass"
                ></i
                >{{ module.Title }}
              </h4>
              <span class="fw-medium text-default">{{ module.Count }}</span>
            </div>
            <div class="d-flex align-items-center">
              <a href="javascript:void(0);" class="text-purple"
                ><i class="ti ti-plus"></i
              ></a>
              <div class="dropdown table-action ms-2">
                <a
                  href="#"
                  class="action-icon dropdown-toggle bg-white"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  ><i class="fa fa-ellipsis-v"></i
                ></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a
                    class="dropdown-item"
                    href="#"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvas_edit"
                    ><i class="fa-solid fa-pencil text-blue"></i> Edit</a
                  >
                  <a
                    class="dropdown-item"
                    href="#"
                    data-bs-toggle="modal"
                    data-bs-target="#delete_lead"
                    ><i class="fa-regular fa-trash-can text-danger"></i>
                    Delete</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="kanban-drag-wrap pt-4">
        <draggable
          :list="module.Cards"
          :group="{ name: 'kanban', pull: true, put: true }"
          @end="onDragEnd(color)"
        >
          <div v-for="Card in module.Cards" :key="Card.id">
            <div class="card kanban-card border">
              <div class="card-body">
                <div class="d-block">
                  <div class="border border-2 mb-3" :class="Card.CardClass"></div>
                  <div class="d-flex align-items-center mb-3">
                    <router-link
                      to="/crm/leads-details"
                      class="avatar avatar-lg bg-gray flex-shrink-0 me-2"
                      ><span class="avatar-title text-dark">{{
                        Card.Logo
                      }}</span></router-link
                    >
                    <h6 class="fw-medium">
                      <router-link to="/crm/leads-details">{{
                        Card.CompanyName
                      }}</router-link>
                    </h6>
                  </div>
                </div>
                <div class="mb-3 d-flex flex-column">
                  <p class="text-default d-inline-flex align-items-center mb-2">
                    <i class="ti ti-report-money text-dark me-1"></i>
                    {{ Card.Amount }}
                  </p>
                  <p class="text-default d-inline-flex align-items-center mb-2">
                    <i class="ti ti-mail text-dark me-1"></i>
                    {{ Card.Email }}
                  </p>
                  <p class="text-default d-inline-flex align-items-center mb-2">
                    <i class="ti ti-phone text-dark me-1"></i>
                    {{ Card.MobileNo }}
                  </p>
                  <p class="text-default d-inline-flex align-items-center">
                    <i class="ti ti-map-pin-pin text-dark me-1"></i>
                    {{ Card.Location }}
                  </p>
                </div>
                <div
                  class="d-flex align-items-center justify-content-between border-top pt-3 mt-3"
                >
                  <span
                    class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center"
                    ><img
                      :src="require(`@/assets/img/icons/${Card.Image}`)"
                      class="w-auto h-auto"
                      alt=""
                  /></span>
                  <div class="icons-social d-flex align-items-center">
                    <a
                      href="#"
                      class="d-flex align-items-center justify-content-center me-1"
                      ><i class="ti ti-phone-check"></i
                    ></a>
                    <a
                      href="#"
                      class="d-flex align-items-center justify-content-center me-1"
                      ><i class="ti ti-message-circle-2"></i
                    ></a>
                    <a
                      href="#"
                      class="d-flex align-items-center justify-content-center"
                      ><i class="ti ti-color-swatch"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </draggable>
      </div>
    </div>
  </div>
</template>

<script>
import { VueDraggableNext } from "vue-draggable-next";
export default {
  components: {
    draggable: VueDraggableNext,
  },
  data() {
    return {
      modules: {
        Contacted: {
          DotClass: "text-warning",
          Title: "Contacted",
          Count: "45 Leads - $15,44,540",
          Cards: [
            {
              CardClass: "bg-warning",
              Logo: "SM",
              CompanyName: "Schumm",
              Amount: "$03,50,000",
              Email: "darleeo@example.com",
              MobileNo: "+1 12445-47878",
              Location: "Newyork, United States",
              Image: "company-icon-09.svg",
            },
            {
              CardClass: "bg-success",
              Logo: "CS",
              CompanyName: "Collins",
              Amount: "$02,10,000",
              Email: "robertson@example.com",
              MobileNo: "+1 13987-90231",
              Location: "Austin, United States",
              Image: "company-icon-01.svg",
            },
            {
              CardClass: "bg-danger",
              Logo: "KI",
              CompanyName: "Konopelski",
              Amount: "$02,18,000",
              Email: "sharon@example.com",
              MobileNo: "+1 17932-04278",
              Location: "Atlanta, United States",
              Image: "company-icon-02.svg",
            },
          ],
        },
        NotContacted: {
          DotClass: "text-purple",
          Title: "Not Contacted",
          Count: "45 Leads - $15,44,540",
          Cards: [
            {
              CardClass: "bg-purple",
              Logo: "AS",
              CompanyName: "Adams",
              Amount: "$02,45,000",
              Email: "vaughan12@example.com",
              MobileNo: "+1 17392-27846",
              Location: "London, United Kingdom",
              Image: "company-icon-03.svg",
            },
            {
              CardClass: "bg-warning",
              Logo: "WK",
              CompanyName: "Wizosk",
              Amount: "$01,17,000",
              Email: "caroltho3@example.com",
              MobileNo: "+1 78982-09163",
              Location: "Bristol, United Kingdom",
              Image: "company-icon-04.svg",
            },
            {
              CardClass: "bg-success",
              Logo: "HR",
              CompanyName: "Heller",
              Amount: "$02,12,000",
              Email: "dawnmercha@example.com",
              MobileNo: "+1 27691-89246",
              Location: "San Francisco, United States",
              Image: "company-icon-05.svg",
            },
          ],
        },
        Closed: {
          DotClass: "textsuccess",
          Title: "Closed",
          Count: "45 Leads - $15,44,540",
          Cards: [
            {
              CardClass: "bg-success",
              Logo: "GI",
              CompanyName: "Gutkowsi",
              Amount: "$01,84,043",
              Email: "rachel@example.com",
              MobileNo: "+1 17839-93617",
              Location: "Dallas, United States",
              Image: "company-icon-06.svg",
            },
            {
              CardClass: "bg-danger",
              Logo: "WR",
              CompanyName: "Walter",
              Amount: "$09,35,189",
              Email: "jonelle@example.com",
              MobileNo: "+1 16739-47193",
              Location: "Leicester, United Kingdom",
              Image: "company-icon-07.svg",
            },
            {
              CardClass: "bg-purple",
              Logo: "HN",
              CompanyName: "Hansen",
              Amount: "$04,27,940",
              Email: "jonathan@example.com",
              MobileNo: "+1 18390-37153",
              Location: "Norwich, United Kingdom",
              Image: "company-icon-08.svg",
            },
          ],
        },
        Lost: {
          DotClass: "text-danger",
          Title: "Lost",
          Count: "15 Leads - $14,89,543",
          Cards: [
            {
              CardClass: "bg-danger",
              Logo: "SE",
              CompanyName: "Steve",
              Amount: "$04,17,593",
              Email: "sidney@example.com",
              MobileNo: "+1 11739-38135",
              Location: "Manchester, United Kingdom",
              Image: "company-icon-09.svg",
            },
            {
              CardClass: "bg-success",
              Logo: "LE",
              CompanyName: "Leuschke",
              Amount: "$08,81,389",
              Email: "brook@example.com",
              MobileNo: "+1 19302-91043",
              Location: "Chicago, United States",
              Image: "company-icon-10.svg",
            },
            {
              CardClass: "bg-warning",
              Logo: "AY",
              CompanyName: "Anthony",
              Amount: "$09,27,193",
              Email: "mickey@example.com",
              MobileNo: "+1 17280-92016",
              Location: "Derby, United Kingdom",
              Image: "company-icon-01.svg",
            },
          ],
        },
      },
    };
  },
  methods: {
    onDragEnd() {
      // Handle module drops here
    },
    onModuleDragEnd() {},
  },
};
</script>
