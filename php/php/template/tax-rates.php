<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Tax Rates | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	<?php include 'layouts/title-meta.php'; ?>
	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feather.css">
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
								<div class="col-8">
									<h4 class="page-title">Settings</h4>
								</div>
								<div class="col-4 text-end">
									<div class="head-icons">
										<a href="tax-rates.php" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
										<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
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
										<a href="profile.php" class="nav-link px-0">
											<i class="ti ti-settings-cog me-2"></i>General Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="company-settings.php" class="nav-link px-0">
											<i class="ti ti-world-cog me-2"></i>Website Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="invoice-settings.php" class="nav-link px-0">
											<i class="ti ti-apps me-2"></i>App Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="email-settings.php" class="nav-link px-0">
											<i class="ti ti-device-laptop me-2"></i>System Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="payment-gateways.php" class="nav-link px-0 active">
											<i class="ti ti-moneybag me-2"></i>Financial Settings
										</a>
									</li>
									<li class="nav-item">
										<a href="storage.php" class="nav-link px-0">
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
												<a href="payment-gateways.php" class="fw-medium">Payment Gateways</a>
												<a href="bank-accounts.php" class="fw-medium">Bank Accounts</a>
												<a href="tax-rates.php" class="fw-medium active">Tax Rates</a>
												<a href="currencies.php" class="fw-medium">Currencies</a>
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
											<h4 class="fs-20">Tax Rates</h4>
											<a href="javascript:void(0)" class="btn btn-sm btn-icon border rounded" data-bs-toggle="modal" data-bs-target="#add_tax"><i class="ti ti-plus"></i></a>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="mb-3">
													<label class="col-form-label">VAT</label>
													<div class="icon-form-end">
														<a href="#" data-bs-toggle="modal" data-bs-target="#edit_tax">
															<span class="form-icon"><i class="ti ti-edit"></i></span>
														</a>
														<input type="text" class="form-control" value="16%">
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="mb-3">
													<label class="col-form-label">GST</label>
													<div class="icon-form-end">
														<a href="#" data-bs-toggle="modal" data-bs-target="#edit_tax">
															<span class="form-icon"><i class="ti ti-edit"></i></span>
														</a>
														<input type="text" class="form-control" value="14%">
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="mb-3">
													<label class="col-form-label">HST</label>
													<div class="icon-form-end">
														<a href="#" data-bs-toggle="modal" data-bs-target="#edit_tax">
															<span class="form-icon"><i class="ti ti-edit"></i></span>
														</a>
														<input type="text" class="form-control" value="12%">
													</div>
												</div>
											</div>
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

		<!-- Add Tax Rate -->
		<div class="modal fade" id="add_tax" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Tax Rate</h5>
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
					<form action="tax-rates.php">
						<div class="modal-body">
							<div class="mb-3">
								<label class="col-form-label">Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-0">
								<label class="col-form-label">Tax Rate % <span class="text-danger">*</span></label>
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
		<!-- /Add Tax Rate -->

		<!-- Edit Tax Rate -->
		<div class="modal fade" id="edit_tax" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Tax Rate</h5>
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
					<form action="tax-rates.php">
						<div class="modal-body">
							<div class="mb-3">
								<label class="col-form-label">Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="VAT">
							</div>
							<div class="mb-0">
								<label class="col-form-label">Tax Rate % <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="16">
							</div>
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Tax Rate -->


	</div>
	<!-- /Main Wrapper -->

	<!-- JAVASCRIPT -->
	<?php include 'layouts/vendor-scripts.php'; ?>

	<!-- Profile Upload JS -->
	<script src="assets/js/profile-upload.js"></script>
	<!-- Sticky Sidebar JS -->
	<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
</body>

</html>