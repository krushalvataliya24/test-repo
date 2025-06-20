<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Title -->
	<title>gdpr cokkies  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>	
 
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
										<a href="gdpr-cookies.php" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
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
										<a href="email-settings.php" class="nav-link px-0 active">
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
											<h4 class="fw-semibold mb-3">Other Settings</h4>
											<div class="list-group list-group-flush settings-sidebar">
												<a href="email-settings.php" class="fw-medium">Email Settings</a>
												<a href="sms-gateways.php" class="fw-medium">SMS Gateways</a>
												<a href="gdpr-cookies.php" class="fw-medium active">GDPR Cookies</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->
							</div>
							<div class="col-xl-9 col-lg-12">

								<!-- GDPR Cookies -->
								<div class="card">
									<div class="card-body">
										<div class="mb-3">
											<h4 class="fs-20">GDPR Cookies</h4>
										</div>
										<form action="gdpr-cookies.php">
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3">
														<h6 class="fw-medium">Cookies Content Text</h6>
														<p class="fs-12">You can configure the text here</p>
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
														<h6 class="fw-medium">Cookies Position</h6>
														<p class="fs-12">You can configure the type</p>
													</div>
												</div>
												<div class="col-md-4">
													<div class="mb-3">
														<select class="select">
															<option selected>Right</option>
															<option>Left</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3">
														<h6 class="fw-medium">Agree Button Text</h6>
														<p class="fs-12">You can configure the text here</p>
													</div>
												</div>
												<div class="col-md-4">
													<div class="mb-3">
														<input type="text" class="form-control" value="Manage">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3">
														<h6 class="fw-medium">Decline Button Text</h6>
														<p class="fs-12">You can configure the text here</p>
													</div>
												</div>
												<div class="col-md-4">
													<div class="mb-3">
														<input type="text" class="form-control" value="Manage">
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-md-6">
													<div class="mb-3">
														<h6 class="fw-medium">Show Decline Button</h6>
														<p class="fs-12">To display decline button</p>
													</div>
												</div>
												<div class="col-md-4">
													<div class="mb-3">
														<div class="status-toggle">
															<input type="checkbox" id="sms1" class="check" checked="">
															<label for="sms1" class="checktoggle">	</label>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3">
														<h6 class="fw-medium">Link for Cookies Page</h6>
														<p class="fs-12">You can configure the link here</p>
													</div>
												</div>
												<div class="col-md-4">
													<div class="mb-3">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<a href="#" class="btn btn-light me-2">Cancel</a>
												<button type="submit" class="btn btn-primary">Save Changes</button>
											</div>
										</form>
									</div>
								</div>
								<!-- /GDPR Cookies -->

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
    	<!-- Profile Upload JS -->
	<script src="assets/js/profile-upload.js"></script>
<!-- Summernote JS -->
<script src="assets/plugins/summernote/summernote-lite.min.js"></script>
</body>

</html>