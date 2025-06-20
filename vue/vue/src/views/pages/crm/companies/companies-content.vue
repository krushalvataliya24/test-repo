<template>
    <div class="col-xxl-3 col-xl-4 col-md-6" v-for="item in CompaniesGrid" :key="item.id">
        <div class="card border">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-3">
                    <div class="d-flex align-items-center">
                        <router-link to="/crm/company-details" class="avatar avatar-lg border rounded flex-shrink-0 me-2">
                            <img :src="require(`@/assets/img/icons/${item.company_image}`)" class="w-auto h-auto" alt="img">
                        </router-link>
                        <div>
                            <h6><router-link to="/crm/company-details" class="fw-medium">{{item.company_name}}</router-link></h6>
                            <div class="set-star text-default">
                                <i class="fa fa-star filled me-1"></i>{{item.rating}}
                            </div>
                        </div>
                    </div>
                    <div class="dropdown table-action">
                        <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash text-danger"></i> Delete</a>
                            <router-link class="dropdown-item" to="/crm/company-details"><i class="ti ti-eye text-blue-light"></i> Preview</router-link>
                        </div>
                    </div>
                </div>
                <div class="d-block">
                    <div class="d-flex flex-column mb-3">
                        <p class="text-default d-inline-flex align-items-center mb-2"><i class="ti ti-mail text-dark me-1"></i>{{item.email}}</p>
                        <p class="text-default d-inline-flex align-items-center mb-2"><i class="ti ti-phone text-dark me-1"></i>{{item.phone}}</p>
                        <p class="text-default d-inline-flex align-items-center"><i class="ti ti-map-pin-pin text-dark me-1"></i>{{item.location}}</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="badge badge-tag badge-success-light me-2">Collab</span>
                        <span class="badge badge-tag badge-warning-light">Rated</span>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 border-top pt-3 mt-3">
                    <div class="avatar-list-stacked avatar-group-xs">
                        <span class="avatar border-0">
                            <img src="@/assets/img/profiles/avatar-01.jpg" class="rounded-circle" alt="img">
                        </span>
                        <span class="avatar border-0">
                            <img src="@/assets/img/profiles/avatar-02.jpg" class="rounded-circle" alt="img">
                        </span>
                        <span class="avatar border-0">
                            <img src="@/assets/img/profiles/avatar-03.jpg" class="rounded-circle" alt="img">
                        </span>
                        <span class="avatar border-0">
                            <img src="@/assets/img/profiles/avatar-04.jpg" class="rounded-circle" alt="img">
                        </span>
                    </div>
                    <div class="d-flex align-items-center grid-social-links">
                        <a href="#" class="avatar avatar-xs text-dark rounded-circle me-1"><i class="ti ti-mail fs-14"></i></a>
                        <a href="#" class="avatar avatar-xs text-dark rounded-circle me-1"><i class="ti ti-phone-check fs-14"></i></a>
                        <a href="#" class="avatar avatar-xs text-dark rounded-circle me-1"><i class="ti ti-message-circle-share fs-14"></i></a>
                        <a href="#" class="avatar avatar-xs text-dark rounded-circle me-1"><i class="ti ti-brand-skype fs-14"></i></a>
                        <a href="#" class="avatar avatar-xs text-dark rounded-circle"><i class="ti ti-brand-facebook fs-14"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</template>

<script>
import CompaniesGrid from '@/assets/json/companies.json'
export default {
    data() {
        return {
            CompaniesGrid :CompaniesGrid
        }
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
}
</script>