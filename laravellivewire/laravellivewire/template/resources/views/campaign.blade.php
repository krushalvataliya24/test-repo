<?php $page = 'campaign'; ?>
@extends('layout.mainlayout')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content">

        <div class="row">
            <div class="col-md-12">

                @component('components.breadcrumb')
                @slot('title')
                Campaign
                @endslot
                @slot('item1')
                123
                @endslot
                @slot('item2')
                campaign
                @endslot
                @endcomponent

                <!-- Campaign Status -->
                <div class="row">
                    <div class="col-xl-3 col-lg-6">
                        <div class="campaign-box bg-danger-light">
                            <div class="campaign-img">
                                <span>
                                    <i class="ti ti-brand-campaignmonitor"></i>
                                </span>
                                <p>Campaign</p>
                            </div>
                            <h2>474</h2>
                        </div>
                    </div>							
                    <div class="col-xl-3 col-lg-6">
                        <div class="campaign-box bg-warning-light">
                            <div class="campaign-img">
                                <span>
                                    <i class="ti ti-send"></i>
                                </span>
                                <p>Sent</p>
                            </div>
                            <h2>454</h2>
                        </div>
                    </div>						
                    <div class="col-xl-3 col-lg-6">
                        <div class="campaign-box bg-purple-light">
                            <div class="campaign-img">
                                <span>
                                    <i class="ti ti-brand-feedly"></i>
                                </span>
                                <p>Opened</p>
                            </div>
                            <h2>658</h2>
                        </div>
                    </div>					
                    <div class="col-xl-3 col-lg-6">
                        <div class="campaign-box bg-success-light">
                            <div class="campaign-img">
                                <span>
                                    <i class="ti ti-brand-pocket"></i>
                                </span>
                                <p>Completed</p>
                            </div>
                            <h2>747</h2>
                        </div>
                    </div>
                </div>
                <!-- /Campaign Status -->

                <!-- Campaign Tab -->
                <div class="campaign-tab">
                    <ul class="nav">
                        <li>
                            <a href="{{url('campaign')}}" class="active">Active Campaign<span>24</span></a>
                        </li>
                        <li>
                            <a href="{{url('campaign-complete')}}">Completed Campaign</a>
                        </li>
                        <li>
                            <a href="{{url('campaign-archieve')}}">Archived Campaign</a>
                        </li>
                    </ul>
                </div>
                <!-- Campaign Tab -->

				
                @livewire('campaign')
            </div>
        </div>

    </div>
</div>
<!-- /Page Wrapper -->


@component('components.model-popup')
@endcomponent
@endsection