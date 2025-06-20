<?php $page = 'gdpr-cookies'; ?>
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
                gdpr-cookies
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
                                        <a href="{{url('email-settings')}}" class="fw-medium">Email Settings</a>
                                        <a href="{{url('sms-gateways')}}" class="fw-medium">SMS Gateways</a>
                                        <a href="{{url('gdpr-cookies')}}" class="fw-medium active">GDPR Cookies</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Settings Sidebar -->
                    </div>
                    <div class="col-xl-9 col-lg-12">

                     
                        @livewire('gdprcookies')

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Page Wrapper -->


@endsection