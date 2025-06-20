<?php $page = 'security'; ?>
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
                            security
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
                                        <h4 class="fw-semibold mb-3">General Settings</h4>
                                        <div class="list-group list-group-flush settings-sidebar">
                                            <a href="{{url('profile')}}" class="fw-medium">Profile</a>
                                            <a href="{{url('security')}}" class="fw-medium active">Security</a>
                                            <a href="{{url('notifications')}}" class="fw-medium">Notifications</a>
                                            <a href="{{url('connected-apps')}}" class="fw-medium">Connected Apps</a>
                                        </div>
                                    </div>
                                </div>
							</div>
                            <!-- /Settings Sidebar -->

                        </div>

                        <div class="col-xl-9 col-lg-12">

                            @livewire('security')

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
