<!DOCTYPE html>
<html lang="en">

<head>

	<?= $this->element('title-meta') ?>

	<!-- Title -->
	<title>Pipeline | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>

	<!-- Summernote CSS -->
	<?php echo $this->Html->css('plugins/summernote/summernote-lite.min.css') ?>

	<!-- Bootstrap Tagsinput CSS -->
	<?php echo $this->Html->css('plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') ?>

	<?= $this->element('head-css') ?>

</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<?= $this->element('header') ?>
		<?= $this->element('sidebar') ?>

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<div class="row">
					<div class="col-md-12">

						<!-- Page Header -->
						<div class="page-header">
							<div class="row align-items-center">
								<div class="col-4">
									<h4 class="page-title">Pipeline<span class="count-title">123</span></h4>
								</div>
								<div class="col-8 text-end">
									<div class="head-icons">
										<a href="pipeline" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Refresh">
											<i class="ti ti-refresh-dot"></i>
										</a>
										<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Collapse" id="collapse-header">
											<i class="ti ti-chevrons-up"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

						<div class="card">
							<div class="card-header">
								<!-- Search -->

								<div class="row align-items-center">
									<div class="col-sm-4">
										<div class="icon-form mb-3 mb-sm-0">
											<span class="form-icon"><i class="ti ti-search"></i></span>
											<input type="text" class="form-control" placeholder="Search Pipeline">
										</div>
									</div>

								</div>
								<!-- /Search -->
							</div>
							<div class="card-body">
								<!-- Filter -->
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-4">
									<div class="d-flex align-items-center flex-wrap row-gap-2">
										<div class="dropdown me-2">
											<a href="javascript:void(0);" class="dropdown-toggle"
												data-bs-toggle="dropdown"><i
													class="ti ti-sort-ascending-2 me-2"></i>Sort
											</a>
											<div class="dropdown-menu  dropdown-menu-start">
												<ul>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">
															<i class="ti ti-circle-chevron-right me-1"></i>Ascending
														</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">
															<i class="ti ti-circle-chevron-right me-1"></i>Descending
														</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">
															<i class="ti ti-circle-chevron-right me-1"></i>Recently
															Viewed
														</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">
															<i class="ti ti-circle-chevron-right me-1"></i>Recently
															Added
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="dropdown">
											<a href="javascript:void(0);" class="dropdown-toggle"
												data-bs-toggle="dropdown"><i
													class="ti ti-package-export me-2"></i>Export</a>
											<div class="dropdown-menu  dropdown-menu-end">
												<ul>
													<li>
														<a href="javascript:void(0);" class="dropdown-item"><i
																class="ti ti-file-type-pdf text-danger me-1"></i>Export
															as PDF</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item"><i
																class="ti ti-file-type-xls text-green me-1"></i>Export
															as Excel </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="d-flex align-items-center flex-wrap row-gap-2">
										<div class="dropdown me-2">
											<a href="javascript:void(0);" class="btn bg-soft-purple text-purple"
												data-bs-toggle="dropdown" data-bs-auto-close="outside"><i
													class="ti ti-columns-3 me-2"></i>Manage Columns</a>
											<div class="dropdown-menu  dropdown-menu-md-end dropdown-md p-3">
												<h4 class="mb-2 fw-semibold">Want to manage datatables?</h4>
												<p class="mb-3">Please drag and drop your column to reorder your table
													and enable see option as you want.</p>
												<div class="border-top pt-3">
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Pipeline Name</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-name" class="check">
															<label for="col-name" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Deal Value</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-phone" class="check">
															<label for="col-phone" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>No of Deals</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-email" class="check">
															<label for="col-email" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Stages</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-tag" class="check">
															<label for="col-tag" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Created Dates</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-loc" class="check">
															<label for="col-loc" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Action</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-rate" class="check">
															<label for="col-rate" class="checktoggle"></label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-sorts dropdown me-2">
											<a href="javascript:void(0);" data-bs-toggle="dropdown"
												data-bs-auto-close="outside"><i
													class="ti ti-filter-share"></i>Filter</a>
											<div class="filter-dropdown-menu dropdown-menu dropdown-menu-md-end p-3">
												<div class="filter-set-view">
													<div class="filter-set-head">
														<h4><i class="ti ti-filter-share"></i>Filter</h4>
													</div>
													<div class="accordion" id="accordionExample">
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" data-bs-toggle="collapse"
																	data-bs-target="#collapseTwo" aria-expanded="true"
																	aria-controls="collapseTwo">Pipeline Name</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse show"
																id="collapseTwo" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<div class="mb-2 icon-form">
																		<span class="form-icon"><i
																				class="ti ti-search"></i></span>
																		<input type="text" class="form-control"
																			placeholder="Search Pipeline">
																	</div>
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					Sales
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Marketing
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Calls
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Email
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Chats
																				</label>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" class="collapsed" data-bs-toggle="collapse"
																	data-bs-target="#stage" aria-expanded="false"
																	aria-controls="stage">Stages</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse"
																id="stage" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<div class="mb-2 icon-form">
																		<span class="form-icon"><i
																				class="ti ti-search"></i></span>
																		<input type="text" class="form-control"
																			placeholder="Search Stages">
																	</div>
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					Win
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					In Pipeline
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Conversation
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Schedule Service
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Lost
																				</label>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>

														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" class="collapsed" data-bs-toggle="collapse"
																	data-bs-target="#Status" aria-expanded="false"
																	aria-controls="Status">Status</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse"
																id="Status" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					Active
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Inactive
																				</label>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" class="collapsed" data-bs-toggle="collapse"
																	data-bs-target="#collapseOne" aria-expanded="false"
																	aria-controls="collapseOne">Created Date</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse"
																id="collapseOne" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					17 Nov 2023
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					23 Nov 2023
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					14 Dec 2023
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					09 Dec 2023
																				</label>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="filter-reset-btns">
														<div class="row">
															<div class="col-6">
																<a href="#" class="btn btn-light">Reset</a>
															</div>
															<div class="col-6">
																<a href="pipeline"
																	class="btn btn-primary">Filter</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas"
											data-bs-target="#offcanvas_pipeline"><i
												class="ti ti-square-rounded-plus me-2"></i>Add Pipeline</a>
									</div>
								</div>
								<!-- /Filter -->

								<!-- Pipeline List -->
								<div class="table-responsive custom-table">
									<table class="table" id="pipeline-list">
										<thead class="thead-light">
											<tr>
												<th class="no-sort">
													<label class="checkboxs"><input type="checkbox"
															id="select-all"><span class="checkmarks"></span></label>
												</th>
												<th>Pipeline Name</th>
												<th>Total Deal Value</th>
												<th>No of Deals</th>
												<th>Stages</th>
												<th>Created Date</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

										</tbody>
									</table>
								</div>
								<div class="row align-items-center">
									<div class="col-md-6">
										<div class="datatable-length"></div>
									</div>
									<div class="col-md-6">
										<div class="datatable-paginate"></div>
									</div>
								</div>
								<!-- /Pipeline List -->
							</div>




						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
	<!-- /Page Wrapper -->

	<!-- Add New Pipeline -->
	<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_pipeline">
		<div class="offcanvas-header border-bottom">
			<h4>Add New Pipeline</h4>
			<button type="button"
				class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
				data-bs-dismiss="offcanvas" aria-label="Close">
				<i class="ti ti-x"></i>
			</button>
		</div>
		<div class="offcanvas-body">
			<form action="pipeline">
				<div>
					<div class="mb-3">
						<label class="col-form-label">Pipeline Name <span class="text-danger">*</span></label>
						<input class="form-control" type="text">
					</div>
					<div class="mb-3">
						<div class="pipe-title d-flex align-items-center justify-content-between">
							<h5 class="form-title">Pipeline Stages</h5>
							<a href="#" class="add-stage" data-bs-toggle="modal" data-bs-target="#add_stage"><i
									class="ti ti-square-rounded-plus"></i>Add New</a>
						</div>
						<div class="pipeline-listing">
							<div class="pipeline-item">
								<p><i class="ti ti-grip-vertical"></i> Inpipeline</p>
								<div class="action-pipeline">
									<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i
											class="ti ti-edit text-blue"></i>Edit</a>
									<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i
											class="ti ti-trash text-danger"></i>Delete</a>
								</div>
							</div>
							<div class="pipeline-item">
								<p><i class="ti ti-grip-vertical"></i> Follow Up</p>
								<div class="action-pipeline">
									<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i
											class="ti ti-edit text-blue"></i>Edit</a>
									<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i
											class="ti ti-trash text-danger"></i>Delete</a>
								</div>
							</div>
							<div class="pipeline-item">
								<p><i class="ti ti-grip-vertical"></i> Schedule Service</p>
								<div class="action-pipeline">
									<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i
											class="ti ti-edit text-blue"></i>Edit</a>
									<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i
											class="ti ti-trash text-danger"></i>Delete</a>
								</div>
							</div>
						</div>
					</div>
					<div class="mb-3">
						<h5 class="form-title">Access</h5>
						<div class="d-flex flex-wrap access-item nav">
							<div class="radio-btn" data-bs-toggle="tab" data-bs-target="#all">
								<input type="radio" class="status-radio" id="all" name="status" checked="">
								<label for="all">All</label>
							</div>
							<div class="radio-btn" data-bs-toggle="tab" data-bs-target="#select-person">
								<input type="radio" class="status-radio" id="select" name="status">
								<label for="select">Select Person</label>
							</div>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="select-person">
								<div class="access-wrapper">
									<div class="access-view">
										<div class="access-img">
											<?php echo $this->Html->image('profiles/avatar-21.jpg', [
												'alt' => 'Image'
											]); ?>Vaughan
										</div>
										<a href="#">Remove</a>
									</div>
									<div class="access-view">
										<div class="access-img">
											<?php echo $this->Html->image('profiles/avatar-01.jpg', [
												'alt' => 'Image'
											]); ?>
										</div>
										<a href="#">Remove</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex align-items-center justify-content-end">
					<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
					<button type="button" class="btn btn-primary" data-bs-toggle="modal"
						data-bs-target="delete_pipeline">Create</button>
				</div>
			</form>
		</div>

	</div>
	<!-- /Add New Pipeline -->

	<!-- Edit Pipeline -->
	<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
		<div class="offcanvas-header border-bottom">
			<h4>Edit Pipeline</h4>
			<button type="button"
				class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
				data-bs-dismiss="offcanvas" aria-label="Close">
				<i class="ti ti-x"></i>
			</button>
		</div>
		<div class="offcanvas-body">
			<form action="deals">
				<div>
					<div class="mb-3">
						<label class="col-form-label">Pipeline Name <span class="text-danger">*</span></label>
						<input class="form-control" type="text" value="Inpipeline">
					</div>
					<div class="mb-3">
						<div class="pipe-title d-flex align-items-center justify-content-between">
							<h5 class="form-title">Pipeline Stages</h5>
							<a href="#" class="add-stage" data-bs-toggle="modal" data-bs-target="#add_stage"><i
									class="ti ti-square-rounded-plus"></i>Add New</a>
						</div>
						<div class="pipeline-listing">
							<div class="pipeline-item">
								<p><i class="ti ti-grip-vertical"></i> Inpipeline</p>
								<div class="action-pipeline">
									<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i
											class="ti ti-edit text-blue"></i>Edit</a>
									<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i
											class="ti ti-trash text-danger"></i>Delete</a>
								</div>
							</div>
							<div class="pipeline-item">
								<p><i class="ti ti-grip-vertical"></i> Follow Up</p>
								<div class="action-pipeline">
									<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i
											class="ti ti-edit text-blue"></i>Edit</a>
									<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i
											class="ti ti-trash text-danger"></i>Delete</a>
								</div>
							</div>
							<div class="pipeline-item">
								<p><i class="ti ti-grip-vertical"></i> Schedule Service</p>
								<div class="action-pipeline">
									<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i
											class="ti ti-edit text-blue"></i>Edit</a>
									<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i
											class="ti ti-trash text-danger"></i>Delete</a>
								</div>
							</div>
						</div>
					</div>
					<div class="mb-3">
						<h5 class="form-title">Access</h5>
						<div class="d-flex flex-wrap access-item nav">
							<div class="radio-btn" data-bs-toggle="tab" data-bs-target="#all">
								<input type="radio" class="status-radio" id="all" name="status" checked="">
								<label for="all">All</label>
							</div>
							<div class="radio-btn" data-bs-toggle="tab" data-bs-target="#select-person">
								<input type="radio" class="status-radio" id="select" name="status">
								<label for="select">Select Person</label>
							</div>
						</div>
						<div class="tab-content mb-3">
							<div class="tab-pane fade" id="select-person">
								<div class="access-wrapper">
									<div class="access-view">
										<div class="access-img">
											<?php echo $this->Html->image('profiles/avatar-21.jpg', [
												'alt' => 'Image'
											]); ?>Vaughan
										</div>
										<a href="#">Remove</a>
									</div>
									<div class="access-view">
										<div class="access-img">
											<?php echo $this->Html->image('profiles/avatar-01.jpg', [
												'alt' => 'Image'
											]); ?>Jessica
										</div>
										<a href="#">Remove</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex align-items-center justify-content-end">
					<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
					<button type="button" class="btn btn-primary">Save Changes</button>
				</div>
			</form>
		</div>

	</div>
	<!-- /Edit Pipeline -->

	<!-- Delete Pipeline -->
	<div class="modal fade" id="delete_pipeline" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="text-center">
						<div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
							<i class="ti ti-trash-x fs-36 text-danger"></i>
						</div>
						<h4 class="mb-2">Remove Pipeline?</h4>
						<p class="mb-0">Are you sure you want to remove <br> pipeline you selected.</p>
						<div class="d-flex align-items-center justify-content-center mt-4">
							<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
							<a href="pipeline" class="btn btn-danger">Yes, Delete it</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete Stage -->

	<!-- Delete Stage -->
	<div class="modal fade" id="delete_stage" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="text-center">
						<div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
							<i class="ti ti-trash-x fs-36 text-danger"></i>
						</div>
						<h4 class="mb-2">Remove Stage?</h4>
						<p class="mb-0">Are you sure you want to remove <br> stage you selected.</p>
						<div class="d-flex align-items-center justify-content-center mt-4">
							<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
							<a href="pipeline" class="btn btn-danger">Yes, Delete it</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete Stage -->

	<!-- Add New View -->
	<div class="modal custom-modal fade" id="save_view" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Add New View</h5>
					<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x"></i>
					</button>
				</div>
				<div class="modal-body">
					<form action="deals">
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

	<!-- Add New Stage -->
	<div class="modal custom-modal fade" id="add_stage" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Add New Stage</h5>
					<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x"></i>
					</button>
				</div>
				<div class="modal-body">
					<form action="pipeline">
						<div class="mb-3">
							<label class="col-form-label">Stage Name *</label>
							<input type="text" class="form-control">
						</div>
						<div class="modal-btn text-end">
							<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
							<button type="submit" class="btn btn-danger">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add New Stage -->

	<!-- Edit Stage -->
	<div class="modal custom-modal fade" id="edit_stage" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Edit Stage</h5>
					<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x"></i>
					</button>
				</div>
				<div class="modal-body">
					<form action="pipeline">
						<div class="mb-3">
							<label class="col-form-label">Stage Name *</label>
							<input type="text" class="form-control" value="Inpipeline">
						</div>
						<div class="modal-btn text-end">
							<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
							<button type="submit" class="btn btn-danger">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Edit Stage -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->element('vendor-scripts') ?>

	<!-- Bootstrap Tagsinput JS -->
	<?php echo $this->Html->script('plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') ?>

	<!-- Summernote JS -->
	<?php echo $this->Html->script('plugins/summernote/summernote-lite.min.js') ?>

</body>

</html>