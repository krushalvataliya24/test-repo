<template>
  <div class="d-flex overflow-x-auto align-items-start mb-4">
    <div class="kanban-list-items" v-for="(module, color) in modules" :key="color">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <h4 class="fw-semibold d-flex align-items-center mb-1">
              <i class="ti ti-circle-filled fs-8 me-2" :class="module.DotClass"></i>
              {{ module.Title }}
            </h4>
            <a href="javascript:void(0);" class="text-purple"><i class="ti ti-plus"></i></a>
          </div>
        </div>
      </div>
      <div :class="module.LineClass" class="border border-2"></div>
        <div class="kanban-drag-wrap pt-4">
          <draggable
                :list="module.Cards"
                :group="{ name: 'kanban', pull: true, put: true }"
                @end="onDragEnd(color)"
              >
            <div v-for="Card in module.Cards" :key="Card.id">
              <div class="card kanban-card border">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
                    <div class="d-flex align-items-center">
                      <a href="javascript:void(0);" class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
                        <img :src="require(`@/assets/img/priority/${Card.Logo}`)" class="w-auto h-auto" alt="">
                      </a>
                      <div>
                        <h6 class="fw-medium"><a href="javascript:void(0);">{{Card.Title}}</a></h6>
                        <p>{{Card.Development}}</p>
                      </div>
                    </div>
                    <div class="dropdown table-action">
                      <a href="#" class="action-icon dropdown-toggle bg-white" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit" ><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_estimations"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
                      </div>
                    </div>
                  </div>
                  <p class="mb-3">{{ Card.Content }}</p>
                  <div class="mb-3 d-flex flex-column">
                    <p class="text-default d-inline-flex align-items-center mb-2">
                      <i class="ti ti-forbid-2 text-dark me-1"></i>
                      Estimate ID : {{ Card.EstimateID }}
                    </p>
                    <p class="text-default d-inline-flex align-items-center mb-2">
                      <i class="ti ti-report-money text-dark me-1"></i>
                      Amount : {{Card.Amount}}
                    </p>
                    <p class="text-default d-inline-flex align-items-center mb-2">
                      <i class="ti ti-calendar-exclamation text-dark me-1"></i>
                      Date : {{Card.Date}}
                    </p>
                    <p class="text-default d-inline-flex align-items-center">
                      <i class="ti ti-calendar-time text-dark me-1"></i>
                      Expiry Date : {{Card.ExpiryDate}}
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                      <a href="javascript:void(0);" class="avatar avatar-md rounded flex-shrink-0 me-2"><img :src="require(`@/assets/img/profiles/${Card.Avatar}`)" alt=""></a>
                      <a href="javascript:void(0);">{{Card.Name}}</a>
                    </div>
                    <a href="javascript:void(0);" class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center"> 
                      <img :src="require(`@/assets/img/icons/${Card.Company}`)" class="w-auto h-auto" alt=""> 
                    </a>
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
        Draft: {
          DotClass: "text-warning",
          Title: "Draft",
          LineClass: "bg-warning",
          Cards: [
            {
              Logo: "truellysell.svg",
              Title: "Truelysell",
              Development: "Mobile App",
              Content: "TruelySell provides a multiple on-demand service based bootstrap html template.",
              EstimateID: "#EST00020",
              Amount: "$01,23,000",
              Date: "15 Oct 2023",
              ExpiryDate: "05 Nov 2026",
              Avatar: "avatar-22.jpg",
              Name: "Dawn Mercha",
              Company: "company-icon-07.svg"
            },
            {
              Logo: "project-01.svg",
              Title: "Kofejob",
              Development: "Meeting",
              Content: "Kofejob is a freelancers marketplace where you can post projects & get instant help.",
              EstimateID: "#EST00020",
              Amount: "$01,23,000",
              Date: "15 Oct 2023",
              ExpiryDate: "05 Nov 2026",
              Avatar: "avatar-21.jpg",
              Name: "Darlee Robertson",
              Company: "company-icon-03.svg"
            },
          ],
        },
        Sent: {
          DotClass: "text-purple",
          Title: "Sent",
          LineClass: "bg-purple",
          Cards: [
            {
              Logo: "truellysel.svg",
              Title: "Truelysell",
              Development: "Web App",
              Content: "Truelysell is a fully responsive, lightweight, and easy customizable template",
              EstimateID: "#EST00020",
              Amount: "$01,23,000",
              Date: "15 Oct 2023",
              ExpiryDate: "05 Nov 2026",
              Avatar: "avatar-19.jpg",
              Name: "Darlee Robertson",
              Company: "company-icon-01.svg"
            },
            {
              Logo: "project-02.svg",
              Title: "Doccure",
              Development: "Meeting",
              Content: "Doctor Appointment Booking Template is a appointment management template",
              EstimateID: "#EST00020",
              Amount: "$01,23,000",
              Date: "15 Oct 2023",
              ExpiryDate: "05 Nov 2026",
              Avatar: "avatar-23.jpg",
              Name: "Rachel Hampton",
              Company: "company-icon-08.svg"
            },
          ],
        },
        Accepted: {
          DotClass: "text-success",
          Title: "Accepted",
          LineClass: "bg-success",
          Cards: [
            {
              Logo: "dreamchat.svg",
              Title: "Dreamchat",
              Development: "Meeting",
              Content: "The template of Dreamschat is developed with the help of Bootstrap & latest technologies",
              EstimateID: "#EST00020",
              Amount: "$01,23,000",
              Date: "15 Oct 2023",
              ExpiryDate: "05 Nov 2026",
              Avatar: "avatar-20.jpg",
              Name: "Sharon Roy",
              Company: "company-icon-02.svg"
            },
            {
              Logo: "servbook.svg",
              Title: "Servbook",
              Development: "Meeting",
              Content: "Servbook is a fully responsive, lightweight, and easy customizable template",
              EstimateID: "#EST00020",
              Amount: "$01,23,000",
              Date: "15 Oct 2023",
              ExpiryDate: "05 Nov 2026",
              Avatar: "avatar-01.jpg",
              Name: "Jessica",
              Company: "company-icon-04.svg"
            },
          ],
        },
        Declined: {
          DotClass: "text-danger",
          Title: "Declined",
          LineClass: "bg-danger",
          Cards: [
            {
              Logo: "dream-pos.svg",
              Title: "DreamPOS",
              Development: "Mobile App",
              Content: "A point of sale admin template can help organize and track inventory in a business.",
              EstimateID: "#EST00020",
              Amount: "$01,23,000",
              Date: "15 Oct 2023",
              ExpiryDate: "05 Nov 2026",
              Avatar: "avatar-16.jpg",
              Name: "Carol Thomas",
              Company: "company-icon-05.svg"
            },
            {
              Logo: "dream-pos.svg",
              Title: "Dreamsports",
              Development: "Meeting",
              Content: "DreamSports is a template to elevate your badminton business build with latest technologies",
              EstimateID: "#EST00020",
              Amount: "$01,23,000",
              Date: "15 Oct 2023",
              ExpiryDate: "05 Nov 2026",
              Avatar: "avatar-25.jpg",
              Name: "Jonathan",
              Company: "company-icon-10.svg"
            },
          ],
        },
      },
    };
  },
  methods: {
    onDragEnd() {},
    onModuleDragEnd() {},
  },
};
</script>