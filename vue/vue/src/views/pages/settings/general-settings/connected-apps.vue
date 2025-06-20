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
            <general-sidebar></general-sidebar>

            <div class="col-xl-9 col-lg-12">
              <!-- Settings Info -->
              <div class="card">
                <div class="card-body pb-0">
                  <h4 class="fw-semibold mb-3">Connected Apps</h4>
                  <div class="row">
                    <!-- App -->
                    <div class="col-md-4 col-sm-6">
                      <div class="card border mb-3">
                        <div class="card-body">
                          <div
                            class="d-flex align-items-center justify-content-between mb-3"
                          >
                            <img src="@/assets/img/icons/integration-01.svg" alt="Icon" />
                            <div class="connect-btn">
                              <a
                                href="javascript:void(0);"
                                class="badge badge-soft-success"
                                >Connected</a
                              >
                            </div>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0">Google Calendar</p>
                            <div class="form-check form-switch">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                role="switch"
                                checked
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /App -->

                    <!-- App -->
                    <div class="col-md-4 col-sm-6">
                      <div class="card border mb-3">
                        <div class="card-body">
                          <div
                            class="d-flex align-items-center justify-content-between mb-3"
                          >
                            <img src="@/assets/img/icons/integration-02.svg" alt="Icon" />
                            <div class="connect-btn">
                              <a
                                href="javascript:void(0);"
                                class="badge border bg-white text-default"
                                >Connect</a
                              >
                            </div>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0">Figma</p>
                            <div class="form-check form-switch">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                role="switch"
                                checked
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /App -->

                    <!-- App -->
                    <div class="col-md-4 col-sm-6">
                      <div class="card border mb-3">
                        <div class="card-body">
                          <div
                            class="d-flex align-items-center justify-content-between mb-3"
                          >
                            <img src="@/assets/img/icons/integration-03.svg" alt="Icon" />
                            <div class="connect-btn">
                              <a
                                href="javascript:void(0);"
                                class="badge badge-soft-success"
                                >Connected</a
                              >
                            </div>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0">Dropbox</p>
                            <div class="form-check form-switch">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                role="switch"
                                checked
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /App -->

                    <!-- App -->
                    <div class="col-md-4 col-sm-6">
                      <div class="card border mb-3">
                        <div class="card-body">
                          <div
                            class="d-flex align-items-center justify-content-between mb-3"
                          >
                            <img src="@/assets/img/icons/integration-04.svg" alt="Icon" />
                            <div class="connect-btn">
                              <a
                                href="javascript:void(0);"
                                class="badge border bg-white text-default"
                                >Connect</a
                              >
                            </div>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0">Slack</p>
                            <div class="form-check form-switch">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                role="switch"
                                checked
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /App -->

                    <!-- App -->
                    <div class="col-md-4 col-sm-6">
                      <div class="card border mb-3">
                        <div class="card-body">
                          <div
                            class="d-flex align-items-center justify-content-between mb-3"
                          >
                            <img src="@/assets/img/icons/integration-05.svg" alt="Icon" />
                            <div class="connect-btn">
                              <a
                                href="javascript:void(0);"
                                class="badge badge-soft-success"
                                >Connected</a
                              >
                            </div>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0">Gmail</p>
                            <div class="form-check form-switch">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                role="switch"
                                checked
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /App -->

                    <!-- App -->
                    <div class="col-md-4 col-sm-6">
                      <div class="card border mb-3">
                        <div class="card-body">
                          <div
                            class="d-flex align-items-center justify-content-between mb-3"
                          >
                            <img src="@/assets/img/icons/integration-06.svg" alt="Icon" />
                            <div class="connect-btn">
                              <a
                                href="javascript:void(0);"
                                class="badge border bg-white text-default"
                                >Connect</a
                              >
                            </div>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0">Github</p>
                            <div class="form-check form-switch">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                role="switch"
                                checked
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /App -->
                  </div>
                </div>
              </div>
              <!-- /Settings Info -->
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
    };
  },
};
</script>
