<template>
  <!-- Add New Activity -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
      <h4>Add New Activity</h4>
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
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Activity Type <span class="text-danger">*</span></label
                >
                <ul class="radio-activity">
                  <li>
                    <div class="active-type">
                      <input type="radio" id="call" name="status" checked="" />
                      <label for="call"><i class="ti ti-phone"></i>Calls</label>
                    </div>
                  </li>
                  <li>
                    <div class="active-type">
                      <input type="radio" id="mail" name="status" />
                      <label for="mail"><i class="ti ti-mail"></i>Email</label>
                    </div>
                  </li>
                  <li>
                    <div class="active-type">
                      <input type="radio" id="task" name="status" />
                      <label for="task"><i class="ti ti-subtask"></i>Task</label>
                    </div>
                  </li>
                  <li>
                    <div class="active-type">
                      <input type="radio" id="shares" name="status" />
                      <label for="shares"><i class="ti ti-user-share"></i>Meeting</label>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <label class="col-form-label"
                >Due Date <span class="text-danger">*</span></label
              >
              <div class="mb-3 icon-form">
                <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                <date-picker
                  v-model="startdate"
                  placeholder=""
                  class="datetimepicker form-control"
                  :editable="true"
                  :clearable="false"
                  :input-format="dateFormat"
                />
              </div>
            </div>
            <div class="col-md-6">
              <label class="col-form-label"
                >Time <span class="text-danger">*</span></label
              >
              <div class="mb-3 icon-form">
                <span class="form-icon"><i class="ti ti-clock-hour-10"></i></span>
                <a-time-picker
                  class="form-control datetimepicker-time"
                  placeholder="11:00 AM"
                  use12-hours
                  format="h:mm a"
                  type="text"
                />
              </div>
            </div>
            <div class="col-md-6">
              <label class="col-form-label"
                >Reminder <span class="text-danger">*</span></label
              >
              <div class="mb-3 icon-form">
                <span class="form-icon"><i class="ti ti-bell-ringing"></i></span>
                <input type="text" class="form-control" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex align-items-center">
                <div class="mb-3 w-100">
                  <label class="col-form-label">&nbsp;</label>
                  <vue-select :options="SelectAct" id="selectact" placeholder="Select" />
                </div>
                <div class="mb-3 time-text">
                  <label class="col-form-label">&nbsp;</label>
                  <p>Before Due</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Owner <span class="text-danger">*</span></label
                >
                <vue-select :options="SelectHen" id="selecthen" placeholder="Select" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Guests <span class="text-danger">*</span></label
                >
                <vue-select :options="GueSel" id="gusel" placeholder="Darlee Robertson" />
              </div>
            </div>
            <div class="col-md-12">
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
              <div class="mb-3">
                <div class="d-flex align-items-center justify-content-between">
                  <label class="col-form-label">Deals</label>
                  <a
                    href="#"
                    class="label-add"
                    data-bs-toggle="modal"
                    data-bs-target="#add_deal"
                    ><i class="ti ti-square-rounded-plus"></i>Add New</a
                  >
                </div>
                <vue-select :options="SelectColl" id="selectcoll" placeholder="Select" />
              </div>
              <div class="mb-3">
                <div class="d-flex align-items-center justify-content-between">
                  <label class="col-form-label">Contacts</label>
                  <a
                    href="#"
                    class="label-add"
                    data-bs-toggle="modal"
                    data-bs-target="#add_contacts"
                    ><i class="ti ti-square-rounded-plus"></i>Add New</a
                  >
                </div>
                <vue-select :options="SelectAd" id="selectad" placeholder="Select" />
              </div>
              <div class="mb-3">
                <div class="d-flex align-items-center justify-content-between">
                  <label class="col-form-label">Companies</label>
                  <a
                    href="#"
                    class="label-add"
                    data-bs-toggle="modal"
                    data-bs-target="#add_company"
                    ><i class="ti ti-square-rounded-plus"></i>Add New</a
                  >
                </div>
                <vue-select :options="SelectLLC" id="selectllc" placeholder="Select" />
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">
            Cancel
          </button>
          <button type="button" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add New Activity -->

  <!-- Edit Activity -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom">
      <div>
        <h4 class="mb-2">We scheduled a meeting for next week</h4>
        <p>Commented by <span>Aeron</span> on 15 Sep 2023, 11:15 pm</p>
      </div>
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
        <div class="pro-create">
          <div class="tab-activity">
            <ul class="nav">
              <li>
                <a href="#" data-bs-toggle="tab" data-bs-target="#activity" class="active"
                  >Activity</a
                >
              </li>
              <li>
                <a href="#" data-bs-toggle="tab" data-bs-target="#comments"
                  >Comments<span>1</span></a
                >
              </li>
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane fade" id="comments">
              <div class="comment-wrap mb-4">
                <h6>
                  The best way to get a project done faster is to start sooner. A goal
                  without a timeline is just a dream.The goal you set must be challenging.
                  At the same time, it should be realistic and attainable, not impossible
                  to reach.
                </h6>
                <p>Commented by <span>Aeron</span> on 15 Sep 2023, 11:15 pm</p>
              </div>
            </div>
            <div class="tab-pane show active" id="activity">
              <div class="row">
                <div class="col-md-12">
                  <div class="mb-3">
                    <label class="col-form-label"
                      >Title <span class="text-danger">*</span></label
                    >
                    <input type="text" class="form-control" />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3">
                    <label class="col-form-label"
                      >Activity Type <span class="text-danger">*</span></label
                    >
                    <ul class="radio-activity">
                      <li>
                        <div class="active-type">
                          <input type="radio" id="call2" name="status" checked="" />
                          <label for="call2"><i class="ti ti-phone"></i>Calls</label>
                        </div>
                      </li>
                      <li>
                        <div class="active-type">
                          <input type="radio" id="mail2" name="status" />
                          <label for="mail2"><i class="ti ti-mail"></i>Email</label>
                        </div>
                      </li>
                      <li>
                        <div class="active-type">
                          <input type="radio" id="task2" name="status" />
                          <label for="task2"><i class="ti ti-subtask"></i>Task</label>
                        </div>
                      </li>
                      <li>
                        <div class="active-type">
                          <input type="radio" id="shares2" name="status" />
                          <label for="shares2"
                            ><i class="ti ti-user-share"></i>Meeting</label
                          >
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <label class="col-form-label"
                    >Due Date <span class="text-danger">*</span></label
                  >
                  <div class="mb-3 icon-form">
                    <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                    <date-picker
                      v-model="startdate"
                      placeholder=""
                      class="datetimepicker form-control"
                      :editable="true"
                      :clearable="false"
                      :input-format="dateFormat"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <label class="col-form-label"
                    >Time <span class="text-danger">*</span></label
                  >
                  <div class="mb-3 icon-form">
                    <span class="form-icon"><i class="ti ti-clock-hour-10"></i></span>
                    <a-time-picker
                      class="form-control datetimepicker-time"
                      placeholder="11:00 AM"
                      use12-hours
                      format="h:mm a"
                      type="time"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <label class="col-form-label"
                    >Reminder <span class="text-danger">*</span></label
                  >
                  <div class="mb-3 icon-form">
                    <span class="form-icon"><i class="ti ti-bell-ringing"></i></span>
                    <input type="text" class="form-control" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="d-flex align-items-center">
                    <div class="mb-3 w-100">
                      <label class="col-form-label">&nbsp;</label>
                      <vue-select
                        :options="SelectHours"
                        id="selecthours"
                        placeholder="Select"
                      />
                    </div>
                    <div class="mb-3 time-text">
                      <label class="col-form-label">&nbsp;</label>
                      <p>Before Due</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="col-form-label"
                      >Owner <span class="text-danger">*</span></label
                    >
                    <vue-select
                      :options="SelectBrad"
                      id="selectbrad"
                      placeholder="Select"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="col-form-label"
                      >Guests <span class="text-danger">*</span></label
                    >
                    <vue-select
                      :options="DarSel"
                      id="darsel"
                      placeholder="Darlee Robertson"
                    />
                  </div>
                </div>
                <div class="col-md-12">
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
                  <div class="mb-3">
                    <div class="d-flex align-items-center justify-content-between">
                      <label class="col-form-label">Deals</label>
                      <a
                        href="#"
                        class="label-add"
                        data-bs-toggle="modal"
                        data-bs-target="#add_deal"
                        ><i class="ti ti-square-rounded-plus"></i>Add New</a
                      >
                    </div>
                    <vue-select :options="SelKono" id="selkono" placeholder="Select" />
                  </div>
                  <div class="mb-3">
                    <div class="d-flex align-items-center justify-content-between">
                      <label class="col-form-label">Contacts</label>
                      <a
                        href="#"
                        class="label-add"
                        data-bs-toggle="modal"
                        data-bs-target="#add_contacts"
                        ><i class="ti ti-square-rounded-plus"></i>Add New</a
                      >
                    </div>
                    <vue-select :options="SelAdact" id="seladact" placegolder="Select" />
                  </div>
                  <div class="mb-3">
                    <div class="d-flex align-items-center justify-content-between">
                      <label class="col-form-label">Companies</label>
                      <a
                        href="#"
                        class="label-add"
                        data-bs-toggle="modal"
                        data-bs-target="#add_company"
                        ><i class="ti ti-square-rounded-plus"></i>Add New</a
                      >
                    </div>
                    <vue-select
                      :options="SelLLCact"
                      id="selllcact"
                      placeholder="Select"
                    />
                  </div>
                </div>
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
  <!-- /Edit Activity -->

  <!-- Delete Activity -->
  <div class="modal fade" id="delete_activity" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Activity?</h4>
            <p class="mb-0">
              Are you sure you want to remove <br />
              activity you selected.
            </p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link
                to="/crm/activities-list"
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
  <!-- /Delete Activity -->

  <!-- Add Contacts -->
  <div class="modal custom-modal fade" id="add_contacts" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Contacts</h5>
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
  <!-- /Add Contacts -->

  <!-- Add Deals -->
  <div class="modal custom-modal fade" id="add_deal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Deals</h5>
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
                      <a href="#">Collins</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <a href="#">Konopelski</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <a href="#">Adams</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <a href="#">Schumm</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <a href="#">Wisozk</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
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
  <!-- /Add Deals -->

  <!-- Add Company -->
  <div class="modal custom-modal fade" id="add_company" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Company</h5>
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
                      <img src="@/assets/img/icons/company-icon-01.svg" alt="" />
                      <a href="#">NovaWave LLC</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/icons/company-icon-02.svg" alt="" />
                      <a href="#">BlueSky Industries</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/icons/company-icon-03.svg" alt="" />
                      <a href="#">Silver Hawk</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/icons/company-icon-04.svg" alt="" />
                      <a href="#">Summit Peak</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/icons/company-icon-05.svg" alt="" />
                      <a href="#">RiverStone Ventur</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/icons/company-icon-06.svg" alt="" />
                      <a href="#">Bright Bridge Grp</a>
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
  <!-- /Add Company -->
</template>
<script>
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import { ref } from "vue";
const currentDate = ref(new Date());
export default {
  data() {
    return {
      editor: ClassicEditor,
      editorData: "Description",
      editorConfig: {},
      startdate: currentDate,
      dateFormat: "dd-MM-yyyy",
      SelectAct: ["Select", "Minutes", "Hours"],
      SelectHen: ["Select", "Hendry", "Bradtke"],
      SelectColl: ["Select", "Collins", "Konopelski", "Adams"],
      SelectAd: ["Select", "COllins", "Konopelski", "Adams"],
      SelectLLC: ["Select", "NovaWave LLC", "SilverHawk", "HarborView"],
      SelectHours: ["Select", "Minutes", "Hours"],
      SelectBrad: ["Select", "Hendry", "Bradtke", "Sally"],
      SelKono: ["Select", "Collins", "Konopelski", "Adams"],
      SelAdact: ["Select", "Collins", "Konopelski", "Admas"],
      SelLLCact: ["Select", "NovoWave LLC", "SilverHawk", "HarbooView"],
      GueSel: ["Darlee Robertson", "Sharon Roy", "Vaughan", "Jessica", "Carol Thomas"],
      DarSel: ["Darlee Robertson", "Sharon Roy", "Vaughan", "Jessica", "Carol Thomas"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/crm/activities-list");
    },
  },
};
</script>
