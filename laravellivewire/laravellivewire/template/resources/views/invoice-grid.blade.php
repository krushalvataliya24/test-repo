<?php $page = 'invoice-grid'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <div class="row">
                <div class="col-md-12">
                    @component('components.breadcrumb')
                        @slot('title')
                            Invoices
                        @endslot
                        @slot('item1')
                            123
                        @endslot
                        @slot('item2')
                            invoice-grid
                        @endslot
                    @endcomponent


                        <!-- Search -->
						<div class="row align-items-center">
							<div class="col-sm-4">
								<div class="icon-form mb-3 mb-sm-0">
									<span class="form-icon"><i class="ti ti-search"></i></span>
									<input type="text" class="form-control" placeholder="Search Invoices">
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
									<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add" ><i class="ti ti-square-rounded-plus me-2"></i>Add New Invoices</a>
								</div>
							</div>
						</div>
						<!-- /Search -->

						<!-- Filter -->
						<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 border-top mt-4 pt-4 mb-4">
							<div class="d-flex align-items-center flex-wrap row-gap-2">
								<div class="sort-dropdown drop-down task-drops me-3">
									<a href="javascript:void(0);" class="dropdown-toggle bg-transparent" data-bs-toggle="dropdown">All Invoices </a>
									<div class="dropdown-menu  dropdown-menu-start">
										<ul>
											<li>
												<a href="#">
													<i class="ti ti-dots-vertical"></i>All Invoices
												</a>
											</li>
											<li>
												<a href="#">
													<i class="ti ti-dots-vertical"></i>Paid
												</a>
											</li>
											<li>
												<a href="#">
													<i class="ti ti-dots-vertical"></i>Partially Paid
												</a>
											</li>
											<li>
												<a href="#">
													<i class="ti ti-dots-vertical"></i>Overdue
												</a>
											</li>
											<li>
												<a href="#">
													<i class="ti ti-dots-vertical"></i>Unpaid
												</a>
											</li>
										</ul>
									</div>
								  </div>
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
														<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#owner" aria-expanded="false" aria-controls="owner">Client</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse" id="owner" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
															<div class="mb-2 icon-form">
																<span class="form-icon"><i class="ti ti-search"></i></span>
																<input type="text" class="form-control" placeholder="Search Client">
															</div>
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked="">
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
														<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Project</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
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
																			Dreamsports	
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Best@laundry	
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Doccure
																		</label>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">Amount</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse" id="collapsethree" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
															<div class="mb-2 icon-form">
																<span class="form-icon"><i class="ti ti-search"></i></span>
																<input type="text" class="form-control" placeholder="Search Amount">
															</div>
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked="">
																			<span class="checkmarks"></span>
																			$2,15,000
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			$1,45,000
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			$2,15,000
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			$4,80,380
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			$2,12,000
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
														<a href="{{url('invoice-grid')}}" class="btn btn-primary">Filter</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="view-icons">
									<a href="{{url('invoices')}}"><i class="ti ti-list-tree"></i></a>
									<a href="{{url('invoice-grid')}}" class="active"><i class="ti ti-grid-dots"></i></a>
								</div>
							</div>	
						</div>
						<!-- /Filter -->

						@livewire('invoicegrid')

                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->
    @component('components.model-popup')
    @endcomponent
@endsection
