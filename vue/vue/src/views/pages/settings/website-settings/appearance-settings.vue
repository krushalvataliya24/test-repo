<template>
  <layouts-header></layouts-header>
  <layouts-sidebar></layouts-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- Page Header -->
          <page-header :title="title" />
          <!-- /Page Header -->

          <!-- Settings Menu -->
          <settings-tabs></settings-tabs>
          <!-- /Settings Menu -->

          <div class="row">
            <website-sidebar></website-sidebar>

            <div class="col-xl-9 col-lg-12">
              <!-- Appearance -->
              <div class="card">
                <div class="card-body">
                  <h4 class="fw-semibold mb-3">Appearance</h4>
                  <form @submit.prevent="submitForm">
                    <div class="mb-0">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="mb-3">
                            <h6 class="fw-medium">Select Theme</h6>
                            <p>Select theme of the website</p>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="mb-3 mb-0">
                            <div class="theme-type-images d-flex align-items-center">
                              <div
                                v-for="(image, index) in themeImages"
                                :key="index"
                                class="theme-image"
                                @click="selectTheme(index)"
                                :class="{ active: image.isActive }"
                              >
                                <div class="theme-image-set">
                                  <img
                                    :src="require(`@/assets/img/theme/${image.src}`)"
                                    alt=""
                                  />
                                </div>
                                <span>{{ image.label }}</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="mb-3">
                            <h6 class="fw-medium">Accent Color</h6>
                            <p>Select accent color of website</p>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="mb-3">
                            <div class="theme-colors">
                              <ul>
                                <li v-for="(color, index) in themeColors" :key="index">
                                  <span
                                    :class="generateClass(color)"
                                    @click="setActiveColor(index)"
                                  ></span>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="mb-3">
                            <h6 class="fw-medium">Expand Sidebar</h6>
                            <p>To display in all the pages</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" checked />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="mb-3">
                            <h6 class="fw-medium">Sidebar Size</h6>
                            <p>Select size of sidebar to display</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <vue-select
                              :options="LargeSel"
                              id="largeel"
                              placeholder="Large - 250px"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="mb-3">
                            <h6 class="fw-medium">Font Family</h6>
                            <p>Select font family of website</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <vue-select
                              :options="NotoSel"
                              id="notosel"
                              placeholder="Noto Sans"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <a href="#" class="btn btn-light me-2">Cancel</a>
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /Appearance -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      title: "Settings",
      LargeSel: ["Large - 250px", "Small -85px"],
      NotoSel: ["Noto Sans", "Nunito"],
      themeColors: [
        { name: "themecolorset defaultcolor", isActive: true },
        { name: "themecolorset theme-secondary", isActive: false },
        { name: "themecolorset theme-violet", isActive: false },
        { name: "themecolorset theme-blue", isActive: false },
        { name: "themecolorset theme-brown", isActive: false },
      ],
      themeImages: [
        { src: "theme-01.jpg", label: "Light", isActive: true },
        { src: "theme-02.jpg", label: "Dark", isActive: false },
        { src: "theme-03.jpg", label: "Automatic", isActive: false },
      ],
      selectedThemeIndex: null,
    };
  },
  methods: {
    selectTheme(index) {
      this.selectedThemeIndex = index;
      // You can also update the isActive property here if needed
      this.themeImages.forEach((image, i) => {
        image.isActive = i === index;
      });
    },
    setActiveColor(index) {
      // Reset isActive for all themeColors
      this.themeColors.forEach((color, i) => {
        color.isActive = i === index;
      });

      // Set the activeTheme to the name of the clicked color
      this.activeTheme = this.themeColors[index].name;
    },
    generateClass(color) {
      return color.name + (color.isActive ? " active" : "");
    },
    submitForm() {
      this.$router.push("/website-settings/appearance-settings");
    },
  },
};
</script>
