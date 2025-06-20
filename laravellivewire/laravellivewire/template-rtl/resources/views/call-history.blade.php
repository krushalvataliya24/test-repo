<?php $page = 'call-history'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-header menu">
                    <div class="page-title">
                        <h4>Call History</h4>
                        <h6>Manage your products</h6>
                    </div>
                </div>
            </div>

          
            @livewire('callhistory')
        </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection
