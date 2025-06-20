<?php $page = 'contact-stage'; ?>
@extends('layout.mainlayout')
@section('content')

	<!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <div class="row">
                <div class="col-md-12">
                    @component('components.breadcrumb')
                    @slot('title')
                    Contact Stages
                    @endslot
                    @slot('item1')
                    123 
                    @endslot
                    @slot('item2')
                    contact-stage
                    @endslot
                    @endcomponent

                    <div class="card">
                        <div class="card-header">
                            <!-- Search -->
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <div class="icon-form mb-3 mb-sm-0">
                                        <span class="form-icon"><i class="ti ti-search"></i></span>
                                        <input type="text" class="form-control" placeholder="Search Contact Stages">
                                    </div>							
                                </div>		
                                <div class="col-sm-8">					
                                    <div class="text-sm-end">
                                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_contact_stage"><i class="ti ti-square-rounded-plus me-2"></i>Add New Stages</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Search -->
                        </div>
                       
                      
                        @livewire('contactstage')
					</div>

                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->
@component('components.model-popup')
@endcomponent
@endsection