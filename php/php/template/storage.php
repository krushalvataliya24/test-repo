<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Storage | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
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
										<a href="storage.php" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
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
										<a href="payment-gateways.php" class="nav-link px-0">
											<i class="ti ti-moneybag me-2"></i>Financial Settings
										</a>
									</li>
									<li class="nav-item">
										<a href="storage.php" class="nav-link px-0 active">
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
											<h4 class="fw-semibold mb-3">Other Settings</h4>
											<div class="list-group list-group-flush settings-sidebar">
												<a href="storage.php" class="fw-medium active">Storage</a>
												<a href="ban-ip-address.php" class="fw-medium">Ban IP Address</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->

							</div>

							<div class="col-xl-9 col-lg-12">

								<!-- Settings Info -->
								<div class="card">
									<div class="card-body">
										<div class="mb-4">
											<h4 class="fs-20">Storage</h4>
										</div>
										<div class="row">

											<!-- Storage -->
											<div class="col-xxl-4 col-sm-6">
												<div class="border rounded p-3 d-flex align-items-center justify-content-between mb-4">
													<div class="d-flex align-items-center">
														<span class="avatar avatar-lg bg-light-100 border flex-shrink-0 me-2">
															<img src="assets/img/icons/storage-icon-01.svg" class="w-auto h-auto" alt="">
														</span>
														<h6 class="fw-semibold">Local Storage</h6>
													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="me-2"><i class="ti ti-settings fs-20"></i></a>
														<div class="status-toggle">
															<input type="checkbox" id="loc" class="check" checked="">
															<label for="loc" class="checktoggle"> </label>
														</div>
													</div>
												</div>
											</div>
											<!-- /Storage -->

											<!-- Storage -->
											<div class="col-xxl-4 col-sm-6">
												<div class="border rounded p-3 d-flex align-items-center justify-content-between mb-4">
													<div class="d-flex align-items-center">
														<span class="avatar avatar-lg bg-light-100 border flex-shrink-0 me-2">
															<img src="assets/img/icons/storage-icon-02.svg" class="w-auto h-auto" alt="">
														</span>
														<h6 class="fw-semibold">AWS</h6>
													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="me-2" data-bs-toggle="modal" data-bs-target="#add_settings"><i class="ti ti-settings fs-20"></i></a>
														<div class="status-toggle">
															<input type="checkbox" id="aws" class="check" checked="">
															<label for="aws" class="checktoggle"></label>
														</div>
													</div>
												</div>
											</div>
											<!-- /Storage -->

										</div>
										<div class="d-flex align-items-center">
											<a href="#" class="btn btn-light me-2">Cancel</a>
											<button type="submit" class="btn btn-primary">Save Changes</button>
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

		<!-- AWS Settings -->
		<div class="modal custom-modal fade" id="add_settings" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">AWS Settings</h5>
						<div class="d-flex align-items-center mod-toggle">
							<div class="status-toggle">
								<input type="checkbox" id="toggle" class="check" checked="">
								<label for="toggle" class="checktoggle"></label>
							</div>
							<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<i class="ti ti-x"></i>
							</button>
						</div>
					</div>
					<div class="modal-body">
						<form action="storage.php">
							<div class="mb-3">
								<label class="col-form-label">AWS Access Key <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Secret Key <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Bucket Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Region <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Base URL <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /AWS Settings -->




	</div>
	<!-- /Main Wrapper -->

	<!-- JAVASCRIPT -->
	<?php include 'layouts/vendor-scripts.php'; ?>
	<!-- Sticky Sidebar JS -->
	<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
	<!-- Profile Upload JS -->
	<script src="assets/js/profile-upload.js"></script>

</body>

</html>