<?php $page = 'email-settings'; ?>
@extends('layout.mainlayout')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">

              
                @component('components.breadcrumb')
                    @slot('title')
                    Settings
                    @endslot
                    @slot('item2')
                    email-settings
                    @endslot
                    @endcomponent
    

                <!-- Settings Menu -->
                @component('components.settings-menu')
                @endcomponent
                <!-- /Settings Menu -->

                <div class="row">
                    <div class="col-xl-3 col-lg-12 theiaStickySidebar">

                        <!-- Settings Sidebar -->
                        <div class="card">
                            <div class="card-body">
                                <div class="settings-sidebar">
                                    <h4 class="fw-semibold mb-3">Other Settings</h4>
                                    <div class="list-group list-group-flush settings-sidebar">
                                        <a href="{{url('email-settings')}}" class="fw-medium active">Email Settings</a>
                                        <a href="{{url('sms-gateways')}}" class="fw-medium">SMS Gateways</a>
                                        <a href="{{url('gdpr-cookies')}}" class="fw-medium">GDPR Cookies</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Settings Sidebar -->

                    </div>

                    <div class="col-xl-9 col-lg-12">

                        <!-- Settings Info -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h4 class="fs-20">Email Settings</h4>
                                    <a href="javascript:void(0)" class="btn-add" data-bs-toggle="modal" data-bs-target="#add_mail"><i class="ti ti-mail"></i></a>
                                </div>
                                <div class="row">

                                    @livewire('emailsettings')
                                </div>
                            </div>
                        </div>
                        <!-- /Settings Info -->

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