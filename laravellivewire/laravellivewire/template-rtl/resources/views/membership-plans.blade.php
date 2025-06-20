<?php $page = 'membership-plans'; ?>
@extends('layout.mainlayout')
@section('content')
		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<div class="row">
					<div class="col-md-12">

						<!-- Page Header -->
						<div class="page-header">
							<div class="row align-items-center">
								<div class="col-8">
									<h4 class="page-title">Membership Plans</h4>
								</div>
								<div class="col-4 text-end">
									<div class="head-icons">
										<a href="{{url('membership-plans')}}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
										<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

						<div class="card">
							<div class="card-body">

								<!-- Search -->
								<div class="row gy-3">
									<div class="col-md-5 col-sm-4">
										<div class="icon-form">
											<span class="form-icon"><i class="ti ti-search"></i></span>
											<input type="text" class="form-control" placeholder="Search Membership">
										</div>							
									</div>		
									<div class="col-md-7 col-sm-8">					
										<div class="text-sm-end">
											<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add"><i class="ti ti-square-rounded-plus me-1"></i>Add Membership</a>
										</div>
									</div>
								</div>
								<!-- /Search -->							

							</div>
						</div>
						
						
						@livewire('membershipplans')
					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->
@component('components.model-popup')
@endcomponent
@endsection