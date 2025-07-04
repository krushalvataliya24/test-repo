<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Security | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
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
										<a href="security.php" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
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
										<a href="profile.php" class="nav-link px-0 active">
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
											<h4 class="fw-semibold mb-3">General Settings</h4>
											<div class="list-group list-group-flush settings-sidebar">
												<a href="profile.php" class="fw-medium">Profile</a>
												<a href="security.php" class="fw-medium active">Security</a>
												<a href="notifications.php" class="fw-medium">Notifications</a>
												<a href="connected-apps.php" class="fw-medium">Connected Apps</a>
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
										<h4 class="fw-semibold mb-3">Security Settings</h4>
										<div class="row">
											<div class="col-lg-4 col-md-6 d-flex">
												<div class="card border shadow-none flex-fill mb-3">
													<div class="card-body d-flex justify-content-between flex-column">
														<div class="mb-3">
															<div class="d-flex align-items-center justify-content-between mb-1">
																<h6 class="fw-semibold">Password</h6>
															</div>
															<p>Last Changed 03 Jan 2023, 09:00 AM</p>
														</div>
														<div>
															<a href="javascript:void(0)" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#change_password">
																Change Password
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 d-flex">
												<div class="card border shadow-none flex-fill mb-3">
													<div class="card-body d-flex justify-content-between flex-column">
														<div class="mb-3">
															<div class="d-flex align-items-center justify-content-between mb-1">
																<h6 class="fw-semibold">Two Factor</h6>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</div>
															<p>Receive codes via SMS or email every time you login</p>
														</div>
														<div>
															<a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#delete_two_factor">Delete Account</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 d-flex">
												<div class="card border shadow-none flex-fill mb-3">
													<div class="card-body d-flex justify-content-between flex-column">
														<div class="mb-3">
															<div class="d-flex align-items-center justify-content-between mb-1">
																<h6 class="fw-semibold">Google Authenticator</h6>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</div>
															<p>Google Authenticator adds an extra layer of security to your online accounts by adding a second step of verification when you sign in.</p>
														</div>
														<div>
															<span class="badge badge-soft-success">Connected</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 d-flex">
												<div class="card border shadow-none flex-fill mb-3">
													<div class="card-body d-flex justify-content-between flex-column">
														<div class="mb-3">
															<div class="d-flex align-items-center justify-content-between mb-1">
																<h6 class="fw-semibold">Phone Number Verification<i class="ti ti-square-rounded-check-filled text-success ms-1"></i></h6>
															</div>
															<p>Verified Mobile Number : <span class="text-gray-9">+99264710583</span></p>
														</div>
														<div class="d-flex align-items-center">
															<a href="javascript:void(0)" class="btn btn-light me-3" data-bs-toggle="modal" data-bs-target="#change_phone_number">Change</a>
															<a href="javascript:void(0)" class="link-danger fw-semibold">Remove</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 d-flex">
												<div class="card border shadow-none flex-fill mb-3">
													<div class="card-body d-flex justify-content-between flex-column">
														<div class="mb-3">
															<div class="d-flex align-items-center justify-content-between mb-1">
																<h6 class="fw-semibold">Email Verification<i class="ti ti-square-rounded-check-filled text-success ms-1"></i></h6>
															</div>
															<p>Verified Email : <span>info@example.com</span></p>
														</div>
														<div class="d-flex align-items-center">
															<a href="javascript:void(0)" class="btn btn-light me-3" data-bs-toggle="modal" data-bs-target="#change_email">Change</a>
															<a href="javascript:void(0)" class="link-danger fw-semibold">Remove</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 d-flex">
												<div class="card border shadow-none flex-fill mb-3">
													<div class="card-body d-flex justify-content-between flex-column">
														<div class="mb-3">
															<div class="d-flex align-items-center justify-content-between mb-1">
																<h6 class="fw-semibold">Device Management</h6>
															</div>
															<p>Last Changed 17 Feb 2023, 11.00 AM</p>
														</div>
														<div class="d-flex align-items-center">
															<a href="javascript:void(0)" class="btn btn-light">Manage</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 d-flex">
												<div class="card border shadow-none flex-fill mb-3">
													<div class="card-body d-flex justify-content-between flex-column">
														<div class="mb-3">
															<div class="d-flex align-items-center justify-content-between mb-1">
																<h6 class="fw-semibold">Account Activity</h6>
															</div>
															<p>Last Changed 22 Feb 2023, 01:20 PM</p>
														</div>
														<div class="d-flex align-items-center">
															<a href="javascript:void(0)" class="btn btn-light">View</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 d-flex">
												<div class="card border shadow-none flex-fill mb-3">
													<div class="card-body d-flex justify-content-between flex-column">
														<div class="mb-3">
															<div class="d-flex align-items-center justify-content-between mb-1">
																<h6 class="fw-semibold">Deactive Account</h6>
															</div>
															<p>Last Changed 04 Mar 2023, 08:40 AM</p>
														</div>
														<div class="d-flex align-items-center">
															<a href="javascript:void(0)" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deactive_account">Deactive</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 d-flex">
												<div class="card border shadow-none flex-fill mb-3">
													<div class="card-body d-flex justify-content-between flex-column">
														<div class="mb-3">
															<div class="d-flex align-items-center justify-content-between mb-1">
																<h6 class="fw-semibold">Delete Account</h6>
															</div>
															<p>Last Changed 13 Mar 2023, 02:40 PM</p>
														</div>
														<div class="d-flex align-items-center">
															<a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#delete_account">Delete Account</a>
														</div>
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

		<!-- Change Password -->
		<div class="modal fade" id="change_password" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Change Password</h5>
						<button class="btn-close custom-btn-close border p-1 me-0 text-dark" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="security.php">
						<div class="modal-body">
							<div class="mb-3">
								<label class="col-form-label">Current Password <span class="text-danger">*</span></label>
								<input type="password" class="form-control">
							</div>
							<div class="mb-3">
								<label class="col-form-label">New Password <span class="text-danger">*</span></label>
								<input type="password" class="form-control">
							</div>
							<div class="mb-0">
								<label class="col-form-label">Confirm Password <span class="text-danger">*</span></label>
								<input type="password" class="form-control">
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
		<!-- /Change Password -->

		<!-- Delete Account -->
		<div class="modal custom-modal fade" id="delete_account" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<form action="security.php">
							<div class="text-center">
								<div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
									<i class="ti ti-trash-x fs-36 text-danger"></i>
								</div>
								<h4 class="mb-2">Delete Account</h4>
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
		<!-- /Delete Account -->

		<!-- Delete Account -->
		<div class="modal custom-modal fade" id="delete_two_factor" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center">
							<div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
								<i class="ti ti-trash-x fs-36 text-danger"></i>
							</div>
							<h4 class="mb-2">Delete Two Factor</h4>
							<p class="mb-0">Are you sure you want to remove it.</p>
							<div class="d-flex align-items-center justify-content-center mt-4">
								<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-danger">Yes, Delete it</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Account -->



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