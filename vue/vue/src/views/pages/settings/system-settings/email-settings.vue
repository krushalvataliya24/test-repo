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
              <!-- Settings Info -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="fs-20">Email Settings</h4>
                    <a
                      href="javascript:void(0)"
                      class="btn-add"
                      data-bs-toggle="modal"
                      data-bs-target="#add_mail"
                      ><i class="ti ti-mail"></i
                    ></a>
                  </div>
                  <div class="row">
                    <!-- Email Wrap -->
                    <div class="col-md-12">
                      <!-- PHP Mailer -->
                      <div class="border rounded p-3 mb-4">
                        <div class="row gy-3">
                          <div class="col-sm-5">
                            <div class="d-flex align-items-center">
                              <span class="avatar avtar-lg border me-2 flex-shrink-0">
                                <img
                                  src="@/assets/img/icons/mail-01.svg"
                                  class="w-auto h-auto"
                                  alt=""
                                />
                              </span>
                              <div>
                                <h6 class="fw-medium mb-1">PHP Mailer</h6>
                                <a
                                  href="javascript:void(0);"
                                  class="badge bg-soft-success"
                                  >Connected</a
                                >
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-7">
                            <div
                              class="d-flex align-items-center justify-content-between"
                            >
                              <div>
                                <a
                                  href="javascript:void(0);"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#php-mail"
                                  class="info-icon me-3 text-default"
                                  ><i class="ti ti-info-circle-filled me-1"></i
                                ></a>
                                <a
                                  href="#"
                                  class="btn btn-light"
                                  data-bs-toggle="modal"
                                  data-bs-target="#add_phpmail"
                                  ><i class="ti ti-tool me-1"></i>View Integration</a
                                >
                              </div>
                              <div class="status-toggle">
                                <input
                                  type="checkbox"
                                  id="mail1"
                                  class="check"
                                  checked=""
                                />
                                <label for="mail1" class="checktoggle"> </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="collapse" id="php-mail">
                          <div class="mail-collapse">
                            <p>
                              PHPMailer is a third-party PHP library that provides a
                              simple way to send emails in PHP. It offers a range of
                              features that make it a popular alternative to PHP's
                              built-in mail() function, such as support for HTML emails,
                              attachments, and SMTP authentication.
                            </p>
                          </div>
                        </div>
                      </div>
                      <!-- /PHP Mailer -->

                      <!-- SMTP -->
                      <div class="border rounded p-3 mb-4">
                        <div class="row gy-3">
                          <div class="col-sm-5">
                            <div class="d-flex align-items-center">
                              <span class="avatar avtar-lg border me-2 flex-shrink-0">
                                <img
                                  src="@/assets/img/icons/mail-02.svg"
                                  class="w-auto h-auto"
                                  alt=""
                                />
                              </span>
                              <div>
                                <h6 class="fw-medium mb-1">SMTP</h6>
                                <a
                                  href="javascript:void(0);"
                                  class="badge bg-soft-success"
                                  >Connected</a
                                >
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-7">
                            <div
                              class="d-flex align-items-center justify-content-between"
                            >
                              <div>
                                <a href="javascript:void(0);" class="me-3 text-default"
                                  ><i class="ti ti-info-circle-filled me-1"></i
                                ></a>
                                <a
                                  href="#"
                                  class="btn btn-light"
                                  data-bs-toggle="modal"
                                  data-bs-target="#add_smtp"
                                  ><i class="ti ti-tool me-1"></i>View Integration</a
                                >
                              </div>
                              <div class="status-toggle">
                                <input
                                  type="checkbox"
                                  id="mail2"
                                  class="check"
                                  checked=""
                                />
                                <label for="mail2" class="checktoggle"> </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /SMTP -->

                      <!-- SendGrid -->
                      <div class="border rounded p-3">
                        <div class="row gy-3">
                          <div class="col-sm-5">
                            <div class="d-flex align-items-center">
                              <span class="avatar avtar-lg border me-2 flex-shrink-0">
                                <img
                                  src="@/assets/img/icons/mail-03.svg"
                                  class="w-auto h-auto"
                                  alt=""
                                />
                              </span>
                              <div>
                                <h6 class="fw-medium mb-1">SendGrid</h6>
                                <a
                                  href="javascript:void(0);"
                                  class="badge bg-soft-purple text-purple"
                                  >Not Connected</a
                                >
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-7">
                            <div
                              class="d-flex align-items-center justify-content-between"
                            >
                              <div>
                                <a href="javascript:void(0);" class="me-3 text-default"
                                  ><i class="ti ti-info-circle-filled me-1"></i
                                ></a>
                                <a href="#" class="btn btn-primary"
                                  ><i class="ti ti-plug-connected me-1"></i>Connect Now</a
                                >
                              </div>
                              <div class="status-toggle">
                                <input
                                  type="checkbox"
                                  id="mail3"
                                  class="check"
                                  checked=""
                                />
                                <label for="mail3" class="checktoggle"> </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /SendGrid -->
                    </div>
                    <!-- /Email Wrap -->
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
  <email-modal></email-modal>
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
