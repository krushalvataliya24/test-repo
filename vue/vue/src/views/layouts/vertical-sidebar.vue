<template>
  <ul>
    <template v-for="item in sideBarData" :key="item.tittle">
      <li>
        <h6 class="submenu-hdr">{{ item.tittle }}</h6>
        <ul>
          <template v-for="menu in item.menu" :key="menu.menuValue">
            <li v-if="!menu.hasSubRoute" :class="{ active: isMenuActive(menu) }">
              <router-link v-if="menu.route" :to="menu.route">
                <i :class="'ti ti-' + menu.icon"></i>
                <span>{{ menu.menuValue }}</span>
              </router-link>
            </li>
            <li v-else class="submenu">
              <a
                href="javascript:void(0);"
                @click="expandSubMenus(menu)"
                :class="{
                  subdrop: menu.showSubRoute && !openMenuItem,
                  active: isActive(menu),
                }"
              >
                <i :class="'ti ti-' + menu.icon"></i><span>{{ menu.menuValue }}</span>
                <span
                  v-if="menu.currentActive"
                  class="badge badge-danger fs-10 fw-medium text-white p-1"
                  >Hot</span
                >
                <span class="menu-arrow"></span>
              </a>
              <ul :class="menu.showSubRoute ? 'd-block' : 'd-none'">
                <li v-for="(subMenu, index) in menu.subMenus" :key="index">
                  <router-link :to="subMenu.route">{{ subMenu.menuValue }}</router-link>
                </li>
              </ul>
            </li>
            <li v-if="menu.hasSubRouteTwo" class="submenu">
              <a
                href="javascript:void(0);"
                @click="OpenMenu(menu)"
                :class="{
                  subdrop: openMenuItem === menu || isActive(menu),
                  active: isActive(menu),
                }"
              >
                <i :class="'ti ti-' + menu.icon"></i><span>{{ menu.menuValue }}</span>
                <span class="menu-arrow"></span>
              </a>
              <ul
                :class="{
                  'd-block': openMenuItem === menu,
                  'd-none': openMenuItem !== menu,
                }"
              >
                <li v-for="subMenus in menu.subMenus" :key="subMenus.menuValue">
                  <template v-if="!subMenus.customSubmenuTwo">
                    <router-link :to="subMenus.route" router-link-active="active">{{
                      subMenus.menuValue
                    }}</router-link>
                  </template>
                  <template v-else-if="subMenus.customSubmenuTwo">
                    <li class="submenu submenu-two">
                      <a
                        href="javascript:void(0);"
                        @click="openSubmenuOne(subMenus)"
                        :class="{
                          subdrop:
                            openSubmenuOneItem === subMenus || isSubActive(subMenus),
                          active: isSubActive(subMenus),
                        }"
                      >
                        {{ subMenus.menuValue
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
                    </li>
                  </template>
                </li>
              </ul>
            </li>
          </template>
        </ul>
      </li>
    </template>
    <li class="menu-title"><span>Extras</span></li>
    <li>
      <ul>
        <li>
          <a href="javascript:void(0);"
            ><i class="ti ti-file-text"></i><span>Documentation</span></a
          >
        </li>
        <li>
          <a href="javascript:void(0);"
            ><i class="ti ti-exchange"></i><span>Changelog</span
            ><span class="badge bg-pink badge-xs text-white fs-10 ms-s">v4.0.2</span></a
          >
        </li>
        <li class="submenu">
          <a
            href="javascript:void(0);"
            :class="{ subdrop: multilevel[0] }"
            @click="multilevel[0] = !multilevel[0]"
          >
            <i class="ti ti-menu-2"></i>
            <span>Multi Level</span>
            <span class="menu-arrow"></span>
          </a>
          <ul :class="{ 'd-block': multilevel[0], 'd-none': !multilevel[0] }">
            <li>
              <a
                href="javascript:void(0);"
                :class="{ subdrop: multilevel[1] }"
                @click="multilevel[1] = !multilevel[1]"
                >Multilevel 1</a
              >
            </li>
            <li class="submenu submenu-two">
              <a
                href="javascript:void(0);"
                :class="{ subdrop: multilevel[2] }"
                @click="multilevel[2] = !multilevel[2]"
                >Multilevel 2<span class="menu-arrow inside-submenu"></span
              ></a>
              <ul :class="{ 'd-block': multilevel[2], 'd-none': !multilevel[2] }">
                <li><a href="javascript:void(0);">Multilevel 2.1</a></li>
                <li class="submenu submenu-two submenu-three">
                  <a
                    href="javascript:void(0);"
                    :class="{ subdrop: multilevel[3] }"
                    @click="multilevel[3] = !multilevel[3]"
                    >Multilevel 2.2<span
                      class="menu-arrow inside-submenu inside-submenu-two"
                    ></span
                  ></a>
                  <ul :class="{ 'd-block': multilevel[3], 'd-none': !multilevel[3] }">
                    <li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
                    <li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="javascript:void(0);">Multilevel 3</a></li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
</template>

<script>
import sideBarData from "@/assets/json/sidebar-data.json";
export default {
  data() {
    return {
      sideBarData: sideBarData,
      openMenuItem: null,
      openSubmenuOneItem: null,
      route_array: [],
      multilevel: [false, false, false],
    };
  },
  computed: {
    isMenuActive() {
      return (menu) => {
        return (
          this.$route.path === menu.route ||
          this.$route.path === menu.active_link ||
          this.$route.path === menu.active_link1 ||
          this.$route.path === menu.active_link2 ||
          this.$route.path === menu.active_link3 ||
          this.$route.path === menu.active_link4 ||
          this.$route.path === menu.active_link5
        );
      };
    },
    isActive() {
      return (menu) => {
        let result = this.$route.path.split("/").filter((part) => part);
        let base = result[0];
        return base === menu.active_link || base === menu.active_link1;
      };
    },
    isSubActive() {
      return (menu) => {
        let result = this.$route.path.split("/").filter((part) => part);
        let base = result[0];
        return base === menu.active_link;
      };
    },
  },
  methods: {
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
    OpenMenu(menu) {
      this.sideBarData.forEach((item) => {
        item.menu.forEach((subMenu) => {
          subMenu.showSubRoute = false;
        });
      });
      this.openMenuItem = this.openMenuItem === menu ? null : menu;
    },
    openSubmenuOne(subMenus) {
      this.openSubmenuOneItem = this.openSubmenuOneItem === subMenus ? null : subMenus;
    },
  },
};
</script>
