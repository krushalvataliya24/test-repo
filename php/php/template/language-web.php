<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Language Web | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
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
										<a href="language-web.php" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
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
												<a href="appearance.php" class="fw-medium">Appearance</a>
												<a href="language.php" class="fw-medium active">Language</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->

							</div>

							<div class="col-xl-9 col-lg-12">

								<!-- Language Web -->
								<div class="card">
									<div class="card-header">
										<div>
											<div class="mb-4">
												<h4 class="fs-20">Language</h4>
											</div>
											<div class="row gy-3">
												<div class="col-xl-5 col-md-3 col-lg-5">
													<div class="">
														<div class="d-flex align-items-center">
															<div class="lang-flag me-2">
																<a href="javascript:void(0);">
																	<img class="avatar-img" src="assets/img/icons/flag-02.svg" alt="Flag"><span>Arabic</span>
																</a>
															</div>
															<ul class="lang-direct d-flex align-items-center">
																<li>
																	<a href="javascript:void(0);" class="active">LTR</a>
																</li>
																<li>
																	<a href="javascript:void(0);">RTL</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="col-xl-7 col-md-9 col-lg-12">
													<div class="d-flex align-items-center flex-wrap row-gap-2 justify-content-sm-end">
														<div class="dropdown me-2">
															<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="ti ti-package-export me-2"></i>Export</a>
															<div class="dropdown-menu  dropdown-menu-end">
																<ul>
																	<li>
																		<a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-file-type-pdf text-danger me-1"></i>Export as PDF</a>
																	</li>
																	<li>
																		<a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-file-type-xls text-green me-1"></i>Export as Excel </a>
																	</li>
																</ul>
															</div>
														</div>
														<a href="language.php" class="btn btn-primary"><i class="ti ti-arrow-narrow-left me-2"></i>Back to Translation</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<!-- Filter -->
										<div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
											<div class="dropdown mb-3">
												<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="ti ti-sort-ascending-2 me-2"></i>Sort </a>
												<div class="dropdown-menu  dropdown-menu-start">
													<ul>
														<li>
															<a href="javascript:void(0);" class="dropdown-item">
																<i class="ti ti-circle-chevron-right me-1"></i>Ascending
															</a>
														</li>
														<li>
															<a href="javascript:void(0);" class="dropdown-item">
																<i class="ti ti-circle-chevron-right me-1"></i>Descending
															</a>
														</li>
														<li>
															<a href="javascript:void(0);" class="dropdown-item">
																<i class="ti ti-circle-chevron-right me-1"></i>Recently Viewed
															</a>
														</li>
														<li>
															<a href="javascript:void(0);" class="dropdown-item">
																<i class="ti ti-circle-chevron-right me-1"></i>Recently Added
															</a>
														</li>
													</ul>
												</div>
											</div>
											<div class="dropdown mb-3">
												<a href="javascript:void(0);" class="btn bg-soft-purple text-purple" data-bs-toggle="dropdown" data-bs-auto-close="outside"><i class="ti ti-columns-3 me-2"></i>Manage Columns</a>
												<div class="dropdown-menu  dropdown-menu-md-end dropdown-md p-3">
													<h4 class="mb-2 fw-semibold">Want to manage datatables?</h4>
													<p class="mb-3">Please drag and drop your column to reorder your table and enable see option as you want.</p>
													<div class="border-top pt-3">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Medium</p>
															<div class="status-toggle">
																<input type="checkbox" id="col-name" class="check">
																<label for="col-name" class="checktoggle"></label>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-3">
															<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>File</p>
															<div class="status-toggle">
																<input type="checkbox" id="col-phone" class="check">
																<label for="col-phone" class="checktoggle"></label>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-3">
															<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Total</p>
															<div class="status-toggle">
																<input type="checkbox" id="col-email" class="check">
																<label for="col-email" class="checktoggle"></label>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-3">
															<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Done</p>
															<div class="status-toggle">
																<input type="checkbox" id="col-loc" class="check">
																<label for="col-loc" class="checktoggle"></label>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-3">
															<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Progress</p>
															<div class="status-toggle">
																<input type="checkbox" id="col-rate" class="check">
																<label for="col-rate" class="checktoggle"></label>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Action</p>
															<div class="status-toggle">
																<input type="checkbox" id="col-action" class="check">
																<label for="col-action" class="checktoggle"></label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /Filter -->

										<!-- Language List -->
										<div class="table-responsive custom-table">
											<table class="table" id="language-web">
												<thead class="thead-light">
													<tr>
														<th class="no-sort"></th>
														<th class="no-sort"></th>
														<th>Medium</th>
														<th>File</th>
														<th>Total</th>
														<th>Done</th>
														<th>Progress</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>

												</tbody>
											</table>
										</div>
										<div class="row align-items-center">
											<div class="col-md-6">
												<div class="datatable-length"></div>
											</div>
											<div class="col-md-6">
												<div class="datatable-paginate"></div>
											</div>
										</div>
										<!-- /Language List -->

									</div>
								</div>
								<!-- /Language Web -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Translation -->
		<div class="modal custom-modal fade" id="add_translate" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<form action="language-web.php">
						<div class="modal-body pb-0">
							<div class="translate-item">
								<div class="d-flex align-items-center">
									<div class="lang-flag">
										<a href="javascript:void(0);">
											<img class="avatar-img" src="assets/img/icons/flag-02.svg" alt="Flag"><span>Arabic</span>
										</a>
									</div>
									<div class="lang-progress">
										<p class="mb-0">Progress</p>
										<div class="d-flex align-items-center">
											<div class="progress">
												<div class="progress-bar bg-blue" role="progressbar"></div>
											</div>
											<span class="position-static ms-2">40%</span>
										</div>
									</div>
								</div>
								<a href="language.php" class="btn btn-primary"><i class="ti ti-arrow-narrow-left me-2"></i>Back to Translation</a>
							</div>
							<div class="translate-wrap translate-title">
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6 class="fw-medium mb-3">English</h6>
									</div>
									<div class="col-md-4">
										<h6 class="fw-medium mb-3">Arabic</h6>
									</div>
								</div>
							</div>
							<div>
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6 class="fw-medium mb-3">Bugs</h6>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<input type="text" class="form-control" value="البق">
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6 class="fw-medium mb-3">Bugs Email</h6>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<input type="text" class="form-control" value="البق البريد الإلكتروني">
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6 class="fw-medium mb-3">Bug Assigned</h6>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<input type="text" class="form-control" value="البق البريد الإلكتروني">
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6 class="fw-medium mb-3"> Bug Comments</h6>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<input type="text" class="form-control" value="علة تعليقات">
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6 class="fw-medium mb-3">Bug Attachment</h6>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<input type="text" class="form-control" value="البقعلة مرفق">
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6 class="fw-medium mb-3">Bug Updated</h6>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<input type="text" class="form-control" value="البق بمجلس تم الحفظ بنجاح">
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6 class="fw-medium mb-3">Bug Reported</h6>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<input type="text" class="form-control" value="توقيت بمجلس المحذوفة بنجاح">
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6 class="fw-medium mb-3">Bugs information successfully updated</h6>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<input type="text" class="form-control" value="البق بمجلس المحذوفة بنجاح">
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6 class="fw-medium mb-3">Bugs information successfully Saved</h6>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<input type="text" class="form-control" value="علة التحديث">
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6 class="fw-medium mb-3">Timer information successfully Deleted</h6>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<input type="text" class="form-control" value="آخر البق الجديدة التي تمت إضافتها">
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6 class="fw-medium mb-3">Bugs infromation successfully Deleted</h6>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<input type="text" class="form-control" value="جميع البق">
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6 class="fw-medium mb-3">Bug Updated</h6>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<input type="text" class="form-control" value="البق بمجلس تم الحفظ بنجاح">
										</div>
									</div>
								</div>
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
		<!-- /Add Translation -->



	</div>
	<!-- /Main Wrapper -->

	<!-- JAVASCRIPT -->
	<?php include 'layouts/vendor-scripts.php'; ?>
	<!-- Sticky Sidebar JS -->
	<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

</body>

</html>