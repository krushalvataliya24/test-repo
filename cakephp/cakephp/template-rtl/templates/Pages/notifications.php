<!DOCTYPE html>
<html lang="en">

<head>

	<?= $this->element('title-meta') ?>
	<!-- Title -->
	<title>Notifications | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>

<!-- Feathericon CSS -->
<?php echo $this->Html->css('feather.css') ?>

	<?= $this->element('head-css') ?>
</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<?= $this->element('header') ?>
		<?= $this->element('sidebar') ?>

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
										<a href="notifications" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
										<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Collapse" id="collapse-header"><i
												class="ti ti-chevrons-up"></i></a>
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
										<a href="profile" class="nav-link px-0 active">
											<i class="ti ti-settings-cog me-2"></i>General Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="company_settings" class="nav-link px-0">
											<i class="ti ti-world-cog me-2"></i>Website Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="invoice_settings" class="nav-link px-0">
											<i class="ti ti-apps me-2"></i>App Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="email_settings" class="nav-link px-0">
											<i class="ti ti-device-laptop me-2"></i>System Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="payment_gateways" class="nav-link px-0">
											<i class="ti ti-moneybag me-2"></i>Financial Settings
										</a>
									</li>
									<li class="nav-item">
										<a href="storage" class="nav-link px-0">
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
												<a href="profile" class="fw-medium">Profile</a>
												<a href="security" class="fw-medium">Security</a>
												<a href="notifications" class="fw-medium active">Notifications</a>
												<a href="connected_apps" class="fw-medium">Connected Apps</a>
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
												<div
													class="form-check d-flex align-items-center justify-content-between ps-0 mb-3">
													<label class="form-check-label text-gray-9 fw-medium"
														for="notification1">
														Mobile Push Notifications
													</label>
													<input class="form-check-input" type="checkbox" value=""
														id="notification1" checked="">
												</div>
												<div
													class="form-check d-flex align-items-center justify-content-between ps-0 mb-3">
													<label class="form-check-label text-gray-9 fw-medium"
														for="notification2">
														Desktop Notifications
													</label>
													<input class="form-check-input" type="checkbox" value=""
														id="notification2" checked="">
												</div>
												<div
													class="form-check d-flex align-items-center justify-content-between ps-0 mb-3">
													<label class="form-check-label text-gray-9 fw-medium"
														for="notification3">
														Email Notifications
													</label>
													<input class="form-check-input" type="checkbox" id="notification3"
														checked="">
												</div>
												<div
													class="form-check d-flex align-items-center justify-content-between ps-0 mb-0">
													<label class="form-check-label text-gray-9 fw-medium"
														for="notification4">
														SMS Notifications
													</label>
													<input class="form-check-input" type="checkbox" id="notification4"
														checked="">
												</div>
											</div>
											<!-- /General Notifications -->

											<!-- Custom Notifications -->
											<div class="border-bottom mb-3 pb-3">
												<h5 class="fw-semibold mb-1">Custom Notifications</h5>
												<p>Select when you will be notified when the following changes occur
												</p>
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
																	<input class="form-check-input" type="checkbox"
																		role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox"
																		role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox"
																		role="switch" checked>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																Transaction
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox"
																		role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox"
																		role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox"
																		role="switch" checked>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																Email Verification
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox"
																		role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox"
																		role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox"
																		role="switch" checked>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																OTP
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox"
																		role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox"
																		role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox"
																		role="switch" checked>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																Activity
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox"
																		role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox"
																		role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox"
																		role="switch" checked>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																Account
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox"
																		role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox"
																		role="switch" checked>
																</div>
															</td>
															<td>
																<div class="form-check form-switch">
																	<input class="form-check-input" type="checkbox"
																		role="switch" checked>
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



        </div>
	<!-- /Main Wrapper -->

	<?= $this->element('vendor-scripts') ?>

	<!-- Profile Upload JS -->
    <?php echo $this->Html->script('profile-upload.js')?>
	<!-- Sticky Sidebar JS -->
	<?php echo $this->Html->script('plugins/theia-sticky-sidebar/ResizeSensor.js')?>
	<?php echo $this->Html->script('plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')?>
</body>

</html>