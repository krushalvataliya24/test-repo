<?php $page = 'notes'; ?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper notes-page-wrapper">
    <div class="content">

        <div class="page-header page-add-notes  flex-sm-row flex-column">
            <div class="add-item d-flex">
                <div class="page-title">
                    <h4>Notes</h4>
                    <h6 class="mb-0">Manage your notes</h6>
                </div>							
                <a id="toggle_btn2" class="notes-tog" href="javascript:void(0);">
                    <i class="fas fa-chevron-left"></i>
                </a>
            </div>
            <div class="d-flex flex-sm-row flex-column align-items-sm-center align-items-start">
                <div class="form-sort me-2 mb-sm-0 mb-3">
                    <i data-feather="sliders" class="info-img"></i>
                    <select class="select">
                        <option>Sort by Date</option>
                        <option>Ascending </option>
                        <option>Descending</option>
                        <option>Recently Viewed </option>
                        <option>Recently Added</option>
                        <option>Creation Date </option>
                    </select>
                </div>
                <div class="page-btn">
                    <a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#note-units"><i data-feather="plus-circle" class="me-2"></i> Add Note</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-md-12 sidebars-right theiaStickySidebar section-bulk-widget">
                <div class="notes-dash">
                    <div class="notes-top-head">
                        <h5> <i data-feather="file-text" class="feather-file-text"></i> Notes</h5>
                    </div>
                    <div class="notes-top-head-submenu">
                        <div class="nav flex-column nav-pills todo-inbox" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link todo-tab todo-inbox active d-flex align-items-center" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true"> <i data-feather="inbox" class="feather-inbox"></i>All Notes 
                                <span class="ms-auto">
                                    <span>2</span>
                                </span>											
                            </button>
                            <button class="nav-link todo-tab-btn todo-inbox" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"> <i data-feather="star" class="feather-star"></i> Important</button>
                            <button class="nav-link todo-tab todo-inbox mb-0" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">  <i data-feather="trash-2" class="feather-trash-2"></i>Trash</button>
                          </div>
                    </div>
                    <div class="content-submenu-tag">
                        <h6>Tags</h6>
                        <ul class="tags-list">
                            <li class="personal">
                                <a href="javascript:void(0);">
                                    <span><i class="fas fa-square"></i></span>
                                    Pending
                                </a>
                           </li>
                            <li class="social">
                                <a href="javascript:void(0);">
                                    <span><i class="fas fa-square"></i></span>
                                    Onhold
                                </a>
                            </li>
                            <li class="public">
                                <a href="javascript:void(0);">
                                    <span><i class="fas fa-square"></i></span>
                                    Inprogress
                                </a>
                            </li>

                            <li class="work">
                                <a href="javascript:void(0);">
                                    <span><i class="fas fa-square"></i></span>
                                    Done
                                </a>
                            </li>										

                        </ul>


                        <h6>Priority</h6>
                        <ul class="priority-list">
                            <li class="medium">
                                <a href="javascript:void(0);">
                                    <span><i class="fas fa-square"></i></span>
                                    Medium
                                </a>
                            </li>
                            <li class="high">
                                <a href="javascript:void(0);">
                                    <span><i class="fas fa-square"></i></span>
                                    High
                                </a>
                            </li>
                            <li class="low">
                                <a href="javascript:void(0);">
                                    <span><i class="fas fa-square"></i></span>
                                    Low
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

          
            @livewire('notes')
        </div>					
    </div>
</div>
@component('components.model-popup')
@endcomponent
@endsection