<template>
  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <perfect-scrollbar
      class="scroll-area"
      :settings="settings"
      @ps-scroll-y="scrollHanle"
    >
      <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
          <ul>
            <li class="clinicdropdown">
              <router-link to="/settings/profile">
                <img
                  src="@/assets/img/profiles/avatar-14.jpg"
                  class="img-fluid"
                  alt="Profile"
                />
                <div class="user-names">
                  <h5>Adrian Davies</h5>
                  <h6>Tech Lead</h6>
                </div>
              </router-link>
            </li>
          </ul>
          <vertical-sidebar></vertical-sidebar>
        </div>
      </div>
    </perfect-scrollbar>
  </div>
  <!-- /Sidebar -->
  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <div class="modern-profile p-3 pb-0">
      <div class="sidebar-nav mb-3">
        <ul
          class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent"
          role="tablist"
        >
          <li class="nav-item"><a class="nav-link active border-0" href="#">Menu</a></li>
          <li class="nav-item">
            <router-link class="nav-link border-0" to="/application/chat"
              >Chats</router-link
            >
          </li>
          <li class="nav-item">
            <router-link class="nav-link border-0" to="/application/email"
              >Inbox</router-link
            >
          </li>
        </ul>
      </div>
    </div>
    <div class="sidebar-header p-3 pb-0 pt-2">
      <div class="d-flex align-items-center justify-content-between menu-item mb-3">
        <div class="me-3">
          <router-link to="/application/calendar" class="btn btn-icon border btn-menubar">
            <i class="ti ti-layout-grid-remove"></i>
          </router-link>
        </div>
        <div class="me-3">
          <router-link
            to="/application/chat"
            class="btn btn-icon border btn-menubar position-relative"
          >
            <i class="ti ti-brand-hipchat"></i>
          </router-link>
        </div>
        <div class="me-3 notification-item">
          <router-link
            to="/crm/activities-list"
            class="btn btn-icon border btn-menubar position-relative me-1"
          >
            <i class="ti ti-bell"></i>
            <span class="notification-status-dot"></span>
          </router-link>
        </div>
        <div class="me-0">
          <router-link to="/application/email" class="btn btn-icon border btn-menubar">
            <i class="ti ti-message"></i>
          </router-link>
        </div>
      </div>
    </div>
    <perfect-scrollbar
      class="scroll-area"
      :settings="settings"
      @ps-scroll-y="scrollHanle"
    >
      <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
          <ul>
            <li class="clinicdropdown">
              <router-link to="/settings/profile">
                <img
                  src="@/assets/img/profiles/avatar-14.jpg"
                  class="img-fluid"
                  alt="Profile"
                />
                <div class="user-names">
                  <h5>Adrian Davies</h5>
                  <h6>Tech Lead</h6>
                </div>
              </router-link>
            </li>
          </ul>
          <vertical-sidebar></vertical-sidebar>
        </div>
      </div>
    </perfect-scrollbar>
  </div>
  <!-- /Sidebar -->
</template>

<script>
import { PerfectScrollbar } from "vue3-perfect-scrollbar";
import "vue3-perfect-scrollbar/dist/vue3-perfect-scrollbar.css";
export default {
  components: {
    PerfectScrollbar,
  },
  data() {
    return {
      settings: {
        suppressScrollX: true,
      },
    };
  },
  methods: {
    scrollHanle() {},
  },
};
</script>
