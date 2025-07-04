<!DOCTYPE html>
<html lang="en">

<head>
	<?= $this->element('title-meta') ?>
	<!-- Title -->
	<title>Leads Dashboard | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	<!-- Bootstrap Tagsinput CSS -->
	<?php echo $this->Html->css('plugins/bootstrap-tagsinput/bootstrap-tagsinput.css'); ?>

	<?= $this->element('head-css') ?>
</head>

<body>
	<!-- Main Wrapper -->
	<div class="main-wrapper">
	<div class="preloader">
			<span class="loader"></span>
		</div>
		<?= $this->element('header') ?>
		<?= $this->element('sidebar') ?>

<!-- Page Wrapper -->
<div class="page-wrapper">
			<div class="content">

				<div class="row">
					<div class="col-md-12">
						<div class="page-header">
							<div class="row align-items-center ">
								<div class="col-md-4">
									<h3 class="page-title">Leads Dashboard</h3>
								</div>
								<div class="col-md-8 float-end ms-auto">
									<div class="d-flex title-head">
										<div class="daterange-picker d-flex align-items-center justify-content-center">
											<div class="form-sort me-2">
												<i class="ti ti-calendar"></i>
												<input type="text" class="form-control  date-range bookingrange">
											</div>
											<div class="head-icons mb-0">
												<a href="leads_dashboard" data-bs-toggle="tooltip"
													data-bs-placement="top" data-bs-original-title="Refresh"><i
														class="ti ti-refresh-dot"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="tooltip"
													data-bs-placement="top" data-bs-original-title="Collapse"
													id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Recently Created Leads</h4>
									<div class="dropdown">
										<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
											<i class="ti ti-calendar-check me-2"></i>Last 30 days
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="javascript:void(0);" class="dropdown-item">
												Last 15 days
											</a>
											<a href="javascript:void(0);" class="dropdown-item">
												Last 30 days
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive custom-table">
									<table class="table dataTable" id="lead-project">
										<thead class="thead-light">
											<tr>
												<th>Lead Name</th>
												<th>Company Name</th>
												<th>Phone</th>
												<th>Lead Status</th>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5 d-flex">
						<div class="card w-100">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Projects By Stage</h4>
									<div class="dropdown">
										<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
											Last 30 Days
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="javascript:void(0);" class="dropdown-item">
												Last 30 Days
											</a>
											<a href="javascript:void(0);" class="dropdown-item">
												Last 15 Days
											</a>
											<a href="javascript:void(0);" class="dropdown-item">
												Last 7 Days
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">

								<div id="leadpiechart"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 d-flex">
						<div class="card w-100">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Projects By Stage</h4>
									<div class="d-flex align-items-center flex-wrap row-gap-2">
										<div class="dropdown me-2">
											<a class="dropdown-toggle" data-bs-toggle="dropdown"
												href="javascript:void(0);">
												Sales Pipeline
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="javascript:void(0);" class="dropdown-item">
													Marketing Pipeline
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Sales Pipeline
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Email
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Chats
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Operational
												</a>
											</div>
										</div>
										<div class="dropdown">
											<a class="dropdown-toggle" data-bs-toggle="dropdown"
												href="javascript:void(0);">
												Last 30 Days
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="javascript:void(0);" class="dropdown-item">
													Last 30 Days
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Last 15 Days
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Last 7 Days
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">

								<div id="contact-report"></div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Leads By Stage</h4>
									<div class="d-flex align-items-center flex-wrap row-gap-2">
										<div class="dropdown me-2">
											<a class="dropdown-toggle" data-bs-toggle="dropdown"
												href="javascript:void(0);">
												Marketing Pipeline
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="javascript:void(0);" class="dropdown-item">
													Marketing Pipeline
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Sales Pipeline
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Email
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Chats
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Operational
												</a>
											</div>
										</div>
										<div class="dropdown">
											<a class="dropdown-toggle" data-bs-toggle="dropdown"
												href="javascript:void(0);">
												Last 3 months
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="javascript:void(0);" class="dropdown-item">
													Last 3 months
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Last 6 months
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Last 12 months
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div id="last-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Won Deals Stage</h4>
									<div class="d-flex align-items-center flex-wrap row-gap-2">
										<div class="dropdown me-2">
											<a class="dropdown-toggle" data-bs-toggle="dropdown"
												href="javascript:void(0);">
												Marketing Pipeline
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="javascript:void(0);" class="dropdown-item">
													Marketing Pipeline
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Sales Pipeline
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Email
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Chats
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Operational
												</a>
											</div>
										</div>
										<div class="dropdown">
											<a class="dropdown-toggle" data-bs-toggle="dropdown"
												href="javascript:void(0);">
												Last 3 months
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="javascript:void(0);" class="dropdown-item">
													Last 3 months
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Last 6 months
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Last 12 months
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body ">
								<div id="won-chart"></div>
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

	<!-- Datetimepicker JS -->
	<?php echo $this->Html->script('bootstrap-datetimepicker.min.js'); ?>

	<!-- Bootstrap Tagsinput JS -->
	<?php echo $this->Html->script('plugins/bootstrap-tagsinput/bootstrap-tagsinput.js'); ?>
	
</body>

</html>