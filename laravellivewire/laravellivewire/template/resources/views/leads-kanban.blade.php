<?php $page = 'leads-kanban'; ?>
@extends('layout.mainlayout')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content">

        <div class="row">
            <div class="col-md-12">

               	
                @component('components.breadcrumb')
                @slot('title')
                Leads
                @endslot
                @slot('item1')
                123
                @endslot
                @slot('item2')
                leads-kanban
                @endslot
               @endcomponent				

           
			<!-- Filter -->
            <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 mb-4">
                <div class="d-flex align-items-center flex-wrap row-gap-2">
                    <div class="form-sorts dropdown me-2">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown"  data-bs-auto-close="outside"><i class="ti ti-filter-share"></i>Filter</a>
                        <div class="filter-dropdown-menu dropdown-menu dropdown-menu-start">
                            <div class="filter-set-view">
                                <div class="filter-set-head">
                                    <h4><i class="ti ti-filter-share"></i>Filter</h4>
                                </div>
                                <div class="accordion" id="accordionExample">
                                    <div class="filter-set-content">
                                        <div class="filter-set-content-head">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Lead Name</a>
                                        </div>
                                        <div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
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
                                            <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#company" aria-expanded="false" aria-controls="company">Company Name</a>
                                        </div>
                                        <div class="filter-set-contents accordion-collapse collapse" id="company" data-bs-parent="#accordionExample">
                                            <div class="filter-content-list">
                                                <div class="mb-2 icon-form">
                                                    <span class="form-icon"><i class="ti ti-search"></i></span>
                                                    <input type="text" class="form-control" placeholder="Search Company">
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
                                            <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#Status" aria-expanded="false" aria-controls="Status">Lead Status</a>
                                        </div>
                                        <div class="filter-set-contents accordion-collapse collapse" id="Status" data-bs-parent="#accordionExample">
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
                                            <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#date" aria-expanded="false" aria-controls="date">Created Date</a>
                                        </div>
                                        <div class="filter-set-contents accordion-collapse collapse" id="date" data-bs-parent="#accordionExample">
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
                                            <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#owner" aria-expanded="false" aria-controls="owner">Lead Owner</a>
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
                                            <a href="{{url('leads')}}" class="btn btn-primary">Filter</a>
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
                                <a href="{{url('leads')}}"><i class="ti ti-list-tree"></i></a>
                                <a href="{{url('leads-kanban')}}" class="active"><i class="ti ti-grid-dots"></i></a>
                            </div>
                        </li>																	
                        <li>
                            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add"><i class="ti ti-square-rounded-plus me-2"></i>Add Leads</a>
                        </li>
                    </ul>
                </div>
			</div>
			<!-- /Filter -->

         
            @livewire('leadskanban')

            </div>
        </div>
    </div>
</div>
<!-- /Page Wrapper -->
@component('components.model-popup')
@endcomponent
@endsection