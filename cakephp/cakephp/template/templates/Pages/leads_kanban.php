<!DOCTYPE html>
<html lang="en">

<head>

	<?= $this->element('title-meta') ?>

	<!-- Title -->
	<title>Leads Kanban | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>

	<!-- Bootstrap Tagsinput CSS -->
	<?php echo $this->Html->css('plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') ?>

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
									<h4 class="page-title">Leads<span class="count-title">123</span></h4>
								</div>
								<div class="col-8 text-end">
									<div class="head-icons">
										<a href="leads_kanban" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Refresh">
											<i class="ti ti-refresh-dot"></i>
										</a>
										<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Collapse" id="collapse-header">
											<i class="ti ti-chevrons-up"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

						<!-- Filter -->
						<div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 mb-4">
							<div class="d-flex align-items-center flex-wrap row-gap-2">
								<div class="form-sorts dropdown me-2">
									<a href="javascript:void(0);" data-bs-toggle="dropdown"
										data-bs-auto-close="outside"><i class="ti ti-filter-share"></i>Filter</a>
									<div class="filter-dropdown-menu dropdown-menu dropdown-menu-start">
										<div class="filter-set-view">
											<div class="filter-set-head">
												<h4><i class="ti ti-filter-share"></i>Filter</h4>
											</div>
											<div class="accordion" id="accordionExample">
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" data-bs-toggle="collapse"
															data-bs-target="#collapseTwo" aria-expanded="true"
															aria-controls="collapseTwo">Lead Name</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse show"
														id="collapseTwo" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked>
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>Collins</h5>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>Konopelski</h5>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>Adams</h5>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>Schumm</h5>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>Wisozk</h5>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>Heller</h5>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>Gutkowski</h5>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>Walter</h5>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" class="collapsed" data-bs-toggle="collapse"
															data-bs-target="#company" aria-expanded="false"
															aria-controls="company">Company Name</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse"
														id="company" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
															<div class="mb-2 icon-form">
																<span class="form-icon"><i
																		class="ti ti-search"></i></span>
																<input type="text" class="form-control"
																	placeholder="Search Company">
															</div>
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked>
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>NovaWave LLC</h5>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>BlueSky Industries</h5>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>Silver Hawk</h5>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>Summit Peak</h5>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>RiverStone Ventur</h5>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" class="collapsed" data-bs-toggle="collapse"
															data-bs-target="#Status" aria-expanded="false"
															aria-controls="Status">Lead Status</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse"
														id="Status" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked>
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>Closed</h5>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>Not Contacted</h5>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>Contacted</h5>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" class="collapsed" data-bs-toggle="collapse"
															data-bs-target="#date" aria-expanded="false"
															aria-controls="date">Created Date</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse"
														id="date" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked>
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>25 Sep 2023, 01:22 pm</h5>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>29 Sep 2023, 04:15 pm</h5>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>04 Oct 2023, 10:18 am</h5>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" class="collapsed" data-bs-toggle="collapse"
															data-bs-target="#owner" aria-expanded="false"
															aria-controls="owner">Lead Owner</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse"
														id="owner" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
															<div class="mb-2 icon-form">
																<span class="form-icon"><i
																		class="ti ti-search"></i></span>
																<input type="text" class="form-control"
																	placeholder="Search Owner">
															</div>
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked>
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>Hendry</h5>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>Guillory</h5>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>Jami</h5>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>Theresa</h5>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</div>
																	<div class="collapse-inside-text">
																		<h5>Espinosa</h5>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>

											</div>
											<div class="filter-reset-btns">
												<div class="row">
													<div class="col-6">
														<a href="#" class="btn btn-light">Reset</a>
													</div>
													<div class="col-6">
														<a href="leads" class="btn btn-primary">Filter</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-search"></i></span>
									<input type="text" class="form-control" placeholder="Search Leads">
								</div>
							</div>
							<div>
								<ul class="d-flex align-items-center">
									<li>
										<div class="view-icons me-2">
											<a href="leads"><i class="ti ti-list-tree"></i></a>
											<a href="leads_kanban" class="active"><i
													class="ti ti-grid-dots"></i></a>
										</div>
									</li>
									<li>
										<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas"
											data-bs-target="#offcanvas_add"><i
												class="ti ti-square-rounded-plus me-2"></i>Add Leads</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /Filter -->

						<!-- Leads Kanban -->
						<div class="d-flex overflow-x-auto align-items-start mb-4">
							<div class="kanban-list-items">
								<div class="card mb-0">
									<div class="card-body">
										<div class="d-flex justify-content-between align-items-center">
											<div>
												<h4 class="fw-semibold d-flex align-items-center mb-1"><i
														class="ti ti-circle-filled fs-8 text-warning me-2"></i>Contacted
												</h4>
												<span class="fw-medium text-default">45 Leads - $15,44,540</span>
											</div>
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="text-purple"><i
														class="ti ti-plus"></i></a>
												<div class="dropdown table-action ms-2">
													<a href="#" class="action-icon dropdown-toggle bg-white"
														data-bs-toggle="dropdown" aria-expanded="false"><i
															class="fa fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
															data-bs-target="#offcanvas_edit"><i
																class="fa-solid fa-pencil text-blue"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal"
															data-bs-target="#delete_lead"><i
																class="fa-regular fa-trash-can text-danger"></i>
															Delete</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="kanban-drag-wrap pt-4">
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-warning border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="leads_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">SM</span></a>
														<h6 class="fw-medium"><a href="leads_details">Schumm</a>
														</h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$03,50,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														darleeo@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 12445-47878
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Newyork, United States
													</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span
														class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center">
														<?php echo $this->Html->image('icons/company-icon-09.svg', [
															'alt' => 'Image',
															'class' => 'w-auto h-auto'
														]); ?></span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-success border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="leads_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">CS</span></a>
														<h6 class="fw-medium"><a href="leads_details">Collins</a>
														</h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$02,10,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														robertson@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 13987-90231
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Austin, United States
													</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span
														class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center">
														<?php echo $this->Html->image('icons/company-icon-01.svg', [
															'alt' => 'Image',
															'class' => 'w-auto h-auto'
														]); ?>
													</span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-danger border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="leads_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">KI</span></a>
														<h6 class="fw-medium"><a
																href="leads_details">Konopelski</a></h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$02,18,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														sharon@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 17932-04278
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Atlanta, United States
													</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span
														class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center">
														<?php echo $this->Html->image('icons/company-icon-02.svg', [
															'alt' => 'Image',
															'class' => 'w-auto h-auto'
														]); ?></span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kanban-list-items">
								<div class="card mb-0">
									<div class="card-body">
										<div class="d-flex justify-content-between align-items-center">
											<div>
												<h4 class="fw-semibold d-flex align-items-center mb-1"><i
														class="ti ti-circle-filled fs-8 text-purple me-2"></i>Not
													Contacted</h4>
												<span class="fw-medium text-default">45 Leads - $15,44,540</span>
											</div>
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="text-purple"><i
														class="ti ti-plus"></i></a>
												<div class="dropdown table-action ms-2">
													<a href="#" class="action-icon dropdown-toggle bg-white"
														data-bs-toggle="dropdown" aria-expanded="false"><i
															class="fa fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
															data-bs-target="#offcanvas_edit"><i
																class="fa-solid fa-pencil text-blue"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal"
															data-bs-target="#delete_lead"><i
																class="fa-regular fa-trash-can text-danger"></i>
															Delete</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="kanban-drag-wrap pt-4">
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-purple border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="leads_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">AS</span></a>
														<h6 class="fw-medium"><a href="leads_details">Adams</a>
														</h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$02,45,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														vaughan12@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 17392-27846
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														London, United Kingdom
													</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span
														class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center">
														<?php echo $this->Html->image('icons/company-icon-03.svg', [
															'alt' => 'Image',
															'class' => 'w-auto h-auto'
														]); ?></span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-warning border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="leads_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">WK</span></a>
														<h6 class="fw-medium"><a href="leads_details">Wizosk</a>
														</h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$01,17,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														caroltho3@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 78982-09163
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Bristol, United Kingdom
													</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span
														class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center">
														<?php echo $this->Html->image('icons/company-icon-04.svg', [
															'alt' => 'Image',
															'class' => 'w-auto h-auto'
														]); ?></span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-success border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="leads_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">HR</span></a>
														<h6 class="fw-medium"><a href="leads_details">Heller</a>
														</h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$02,12,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														dawnmercha@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 27691-89246
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														San Francisco, United States
													</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span
														class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center">
														<?php echo $this->Html->image('icons/company-icon-05.svg', [
															'alt' => 'Image',
															'class' => 'w-auto h-auto'
														]); ?></span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kanban-list-items">
								<div class="card mb-0">
									<div class="card-body">
										<div class="d-flex justify-content-between align-items-center">
											<div>
												<h4 class="fw-semibold d-flex align-items-center mb-1"><i
														class="ti ti-circle-filled fs-8 text-success me-2"></i>Closed
												</h4>
												<span class="fw-medium text-default">45 Leads - $15,44,540</span>
											</div>
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="text-purple"><i
														class="ti ti-plus"></i></a>
												<div class="dropdown table-action ms-2">
													<a href="#" class="action-icon dropdown-toggle bg-white"
														data-bs-toggle="dropdown" aria-expanded="false"><i
															class="fa fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item " href="#" data-bs-toggle="offcanvas"
															data-bs-target="#offcanvas_edit"><i
																class="fa-solid fa-pencil text-blue"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal"
															data-bs-target="#delete_lead"><i
																class="fa-regular fa-trash-can text-danger"></i>
															Delete</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="kanban-drag-wrap pt-4">
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-success border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="leads_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">GI</span></a>
														<h6 class="fw-medium"><a href="leads_details">Gutkowsi</a>
														</h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$01,84,043
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														rachel@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 17839-93617
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Dallas, United States
													</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span
														class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center">
														<?php echo $this->Html->image('icons/company-icon-06.svg', [
															'alt' => 'Image',
															'class' => 'w-auto h-auto'
														]); ?></span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-danger border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="leads_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">WR</span></a>
														<h6 class="fw-medium"><a href="leads_details">Walter</a>
														</h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$09,35,189
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														jonelle@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 16739-47193
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Leicester, United Kingdom
													</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span
														class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center">
														<?php echo $this->Html->image('icons/company-icon-07.svg', [
															'alt' => 'Image',
															'class' => 'w-auto h-auto'
														]); ?></span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-purple border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="leads_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">HN</span></a>
														<h6 class="fw-medium"><a href="leads_details">Hansen</a>
														</h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$04,27,940
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														jonathan@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 18390-37153
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Norwich, United Kingdom
													</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span
														class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center">
														<?php echo $this->Html->image('icons/company-icon-08.svg', [
															'alt' => 'Image',
															'class' => 'w-auto h-auto'
														]); ?></span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kanban-list-items">
								<div class="card mb-0">
									<div class="card-body">
										<div class="d-flex justify-content-between align-items-center">
											<div>
												<h4 class="fw-semibold d-flex align-items-center mb-1"><i
														class="ti ti-circle-filled fs-8 text-danger me-2"></i>Lost</h4>
												<span class="fw-medium text-default">15 Leads - $14,89,543</span>
											</div>
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="text-purple"><i
														class="ti ti-plus"></i></a>
												<div class="dropdown table-action ms-2">
													<a href="#" class="action-icon dropdown-toggle bg-white"
														data-bs-toggle="dropdown" aria-expanded="false"><i
															class="fa fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item " href="#" data-bs-toggle="offcanvas"
															data-bs-target="#offcanvas_edit"><i
																class="fa-solid fa-pencil text-blue"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal"
															data-bs-target="#delete_lead"><i
																class="fa-regular fa-trash-can text-danger"></i>
															Delete</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="kanban-drag-wrap pt-4">
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-danger border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="leads_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">SE</span></a>
														<h6 class="fw-medium"><a href="leads_details">Steve</a>
														</h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$04,17,593
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														sidney@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 11739-38135
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Manchester, United Kingdom
													</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span
														class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center">
														<?php echo $this->Html->image('icons/company-icon-09.svg', [
															'alt' => 'Image',
															'class' => 'w-auto h-auto'
														]); ?></span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-success border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="leads_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">LE</span></a>
														<h6 class="fw-medium"><a href="leads_details">Leuschke</a>
														</h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$08,81,389
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														brook@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 19302-91043
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Chicago, United States
													</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span
														class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center">
														<?php echo $this->Html->image('icons/company-icon-10.svg', [
															'alt' => 'Image',
															'class' => 'w-auto h-auto'
														]); ?></span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-warning border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="leads_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">AY</span></a>
														<h6 class="fw-medium"><a href="leads_details">Anthony</a>
														</h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$09,27,193
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														mickey@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 17280-92016
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Derby, United Kingdom
													</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span
														class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center">
														<?php echo $this->Html->image('icons/company-icon-01.svg', [
															'alt' => 'Image',
															'class' => 'w-auto h-auto'
														]); ?></span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Leads Kanban -->

					</div>
				</div>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Lead -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
			<div class="offcanvas-header border-bottom">
				<h5 class="fw-semibold">Add New Lead</h5>
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
								<label class="col-form-label">Lead Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<div class="radio-wrap">
									<label class="col-form-label">Lead Type</label>
									<div class="d-flex flex-wrap">
										<div class="me-2">
											<input type="radio" class="status-radio" id="person" name="leave" checked>
											<label for="person">Person</label>
										</div>
										<div>
											<input type="radio" class="status-radio" id="Organization" name="leave">
											<label for="Organization">Organization</label>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<div class="d-flex justify-content-between align-items-center">
									<label class="col-form-label">Company Name</label>
									<a href="" class="label-add " data-bs-toggle="offcanvas"
										data-bs-target="#offcanvas_add_2">
										<i class="ti ti-square-rounded-plus"></i>
										Add New
									</a>
								</div>
								<select class="select">
									<option>Choose</option>
									<option>NovaWave LLC</option>
									<option>Silver Hawk</option>
									<option>Summit Peak</option>
									<option>RiverStone Ventur</option>
									<option>Insurance</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Value<span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Currency <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>$</option>
									<option>€</option>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="row align-items-end">
								<div class="col-md-8">
									<div class="mb-3">
										<label class="col-form-label">Phone<span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="mb-3 d-flex align-items-center mt-4">
										<select class="select2">
											<option>Choose</option>
											<option>Work</option>
											<option>Home</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Source <span class="text-danger">*</span></label>
								<select class="select">
									<option>Choose</option>
									<option>Phone calls</option>
									<option>Social Media</option>
									<option>Referral sites</option>
									<option>Web Analytics</option>
									<option>Previous Purchase</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Industry <span class="text-danger">*</span></label>
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
						<div class="col-md-6">
							<div class="mb-3">
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
								<input class="input-tags form-control" type="text" data-role="tagsinput" name="Label"
									value="Rated">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Description <span class="text-danger">*</span></label>
								<textarea class="form-control" rows="5"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Visibility</label>
								<div class="d-flex flex-wrap">
									<div class="me-2">
										<input type="radio" class="status-radio" id="public" name="visible">
										<label for="public">Public</label>
									</div>
									<div class="me-2">
										<input type="radio" class="status-radio" id="private" name="visible">
										<label for="private">Private</label>
									</div>
									<div data-bs-toggle="modal" data-bs-target="#access_view">
										<input type="radio" class="status-radio" id="people" name="visible">
										<label for="people">Select People</label>
									</div>
								</div>
							</div>
							<div class="mb-0">
								<label class="col-form-label">Status</label>
								<div class="d-flex flex-wrap">
									<div class="me-2">
										<input type="radio" class="status-radio" id="active" name="status" checked="">
										<label for="active">Active</label>
									</div>
									<div>
										<input type="radio" class="status-radio" id="inactive" name="status">
										<label for="inactive">Inactive</label>
									</div>
								</div>
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
		<!-- /Add Lead -->

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
															'alt' => 'img',
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
						<button type="button" class="btn btn-primary" data-bs-toggle="modal"
							data-bs-target="#create_success_2">Create</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Add Company -->

		<!-- Edit Lead -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
			<div class="offcanvas-header border-bottom">
				<h5 class="fw-semibold">Edit Lead</h5>
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
								<label class="col-form-label">Lead Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Collins">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<div class="radio-wrap">
									<label class="col-form-label">Lead Type</label>
									<div class="d-flex flex-wrap">
										<div class="me-2">
											<input type="radio" class="status-radio" id="person" name="leave" checked>
											<label for="person">Person</label>
										</div>
										<div>
											<input type="radio" class="status-radio" id="Organization" name="leave">
											<label for="Organization">Organization</label>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<div class="d-flex justify-content-between align-items-center">
									<label class="col-form-label">Company Name</label>
									<a href="" class="label-add " data-bs-toggle="offcanvas"
										data-bs-target="#offcanvas_add_2">
										<i class="ti ti-square-rounded-plus"></i>
										Add New
									</a>
								</div>
								<select class="select">
									<option>Choose</option>
									<option selected>NovaWave LLC</option>
									<option>Silver Hawk</option>
									<option>Summit Peak</option>
									<option>RiverStone Ventur</option>
									<option>Insurance</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Value<span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="10">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Currency <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option selected>$</option>
									<option>€</option>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="row align-items-end">
								<div class="col-md-8">
									<div class="mb-3">
										<label class="col-form-label">Phone<span class="text-danger">*</span></label>
										<input type="text" class="form-control" value="+1 875455453">
									</div>
								</div>
								<div class="col-md-4">
									<div class="mb-3 d-flex align-items-center mt-4">
										<select class="select2">
											<option>Choose</option>
											<option selected>Work</option>
											<option>Home</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Source <span class="text-danger">*</span></label>
								<select class="select">
									<option>Choose</option>
									<option selected>Phone calls</option>
									<option>Social Media</option>
									<option>Referral sites</option>
									<option>Web Analytics</option>
									<option>Previous Purchase</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Industry <span class="text-danger">*</span></label>
								<select class="select">
									<option>Choose</option>
									<option>Retail Industry</option>
									<option selected>Banking</option>
									<option>Hotels</option>
									<option>Financial Services</option>
									<option>Insurance</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
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
								<input class="input-tags form-control" type="text" data-role="tagsinput" name="Label"
									value="Rated">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Description <span class="text-danger">*</span></label>
								<textarea class="form-control" rows="5"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Visibility</label>
								<div class="d-flex flex-wrap">
									<div class="me-2">
										<input type="radio" class="status-radio" id="public" name="visible">
										<label for="public">Public</label>
									</div>
									<div class="me-2">
										<input type="radio" class="status-radio" id="private" name="visible">
										<label for="private">Private</label>
									</div>
									<div data-bs-toggle="modal" data-bs-target="#access_view">
										<input type="radio" class="status-radio" id="people" name="visible">
										<label for="people">Select People</label>
									</div>
								</div>
							</div>
							<div class="mb-0">
								<label class="col-form-label">Status</label>
								<div class="d-flex flex-wrap">
									<div class="me-2">
										<input type="radio" class="status-radio" id="active" name="status" checked="">
										<label for="active">Active</label>
									</div>
									<div>
										<input type="radio" class="status-radio" id="inactive" name="status">
										<label for="inactive">Inactive</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
						<button type="button" class="btn btn-primary">Save Changes</button>
					</div>
				</form>
			</div>

		</div>
		<!-- /Edit Lead -->

		<!-- Delete Lead -->
		<div class="modal fade" id="delete_lead" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center">
							<div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
								<i class="ti ti-trash-x fs-36 text-danger"></i>
							</div>
							<h4 class="mb-2">Remove Lead?</h4>
							<p class="mb-0">Are you sure you want to remove <br> lead you selected.</p>
							<div class="d-flex align-items-center justify-content-center mt-4">
								<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="leads_kanban" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Lead -->

		<!-- Create Lead -->
		<div class="modal custom-modal fade" id="create_success" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0 m-0 justify-content-end">
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<div class="success-message text-center">
							<div class="success-popup-icon bg-light-blue">
								<i class="ti ti-building"></i>
							</div>
							<h3>Lead Created Successfully!!!</h3>
							<p>View the details of lead, created</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="leads_details" class="btn btn-primary">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Create Lead -->

		<!-- Create Company -->
		<div class="modal custom-modal fade" id="create_success_2" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0 m-0 justify-content-end">
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<div class="success-message text-center">
							<div class="success-popup-icon bg-light-blue">
								<i class="ti ti-building"></i>
							</div>
							<h3>Company Created Successfully!!!</h3>
							<p>View the details of company, created</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="company_details" class="btn btn-primary">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Create Company -->

		<!-- Add New View -->
		<div class="modal custom-modal fade" id="save_view" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add New View</h5>
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="leads_kanban">
							<div class="mb-3">
								<label class="col-form-label">View Name</label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-btn text-end">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-danger">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add New View -->

		<!-- Access -->
		<div class="modal custom-modal fade" id="access_view" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Access For</h5>
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="leads_kanban">
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
		<!-- /Access -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->element('vendor-scripts') ?>

	<!-- Drag Card -->
	<?php echo $this->Html->script('jquery-ui.min.js') ?>
	<?php echo $this->Html->script('jquery.ui.touch-punch.min.js') ?>

	<!-- Bootstrap Tagsinput JS -->
	<?php echo $this->Html->script('plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') ?>

</body>

</html>