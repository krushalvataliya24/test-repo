<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Tasks Important | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	<?php include 'layouts/title-meta.php'; ?>

	<!-- Summernote CSS -->
	<link rel="stylesheet" href="assets/plugins/summernote/summernote-lite.min.css">

	<!-- Bootstrap Tagsinput CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

	<?php include 'layouts/head-css.php'; ?>
</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<?php include 'layouts/menu.php'; ?>

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<div class="row">
					<div class="col-md-12">

						<!-- Page Header -->
						<div class="page-header">
							<div class="row align-items-center">
								<div class="col-4">
									<h4 class="page-title">Tasks<span class="count-title">123</span></h4>
								</div>
								<div class="col-8 text-end">
									<div class="head-icons">
										<a href="tasks-important.php" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh">
											<i class="ti ti-refresh-dot"></i>
										</a>
										<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
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
										<div class="icon-form mb-sm-0">
											<span class="form-icon"><i class="ti ti-search"></i></span>
											<input type="text" class="form-control" placeholder="Search Task">
										</div>
									</div>
									<div class="col-sm-8">
										<div class="d-flex align-items-center flex-wrap row-gap-2 justify-content-sm-end mb-3 mb-sm-0">
											<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add"><i class="ti ti-square-rounded-plus me-2"></i>Add New Tasks</a>
										</div>
									</div>
								</div>
								<!-- /Search -->
							</div>
							<div class="card-body">
								<!-- Filter -->
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-4">
									<div class="sort-dropdown drop-down task-drops">
										<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown">Important</a>
										<div class="dropdown-menu  dropdown-menu-start">
											<ul>
												<li>
													<a href="tasks.php">
														<i class="ti ti-dots-vertical"></i>All Tasks
													</a>
												</li>
												<li>
													<a href="tasks-important.php">
														<i class="ti ti-dots-vertical"></i>Important
													</a>
												</li>
												<li>
													<a href="tasks-completed.php">
														<i class="ti ti-dots-vertical"></i>Completed
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="d-flex align-items-center flex-wrap row-gap-2">
										<div class="all-read me-2 ">
											<label class="checkboxs">
												<input type="checkbox" checked>
												<span class="checkmarks"></span>
												Mark all as read
											</label>
										</div>
										<div class="dropdown me-2">
											<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="ti ti-sort-ascending-2 me-2"></i>Sort </a>
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
															<i class="ti ti-circle-chevron-right me-1"></i>Recently Viewed
														</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">
															<i class="ti ti-circle-chevron-right me-1"></i>Recently Added
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="icon-form me-2">
											<span class="form-icon"><i class="ti ti-calendar"></i></span>
											<input type="text" class="form-control bookingrange" placeholder="">
										</div>
										<div class="form-sorts dropdown">
											<a href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"><i class="ti ti-filter-share"></i>Filter</a>
											<div class="filter-dropdown-menu dropdown-menu  dropdown-menu-md-end p-3">
												<div class="filter-set-view">
													<div class="filter-set-head">
														<h4><i class="ti ti-filter-share"></i>Filter</h4>
													</div>
													<div class="accordion" id="accordionExample">
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Task Name</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<div class="mb-2 icon-form">
																		<span class="form-icon"><i class="ti ti-search"></i></span>
																		<input type="text" class="form-control" placeholder="Search Task">
																	</div>
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					Add a form to Update Task
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Add a form to Update Task
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Update orginal content
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Use only component colours
																				</label>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#owner" aria-expanded="false" aria-controls="owner">Task Type</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse" id="owner" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<div class="mb-2 icon-form">
																		<span class="form-icon"><i class="ti ti-search"></i></span>
																		<input type="text" class="form-control" placeholder="Search Client">
																	</div>
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					Meeting
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
																					Task
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
																	</ul>
																</div>
															</div>
														</div>
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" class="collapsed" data-bs-toggle="collapse"
																	data-bs-target="#collapseone" aria-expanded="false"
																	aria-controls="collapseone">Tags</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse"
																id="collapseone" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					Collab
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Rated
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Promotion
																				</label>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Created By</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					Hendry
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Monty Beer
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Bradtke
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
																	data-bs-target="#collapsethree" aria-expanded="false"
																	aria-controls="collapsethree">Created Date</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse"
																id="collapsethree" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					23 Oct 2023
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					29 Sep 2023
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					24 Oct 2023
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					25 Oct 2023
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
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
																<a href="tasks-important.php" class="btn btn-primary">Filter</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Filter -->
								<!-- Recent Task List -->
								<div class="task-wrapper">
									<a href="#" class="task-accordion" data-bs-toggle="collapse" data-bs-target="#recent">
										<h4>Recent<span>24</span></h4>
									</a>
									<div class="tasks-activity tasks collapse show" id="recent">
										<ul>
											<li class="task-wrap pending">
												<div class="task-info">
													<span class="task-icon"><i class="ti ti-grip-vertical"></i></span>
													<div class="task-checkbox">
														<label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
													</div>
													<div class="set-star rating-select filled">
														<i class="fa fa-star"></i>
													</div>
													<p>Add a form to Update Task</p>
													<span class="badge badge-pill badge-status bg-green"><i class="ti ti-phone"></i>Calls</span>
													<span class="badge badge-tag bg-pending">Pending</span>
												</div>
												<div class="task-actions">
													<ul>
														<li class="task-time">
															<span class="badge badge-tag badge-purple-light">Promotion</span>
														</li>
														<li class="task-date">
															<i class="ti ti-calendar-exclamation"></i>25 Oct 2023
														</li>
														<li class="task-owner">
															<div class="task-user">
																<img src="assets/img/profiles/avatar-14.jpg" alt="img">
															</div>
															<div class="dropdown table-action">
																<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
																	<i class="fa fa-ellipsis-v"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
																	<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_activity"><i class="ti ti-trash text-danger"></i> Delete</a>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li class="task-wrap  warning">
												<div class="task-info">
													<span class="task-icon"><i class="ti ti-grip-vertical"></i></span>
													<div class="task-checkbox">
														<label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
													</div>
													<div class="set-star rating-select filled">
														<i class="fa fa-star"></i>
													</div>
													<p>Update orginal content</p>
													<span class="badge badge-pill badge-status bg-green"><i class="ti ti-phone"></i>Calls</span>
													<span class="badge badge-tag bg-warning">Inprogress</span>
												</div>
												<div class="task-actions">
													<ul>
														<li class="task-time">
															<span class="badge badge-tag badge-success-light">Collab</span>
															<span class="badge badge-tag badge-warning-light">Rated</span>
														</li>
														<li class="task-date">
															<i class="ti ti-calendar-exclamation"></i>25 Oct 2023
														</li>
														<li class="task-owner">
															<div class="task-user">
																<img src="assets/img/profiles/avatar-14.jpg" alt="img">
															</div>
															<div class="dropdown table-action">
																<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
																	<i class="fa fa-ellipsis-v"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
																	<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_activity"><i class="ti ti-trash text-danger"></i> Delete</a>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Recent Task List -->

							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add New Task -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
			<div class="offcanvas-header border-bottom">
				<h4>Add New Task</h4>
				<button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="tasks.php">
					<div>
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Title <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>
								<div class="mb-3">
									<label class="col-form-label">Category</label>
									<select class="select">
										<option>Choose</option>
										<option>Calls</option>
										<option>Email</option>
										<option>Email</option>
										<option>Meeting</option>
									</select>
								</div>
								<div class="mb-3">
									<label class="col-form-label">Responsible Persons <span class="text-danger">*</span></label>
									<select class="multiple-img" multiple="multiple">
										<option data-image="assets/img/profiles/avatar-19.jpg" selected>Darlee Robertson</option>
										<option data-image="assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
										<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
										<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
										<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
								<div class="mb-3 icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker">
								</div>
							</div>
							<div class="col-md-6">
								<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
								<div class="mb-3 icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker">
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Tags <span class="text-danger">*</span></label>
									<input class="input-tags form-control" type="text" data-role="tagsinput" name="Label" value="Promotion, Collab">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Priority</label>
									<div class="select-priority">
										<span class="select-icon"><i class="ti ti-square-rounded-filled"></i></span>
										<select class="select">
											<option>Select</option>
											<option>High</option>
											<option>Low</option>
											<option>Medium</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Status</label>
									<select class="select">
										<option selected>Active</option>
										<option>Inactive</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Description <span class="text-danger">*</span></label>
									<div class="summernote"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
						<button type="button" class="btn btn-primary">Create</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Add New Task -->

		<!-- Edit Task -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
			<div class="offcanvas-header border-bottom">
				<h4>Edit Task</h4>
				<button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="tasks.php">
					<div>
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Title <span class="text-danger">*</span></label>
									<input type="text" class="form-control" value="Add a form to Update Task">
								</div>
								<div class="mb-3">
									<label class="col-form-label">Category</label>
									<select class="select">
										<option>Choose</option>
										<option>Calls</option>
										<option>Email</option>
										<option>Email</option>
										<option>Meeting</option>
									</select>
								</div>
								<div class="mb-3">
									<label class="col-form-label">Responsible Persons <span class="text-danger">*</span></label>
									<select class="multiple-img" multiple="multiple">
										<option data-image="assets/img/profiles/avatar-19.jpg" selected>Darlee Robertson</option>
										<option data-image="assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
										<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
										<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
										<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
								<div class="mb-3 icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker">
								</div>
							</div>
							<div class="col-md-6">
								<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
								<div class="mb-3 icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker">
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Tags <span class="text-danger">*</span></label>
									<input class="input-tags form-control" type="text" data-role="tagsinput" name="Label" value="Promotion, Collab">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Priority</label>
									<div class="select-priority">
										<span class="select-icon"><i class="ti ti-square-rounded-filled"></i></span>
										<select class="select">
											<option>Select</option>
											<option>High</option>
											<option>Low</option>
											<option>Medium</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Status</label>
									<select class="select">
										<option selected>Active</option>
										<option>Inactive</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Description <span class="text-danger">*</span></label>
									<div class="summernote"></div>
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
		<!-- /Edit Task -->

		<!-- Delete Task -->
		<div class="modal fade" id="delete_activity" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center">
							<div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
								<i class="ti ti-trash-x fs-36 text-danger"></i>
							</div>
							<h4 class="mb-2">Remove Task?</h4>
							<p class="mb-0">Are you sure you want to remove <br> task you selected.</p>
							<div class="d-flex align-items-center justify-content-center mt-4">
								<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="tasks.php" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Task -->

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
						<form action="campaign.php">
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

	</div>
	<!-- /Main Wrapper -->
	<!-- JAVASCRIPT -->
	<?php include 'layouts/vendor-scripts.php'; ?>

	<!-- Bootstrap Tagsinput JS -->
	<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

	<!-- Summernote JS -->
	<script src="assets/plugins/summernote/summernote-lite.min.js"></script>

</body>

</html>