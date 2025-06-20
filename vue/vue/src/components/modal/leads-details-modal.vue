<template>
  <!-- Create Leads -->
  <div class="modal custom-modal fade" id="create_contact" role="dialog">
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
              <i class="ti ti-user-plus"></i>
            </div>
            <h3>Contact Created Successfully!!!</h3>
            <p>View the details of contact, created</p>
            <div class="col-lg-12 text-center modal-btn">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal"
                >Cancel</a
              >
              <router-link to="/crm/leads-details" class="btn btn-primary"
                >View Details</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Create Leads -->

  <!-- Add Note -->
  <div
    class="modal custom-modal fade modal-padding"
    id="add_notes"
    role="dialog"
  >
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
                <div class="img-upload">
                  <i class="ti ti-file-broken"></i>Upload File
                </div>
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
  <div
    class="modal custom-modal fade modal-padding"
    id="create_call"
    role="dialog"
  >
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
                  <vue-select
                    :options="BusySel"
                    id="busysel"
                    placeholder="Busy"
                  />
                </div>
                <div class="mb-3">
                  <label class="col-form-label"
                    >Follow Up Date <span class="text-danger"> *</span></label
                  >
                  <div class="icon-form">
                    <date-picker
                      v-model="startdate"
                      class="form-control datetimepicker"
                      :editable="true"
                      :clearable="false"
                      :input-format="dateFormat"
                    />
                    <span class="form-icon"
                      ><i class="ti ti-calendar-check"></i
                    ></span>
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
                          :options="WalterSel"
                          id="waltersel"
                          placeholder="Select"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="col-form-label"
                          >Document Type
                          <span class="text-danger">*</span></label
                        >
                        <vue-select
                          :options="SelectCont"
                          id="selectcont"
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
                          :options="JamDanSel"
                          id="jamdansel"
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
                        <vue-select
                          :options="RuSel"
                          id="rusel"
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
                                ><span class="sign-title">No Signature</span
                                >This document does not require a signature
                                before acceptance.</label
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
                                ><span class="sign-title">Use e-signature</span
                                >This document require e-signature before
                                acceptance.</label
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
                                      <a
                                        href="javascript:void(0);"
                                        class="add-sign"
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
                    <div
                      class="col-lg-12 text-end form-wizard-button modal-btn"
                    >
                      <button class="btn btn-light" type="reset">Reset</button>
                      <button
                        class="btn btn-primary wizard-next-btn"
                        type="button"
                      >
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
                        <h4 class="mb-2">
                          Send the document to following signers
                        </h4>
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
                          >Message Subject
                          <span class="text-danger"> *</span></label
                        >
                        <input
                          class="form-control"
                          type="text"
                          placeholder="Enter Subject"
                        />
                      </div>
                      <div class="mb-3">
                        <label class="col-form-label"
                          >Message Text
                          <span class="text-danger"> *</span></label
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
                          <i class="ti ti-circle-check"></i> Document sent
                          successfully to the selected recipients
                        </p>
                      </div>
                    </div>
                    <div
                      class="col-lg-12 text-end form-wizard-button modal-btn"
                    >
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
            <vue-select :options="GmailSel" id="gmailsel" placeholder="Gmail" />
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
                <input
                  type="radio"
                  class="status-radio"
                  id="test2"
                  name="radio-group"
                />
                <label for="test2">1 Month Ago</label>
              </div>
              <div class="radio-item">
                <input
                  type="radio"
                  class="status-radio"
                  id="test3"
                  name="radio-group"
                />
                <label for="test3">3 Month Ago</label>
              </div>
              <div class="radio-item">
                <input
                  type="radio"
                  class="status-radio"
                  id="test4"
                  name="radio-group"
                />
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
              Email Account is configured with “example@example.com”. Now you
              can access email.
            </p>
            <div class="col-lg-12 text-center modal-btn">
              <router-link to="/crm/leads-details" class="btn btn-primary"
                >Go to email</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Success Email -->

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
              <a href="#" class="btn btn-light" data-bs-dismiss="modal"
                >Cancel</a
              >
              <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Access -->

  <!-- Add Contact -->
  <div class="modal custom-modal fade" id="add_contact" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Contact</h5>
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
              <a href="#" class="btn btn-light" data-bs-dismiss="modal"
                >Cancel</a
              >
              <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Contact -->
</template>

<script>
import { ref } from "vue";
const currentDate = ref(new Date());

export default {
  data() {
    return {
      startdate: currentDate,
      dateFormat: "dd-MM-yyyy",
      BusySel : ["Busy", "Unavailable", "No Answer", "Wrong Number", "Left Voice Message", "Moving Forward"],
      WalterSel : ["Select", "Collins", "Wisozk", "Walter"],
      SelectCont : ["Select", "Contract", "Proposal", "Quote"],
      JamDanSel : ["Select", "Admin", "Jackson Daniel"],
      RuSel : ["Select", "en", "es", "ru"],
      GmailSel : ["Gmail", "Outlook", "Imap"]
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/crm/leads-details");
    },
  },
};
</script>
