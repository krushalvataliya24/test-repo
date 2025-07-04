<?php $page = 'contact-messages'; ?>
@extends('layout.mainlayout')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content">

        <div class="row">
            <div class="col-md-12">

               
                @component('components.breadcrumb')
                @slot('title')
                Contact Messages
                @endslot
                @slot('item1')
                123
                @endslot
                @slot('item2')
                contact-messages
                @endslot
                @endcomponent

                <div class="card">
					<div class="card-header">
						<div class="row align-items-center">
							<div class="col-sm-4">
								<div class="icon-form mb-3 mb-sm-0">
									<span class="form-icon"><i class="ti ti-search"></i></span>
									<input type="text" class="form-control" placeholder="Search User">
								</div>							
							</div>		
							<div class="col-sm-8">					
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
									<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add"><i class="ti ti-square-rounded-plus me-2"></i>Add Contact Messages</a>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body">

						<!-- Filter -->
						<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-4">
							<div class="d-flex align-items-center flex-wrap row-gap-2">
								<div class="dropdown me-2">
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
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar"></i></span>
									<input type="text" class="form-control bookingrange" placeholder="">
								</div>
							</div>
							<div class="d-flex align-items-center flex-wrap row-gap-2">
								<div class="dropdown me-2">
									<a href="javascript:void(0);" class="btn bg-soft-purple text-purple" data-bs-toggle="dropdown" data-bs-auto-close="outside"><i class="ti ti-columns-3 me-2"></i>Manage Columns</a>
									<div class="dropdown-menu  dropdown-menu-md-end dropdown-md p-3">
										<h4 class="mb-2 fw-semibold">Want to manage datatables?</h4>
										<p class="mb-3">Please drag and drop your column to reorder your table and enable see option as you want.</p>
										<div class="border-top pt-3">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Name</p>
												<div class="status-toggle">
													<input type="checkbox" id="col-name" class="check">
													<label for="col-name" class="checktoggle"></label>
												</div>
											</div>
											<div class="d-flex align-items-center justify-content-between mb-3">
												<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Phone</p>
												<div class="status-toggle">
													<input type="checkbox" id="col-phone" class="check">
													<label for="col-phone" class="checktoggle"></label>
												</div>
											</div>
											<div class="d-flex align-items-center justify-content-between mb-3">
												<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Email</p>
												<div class="status-toggle">
													<input type="checkbox" id="col-email" class="check">
													<label for="col-email" class="checktoggle"></label>
												</div>
											</div>
											<div class="d-flex align-items-center justify-content-between mb-3">
												<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Created Date</p>
												<div class="status-toggle">
													<input type="checkbox" id="col-tag" class="check">
													<label for="col-tag" class="checktoggle"></label>
												</div>
											</div>
											<div class="d-flex align-items-center justify-content-between mb-3">
												<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Location</p>
												<div class="status-toggle">
													<input type="checkbox" id="col-loc" class="check">
													<label for="col-loc" class="checktoggle"></label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-sorts dropdown">
									<a href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"><i class="ti ti-filter-share"></i>Filter</a>
									<div class="filter-dropdown-menu dropdown-menu  dropdown-menu-md-end p-3">
										<div class="filter-set-view">
											<div class="filter-set-head">
												<h4><i class="ti ti-filter-share"></i>Filter</h4>
											</div>
											<div class="accordion" id="accordionExample">
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#owner" aria-expanded="false" aria-controls="owner">Name</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse" id="owner" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
															<div class="mb-2 icon-form">
																<span class="form-icon"><i class="ti ti-search"></i></span>
																<input type="text" class="form-control" placeholder="Search Owner">
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
																			Sharon Roy
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
														<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#Status" aria-expanded="false" aria-controls="Status">Phone</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse" id="Status" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked="">
																			<span class="checkmarks"></span>
																			+1 875455453
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			+1 989757485
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			+1 546555455
																		</label>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Email</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse" id="collapseTwo" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked="">
																			<span class="checkmarks"></span>
																			robertson@example.com
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			sharon@example.com
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			vaughan12@example.com
																		</label>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Created Date</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked="">
																			<span class="checkmarks"></span>
																			25 Sep 2023, 12:12 pm
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			27 Sep 2023, 07:40 am		
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			29 Sep 2023, 08:20 am
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
														<a href="{{url('contact-messages')}}" class="btn btn-primary">Filter</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Filter -->

						
						@livewire('contactmessages')

					</div>
				</div>

            </div>
        </div>

    </div>
</div>
<!-- /Page Wrapper -->
@component('components.model-popup')
@endcomponent
@endsection