<!DOCTYPE html>
<html lang="en">

<head>

	<?= $this->element('title-meta') ?>
	<!-- Title -->
	<title>Currencies | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
<!-- Feathericon CSS -->
<?php echo $this->Html->css('feather.css') ?>
<!-- Summernote CSS -->
<?php echo $this->Html->css('plugins/summernote/summernote-lite.min.css') ?>

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
										<a href="currencies" data-bs-toggle="tooltip" data-bs-placement="top"
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
										<a href="invoice_settings" class="nav-link px-0">
											<i class="ti ti-apps me-2"></i>App Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="email_settings" class="nav-link px-0">
											<i class="ti ti-device-laptop me-2"></i>System Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="payment_gateways" class="nav-link px-0 active">
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
											<h4 class="fw-semibold mb-3">Financial Settings</h4>
											<div class="list-group list-group-flush settings-sidebar">
												<a href="payment_gateways" class="fw-medium">Payment Gateways</a>
												<a href="bank_accounts" class="fw-medium">Bank Accounts</a>
												<a href="tax_rates" class="fw-medium">Tax Rates</a>
												<a href="currencies" class="fw-medium active">Currencies</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->

							</div>

							<div class="col-xl-9 col-lg-12">

								<!-- Currencies -->
								<div class="card">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between mb-4">
											<h4>Currencies</h4>
											<a href="javascript:void(0)" class="btn btn-sm btn-icon border rounded"
												data-bs-toggle="modal" data-bs-target="#add_currency"><i
													class="ti ti-plus"></i></a>
										</div>

										<form action="currencies">
											<!-- Euro -->
											<div
												class="d-flex align-items-center justify-content-between flex-wrap border-bottom mb-3 pb-3 row-gap-2">
												<div>
													<h5 class="mb-1 fw-semibold">Euro</h5>
													<p>Shows the details of Euro currency</p>
												</div>
												<div class="dropdown table-action">
													<a href="#" class="action-icon bg-white" data-bs-toggle="dropdown"
														aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal"
															data-bs-target="#edit_currency"><i
																class="fa-solid fa-pencil text-blue"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal"
															data-bs-target="#delete_currency"><i
																class="fa-regular fa-trash-can text-danger"></i>
															Delete</a>
													</div>
												</div>
											</div>
											<div class="border-bottom mb-3">
												<div class="row">
													<div class="col-md-3 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">
																Currency Name
															</label>
															<input type="text" class="form-control" value="Euro">
														</div>
													</div>
													<div class="col-md-3 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">
																Code
															</label>
															<input type="text" class="form-control" value="EUR">
														</div>
													</div>
													<div class="col-md-3 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">
																Symbol
															</label>
															<input type="text" class="form-control" value="€">
														</div>
													</div>
													<div class="col-md-3 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">
																Exchange Rate
															</label>
															<input type="text" class="form-control" value="Default">
														</div>
													</div>
												</div>
											</div>
											<!-- /Euro -->

											<!-- England Pound -->
											<div
												class="d-flex align-items-center justify-content-between flex-wrap mb-3 pb-3 border-bottom row-gap-2">
												<div>
													<h5 class="fw-semibold mb-1">England Pound</h5>
													<p>Shows the details of England Pound currency</p>
												</div>
												<div class="dropdown table-action">
													<a href="#" class="action-icon bg-white" data-bs-toggle="dropdown"
														aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal"
															data-bs-target="#edit_currency"><i
																class="fa-solid fa-pencil text-blue"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal"
															data-bs-target="#delete_currency"><i
																class="fa-regular fa-trash-can text-danger"></i>
															Delete</a>
													</div>
												</div>
											</div>
											<div class="mb-3 border-bottom">
												<div class="row">
													<div class="col-md-3 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">
																Currency Name
															</label>
															<input type="text" class="form-control"
																value="England Pound">
														</div>
													</div>
													<div class="col-md-3 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">
																Code
															</label>
															<input type="text" class="form-control" value="GBP">
														</div>
													</div>
													<div class="col-md-3 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">
																Symbol
															</label>
															<input type="text" class="form-control" value="€">
														</div>
													</div>
													<div class="col-md-3 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">
																Exchange Rate
															</label>
															<input type="text" class="form-control" value="Default">
														</div>
													</div>
												</div>
											</div>
											<!-- /England Pound -->

											<!-- Indian Rupee -->
											<div
												class="d-flex align-items-center justify-content-between flex-wrap mb-3 pb-3 border-bottom row-gap-2">
												<div>
													<h5 class="fw-semibold mb-1">Indian Rupee</h5>
													<p>Shows the details of Indian Rupee currency</p>
												</div>
												<div class="dropdown table-action">
													<a href="#" class="action-icon bg-white" data-bs-toggle="dropdown"
														aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal"
															data-bs-target="#edit_currency"><i
																class="fa-solid fa-pencil text-blue"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal"
															data-bs-target="#delete_currency"><i
																class="fa-regular fa-trash-can text-danger"></i>
															Delete</a>
													</div>
												</div>
											</div>
											<div class="border-bottom mb-3">
												<div class="row">
													<div class="col-md-3 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">
																Currency Name
															</label>
															<input type="text" class="form-control"
																value="Indian Rupee">
														</div>
													</div>
													<div class="col-md-3 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">
																Code
															</label>
															<input type="text" class="form-control" value="INR">
														</div>
													</div>
													<div class="col-md-3 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">
																Symbol
															</label>
															<input type="text" class="form-control" value="₹">
														</div>
													</div>
													<div class="col-md-3 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">
																Exchange Rate
															</label>
															<input type="text" class="form-control" value="83.11">
														</div>
													</div>
												</div>
											</div>
											<!-- /Indian Rupee -->

											<!-- US Dollar -->
											<div
												class="d-flex align-items-center justify-content-between flex-wrap mb-3 pb-3 border-bottom row-gap-2">
												<div>
													<h5 class="fw-semibold mb-1">US Dollar</h5>
													<p>Shows the details of US Dollar currency</p>
												</div>
												<div class="dropdown table-action">
													<a href="#" class="action-icon bg-white" data-bs-toggle="dropdown"
														aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal"
															data-bs-target="#edit_currency"><i
																class="fa-solid fa-pencil text-blue"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal"
															data-bs-target="#delete_currency"><i
																class="fa-regular fa-trash-can text-danger"></i>
															Delete</a>
													</div>
												</div>
											</div>
											<div>
												<div class="row">
													<div class="col-md-3 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">
																Currency Name
															</label>
															<input type="text" class="form-control" value="US Dollar">
														</div>
													</div>
													<div class="col-md-3 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">
																Code
															</label>
															<input type="text" class="form-control" value="USD">
														</div>
													</div>
													<div class="col-md-3 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">
																Symbol
															</label>
															<input type="text" class="form-control" value="$">
														</div>
													</div>
													<div class="col-md-3 col-sm-6">
														<div class="mb-3">
															<label class="col-form-label">
																Exchange Rate
															</label>
															<input type="text" class="form-control" value="Default">
														</div>
													</div>
												</div>
											</div>
											<!-- /US Dollar -->

											<div class="d-flex align-items-center">
												<a href="#" class="btn btn-light me-2">Cancel</a>
												<button type="submit" class="btn btn-primary">Save Changes</button>
											</div>

										</form>

									</div>
								</div>
								<!-- /Currencies -->

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Currency -->
		<div class="modal fade" id="add_currency" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Currency</h5>
						<div class="d-flex align-items-center">
							<div class="status-toggle me-2">
								<input type="checkbox" id="toggle" class="check" checked="">
								<label for="toggle" class="checktoggle"></label>
							</div>
							<button class="btn-close custom-btn-close border p-1 me-0 text-dark" data-bs-dismiss="modal"
								aria-label="Close">
								<i class="ti ti-x"></i>
							</button>
						</div>
					</div>
					<form action="currencies">
						<div class="modal-body">
							<div class="mb-3">
								<label class="col-form-label">Currency Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Code <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Symbol <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-0">
								<label class="col-form-label">Exchange Rate <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="modal-footer">
							<div class="d-flex align-items-center justify-content-end m-0">
								<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Currency -->

		<!-- Edit Currency -->
		<div class="modal fade" id="edit_currency" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Currency</h5>
						<div class="d-flex align-items-center">
							<div class="status-toggle me-2">
								<input type="checkbox" id="toggle1" class="check" checked="">
								<label for="toggle1" class="checktoggle"></label>
							</div>
							<button class="btn-close custom-btn-close border p-1 me-0 text-dark" data-bs-dismiss="modal"
								aria-label="Close">
								<i class="ti ti-x"></i>
							</button>
						</div>
					</div>
					<form action="currencies">
						<div class="modal-body">
							<div class="mb-3">
								<label class="col-form-label">Currency Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Euro">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Code <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="EUR">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Symbol <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="€">
							</div>
							<div class="mb-0">
								<label class="col-form-label">Exchange Rate <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Default">
							</div>
						</div>
						<div class="modal-footer">
							<div class="d-flex align-items-center justify-content-end m-0">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Currency -->

		<!-- Delete Account -->
		<div class="modal custom-modal fade" id="delete_currency" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center">
							<div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
								<i class="ti ti-trash-x fs-36 text-danger"></i>
							</div>
							<h4 class="mb-2">Remove Currency?</h4>
							<p class="mb-0">Are you sure you want to remove it.</p>
							<div class="d-flex align-items-center justify-content-center mt-4">
								<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="bank_accounts" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Account -->


        
        </div>
	<!-- /Main Wrapper -->

	<?= $this->element('vendor-scripts') ?>
     <!-- Profile Upload JS -->
	<?php echo $this->Html->script('profile-upload.js')?>


	<!-- Sticky Sidebar JS -->
	<?php echo $this->Html->script('plugins/theia-sticky-sidebar/ResizeSensor.js')?>
	<?php echo $this->Html->script('plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')?>

</body>

</html>