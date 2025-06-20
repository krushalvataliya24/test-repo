<?php $page = 'pages'; ?>
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
                                <h4 class="page-title">Pages<span class="count-title">123</span></h4>
                            </div>
                            <div class="col-4 text-end">
                                <div class="head-icons">
                                    <a href="{{ url('pages') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Collapse" id="collapse-header"><i
                                            class="ti ti-chevrons-up"></i>
									</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

					<div class="card">

						@livewire('pages')
						</div>
        		</div>
    		</div>
		</div>
	</div>
    <!-- /Page Wrapper -->
    @component('components.model-popup')
    @endcomponent
@endsection
