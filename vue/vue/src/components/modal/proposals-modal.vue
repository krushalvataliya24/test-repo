<template>
  <!-- Add New Proposal -->
<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
	<div class="offcanvas-header border-bottom">
		<h4>Add New Proposal</h4>
		<button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
			<i class="ti ti-x"></i>
		</button>
	</div>
	<div class="offcanvas-body">
		<form @submit.prevent="submitForm">
			<div>
				<div class="row">
					<div class="col-md-12">
						<div class="mb-3">
							<label class="col-form-label">Subject <span class="text-danger">*</span></label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="col-form-label">Date<span class="text-danger"> *</span></label>
							<div class="icon-form">
								<date-picker
									v-model="startdate"
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
							<label class="col-form-label">Open Till <span class="text-danger">*</span></label>
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
					<div class="col-md-12">
						<div class="mb-3">
							<label class="col-form-label">Client <span class="text-danger">*</span></label>
							<vue-select :options="NovaWaPro" id="novawapro" placeholder="Select" />
						</div>
					</div>
					<div class="col-md-12">
						<div class="mb-3">
							<div class="d-flex align-items-center justify-content-between">
								<label class="col-form-label">Project<span class="text-danger">*</span></label>
								<a href="#" class="label-add "  data-bs-toggle="modal" data-bs-target="#add_project"><i class="ti ti-square-rounded-plus"></i>Add New</a>
							</div>
							<vue-select :options="TrueSel" id="truesel" placeholder="Select" />
						</div>
					</div>
					<div class="col-md-12">
						<div class="mb-3">
							<label class="col-form-label">Related to <span class="text-danger">*</span></label>
							<vue-select :options="DreamSel" id="dreamssele" placeholder="Select" />
						</div>
					</div>
					<div class="col-md-12">
						<div class="mb-3">
							<div class="d-flex align-items-center justify-content-between">
								<label class="col-form-label">Deals<span class="text-danger">*</span></label>
								<a href="#" class="label-add " data-bs-toggle="modal" data-bs-target="#add_deal"><i class="ti ti-square-rounded-plus"></i>Add New</a>
							</div>
							<vue-select :options="DoccSel" id="doccusele" placeholder="Select" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="col-form-label">Currency</label>
							<vue-select :options="MedSelect" id="medselect" placeholder="Select" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="col-form-label">Status <span class="text-danger">*</span></label>
							<vue-select :options="ActivSel" id="activsel" placeholder="Select" />
						</div>
					</div>
					<div class="col-md-12">
						<div class="mb-3">
							<label class="col-form-label">Assigned to <span class="text-danger">*</span></label>
							<vue-select
								:options="InActivSel"
								id="inactivsel"
								placeholder="Select"
							/>
						</div>
					</div>
					<div class="col-md-12">
						<div class="mb-3">
							<label class="col-form-label">Attachment <span class="text-danger">*</span></label>
							<div class="drag-attach">
								<input type="file">
								<div class="img-upload">											
									<i class="ti ti-file-broken"></i>Upload File
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="mb-3">
							<label class="col-form-label">Tags </label>
							<vue3-tags-input
								class="input-tags form-control"
								type="text"
								data-role="tagsinput"
								name="Label"
								value="Tag1"
								:tags="tags"
							/>
						</div>
					</div>
					<div class="col-md-12">
						<div class="mb-3">
							<label class="col-form-label">Description <span class="text-danger">*</span></label>
							<ckeditor
								:editor="editor"
								v-model="editorData"
								:config="editorConfig"
							></ckeditor>
						</div>
					</div> 
				</div>
			</div>
			<div class="d-flex align-items-center justify-content-end">
				<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_success">Create</button>
			</div>
		</form>
	</div>
</div>
<!-- /Add New Proposal -->

<!-- Edit Proposal -->
<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
	<div class="offcanvas-header border-bottom">
		<h4>Edit Proposal</h4>
		<button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
			<i class="ti ti-x"></i>
		</button>
	</div>
	<div class="offcanvas-body">
		<form @submit.prevent="submitForm">
			<div>
				<div class="row">
					<div class="col-md-12">
						<div class="mb-3">
							<label class="col-form-label">Subject <span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="Web design Proposal">
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="col-form-label">Date<span class="text-danger"> *</span></label>
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
							<label class="col-form-label">Open Till <span class="text-danger">*</span></label>
							<div class="icon-form">
								<date-picker
									v-model="startdateThree"
									class="form-control datetimepicker"
									:editable="true"
									:clearable="false"
									:input-format="dateFormat"
								/>
								<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="mb-3">
							<label class="col-form-label">Client <span class="text-danger">*</span></label>
							<vue-select
								:options="EditNovaWaPro"
								id="editnovawapro"
								placeholder="Select"
							/>
						</div>
					</div>
					<div class="col-md-12">
						<div class="mb-3">
							<div class="d-flex align-items-center justify-content-between">
								<label class="col-form-label">Project<span class="text-danger">*</span></label>
								<a href="#" class="label-add "  data-bs-toggle="modal" data-bs-target="#add_project"><i class="ti ti-square-rounded-plus"></i>Add New</a>
							</div>
							<vue-select
								:options="EditTrueSel"
								id="edittruesel"
								placeholder="Truelysell"
							/>
						</div>
					</div>
					<div class="col-md-12">
						<div class="mb-3">
							<label class="col-form-label">Related to <span class="text-danger">*</span></label>
							<vue-select
								:options="EditDreamSel"
								id="editdreamssele"
								placeholder="Deals"
							/>
						</div>
					</div>
					<div class="col-md-12">
						<div class="mb-3">
							<div class="d-flex align-items-center justify-content-between">
								<label class="col-form-label">Deals<span class="text-danger">*</span></label>
								<a href="#" class="label-add " data-bs-toggle="modal" data-bs-target="#add_deal"><i class="ti ti-square-rounded-plus"></i>Add New</a>
							</div>
							<vue-select
								:options="EditDoccSel"
								id="editdoccusele"
								placeholder="Collins"
							/>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="col-form-label">Currency</label>
							<vue-select
								:options="EditMedSelect"
								id="editmedselect"
								placeholder="$"
							/>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="col-form-label">Status <span class="text-danger">*</span></label>
							<vue-select
								:options="EditActivSel"
								id="editactivsel"
								placeholder="Open"
							/>
						</div>
					</div>
					<div class="col-md-12">
						<div class="mb-3">
							<label class="col-form-label">Assigned to <span class="text-danger">*</span></label>
							<vue-select
								:options="EditInActivSel"
								id="editinactivsel"
								placeholder="Darlee Robertson"
							/>
						</div>
					</div>
					<div class="col-md-12">
						<div class="mb-3">
							<label class="col-form-label">Attachment <span class="text-danger">*</span></label>
							<div class="drag-attach">
								<input type="file">
								<div class="img-upload">											
									<i class="ti ti-file-broken"></i>Upload File
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="mb-3">
							<label class="col-form-label">Tags </label>
							<vue3-tags-input
								class="input-tags form-control"
								type="text"
								data-role="tagsinput"
								name="Label"
								value="Tag1, Tag2, Tag3"
								:tags="tags"
							/>
						</div>
					</div>
					<div class="col-md-12">
						<div class="mb-3">
							<label class="col-form-label">Description <span class="text-danger">*</span></label>
							<ckeditor
								:editor="editor"
								v-model="editorData"
								:config="editorConfig"
							></ckeditor>
						</div>
					</div> 
				</div>
			</div>
			<div class="d-flex align-items-center justify-content-end">
				<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
				<button type="button" class="btn btn-primary" >Save Changes</button>
			</div>
		</form>
	</div>
</div>
<!-- /Edit Proposal -->

<!-- Delete Proposals -->
<div class="modal fade" id="delete_proposals" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="text-center">
					<div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
						<i class="ti ti-trash-x fs-36 text-danger"></i>
					</div>
					<h4 class="mb-2">Remove Proposal?</h4>
					<p class="mb-0">Are you sure you want to remove <br> proposal you selected.</p>
					<div class="d-flex align-items-center justify-content-center mt-4">
						<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
						<router-link to="/crm/proposals-list" class="btn btn-danger" data-bs-dismiss="modal">Yes, Delete it</router-link>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Delete Proposals -->

<!-- Create Proposal -->
<div class="modal custom-modal fade" id="create_success" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header border-0 m-0 justify-content-end">
				<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="modal-body">
				<div class="success-message text-center">
					<div class="success-popup-icon bg-light-blue">
						<i class="ti ti-atom-2"></i>
					</div>
					<h3>Proposals Created Successfully!!!</h3>
					<p>View the details of proposals, created</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Create Proposal -->

<!-- Add New View -->
<div class="modal custom-modal fade" id="save_view" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add New View</h5>
				<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="modal-body">
				<form @submit.prevent="submitForm">
					<div class="mb-3">
						<label class="col-form-label">View Name</label>
						<input type="text" class="form-control">
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

<!-- Add New View -->
<div class="modal custom-modal fade" id="add_deal" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add New Deal</h5>
				<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="modal-body">
				<form action="#">
					<div class="mb-3">
						<label class="col-form-label">Deal Name</label>
						<input type="text" class="form-control">
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

<!-- Add New View -->
<div class="modal custom-modal fade" id="add_project" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add New Project</h5>
				<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="modal-body">
				<form action="#">
					<div class="mb-3">
						<label class="col-form-label">Project Name</label>
						<input type="text" class="form-control">
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
import Vue3TagsInput from "vue3-tags-input";
import { ref } from "vue";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
const currentDateTwo = ref(new Date());
const currentDateThree = ref(new Date());
export default {
  components: {
    Vue3TagsInput,
  },
  data() {
    return {
      editor: ClassicEditor,
      editorData:
        " Write a new comment, send your team notification by typing @ followed by their name",
      editorConfig: {},
      startdate: currentDate,
      startdateOne: currentDateOne,
      startdateTwo: currentDateTwo,
      startdateThree: currentDateThree,
      dateFormat: "dd-MM-yyyy",
      NovaWaPro: ["Select", "NovaWave LLC", "Silver Hawk", "Harbor View"],
      DoccSel: ["Select", "Truelysell", "Best@laundry", "Doccure", "Kofejob"],
      DreamSel: ["Select", "Truelysell", "Best@laundry", "Doccure", "Kofejob"],
      ActivSel: ["Select", "Active", "Inactive"],
      MedSelect: ["Select", "High", "Low", "Medium"],
      InActivSel: ["Select", "Active", "Inactive"],
      TrueSel: [
        "Select",
        "Truelysell",
        "Dreamsports",
        "Best@laundry",
        "Doccure",
        "Kofejob",
      ],
      EditNovaWaPro: ["Select", "NovaWave LLC", "Silver Hawk", "Harbor View"],
      EditDoccSel: ["Select", "Truelysell", "Best@laundry", "Doccure", "Kofejob"],
      EditDreamSel: ["Select", "Truelysell", "Best@laundry", "Doccure", "Kofejob"],
      EditActivSel: ["Select", "Active", "Inactive"],
      EditMedSelect: ["Select", "High", "Low", "Medium"],
      EditInActivSel: ["Select", "Active", "Inactive"],
      EditTrueSel: [
        "Select",
        "Truelysell",
        "Dreamsports",
        "Best@laundry",
        "Doccure",
        "Kofejob",
      ],
      tags: ["Tag1", "Tag2", "Tag3"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/crm/proposals-list");
    },
  },
};
</script>
