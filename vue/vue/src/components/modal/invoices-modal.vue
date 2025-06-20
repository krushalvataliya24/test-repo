<template>
  <!-- Add New Invoices -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
      <h4>Add New Invoice</h4>
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
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between">
                <label class="col-form-label">Client</label>
                <a
                  href="#"
                  class="label-add"
                  data-bs-toggle="modal"
                  data-bs-target="#add_deal"
                  ><i class="ti ti-square-rounded-plus"></i>Add New</a
                >
              </div>
              <vue-select
                :options="AsilverSelOne"
                id="asilverselone"
                placeholder="Choose"
              />
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Bill To<span class="text-danger"> *</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Ship To<span class="text-danger"> *</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between">
                <label class="col-form-label">Project</label>
                <a
                  href="#"
                  class="label-add"
                  data-bs-toggle="modal"
                  data-bs-target="#add_deal"
                  ><i class="ti ti-square-rounded-plus"></i>Add New</a
                >
              </div>
              <vue-select :options="ServeSel" id="sevesel" placeholder="Choose" />
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Amount<span class="text-danger"> *</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Currency</label>
                <vue-select :options="InrCurrent" id="inrcurrent" placeholder="Choose" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Invoice Date <span class="text-danger">*</span></label
                >
                <div class="icon-form">
                  <date-picker
                    v-model="startdateTwo"
                    class="form-control datetimepicker"
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
                  >Due Date<span class="text-danger">*</span></label
                >
                <div class="icon-form">
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
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Payment Method</label>
                <vue-select :options="InSelac" id="inselac" placeholder="Choose" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Status</label>
                <vue-select :options="AcSelac" id="acselac" placeholder="Choose" />
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
            </div>
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between">
                <label class="col-form-label">Project</label>
                <a
                  href="#"
                  class="label-add"
                  data-bs-toggle="modal"
                  data-bs-target="#add_deal"
                  ><i class="ti ti-square-rounded-plus"></i>Add New</a
                >
              </div>
              <vue-select :options="HawkSel" id="hawksel" placeholder="Choose" />
            </div>
            <div class="table-responsive">
              <table class="table table-view">
                <thead>
                  <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Amount</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="input-table input-table-descripition">
                        <input type="text" />
                      </div>
                    </td>
                    <td>
                      <div class="input-table">
                        <input type="text" />
                      </div>
                    </td>
                    <td>
                      <div class="input-table">
                        <input type="text" />
                      </div>
                    </td>
                    <td>
                      <div class="input-table">
                        <select>
                          <option>%</option>
                          <option>5%</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="input-table">
                        <input type="text" />
                      </div>
                    </td>
                    <td>
                      <a href="#" class="btn btn-success-light">
                        <i class="ti ti-check"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="subtotal-div mb-3">
              <ul class="mb-3">
                <li>
                  <h5>Subtotal</h5>
                  <h6>$0.00</h6>
                </li>
                <li>
                  <h5>Discount 2%</h5>
                  <h6>$0.00</h6>
                </li>
                <li>
                  <h5>Extra Discount 0%</h5>
                  <h6>$0.00</h6>
                </li>
                <li>
                  <h5>Tax</h5>
                  <h6>$0.00</h6>
                </li>
                <li>
                  <h5>Total</h5>
                  <h6>$0.00</h6>
                </li>
              </ul>
              <div class="row">
                <div class="mb-3">
                  <label class="col-form-label">Signature Name</label>
                  <input type="text" class="form-control" />
                </div>
                <div class="mb-3">
                  <label class="col-form-label">Signature Image</label>
                  <div class="upload-signature">
                    <input type="file" />
                    <a href="#">Upload Signature</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Notes<span class="text-danger"> *</span></label
                >
                <textarea class="form-control" rows="5"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Terms & Conditions<span class="text-danger"> *</span></label
                >
                <textarea class="form-control" rows="5"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">
            Cancel
          </button>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add New Invoices -->

  <!-- Edit Invoices -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom">
      <h4>Edit Invoice</h4>
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
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between">
                <label class="col-form-label">Client</label>
                <a
                  href="#"
                  class="label-add"
                  data-bs-toggle="modal"
                  data-bs-target="#add_deal"
                  ><i class="ti ti-square-rounded-plus"></i>Add New</a
                >
              </div>
              <vue-select
                :options="EditAsilverSelOne"
                id="editasilverselone"
                placeholder="NovaWave LLC"
              />
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Bill To<span class="text-danger"> *</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Ship To<span class="text-danger"> *</span></label
                >
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between">
                <label class="col-form-label">Project</label>
                <a
                  href="#"
                  class="label-add"
                  data-bs-toggle="modal"
                  data-bs-target="#add_deal"
                  ><i class="ti ti-square-rounded-plus"></i>Add New</a
                >
              </div>
              <vue-select
                :options="EditServeSel"
                id="editseversel"
                placeholder="Truelysell"
              />
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Amount<span class="text-danger"> *</span></label
                >
                <input class="form-control" type="text" value="2,15,000" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Currency</label>
                <vue-select
                  :options="EditInrCurrent"
                  id="editinrcurrent"
                  placeholder="Choose"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Invoice Date <span class="text-danger">*</span></label
                >
                <div class="icon-form">
                  <date-picker
                    v-model="startdate"
                    class="form-control datetimepicker"
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
                  >Due Date<span class="text-danger">*</span></label
                >
                <div class="icon-form">
                  <date-picker
                    v-model="startdateOne"
                    class="form-control datetimepicker"
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
                <label class="col-form-label">Payment Method</label>
                <vue-select
                  :options="EditInSelac"
                  id="editinselac"
                  placeholder="Choose"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label">Status</label>
                <vue-select
                  :options="EditAcSelac"
                  id="editacselac"
                  placeholder="Choose"
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
            </div>
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between">
                <label class="col-form-label">Project</label>
                <a
                  href="#"
                  class="label-add"
                  data-bs-toggle="modal"
                  data-bs-target="#add_deal"
                  ><i class="ti ti-square-rounded-plus"></i>Add New</a
                >
              </div>
              <vue-select :options="EditHawkSel" id="edithawksel" placeholder="Choose" />
            </div>
            <div class="table-responsive">
              <table class="table table-view">
                <thead>
                  <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Amount</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="input-table input-table-descripition">
                        <input type="text" />
                      </div>
                    </td>
                    <td>
                      <div class="input-table">
                        <input type="text" />
                      </div>
                    </td>
                    <td>
                      <div class="input-table">
                        <input type="text" />
                      </div>
                    </td>
                    <td>
                      <div class="input-table">
                        <select>
                          <option>%</option>
                          <option>5%</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="input-table">
                        <input type="text" />
                      </div>
                    </td>
                    <td>
                      <a href="#" class="btn btn-success-light">
                        <i class="ti ti-check"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="table-responsive">
              <table class="table table-view">
                <thead>
                  <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Amount</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="input-table input-table-descripition">
                        <input type="text" value="Web Design" />
                      </div>
                    </td>
                    <td>
                      <div class="input-table">
                        <input type="text" value="1" />
                      </div>
                    </td>
                    <td>
                      <div class="input-table">
                        <input type="text" value="$200" />
                      </div>
                    </td>
                    <td>
                      <div class="input-table">
                        <select>
                          <option>2%</option>
                          <option>5%</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="input-table">
                        <input type="text" value="$196" />
                      </div>
                    </td>
                    <td>
                      <a href="#" class="btn btn-danger-light">
                        <i class="ti ti-x"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="subtotal-div mb-3">
              <ul class="mb-3">
                <li>
                  <h5>Subtotal</h5>
                  <h6>$196.00</h6>
                </li>
                <li>
                  <h5>Discount 2%</h5>
                  <h6>$4.00</h6>
                </li>
                <li>
                  <h5>Extra Discount 0%</h5>
                  <h6>$0.00</h6>
                </li>
                <li>
                  <h5>Tax</h5>
                  <h6>$0.00</h6>
                </li>
                <li>
                  <h5>Total</h5>
                  <h6>$192.00</h6>
                </li>
              </ul>
              <div class="row">
                <div class="mb-3">
                  <label class="col-form-label">Signature Name</label>
                  <input type="text" class="form-control" />
                </div>
                <div class="mb-0">
                  <label class="col-form-label">Signature Image</label>
                  <div class="upload-signature">
                    <input type="file" />
                    <a href="#" class="text-start">
                      <img src="@/assets/img/signature.png" alt="img" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Notes<span class="text-danger"> *</span></label
                >
                <textarea class="form-control" rows="5"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Terms & Conditions<span class="text-danger"> *</span></label
                >
                <textarea class="form-control" rows="5"></textarea>
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
  <!-- /Edit Invoices -->

  <!-- Delete Invoices -->
  <div class="modal fade" id="delete_invoices" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h3>Remove Invoices?</h3>
            <p class="del-info">Are you sure you want to remove invoices you selected.</p>
            <div class="col-lg-12 text-center modal-btn">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <router-link
                to="/crm/invoices-list"
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
  <!-- /Delete Invoices -->

  <!-- Add New View -->
  <div class="modal custom-modal fade" id="add_deal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="mb-3">
              <label class="col-form-label">Name</label>
              <input type="text" class="form-control" placeholder="Enter Name" />
            </div>
            <div class="modal-btn text-end">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-danger">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add New View -->
</template>
<script>
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import { ref } from "vue";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
const currentDateTwo = ref(new Date());
const currentDateThree = ref(new Date());
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
      dateFormat: "dd-MM-yyyy",
      AsilverSelOne: ["Choose", "NovaWave LLC", "BlueSky Industries"],
      ServeSel: ["Choose", "Truelysell", "Dreamschat", "Servebook"],
      InrCurrent: ["Choose", "Dollar", "Euro", "Pound", "Rupee"],
      InSelac: ["Choose", "Active", "Inactive"],
      AcSelac: ["Choose", "Active", "Inactive"],
      HawkSel: ["Choose", "NovaWave LLC", "BlueSky Industries", "ASilver Hawkdams"],
      EditAsilverSelOne: ["Choose", "NovaWave LLC", "BlueSky Industries"],
      EditServeSel: ["Choose", "Truelysell", "Dreamschat", "Servebook"],
      EditInrCurrent: ["Choose", "Dollar", "Euro", "Pound", "Rupee"],
      EditInSelac: ["Choose", "Active", "Inactive"],
      EditAcSelac: ["Choose", "Active", "Inactive"],
      EditHawkSel: ["Choose", "NovaWave LLC", "BlueSky Industries", "ASilver Hawkdams"],
      EditAmounSelOne: ["%", "5%"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/crm/invoices-list");
    },
  },
};
</script>
