<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Invoice Settings | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	<?php include 'layouts/title-meta.php'; ?>
	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feather.css">
	<!-- Summernote CSS -->
	<link rel="stylesheet" href="assets/plugins/summernote/summernote-lite.min.css">

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
										<a href="invoice-settings.php" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
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
										<a href="invoice-settings.php" class="nav-link px-0 active">
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
											<h4 class="fw-semibold mb-3">App Settings</h4>
											<div class="list-group list-group-flush settings-sidebar">
												<a href="invoice-settings.php" class="fw-medium active">Invoice Settings</a>
												<a href="printers.php" class="fw-medium">Printer</a>
												<a href="custom-fields.php" class="fw-medium">Custom Fields</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->

							</div>

							<div class="col-xl-9 col-lg-12">

								<!-- Invoice Settings -->
								<div class="card">
									<div class="card-body">
										<h4 class="fw-semibold mb-3">Invoice Settings</h4>
										<form action="invoice-settings.php">
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3">
														<h6 class="fw-medium">Invoice Logo</h6>
														<p>Upload logo of your company to display in invoice</p>
													</div>
												</div>
												<div class="col-md-6">
													<div class="mb-3">
														<div class="profile-upload">
															<div class="profile-upload-img">
																<span><i class="ti ti-photo"></i></span>
																<img id="ImgPreview" src="assets/img/logo.svg" alt="img" class="preview1">
																<button type="button" id="removeImage1" class="profile-remove">
																	<i class="feather-x"></i>
																</button>
															</div>
															<div class="profile-upload-content">
																<label class="profile-upload-btn">
																	<i class="ti ti-file-broken"></i> Upload File
																	<input type="file" id="imag" class="input-img">
																</label>
																<p>Upload Logo of your company to display in website(JPG or PNG). Max size of 800K</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3">
														<h6 class="fw-medium">Invoice Prefix</h6>
														<p>Add prefix to your invoice</p>
													</div>
												</div>
												<div class="col-md-4">
													<div class="mb-3">
														<input type="text" class="form-control" value="INV-">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3">
														<h6 class="fw-medium">Invoice Due</h6>
														<p>Select due date to display in invoice</p>
													</div>
												</div>
												<div class="col-md-4">
													<div class="mb-3">
														<div class="d-flex align-items-center inv-days">
															<div class="select-drop">
																<select class="select">
																	<option selected>5</option>
																	<option>7</option>
																</select>
															</div>
															<p>Days</p>
														</div>
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-md-6">
													<div class="mb-3">
														<h6 class="fw-medium">Invoice Round Off</h6>
														<p>Value roundoff in invoice</p>
													</div>
												</div>
												<div class="col-md-4">
													<div class="mb-3">
														<div class="d-flex align-items-center">
															<div class="form-check form-switch me-2">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
															<div class="select-drop w-100">
																<select class="select">
																	<option selected>Roundoff Up</option>
																	<option>Roundoff Down</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-md-6">
													<div class="mb-3">
														<h6 class="fw-medium">Show Company Details</h6>
														<p>Show/hide company details in invoice</p>
													</div>
												</div>
												<div class="col-md-6">
													<div class="mb-3">
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" role="switch" checked>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3">
														<h6 class="fw-medium">Invoice Header Terms</h6>
													</div>
												</div>
												<div class="col-md-6">
													<div class="mb-3">
														<div class="summernote"></div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3">
														<h6 class="fw-medium">Invoice Footer Terms</h6>
													</div>
												</div>
												<div class="col-md-6">
													<div class="mb-3">
														<div class="summernote"></div>
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
								<!-- /Invoice Settings -->

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
	<!-- Profile Upload JS -->
	<script src="assets/js/profile-upload.js"></script>
	<!-- Sticky Sidebar JS -->
	<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
	<!-- Summernote JS -->
	<script src="assets/plugins/summernote/summernote-lite.min.js"></script>

</body>

</html>