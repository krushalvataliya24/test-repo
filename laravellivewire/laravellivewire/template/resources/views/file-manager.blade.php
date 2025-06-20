<?php $page = 'file-manager'; ?>
@extends('layout.mainlayout')
@section('content')

<div class="page-wrapper notes-page-wrapper file-manager">
    <div class="content">


        <div class="page-header page-add-notes d-flex align-items-center justify-content-between">
            <div class="add-item d-flex align-items-center">
                <div class="page-title">
                    <h4>File Manager</h4>
                    <p>Manage your files</p>
                </div>
                <a id="toggle_btn2" class="notes-tog" href="javascript:void(0);">
                    <i class="fas fa-chevron-left"></i>
                </a>
            </div>
            <div class="d-sm-flex align-items-center">
                <div class="form-sort owned-by w-auto">
                    <span><i data-feather="sliders" class="info-img"></i></span>
                    <select class="select">
                        <option>Owned By Me</option>
                        <option>Owned by Anyone</option>
                        <option>Not Owned by Me</option>
                    </select>
                </div>
                <a href="#" class="btn btn-primary btn-added" data-bs-toggle="modal" data-bs-target="#upload-file"><span class="me-1 d-flex align-items-center"><i data-feather="upload" class="feather-16"></i></span>Upload Files</a>
            </div>
        </div>

       
        @livewire('filemanager')

    </div>
    <!-- /Content -->
        
</div>
<!-- /Page Wrapper -->
@component('components.model-popup')
@endcomponent
@endsection