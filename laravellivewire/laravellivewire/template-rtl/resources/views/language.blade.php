<?php $page = 'language'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-md-12">

                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="page-title">Settings</h4>
                            </div>
                            <div class="col-4 text-end">
                                <div class="head-icons">
                                    <a href="{{ url('language') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Collapse" id="collapse-header"><i
                                            class="ti ti-chevrons-up"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

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
											<a href="{{url('preference')}}" class="fw-medium">Preference</a>
											<a href="{{url('appearance')}}" class="fw-medium">Appearance</a>
											<a href="{{url('language')}}" class="fw-medium active">Language</a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Settings Sidebar -->

						</div>

						<div class="col-xl-9 col-lg-12">

						
                            @livewire('language')
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
