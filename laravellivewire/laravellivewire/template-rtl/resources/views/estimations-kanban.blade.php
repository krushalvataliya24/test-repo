<?php $page = 'estimations-kanban'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <div class="row">
                <div class="col-md-12">
                    @component('components.breadcrumb')
                        @slot('title')
                            Estimations
                        @endslot
                        @slot('item1')
                            123
                        @endslot
                        @slot('item2')
                            estimations-kanban
                        @endslot
                    @endcomponent

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
                                                    <a href="{{url('estimations-kanban')}}" class="btn btn-primary">Filter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-icons">
                                <a href="{{url('estimations')}}"><i class="ti ti-list-tree"></i></a>
                                <a href="{{url('estimations-kanban')}}" class="active"><i class="ti ti-grid-dots"></i></a>
                            </div>
                        </div>	
                    </div>
                    <!-- /Filter -->

                  
                    @livewire('estimationskanban')

                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->
    @component('components.model-popup')
    @endcomponent
@endsection
