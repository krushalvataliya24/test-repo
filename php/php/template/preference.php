<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Perference | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	<?php include 'layouts/title-meta.php'; ?>
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
										<a href="preference.php" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
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
										<a href="company-settings.php" class="nav-link px-0 active">
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
											<h4 class="fw-semibold mb-3">Website Settings</h4>
											<div class="list-group list-group-flush settings-sidebar">
												<a href="company-settings.php" class="fw-medium">Company Settings</a>
												<a href="localization.php" class="fw-medium">Localization</a>
												<a href="prefixes.php" class="fw-medium">Prefixes</a>
												<a href="preference.php" class="fw-medium active">Preference</a>
												<a href="appearance.php" class="fw-medium">Appearance</a>
												<a href="language.php" class="fw-medium">Language</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->

							</div>

							<div class="col-xl-9 col-lg-12">

								<!-- Prefixes -->
								<div class="card">
									<div class="card-body">
										<h4 class="fw-semibold mb-3">Preference</h4>
										<form action="preference.php">
											<div class="row">
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="assets/img/icons/preference-01.svg" alt="">
																<h6 class="fw-semibold ms-3">Contact</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="assets/img/icons/preference-02.svg" alt="">
																<h6 class="fw-semibold ms-3">Deals</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="assets/img/icons/preference-03.svg" alt="">
																<h6 class="fw-semibold ms-3">Leads</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="assets/img/icons/preference-04.svg" alt="">
																<h6 class="fw-semibold ms-3">Pipelines</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="assets/img/icons/preference-02.svg" alt="">
																<h6 class="fw-semibold ms-3">Campaign</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="assets/img/icons/preference-06.svg" alt="">
																<h6 class="fw-semibold ms-3">Projects</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="assets/img/icons/preference-07.svg" alt="">
																<h6 class="fw-semibold ms-3">Tasks</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="assets/img/icons/preference-08.svg" alt="">
																<h6 class="fw-semibold ms-3">Acivities</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="assets/img/icons/preference-09.svg" alt="">
																<h6 class="fw-semibold ms-3">Company</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="assets/img/icons/preference-10.svg" alt="">
																<h6 class="fw-semibold ms-3">Analytics</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="assets/img/icons/preference-11.svg" alt="">
																<h6 class="fw-semibold ms-3">Clients</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="assets/img/icons/preference-12.svg" alt="">
																<h6 class="fw-semibold ms-3">Customers</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div>
												<a href="#" class="btn btn-light me-2">Cancel</a>
												<button type="submit" class="btn btn-primary">Save Changes</button>
											</div>
										</form>
									</div>
								</div>
								<!-- /Prefixes -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Wrapper -->



	</div>
	<!-- /Main Wrapper -->

	<!-- JAVASCRIPT -->
	<?php include 'layouts/vendor-scripts.php'; ?>
	<!-- Sticky Sidebar JS -->
	<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
</body>

</html>