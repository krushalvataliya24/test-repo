<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Title -->
	<title>Notification  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>	

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
										<a href="<?php echo base_url();?>profile" class="nav-link px-0 active">
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
										<a href="<?php echo base_url();?>payment-gateways" class="nav-link px-0">
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
											<h4 class="fw-semibold mb-3">General Settings</h4>
											<div class="list-group list-group-flush settings-sidebar">
												<a href="<?php echo base_url();?>profile" class="fw-medium">Profile</a>
												<a href="<?php echo base_url();?>security" class="fw-medium">Security</a>
												<a href="<?php echo base_url();?>notifications" class="fw-medium active">Notifications</a>
												<a href="<?php echo base_url();?>connected-apps" class="fw-medium">Connected Apps</a>
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
										<h4 class="fw-semibold mb-3">Notification Settings</h4>
										<div class="settings-form">

											<!-- General Notifications -->	
											<div class="border-bottom mb-3 pb-3">
												<h5 class="fw-semibold mb-1">General Notifications</h5>
												<p>Select notifications</p>
											</div>
											<div class="border-bottom mb-3 pb-3">
												<div class="form-check d-flex align-items-center justify-content-between ps-0 mb-3">
													<label class="form-check-label text-gray-9 fw-medium" for="notification1">
														Mobile Push Notifications
													</label>
													<input class="form-check-input" type="checkbox" value="" id="notification1" checked="">
												</div>
												<div class="form-check d-flex align-items-center justify-content-between ps-0 mb-3">
													<label class="form-check-label text-gray-9 fw-medium" for="notification2">
														Desktop Notifications
													</label>
													<input class="form-check-input" type="checkbox" value="" id="notification2" checked="">
												</div>
												<div class="form-check d-flex align-items-center justify-content-between ps-0 mb-3">
													<label class="form-check-label text-gray-9 fw-medium" for="notification3">
														Email Notifications
													</label>
													<input class="form-check-input" type="checkbox" id="notification3" checked="">
												</div>
												<div class="form-check d-flex align-items-center justify-content-between ps-0 mb-0">
													<label class="form-check-label text-gray-9 fw-medium" for="notification4">
														SMS Notifications
													</label>
													<input class="form-check-input" type="checkbox" id="notification4" checked="">
												</div>
											</div>
											<!-- /General Notifications -->		

											<!-- Custom Notifications -->									
											<div class="border-bottom mb-3 pb-3">
												<h5 class="fw-semibold mb-1">Custom Notifications</h5>
												<p>Select when you will be notified when the following changes occur </p>
											</div>
											<div class="table-responsive notificaion-table">
												<table class="table table-borderless">
													<thead>
														<tr>
															<th></th>
															<th>Push</th>
															<th>SMS</th>
															<th>Email</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																Legendary
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</td>
														</tr>	
														<tr>
															<td>
																Transaction
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</td>
														</tr>												
														<tr>
															<td>
																Email Verification
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																OTP
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																Activity
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																Account
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox" role="switch" checked>
																</div>
															</td>
														</tr>										
													</tbody>
												</table>
											</div>
											<!-- /Custom Notifications -->

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

		<!-- Delete Account -->
		<div class="modal custom-modal fade" id="delete_account" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0 m-0 justify-content-end">
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<div class="success-message text-center">
							<div class="success-popup-icon">
								<i class="ti ti-trash-x"></i>
							</div>
							<h3>Delete Account</h3>
							<p class="del-info">Are you sure want to delete?</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url();?>security" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Account -->

	

	</div>
	<!-- /Main Wrapper -->

	<?= $this->include('partials/vendor-scripts') ?>
	<!-- Profile Upload JS -->
	<script src="<?php echo base_url(); ?>assets/js/profile-upload.js"></script>
	
	<!-- Sticky Sidebar JS -->
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

</body>
</html>