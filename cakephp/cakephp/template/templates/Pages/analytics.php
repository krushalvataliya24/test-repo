<!DOCTYPE html>
<html lang="en">

<head>

	<?= $this->element('title-meta') ?>
	<!-- Title -->
	<title>Analytics | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>

	<!-- Summernote CSS -->
	<?php echo $this->Html->css('plugins/summernote/summernote-lite.min.css') ?>

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
								<div class="col-4">
									<h4 class="page-title">Analytics</h4>
								</div>
								<div class="col-8 text-end">
									<div class="head-icons">
										<a href="analytics" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
										<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Collapse" id="collapse-header"><i
												class="ti ti-chevrons-up"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

					</div>
				</div>

				<div class="row">
					<div class="col-xl-6">
						<div class="card ">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Recently Created Contacts</h4>
									<div class="d-flex align-items-center flex-wrap row-gap-2">
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
								<div class="table-responsive">
									<table class="table dataTable custom-table mb-0" id="analytic-contact">
										<thead>
											<tr>
												<th>Contact</th>
												<th>Email</th>
												<th>Phone</th>
												<th>Created at</th>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="card ">
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
							<div class="card-body pt-0">
								<div id="won-chart"></div>
							</div>
						</div>
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Recently Created Deals</h4>
									<div class="d-flex align-items-center flex-wrap row-gap-2">
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
								<div class="table-responsive">
									<table class="table table-nowrap custom-table mb-0" id="analytic-deal">
										<thead>
											<tr>
												<th>Deal Name</th>
												<th>Stage</th>
												<th>Deal Value</th>
												<th>Probability</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Lost Leads Stage</h4>
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
							<div class="card-body pt-0">
								<div id="last-chart-2"></div>
							</div>
						</div>
						<div class="card ">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Leads By Stage</h4>
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
								<div id="leads-chart"></div>
							</div>
						</div>
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Recently Added Companies</h4>
									<div class="d-flex align-items-center flex-wrap row-gap-2">
										<div class="dropdown me-2">
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
										<a href="#" class="btn btn-primary" data-bs-toggle="offcanvas"
											data-bs-target="#offcanvas_add_2"><i
												class="ti ti-square-rounded-plus me-2"></i> Add Company</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table custom-table mb-0" id="analytic-company">
										<thead>
											<tr>
												<th>Company Name</th>
												<th>Email</th>
												<th>Phone</th>
												<th>Created at</th>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Deals By Stage</h4>
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
								<div id="deals-chart"></div>
							</div>
						</div>
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Activities</h4>
									<div class="d-flex align-items-center flex-wrap row-gap-2">
										<div class="dropdown me-2">
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
										<a href="#" class="btn btn-primary" data-bs-toggle="offcanvas"
											data-bs-target="#offcanvas_add"><i
												class="ti ti-square-rounded-plus me-2"></i>Add New Activity</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="activities-list">
									<ul>
										<li>
											<div class="row align-items-center">
												<div class="col-md-5">
													<div class="activity-name">
														<h5>We scheduled a meeting for next week</h5>
														<p>Due Date : 10 Feb 2024, 09:00 am </p>
														<span class="badge activity-badge bg-purple"><i
																class="ti ti-user-share"></i>Meeting</span>
													</div>
												</div>
												<div class="col-md-3">
													<div class="user-activity">
														<span>
															<?php echo $this->Html->image('profiles/avatar-19.jpg', [
																'alt' => 'Image'
															]); ?>
														</span>
														<h6>Darlee Robertson</h6>
													</div>
												</div>
												<div class="col-md-4">
													<div class="mb-0">
														<select class="select">
															<option>Inprogress</option>
															<option>Completed</option>
															<option>Cancelled</option>
														</select>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="row align-items-center">
												<div class="col-md-5">
													<div class="activity-name">
														<h5>Regarding latest updates in project </h5>
														<p>Due date : 29 Sep 2023, 08:20 am</p>
														<span class="badge activity-badge bg-warning"><i
																class="ti ti-mail"></i>Email</span>
													</div>
												</div>
												<div class="col-md-3">
													<div class="user-activity">
														<span>
															<?php echo $this->Html->image('profiles/avatar-22.jpg', [
																'alt' => 'Image'
															]); ?>
														</span>
														<h6>Dawn Mercha</h6>
													</div>
												</div>
												<div class="col-md-4">
													<div class="mb-0">
														<select class="select">
															<option>Inprogress</option>
															<option>Completed</option>
															<option>Cancelled</option>
														</select>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="row align-items-center">
												<div class="col-md-5">
													<div class="activity-name">
														<h5>Call John and discuss about project</h5>
														<p>Due date : 05 Oct 2023, 10:35 am</p>
														<span class="badge activity-badge bg-blue"><i
																class="ti ti-subtask"></i>Task</span>
													</div>
												</div>
												<div class="col-md-3">
													<div class="user-activity">
														<span>
															<?php echo $this->Html->image('profiles/avatar-16.jpg', [
																'alt' => 'Image'
															]); ?>
														</span>
														<h6>Carol Thomas</h6>
													</div>
												</div>
												<div class="col-md-4">
													<div class="mb-0">
														<select class="select">
															<option>Inprogress</option>
															<option>Completed</option>
															<option>Cancelled</option>
														</select>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="row align-items-center">
												<div class="col-md-5">
													<div class="activity-name">
														<h5>Discussed budget proposal with Edwin</h5>
														<p>Due date : 16 Oct 2023, 04:40 pm</p>
														<span class="badge activity-badge bg-green"><i
																class="ti ti-phone"></i>Calls</span>
													</div>
												</div>
												<div class="col-md-3">
													<div class="user-activity">
														<span>
															<?php echo $this->Html->image('profiles/avatar-20.jpg', [
																'alt' => 'Image'
															]); ?>
														</span>
														<h6>Sharon Roy</h6>
													</div>
												</div>
												<div class="col-md-4">
													<div class="mb-0">
														<select class="select">
															<option>Inprogress</option>
															<option>Completed</option>
															<option>Cancelled</option>
														</select>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Lost Leads Stage</h4>
									<div class="d-flex align-items-center flex-wrap row-gap-2">
										<div class="dropdown me-2">
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
										<a href="#" class="btn btn-primary" data-bs-toggle="offcanvas"
											data-bs-target="#offcanvas_add_2"><i
												class="ti ti-square-rounded-plus me-2"></i> Add Company</a>
									</div>
								</div>
							</div>
							<div class="card-body pt-0">
								<div id="last-chart"></div>
							</div>
						</div>
						<div class="card ">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Recently Created Leads</h4>
									<div class="d-flex align-items-center flex-wrap row-gap-2">
										<div class="dropdown me-2">
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
								<div class="table-responsive">
									<table class="table custom-table mb-0" id="analytic-lead">
										<thead>
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
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Recently Created Campaign</h4>
									<div class="d-flex align-items-center flex-wrap row-gap-2">
										<div class="dropdown me-2">
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
										<a href="#" class="btn btn-primary" data-bs-toggle="offcanvas"
											data-bs-target="#offcanvas_pipeline"><i
												class="ti ti-square-rounded-plus me-2"></i> Add Pipeline</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="campaign-card">
									<ul>
										<li class="campaign-wrap">
											<div class="campaign-info">
												<div class="campaign-name">
													<h5>Distribution</h5>
													<p>Public Relations</p>
												</div>
												<ul class="list-progress">
													<li>
														<h6>30.5%</h6>
														<p>Opened</p>
													</li>
													<li>
														<h6>20.5%</h6>
														<p>Closed</p>
													</li>
													<li>
														<h6>30.5%</h6>
														<p>Unsubscribe</p>
													</li>
													<li>
														<h6>70.5%</h6>
														<p>Delivered</p>
													</li>
													<li>
														<h6>35.0%</h6>
														<p>Conversation</p>
													</li>
												</ul>
											</div>
											<div class="campaign-action">
												<div class="campaign-date">
													<span class="badge badge-pill badge-status bg-danger">Bounced</span>
													<p>Due Date : 25 Sep 2023</p>
												</div>
												<ul class="project-mem">
													<li>
														<a href="#"><?php echo $this->Html->image('profiles/avatar-14.jpg', [
																		'alt' => 'Image'
																	]); ?></a>
													</li>
													<li>
														<a href="#"><?php echo $this->Html->image('profiles/avatar-15.jpg', [
																		'alt' => 'Image'
																	]); ?></a>
													</li>
													<li>
														<a href="#"><?php echo $this->Html->image('profiles/avatar-16.jpg', [
																		'alt' => 'Image'
																	]); ?></a>
													</li>
													<li class="more-set"><a href="#">+03</a></li>
												</ul>
											</div>
										</li>
										<li class="campaign-wrap">
											<div class="campaign-info">
												<div class="campaign-name">
													<h5>Pricing</h5>
													<p>Social Marketing</p>
												</div>
												<ul class="list-progress">
													<li>
														<h6>42.5%</h6>
														<p>Opened</p>
													</li>
													<li>
														<h6>38.2%</h6>
														<p>Closed</p>
													</li>
													<li>
														<h6>48.8%</h6>
														<p>Unsubscribe</p>
													</li>
													<li>
														<h6>62.7%</h6>
														<p>Delivered</p>
													</li>
													<li>
														<h6>22.5%</h6>
														<p>Conversation</p>
													</li>
												</ul>
											</div>
											<div class="campaign-action">
												<div class="campaign-date">
													<span class="badge badge-pill badge-status bg-green">Running</span>
													<p>Due Date : 14 Oct 2023</p>
												</div>
												<ul class="project-mem">
													<li>
														<a href="#"><?php echo $this->Html->image('profiles/avatar-14.jpg', [
																		'alt' => 'Image'
																	]); ?></a>
													</li>
													<li>
														<a href="#"><?php echo $this->Html->image('profiles/avatar-15.jpg', [
																		'alt' => 'Image'
																	]); ?></a>
													</li>
													<li>
														<a href="#"><?php echo $this->Html->image('profiles/avatar-16.jpg', [
																		'alt' => 'Image'
																	]); ?></a>
													</li>
													<li class="more-set"><a href="#">+04</a></li>
												</ul>
											</div>
										</li>
										<li class="campaign-wrap">
											<div class="campaign-info">
												<div class="campaign-name">
													<h5>Merchandising</h5>
													<p>Content Marketing</p>
												</div>
												<ul class="list-progress">
													<li>
														<h6>52.5%</h6>
														<p>Opened</p>
													</li>
													<li>
														<h6>29.3%</h6>
														<p>Closed</p>
													</li>
													<li>
														<h6>62.8%</h6>
														<p>Unsubscribe</p>
													</li>
													<li>
														<h6>71.3%</h6>
														<p>Delivered</p>
													</li>
													<li>
														<h6>39.5%</h6>
														<p>Conversation</p>
													</li>
												</ul>
											</div>
											<div class="campaign-action">
												<div class="campaign-date">
													<span class="badge badge-pill badge-status bg-info">Paused</span>
													<p>Due Date : 14 Oct 2023</p>
												</div>
												<ul class="project-mem">
													<li>
														<a href="#"><?php echo $this->Html->image('profiles/avatar-14.jpg', [
																		'alt' => 'Image'
																	]); ?></a>
													</li>
													<li>
														<a href="#"><?php echo $this->Html->image('profiles/avatar-15.jpg', [
																		'alt' => 'Image'
																	]); ?></a>
													</li>
													<li>
														<a href="#"><?php echo $this->Html->image('profiles/avatar-16.jpg', [
																		'alt' => 'Image'
																	]); ?></a>
													</li>
													<li class="more-set"><a href="#">+06</a></li>
												</ul>
											</div>
										</li>
										<li class="campaign-wrap">
											<div class="campaign-info">
												<div class="campaign-name">
													<h5>Repeat Customers</h5>
													<p>Rebranding</p>
												</div>
												<ul class="list-progress">
													<li>
														<h6>17.5%</h6>
														<p>Opened</p>
													</li>
													<li>
														<h6>49.5%</h6>
														<p>Closed</p>
													</li>
													<li>
														<h6>35.2%</h6>
														<p>Unsubscribe</p>
													</li>
													<li>
														<h6>54.8%</h6>
														<p>Delivered</p>
													</li>
													<li>
														<h6>60.5%</h6>
														<p>Conversation</p>
													</li>
												</ul>
											</div>
											<div class="campaign-action">
												<div class="campaign-date">
													<span
														class="badge badge-pill badge-status bg-success">Success</span>
													<p>Due Date : 29 Oct 2023</p>
												</div>
												<ul class="project-mem">
													<li>
														<a href="#"><?php echo $this->Html->image('profiles/avatar-14.jpg', [
																		'alt' => 'Image'
																	]); ?></a>
													</li>
													<li>
														<a href="#"><?php echo $this->Html->image('profiles/avatar-15.jpg', [
																		'alt' => 'Image'
																	]); ?></a>
													</li>
													<li>
														<a href="#"><?php echo $this->Html->image('profiles/avatar-16.jpg', [
																		'alt' => 'Image'
																	]); ?></a>
													</li>
													<li class="more-set"><a href="#">+02</a></li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Company -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add_2">
			<div class="offcanvas-header border-bottom">
				<h5 class="fw-semibold">Add New Company</h5>
				<button type="button"
					class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
					data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="companies">
					<div class="accordion" id="main_accordion">
						<!-- Basic Info -->
						<div class="accordion-item rounded mb-3">
							<div class="accordion-header">
								<a href="#"
									class="accordion-button accordion-custom-button bg-white rounded fw-medium text-dark"
									data-bs-toggle="collapse" data-bs-target="#basic">
									<span class="avatar avatar-md rounded text-dark border me-2"><i
											class="ti ti-user-plus fs-20"></i></span>
									Basic Info
								</a>
							</div>
							<div class="accordion-collapse collapse show" id="basic" data-bs-parent="#main_accordion">
								<div class="accordion-body border-top">
									<div class="row">
										<div class="col-md-12">
											<div class="mb-3">
												<div class="profile-upload">
													<div class="profile-upload-img">
														<span><i class="ti ti-photo"></i></span>
														<?php echo $this->Html->image('profiles/avatar-20.jpg', [
															'alt' => 'Image',
															'class' => 'preview1'
														]); ?>
														<button type="button" class="profile-remove">
															<i class="ti ti-x"></i>
														</button>
													</div>
													<div class="profile-upload-content">
														<label class="profile-upload-btn">
															<i class="ti ti-file-broken"></i> Upload File
															<input type="file" class="input-img">
														</label>
														<p>JPG, GIF or PNG. Max size of 800K</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<label class="col-form-label">Company Name</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<div class="d-flex justify-content-between align-items-center">
													<label class="col-form-label">Email <span
															class="text-danger">*</span></label>
													<div
														class="status-toggle small-toggle-btn d-flex align-items-center">
														<span class="me-2 label-text">Email Opt Out</span>
														<input type="checkbox" id="user" class="check" checked="">
														<label for="user" class="checktoggle"></label>
													</div>
												</div>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Phone 1 <span
														class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Phone 2</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Fax <span
														class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Website <span
														class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Ratings</label>
												<div class="icon-form-end">
													<span class="form-icon"><i class="ti ti-star"></i></span>
													<input type="text" class="form-control" placeholder="4.2">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="fmb-3">
												<label class="col-form-label">Owner</label>
												<select class="select-img">
													<option data-image="<?php echo $this->Url->image('profiles/avatar-14.jpg'); ?>" selected>
														Jerald
													</option>
													<option data-image="<?php echo $this->Url->image('profiles/avatar-15.jpg'); ?>">
														Guillory
													</option>
													<option data-image="<?php echo $this->Url->image('profiles/avatar-16.jpg'); ?>">
														Jami
													</option>
													<option data-image="<?php echo $this->Url->image('profiles/avatar-13.jpg'); ?>">
														Theresa
													</option>
													<option data-image="<?php echo $this->Url->image('profiles/avatar-24.jpg'); ?>">
														Espinosa
													</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Tags </label>
												<input class="input-tags form-control" type="text" data-role="tagsinput"
													name="Label" value="Collab">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<div class="d-flex align-items-center justify-content-between">
													<label class="col-form-label">Deals</label>
													<a href="#" class="label-add" data-bs-toggle="offcanvas"
														data-bs-target="#offcanvas_add_3"><i
															class="ti ti-square-rounded-plus"></i>Add New</a>
												</div>
												<select class="select2">
													<option>Choose</option>
													<option>Collins</option>
													<option>Konopelski</option>
													<option>Adams</option>
													<option>Schumm</option>
													<option>Wisozk</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Source <span
														class="text-danger">*</span></label>
												<select class="select2">
													<option>Choose</option>
													<option>Phone Calls</option>
													<option>Social Media</option>
													<option>Referral Sites</option>
													<option>Web Analytics</option>
													<option>Previous Purchases</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Industry <span
														class="text-danger">*</span></label>
												<select class="select">
													<option>Choose</option>
													<option>Retail Industry</option>
													<option>Banking</option>
													<option>Hotels</option>
													<option>Financial Services</option>
													<option>Insurance</option>
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<label class="col-form-label">Contacts</label>
												<select class="multiple-img" multiple="multiple">
													<option
														data-image="<?php echo $this->Url->image('profiles/avatar-19.jpg'); ?>"
														selected>
														Darlee Robertson
													</option>
													<option
														data-image="<?php echo $this->Url->image('profiles/avatar-20.jpg'); ?>">
														Sharon Roy
													</option>
													<option
														data-image="<?php echo $this->Url->image('profiles/avatar-21.jpg'); ?>">
														Vaughan
													</option>
													<option
														data-image="<?php echo $this->Url->image('profiles/avatar-23.jpg'); ?>">
														Jessica
													</option>
													<option
														data-image="<?php echo $this->Url->image('profiles/avatar-16.jpg'); ?>">
														Carol Thomas
													</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Currency <span
														class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Language <span
														class="text-danger">*</span></label>
												<select class="select">
													<option>Choose</option>
													<option>English</option>
													<option>Arabic</option>
													<option>Chinese</option>
													<option>Hindi</option>
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-0">
												<label class="col-form-label">Description <span
														class="text-danger">*</span></label>
												<textarea class="form-control" rows="5"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Basic Info -->

						<!-- Address Info -->
						<div class="accordion-item border-top rounded mb-3">
							<div class="accordion-header">
								<a href="#"
									class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark"
									data-bs-toggle="collapse" data-bs-target="#address">
									<span class="avatar avatar-md rounded text-dark border me-2"><i
											class="ti ti-map-pin-cog fs-20"></i></span>
									Address Info
								</a>
							</div>
							<div class="accordion-collapse collapse" id="address" data-bs-parent="#main_accordion">
								<div class="accordion-body border-top">
									<div class="row">
										<div class="col-md-12">
											<div class="mb-3">
												<label class="col-form-label">Street Address </label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">City </label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">State / Province </label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3 mb-md-0">
												<label class="col-form-label">Country</label>
												<select class="select">
													<option>Choose</option>
													<option>India</option>
													<option>USA</option>
													<option>France</option>
													<option>UK</option>
													<option>UAE</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-0">
												<label class="col-form-label">Zipcode </label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Address Info -->

						<!-- Social Profile -->
						<div class="accordion-item border-top rounded mb-3">
							<div class="accordion-header">
								<a href="#"
									class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark"
									data-bs-toggle="collapse" data-bs-target="#social">
									<span class="avatar avatar-md rounded text-dark border me-2"><i
											class="ti ti-social fs-20"></i></span>
									Social Profile
								</a>
							</div>
							<div class="accordion-collapse collapse" id="social" data-bs-parent="#main_accordion">
								<div class="accordion-body border-top">
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Facebook</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Skype </label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Linkedin </label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Twitter</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3 mb-md-0">
												<label class="col-form-label">Whatsapp</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-0">
												<label class="col-form-label">Instagram</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Social Profile -->

						<!-- Access -->
						<div class="accordion-item border-top rounded mb-3">
							<div class="accordion-header">
								<a href="#"
									class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark"
									data-bs-toggle="collapse" data-bs-target="#access-info">
									<span class="avatar avatar-md rounded text-dark border me-2"><i
											class="ti ti-accessible fs-20"></i></span>
									Access
								</a>
							</div>
							<div class="accordion-collapse collapse" id="access-info" data-bs-parent="#main_accordion">
								<div class="accordion-body border-top">
									<div class="row">
										<div class="col-md-12">
											<div class="mb-3">
												<label class="col-form-label">Visibility</label>
												<div class="d-flex flex-wrap">
													<div class="me-2">
														<input type="radio" class="status-radio" id="public"
															name="visible">
														<label for="public">Public</label>
													</div>
													<div class="me-2">
														<input type="radio" class="status-radio" id="private"
															name="visible">
														<label for="private">Private</label>
													</div>
													<div data-bs-toggle="modal" data-bs-target="#access_view">
														<input type="radio" class="status-radio" id="people"
															name="visible">
														<label for="people">Select People</label>
													</div>
												</div>
											</div>
											<div class="mb-0">
												<label class="col-form-label">Status</label>
												<div class="d-flex flex-wrap">
													<div class="me-2">
														<input type="radio" class="status-radio" id="active"
															name="status" checked="">
														<label for="active">Active</label>
													</div>
													<div>
														<input type="radio" class="status-radio" id="inactive"
															name="status">
														<label for="inactive">Inactive</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Access -->
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
						<button type="button" class="btn btn-primary">Create</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Add Company -->

		<!-- Add New Pipeline -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_pipeline">
			<div class="offcanvas-header border-bottom">
				<h4>Add New Pipeline</h4>
				<button type="button"
					class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
					data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="pipeline">
					<div>
						<div class="mb-3">
							<label class="col-form-label">Pipeline Name <span class="text-danger">*</span></label>
							<input class="form-control" type="text">
						</div>
						<div class="mb-3">
							<div class="pipe-title d-flex align-items-center justify-content-between">
								<h5 class="form-title">Pipeline Stages</h5>
								<a href="#" class="add-stage" data-bs-toggle="modal" data-bs-target="#add_stage"><i
										class="ti ti-square-rounded-plus"></i>Add New</a>
							</div>
							<div class="pipeline-listing">
								<div class="pipeline-item">
									<p><i class="ti ti-grip-vertical"></i> Inpipeline</p>
									<div class="action-pipeline">
										<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i
												class="ti ti-edit text-blue"></i>Edit</a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i
												class="ti ti-trash text-danger"></i>Delete</a>
									</div>
								</div>
								<div class="pipeline-item">
									<p><i class="ti ti-grip-vertical"></i> Follow Up</p>
									<div class="action-pipeline">
										<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i
												class="ti ti-edit text-blue"></i>Edit</a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i
												class="ti ti-trash text-danger"></i>Delete</a>
									</div>
								</div>
								<div class="pipeline-item">
									<p><i class="ti ti-grip-vertical"></i> Schedule Service</p>
									<div class="action-pipeline">
										<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i
												class="ti ti-edit text-blue"></i>Edit</a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i
												class="ti ti-trash text-danger"></i>Delete</a>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-3">
							<h5 class="form-title">Access</h5>
							<div class="d-flex flex-wrap access-item nav">
								<div class="radio-btn" data-bs-toggle="tab" data-bs-target="#all">
									<input type="radio" class="status-radio" id="all" name="status" checked="">
									<label for="all">All</label>
								</div>
								<div class="radio-btn" data-bs-toggle="tab" data-bs-target="#select-person">
									<input type="radio" class="status-radio" id="select" name="status">
									<label for="select">Select Person</label>
								</div>
							</div>
							<div class="tab-content">
								<div class="tab-pane fade" id="select-person">
									<div class="access-wrapper">
										<div class="access-view">
											<div class="access-img">
												<?php echo $this->Html->image('profiles/avatar-21.jpg', [
													'alt' => 'Image'
												]); ?>Vaughan
											</div>
											<a href="#">Remove</a>
										</div>
										<div class="access-view">
											<div class="access-img">
												<?php echo $this->Html->image('profiles/avatar-01.jpg', [
													'alt' => 'Image'
												]); ?>Jessica
											</div>
											<a href="#">Remove</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
						<button type="button" class="btn btn-primary">Create</button>
					</div>
				</form>
			</div>

		</div>
		<!-- /Add New Pipeline -->

		<!-- Add New Activity -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
			<div class="offcanvas-header border-bottom">
				<h4>Add New Activity </h4>
				<button type="button"
					class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
					data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="invoices">
					<div>
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Title <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Activity Type <span
											class="text-danger">*</span></label>
									<ul class="radio-activity">
										<li>
											<div class="active-type">
												<input type="radio" id="call" name="status" checked="">
												<label for="call"><i class="ti ti-phone"></i>Calls</label>
											</div>
										</li>
										<li>
											<div class="active-type">
												<input type="radio" id="mail" name="status">
												<label for="mail"><i class="ti ti-mail"></i>Email</label>
											</div>
										</li>
										<li>
											<div class="active-type">
												<input type="radio" id="task" name="status">
												<label for="task"><i class="ti ti-subtask"></i>Task</label>
											</div>
										</li>
										<li>
											<div class="active-type">
												<input type="radio" id="shares" name="status">
												<label for="shares"><i class="ti ti-user-share"></i>Meeting</label>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
								<div class="mb-3 icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker">
								</div>
							</div>
							<div class="col-md-6">
								<label class="col-form-label">Time <span class="text-danger">*</span></label>
								<div class="mb-3 icon-form">
									<span class="form-icon"><i class="ti ti-clock-hour-10"></i></span>
									<input type="text" class="form-control datetimepicker-time">
								</div>
							</div>
							<div class="col-md-6">
								<label class="col-form-label">Reminder <span class="text-danger">*</span></label>
								<div class="mb-3 icon-form">
									<span class="form-icon"><i class="ti ti-bell-ringing"></i></span>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="d-flex align-items-center">
									<div class="mb-3 w-100">
										<label class="col-form-label">&nbsp;</label>
										<select class="select">
											<option>Select</option>
											<option>Minutes</option>
											<option>Hours</option>
										</select>
									</div>
									<div class="mb-3 time-text">
										<label class="col-form-label">&nbsp;</label>
										<p>Before Due</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Owner <span class="text-danger">*</span></label>
									<select class="select">
										<option>Select</option>
										<option>Hendry</option>
										<option>Bradtke</option>
										<option>Sally</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Guests <span class="text-danger">*</span></label>
									<select class="multiple-img" multiple="multiple">
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-19.jpg'); ?>"
											selected>
											Darlee Robertson
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-20.jpg'); ?>">
											Sharon Roy
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-21.jpg'); ?>">
											Vaughan
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-23.jpg'); ?>">
											Jessica
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-16.jpg'); ?>">
											Carol Thomas
										</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Description <span class="text-danger">*</span></label>
									<div class="summernote"></div>
								</div>
								<div class="mb-3">
									<div class="d-flex align-items-center justify-content-between">
										<label class="col-form-label">Deals</label>
										<a href="#" class="label-add" data-bs-toggle="modal"
											data-bs-target="#add_deal"><i class="ti ti-square-rounded-plus"></i>Add
											New</a>
									</div>
									<select class="select">
										<option>Select</option>
										<option>Collins</option>
										<option>Konopelski </option>
										<option>Adams</option>
									</select>
								</div>
								<div class="mb-3">
									<div class="d-flex align-items-center justify-content-between">
										<label class="col-form-label">Contacts</label>
										<a href="#" class="label-add" data-bs-toggle="modal"
											data-bs-target="#add_contacts"><i class="ti ti-square-rounded-plus"></i>Add
											New</a>
									</div>
									<select class="select">
										<option>Select</option>
										<option>Collins</option>
										<option>Konopelski </option>
										<option>Adams</option>
									</select>
								</div>
								<div class="mb-3">
									<div class="d-flex align-items-center justify-content-between">
										<label class="col-form-label">Companies</label>
										<a href="#" class="label-add" data-bs-toggle="modal"
											data-bs-target="#add_company"><i class="ti ti-square-rounded-plus"></i>Add
											New</a>
									</div>
									<select class="select">
										<option>Select</option>
										<option>NovaWave LLC</option>
										<option>Silver Hawk</option>
										<option>Harbor View</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
						<button type="button" class="btn btn-primary">Create</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Add New Activity -->

		<!-- Add Deals -->
		<div class="modal custom-modal fade" id="add_deal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Deals</h5>
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="activity_calls">
							<div class="mb-2 icon-form">
								<span class="form-icon"><i class="ti ti-search"></i></span>
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<div class="access-wrap">
								<ul>
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">
											<span class="checkmarks"></span>
											<span class="people-profile">
												<a href="#">Collins</a>
											</span>
										</label>
									</li>
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">
											<span class="checkmarks"></span>
											<span class="people-profile">
												<a href="#">Konopelski</a>
											</span>
										</label>
									</li>
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">
											<span class="checkmarks"></span>
											<span class="people-profile">
												<a href="#">Adams</a>
											</span>
										</label>
									</li>
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">
											<span class="checkmarks"></span>
											<span class="people-profile">
												<a href="#">Schumm</a>
											</span>
										</label>
									</li>
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">
											<span class="checkmarks"></span>
											<span class="people-profile">
												<a href="#">Wisozk</a>
											</span>
										</label>
									</li>
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">
											<span class="checkmarks"></span>
											<span class="people-profile">
												<a href="#">Dawn Mercha</a>
											</span>
										</label>
									</li>
								</ul>
							</div>
							<div class="modal-btn text-end">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Confirm</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Deals -->

		<!-- Add Contacts -->
		<div class="modal custom-modal fade" id="add_contacts" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Contacts</h5>
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="activities">
							<div class="mb-2 icon-form">
								<span class="form-icon"><i class="ti ti-search"></i></span>
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<div class="access-wrap">
								<ul>
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">
											<span class="checkmarks"></span>
											<span class="people-profile">
												<?php echo $this->Html->image('profiles/avatar-19.jpg', [
													'alt' => 'Image'
												]); ?>
												<a href="#">Darlee Robertson</a>
											</span>
										</label>
									</li>
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">
											<span class="checkmarks"></span>
											<span class="people-profile">
												<?php echo $this->Html->image('profiles/avatar-20.jpg', [
													'alt' => 'Image'
												]); ?>
												<a href="#">Sharon Roy</a>
											</span>
										</label>
									</li>
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">
											<span class="checkmarks"></span>
											<span class="people-profile">
												<?php echo $this->Html->image('profiles/avatar-21.jpg', [
													'alt' => 'Image'
												]); ?>
												<a href="#">Vaughan</a>
											</span>
										</label>
									</li>
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">
											<span class="checkmarks"></span>
											<span class="people-profile">
												<?php echo $this->Html->image('profiles/avatar-01.jpg', [
													'alt' => 'Image'
												]); ?>
												<a href="#">Jessica</a>
											</span>
										</label>
									</li>
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">
											<span class="checkmarks"></span>
											<span class="people-profile">
												<?php echo $this->Html->image('profiles/avatar-16.jpg', [
													'alt' => 'Image'
												]); ?>
												<a href="#">Carol Thomas</a>
											</span>
										</label>
									</li>
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">
											<span class="checkmarks"></span>
											<span class="people-profile">
												<?php echo $this->Html->image('profiles/avatar-22.jpg', [
													'alt' => 'Image'
												]); ?>
												<a href="#">Dawn Mercha</a>
											</span>
										</label>
									</li>
								</ul>
							</div>
							<div class="modal-btn text-end">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Confirm</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Contacts -->

		<!-- Add Company -->
		<div class="modal custom-modal fade" id="add_company" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Company</h5>
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="activities">
							<div class="mb-2 icon-form">
								<span class="form-icon"><i class="ti ti-search"></i></span>
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<div class="access-wrap">
								<ul>
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">
											<span class="checkmarks"></span>
											<span class="people-profile">
												<?php echo $this->Html->image('icons/company-icon-01.svg', [
													'alt' => 'Image'
												]); ?>
												<a href="#">NovaWave LLC</a>
											</span>
										</label>
									</li>
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">
											<span class="checkmarks"></span>
											<span class="people-profile">
												<?php echo $this->Html->image('icons/company-icon-02.svg', [
													'alt' => 'Image'
												]); ?>
												<a href="#">BlueSky Industries</a>
											</span>
										</label>
									</li>
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">
											<span class="checkmarks"></span>
											<span class="people-profile">
												<?php echo $this->Html->image('icons/company-icon-03.svg', [
													'alt' => 'Image'
												]); ?>
												<a href="#">Silver Hawk</a>
											</span>
										</label>
									</li>
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">
											<span class="checkmarks"></span>
											<span class="people-profile">
												<?php echo $this->Html->image('icons/company-icon-04.svg', [
													'alt' => 'Image'
												]); ?>
												<a href="#">Summit Peak</a>
											</span>
										</label>
									</li>
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">
											<span class="checkmarks"></span>
											<span class="people-profile">
												<?php echo $this->Html->image('icons/company-icon-05.svg', [
													'alt' => 'Image'
												]); ?>
												<a href="#">RiverStone Ventur</a>
											</span>
										</label>
									</li>
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">
											<span class="checkmarks"></span>
											<span class="people-profile">
												<?php echo $this->Html->image('icons/company-icon-06.svg', [
													'alt' => 'Image'
												]); ?>
												<a href="#">Bright Bridge Grp</a>
											</span>
										</label>
									</li>
								</ul>
							</div>
							<div class="modal-btn text-end">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Confirm</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Company -->

		<!-- Add New Deals -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add_3">
			<div class="offcanvas-header border-bottom">
				<h5 class="fw-semibold">Add New Deals</h5>
				<button type="button"
					class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
					data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="contacts">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Deal Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<div class="d-flex align-items-center justify-content-between">
									<label class="col-form-label">Pipeine <span class="text-danger">*</span></label>
								</div>
								<select class="select2">
									<option>Choose</option>
									<option>Sales</option>
									<option>Marketing</option>
									<option>Calls</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Status <span class="text-danger">*</span></label>
								<select class="select2">
									<option>Choose</option>
									<option>Open</option>
									<option>Lost</option>
									<option>Won</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Deal Value<span class="text-danger"> *</span></label>
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Currency <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>$</option>
									<option>€</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Period <span class="text-danger">*</span></label>
								<select class="select">
									<option>Choose</option>
									<option>Days</option>
									<option>Month</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Period Value <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Contact <span class="text-danger">*</span></label>
								<select class="multiple-img" multiple="multiple">
									<option
										data-image="<?php echo $this->Url->image('profiles/avatar-19.jpg'); ?>"
										selected>
										Darlee Robertson
									</option>
									<option
										data-image="<?php echo $this->Url->image('profiles/avatar-20.jpg'); ?>">
										Sharon Roy
									</option>
									<option
										data-image="<?php echo $this->Url->image('profiles/avatar-21.jpg'); ?>">
										Vaughan
									</option>
									<option
										data-image="<?php echo $this->Url->image('profiles/avatar-23.jpg'); ?>">
										Jessica
									</option>
									<option
										data-image="<?php echo $this->Url->image('profiles/avatar-16.jpg'); ?>">
										Carol Thomas
									</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="col-form-label">Project <span class="text-danger">*</span></label>
								<select class="select" multiple="multiple">
									<option selected>Devops Design</option>
									<option selected>MargrateDesign</option>
									<option selected>UI for Chat</option>
									<option>Web Chat</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Expected Closing Date <span
										class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Assignee <span class="text-danger">*</span></label>
								<select class="multiple-img" multiple="multiple">
									<option
										data-image="<?php echo $this->Url->image('profiles/avatar-19.jpg'); ?>"
										selected>
										Darlee Robertson
									</option>
									<option
										data-image="<?php echo $this->Url->image('profiles/avatar-20.jpg'); ?>">
										Sharon Roy
									</option>
									<option
										data-image="<?php echo $this->Url->image('profiles/avatar-21.jpg'); ?>">
										Vaughan
									</option>
									<option
										data-image="<?php echo $this->Url->image('profiles/avatar-23.jpg'); ?>">
										Jessica
									</option>
									<option
										data-image="<?php echo $this->Url->image('profiles/avatar-16.jpg'); ?>">
										Carol Thomas
									</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Follow Up Date <span class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Source <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Google</option>
									<option>Social Media</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Tags <span class="text-danger">*</span></label>
								<input class="input-tags form-control" type="text" data-role="tagsinput" name="Label"
									value="Collab, Rated">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Priority <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Highy</option>
									<option>Low</option>
									<option>Medium</option>
								</select>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="mb-3">
								<label class="col-form-label">Description <span class="text-danger">*</span></label>
								<div class="summernote"></div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal"
							data-bs-target="#create_success">Create</button>
					</div>
				</form>
			</div>

		</div>
		<!-- /Add New Deals -->

		<!-- Add New Stage -->
		<div class="modal custom-modal fade" id="add_stage" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add New Stage</h5>
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="deals_details">
							<div class="mb-3">
								<label class="col-form-label">Stage Name *</label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-btn text-end">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-danger">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add New Stage -->

		<!-- Edit Stage -->
		<div class="modal custom-modal fade" id="edit_stage" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Stage</h5>
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="deals_details">
							<div class="mb-3">
								<label class="col-form-label">Stage Name *</label>
								<input type="text" class="form-control" value="Inpipeline">
							</div>
							<div class="modal-btn text-end">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-danger">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Stage -->

		<!-- Delete Stage -->
		<div class="modal fade" id="delete_stage" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center">
							<div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
								<i class="ti ti-trash-x fs-36 text-danger"></i>
							</div>
							<h4 class="mb-2">Remove Stage?</h4>
							<p class="mb-0">Are you sure you want to remove <br> stage you selected.</p>
							<div class="d-flex align-items-center justify-content-center mt-4">
								<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="contacts" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Stage -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->element('vendor-scripts') ?>

	<!-- Apexchart JS -->
	<?php echo $this->Html->script('plugins/apexchart/apexcharts.min.js') ?>
	<?php echo $this->Html->script('plugins/apexchart/chart-data.js') ?>

	<!-- Summernote JS -->
	<?php echo $this->Html->script('plugins/summernote/summernote-lite.min.js') ?>

</body>

</html>