<?php $page = 'preference'; ?>
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
                    preference
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
                                        <h4 class="fw-semibold mb-3">Website Settings</h4>
                                        <div class="list-group list-group-flush settings-sidebar">
                                            <a href="{{url('company-settings')}}" class="fw-medium">Company Settings</a>
                                            <a href="{{url('localization')}}" class="fw-medium">Localization</a>
                                            <a href="{{url('prefixes')}}" class="fw-medium">Prefixes</a>
                                            <a href="{{url('preference')}}" class="fw-medium active">Preference</a>
                                            <a href="{{url('appearance')}}" class="fw-medium">Appearance</a>
                                            <a href="{{url('language')}}" class="fw-medium">Language</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Settings Sidebar -->

                        </div>

                        <div class="col-xl-9 col-lg-12">

                           
                            @livewire('preference')


                        </div>
					</div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
