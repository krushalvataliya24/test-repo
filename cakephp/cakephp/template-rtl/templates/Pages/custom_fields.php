<!DOCTYPE html>
<html lang="en">

<head>

	<?= $this->element('title-meta') ?>
	<!-- Title -->
	<title>Custom Fields | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
<!-- Feathericon CSS -->
<?php echo $this->Html->css('feather.css') ?>
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
								<div class="col-8">
									<h4 class="page-title">Settings</h4>
								</div>
								<div class="col-4 text-end">
									<div class="head-icons">
										<a href="custom_fields" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
										<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Collapse" id="collapse-header"><i
												class="ti ti-chevrons-up"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

						<!-- Settings Menu -->
						<div class="card">
							<div class="card-body pb-0 pt-2">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item me-3">
										<a href="profile" class="nav-link px-0">
											<i class="ti ti-settings-cog me-2"></i>General Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="company_settings" class="nav-link px-0">
											<i class="ti ti-world-cog me-2"></i>Website Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="invoice_settings" class="nav-link px-0 active">
											<i class="ti ti-apps me-2"></i>App Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="email_settings" class="nav-link px-0">
											<i class="ti ti-device-laptop me-2"></i>System Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="payment_gateways" class="nav-link px-0">
											<i class="ti ti-moneybag me-2"></i>Financial Settings
										</a>
									</li>
									<li class="nav-item">
										<a href="storage" class="nav-link px-0">
											<i class="ti ti-flag-cog me-2"></i>Other Settings
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /Settings Menu -->

						<div class="row">
							<div class="col-xl-3 col-lg-12 theiaStickySidebar">

								<!-- Settings Sidebar -->
								<div class="card">
									<div class="card-body">
										<div class="settings-sidebar">
											<h4 class="fw-semibold mb-3">App Settings</h4>
											<div class="list-group list-group-flush settings-sidebar">
												<a href="invoice_settings" class="fw-medium">Invoice Settings</a>
												<a href="printers" class="fw-medium">Printer</a>
												<a href="custom_fields" class="fw-medium active">Custom Fields</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->

							</div>

							<div class="col-xl-9 col-lg-12">

								<!-- Custom Fields -->
								<div class="card">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between mb-3">
											<h4>Custom Fields</h4>
											<a href="javascript:void(0)"
												class="btn btn-icon btn-sm border btn-outline-light"
												data-bs-toggle="modal" data-bs-target="#add_fields"><i
													class="ti ti-plus"></i></a>
										</div>
										<form action="custom_fields">
											<!-- Expense -->
											<div
												class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
												<div>
													<h5 class="fw-semibold mb-1">Expense</h5>
													<p>Shows the fields of Expense</p>
												</div>
												<div class="dropdown">
													<a href="#"
														class="btn btn-icon btn-sm border btn-outline-light d-inline-flex align-items-center justify-content-center"
														data-bs-toggle="dropdown" aria-expanded="false"><i
															class="fa fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item d-flex align-items-center" href="#"
															data-bs-toggle="modal" data-bs-target="#edit_fields"><i
																class="fa-solid fa-pencil text-blue me-2"></i>Edit</a>
														<a class="dropdown-item d-flex align-items-center" href="#"
															data-bs-toggle="modal" data-bs-target="#delete_fields"><i
																class="fa-regular fa-trash-can text-danger me-2"></i>Delete</a>
													</div>
												</div>
											</div>
											<div class="border-bottom mb-3">
												<div class="row">
													<div class="col-md-4 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">Label</label>
															<input type="text" class="form-control" value="Name">
														</div>
													</div>
													<div class="col-md-4 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">Type</label>
															<input type="text" class="form-control" value="Text">
														</div>
													</div>
													<div class="col-md-4 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">Default Value</label>
															<input type="text" class="form-control" value="Name">
														</div>
													</div>
													<div class="col-md-4 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">Required</label>
															<input type="text" class="form-control" value="Required">
														</div>
													</div>
													<div class="col-md-4 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">Status</label>
															<input type="text" class="form-control" value="Active">
														</div>
													</div>
												</div>
											</div>
											<!-- /Expense -->

											<!-- Transaction -->
											<div
												class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
												<div>
													<h5 class="fw-semibold mb-1">Transaction</h5>
													<p>Shows the fields of Transaction</p>
												</div>
												<div class="dropdown">
													<a href="#"
														class="btn btn-icon btn-sm border btn-outline-light d-inline-flex align-items-center justify-content-center"
														data-bs-toggle="dropdown" aria-expanded="false"><i
															class="fa fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item d-flex align-items-center" href="#"
															data-bs-toggle="modal" data-bs-target="#edit_fields"><i
																class="fa-solid fa-pencil text-blue me-2"></i>Edit</a>
														<a class="dropdown-item d-flex align-items-center" href="#"
															data-bs-toggle="modal" data-bs-target="#delete_fields"><i
																class="fa-regular fa-trash-can text-danger me-2"></i>Delete</a>
													</div>
												</div>
											</div>
											<div class="mb-0">
												<div class="row">
													<div class="col-md-4 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">Label</label>
															<input type="text" class="form-control" value="Comment">
														</div>
													</div>
													<div class="col-md-4 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">Type</label>
															<input type="text" class="form-control" value="Textarea">
														</div>
													</div>
													<div class="col-md-4 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">Default Value</label>
															<input type="text" class="form-control"
																value="Enter Comments">
														</div>
													</div>
													<div class="col-md-4 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">Required</label>
															<input type="text" class="form-control" value="Required">
														</div>
													</div>
													<div class="col-md-4 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">Status</label>
															<input type="text" class="form-control" value="Active">
														</div>
													</div>
												</div>
											</div>
											<!-- /Transaction -->

											<div>
												<a href="#" class="btn btn-light me-2">Cancel</a>
												<button type="submit" class="btn btn-primary">Save Changes</button>
											</div>
										</form>
									</div>
								</div>
								<!-- /Custom Fields -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Custom Fields -->
		<div class="modal fade" id="add_fields" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Custom Fields</h5>
						<button class="btn-close custom-btn-close border p-1 me-0 text-dark" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="custom_fields">
						<div class="modal-body">
							<div class="mb-3">
								<label class="col-form-label">Custom Fields For <span
										class="text-danger">*</span></label>
								<select class="select">
									<option>Choose</option>
									<option>Expense</option>
									<option>Transaction</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="col-form-label">Label <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Type <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Default Value</label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Required <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-0">
								<label class="col-form-label">Status <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="modal-footer">
							<div class="d-flex align-items-center">
								<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Custom Fields -->

		<!-- Edit Custom Fields -->
		<div class="modal fade" id="edit_fields" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Custom Fields</h5>
						<button class="btn-close custom-btn-close border p-1 me-0 text-dark" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="custom_fields">
						<div class="modal-body">
							<div class="mb-3">
								<label class="col-form-label">Custom Fields For <span
										class="text-danger">*</span></label>
								<select class="select">
									<option>Choose</option>
									<option selected>Expense</option>
									<option>Transaction</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="col-form-label">Label <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Name">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Type <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Text">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Default Value</label>
								<input type="text" class="form-control" value="Name">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Required <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Required">
							</div>
							<div class="mb-0">
								<label class="col-form-label">Status <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Active">
							</div>
						</div>
						<div class="modal-footer">
							<div class="d-flex align-items-center">
								<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Custom Fields -->

		<!-- Delete Fields -->
		<div class="modal fade" id="delete_fields" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<form action="custom_fields">
							<div class="text-center">
								<div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
									<i class="ti ti-trash-x fs-36 text-danger"></i>
								</div>
								<h4 class="mb-2">Remove Field?</h4>
								<p class="mb-0">Are you sure you want to remove it.</p>
								<div class="d-flex align-items-center justify-content-center mt-4">
									<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
									<button type="submit" class="btn btn-danger">Yes, Delete it</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Fields -->


        </div>
	<!-- /Main Wrapper -->

	<?= $this->element('vendor-scripts') ?>

	<!-- Sticky Sidebar JS -->
	<?php echo $this->Html->script('plugins/theia-sticky-sidebar/ResizeSensor.js')?>
	<?php echo $this->Html->script('plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')?>

</body>

</html>