<template>
  <!-- Header -->
  <div class="header">
    <!-- Logo -->
    <div class="header-left active">
      <router-link to="/dashboard/deals-dashboard" class="logo logo-normal">
        <img src="@/assets/img/logo.svg" alt="Logo" />
        <img src="@/assets/img/white-logo.svg" class="white-logo" alt="Logo" />
      </router-link>
      <router-link to="/dashboard/deals-dashboard" class="logo-small">
        <img src="@/assets/img/logo-small.svg" alt="Logo" />
      </router-link>
      <a id="toggle_btn" href="javascript:void(0);" @click="toggleSidebar">
        <i class="ti ti-arrow-bar-to-left"></i>
      </a>
    </div>
    <!-- /Logo -->

    <a id="mobile_btn" class="mobile_btn" href="#sidebar" @click="toggleSidebar1">
      <span class="bar-icon">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </a>

    <div class="header-user">
      <ul class="nav user-menu">
        <!-- Search -->
        <li class="nav-item nav-search-inputs me-auto">
          <div class="top-nav-search">
            <a href="javascript:void(0);" class="responsive-search">
              <i class="fa fa-search"></i>
            </a>
            <form action="#" class="dropdown">
              <div class="searchinputs" id="dropdownMenuClickable">
                <input type="text" placeholder="Search" />
                <div class="search-addon">
                  <button type="submit"><i class="ti ti-command"></i></button>
                </div>
              </div>
            </form>
          </div>
        </li>
        <!-- /Search -->

        <!-- Horizontal Single -->
        <div class="sidebar sidebar-horizontal" id="horizontal-single">
          <div class="sidebar-menu">
            <div class="main-menu">
              <ul class="nav-menu">
                <template v-for="item in sideBarData" :key="item.tittle">
                  <li class="menu-title">
                    <span>{{ item.tittle }}</span>
                  </li>
                  <template v-for="menu in item.menu" :key="menu.menuValue">
                    <li
                      class="submenu"
                      v-if="
                        menu.hasSubRoute &&
                        (menu.menuValue === 'Dashboard' ||
                          menu.menuValue === 'Applications' ||
                          menu.menuValue === 'Layouts')
                      "
                      @click="expandSubMenus(menu)"
                    >
                      <a
                        href="javascript:void(0)"
                        :class="{ subdrop: menu.showSubRoute }"
                      >
                        <i :class="'ti ti-' + menu.icon"></i>
                        <span>{{ menu.menuValue }}</span>
                        <span class="menu-arrow"></span>
                      </a>
                      <ul
                        :class="{
                          'd-block': menu.showSubRoute,
                          'd-none': !menu.showSubRoute,
                        }"
                      >
                        <template
                          v-for="subMenu in menu.subMenus"
                          :key="subMenu.menuValue"
                        >
                          <li>
                            <router-link :to="subMenu.route">{{
                              subMenu.menuValue
                            }}</router-link>
                          </li>
                        </template>
                      </ul>
                    </li>
                    <li v-if="menu.hasSubRouteTwo" class="submenu">
                      <a
                        href="javascript:void(0);"
                        @click="openMenu(menu)"
                        :class="{
                          subdrop: openMenuItem === menu,
                          active: route_array[0] === menu.active_link,
                        }"
                      >
                        <i :class="'ti ti-' + menu.icon"></i
                        ><span>{{ menu.menuValue }}</span>
                        <span class="menu-arrow"></span>
                      </a>
                      <ul
                        :class="{
                          'd-block': openMenuItem === menu,
                          'd-none': openMenuItem !== menu,
                        }"
                      >
                        <li
                          v-for="subMenus in menu.subMenus"
                          :key="subMenus.menuValue"
                          :class="{
                            'submenu submenu-two':
                              subMenus.menuValue === 'Super Admin' ||
                              subMenus.menuValue === 'Calls' ||
                              subMenus.menuValue === 'Projects' ||
                              subMenus.menuValue === 'Crm' ||
                              subMenus.menuValue === 'Employee' ||
                              subMenus.menuValue === 'Tickets' ||
                              subMenus.menuValue === 'Attendance' ||
                              subMenus.menuValue === 'Performance' ||
                              subMenus.menuValue === 'Training' ||
                              subMenus.menuValue === 'Requirment' ||
                              subMenus.menuValue === 'Sales' ||
                              subMenus.menuValue === 'Accounting' ||
                              subMenus.menuValue === 'Crm Settings' ||
                              subMenus.menuValue === 'Payroll' ||
                              subMenus.menuValue === 'Assets' ||
                              subMenus.menuValue === 'Help & Supports' ||
                              subMenus.menuValue === 'User Management' ||
                              subMenus.menuValue === 'Reports' ||
                              subMenus.menuValue === 'General Settings' ||
                              subMenus.menuValue === 'Website Settings' ||
                              subMenus.menuValue === 'App Settings' ||
                              subMenus.menuValue === 'System Settings' ||
                              subMenus.menuValue === 'Financial Settings' ||
                              subMenus.menuValue === 'Other Settings' ||
                              subMenus.menuValue === 'Blogs' ||
                              subMenus.menuValue === 'Locations' ||
                              subMenus.menuValue === 'Membership' ||
                              subMenus.menuValue === 'Authentication' ||
                              subMenus.menuValue === 'Error Pages' ||
                              subMenus.menuValue === 'Forgot Password' ||
                              subMenus.menuValue === 'Reset Password' ||
                              subMenus.menuValue === 'Email Verification' ||
                              subMenus.menuValue === '2 Step Verification' ||
                              subMenus.menuValue === 'Base UI' ||
                              subMenus.menuValue === 'Advanced UI' ||
                              subMenus.menuValue === 'Forms' ||
                              subMenus.menuValue === 'Tables' ||
                              subMenus.menuValue === 'Charts' ||
                              subMenus.menuValue === 'Maps' ||
                              subMenus.menuValue === 'Icons',
                          }"
                        >
                          <template v-if="!subMenus.customSubmenuTwo">
                            <router-link :to="subMenus.route">{{
                              subMenus.menuValue
                            }}</router-link>
                          </template>
                          <template v-else-if="subMenus.customSubmenuTwo">
                            <a
                              href="javascript:void(0);"
                              @click="openSubmenuOne(subMenus)"
                              :class="{ subdrop: openSubmenuOneItem === subMenus }"
                              ><i :class="'ti ti-' + subMenus.iconone"></i
                              >{{ subMenus.menuValue
                              }}<span class="menu-arrow inside-submenu"></span>
                            </a>
                            <ul
                              :class="{
                                'd-block': openSubmenuOneItem === subMenus,
                                'd-none': openSubmenuOneItem !== subMenus,
                              }"
                            >
                              <li
                                v-for="subMenuTwo in subMenus.subMenusTwo"
                                :key="subMenuTwo.menuValue"
                              >
                                <router-link :to="subMenuTwo.route">{{
                                  subMenuTwo.menuValue
                                }}</router-link>
                              </li>
                            </ul>
                          </template>
                        </li>
                      </ul>
                    </li>
                  </template>
                </template>
              </ul>
            </div>
          </div>
        </div>
        <!-- /Horizontal Single -->

        <!-- Nav List -->
        <li class="nav-item nav-list">
          <ul class="nav">
            <li>
              <div>
                <a
                  href="#"
                  class="btn btn-icon border btn-menubar btnFullscreen"
                  @click="initFullScreen"
                >
                  <i class="ti ti-maximize"></i>
                </a>
              </div>
            </li>
            <li class="dark-mode-list">
              <a
                href="javascript:void(0);"
                id="dark-mode-toggle"
                class="dark-mode-toggle"
                @click="toggleDarkMode"
              >
                <i class="ti ti-sun light-mode" :class="{ active: isLightMode }"></i>
                <i class="ti ti-moon dark-mode" :class="{ active: !isLightMode }"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                href="javascript:void(0);"
                class="btn btn-header-list"
                data-bs-toggle="dropdown"
              >
                <i class="ti ti-layout-grid-add"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-end menus-info">
                <div class="row">
                  <div class="col-md-6">
                    <ul class="menu-list">
                      <li>
                        <router-link to="/crm/contacts-list">
                          <div class="menu-details">
                            <span class="menu-list-icon bg-violet">
                              <i class="ti ti-user-up"></i>
                            </span>
                            <div class="menu-details-content">
                              <p>Contacts</p>
                              <span>Add New Contact</span>
                            </div>
                          </div>
                        </router-link>
                      </li>
                      <li>
                        <router-link to="/crm/pipeline-list">
                          <div class="menu-details">
                            <span class="menu-list-icon bg-green">
                              <i class="ti ti-timeline-event-exclamation"></i>
                            </span>
                            <div class="menu-details-content">
                              <p>Pipline</p>
                              <span>Add New Pipline</span>
                            </div>
                          </div>
                        </router-link>
                      </li>
                      <li>
                        <router-link to="/crm/activities-list">
                          <div class="menu-details">
                            <span class="menu-list-icon bg-pink">
                              <i class="ti ti-bounce-right"></i>
                            </span>
                            <div class="menu-details-content">
                              <p>Activities</p>
                              <span>Add New Activity</span>
                            </div>
                          </div>
                        </router-link>
                      </li>
                      <li>
                        <router-link to="/crm/analytics">
                          <div class="menu-details">
                            <span class="menu-list-icon bg-info">
                              <i class="ti ti-analyze"></i>
                            </span>
                            <div class="menu-details-content">
                              <p>Analytics</p>
                              <span>Shows All Information</span>
                            </div>
                          </div>
                        </router-link>
                      </li>
                      <li>
                        <router-link to="/crm/projects-list">
                          <div class="menu-details">
                            <span class="menu-list-icon bg-danger">
                              <i class="ti ti-atom-2"></i>
                            </span>
                            <div class="menu-details-content">
                              <p>Projects</p>
                              <span>Add New Project</span>
                            </div>
                          </div>
                        </router-link>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="menu-list">
                      <li>
                        <router-link to="/crm/deals-list">
                          <div class="menu-details">
                            <span class="menu-list-icon bg-info">
                              <i class="ti ti-medal"></i>
                            </span>
                            <div class="menu-details-content">
                              <p>Deals</p>
                              <span>Add New Deals</span>
                            </div>
                          </div>
                        </router-link>
                      </li>
                      <li>
                        <router-link to="/crm/leads-list">
                          <div class="menu-details">
                            <span class="menu-list-icon bg-secondary">
                              <i class="ti ti-chart-arcs"></i>
                            </span>
                            <div class="menu-details-content">
                              <p>Leads</p>
                              <span>Add New Leads</span>
                            </div>
                          </div>
                        </router-link>
                      </li>
                      <li>
                        <router-link to="/crm/companies-list">
                          <div class="menu-details">
                            <span class="menu-list-icon bg-tertiary">
                              <i class="ti ti-building-community"></i>
                            </span>
                            <div class="menu-details-content">
                              <p>Company</p>
                              <span>Add New Company</span>
                            </div>
                          </div>
                        </router-link>
                      </li>
                      <li>
                        <router-link to="/crm/tasks">
                          <div class="menu-details">
                            <span class="menu-list-icon bg-success">
                              <i class="ti ti-list-check"></i>
                            </span>
                            <div class="menu-details-content">
                              <p>Tasks</p>
                              <span>Add New Task</span>
                            </div>
                          </div>
                        </router-link>
                      </li>
                      <li>
                        <router-link to="/crm/campaign">
                          <div class="menu-details">
                            <span class="menu-list-icon bg-purple">
                              <i class="ti ti-brand-campaignmonitor"></i>
                            </span>
                            <div class="menu-details-content">
                              <p>Campaign</p>
                              <span>Add New Campaign</span>
                            </div>
                          </div>
                        </router-link>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <router-link to="/content/faq" class="btn btn-help">
                <i class="ti ti-help-hexagon"></i>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/report/lead-reports" class="btn btn-chart-pie">
                <i class="ti ti-chart-pie"></i>
              </router-link>
            </li>
          </ul>
        </li>
        <!-- /Nav List -->

        <!-- Chat -->
        <li class="nav-item nav-item-email nav-item-box">
          <router-link to="/application/chat">
            <i class="ti ti-message-circle-exclamation"></i>
            <span class="badge rounded-pill">14</span>
          </router-link>
        </li>
        <!-- /Chat -->

        <!-- Notifications -->
        <li class="nav-item dropdown nav-item-box">
          <a href="javascript:void(0);" class="nav-link" data-bs-toggle="dropdown">
            <i class="ti ti-bell"></i>
            <span class="badge rounded-pill">13</span>
          </a>
          <div class="dropdown-menu dropdown-menu-end notification-dropdown">
            <div class="topnav-dropdown-header">
              <h4 class="notification-title">Notifications</h4>
            </div>
            <div class="noti-content">
              <ul class="notification-list">
                <li class="notification-message">
                  <router-link to="/crm/activities-list">
                    <div class="media d-flex">
                      <span class="avatar flex-shrink-0">
                        <img src="@/assets/img/profiles/avatar-02.jpg" alt="Profile" />
                        <span class="badge badge-info rounded-pill"></span>
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          Ray Arnold left 6 comments on Isla Nublar SOC2 compliance report
                        </p>
                        <p class="noti-time">Last Wednesday at 9:42 am</p>
                      </div>
                    </div>
                  </router-link>
                </li>
                <li class="notification-message">
                  <router-link to="/crm/activities-list">
                    <div class="media d-flex">
                      <span class="avatar flex-shrink-0">
                        <img src="@/assets/img/profiles/avatar-03.jpg" alt="Profile" />
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">Denise Nedry replied to Anna Srzand</p>
                        <p class="noti-sub-details">
                          “Oh, I finished de-bugging the phones, but the system's
                          compiling for eighteen minutes, or twenty. So, some minor
                          systems may go on and off for a while.”
                        </p>
                        <p class="noti-time">Last Wednesday at 9:42 am</p>
                      </div>
                    </div>
                  </router-link>
                </li>
                <li class="notification-message">
                  <router-link to="/crm/activities-list">
                    <div class="media d-flex">
                      <span class="avatar flex-shrink-0">
                        <img alt="" src="@/assets/img/profiles/avatar-06.jpg" />
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          John Hammond attached a file to Isla Nublar SOC2 compliance
                          report
                        </p>
                        <div class="noti-pdf">
                          <div class="noti-pdf-icon">
                            <span><i class="ti ti-chart-pie"></i></span>
                          </div>
                          <div class="noti-pdf-text">
                            <p>EY_review.pdf</p>
                            <span>2mb</span>
                          </div>
                        </div>
                        <p class="noti-time">Last Wednesday at 9:42 am</p>
                      </div>
                    </div>
                  </router-link>
                </li>
              </ul>
            </div>
            <div class="topnav-dropdown-footer">
              <router-link to="/crm/activities-list" class="view-link"
                >View all</router-link
              >
              <a href="javascript:void(0);" class="clear-link">Clear all</a>
            </div>
          </div>
        </li>
        <!-- /Notifications -->

        <!-- Profile Dropdown -->
        <li class="nav-item dropdown has-arrow main-drop">
          <a
            href="javascript:void(0);"
            class="nav-link userset"
            data-bs-toggle="dropdown"
          >
            <span class="user-info">
              <span class="user-letter">
                <img src="@/assets/img/profiles/avatar-20.jpg" alt="Profile" />
              </span>
              <span class="badge badge-success rounded-pill"></span>
            </span>
          </a>
          <div class="dropdown-menu menu-drop-user">
            <div class="profilename">
              <router-link class="dropdown-item" to="/dashboard/">
                <i class="ti ti-layout-2"></i> Dashboard
              </router-link>
              <router-link class="dropdown-item" to="/settings/profile">
                <i class="ti ti-user-pin"></i> My Profile
              </router-link>
              <router-link class="dropdown-item" to="/">
                <i class="ti ti-lock"></i> Logout
              </router-link>
            </div>
          </div>
        </li>
        <!-- /Profile Dropdown -->
      </ul>
    </div>

    <!-- Mobile Menu -->
    <div class="dropdown mobile-user-menu">
      <a
        href="javascript:void(0);"
        class="nav-link dropdown-toggle"
        data-bs-toggle="dropdown"
        aria-expanded="false"
        ><i class="fa fa-ellipsis-v"></i
      ></a>
      <div class="dropdown-menu">
        <router-link class="dropdown-item" to="/dashboard/">
          <i class="ti ti-layout-2"></i> Dashboard
        </router-link>
        <router-link class="dropdown-item" to="/settings/profile">
          <i class="ti ti-user-pin"></i> My Profile
        </router-link>
        <router-link class="dropdown-item" to="/">
          <i class="ti ti-lock"></i> Logout
        </router-link>
      </div>
    </div>
    <!-- /Mobile Menu -->
  </div>
  <!-- /Header -->
</template>

<script>
import sideBarData from "@/assets/json/sidebar-menuone.json";
export default {
  data() {
    return {
      isLightMode: true,
      sideBarData: sideBarData,
      openMenuItem: null,
      openSubmenuOneItem: null,
      route_array: [],
    };
  },
  methods: {
    initFullScreen() {
      document.body.classList.toggle("fullscreen-enable");
      if (
        !document.fullscreenElement &&
        /* alternative standard method */
        !document.mozFullScreenElement &&
        !document.webkitFullscreenElement
      ) {
        // current working methods
        if (document.documentElement.requestFullscreen) {
          document.documentElement.requestFullscreen();
        } else if (document.documentElement.mozRequestFullScreen) {
          document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullscreen) {
          document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
        }
      } else {
        if (document.cancelFullScreen) {
          document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
          document.webkitCancelFullScreen();
        }
      }
    },
    toggleSidebar1() {
      const body = document.body;
      body.classList.toggle("slide-nav");
    },
    toggleSidebar() {
      const body = document.body;
      body.classList.toggle("mini-sidebar");
    },
    initializeDarkMode() {
      if (localStorage.getItem("darkMode") === "enabled") {
        this.enableDarkMode();
      }
    },
    enableDarkMode() {
      document.documentElement.setAttribute("data-theme", "dark");
      this.isLightMode = false;
      localStorage.setItem("darkMode", "enabled");
    },
    disableDarkMode() {
      document.documentElement.setAttribute("data-theme", "light");
      this.isLightMode = true;
      localStorage.removeItem("darkMode");
    },
    toggleDarkMode() {
      if (this.isLightMode) {
        this.enableDarkMode();
      } else {
        this.disableDarkMode();
      }
    },
    initMouseoverListener() {
      document.addEventListener("mouseover", this.handleMouseover);
    },
    handleMouseover(e) {
      e.stopPropagation();

      const body = document.body;
      const toggleBtn = document.getElementById("toggle_btn");

      if (body.classList.contains("mini-sidebar") && this.isElementVisible(toggleBtn)) {
        const target = e.target.closest(".sidebar, .header-left");

        if (target) {
          body.classList.add("expand-menu");
          this.slideDownSubmenu();
        } else {
          body.classList.remove("expand-menu");
          this.slideUpSubmenu();
        }

        e.preventDefault();
      }
    },
    isElementVisible(element) {
      return element.offsetWidth > 0 || element.offsetHeight > 0;
    },
    slideDownSubmenu() {
      const subdropPlusUl = document.getElementsByClassName("subdrop");
      for (let i = 0; i < subdropPlusUl.length; i++) {
        const submenu = subdropPlusUl[i].nextElementSibling;
        if (submenu && submenu.tagName.toLowerCase() === "ul") {
          submenu.style.display = "block";
        }
      }
    },
    slideUpSubmenu() {
      const subdropPlusUl = document.getElementsByClassName("subdrop");
      for (let i = 0; i < subdropPlusUl.length; i++) {
        const submenu = subdropPlusUl[i].nextElementSibling;
        if (submenu && submenu.tagName.toLowerCase() === "ul") {
          submenu.style.display = "none";
        }
      }
    },
    expandSubMenus(menu) {
      this.sideBarData.forEach((item) => {
        item.menu.forEach((subMenu) => {
          if (subMenu !== menu) {
            subMenu.showSubRoute = false;
          }
        });
      });
      menu.showSubRoute = !menu.showSubRoute;
    },
    openMenu(menu) {
      this.openMenuItem = this.openMenuItem === menu ? null : menu;
    },
    openSubmenuOne(subMenus) {
      this.openSubmenuOneItem = this.openSubmenuOneItem === subMenus ? null : subMenus;
    },
  },
  mounted() {
    this.initializeDarkMode();
    this.initMouseoverListener();
  },
  beforeUnmount() {
    document.removeEventListener("mouseover", this.handleMouseover);
  },
};
</script>
