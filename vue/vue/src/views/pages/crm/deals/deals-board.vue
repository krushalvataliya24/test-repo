<template>
    <div class="d-flex overflow-x-auto align-items-start mb-4">
        <div class="kanban-list-items" v-for="(module, color) in modules" :key="color">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="fw-semibold d-flex align-items-center mb-1"><i class="ti ti-circle-filled fs-8 me-2" :class="module.DotClass"></i>{{ module.Title }}y</h4>
                            <span class="fw-medium text-default">{{ module.Count }}</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class="text-purple"><i class="ti ti-plus"></i></a>
                            <div class="dropdown table-action ms-2">
                                <a href="#" class="action-icon dropdown-toggle bg-white" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deal"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kanban-drag-wrap pt-4">
                <draggable :list="module.Cards" :group="{ name: 'kanban', pull: true, put: true }" @end="onDragEnd(color)">
                    <div v-for="Card in module.Cards" :key="Card.id">
                        <div class="card kanban-card border">
                            <div class="card-body">
                                <div class="d-block">
                                    <div class="border border-2 mb-3" :class="Card.CardClass"></div>
                                    <div class="d-flex align-items-center mb-3">
                                        <router-link to="/crm/deals-details" class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span class="avatar-title text-dark">{{ Card.Logo }}</span></router-link>
                                        <h6 class="fw-medium"><router-link to="/crm/deals-details"> {{ Card.CompanyName }} <br> {{ Card.CompanyNameOne }} </router-link></h6>
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
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-md flex-shrink-0 me-2"><img :src="require(`@/assets/img/profiles/${Card.Image}`)" alt=""></a>
                                        <a href="javascript:void(0);" class="text-default">{{ Card.Name }}</a>
                                    </div>
                                    <span class="badge badge-sm text-white bg-blue"><i class="ti ti-progress me-1"></i>{{ Card.Percentage }}</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                    <span><i class="ti ti-calendar-due"></i> {{ Card.Date }} </span>
                                    <div class="icons-social d-flex align-items-center">
                                        <a href="#" class="d-flex align-items-center justify-content-center me-1"><i class="ti ti-phone-check"></i></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center me-1"><i class="ti ti-message-circle-2"></i></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><i class="ti ti-color-swatch"></i></a>
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
                Qualify: {
                    DotClass: "text-success",
                    Title: "Qualify To Buy",
                    Count: "45 Leads - $15,44,540",
                    Cards: [
                        {
                            CardClass: "bg-purple",
                            Logo: "HT",
                            CompanyName: "Howell, Tremblay and Rath",
                            CompanyNameOne: "and Rath",
                            Amount: "$03,50,000",
                            Email: "darleeo@example.com",
                            MobileNo: "+1 12445-47878",
                            Location: "Newyork, United States",
                            Image: "avatar-19.jpg",
                            Name: "Darlee Robertson",
                            Percentage: "85%",
                            Date: "10 Jan 2024",
                        },
                        {
                            CardClass: "bg-warning",
                            Logo: "RJ",
                            CompanyName: "Robert, John",
                            CompanyNameOne: "and Carlos",
                            Amount: "$02,10,000",
                            Email: "sheron@example.com",
                            MobileNo: "+1 12445-47878",
                            Location: "Exeter, United States",
                            Image: "avatar-20.jpg",
                            Name: "Darlee Robertson",
                            Percentage: "15%",
                            Date: "12 Jan 2024",
                        },
                        {
                            CardClass: "bg-success",
                            Logo: "WS",
                            CompanyName: "Wendy, Star",
                            CompanyNameOne: "and David",
                            Amount: "$04,22,000",
                            Email: "vau@example.com",
                            MobileNo: "+1 12445-47878",
                            Location: "Phoenix, United States",
                            Image: "avatar-21.jpg",
                            Name: "Darlee Robertson",
                            Percentage: "95%",
                            Date: "14 Jan 2024",
                        },
                    ],
                },
                Contact: {
                    DotClass: "text-info",
                    Title: "Contact Made",
                    Count: "30 Leads - $19,94,938",
                    Cards: [
                        {
                            CardClass: "bg-success",
                            Logo: "BR",
                            CompanyName: "Byron, Roman",
                            CompanyNameOne: "and Bailey",
                            Amount: "$02,45,000",
                            Email: "jessica13@example.com",
                            MobileNo: "+1 89351-90346",
                            Location: "Chester, United States",
                            Image: "avatar-01.jpg",
                            Name: "Jessica",
                            Percentage: "47%",
                            Date: "06 Feb 2024",
                        },
                        {
                            CardClass: "bg-purple",
                            Logo: "CH",
                            CompanyName: "Robert, John",
                            CompanyNameOne: "and Carlos",
                            Amount: "$01,17,000",
                            Email: "caroltho3@example.com",
                            MobileNo: "+1 78982-09163",
                            Location: "Charlotte, United States",
                            Image: "avatar-16.jpg",
                            Name: "Carol Thomas",
                            Percentage: "98%",
                            Date: "15 Feb 2024",
                        },
                        {
                            CardClass: "bg-danger",
                            Logo: "IC",
                            CompanyName: "Irene, Charles",
                            CompanyNameOne: "and Wilston",
                            Amount: "$02,12,000",
                            Email: "dawnmercha@example.com",
                            MobileNo: "+1 27691-89246",
                            Location: "Bristol, United States",
                            Image: "avatar-22.jpg",
                            Name: "Dawn Mercha",
                            Percentage: "78%",
                            Date: "25 Jan 2024",
                        },
                    ],
                },
                Presentation: {
                    DotClass: "text-warning",
                    Title: "Presentation",
                    Count: "25 Leads - $10,36.390",
                    Cards: [
                        {
                            CardClass: "bg-warning",
                            Logo: "HT",
                            CompanyName: "Jody, Powell",
                            CompanyNameOne: "and Cecil",
                            Amount: "$01,84,043",
                            Email: "rachel@example.com",
                            MobileNo: "+1 17839-93617",
                            Location: "Baltimore, United States",
                            Image: "avatar-23.jpg",
                            Name: "Rachel Hampton",
                            Percentage: "25%",
                            Date: "18 Mar 2024",
                        },
                        {
                            CardClass: "bg-success",
                            Logo: "BL",
                            CompanyName: "Bonnie, Linda",
                            CompanyNameOne: "and Mullin",
                            Amount: "$09,35,189",
                            Email: "jonelle@example.com",
                            MobileNo: "+1 16739-47193",
                            Location: "Coventry, United States",
                            Image: "avatar-24.jpg",
                            Name: "Jonelle Curtiss",
                            Percentage: "70%",
                            Date: "15 Feb 2024",
                        },
                        {
                            CardClass: "bg-purple",
                            Logo: "CJ",
                            CompanyName: "Carlos, Jones",
                            CompanyNameOne: "and Jim",
                            Amount: "$04,27,940",
                            Email: "jonathan@example.com",
                            MobileNo: "+1 18390-37153",
                            Location: "Seattle",
                            Image: "avatar-25.jpg",
                            Name: "Jonathan",
                            Percentage: "45%",
                            Date: "30 Jan 2024",
                        },
                    ],
                },
                Proposal: {
                    DotClass: "text-purple",
                    Title: "Proposal Made",
                    Count: "50 Leads - $18,83,013",
                    Cards: [
                        {
                            CardClass: "bg-danger",
                            Logo: "FJ",
                            CompanyName: "Freda,Jennfier",
                            CompanyNameOne: "and Thompson",
                            Amount: "$04,17,593",
                            Email: "sidney@example.com",
                            MobileNo: "+1 11739-38135",
                            Location: "London, United States",
                            Image: "avatar-17.jpg",
                            Name: "Sidney Franks",
                            Percentage: "59%",
                            Date: "11 Apr 2024",
                        },
                        {
                            CardClass: "bg-purple",
                            Logo: "BF",
                            CompanyName: "Bruce, Faulkner",
                            CompanyNameOne: "and Lela",
                            Amount: "$08,81,389",
                            Email: "brook@example.com",
                            MobileNo: "+1 19302-91043",
                            Location: "Detroit, United States",
                            Image: "avatar-26.jpg",
                            Name: "Brook",
                            Percentage: "72%",
                            Date: "17 Apr 2024",
                        },
                        {
                            CardClass: "bg-warning",
                            Logo: "LP",
                            CompanyName: "Lawrence, Patrick",
                            CompanyNameOne: "and Vandorn",
                            Amount: "$09,27,193",
                            Email: "mickey@example.com",
                            MobileNo: "+1 17280-92016",
                            Location: "Manchester, United States",
                            Image: "avatar-15.jpg",
                            Name: "Mickey",
                            Percentage: "20%",
                            Date: "10 Feb 2024",
                        },
                    ],
                },
            }
        }
    },
    methods: {
        onDragEnd() {
        },
        onModuleDragEnd() {
        },
    },
}
</script>