<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Title -->
	<title>Estimation Kanban  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>	
  
    <?= $this->include('partials/title-meta') ?>
    <?= $this->include('partials/head-css') ?>
    <!-- Summernote CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/summernote/summernote-lite.min.css">
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

						<!-- Page Header -->
						<div class="page-header">
							<div class="row align-items-center">
								<div class="col-8">
									<h4 class="page-title">Estimations<span class="count-title">123</span></h4>
								</div>
								<div class="col-4 text-end">
									<div class="head-icons">
										<a href="<?php echo base_url();?>estimations-kanban" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh">
											<i class="ti ti-refresh-dot"></i>
										</a>
										<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
											<i class="ti ti-chevrons-up"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

						<!-- Search -->
						<div class="row align-items-center">
							<div class="col-sm-4">
								<div class="icon-form mb-3 mb-sm-0">
									<span class="form-icon"><i class="ti ti-search"></i></span>
									<input type="text" class="form-control" placeholder="Search Estimations">
								</div>							
							</div>		
							<div class="col-sm-8">					
								<div class="d-flex align-items-center flex-wrap row-gap-2 justify-content-sm-end">
									<div class="dropdown me-2">
										<a href="javascript:void(0);" class="dropdown-toggle bg-white" data-bs-toggle="dropdown"><i class="ti ti-package-export me-2"></i>Export</a>
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
									<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add" ><i class="ti ti-square-rounded-plus me-2"></i>Add Estimations</a>
								</div>
							</div>
						</div>
						<!-- /Search -->

						<!-- Filter -->
						<div class="d-flex align-items-center justify-content-between flex-wrap mb-4 row-gap-2 border-top pt-4 mt-4">
							<div class="d-flex align-items-center flex-wrap row-gap-2">
								<div class="dropdown me-2">
									<a href="javascript:void(0);" class="dropdown-toggle bg-white" data-bs-toggle="dropdown"><i class="ti ti-sort-ascending-2 me-2"></i>Sort </a>
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
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar"></i></span>
									<input type="text" class="form-control bookingrange" placeholder="">
								</div>
							</div>
							<div class="d-flex align-items-center flex-wrap row-gap-2">
								<div class="form-sorts dropdown me-2">
									<a href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"><i class="ti ti-filter-share"></i>Filter</a>
									<div class="filter-dropdown-menu dropdown-menu  dropdown-menu-md-end p-4">
										<div class="filter-set-view">
											<div class="filter-set-head">
												<h4><i class="ti ti-filter-share"></i>Filter</h4>
											</div>
											<div class="accordion" id="accordionExample">
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="true" aria-controls="collapse">Client</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse show" id="collapse" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
															<div class="mb-2 icon-form">
																<span class="form-icon"><i class="ti ti-search"></i></span>
																<input type="text" class="form-control" placeholder="Search Client">
															</div>
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			NovaWave LLC
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Redwood Inc
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			HarborVie w
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			CoastalStar Co.
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			RiverStone Ventur
																		</label>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#project" aria-expanded="false" aria-controls="project">Project</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse" id="project" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
															<div class="mb-2 icon-form">
																<span class="form-icon"><i class="ti ti-search"></i></span>
																<input type="text" class="form-control" placeholder="Search Projects">
															</div>
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked="">
																			<span class="checkmarks"></span>
																			Truelysell
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Dreamschat
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Truelysell
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Servbook
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			DreamPOS
																		</label>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseone" aria-expanded="false" aria-controls="collapseone">Date of Estimation</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse" id="collapseone" data-bs-parent="#accordionExample">
														<div class="mb-2 icon-form">
															<span class="form-icon"><i class="ti ti-search"></i></span>
															<input type="text" class="form-control" placeholder="Search Date">
														</div>
														<div class="filter-content-list">
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked="">
																			<span class="checkmarks"></span>
																			15 Oct 2023
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			19 Oct 2023
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			24 Oct 2023
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			10 Nov 2023
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			18 Nov 2023
																		</label>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">Expiry Date</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse" id="collapsetwo" data-bs-parent="#accordionExample">	
														<div class="filter-content-list">
															<div class="mb-2 icon-form">
																<span class="form-icon"><i class="ti ti-search"></i></span>
																<input type="text" class="form-control" placeholder="Search Date">
															</div>
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked="">
																			<span class="checkmarks"></span>
																			15 Sep 2027
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			10 Sep 2028
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			20 Oct 2026
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			07 Oct 2028
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			10 Oct 2026
																		</label>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#estimate" aria-expanded="false" aria-controls="estimate">Estimated by</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse" id="estimate" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
															<div class="mb-2 icon-form">
																<span class="form-icon"><i class="ti ti-search"></i></span>
																<input type="text" class="form-control" placeholder="Search Name">
															</div>
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked="">
																			<span class="checkmarks"></span>
																			Darlee Robertson
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Darlee Robertson
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Vaughan
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Jessica
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Carol Thomas
																		</label>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Status</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
															<div class="mb-2 icon-form">
																<span class="form-icon"><i class="ti ti-search"></i></span>
																<input type="text" class="form-control" placeholder="Search Status">
															</div>
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked="">
																			<span class="checkmarks"></span>
																			Sent
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Accepted
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Draft
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Accepted
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Declined
																		</label>
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
														<a href="<?php echo base_url();?>estimations-kanban" class="btn btn-primary">Filter</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="view-icons">
									<a href="<?php echo base_url();?>estimations"><i class="ti ti-list-tree"></i></a>
									<a href="<?php echo base_url();?>estimations-kanban" class="active"><i class="ti ti-grid-dots"></i></a>
								</div>
							</div>	
						</div>
						<!-- /Filter -->

						<!-- Estimations Kanban -->
						<div class="d-flex overflow-x-auto align-items-start mb-4">
							<div class="kanban-list-items">
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="fw-semibold d-flex align-items-center mb-1">
												<i class="ti ti-circle-filled fs-8 text-warning me-2"></i>
												Draft
											</h4>
											<a href="javascript:void(0);" class="text-purple"><i class="ti ti-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="bg-warning border border-2"></div>
								<div class="kanban-drag-wrap pt-4">
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<img src="<?php echo base_url();?>assets/img/priority/truellysell.svg" class="w-auto h-auto" alt="">
														</a>
														<div>
															<h6 class="fw-medium"><a href="javascript:void(0);">Truelysell</a></h6>
															<p>Mobile App</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon dropdown-toggle bg-white" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit" ><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_estimations"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
														</div>
													</div>
												</div>
												<p class="mb-3">TruelySell provides a multiple on-demand service based bootstrap html template.</p>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-forbid-2 text-dark me-1"></i>
														Estimate ID : #EST00020
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														Amount : $01,23,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-calendar-exclamation text-dark me-1"></i>
														Date : 15 Oct 2023
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-calendar-time text-dark me-1"></i>
														Expiry Date : 05 Nov 2026
													</p>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md rounded flex-shrink-0 me-2"><img src="<?php echo base_url();?>assets/img/profiles/avatar-22.jpg" alt=""></a>
														<a href="javascript:void(0);">Dawn Mercha</a>
													</div>
													<a href="javascript:void(0);" class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center"> 
														<img src="<?php echo base_url();?>assets/img/icons/company-icon-07.svg" class="w-auto h-auto" alt=""> 
													</a>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<img src="<?php echo base_url();?>assets/img/priority/project-01.svg" class="w-auto h-auto" alt="">
														</a>
														<div>
															<h6 class="fw-medium"><a href="javascript:void(0);">Kofejob</a></h6>
															<p>Meeting</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon dropdown-toggle bg-white" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_estimations"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
														</div>
													</div>
												</div>
												<p class="mb-3">TruelySell provides a multiple on-demand service based bootstrap html template.</p>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-forbid-2 text-dark me-1"></i>
														Estimate ID : #EST00020
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														Amount : $01,23,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-calendar-exclamation text-dark me-1"></i>
														Date : 15 Oct 2023
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-calendar-time text-dark me-1"></i>
														Expiry Date : 05 Nov 2026
													</p>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md rounded flex-shrink-0 me-2"><img src="<?php echo base_url();?>assets/img/profiles/avatar-21.jpg" alt=""></a>
														<a href="javascript:void(0);">Darlee Robertson</a>
													</div>
													<a href="javascript:void(0);" class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center"> 
														<img src="<?php echo base_url();?>assets/img/icons/company-icon-03.svg" class="w-auto h-auto" alt=""> 
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kanban-list-items">
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="fw-semibold d-flex align-items-center mb-1">
												<i class="ti ti-circle-filled fs-8 text-purple me-2"></i>
												Sent
											</h4>
											<a href="javascript:void(0);" class="text-purple"><i class="ti ti-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="bg-purple border border-2"></div>
								<div class="kanban-drag-wrap pt-4">
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<img src="<?php echo base_url();?>assets/img/priority/truellysel.svg" class="w-auto h-auto" alt="">
														</a>
														<div>
															<h6 class="fw-medium"><a href="javascript:void(0);">Truelysell</a></h6>
															<p>Web App</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon dropdown-toggle bg-white" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_estimations"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
														</div>
													</div>
												</div>
												<p class="mb-3">TruelySell provides a multiple on-demand service based bootstrap html template.</p>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-forbid-2 text-dark me-1"></i>
														Estimate ID : #EST00020
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														Amount : $01,23,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-calendar-exclamation text-dark me-1"></i>
														Date : 15 Oct 2023
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-calendar-time text-dark me-1"></i>
														Expiry Date : 05 Nov 2026
													</p>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md rounded flex-shrink-0 me-2"><img src="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" alt=""></a>
														<a href="javascript:void(0);">Darlee Robertson</a>
													</div>
													<a href="javascript:void(0);" class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center"> 
														<img src="<?php echo base_url();?>assets/img/icons/company-icon-01.svg" class="w-auto h-auto" alt=""> 
													</a>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<img src="<?php echo base_url();?>assets/img/priority/project-02.svg" class="w-auto h-auto" alt="">
														</a>
														<div>
															<h6 class="fw-medium"><a href="javascript:void(0);">Doccure</a></h6>
															<p>Meeting</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon dropdown-toggle bg-white" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_estimations"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
														</div>
													</div>
												</div>
												<p class="mb-3">TruelySell provides a multiple on-demand service based bootstrap html template.</p>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-forbid-2 text-dark me-1"></i>
														Estimate ID : #EST00020
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														Amount : $01,23,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-calendar-exclamation text-dark me-1"></i>
														Date : 15 Oct 2023
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-calendar-time text-dark me-1"></i>
														Expiry Date : 05 Nov 2026
													</p>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md rounded flex-shrink-0 me-2"><img src="<?php echo base_url();?>assets/img/profiles/avatar-23.jpg" alt=""></a>
														<a href="javascript:void(0);">Rachel Hampton</a>
													</div>
													<a href="javascript:void(0);" class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center"> 
														<img src="<?php echo base_url();?>assets/img/icons/company-icon-08.svg" class="w-auto h-auto" alt=""> 
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kanban-list-items">
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="fw-semibold d-flex align-items-center mb-1">
												<i class="ti ti-circle-filled fs-8 text-success me-2"></i>
												Accepted
											</h4>
											<a href="javascript:void(0);" class="text-purple"><i class="ti ti-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="bg-success border border-2"></div>
								<div class="kanban-drag-wrap pt-4">
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<img src="<?php echo base_url();?>assets/img/priority/dreamchat.svg" class="w-auto h-auto" alt="">
														</a>
														<div>
															<h6 class="fw-medium"><a href="javascript:void(0);">Dreamschat</a></h6>
															<p>Meeting</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon dropdown-toggle bg-white" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_estimations"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
														</div>
													</div>
												</div>
												<p class="mb-3">TruelySell provides a multiple on-demand service based bootstrap html template.</p>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-forbid-2 text-dark me-1"></i>
														Estimate ID : #EST00020
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														Amount : $01,23,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-calendar-exclamation text-dark me-1"></i>
														Date : 15 Oct 2023
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-calendar-time text-dark me-1"></i>
														Expiry Date : 05 Nov 2026
													</p>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md rounded flex-shrink-0 me-2"><img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" alt=""></a>
														<a href="javascript:void(0);">Sharon Roy</a>
													</div>
													<a href="javascript:void(0);" class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center"> 
														<img src="<?php echo base_url();?>assets/img/icons/company-icon-02.svg" class="w-auto h-auto" alt=""> 
													</a>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<img src="<?php echo base_url();?>assets/img/priority/servbook.svg" class="w-auto h-auto" alt="">
														</a>
														<div>
															<h6 class="fw-medium"><a href="javascript:void(0);">servbook</a></h6>
															<p>Meeting</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon dropdown-toggle bg-white" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_estimations"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
														</div>
													</div>
												</div>
												<p class="mb-3">TruelySell provides a multiple on-demand service based bootstrap html template.</p>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-forbid-2 text-dark me-1"></i>
														Estimate ID : #EST00020
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														Amount : $01,23,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-calendar-exclamation text-dark me-1"></i>
														Date : 15 Oct 2023
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-calendar-time text-dark me-1"></i>
														Expiry Date : 05 Nov 2026
													</p>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md rounded flex-shrink-0 me-2"><img src="<?php echo base_url();?>assets/img/profiles/avatar-01.jpg" alt=""></a>
														<a href="javascript:void(0);">Jessica</a>
													</div>
													<a href="javascript:void(0);" class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center"> 
														<img src="<?php echo base_url();?>assets/img/icons/company-icon-04.svg" class="w-auto h-auto" alt=""> 
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kanban-list-items">
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="fw-semibold d-flex align-items-center mb-1">
												<i class="ti ti-circle-filled fs-8 text-danger me-2"></i>
												Declined
											</h4>
											<a href="javascript:void(0);" class="text-purple"><i class="ti ti-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="bg-danger border border-2"></div>
								<div class="kanban-drag-wrap pt-4">
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<img src="<?php echo base_url();?>assets/img/priority/dream-pos.svg" class="w-auto h-auto" alt="">
														</a>
														<div>
															<h6 class="fw-medium"><a href="javascript:void(0);">DreamPOS</a></h6>
															<p>Web App</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon dropdown-toggle bg-white" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_estimations"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
														</div>
													</div>
												</div>
												<p class="mb-3">TruelySell provides a multiple on-demand service based bootstrap html template.</p>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-forbid-2 text-dark me-1"></i>
														Estimate ID : #EST00020
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														Amount : $01,23,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-calendar-exclamation text-dark me-1"></i>
														Date : 15 Oct 2023
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-calendar-time text-dark me-1"></i>
														Expiry Date : 05 Nov 2026
													</p>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md rounded flex-shrink-0 me-2"><img src="<?php echo base_url();?>assets/img/profiles/avatar-16.jpg" alt=""></a>
														<a href="javascript:void(0);">Carol Thomas</a>
													</div>
													<a href="javascript:void(0);" class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center"> 
														<img src="<?php echo base_url();?>assets/img/icons/company-icon-05.svg" class="w-auto h-auto" alt=""> 
													</a>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<img src="<?php echo base_url();?>assets/img/priority/dream-pos.svg" class="w-auto h-auto" alt="">
														</a>
														<div>
															<h6 class="fw-medium"><a href="javascript:void(0);">Dreamsports</a></h6>
															<p>Meeting</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon dropdown-toggle bg-white" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_estimations"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
														</div>
													</div>
												</div>
												<p class="mb-3">TruelySell provides a multiple on-demand service based bootstrap html template.</p>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-forbid-2 text-dark me-1"></i>
														Estimate ID : #EST00020
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														Amount : $01,23,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-calendar-exclamation text-dark me-1"></i>
														Date : 15 Oct 2023
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-calendar-time text-dark me-1"></i>
														Expiry Date : 05 Nov 2026
													</p>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md rounded flex-shrink-0 me-2"><img src="<?php echo base_url();?>assets/img/profiles/avatar-25.jpg" alt=""></a>
														<a href="javascript:void(0);">Jonathan</a>
													</div>
													<a href="javascript:void(0);" class="avatar avatar-sm border rounded d-flex align-items-center justify-content-center"> 
														<img src="<?php echo base_url();?>assets/img/icons/company-icon-10.svg" class="w-auto h-auto" alt=""> 
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Estimations Kanban -->

					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add New Estimation -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
			<div class="offcanvas-header border-bottom">
				<h4>Add New Contract</h4>
				<button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="<?php echo base_url();?>estimations">
					<div>
						<div class="row">
							<div class="mb-3">
								<div class="d-flex align-items-center justify-content-between">
									<label class="col-form-label">Client</label>
									<a href="#" class="label-add" data-bs-toggle="modal" data-bs-target="#add_client"><i class="ti ti-square-rounded-plus"></i>Add New</a>
								</div>
								<select class="select">
									<option>Choose</option> 
									<option>NovaWave LLC</option>
									<option>BlueSky Industries</option>
									<option>ASilver Hawkdams</option>
								</select>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Bill To<span class="text-danger"> *</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Ship To<span class="text-danger"> *</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="mb-3">
								<div class="d-flex align-items-center justify-content-between">
									<label class="col-form-label">Project</label>
									<a href="#" class="label-add" data-bs-toggle="modal" data-bs-target="#save_view"><i class="ti ti-square-rounded-plus"></i>Add New</a>
								</div>
								<select class="select">
									<option>Choose</option> 
									<option>Truelysell</option>
									<option>Dreamschat</option>
									<option>Servbook</option>
								</select>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Estimate By <span class="text-danger">*</span></label>
									<select class="select2">
										<option>Choose</option>
										<option>Darlee Robertson</option>
										<option>Sharon Roy</option>
										<option>Vaughan</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Amount<span class="text-danger"> *</span></label>
									<input class="form-control" type="text">
								</div>
							</div>	
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Currency</label>
									<select class="select2">
										<option>Choose</option>
										<option>$</option>
									 	<option>€</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Estimate Date <span class="text-danger">*</span></label>
									<div class="icon-form">
										<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
										<input type="text" class="form-control datetimepicker" placeholder="">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Expiry Date<span class="text-danger">*</span></label>
									<div class="icon-form">
										<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
										<input type="text" class="form-control datetimepicker" placeholder="">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Status</label>
									<select class="select">
										<option>Select</option>
										<option>Active</option>
										<option>Inactive</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Tags <span class="text-danger">*</span></label>
									<input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Tag 1, Tag 2, Tag 3" >
								</div>
							</div>
							<div class="mb-3">
								<label class="col-form-label">Attachment <span class="text-danger">*</span></label>
								<div class="drag-attach">
									<input type="file">
									<div class="img-upload">											
										<i class="ti ti-file-broken"></i>Upload File
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Description <span class="text-danger">*</span></label>
									<div class="summernote"></div>
								</div>
							</div> 
						</div>
					</div>
				
					<div class="d-flex align-items-center justify-content-end">
						<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_success">Create</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Add New Estimation -->

		<!-- Edit Estimation -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
			<div class="offcanvas-header border-bottom">
				<h4>Edit Estimation</h4>
				<button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="<?php echo base_url();?>estimations">
					<div>
						<div class="row">
							<div class="mb-3">
								<div class="d-flex align-items-center justify-content-between">
									<label class="col-form-label">Client</label>
									<a href="#" class="label-add" data-bs-toggle="modal" data-bs-target="#add_client"><i class="ti ti-square-rounded-plus"></i>Add New</a>
								</div>
								<select class="select">
									<option>Choose</option> 
									<option selected>NovaWave LLC</option>
									<option>BlueSky Industries</option>
									<option>ASilver Hawkdams</option>
								</select>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Bill To<span class="text-danger"> *</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Ship To<span class="text-danger"> *</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="mb-3">
								<div class="d-flex align-items-center justify-content-between">
									<label class="col-form-label">Project</label>
									<a href="#" class="label-add" data-bs-toggle="modal" data-bs-target="#save_view"><i class="ti ti-square-rounded-plus"></i>Add New</a>
								</div>
								<select class="select">
									<option>Choose</option> 
									<option selected>Truelysell</option>
									<option>Dreamschat</option>
									<option>Servbook</option>
								</select>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Estimate By <span class="text-danger">*</span></label>
									<select class="select2">
										<option>Choose</option>
										<option selected>Darlee Robertson</option>
										<option>Sharon Roy</option>
										<option>Vaughan</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Amount<span class="text-danger"> *</span></label>
									<input class="form-control" type="text" value="2,15,000">
								</div>
							</div>	
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Currency</label>
									<select class="select2">
										<option>Choose</option>
										<option selected>$</option>
									 	<option>€</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Estimate Date <span class="text-danger">*</span></label>
									<div class="icon-form">
										<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
										<input type="text" class="form-control datetimepicker" placeholder="">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Expiry Date<span class="text-danger">*</span></label>
									<div class="icon-form">
										<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
										<input type="text" class="form-control datetimepicker" placeholder="">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Status</label>
									<select class="select">
										<option>Select</option>
										<option>Active</option>
										<option>Inactive</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Tags <span class="text-danger">*</span></label>
									<input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Tag 1, Tag 2, Tag 3" >
								</div>
							</div>
							<div class="mb-3">
								<label class="col-form-label">Attachment <span class="text-danger">*</span></label>
								<div class="drag-attach">
									<input type="file">
									<div class="img-upload">											
										<i class="ti ti-file-broken"></i>Upload File
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Description <span class="text-danger">*</span></label>
									<div class="summernote"></div>
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
		<!-- /Edit Estimation -->

		<!-- Delete Estimations -->
		<div class="modal fade" id="delete_estimations" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center">
							<div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
								<i class="ti ti-trash-x fs-36 text-danger"></i>
							</div>
							<h4 class="mb-2">Remove Estimation?</h4>
							<p class="mb-0">Are you sure you want to remove <br> estimation you selected.</p>
							<div class="d-flex align-items-center justify-content-center mt-4">
								<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url();?>estimations-kanban" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Estimations -->

		<!-- Create Estimation -->
		<div class="modal custom-modal fade" id="create_success" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0 m-0 justify-content-end">
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<div class="success-message text-center">
							<div class="success-popup-icon bg-light-blue">
								<i class="ti ti-atom-2"></i>
							</div>
							<h3>Estimations Created Successfully!!!</h3>
							<p>View the details of estimations, created</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="#" class="btn btn-primary">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Create Project -->

		<!-- Add New View -->
		<div class="modal custom-modal fade" id="save_view" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Project</h5>
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url();?>estimations">
							<div class="mb-3">
								<label class="col-form-label">Project Name</label>
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

		<!-- Add New View -->
		<div class="modal custom-modal fade" id="add_client" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Client</h5>
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url();?>estimations">
							<div class="mb-3">
								<label class="col-form-label">Client Name</label>
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

        </div>
    <!-- /Main Wrapper -->

    <?= $this->include('partials/vendor-scripts') ?>
    <!-- Summernote JS -->
    <script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-lite.min.js"></script>
    <!-- Bootstrap Tagsinput JS -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
   <!-- Drag Card -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>

</body>

</html>