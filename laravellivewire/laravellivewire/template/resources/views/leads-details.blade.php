<?php $page = 'leads-details'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <div class="row">
                <div class="col-md-12">


                    @component('components.breadcrumb')
                        @slot('title')
                            Leads Overview
                        @endslot
                        @slot('item2')
                            lead-details
                        @endslot
                    @endcomponent

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <!-- Leads User -->
                    <div class="contact-head">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <ul class="contact-breadcrumb">
                                    <li><a href="{{url('leads')}}"><i class="ti ti-arrow-narrow-left"></i>Leads</a></li>
                                    <li>Tremblay and Rath</li>
                                </ul>
                            </div>
                            <div class="col-sm-6 text-sm-end">
                                <div class="contact-pagination">
                                    <p>1 of 40</p>
                                    <ul>
                                        <li>
                                            <a href="{{url('leads-details')}}"><i class="ti ti-chevron-left"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{url('leads-details')}}"><i class="ti ti-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body pb-2">
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="avatar avatar-xxl me-3 flex-shrink-0 border p-2">		
                                        <h6 class="text-default fw-medium">HT</h6>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Tremblay and Rath <span class="star-icon"><i class="fa-solid fa-star"></i></span></h5>
                                        <p class="mb-1"><i class="ti ti-building me-1"></i>Google Inc</p>
                                        <p class="mb-0"><i class="ti ti-map-pin-pin me-1"></i>22, Ave Street, Newyork, USA</p>
                                    </div>
                                </div>
                                <div class="contacts-action">
                                    <span class="badge badge-light"><i class="ti ti-lock"></i>Private</span>
                                    <div class="dropdown mb-2">
                                        <a href="#" class="bg-success text-white py-1 px-2" data-bs-toggle="dropdown" aria-expanded="false">
                                            Closed<i class="ti ti-chevron-down ms-2"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);"><span>Closed</span></a>
                                            <a class="dropdown-item" href="javascript:void(0);"><span>Opened</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>	
                    <!-- /Leads User -->

                </div>

                <!-- Leads Sidebar -->
                <div class="col-xl-3 theiaStickySidebar">
                    <div class="card">
                        <div class="card-body p-3">
                            <h6 class="mb-3 fw-semibold">Lead  Information</h6>
                            <ul>
                                <li class="row mb-3"><span class="col-6">Date Created</span><span class="col-6">10 Jan 2024, 10:00 am</span></li>
                                <li class="row mb-3"><span class="col-6">Value</span><span class="col-6">$25,11,145</span></li>
                                <li class="row mb-3"><span class="col-6">Due Date</span><span class="col-6">20 Jan 2024, 10:00 am</span></li>
                                <li class="row mb-3"><span class="col-6">Follow Up</span><span class="col-6">20 Jan 2024</span></li>
                                <li class="row mb-3"><span class="col-6">Source</span><span class="col-6">Google</span></li>
                            </ul>	
                            <h6 class="mb-3 fw-semibold">Owner</h6>
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar avatar-md me-2">
                                    <img src="{{URL::asset('/build/img/profiles/avatar-21.jpg')}}" alt="Image">
                                </div>
                                <p>Vaughan</p>
                            </div>									
                            <hr>							
                            <h6 class="mb-3 fw-semibold">Tags</h6>
                            <a href="javascript:void(0);" class="badge badge-soft-success fw-medium me-2">Collab</a>
                            <a href="javascript:void(0);" class="badge badge-soft-warning fw-medium">Rated</a>
                            <hr>					
                            <h6 class="mb-3 fw-semibold">Projects</h6>
                            <a href="javascript:void(0);" class="badge bg-light-300 text-default me-2 mb-2">Devops Design</a>
                            <a href="javascript:void(0);" class="badge bg-light-300 text-default mb-2">Margrate Design</a>
                            <hr>
                            <h6 class="mb-3 fw-semibold">Priority</h6>
                            <div class="priority-info">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><span><i class="ti ti-square-rounded-filled me-1 text-danger circle"></i>High</span><i class="ti ti-chevron-down me-1"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <span><i class="ti ti-square-rounded-filled me-1 text-danger circle"></i>High</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <span><i class="ti ti-square-rounded-filled me-1 text-success circle"></i>Low</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <HR>
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <h6 class="mb-3 fw-semibold">Contacts</h6>
                                <a href="javascript:void(0);" class="link-purple mb-3 fw-medium" data-bs-toggle="modal" data-bs-target="#add_contact"><i class="ti ti-circle-plus me-1"></i>Add New</a>
                            </div>	
                            <div class="d-flex align-items-center mb-0">
                                <div class="avatar avatar-md me-2">
                                    <img src="{{URL::asset('/build/img/profiles/avatar-01.jpg')}}" alt="Image">
                                </div>
                                <p>Jessica</p>
                            </div>
                            <hr>						
                            <ul>
                                <li class="row mb-3"><span class="col-6">Last Modified</span><span class="col-6">10 Jan 2024, 10:00 am</span></li>
                                <li class="row mb-0"><span class="col-6">Modified By</span>
                                    <span class="col-6">
                                        <span class="avatar avatar-xs me-1"><img src="{{URL::asset('/build/img/profiles/avatar-19.jpg')}}" class="avatar-xs" alt="img"></span>Darlee Robertson
                                    </span>
                                </li>
                            </ul>	
                        </div>
                    </div>
                </div>
                <!-- /Leads Sidebar -->

              
                @livewire('leadsdetails')
					
			</div>

        </div>
    </div>
    <!-- /Page Wrapper -->
    @component('components.model-popup')
    @endcomponent
@endsection
