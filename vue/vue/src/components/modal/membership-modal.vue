<template>
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Add New Plan</h5>
      <button
        type="button"
        class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
        data-bs-dismiss="offcanvas"
        aria-label="Close"
      >
        <i class="ti ti-x"></i>
      </button>
    </div>
    <div class="offcanvas-body">
      <form @submit.prevent="submitForm">
        <div>
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label">
                  Plan Name <span class="text-danger">*</span></label
                >
                <input type="text" class="form-control" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Plan Type <span class="text-danger">*</span></label
                >
                <vue-select :options="EnterSel" id="entersel" placeholder="Choose" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center">
                  <label class="col-form-label"
                    >Plan Price <span class="text-danger">*</span></label
                  >
                  <span class="text-danger"
                    ><i class="ti ti-info-circle me-2"></i>Set 0 for free</span
                  >
                </div>
                <vue-select :options="AmEnterSel" id="amentersel" placeholder="Choose" />
              </div>
            </div>
            <div class="col-md-12">
              <h5 class="mb-3">Plan Settings</h5>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Contacts <span class="text-danger">*</span></label
                >
                <div class="d-flex align-items-center">
                  <input type="text" class="form-control" value="0-100" />
                  <div class="status-toggle ms-3">
                    <input id="mem-tog-1" class="check" type="checkbox" />
                    <label for="mem-tog-1" class="checktoggle">checkbox</label>
                  </div>
                </div>
                <label class="checkboxs mt-2"
                  ><input type="checkbox" /><span
                    class="checkmarks mem-plane-check"
                  ></span
                  >Unlimited</label
                >
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Leads <span class="text-danger">*</span></label
                >
                <div class="d-flex align-items-center">
                  <input type="text" class="form-control" value="0-100" />
                  <div class="status-toggle ms-3">
                    <input id="mem-tog-2" class="check" type="checkbox" />
                    <label for="mem-tog-2" class="checktoggle">checkbox</label>
                  </div>
                </div>
                <label class="checkboxs mt-2"
                  ><input type="checkbox" /><span
                    class="checkmarks mem-plane-check"
                  ></span
                  >Unlimited</label
                >
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Companies <span class="text-danger">*</span></label
                >
                <div class="d-flex align-items-center">
                  <input type="text" class="form-control" value="0-100" />
                  <div class="status-toggle ms-3">
                    <input id="mem-tog-3" class="check" type="checkbox" />
                    <label for="mem-tog-3" class="checktoggle">checkbox</label>
                  </div>
                </div>
                <label class="checkboxs mt-2"
                  ><input type="checkbox" /><span
                    class="checkmarks mem-plane-check"
                  ></span
                  >Unlimited</label
                >
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Compaigns <span class="text-danger">*</span></label
                >
                <div class="d-flex align-items-center">
                  <input type="text" class="form-control" value="0-100" />
                  <div class="status-toggle ms-3">
                    <input id="mem-tog-4" class="check" type="checkbox" />
                    <label for="mem-tog-4" class="checktoggle">checkbox</label>
                  </div>
                </div>
                <label class="checkboxs mt-2"
                  ><input type="checkbox" /><span
                    class="checkmarks mem-plane-check"
                  ></span
                  >Unlimited</label
                >
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Projects <span class="text-danger">*</span></label
                >
                <div class="d-flex align-items-center">
                  <input type="text" class="form-control" value="0-100" />
                  <div class="status-toggle ms-3">
                    <input id="mem-tog-5" class="check" type="checkbox" />
                    <label for="mem-tog-5" class="checktoggle">checkbox</label>
                  </div>
                </div>
                <label class="checkboxs mt-2"
                  ><input type="checkbox" /><span
                    class="checkmarks mem-plane-check"
                  ></span
                  >Unlimited</label
                >
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Deals <span class="text-danger">*</span></label
                >
                <div class="d-flex align-items-center">
                  <input type="text" class="form-control" value="0-100" />
                  <div class="status-toggle ms-3">
                    <input id="mem-tog-6" class="check" type="checkbox" />
                    <label for="mem-tog-6" class="checktoggle">checkbox</label>
                  </div>
                </div>
                <label class="checkboxs mt-2"
                  ><input type="checkbox" /><span
                    class="checkmarks mem-plane-check"
                  ></span
                  >Unlimited</label
                >
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Tasks <span class="text-danger">*</span></label
                >
                <div class="d-flex align-items-center">
                  <input type="text" class="form-control" value="0-100" />
                  <div class="status-toggle ms-3">
                    <input id="mem-tog-7" class="check" type="checkbox" />
                    <label for="mem-tog-7" class="checktoggle">checkbox</label>
                  </div>
                </div>
                <label class="checkboxs mt-2"
                  ><input type="checkbox" /><span
                    class="checkmarks mem-plane-check"
                  ></span
                  >Unlimited</label
                >
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Pipelines <span class="text-danger">*</span></label
                >
                <div class="d-flex align-items-center">
                  <input type="text" class="form-control" value="0-100" />
                  <div class="status-toggle ms-3">
                    <input id="mem-tog-8" class="check" type="checkbox" />
                    <label for="mem-tog-8" class="checktoggle">checkbox</label>
                  </div>
                </div>
                <label class="checkboxs mt-2"
                  ><input type="checkbox" /><span
                    class="checkmarks mem-plane-check"
                  ></span
                  >Unlimited</label
                >
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <a href="#" class="btn btn-light me-2">Cancel</a>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      EnterSel: ["Choose", "Basic", "Business", "Enterprise"],
      AmEnterSel: ["Choose", "$50", "$200", "$400"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/membership/membership-plans");
    },
  },
};
</script>
