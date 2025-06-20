<template>
  <div class="modal custom-modal fade" id="add_translate" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <form @submit.prevent="submitForm">
          <div class="modal-body pb-0">
            <div class="translate-item">
              <div class="d-flex align-items-center">
                <div class="lang-flag">
                  <a href="javascript:void(0);">
                    <img
                      class="avatar-img"
                      src="@/assets/img/icons/flag-02.svg"
                      alt="Flag"
                    /><span>Arabic</span>
                  </a>
                </div>
                <div class="lang-progress">
                  <p class="mb-0">Progress</p>
                  <div class="d-flex align-items-center">
                    <div class="progress">
                      <div class="progress-bar bg-blue" role="progressbar"></div>
                    </div>
                    <span class="position-static ms-2">40%</span>
                  </div>
                </div>
              </div>
              <router-link to="/website-settings/language" class="btn btn-primary"
                ><i class="ti ti-arrow-narrow-left me-2"></i>Back to
                Translation</router-link
              >
            </div>
            <div class="translate-wrap translate-title">
              <div class="row align-items-center">
                <div class="col-md-8">
                  <h6 class="fw-medium mb-3">English</h6>
                </div>
                <div class="col-md-4">
                  <h6 class="fw-medium mb-3">Arabic</h6>
                </div>
              </div>
            </div>
            <div>
              <div class="row align-items-center">
                <div class="col-md-8">
                  <h6 class="fw-medium mb-3">Bugs</h6>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <input type="text" class="form-control" value="البق" />
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="row align-items-center">
                <div class="col-md-8">
                  <h6 class="fw-medium mb-3">Bugs Email</h6>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <input
                      type="text"
                      class="form-control"
                      value="البق البريد الإلكتروني"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="row align-items-center">
                <div class="col-md-8">
                  <h6 class="fw-medium mb-3">Bug Assigned</h6>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <input
                      type="text"
                      class="form-control"
                      value="البق البريد الإلكتروني"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="row align-items-center">
                <div class="col-md-8">
                  <h6 class="fw-medium mb-3">Bug Comments</h6>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <input type="text" class="form-control" value="علة تعليقات" />
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="row align-items-center">
                <div class="col-md-8">
                  <h6 class="fw-medium mb-3">Bug Attachment</h6>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <input type="text" class="form-control" value="البقعلة مرفق" />
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="row align-items-center">
                <div class="col-md-8">
                  <h6 class="fw-medium mb-3">Bug Updated</h6>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <input
                      type="text"
                      class="form-control"
                      value="البق بمجلس تم الحفظ بنجاح"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="row align-items-center">
                <div class="col-md-8">
                  <h6 class="fw-medium mb-3">Bug Reported</h6>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <input
                      type="text"
                      class="form-control"
                      value="توقيت بمجلس المحذوفة بنجاح"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="row align-items-center">
                <div class="col-md-8">
                  <h6 class="fw-medium mb-3">Bugs information successfully updated</h6>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <input
                      type="text"
                      class="form-control"
                      value="البق بمجلس المحذوفة بنجاح"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="row align-items-center">
                <div class="col-md-8">
                  <h6 class="fw-medium mb-3">Bugs information successfully Saved</h6>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <input type="text" class="form-control" value="علة التحديث" />
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="row align-items-center">
                <div class="col-md-8">
                  <h6 class="fw-medium mb-3">Timer information successfully Deleted</h6>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <input
                      type="text"
                      class="form-control"
                      value="آخر البق الجديدة التي تمت إضافتها"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="row align-items-center">
                <div class="col-md-8">
                  <h6 class="fw-medium mb-3">Bugs infromation successfully Deleted</h6>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <input type="text" class="form-control" value="جميع البق" />
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="row align-items-center">
                <div class="col-md-8">
                  <h6 class="fw-medium mb-3">Bug Updated</h6>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <input
                      type="text"
                      class="form-control"
                      value="البق بمجلس تم الحفظ بنجاح"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="d-flex align-items-center">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">
                Save
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {};
  },
  methods: {
    submitForm() {
      this.$router.push("/website-settings/language-web");
    },
  },
};
</script>
