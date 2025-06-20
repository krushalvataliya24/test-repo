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
            <system-sidebar></system-sidebar>
            <div class="col-xl-9 col-lg-12">
              <!-- GDPR Cookies -->
              <div class="card">
                <div class="card-body">
                  <div class="mb-3">
                    <h4 class="fs-20">GDPR Cookies</h4>
                  </div>
                  <form @submit.prevent="submitForm">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <h6 class="fw-medium">Cookies Content Text</h6>
                          <p class="fs-12">You can configure the text here</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <ckeditor
                            :editor="editor"
                            v-model="editorData"
                            :config="editorConfig"
                          ></ckeditor>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <h6 class="fw-medium">Cookies Position</h6>
                          <p class="fs-12">You can configure the type</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="mb-3">
                          <vue-select
                            :options="RightSel"
                            id="rightsel"
                            placeholder="Right"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <h6 class="fw-medium">Agree Button Text</h6>
                          <p class="fs-12">You can configure the text here</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="mb-3">
                          <input type="text" class="form-control" value="Manage" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <h6 class="fw-medium">Decline Button Text</h6>
                          <p class="fs-12">You can configure the text here</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="mb-3">
                          <input type="text" class="form-control" value="Manage" />
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <h6 class="fw-medium">Show Decline Button</h6>
                          <p class="fs-12">To display decline button</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="mb-3">
                          <div class="status-toggle">
                            <input type="checkbox" id="sms1" class="check" checked="" />
                            <label for="sms1" class="checktoggle"> </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <h6 class="fw-medium">Link for Cookies Page</h6>
                          <p class="fs-12">You can configure the link here</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="mb-3">
                          <input type="text" class="form-control" />
                        </div>
                      </div>
                    </div>
                    <div class="d-flex align-items-center">
                      <a href="#" class="btn btn-light me-2">Cancel</a>
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /GDPR Cookies -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
export default {
  data() {
    return {
      editor: ClassicEditor,
      editorData: "Description",
      editorConfig: {},
      title: "Settings",
      RightSel: ["Right", "Left"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/system-settings/gdpr-cookies");
    },
  },
};
</script>
