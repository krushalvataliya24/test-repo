<template>
  <!-- Delete Project -->
  <div class="modal fade" id="delete_task" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Project?</h4>
            <p class="mb-0">
              Are you sure you want to remove <br />
              project you selected.
            </p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link to="/crm/project-details" class="btn btn-danger" data-bs-dismiss="modal"
                >Yes, Delete it</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Delete Project -->

  <!-- Add Note -->
  <div class="modal custom-modal fade modal-padding" id="add_notes" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Notes</h5>
          <button
            type="button"
            class="btn-close position-static"
            data-bs-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="mb-3">
              <label class="col-form-label"
                >Title <span class="text-danger"> *</span></label
              >
              <input class="form-control" type="text" />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Note <span class="text-danger"> *</span></label
              >
              <textarea class="form-control" rows="4"></textarea>
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Attachment <span class="text-danger"> *</span></label
              >
              <div class="drag-attach">
                <input type="file" />
                <div class="img-upload"><i class="ti ti-file-broken"></i>Upload File</div>
              </div>
            </div>
            <div class="mb-3">
              <label class="col-form-label">Uploaded Files</label>
              <div class="upload-file">
                <h6>Projectneonals teyys.xls</h6>
                <p>4.25 MB</p>
                <div class="progress">
                  <div
                    class="progress-bar bg-success"
                    role="progressbar"
                    style="width: 25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
                <p class="black-text">45%</p>
              </div>
              <div class="upload-file upload-list">
                <div>
                  <h6>tes.txt</h6>
                  <p>4.25 MB</p>
                </div>
                <a href="javascript:void(0);" class="text-danger"
                  ><i class="ti ti-trash-x"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-12 text-end modal-btn">
              <a class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <button class="btn btn-primary" type="submit">Confirm</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Note -->

  <!-- Edit Project -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom">
      <h4>Edit Project</h4>
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
                <label class="col-form-label"
                  >Name <span class="text-danger">*</span></label
                >
                <input type="text" class="form-control" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Project ID<span class="text-danger"> *</span></label
                >
                <input class="form-control" type="text" value="12" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Project Type <span class="text-danger">*</span></label
                >
                <vue-select :options="Type" id="mobiletype" placeholder="Meeting" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Client <span class="text-danger">*</span></label
                >
                <vue-select
                  :options="NovaWave"
                  id="silverhawk"
                  placeholder="NovaWave LLC"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Category <span class="text-danger">*</span></label
                >
                <vue-select :options="Harbor" id="harbor" placeholder="Harbor View" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Project Timing <span class="text-danger">*</span></label
                >
                <vue-select :options="Hourly" id="hourly" placeholder="Hourly" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Price <span class="text-danger">*</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Amount <span class="text-danger">*</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Total <span class="text-danger">*</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Responsible Persons <span class="text-danger">*</span></label
                >
                <vue-select :options="Robertson" id="robertson" placeholder="Robertson" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Team Leader <span class="text-danger">*</span></label
                >
                <vue-select :options="Robertson" id="roy" placeholder="Sharon Roy" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Start Date <span class="text-danger">*</span></label
                >
                <div class="icon-form">
                  <date-picker
                    v-model="startdateOne"
                    class="form-control datetimepicker"
                    :editable="true"
                    :clearable="false"
                    :input-format="dateFormat"
                  />
                  <span class="form-icon"><i class="ti ti-calendar-event"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Due Date <span class="text-danger">*</span></label
                >
                <div class="icon-form">
                  <date-picker
                    v-model="startdateTwo"
                    class="form-control datetimepicker"
                    :editable="true"
                    :clearable="false"
                    :input-format="dateFormat"
                  />
                  <span class="form-icon"><i class="ti ti-calendar-event"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Priority</label>
                <vue-select :options="Priority" id="high" placeholder="High" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Status</label>
                <vue-select :options="Inactive" id="highone" placeholder="High" />
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Description <span class="text-danger">*</span></label
                >
                <textarea class="form-control" rows="4"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">
            Cancel
          </button>
          <button type="button" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Edit Project -->

  <!-- Create Call Log -->
  <div class="modal custom-modal fade modal-padding" id="create_call" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Create Call Log</h5>
          <button
            type="button"
            class="btn-close position-static"
            data-bs-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <label class="col-form-label"
                    >Status <span class="text-danger"> *</span></label
                  >
                  <vue-select :options="Status" id="noanswer" placeholder="Busy" />
                </div>
                <div class="mb-3">
                  <label class="col-form-label"
                    >Follow Up Date <span class="text-danger"> *</span></label
                  >
                  <div class="icon-form">
                    <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                    <date-picker
                      v-model="startdate"
                      class="form-control datetimepicker"
                      :editable="true"
                      :clearable="false"
                      :input-format="dateFormat"
                    />
                  </div>
                </div>
                <div class="mb-3">
                  <label class="col-form-label"
                    >Note <span class="text-danger"> *</span></label
                  >
                  <textarea
                    class="form-control"
                    rows="4"
                    placeholder="Add text"
                  ></textarea>
                </div>
                <div class="mb-3">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span> Create a followup task
                  </label>
                </div>
                <div class="text-end modal-btn">
                  <a class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                  <button class="btn btn-primary" type="submit">Confirm</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Create Call Log -->

  <!-- Add File -->
  <div
    class="modal custom-modal fade custom-modal-two modal-padding"
    id="new_file"
    role="dialog"
  >
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Create New File</h5>
          <button
            type="button"
            class="btn-close position-static"
            data-bs-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="add-info-fieldset">
            <div class="add-details-wizard">
              <ul class="progress-bar-wizard">
                <li class="active">
                  <span><i class="ti ti-file"></i></span>
                  <div class="multi-step-info">
                    <h6>Basic Info</h6>
                  </div>
                </li>
                <li>
                  <span><i class="ti ti-circle-plus"></i></span>
                  <div class="multi-step-info">
                    <h6>Add Recipient</h6>
                  </div>
                </li>
              </ul>
            </div>
            <fieldset id="first-field-file">
              <form @submit.prevent="submitForm">
                <div class="contact-input-set">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mb-3">
                        <label class="col-form-label"
                          >Choose Deal <span class="text-danger">*</span></label
                        >
                        <vue-select
                          :options="Choose"
                          id="selectchoose"
                          placeholder="Select"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="col-form-label"
                          >Document Type <span class="text-danger">*</span></label
                        >
                        <vue-select
                          :options="Document"
                          id="selectdocs"
                          placeholder="Select"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="col-form-label"
                          >Owner <span class="text-danger">*</span></label
                        >
                        <vue-select
                          :options="Owner"
                          id="ownername"
                          placeholder="Select"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="col-form-label"
                          >Title <span class="text-danger"> *</span></label
                        >
                        <input class="form-control" type="text" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="col-form-label"
                          >Locale <span class="text-danger">*</span></label
                        >
                        <vue-select :options="Locale" id="locale" placeholder="Select" />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="signature-wrap">
                        <h4>Signature</h4>
                        <ul class="nav sign-item">
                          <li class="nav-item">
                            <span
                              class="mb-0"
                              data-bs-toggle="tab"
                              data-bs-target="#nosign"
                            >
                              <input
                                type="radio"
                                class="status-radio"
                                id="sign1"
                                name="email"
                              />
                              <label for="sign1"
                                ><span class="sign-title">No Signature</span>This document
                                does not require a signature before acceptance.</label
                              >
                            </span>
                          </li>
                          <li class="nav-item">
                            <span
                              class="active mb-0"
                              data-bs-toggle="tab"
                              data-bs-target="#use-esign"
                            >
                              <input
                                type="radio"
                                class="status-radio"
                                id="sign2"
                                name="email"
                                checked
                              />
                              <label for="sign2"
                                ><span class="sign-title">Use e-signature</span>This
                                document require e-signature before acceptance.</label
                              >
                            </span>
                          </li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane show active" id="use-esign">
                            <div class="input-block mb-0">
                              <label class="col-form-label"
                                >Document Signers
                                <span class="text-danger">*</span></label
                              >
                            </div>
                            <div class="sign-content">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="mb-3">
                                    <input
                                      class="form-control"
                                      type="text"
                                      placeholder="Enter Name"
                                    />
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="d-flex align-items-center">
                                    <div class="float-none mb-3 me-3 w-100">
                                      <input
                                        class="form-control"
                                        type="text"
                                        placeholder="Email Address"
                                      />
                                    </div>
                                    <div class="input-btn mb-3">
                                      <a href="javascript:void(0);" class="add-sign"
                                        ><i class="ti ti-circle-plus"></i
                                      ></a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="input-block mb-3">
                        <label class="col-form-label"
                          >Content <span class="text-danger"> *</span></label
                        >
                        <textarea
                          class="form-control"
                          rows="3"
                          placeholder="Add Content"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-lg-12 text-end form-wizard-button modal-btn">
                      <button class="btn btn-light" type="reset">Reset</button>
                      <button class="btn btn-primary wizard-next-btn" type="button">
                        Next
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </fieldset>
            <fieldset>
              <form @submit.prevent="submitForm">
                <div class="contact-input-set">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="signature-wrap">
                        <h4 class="mb-2">Send the document to following signers</h4>
                        <p>In order to send the document to the signers</p>
                        <div class="input-block mb-0">
                          <label class="col-form-label"
                            >Recipients (Additional recipients)</label
                          >
                        </div>
                        <div class="sign-content">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="mb-3">
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="Enter Name"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="d-flex align-items-center">
                                <div class="float-none mb-3 me-3 w-100">
                                  <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Email Address"
                                  />
                                </div>
                                <div class="input-btn mb-3">
                                  <a href="javascript:void(0);" class="add-sign"
                                    ><i class="ti ti-circle-plus"></i
                                  ></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label class="col-form-label"
                          >Message Subject <span class="text-danger"> *</span></label
                        >
                        <input
                          class="form-control"
                          type="text"
                          placeholder="Enter Subject"
                        />
                      </div>
                      <div class="mb-3">
                        <label class="col-form-label"
                          >Message Text <span class="text-danger"> *</span></label
                        >
                        <textarea
                          class="form-control"
                          rows="3"
                          placeholder="Your document is ready"
                        ></textarea>
                      </div>
                      <button class="btn btn-light mb-3">Send Now</button>
                      <div class="send-success">
                        <p>
                          <i class="ti ti-circle-check"></i> Document sent successfully to
                          the selected recipients
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-12 text-end form-wizard-button modal-btn">
                      <button class="btn btn-light" type="reset">Cancel</button>
                      <button
                        class="btn btn-primary"
                        type="button"
                        data-bs-dismiss="modal"
                      >
                        Save & Next
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add File -->

  <!-- Connect Account -->
  <div class="modal custom-modal fade" id="create_email" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Connect Account</h5>
          <button
            type="button"
            class="btn-close position-static"
            data-bs-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="col-form-label"
              >Account type <span class="text-danger"> *</span></label
            >
            <vue-select :options="Imap" id="imaap" placeholder="Gmail" />
          </div>
          <div class="mb-3">
            <h5 class="form-title">Sync emails from</h5>
            <div class="sync-radio">
              <div class="radio-item">
                <input
                  type="radio"
                  class="status-radio"
                  id="test1"
                  name="radio-group"
                  checked=""
                />
                <label for="test1">Now</label>
              </div>
              <div class="radio-item">
                <input type="radio" class="status-radio" id="test2" name="radio-group" />
                <label for="test2">1 Month Ago</label>
              </div>
              <div class="radio-item">
                <input type="radio" class="status-radio" id="test3" name="radio-group" />
                <label for="test3">3 Month Ago</label>
              </div>
              <div class="radio-item">
                <input type="radio" class="status-radio" id="test4" name="radio-group" />
                <label for="test4">6 Month Ago</label>
              </div>
            </div>
          </div>
          <div class="col-lg-12 text-end modal-btn">
            <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
            <button
              class="btn btn-primary"
              data-bs-target="#success_mail"
              data-bs-toggle="modal"
              data-bs-dismiss="modal"
            >
              Connect Account
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Connect Account -->

  <!-- Success Email -->
  <div class="modal custom-modal fade" id="success_mail" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0 m-0 justify-content-end">
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <div class="success-message text-center">
            <div class="success-popup-icon bg-light-blue">
              <i class="ti ti-mail-opened"></i>
            </div>
            <h3>Email Connected Successfully!!!</h3>
            <p>
              Email Account is configured with “example@example.com”. Now you can access
              email.
            </p>
            <div class="col-lg-12 text-center modal-btn">
              <router-link to="/crm/project-details" class="btn btn-primary"
                >Go to email</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Success Company -->

  <!-- Access -->
  <div class="modal custom-modal fade" id="access_view" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Responsible Persons</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="mb-2 icon-form">
              <span class="form-icon"><i class="ti ti-search"></i></span>
              <input type="text" class="form-control" placeholder="Search" />
            </div>
            <div class="access-wrap">
              <ul>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/profiles/avatar-19.jpg" alt="" />
                      <a href="#">Darlee Robertson</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/profiles/avatar-20.jpg" alt="" />
                      <a href="#">Sharon Roy</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/profiles/avatar-21.jpg" alt="" />
                      <a href="#">Vaughan</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/profiles/avatar-01.jpg" alt="" />
                      <a href="#">Jessica</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/profiles/avatar-16.jpg" alt="" />
                      <a href="#">Carol Thomas</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/profiles/avatar-22.jpg" alt="" />
                      <a href="#">Dawn Mercha</a>
                    </span>
                  </label>
                </li>
              </ul>
            </div>
            <div class="modal-btn text-end">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Access -->

  <!-- Add Compose -->
  <div class="modal custom-modal fade" id="add_compose" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Compose</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body p-0">
          <form action="#">
            <div class="mb-3">
              <input type="email" placeholder="To" class="form-control" />
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <input type="email" placeholder="Cc" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <input type="email" placeholder="Bcc" class="form-control" />
                </div>
              </div>
            </div>
            <div class="mb-3">
              <input type="text" placeholder="Subject" class="form-control" />
            </div>
            <div class="mb-3">
              <div class="summernote"></div>
            </div>
            <div class="mb-3">
              <div class="text-center">
                <button class="btn btn-primary">
                  <span>Send</span><i class="fa-solid fa-paper-plane ms-1"></i>
                </button>
                <button class="btn btn-primary" type="button">
                  <span>Draft</span> <i class="fa-regular fa-floppy-disk ms-1"></i>
                </button>
                <button class="btn btn-primary" type="button">
                  <span>Delete</span> <i class="fa-regular fa-trash-can ms-1"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Compose -->

  <!-- Add New Task -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
      <h4>Add New Task</h4>
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
                <label class="col-form-label"
                  >Title <span class="text-danger">*</span></label
                >
                <input type="text" class="form-control" />
              </div>
              <div class="mb-3">
                <label class="col-form-label">Category</label>
                <vue-select :options="Category" id="callsone" placeholder="Choose" />
              </div>
              <div class="mb-3">
                <label class="col-form-label"
                  >Responsible Persons <span class="text-danger">*</span></label
                >
                <vue-select
                  :options="Robertson"
                  id="jessica"
                  placeholder="Darlee Robertson"
                />
              </div>
            </div>
            <div class="col-md-6">
              <label class="col-form-label"
                >Start Date <span class="text-danger">*</span></label
              >
              <div class="mb-3 icon-form">
                <date-picker
                  v-model="startdateThree"
                  class="form-control datetimepicker"
                  :editable="true"
                  :clearable="false"
                  :input-format="dateFormat"
                />
                <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
              </div>
            </div>
            <div class="col-md-6">
              <label class="col-form-label"
                >Due Date <span class="text-danger">*</span></label
              >
              <div class="mb-3 icon-form">
                <date-picker
                  v-model="startdateFour"
                  class="form-control datetimepicker"
                  :editable="true"
                  :clearable="false"
                  :input-format="dateFormat"
                />
                <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Tags <span class="text-danger">*</span></label
                >
                <input
                  class="input-tags form-control"
                  type="text"
                  data-role="tagsinput"
                  name="Label"
                  value="Promotion, Collab"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Priority</label>
                <div class="select-priority">
                  <span class="select-icon"
                    ><i class="ti ti-square-rounded-filled"></i
                  ></span>
                  <vue-select :options="Select" id="low" placeholder="Select" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Status</label>
                <vue-select :options="Inactive" id="activeone" placeholder="Select" />
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Description <span class="text-danger">*</span></label
                >
                <div class="summernote"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">
            Cancel
          </button>
          <button
            type="button"
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#create_success"
          >
            Create
          </button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add New Tasks -->

  <!-- Create task -->
  <div class="modal custom-modal fade" id="create_success" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0 m-0 justify-content-end">
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <div class="success-message text-center">
            <div class="success-popup-icon bg-light-blue">
              <i class="ti ti-medal"></i>
            </div>
            <h3>Task Created Successfully!!!</h3>
            <p>View the details of task, created</p>
            <div class="col-lg-12 text-center modal-btn">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <router-link to="/crm/project-details" class="btn btn-primary"
                >View Details</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Create Task -->
</template>

<script>
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import { ref } from "vue";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
const currentDateTwo = ref(new Date());
const currentDateThree = ref(new Date());
const currentDateFour = ref(new Date());
export default {
  data() {
    return {
      editor: ClassicEditor,
      editorData: "Description",
      editorConfig: {},
      startdate: currentDate,
      startdateOne: currentDateOne,
      startdateTwo: currentDateTwo,
      startdateThree: currentDateThree,
      startdateFour: currentDateFour,
      dateFormat: "dd-MM-yyyy",
      Status: [
        "Busy",
        "Unavailable",
        "No Answer",
        "Wrong Number",
        "Left Voice Message",
        "Moving Forward",
      ],
      Choose: ["Select", "Collins", "Wisozk", "Walter"],
      Document: ["Select", "Contract", "Proposal", "Quote"],
      Owner: ["Select", "Admin", "Jackson Daniel"],
      Locale: ["Select", "en", "es", "ru"],
      Imap: ["Gmail", "Outlook", "Imap"],
      Type: ["Choose", "Mobile App", "Meeting"],
      NovaWave: ["NovaWave LLC", "Silver Hawk", "Harbor View"],
      Harbor: ["Select", "Harbor View", "LLC"],
      Hourly: [
        "Select",
        "Hourly",
        "Weekly",
        "Monthly",
        "Less than 1 Month",
        "Less than 3 months",
      ],
      Robertson: ["Darlee Robertson", "Sharon Roy", "Jessica", "Carol Thomas"],
      Priority: ["Select", "High", "Low", "Medium"],
      Inactive: ["Select", "Active", "Inactive"],
      Category: ["Choose", "Calls", "Email", "Meeting"],
      Select: ["Select", "High", "Low", "Medium"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/crm/project-details");
    },
  },
};
</script>
