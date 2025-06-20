<?php $page = 'contracts-grid'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <div class="row">
                <div class="col-md-12">
                    @component('components.breadcrumb')
                        @slot('title')
                            Contracts
                        @endslot
                        @slot('item1')
                            123
                        @endslot
                        @slot('item2')
                            contracts-grid
                        @endslot
                    @endcomponent

                    <!-- Search -->
                    <div class="row align-items-center">
                        <div class="col-sm-4">
                            <div class="icon-form mb-3 mb-sm-0">
                                <span class="form-icon"><i class="ti ti-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search Contacts">
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
                                <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add" ><i class="ti ti-square-rounded-plus me-2"></i>Add New Contracts</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Search -->

                    <!-- Filter -->
                    <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 border-top mt-4 pt-4 mb-4">
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
                                <div class="filter-dropdown-menu dropdown-menu  dropdown-menu-md-end p-3">
                                    <div class="filter-set-view">
                                        <div class="filter-set-head">
                                            <h4><i class="ti ti-filter-share"></i>Filter</h4>
                                        </div>
                                        <div class="accordion" id="accordionExample">
                                            <div class="filter-set-content">
                                                <div class="filter-set-content-head">
                                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Contracts Id</a>
                                                </div>
                                                <div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
                                                    <div class="filter-content-list">
                                                        <div class="mb-2 icon-form">
                                                            <span class="form-icon"><i class="ti ti-search"></i></span>
                                                            <input type="text" class="form-control" placeholder="Search Id">
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        #1493024
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        #1493023
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        #1493022
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        #1493021
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        #1493020
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="filter-set-content">
                                                <div class="filter-set-content-head">
                                                    <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#owner" aria-expanded="false" aria-controls="owner">Subject</a>
                                                </div>
                                                <div class="filter-set-contents accordion-collapse collapse" id="owner" data-bs-parent="#accordionExample">
                                                    <div class="filter-content-list">
                                                        <div class="mb-2 icon-form">
                                                            <span class="form-icon"><i class="ti ti-search"></i></span>
                                                            <input type="text" class="form-control" placeholder="Search Subject">
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" checked="">
                                                                        <span class="checkmarks"></span>
                                                                        SEO Contracts
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        Web Design
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        Logo & Branding
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        Development
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        Logo
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="filter-set-content">
                                                <div class="filter-set-content-head">
                                                    <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#Status" aria-expanded="false" aria-controls="Status">Customer</a>
                                                </div>
                                                <div class="filter-set-contents accordion-collapse collapse" id="Status" data-bs-parent="#accordionExample">
                                                    <div class="filter-content-list">
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
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="filter-set-content">
                                                <div class="filter-set-content-head">
                                                    <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Contract Type</a>
                                                </div>
                                                <div class="filter-set-contents accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionExample">
                                                    <div class="filter-content-list">
                                                        <ul>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" checked="">
                                                                        <span class="checkmarks"></span>
                                                                        Contracts under Seal
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        Implied Contracts
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        Executory Contracts
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        Voidable Contracts
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        Unilateral Contracts
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
                                                    <a href="{{url('contracts-grid')}}" class="btn btn-primary">Filter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-icons">
                                <a href="{{url('contracts')}}"><i class="ti ti-list-tree"></i></a>
                                <a href="{{url('contracts-grid')}}" class="active"><i class="ti ti-grid-dots"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /Filter -->

                  
                    @livewire('contractsgrid')
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->
    @component('components.model-popup')
    @endcomponent
@endsection
