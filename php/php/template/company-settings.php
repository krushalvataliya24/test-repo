<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	 <!-- Title -->
	 <title>Company Settings  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>	
	
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
										<a href="company-settings.php" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
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
												<a href="company-settings.php" class="fw-medium active">Company Settings</a>
												<a href="localization.php" class="fw-medium">Localization</a>
												<a href="prefixes.php" class="fw-medium">Prefixes</a>
												<a href="preference.php" class="fw-medium">Preference</a>
												<a href="appearance.php" class="fw-medium">Appearance</a>
												<a href="language.php" class="fw-medium">Language</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->

							</div>

							<div class="col-xl-9 col-lg-12">

								<!-- Company Settings -->
								<div class="card">
									<div class="card-body">
										<h4 class="fw-semibold mb-3">Company Settings</h4>
										<form action="company-settings.php">	
											<div class="border-bottom mb-3 pb-3">
												<h5 class="fw-semibold mb-1">Company Information</h5>
												<p>Provide the company information below</p>
											</div>			
											<div class="border-bottom mb-3 ">			
												<div class="row">
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">Company Name </label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">Company Email Address</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">Phone Number</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">Fax</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">Website</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="border-bottom mb-3 pb-3">
												<h5 class="fw-semibold mb-1">Company Images</h5>
												<p>Provide the company images</p>
											</div>			
											<div class="border-bottom mb-3">			
												<div class="row">
													<div class="col-md-6">
														<div class="mb-3">
															<div class="profile-upload">
																<div class="profile-upload-img">
																	<span><i class="ti ti-photo"></i></span>
																	<img src="assets/img/icons/company-icon-03.svg" alt="img" class="preview1">
		    														<button type="button" class="profile-remove">
		    															<i class="feather-x"></i>
		    														</button>
																</div>
																<div class="profile-upload-content">
																	<label class="profile-upload-btn">
																		<i class="ti ti-file-broken"></i> Upload File 
																		<input type="file" class="input-img">
																	</label>
																	<p>Upload Logo of your company to display in website. JPG or PNG. Max size of 800K</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="mb-3">
															<div class="profile-upload">
																<div class="profile-upload-img">
																	<span><i class="ti ti-photo"></i></span>
																	<img src="assets/img/icons/company-icon-03.svg" alt="img" class="preview1">
		    														<button type="button" class="profile-remove">
		    															<i class="feather-x"></i>
		    														</button>
																</div>
																<div class="profile-upload-content">
																	<label class="profile-upload-btn">
																		<i class="ti ti-file-broken"></i> Upload File 
																		<input type="file" class="input-img">
																	</label>
																	<p>Upload Logo of your company to display in website. JPG or PNG. Max size of 800K</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="mb-3">
															<div class="profile-upload">
																<div class="profile-upload-img">
																	<span><i class="ti ti-photo"></i></span>
																	<img src="assets/img/icons/company-icon-03.svg" alt="img" class="preview1">
		    														<button type="button" class="profile-remove">
		    															<i class="feather-x"></i>
		    														</button>
																</div>
																<div class="profile-upload-content">
																	<label class="profile-upload-btn">
																		<i class="ti ti-file-broken"></i> Upload File 
																		<input type="file" class="input-img">
																	</label>
																	<p>Upload Logo of your company to display in website. JPG or PNG. Max size of 800K</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="mb-3">
															<div class="profile-upload">
																<div class="profile-upload-img">
																	<span><i class="ti ti-photo"></i></span>
																	<img src="assets/img/icons/company-icon-03.svg" alt="img" class="preview1">
		    														<button type="button" class="profile-remove">
		    															<i class="feather-x"></i>
		    														</button>
																</div>
																<div class="profile-upload-content">
																	<label class="profile-upload-btn">
																		<i class="ti ti-file-broken"></i> Upload File 
																		<input type="file" class="input-img">
																	</label>
																	<p>Upload Logo of your company to display in website. JPG or PNG. Max size of 800K</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="border-bottom mb-3 pb-3">
												<h5 class="fw-semibold mb-1">Address</h5>
												<p>Please enter the company address details</p>
											</div>			
											<div class="border-bottom mb-3">			
												<div class="row">
													<div class="col-md-12">
														<div class="mb-3">
															<label class="form-label">Address</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-xl-3 col-md-4">
														<div class="mb-3">
															<label class="form-label">Country</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-xl-3 col-md-4">
														<div class="mb-3">
															<label class="form-label">State / Province</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-xl-3 col-md-4">
														<div class="mb-3">
															<label class="form-label">Fax</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-xl-3 col-md-4">
														<div class="mb-3">
															<label class="form-label">Postal Code</label>
															<input type="text" class="form-control">
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
								<!-- /Company Settings -->

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

</body>

</html>