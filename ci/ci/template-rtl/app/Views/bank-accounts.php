<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Title -->
	<title>Bank Accounts | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	
<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

<?= $this->include('partials/menu') ?>

<!-- Page Wrapper -->
<div class="page-wrapper">
			<div class="content">
				<div class="row">
					<div class="col-md-12">

					<?= $this->include('partials/page-title') ?>

						<!-- Settings Menu -->
						<div class="card">
							<div class="card-body pb-0 pt-2">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item me-3">
										<a href="<?php echo base_url();?>profile" class="nav-link px-0">
											<i class="ti ti-settings-cog me-2"></i>General Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="<?php echo base_url();?>company-settings" class="nav-link px-0">
											<i class="ti ti-world-cog me-2"></i>Website Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="<?php echo base_url();?>invoice-settings" class="nav-link px-0">
											<i class="ti ti-apps me-2"></i>App Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="<?php echo base_url();?>email-settings" class="nav-link px-0">
											<i class="ti ti-device-laptop me-2"></i>System Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="<?php echo base_url();?>payment-gateways" class="nav-link px-0 active">
											<i class="ti ti-moneybag me-2"></i>Financial Settings
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo base_url();?>storage" class="nav-link px-0">
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
												<a href="<?php echo base_url();?>payment-gateways" class="fw-medium">Payment Gateways</a>
												<a href="<?php echo base_url();?>bank-accounts" class="fw-medium active">Bank Accounts</a>
												<a href="<?php echo base_url();?>tax-rates" class="fw-medium">Tax Rates</a>
												<a href="<?php echo base_url();?>currencies" class="fw-medium">Currencies</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->

							</div>

							<div class="col-xl-9 col-lg-12">

								<!-- Settings Info -->
								<div class="card">
									<div class="card-body pb-0">
										<div class="d-flex align-items-center justify-content-between mb-4">
											<h4 class="fs-20">Bank Accounts</h4>
											<a href="javascript:void(0)" class="btn btn-sm btn-icon rounded border" data-bs-toggle="modal" data-bs-target="#add_bank" ><i class="ti ti-plus"></i></a>
										</div>
										<div class="row">

											<!-- Bank Account -->
											<div class="col-xxl-4 col-sm-6">
												<div class="bank-box active">
													<div class="mb-4">
														<h5 class="fw-semibold mb-1">HDFC</h5>
														<p class="fw-medium">**** **** 4872</p>
													</div>
													<div class="d-flex align-items-center justify-content-between">
														<div>
															<h6 class="fw-medium mb-1">Holder Name</h6>
															<p class="fs-12">Darlee Robertson</p>
														</div>
														<div class="dropdown table-action">
															<a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_bank"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
																<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_bank"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
															</div>
														</div>
													</div>
												</div>
											</div>	
											<!-- /Bank Account -->

											<!-- Bank Account -->
											<div class="col-xxl-4 col-sm-6">
												<div class="bank-box">
													<div class="mb-4">
														<h5 class="fw-semibold mb-1">SBI</h5>
														<p class="fw-medium">**** **** 2495</p>
													</div>
													<div class="d-flex align-items-center justify-content-between">
														<div>
															<h6 class="fw-medium mb-1">Holder Name</h6>
															<p class="fs-12">Sharon Roy</p>
														</div>
														<div class="dropdown table-action">
															<a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_bank"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
																<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_bank"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
															</div>
														</div>
													</div>
												</div>
											</div>	
											<!-- /Bank Account -->

											<!-- Bank Account -->
											<div class="col-xxl-4 col-sm-6">
												<div class="bank-box">
													<div class="mb-4">
														<h5 class="fw-semibold mb-1">KVB</h5>
														<p class="fw-medium">**** **** 3948</p>
													</div>
													<div class="d-flex align-items-center justify-content-between">
														<div>
															<h6 class="fw-medium mb-1">Holder Name</h6>
															<p class="fs-12">Vaughan</p>
														</div>
														<div class="dropdown table-action">
															<a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_bank"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
																<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_bank"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
															</div>
														</div>
													</div>
												</div>
											</div>	
											<!-- /Bank Account -->

										</div>
									</div>
								</div>
								<!-- /Settings Info -->

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Bank Account -->
		<div class="modal fade" id="add_bank" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Bank Account</h5>
						<div class="d-flex align-items-center">
							<div class="status-toggle me-2">
								<input type="checkbox" id="toggle" class="check" checked="">
								<label for="toggle" class="checktoggle"></label>
							</div>
							<button class="btn-close custom-btn-close border p-1 me-0 text-dark" data-bs-dismiss="modal" aria-label="Close">	
								<i class="ti ti-x"></i>
							</button>
						</div>
					</div>
					<form action="<?php echo base_url();?>bank-accounts">
						<div class="modal-body">
							<div class="mb-3">
								<label class="col-form-label">Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Bank <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Branch <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Account Number <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-0">
								<label class="col-form-label">IFSC Code <span class="text-danger">*</span></label>
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
		<!-- /Add Bank Account -->

		<!-- Edit Bank Account -->
		<div class="modal fade" id="edit_bank" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Bank Account</h5>
						<div class="d-flex align-items-center">
							<div class="status-toggle me-2">
								<input type="checkbox" id="toggle1" class="check" checked="">
								<label for="toggle1" class="checktoggle"></label>
							</div>
							<button class="btn-close custom-btn-close border p-1 me-0 text-dark" data-bs-dismiss="modal" aria-label="Close">	
								<i class="ti ti-x"></i>
							</button>
						</div>
					</div>
					<form action="<?php echo base_url();?>bank-accounts">
						<div class="modal-body">
							<div class="mb-3">
								<label class="col-form-label">Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Darlee Robertson">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Bank <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="HDFC">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Branch <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Bringham">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Account Number <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="**** **** 4872">
							</div>
							<div class="mb-0">
								<label class="col-form-label">IFSC Code <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="198367">
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
		<!-- /Edit Bank Account -->

		<!-- Delete Contact -->
		<div class="modal fade" id="delete_bank" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center">
							<div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
								<i class="ti ti-trash-x fs-36 text-danger"></i>
							</div>
							<h4 class="mb-2">Remove Bank</h4>
							<p class="mb-0">Are you sure you want to remove <br> bank you selected.</p>
							<div class="d-flex align-items-center justify-content-center mt-4">
								<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url();?>bank-accounts" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Contact -->


</div>
<!-- /Main Wrapper -->


<?= $this->include('partials/vendor-scripts') ?>
<!-- Profile Upload JS -->
<script src="<?php echo base_url();?>assets/js/profile-upload.js"></script>
<!-- Sticky Sidebar JS -->
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

</body>
</html>