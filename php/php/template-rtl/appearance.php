<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Title -->
    <title>Appearance | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
		
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
										<a href="appearance.php" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
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
												<a href="preference.php" class="fw-medium">Preference</a>
												<a href="appearance.php" class="fw-medium active">Appearance</a>
												<a href="language.php" class="fw-medium">Language</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->

							</div>

							<div class="col-xl-9 col-lg-12">

								<!-- Appearance -->
								<div class="card">
									<div class="card-body">
										<h4 class="fw-semibold mb-3">Appearance</h4>
										<form action="appearance.php">
											<div class="mb-0">
												<div class="row">
													<div class="col-md-4">
														<div class="mb-3">
															<h6 class="fw-medium">Select Theme</h6>
															<p>Select theme of the website</p>
														</div>
													</div>
													<div class="col-md-8">
														<div class="mb-3 mb-0">
															<div class="theme-type-images d-flex align-items-center">
																<div class="theme-image active">
																	<div class="theme-image-set">
																		<img src="assets/img/theme/theme-01.jpg" alt="">
																	</div>
																	<span>Light</span>
																</div>
																<div class="theme-image">
																	<div class="theme-image-set">
																		<img src="assets/img/theme/theme-02.jpg" alt="">
																	</div>
																	<span>Dark</span>
																</div>
																<div class="theme-image">
																	<div class="theme-image-set">
																		<img src="assets/img/theme/theme-03.jpg" alt="">
																	</div>
																	<span>Automatic</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="mb-3">
															<h6 class="fw-medium">Accent Color</h6>
															<p>Select accent color of website</p>
														</div>
													</div>
													<div class="col-md-8">
														<div class="mb-3">
															<div class="theme-colors">
																<ul>
																	<li>
																		<span class="themecolorset defaultcolor active"></span>
																	</li>
																	<li>
																		<span class="themecolorset theme-secondary"></span>
																	</li>
																	<li>
																		<span class="themecolorset theme-violet"></span>
																	</li>
																	<li>
																		<span class="themecolorset theme-blue"></span>
																	</li>
																	<li>
																		<span class="themecolorset theme-brown"></span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="mb-3">
															<h6 class="fw-medium">Expand Sidebar</h6>
															<p>To display in all the pages</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" checked>
															</div>
														</div>
													</div>
												</div>			
												<div class="row">
													<div class="col-md-4">
														<div class="mb-3">
															<h6 class="fw-medium">Sidebar Size</h6>
															<p>Select size of sidebar to display</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<select class="select">
																<option selected>Large - 250px</option>
																<option>Small - 85px</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="mb-3">
															<h6 class="fw-medium">Font Family</h6>
															<p>Select font family of website</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<select class="select">
																<option selected>Noto Sans</option>
																<option>Nunito</option>
															</select>
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
								<!-- /Appearance -->

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