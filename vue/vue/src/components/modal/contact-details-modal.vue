<template>
  <!-- Delete Contact -->
  <div class="modal fade" id="delete_contact" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Contacts?</h4>
            <p class="mb-0">
              Are you sure you want to remove <br />
              contact you selected.
            </p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link
                to="/crm/contacts-list"
                class="btn btn-danger"
                data-bs-dismiss="modal"
                >Yes, Delete it</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Delete Contact -->

  <!-- Create Deal -->
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
              <i class="ti ti-building"></i>
            </div>
            <h3>Deal Created Successfully!!!</h3>
            <p>View the details of deal, created</p>
            <div class="col-lg-12 text-center modal-btn">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <router-link to="/crm/deals-details" class="btn btn-primary"
                >View Details</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Create Deal -->

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
                  <vue-select :options="StatusMod" id="busyone" placeholder="Busy" />
                </div>
                <div class="mb-3">
                  <label class="col-form-label"
                    >Follow Up Date <span class="text-danger"> *</span></label
                  >
                  <div class="icon-form">
                    <date-picker
                      v-model="startdate"
                      placeholder=""
                      class="datetimepicker form-control"
                      :editable="true"
                      :clearable="false"
                      :input-format="dateFormat"
                    />
                    <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
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
                <li :class="{ active: fieldOne }">
                  <span><i class="ti ti-file"></i></span>
                  <div class="multi-step-info">
                    <h6>Basic Info</h6>
                  </div>
                </li>
                <li :class="{ active: fieldTwo }">
                  <span><i class="ti ti-circle-plus"></i></span>
                  <div class="multi-step-info">
                    <h6>Add Recipient</h6>
                  </div>
                </li>
              </ul>
            </div>
            <fieldset
              id="first-field-file"
              :style="{ display: fieldOne ? 'block' : 'none' }"
            >
              <form @submit.prevent="submitForm">
                <div class="contact-input-set">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mb-3">
                        <label class="col-form-label"
                          >Choose Deal <span class="text-danger">*</span></label
                        >
                        <vue-select :options="Deal" id="wisozk" placeholder="Select" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="col-form-label"
                          >Document Type <span class="text-danger">*</span></label
                        >
                        <vue-select
                          :options="Document"
                          id="proposal"
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
                          placeholder="Select"
                          id="ownerselect"
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
                        <vue-select
                          :options="Locale"
                          id="localeone"
                          placeholder="Select"
                        />
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
                      <button
                        class="btn btn-primary wizard-next-btn"
                        type="button"
                        @click="FieldsetTwo"
                      >
                        Next
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </fieldset>
            <fieldset :style="{ display: fieldTwo ? 'block' : 'none' }">
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
            <vue-select :options="Account" id="imapone" placeholder="Gmail" />
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

  <!-- Success Contact -->
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
              <router-link to="/crm/contact-details" class="btn btn-primary"
                >Go to email</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Success Contact -->

  <!-- Access -->
  <div class="modal custom-modal fade" id="access_view" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Access For</h5>
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
        <div class="modal-body">
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
              <ckeditor
                :editor="editor"
                v-model="editorData"
                :config="editorConfig"
              ></ckeditor>
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

  <!-- Edit Contact -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Edit Contact</h5>
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
        <div class="accordion" id="main_accordion_2">
          <!-- Basic Info -->
          <div class="accordion-item rounded mb-3">
            <div class="accordion-header">
              <a
                href="#"
                class="accordion-button accordion-custom-button bg-white rounded fw-medium text-dark"
                data-bs-toggle="collapse"
                data-bs-target="#basic-2"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-user-plus fs-20"></i
                ></span>
                Basic Info
              </a>
            </div>
            <div
              class="accordion-collapse collapse show"
              id="basic-2"
              data-bs-parent="#main_accordion_2"
            >
              <div class="accordion-body border-top">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <div class="profile-upload">
                        <div class="profile-upload-img">
                          <span><i class="ti ti-photo"></i></span>
                          <img
                            src="@/assets/img/profiles/avatar-20.jpg"
                            alt="img"
                            class="preview1"
                          />
                          <button type="button" class="profile-remove">
                            <i class="ti ti-x"></i>
                          </button>
                        </div>
                        <div class="profile-upload-content">
                          <label class="profile-upload-btn">
                            <i class="ti ti-file-broken"></i> Upload File
                            <input type="file" class="input-img" />
                          </label>
                          <p>JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >First Name <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" value="Darlee" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Last Name <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" value="Robertson" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Job Title <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" value="Facility Manager" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Company Name</label>
                      <vue-select
                        :options="Companyname"
                        id="companynames"
                        placeholder="NovaWave LLC"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <div class="d-flex justify-content-between align-items-center">
                        <label class="col-form-label"
                          >Email <span class="text-danger">*</span></label
                        >
                        <div
                          class="status-toggle small-toggle-btn d-flex align-items-center"
                        >
                          <span class="me-2 label-text">Email Opt Out</span>
                          <input
                            type="checkbox"
                            id="user2"
                            class="check"
                            checked=""
                            value="robertson@example.com"
                          />
                          <label for="user2" class="checktoggle"></label>
                        </div>
                      </div>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Phone 1 <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" value="6234567890" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Phone 2</label>
                      <input type="text" class="form-control" value="7234567899" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Fax</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <div class="d-flex align-items-center justify-content-between">
                        <label class="col-form-label">Deals</label>
                        <a
                          href="#"
                          class="label-add"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvas_add_2"
                          ><i class="ti ti-square-rounded-plus"></i>Add New</a
                        >
                      </div>
                      <vue-select :options="Adams" placeholder="Collins" id="adams" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Date of Birth</label>
                      <div class="icon-form-end">
                        <date-picker
                          v-model="startdateOne"
                          class="datetimepicker form-control"
                          :editable="true"
                          :clearable="false"
                          :input-format="dateFormat"
                          value="29-02-2020"
                        />
                        <span class="form-icon"
                          ><i class="ti ti-calendar-event"></i
                        ></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Reviews </label>
                      <div class="icon-form-end">
                        <span class="form-icon"><i class="ti ti-star"></i></span>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="4.2"
                          value="4.2"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="fmb-3">
                      <label class="col-form-label">Owner</label>
                      <vue-select :options="Ownerone" placeholder="hendry" id="hendry" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Tags </label>
                      <vue3-tags-input
                        class="input-tags form-control"
                        type="text"
                        id="inputBox"
                        data-role="tagsinput"
                        name="Label"
                        value="Tag1"
                        :tags="tags"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Source <span class="text-danger">*</span></label
                      >
                      <vue-select
                        :options="Source"
                        id="referral"
                        placeholder="Phone Calls"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Industry <span class="text-danger">*</span></label
                      >
                      <vue-select
                        :options="Industry"
                        id="industryselect"
                        placeholder="Banking"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Currency <span class="text-danger">*</span></label
                      >
                      <vue-select
                        :options="DetCurren"
                        placeholder="Choose"
                        id="detcurren"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Language <span class="text-danger">*</span></label
                      >
                      <vue-select :options="Language" id="arabic" placeholder="English" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-0">
                      <label class="col-form-label"
                        >Description <span class="text-danger">*</span></label
                      >
                      <textarea class="form-control" rows="5"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Basic Info -->

          <!-- Address Info -->
          <div class="accordion-item border-top rounded mb-3">
            <div class="accordion-header">
              <a
                href="#"
                class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark"
                data-bs-toggle="collapse"
                data-bs-target="#address-2"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-map-pin-cog fs-20"></i
                ></span>
                Address Info
              </a>
            </div>
            <div
              class="accordion-collapse collapse"
              id="address-2"
              data-bs-parent="#main_accordion_2"
            >
              <div class="accordion-body border-top">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="col-form-label">Street Address </label>
                      <input type="text" class="form-control" value="87 Griffin Street" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Country</label>
                      <vue-select
                        :options="contactCountry"
                        id="editcontactcoun"
                        placeholder="USA"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">State / Province </label>
                      <vue-select
                        :options="contactStat"
                        id="editcontactstat"
                        placeholder="California"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 mb-md-0">
                      <label class="col-form-label">City </label>
                      <vue-select
                        :options="contactCity"
                        id="editcontactcity"
                        placeholder="Los Angeles"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-0">
                      <label class="col-form-label">Zipcode </label>
                      <input type="text" class="form-control" value="90001" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Address Info -->

          <!-- Social Profile -->
          <div class="accordion-item border-top rounded mb-3">
            <div class="accordion-header">
              <a
                href="#"
                class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark"
                data-bs-toggle="collapse"
                data-bs-target="#social-2"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-social fs-20"></i
                ></span>
                Social Profile
              </a>
            </div>
            <div
              class="accordion-collapse collapse"
              id="social-2"
              data-bs-parent="#main_accordion_2"
            >
              <div class="accordion-body border-top">
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Facebook</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Skype </label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Linkedin </label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Twitter</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 mb-md-0">
                      <label class="col-form-label">Whatsapp</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-0">
                      <label class="col-form-label">Instagram</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Social Profile -->

          <!-- Access -->
          <div class="accordion-item border-top rounded mb-3">
            <div class="accordion-header">
              <a
                href="#"
                class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark"
                data-bs-toggle="collapse"
                data-bs-target="#access-info-2"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-accessible fs-20"></i
                ></span>
                Access
              </a>
            </div>
            <div
              class="accordion-collapse collapse"
              id="access-info-2"
              data-bs-parent="#main_accordion_2"
            >
              <div class="accordion-body border-top">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="col-form-label">Visibility</label>
                      <div class="d-flex flex-wrap">
                        <div class="me-2">
                          <input
                            type="radio"
                            class="status-radio"
                            id="public2"
                            name="visible"
                          />
                          <label for="public2">Public</label>
                        </div>
                        <div class="me-2">
                          <input
                            type="radio"
                            class="status-radio"
                            id="private2"
                            name="visible"
                          />
                          <label for="private2">Private</label>
                        </div>
                        <div data-bs-toggle="modal" data-bs-target="#access_view">
                          <input
                            type="radio"
                            class="status-radio"
                            id="people2"
                            name="visible"
                          />
                          <label for="people2">Select People</label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-0">
                      <label class="col-form-label">Status</label>
                      <div class="d-flex flex-wrap">
                        <div class="me-2">
                          <input
                            type="radio"
                            class="status-radio"
                            id="active2"
                            name="status"
                            checked=""
                          />
                          <label for="active2">Active</label>
                        </div>
                        <div>
                          <input
                            type="radio"
                            class="status-radio"
                            id="inactive2"
                            name="status"
                          />
                          <label for="inactive2">Inactive</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Access -->
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
  <!-- /Edit Contact -->

  <!-- Add New Deals -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add_2">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Add New Deals</h5>
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
        <div class="row">
          <div class="col-md-12">
            <div class="mb-3">
              <label class="col-form-label"
                >Deal Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between">
                <label class="col-form-label"
                  >Pipeine <span class="text-danger">*</span></label
                >
              </div>
              <vue-select :options="Pipeline" id="callsselect" placeholder="Choose" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Status <span class="text-danger">*</span></label
              >
              <vue-select :options="Won" id="won" placeholder="Choose" />
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Deal Value<span class="text-danger"> *</span></label
              >
              <input class="form-control" type="text" />
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Currency <span class="text-danger">*</span></label
              >
              <vue-select :options="Currency" id="currencytwo" placeholder="Select" />
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Period <span class="text-danger">*</span></label
              >
              <vue-select :options="Period" id="period" placeholder="Select" />
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Period Value <span class="text-danger">*</span></label
              >
              <input class="form-control" type="text" />
            </div>
          </div>
          <div class="col-md-12">
            <div class="mb-3">
              <label class="col-form-label"
                >Contact <span class="text-danger">*</span></label
              >
              <vue3-tags-input
                class="input-tags form-control"
                placeholder=""
                type="text"
                data-role="tagsinput"
                name="Label"
                value="Tag1"
                :tags="tags1"
              />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Project <span class="text-danger">*</span></label
              >
              <vue3-tags-input
                class="input-tags form-control"
                placeholder=""
                type="text"
                data-role="tagsinput"
                name="Label"
                value="Tag1"
                :tags="tags2"
              />
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
                  placeholder=""
                  class="datetimepicker form-control"
                  :editable="true"
                  :clearable="false"
                  :input-format="dateFormat"
                />
                <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Expected Closing Date <span class="text-danger">*</span></label
              >
              <div class="icon-form">
                <date-picker
                  v-model="startdateThree"
                  placeholder=""
                  class="datetimepicker form-control"
                  :editable="true"
                  :clearable="false"
                  :input-format="dateFormat"
                />
                <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="mb-3">
              <label class="col-form-label"
                >Assignee <span class="text-danger">*</span></label
              >
              <vue3-tags-input
                class="input-tags form-control"
                placeholder=""
                type="text"
                data-role="tagsinput"
                name="Label"
                value="Tag1"
                :tags="tags3"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Follow Up Date <span class="text-danger">*</span></label
              >
              <div class="icon-form">
                <date-picker
                  v-model="startdateFour"
                  placeholder=""
                  class="datetimepicker form-control"
                  :editable="true"
                  :clearable="false"
                  :input-format="dateFormat"
                />
                <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Source <span class="text-danger">*</span></label
              >
              <vue-select :options="Media" placeholder="Select" id="googleselect" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Tags <span class="text-danger">*</span></label
              >
              <vue3-tags-input
                class="input-tags form-control"
                placeholder=""
                type="text"
                data-role="tagsinput"
                name="Label"
                value="Tag1"
                :tags="tags4"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Priority <span class="text-danger">*</span></label
              >
              <vue-select :options="Priority" id="medium" placeholder="Select" />
            </div>
          </div>
          <div class="col-lg-12">
            <div class="mb-3">
              <label class="col-form-label"
                >Description <span class="text-danger">*</span></label
              >
              <ckeditor
                :editor="editor"
                v-model="editorData"
                :config="editorConfig"
              ></ckeditor>
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
  <!-- /Add New Deals -->

  <!-- Add Company -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Add New Company</h5>
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
        <div class="accordion" id="main_accordion">
          <!-- Basic Info -->
          <div class="accordion-item rounded mb-3">
            <div class="accordion-header">
              <a
                href="#"
                class="accordion-button accordion-custom-button bg-white rounded fw-medium text-dark"
                data-bs-toggle="collapse"
                data-bs-target="#basic"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-user-plus fs-20"></i
                ></span>
                Basic Info
              </a>
            </div>
            <div
              class="accordion-collapse collapse show"
              id="basic"
              data-bs-parent="#main_accordion"
            >
              <div class="accordion-body border-top">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <div class="profile-upload">
                        <div class="profile-upload-img">
                          <span><i class="ti ti-photo"></i></span>
                          <img
                            src="@/assets/img/profiles/avatar-20.jpg"
                            alt="img"
                            class="preview1"
                          />
                          <button type="button" class="profile-remove">
                            <i class="ti ti-x"></i>
                          </button>
                        </div>
                        <div class="profile-upload-content">
                          <label class="profile-upload-btn">
                            <i class="ti ti-file-broken"></i> Upload File
                            <input type="file" class="input-img" />
                          </label>
                          <p>JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="col-form-label">Company Name</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <div class="d-flex justify-content-between align-items-center">
                        <label class="col-form-label"
                          >Email <span class="text-danger">*</span></label
                        >
                        <div
                          class="status-toggle small-toggle-btn d-flex align-items-center"
                        >
                          <span class="me-2 label-text">Email Opt Out</span>
                          <input type="checkbox" id="user" class="check" checked="" />
                          <label for="user" class="checktoggle"></label>
                        </div>
                      </div>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Phone 1 <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Phone 2</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Fax <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Website <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Ratings</label>
                      <div class="icon-form-end">
                        <span class="form-icon"><i class="ti ti-star"></i></span>
                        <input type="text" class="form-control" placeholder="4.2" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="fmb-3">
                      <label class="col-form-label">Owner</label>
                      <vue-select :options="Jami" id="theresa" placeholder="Choose" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Tags </label>
                      <vue3-tags-input
                        class="input-tags form-control"
                        type="text"
                        data-role="tagsinput"
                        name="Label"
                        value="Tag1"
                        :tags5="tags5"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <div class="d-flex align-items-center justify-content-between">
                        <label class="col-form-label">Deals</label>
                        <a
                          href="#"
                          class="label-add"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvas_add_2"
                          ><i class="ti ti-square-rounded-plus"></i>Add New</a
                        >
                      </div>
                      <vue-select
                        :options="Wisozk"
                        id="wiszokselect"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Source <span class="text-danger">*</span></label
                      >
                      <vue-select :options="Source" id="analytics" placeholder="Choose" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Industry <span class="text-danger">*</span></label
                      >
                      <vue-select
                        :options="Industry"
                        id="insurancetwo"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="col-form-label">Contacts</label>
                      <vue-select :options="Jami" id="jamietwo" placeholder="Choose" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Currency <span class="text-danger">*</span></label
                      >
                      <vue-select
                        :options="ContactCurren"
                        placeholder="Choose"
                        id="contactnamecurren"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Language <span class="text-danger">*</span></label
                      >
                      <vue-select
                        :options="Language"
                        id="arabickuthu"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-0">
                      <label class="col-form-label"
                        >Description <span class="text-danger">*</span></label
                      >
                      <textarea class="form-control" rows="5"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Basic Info -->

          <!-- Address Info -->
          <div class="accordion-item border-top rounded mb-3">
            <div class="accordion-header">
              <a
                href="#"
                class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark"
                data-bs-toggle="collapse"
                data-bs-target="#address"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-map-pin-cog fs-20"></i
                ></span>
                Address Info
              </a>
            </div>
            <div
              class="accordion-collapse collapse"
              id="address"
              data-bs-parent="#main_accordion"
            >
              <div class="accordion-body border-top">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="col-form-label">Street Address </label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">City </label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">State / Province </label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 mb-md-0">
                      <label class="col-form-label">Country</label>
                      <vue-select :options="Country" id="france" placeholder="Choose" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-0">
                      <label class="col-form-label">Zipcode </label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Address Info -->

          <!-- Social Profile -->
          <div class="accordion-item border-top rounded mb-3">
            <div class="accordion-header">
              <a
                href="#"
                class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark"
                data-bs-toggle="collapse"
                data-bs-target="#social"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-social fs-20"></i
                ></span>
                Social Profile
              </a>
            </div>
            <div
              class="accordion-collapse collapse"
              id="social"
              data-bs-parent="#main_accordion"
            >
              <div class="accordion-body border-top">
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Facebook</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Skype </label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Linkedin </label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Twitter</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 mb-md-0">
                      <label class="col-form-label">Whatsapp</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-0">
                      <label class="col-form-label">Instagram</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Social Profile -->

          <!-- Access -->
          <div class="accordion-item border-top rounded mb-3">
            <div class="accordion-header">
              <a
                href="#"
                class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark"
                data-bs-toggle="collapse"
                data-bs-target="#access-info"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-accessible fs-20"></i
                ></span>
                Access
              </a>
            </div>
            <div
              class="accordion-collapse collapse"
              id="access-info"
              data-bs-parent="#main_accordion"
            >
              <div class="accordion-body border-top">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="col-form-label">Visibility</label>
                      <div class="d-flex flex-wrap">
                        <div class="me-2">
                          <input
                            type="radio"
                            class="status-radio"
                            id="public"
                            name="visible"
                          />
                          <label for="public">Public</label>
                        </div>
                        <div class="me-2">
                          <input
                            type="radio"
                            class="status-radio"
                            id="private"
                            name="visible"
                          />
                          <label for="private">Private</label>
                        </div>
                        <div data-bs-toggle="modal" data-bs-target="#access_view">
                          <input
                            type="radio"
                            class="status-radio"
                            id="people"
                            name="visible"
                          />
                          <label for="people">Select People</label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-0">
                      <label class="col-form-label">Status</label>
                      <div class="d-flex flex-wrap">
                        <div class="me-2">
                          <input
                            type="radio"
                            class="status-radio"
                            id="active"
                            name="status"
                            checked=""
                          />
                          <label for="active">Active</label>
                        </div>
                        <div>
                          <input
                            type="radio"
                            class="status-radio"
                            id="inactive"
                            name="status"
                          />
                          <label for="inactive">Inactive</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Access -->
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
  <!-- /Add Company -->
</template>

<script>
import { ref } from "vue";
import Vue3TagsInput from "vue3-tags-input";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
const currentDateTwo = ref(new Date());
const currentDateThree = ref(new Date());
const currentDateFour = ref(new Date());
export default {
  components: {
    Vue3TagsInput,
  },
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
      StatusMod: [
        "Busy",
        "Unavailable",
        "No Answer",
        "Wrong Number",
        "Left Voice Message",
        "Moving Forward",
      ],
      Deal: ["Select", "Collins", "Wisozk", "Walter"],
      contactCity: ["Choose", "Los Angeles", "San Diego", "Fresno", "San Francisco"],
      contactStat: ["Choose", "California", "New York", "Texas", "Florida"],
      contactCountry: ["Choose", "USA", "Canda", "Germany", "France"],
      Document: ["Select", "Contract", "Proposal", "Quote"],
      Owner: ["Select", "Admin", "Jackson Daniel"],
      Locale: ["Select", "en", "es", "ru"],
      Account: ["Gmail", "Outlook", "Imap"],
      Companyname: [
        "Choose",
        "NovaWave LLC",
        "BlueSky Industries",
        "SilverHawk",
        "SummitPeak",
        "RiverStone Ventur",
      ],
      Adams: ["Choose", "Collins", "Konopelski", "Adams", "Schumm", "Wisozk"],
      Ownerone: ["Choose", "Hendry", "Guillory", "Jami", "Theresa", "Espinosa"],
      Source: [
        "Choose",
        "Phone Calls",
        "Social Media",
        "Referral Sites",
        "Web Analytics",
        "Previous Purchases",
      ],
      Industry: [
        "Choose",
        "Retail Industry",
        "Banking",
        "Hotels",
        "Financial Services",
        "Insurance",
      ],
      Language: ["Choose", "English", "Arabic", "Chinese", "Hindi"],
      Country: ["Choose", "India", "USA", "France", "UK", "UAE"],
      Pipeline: ["Choose", "Sales", "Marketing", "Calls"],
      Won: ["Choose", "Open", "Lost", "Won"],
      Currency: ["Select", "Dollar", "Euro", "Pound", "Rupee"],
      ContactCurren: ["Select", "Dollar", "Euro", "Pound", "Rupee"],
      Media: ["Select", "Google", "Social Media"],
      Priority: ["Select", "Highy", "Low", "Medium"],
      Jami: ["Choose", "Hendry", "Guillory", "Jami", "Theresa", "Espinosa"],
      Wisozk: ["Choose", "Collins", "Konopelski", "Adams", "Schumm", "Wisozk"],
      Period: ["Choose", "Days", "Month"],
      DetCurren: ["Choose", "Dollar", "Euro", "Pound", "Rupee"],
      CompanyCurren: ["Choose", "Dollar", "Euro", "Pound", "Rupee"],
      EditCompanyCurren: ["Choose", "Dollar", "Euro", "Pound", "Rupee"],
      tags: ["Collab"],
      tags1: ["Darlee Robertson"],
      tags2: ["Devlops Design", "Margrate Design", "UI for Chat"],
      tags3: ["Sharon Roy"],
      tags4: ["collab", "Rated"],
      tags5: ["Tag1"],
      fieldOne: true,
      fieldTwo: false,
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/crm/contact-details");
    },
    FieldsetTwo() {
      this.fieldOne = false;
      this.fieldTwo = true;
    },
  },
};
</script>
